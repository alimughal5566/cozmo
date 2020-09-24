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

        view()->composer('layouts.top-bar', function($view) {
            $data=DB::table('property_address')->get();
            $view->with('data', $data);
        });
        view()->composer('layouts.header', function($view) {
            $myvar=DB::table('blog')->get();
            $myvar2=DB::table('blog')->limit(4)->get();
            $mostPopularBlog=DB::table('blog')->orderBy('date_created' , 'desc')->limit(3)->get();
            $rest = [$myvar,$myvar2,$mostPopularBlog ];
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
