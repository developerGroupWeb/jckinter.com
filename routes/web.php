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

Route::get('jck-admin', function() {
    return view('en.admin.jck-admin');
});

Route::prefix('en')->group(function (){

    App::setLocale(request()->segment(1));


    /* Home routes */
    Route::get('/', 'Home\\HomeController@index')->name('home.index');

    /*Contact routes*/

    Route::get('contact', 'Contact\\ContactController@index')->name('contact.index');
    Route::post('contact', 'Contact\\ContactController@store')->name('contact.store');

    /* About us  routes*/

    Route::get('about-us', 'AboutUs\\AboutUsController@index')->name('about.us.index');


    Route::middleware(['user.connected'])->group(function (){

        /* Currency Converter routes */
        Route::get('currencyconverter', 'CurrencyConverter\\CurrencyConverterController@index')->name('currencyconverter.index');

        Route::post('currencyconverter', 'CurrencyConverter\\CurrencyConverterController@store')->name('currencyconverter.store');

        Route::delete('currencyconverter/{currency_id}', 'CurrencyConverter\\CurrencyConverterController@destroy')->name('currencyconverter.destroy');

        Route::get('thanks', 'CurrencyConverter\\CurrencyConverterController@thanks')->name('thanks');


        /* Checkout routes */
        Route::get('checkout', 'checkout\\CheckoutController@index')->name('checkout.index');
        Route::put('checkout', 'checkout\\CheckoutController@update')->name('checkout.update');


        /* Dashboard*/
        Route::get('dashboard', 'Dashboard\\DashboardController@index')->name('dashboard.index');
        Route::get('logout', 'Dashboard\\DashboardController@logout')->name('logout');

        Route::post('photo_receiver', 'Dashboard\\UserReceiverController@photo_receiver')->name('photo.receiver');
        Route::post('user_receiver', 'Dashboard\\UserReceiverController@user_receiver')->name('user.receiver.create');
        Route::put('user_receiver', 'Dashboard\\UserReceiverController@user_receiver')->name('user.receiver.update');

        Route::get('help-contact', 'Dashboard\\HelpContactController@index')->name('help.contact.index');
        Route::post('help-contact', 'Dashboard\\HelpContactController@store')->name('help.contact');

    });



    Route::middleware(['user.not.connected'])->group(function (){


        /* Authentic routes */
        Route::get('login', 'Auth\\LoginController@index')->name('login.index');
        Route::post('login', 'Auth\\LoginController@store')->name('login.store');

        Route::get('register', 'Auth\\RegisterController@index')->name('register.index');
        Route::post('register', 'Auth\\RegisterController@store')->name('register.store');
        Route::get('register/confirm/{id_confirmation}', 'Auth\\RegisterController@confirm')->name('register.confirm');

        Route::get('forgot-password', 'Auth\\ForgotPasswordController@index')->name('forgot.password.index');
        Route::post('forgot-password', 'Auth\\ForgotPasswordController@store')->name('forgot.password.store');

        Route::get('reset-password/{id_confirmation}', 'Auth\\ResetPasswordController@index')->name('reset.password.index');
        Route::post('reset-password/{id_confirmation}', 'Auth\\ResetPasswordController@store')->name('reset.password.store');


    });


});







