<?php

namespace App\Actions\Team;

use App\Actions\Translation\SyncTranslationAction;
use App\Models\Team;
use App\Services\File\FileService;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Lorisleiva\Actions\Concerns\AsAction;
use Throwable;

class StoreTeamAction
{
    use AsAction;

    public function __construct(
        private readonly FileService $fileService,
        private readonly SyncTranslationAction $syncTranslationAction,
    )
    {
    }

    /**
     * @param array{
     *     name:string,
     *     job:string,
     *     body?:string,
     *     special:boolean,
     *     social_media:array<string>,
     *     image:string,
     *     slug:string,
     * } $payload
     * @return Team
     * @throws Throwable
     */
    public function handle(array $payload): Team
    {
        return DB::transaction(function () use ($payload) {
            $model = Team::create(Arr::only($payload, ['name', 'job', 'special', 'slug']));
            $this->fileService->addMedia($model, Arr::get($payload, 'image'));
            $this->syncTranslationAction->handle($model, Arr::only($payload, ['body']));

            $model->extra()->set('social_media', Arr::get($payload, 'config.social_media') ?? []);
            $model->extra()->set('extra_info', Arr::get($payload, 'config.info') ?? []);
            $model->save();

            return $model->refresh();
        });
    }
}
