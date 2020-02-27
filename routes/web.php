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

Route::get('login', 'Home\\HomeController@login')->name('home.login');
Route::post('login', 'Home\\HomeController@store_login')->name('home.login.store');

Route::get('register', 'Home\\HomeController@register')->name('home.register');
Route::post('register', 'Home\\HomeController@register_store')->name('home.register.store');


Route::get('thanks', 'Home\\HomeController@thanks')->name('thanks');



/* Currency Converter routes */

Route::get('currencyconverter', 'CurrencyConverter\\CurrencyConverterController@index')->name('currencyconverter.index');

Route::post('currencyconverter', 'CurrencyConverter\\CurrencyConverterController@store')->name('currencyconverter.store');


/* Checkout routes */

Route::resource('checkout', 'checkout\\CheckoutController');







Route::get('test', 'CurrencyConverter\\CurrencyConverterController@test')->name('currencyconverter.test');
Route::post('test', 'CurrencyConverter\\CurrencyConverterController@loaddata')->name('currencyconverter.loaddata');
