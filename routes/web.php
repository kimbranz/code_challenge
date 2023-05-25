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

Route::get('import', function () {
    return view('import');
});

Route::post('import/users', 'App\Http\Controllers\CustomerImportController');
Route::get('customers', 'App\Http\Controllers\CustomerRetrieveController');
Route::get('customers/{id}', 'App\Http\Controllers\CustomerRetrieveController@getOneCustomer');
