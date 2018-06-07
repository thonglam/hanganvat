<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

USE App\LoaiMonAn;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
     public function boot()
        {
    //     view() -> composer('header',function($view){
    //         $dang_monan = ldangmonan::all();
    //         $view->with('dang_monan','$dang_monan');

    //     });


    
    //         loaimonan

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
