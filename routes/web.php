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


Route::get('/', 'HomeController@index')->name('home');
Route::get('/aboutus', 'HomeController@aboutus')->name('aboutus');


Route::middleware(['guest:admin', 'guest:cashier'])->group(function () {
    Route::get('/admin/login', 'AdminController@showLoginForm')->name('admin.login');
    Route::get('/cashier/login', 'CashierController@showLoginForm')->name('cashier.login');
});


Route::middleware(['auth:admin'])->name('admin.')->prefix('admin')->group(function () {
    Route::get('/dashboard', 'AdminController@dashboard')->name('dashboard');
    Route::get('/profile', 'AdminController@profile')->name('profile');
    Route::get('/settings', 'AdminController@settings')->name('settings');
    Route::get('/changePassword', 'AdminController@changePassword')->name('changePassword');
    Route::get('/logout', 'AdminController@logout')->name('logout');


    Route::prefix('/contact')->name('contact.')->group(function () {
        Route::get('/index', 'ContactController@index')->name('index');
    });


    Route::prefix('/about')->name('about.')->group(function () {
        Route::get('/index', 'AboutController@index')->name('index');
        Route::get('/edit', 'AboutController@edit')->name('edit');

    });


    Route::prefix('/slider')->name('slider.')->group(function () {
        Route::get('/index', 'SliderController@index')->name('index');
        Route::get('/edit', 'SliderController@edit')->name('edit');
    });


    Route::prefix('/cashier')->name('cashier.')->group(function () {
        Route::get('/index', 'CashierController@index')->name('index');
        Route::get('/create', 'CashierController@create')->name('create');
        Route::get('/edit', 'CashierController@edit')->name('edit');
        Route::get('/delete', 'CashierController@delete')->name('delete');

    });

    Route::prefix('/category')->name('category.')->group(function () {
        Route::get('/index', 'CategoryController@index')->name('index');
        Route::get('/create', 'CategoryController@create')->name('create');
        Route::get('/edit', 'CategoryController@edit')->name('edit');
        Route::get('/delete', 'CategoryController@delete')->name('delete');

    });


    Route::prefix('/product')->name('product.')->group(function () {
        Route::get('/index', 'ProductController@index')->name('index');
        Route::get('/create', 'ProductController@create')->name('create');
        Route::get('/edit', 'ProductController@edit')->name('edit');
        Route::get('/delete', 'ProductController@delete')->name('delete');

    });



});




Route::middleware(['auth:cashier'])->name('cashier.')->prefix('cashier')->group(function () {
    Route::get('/profile', 'CashierController@profile')->name('profile');
    Route::get('/settings', 'CashierController@settings')->name('settings');
    Route::get('/changePassword', 'CashierController@changePassword')->name('changePassword');
    Route::get('/logout', 'CashierController@logout')->name('logout');

    Route::get('/sale', 'HomeController@sale')->name('sale');

});
