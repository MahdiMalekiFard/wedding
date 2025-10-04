<?php

namespace App\Actions\Portfolio;

use App\Models\Portfolio;
use Illuminate\Support\Facades\DB;
use Lorisleiva\Actions\Concerns\AsAction;
use Throwable;

class DeletePortfolioAction
{
    use AsAction;

    /**
     * @throws Throwable
     */
    public function handle(Portfolio $portfolio): bool
    {
        return DB::transaction(function () use ($portfolio) {
            return $portfolio->delete();
        });
    }
}
