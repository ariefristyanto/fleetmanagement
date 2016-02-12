<?php

namespace App\Providers;

use App\Models\User;
use App\Policies\UserPolicy;
use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        User::class => UserPolicy::class,
    ];

    /**
     * Register any application authentication / authorization services.
     *
     * @param  \Illuminate\Contracts\Auth\Access\Gate  $gate
     * @return void
     */
    public function boot(GateContract $gate)
    {
        $this->registerPolicies($gate);

        // ALL Resource specific Authorization should use Policy files (app/Policies/...)
        // and register in $policies

        // For everything else, we specify authorizations below:

        $gate->define('menu-user', function ($current_user) {return $current_user->hasPermission('menu-user');});
        $gate->define('menu-company', function ($current_user) {return $current_user->hasPermission('menu-company');});
        $gate->define('menu-vehicle', function ($current_user) {return $current_user->hasPermission('menu-vehicle');});


    }
}
