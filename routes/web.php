<?php

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

/* Home routes */

Route::get('/', 'Home\\HomeController@index')->name('home.index');


/* Authentic routes */

Route::get('login', 'Auth\\LoginController@index')->name('login.index');
Route::post('login', 'Auth\\LoginController@store')->name('login.store');

Route::get('register', 'Auth\\RegisterController@index')->name('register.index');
Route::post('register', 'Auth\\RegisterController@store')->name('register.store');

/* Currency Converter routes */

Route::get('currencyconverter', 'CurrencyConverter\\CurrencyConverterController@index')->name('currencyconverter.index');


Route::middleware(['auth.user'])->group(function (){

    /* Currency Converter routes */

    Route::post('currencyconverter', 'CurrencyConverter\\CurrencyConverterController@store')->name('currencyconverter.store')->middleware('auth.user');

    Route::delete('currencyconverter/{currency_id}', 'CurrencyConverter\\CurrencyConverterController@destroy')->name('currencyconverter.destroy');

    /* Checkout routes */

    Route::resource('checkout', 'checkout\\CheckoutController');


    Route::get('thanks', 'Home\\HomeController@thanks')->name('thanks');
});


