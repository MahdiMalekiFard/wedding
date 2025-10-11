<?php

namespace App\Actions\Portfolio;

use App\Actions\Translation\SyncTranslationAction;
use App\Models\Portfolio;
use App\Services\File\FileService;
use App\Services\SeoOption\SeoOptionService;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Lorisleiva\Actions\Concerns\AsAction;
use Throwable;

class UpdatePortfolioAction
{
    use AsAction;

    public function __construct(
        private readonly SyncTranslationAction $syncTranslationAction,
        private readonly SeoOptionService $seoOptionService,
        private readonly FileService $fileService,
    ) {}


    /**
     * @param Portfolio $portfolio
     * @param array{
     *     title:string,
     *     body:string,
     *     published:boolean,
     *     category_id:int,
     *     slug:string,
     *     seo_title:string,
     *     seo_description:string,
     *     canonical?:string,
     *     old_url?:string,
     *     redirect_to?:string,
     *     robots_meta:string,
     *     image:string
     * }               $payload
     * @return Portfolio
     * @throws Throwable
     */
    public function handle(Portfolio $portfolio, array $payload): Portfolio
    {
        return DB::transaction(function () use ($portfolio, $payload) {
            $portfolio->update(Arr::only($payload, ['slug', 'published', 'category_id', 'view_count']));
            $this->syncTranslationAction->handle($portfolio, Arr::only($payload, ['title', 'body']));
            $this->seoOptionService->create($portfolio, Arr::only($payload, ['seo_title', 'seo_description', 'canonical', 'old_url', 'redirect_to', 'robots_meta']));
            $this->fileService->addMedia($portfolio, Arr::get($payload, 'image'));

            return $portfolio->refresh();
        });
    }
}
