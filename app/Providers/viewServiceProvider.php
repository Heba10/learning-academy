<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Category;
use App\Setting;
class viewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        view()->composer('front.includes.header' ,function($view){
        $view->with('cats',Category::select('id','name')->get());
        $view->with('sett',Setting::select('logo','favicon')->first());
    
    
 });

 view()->composer('front.includes.footer' ,function($view){
    
    $view->with('sett',Setting::first());


});

     
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
