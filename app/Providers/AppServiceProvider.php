<?php

namespace App\Providers;

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
        \Illuminate\Support\Facades\Gate::define('manage-product', function ($user) {
            return true;
        });

        \Illuminate\Support\Facades\Gate::define('export-product', function ($user) {
            return $user->role === 'admin';
        });

        \Illuminate\Support\Facades\Gate::define('manage-category', function ($user) {
            return $user->role === 'admin';
        });
    }
}
