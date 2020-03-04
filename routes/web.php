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



Route::pattern('lang', 'en|fr');

Route::prefix('en')->group(function (){

    App::setLocale(request()->segment(1));


    /* Home routes */
    Route::get('/', 'Home\\HomeController@index')->name('home.index');


    Route::middleware(['user.connected'])->group(function (){

        /* Currency Converter routes */
        Route::get('currencyconverter', 'CurrencyConverter\\CurrencyConverterController@index')->name('currencyconverter.index');

        Route::post('currencyconverter', 'CurrencyConverter\\CurrencyConverterController@store')->name('currencyconverter.store');

        Route::delete('currencyconverter/{currency_id}', 'CurrencyConverter\\CurrencyConverterController@destroy')->name('currencyconverter.destroy');

        Route::get('thanks', 'CurrencyConverter\\CurrencyConverterController@thanks')->name('thanks');


        /* Checkout routes */
        Route::resource('checkout', 'checkout\\CheckoutController');


        /* Dashboard*/
        Route::get('dashboard', 'Dashboard\\DashboardController@index')->name('dashboard.index');
        Route::get('logout', 'Dashboard\\DashboardController@logout')->name('logout');

        Route::post('photo_receiver', 'Dashboard\\UserReceiverController@photo_receiver')->name('photo.receiver');
        Route::post('user_receiver', 'Dashboard\\UserReceiverController@user_receiver')->name('user.receiver');

    });



    Route::middleware(['user.not.connected'])->group(function (){


        /* Authentic routes */
        Route::get('login', 'Auth\\LoginController@index')->name('login.index');
        Route::post('login', 'Auth\\LoginController@store')->name('login.store');

        Route::get('register', 'Auth\\RegisterController@index')->name('register.index');
        Route::post('register', 'Auth\\RegisterController@store')->name('register.store');

        Route::get('forgot-password', 'Auth\\ForgotPasswordController@index')->name('forgot.password.index');
        Route::post('forgot-password', 'Auth\\ForgotPasswordController@store')->name('forgot.password.store');


    });


});




