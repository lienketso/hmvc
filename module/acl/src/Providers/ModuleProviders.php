<?php


namespace Acl\Providers;
use Illuminate\Support\ServiceProvider;
use Base\Supports\Helper;

class ModuleProviders extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../../resources/views', 'wadmin-acl');
        $this->loadMigrationsFrom(__DIR__.'/../../database/migrations');
    }

    public function register()
    {
        //Load helpers
        Helper::loadModuleHelpers(__DIR__);

        $this->mergeConfigFrom(
            __DIR__ . '/../../config/acl.php', 'acl'
        );

        $this->app->register(RouteProvider::class);
        $this->app->register(HookProvider::class);
        $this->app->register(InstallModuleProvider::class);
    }
}
