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
    return view('welcome');
});

Route::get('/company','App\Http\Controllers\CompanyController@index');
Route::get('/company/{id}','App\Http\Controllers\CompanyController@view');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/ajax-form', 'App\Http\Controllers\CompanyController@ajax_form');
Route::get('/ajax', 'App\Http\Controllers\CompanyController@ajax');
