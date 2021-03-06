<?php

// Namespace App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AddressController;

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

// Contact Routes
    Route::get('/app/index', 'App\Http\Controllers\ContactController@index');
    Route::post('/app/createContact', 'App\Http\Controllers\ContactController@createContact');
    Route::post('/app/editContact/{id}', 'App\Http\Controllers\ContactController@editContact');
    Route::post('/app/deleteContact/{id}', 'App\Http\Controllers\ContactController@deleteContact');

// Addresses Routes
    Route::get('/app/details/{id}', 'App\Http\Controllers\ContactController@details');
    Route::post('/app/createAddress', 'App\Http\Controllers\ContactController@createAddress');
    Route::post('/app/editAddress/{id}', 'App\Http\Controllers\ContactController@editAddress');
    Route::post('/app/deleteAddress/{id}', 'App\Http\Controllers\ContactController@deleteAddress');

// ue Spa
Route::any('{slug}', function(){
    return view('welcome');
});
