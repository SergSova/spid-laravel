<?php

namespace App\Providers;

use App\Observers\StaticPageObserver;
use App\StaticPage;
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
//        StaticPage::observe(StaticPageObserver::class);
        Schema::defaultStringLength(191);
        Gate::define('admin',function ($user){
            return $user->viewer;
        });
        Gate::define('superAdmin',function ($user){
            return $user->admin;
        });
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
