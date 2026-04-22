<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

        Gate::define('admin', function ($user) {
            return $user->role === 'admin';
        });

        Gate::define('user', function ($user) {
            return $user->role === 'user';
        });

        Gate::define('guest-or-user', function (?User $user) {
            return is_null($user) || $user->role === 'user';
        });

        if (app()->environment('production')) {
            URL::forceScheme('https');
        }
    }
}
