<?php

namespace App\Providers;

use App\Observers\StaticPageObserver;
use App\StaticPage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        DB::listen(
            function ($query) {

//            dump($query->sql);
//                echo '<h1>'.$query->sql.'</h1>';

            }
        );
        Schema::defaultStringLength(191);
        Gate::define(
            'admin',
            function ($user) {
                return $user->viewer;
            }
        );
        Gate::define(
            'superAdmin',
            function ($user) {
                return $user->admin;
            }
        );
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
