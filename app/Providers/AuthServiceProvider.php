<?php

namespace App\Providers;

use App\Models\Event;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\User;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('interactAsMaster', function (User $user) {
            return ($user->isAdmin() && $user->id == Event::all()->count() + 1);
        });

        Gate::define('interactAsAdmin', function (User $user) {
            return ($user->isAdmin());
        });

        Gate::define('interactAsEventAdmin', function (User $user, Event $event) {
            return ($user->isAdmin() && $user->id == $event->id);
        });
    }
}
