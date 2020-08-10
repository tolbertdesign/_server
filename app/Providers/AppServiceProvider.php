<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Gate::define('viewMailcoach', function ($user) {
            // return optional($user)->admin;
            return in_array($user->email, [
                'victor.tolbert@hey.com',
                'victor.tolbert@gmail.com',
            ]);
        });
    }
}
