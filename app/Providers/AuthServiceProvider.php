<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('access-admin', function ($user) {
            if ($user->auth_level > 2) {
                return true;
            } else {
               return false;
            }

        });

        Gate::define('access-mngr', function ($user) {
            if ($user->auth_level > 1) {
                return true;
            } else {
                return false;
            }

        });

        Gate::define('access-user', function ($user) {
            if ($user->auth_level > 0) {
                return true;
            } else {
                return false;
            }

        });

        //
    }
}
