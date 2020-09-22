<?php

namespace App\Providers;

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

        view()->composer('layouts.top-bar', function($view) {
            $data=DB::table('property_address')->get();
            $view->with('data', $data);
        });
        view()->composer('layouts.header', function($view) {
            $myvar=DB::table('blog')->get();
            $myvar2=DB::table('blog')->get();
            $rest = [$myvar,$myvar2];
//            $myvar =  'cvbnm,';
            $view->with('data' , $rest);
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
