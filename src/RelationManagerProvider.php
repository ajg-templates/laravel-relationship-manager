<?php
namespace Cyrex\SSO;

use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Gate;

use Cyrex\SSO\Controllers\User;
use Cyrex\SSO\Controllers\Guard;
use Cyrex\SSO\Controllers\Provider;

class RelationManagerProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        include __DIR__.'/routes/web.php';
        $this->loadViewsFrom(__DIR__.'/resources/views/pages', 'relation-manager');
    }

    /**
     * Register the application services.
     */
    public function register()
    {
    }
}
