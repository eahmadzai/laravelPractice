<?php

namespace App\Providers;

use App\Http\View\Composers\AdminSessionComposer;
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
        //
        View::composer(['cms.components.topbar'], AdminSessionComposer::class);
    }
}
