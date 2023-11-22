<?php

namespace App\Providers;
use App\Models\User;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
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

        Gate::define('admin', function (User $user) {
            return $user->user_type === 'admin';
        });

        Gate::define('user', function (User $user) {
            return $user->user_type === 'user';
        });

        Gate::define('teacher', function (User $user) {
            return $user->user_type === 'teacher';
        });

        Gate::define('staff', function (User $user) {
            return $user->user_type === 'staff';
        });

    }
}
