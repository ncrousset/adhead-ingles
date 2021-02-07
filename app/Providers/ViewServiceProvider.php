<?php

namespace App\Providers;

use App\View\Components\AppLayout;
use App\View\Components\GuestLayout;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('guest-layout', GuestLayout::class);
        View::composer('app-layout', AppLayout::class);
    }
}
