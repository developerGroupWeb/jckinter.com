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

/* Currency Converter routes */

Route::get('/', 'CurrencyConverter\\CurrencyConverterController@index')->name('currencyconverter.index');

Route::post('/', 'CurrencyConverter\\CurrencyConverterController@store')->name('currencyconverter.store');


Route::get('test', 'CurrencyConverter\\CurrencyConverterController@test')->name('currencyconverter.test');
Route::post('test', 'CurrencyConverter\\CurrencyConverterController@loaddata')->name('currencyconverter.loaddata');
