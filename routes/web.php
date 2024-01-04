<?php

use App\Http\Controllers\AuthAdminController;
use App\Http\Controllers\web\WebPageController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

//Auth::routes([
//    'register' => false, // Registration Routes...
//    'reset' => false, // Password Reset Routes...
//    'verify' => false, // Email Verification Routes...
//]);
//Auth::viaRemember();



Route::group(['prefix' => LaravelLocalization::setLocale()], function(){
    Route::get('/', [WebPageController::class, 'HomePage'])->name('Page_HomePage');
});


Route::group(['prefix' => LaravelLocalization::setLocale()], function(){
    Route::group(['prefix'=>'AppAdmin'],function(){
        Route::get('/login', [AuthAdminController::class, 'Adminlogin'])->name('login');
        Route::post('/loginCheck', [AuthAdminController::class, 'AdminLoginCheck'])->name('AdminLoginCheck');
        Route::post('/logout', [AuthAdminController::class, 'AdminLogout'])->name('logout');
    });
});


Route::group(['prefix' => LaravelLocalization::setLocale(),
    'middleware' => [ 'localize' ]], function () {

    Route::get(LaravelLocalization::transRoute('routes.AboutUs'),
        [WebPageController::class, 'AboutUs'])->name('Page_AboutUs');


    Route::get(LaravelLocalization::transRoute('routes.ContactUs'),
        [WebPageController::class, 'ContactUs'])->name('Page_ContactUs');

    Route::post('ContactSend',
        [WebPageController::class, 'ContactSend'])->name('Page_ContactSend');

    Route::get('/thanks',
        [WebPageController::class, 'ContactUsThanks'])->name('Page_ContactUsThanks');


    Route::get(LaravelLocalization::transRoute('routes.TermsConditions'),
        [WebPageController::class, 'TermsConditions'])->name('Page_TermsConditions');


    Route::get(LaravelLocalization::transRoute('routes.FaqList'),
        [WebPageController::class, 'FaqList'])->name('Page_FaqList');

    Route::get(LaravelLocalization::transRoute('routes.FaqCatView'),
        [WebPageController::class, 'FaqCatView'])->name('Page_FaqCatView');

    Route::get(LaravelLocalization::transRoute('routes.FaqView'),
        [WebPageController::class, 'FaqView'])->name('Page_FaqView');

});

