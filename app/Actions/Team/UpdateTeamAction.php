<?php

namespace App\Actions\Team;

use App\Actions\Translation\SyncTranslationAction;
use App\Models\Team;
use App\Services\File\FileService;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Lorisleiva\Actions\Concerns\AsAction;
use Throwable;

class UpdateTeamAction
{
    use AsAction;

    public function __construct(
        private readonly FileService $fileService,
        private readonly SyncTranslationAction $syncTranslationAction,
    ) {}

    /**
     * @param array{
     *     name:string,
     *     job:string,
     *     body?:string,
     *     special:boolean,
     *     social_media:array<string>,
     *     image:string,
     * } $payload
     * @throws Throwable
     */
    public function handle(Team $team, array $payload): Team
    {
        return DB::transaction(function () use ($team, $payload) {
            $team->update(Arr::only($payload, ['name', 'job', 'special']));

            $this->fileService->addMedia($team, Arr::get($payload, 'image'));
            $this->syncTranslationAction->handle($team, Arr::only($payload, ['body']));

            $team->extra()->set('social_media', Arr::get($payload, 'config.social_media') ?? []);
            $team->extra()->set('extra_info', Arr::get($payload, 'config.info') ?? []);
            $team->save();

            return $team->refresh();
        });
    }
}
