<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel  
{
  protected $middleware = [
    \Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode::class,
  ];

  protected $middlewareGroups = [
    'web' => [
      \App\Http\Middleware\EncryptCookies::class,
      \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
      \Illuminate\Session\Middleware\StartSession::class,
      \Illuminate\View\Middleware\ShareErrorsFromSession::class,
      \App\Http\Middleware\VerifyCsrfToken::class,
    ],

    'admin' => [
      \App\Http\Middleware\EncryptCookies::class,
      \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
      \Illuminate\Session\Middleware\StartSession::class,
      \Illuminate\View\Middleware\ShareErrorsFromSession::class,
      \App\Http\Middleware\VerifyCsrfToken::class,
      \App\Http\Middleware\Admin::class,
    ],

    'api' => [
      \App\Http\Middleware\AllowOrigin::class,
      // 'throttle:60,1',
    ],
  ];

  protected $routeMiddleware = [
    'auth'       => \App\Http\Middleware\Authenticate::class,
    'auth.basic' => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
    'guest'      => \App\Http\Middleware\RedirectIfAuthenticated::class,
    'throttle'   => \Illuminate\Routing\Middleware\ThrottleRequests::class,
    'cors'       => \App\Http\Middleware\AllowOrigin::class,
    'adminRole'  => \App\Http\Middleware\Admin::class,
  ];
}