<?php


namespace Acl\Providers;

use App\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteProvider extends ServiceProvider
{
    protected $namespace = 'Acl\Http\Controllers';
    public function boot()
    {
        parent::boot();
    }

    public function map()
    {
        $this->mapWebRoutes();
        $this->mapApiRoutes();
    }

    protected function mapWebRoutes()
    {
        Route::group([
            'middleware' => 'web',
            'namespace' => $this->namespace
        ], function($router) {
            require __DIR__.'/../../routes/web.php';
        });
    }

    protected function mapApiRoutes()
    {
        Route::group([
            'middleware' => 'api',
            'namespace' => $this->namespace,
            'prefix' => 'api'
        ], function($router) {
            require __DIR__.'/../../routes/api.php';
        });
    }
}
