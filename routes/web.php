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
Route::get('locale/{locale}', function ($locale) {
    \Session::put('locale', $locale);
    return redirect('/');
});
Route::get('/',[\App\Http\Controllers\HomeController::class,'homePage']);
Route::get('/Who-We-are',[\App\Http\Controllers\HomeController::class,'dynamicPage']);
Route::get('/What-We-Do',[\App\Http\Controllers\HomeController::class,'dynamicPage']);
Route::get('/Where-We-Work',[\App\Http\Controllers\HomeController::class,'dynamicPage']);
Route::get('/Get-Involved',[\App\Http\Controllers\HomeController::class,'dynamicPage']);
Route::get('/press',[\App\Http\Controllers\HomeController::class,'dynamicPage']);
Route::get('/contact-us',[\App\Http\Controllers\HomeController::class,'dynamicPage']);
Route::get('/careers',[\App\Http\Controllers\HomeController::class,'dynamicPage']);

Route::get('/About-ATECA-Foundation','HomeController@dynamicPage');








