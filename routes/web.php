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



Route::pattern('language', 'en|fr');

Route::redirect('/', '/en');

Route::group(['prefix' => '{language}'],function (){


    /* Home routes */
    Route::get('/', 'Home\\HomeController@index')->name('home.index');

    /*Contact routes*/

    Route::get('contact', 'Contact\\ContactController@index')->name('contact.index');
    Route::post('contact', 'Contact\\ContactController@store')->name('contact.store');

    /* About us  routes*/

    Route::get('about-us', 'AboutUs\\AboutUsController@index')->name('about.us.index');


    Route::post('get-currency-data', 'CurrencyConverter\\CurrencyConverterController@get_currency_data')->name('currencyconverter.data');

    Route::get('logout', 'Dashboard\\DashboardController@logout')->name('logout');


    Route::middleware(['user.connected'])->group(function (){

        /* Currency Converter routes */
        Route::get('currencyconverter', 'CurrencyConverter\\CurrencyConverterController@index')->name('currencyconverter.index');

        Route::post('currencyconverter/store', 'CurrencyConverter\\CurrencyConverterController@store')->name('currencyconverter.store');


        Route::delete('currencyconverter/{currency_id?}', 'CurrencyConverter\\CurrencyConverterController@destroy')->name('currencyconverter.destroy');

        Route::get('thanks', 'CurrencyConverter\\CurrencyConverterController@thanks')->name('thanks');


        /* Checkout routes */
        Route::get('checkout', 'checkout\\CheckoutController@index')->name('checkout.index');
        Route::put('checkout', 'checkout\\CheckoutController@update')->name('checkout.update');


        /* Dashboard*/
        Route::get('dashboard', 'Dashboard\\DashboardController@index')->name('dashboard.index');


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


        /* Authentic routes Admin */
        Route::get('admin/login', 'Auth\\LoginAdminController@index')->name('login.admin.index');
        Route::post('admin/login', 'Auth\\LoginAdminController@store')->name('login.admin.store');

        Route::get('register', 'Auth\\RegisterController@index')->name('register.index');
        Route::post('register', 'Auth\\RegisterController@store')->name('register.store');
        Route::get('register/confirm/{id_confirmation?}', 'Auth\\RegisterController@confirm')->name('register.confirm');

        Route::get('forgot-password', 'Auth\\ForgotPasswordController@index')->name('forgot.password.index');
        Route::post('forgot-password', 'Auth\\ForgotPasswordController@store')->name('forgot.password.store');

        Route::get('reset-password/{id_confirmation?}', 'Auth\\ResetPasswordController@index')->name('reset.password.index');
        Route::post('reset-password/{id_confirmation?}', 'Auth\\ResetPasswordController@store')->name('reset.password.store');


    });



    Route::group(['prefix' => 'jckinter-admin'], function () {

        Route::middleware(['user.admin'])->group(function () {

            Route::get('/', 'Admin\\AdminController@index')->name('admin.index');

            Route::resource('users', 'Admin\\UserAdminController');

            Route::put('status-order', 'Admin\\StatusOrderController@update')->name('status.order.update');

            Route::get('create-role-user', 'Admin\\CreateRoleUserAdminController@index')->name('admin.user.create.role.index');
            Route::post('create-role-user', 'Admin\\CreateRoleUserAdminController@store')->name('admin.user.create.role.store');

            Route::get('edit-user', 'Admin\\EditUserAdminController@index')->name('admin.user.edit.index');
            Route::put('edit-user', 'Admin\\EditUserAdminController@edit')->name('admin.user.edit');

            Route::get('edit-role-user/{id?}', 'Admin\\EditRoleAdminController@index')->name('admin.role.edit.index');
            Route::put('edit-role-user/{id?}', 'Admin\\EditRoleAdminController@edit')->name('admin.user.edit');

            Route::get('profile-user', 'Admin\\ProfileUserAdminController@index')->name('admin.profile.user.index');
            Route::put('profile-user/update', 'Admin\\ProfileUserAdminController@update')->name('admin.profile.user.update');
            Route::put('profile-user/update/password', 'Admin\\ProfileUserAdminController@update_password')->name('admin.profile.user.update.password');

            Route::get('role-user', 'Admin\\RoleUserAdminController@index')->name('admin.role.index');


            Route::get('order-list', 'Admin\\OrdersAdminController@index')->name('admin.order.index');
            Route::get('message', 'Admin\\MessageAdminController@index')->name('admin.message.index');
            Route::get('translation-detail', 'Admin\\TranslationDetailAdminController@index')->name('admin.translation.detail.index');

        });
    });


});







