<?php

namespace App\Providers;

use App\Models\LandingContent;
use Illuminate\Support\Facades\View;
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
        View::composer(['auth.login', 'auth.register', 'wizard'], function ($view) {
            $view->with('landing', LandingContent::current());
        });
    }
}
