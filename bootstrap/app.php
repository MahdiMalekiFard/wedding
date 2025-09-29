<?php

use App\Http\Middleware\AdminPanelMiddleware;
use App\Http\Middleware\Cors;
use App\Http\Middleware\ForceTransToFallbackForAdmin;
use App\Http\Middleware\SetArea;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
                  ->withRouting(
                      web: [
                          __DIR__ . '/../routes/web.php',
                          __DIR__ . '/../routes/admin.php',
                      ],
                      commands: __DIR__ . '/../routes/console.php',
                      health: '/up',
                  )
                  ->withMiddleware(function (Middleware $middleware): void {
                      $middleware->appendToGroup('web', [
                          ForceTransToFallbackForAdmin::class,
                      ]);

                      $middleware->alias([
                          'area'                => SetArea::class,
                          'admin.panel'         => AdminPanelMiddleware::class,
                          'admin.transFallback' => ForceTransToFallbackForAdmin::class,
                          'cors'                => Cors::class,
                      ]);
                  })
                  ->withExceptions(function (Exceptions $exceptions): void {
                      //
                  })->create();
