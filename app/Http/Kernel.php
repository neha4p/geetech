<?php namespace HelloVideo\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{

    /**
     * The application's global HTTP middleware stack.
     *
     * @var array
     */
    protected $middleware = [
        'Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode',
        \HelloVideo\Http\Middleware\EncryptCookies::class,
        'Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse',
        'Illuminate\Session\Middleware\StartSession',
        'Illuminate\View\Middleware\ShareErrorsFromSession',
        \HelloVideo\Http\Middleware\VerifyCsrfToken::class,
    ];

    /**
     * The application's route middleware.
     *
     * @var array
     */
    protected $routeMiddleware = [
        'auth' => \HelloVideo\Http\Middleware\Authenticate::class,
        'auth.basic' => 'Illuminate\Auth\Middleware\AuthenticateWithBasicAuth',
        'can' => \Illuminate\Foundation\Http\Middleware\Authorize::class,
        'guest' => \HelloVideo\Http\Middleware\RedirectIfAuthenticated::class,
        'throttle' => \Illuminate\Routing\Middleware\ThrottleRequests::class,
        'secure' => \HelloVideo\Http\Middleware\Secure::class,
        'isAdmin' => \HelloVideo\Http\Middleware\isAdmin::class
    ];
}
