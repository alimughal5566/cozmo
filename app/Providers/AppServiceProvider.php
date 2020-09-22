<?php

namespace App\Providers;

use Illuminate\Support\Facades\DB;
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
//        view()->share("layouts.header", [
//            "data" => "123"
//        ]);

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
