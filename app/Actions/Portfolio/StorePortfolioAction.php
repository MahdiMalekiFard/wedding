<?php

namespace App\Actions\Portfolio;

use App\Actions\Translation\SyncTranslationAction;
use App\Models\Portfolio;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Lorisleiva\Actions\Concerns\AsAction;
use Throwable;

class StorePortfolioAction
{
    use AsAction;

    public function __construct(
        private readonly SyncTranslationAction $syncTranslationAction,
    ) {}

    /**
     * @param array{
     *     title:string,
     *     description:string
     * } $payload
     * @return Portfolio
     * @throws Throwable
     */
    public function handle(array $payload): Portfolio
    {
        return DB::transaction(function () use ($payload) {
            $model =  Portfolio::create($payload);
            $this->syncTranslationAction->handle($model, Arr::only($payload, ['title', 'description']));

            return $model->refresh();
        });
    }
}
