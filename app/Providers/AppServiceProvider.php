<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

USE App\FoodType;

use App\Cart;

use Session;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
     public function boot()
        {
            view()->composer('header',function($view){
            $dang_monan = FoodType::all();

                



                $view->with('dang_monan',$dang_monan);
             });

                view()->composer('header', function($view){

                    if(Session('cart')){
                    $oldCart = Session::get('cart');
                    $cart = new Cart($oldCart);
                    $view->with(['cart'=>Session::get('cart'),'monan_cart'=>$cart->items,'totalPrice'=>$cart->totalPrice,'totalQty'=>$cart->totalQty]);

                    }

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
