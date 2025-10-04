<?php

namespace App\Actions\Portfolio;

use App\Actions\Translation\SyncTranslationAction;
use App\Models\Portfolio;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Lorisleiva\Actions\Concerns\AsAction;
use Throwable;

class UpdatePortfolioAction
{
    use AsAction;

    public function __construct(
        private readonly SyncTranslationAction $syncTranslationAction,
    ) {}


    /**
     * @param Portfolio $portfolio
     * @param array{
     *     title:string,
     *     description:string
     * }               $payload
     * @return Portfolio
     * @throws Throwable
     */
    public function handle(Portfolio $portfolio, array $payload): Portfolio
    {
        return DB::transaction(function () use ($portfolio, $payload) {
            $portfolio->update($payload);
            $this->syncTranslationAction->handle($portfolio, Arr::only($payload, ['title', 'description']));

            return $portfolio->refresh();
        });
    }
}
