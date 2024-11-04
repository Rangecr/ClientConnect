<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->registerPolicies();

        Gate::define('delete', function ($user) {
            return $user->isAdmin();
        });

        Gate::define('view', function ($user) {
            return $user->isAdmin();
        });

        Gate::define('add', function ($user) {
            return $user->isAdmin();
        });

    }
}
