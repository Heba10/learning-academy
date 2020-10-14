<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::namespace('Front')->group(function(){

Route::get('/', 'HomePageController@index')->name('front.homepage');

Route::get('/cat/{id}', 'CourseController@cat')->name('front.cat');
Route::get('/cat/{id}/course/{c_id}', 'CourseController@show')->name('front.show');

Route::get('/contact', 'ContactController@index')->name('front.contact');
});


Route::namespace('Admin')->prefix('dashboard')->group(function(){
    
    Route::get('/login', 'AuthController@login')->name('admin.login');
    Route::post('/do-login', 'AuthController@doLogin')->name('admin.doLogin');
    Route::get('//logout', 'AuthController@logout')->name('admin.logout');

    Route::get('/', 'HomeController@index')->name('admin.home');





});