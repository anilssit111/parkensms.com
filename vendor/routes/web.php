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

Route::get('/', function () {
    return view('tamplate.index');
});

// About Page Route
Route::view('/about','tamplate.about');


// bluk sms route
Route::get('/transaction-bulk-sms-reseller',function(){
    return view('tamplate.sms.transaction-sms');
})->name('transaction-sms');

Route::get('/promitional-bulk-sms-reseller',function(){
    return view('tamplate.sms.promitional-sms');
})->name('promitional-sms');

Route::get('/otp-sms-reseller',function(){
    return view('tamplate.sms.otp-sms');
})->name('otp-sms');

Route::get('/promo-sender-id-bulk-sms-reseller',function(){
    return view('tamplate.sms.promo-sender-id');
})->name('promo-sender');

Route::get('/message-api-bulk-sms-reseller',function(){
    return view('tamplate.sms.message-api');
})->name('message-api');


// voice call route
Route::get('promotion-call-reseller',function(){
    return view('tamplate.voice.voice-massege');
})->name('promotion-call');

Route::get('dynamic-call-reseller',function(){
    return view('tamplate.voice.dynamic-call');
})->name('dynamic-call');

// Price Page Route
Route::view('/Price-Plan-Bulk-SMS-Voice-Call','tamplate.pricing-plan');

// Feature Page Route
Route::view('/voice-call-feature','tamplate.feature.voice-call-feature');
Route::view('/bluk-sms-feature','tamplate.feature.bulk-sms-feature');
Route::view('/Faq','tamplate.feature.faq');
Route::view('/case','tamplate.feature.case');
Route::view('/blog','tamplate.feature.blog');

// Contact Page Route
Route::view('/contactus','tamplate.contact');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

