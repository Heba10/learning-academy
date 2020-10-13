<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Category;
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
