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

Route::get('dashboard', function () {
    return view('admin.dashboard');
})->name('dashboard');

Route::prefix('cms')->name('cms.')->group(function () {
    Route::prefix('home')->name('home.')->group(function () {

        Route::get('home', function () {
            return view('admin.cms.home');
        })->name('home');

        Route::get('about', function () {
            return view('admin.cms.about');
        })->name('about');

        Route::get('business-fields', function () {
            return view('admin.cms.business-fields');
        })->name('business-fields');

        Route::get('business-fields', function () {
            return view('admin.cms.business-fields');
        })->name('business-fields');

        Route::get('business-fields/plus', function () {
            return view('admin.cms.business-fields-more');
        })->name('business-fields-more');

        Route::get('why-us', function () {
            return view('admin.cms.why-us');
        })->name('why-us');
    });
});
