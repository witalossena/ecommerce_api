<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/




Route::resource('products', 'API\ProductController');
Route::resource('category', 'API\ProductCategoryController');

Route::middleware('cors')->group( function () {
    Route::post('register', 'API\RegisterController@register');
    Route::post('login', 'API\RegisterController@login');
});

Route::middleware(['auth:api', 'admin', 'cors'])->group( function () {
    Route::get('logout', 'API\RegisterController@logout');
});


// Route::middleware(['auth:api', 'seller'])->group( function () {
//     // Route::post('products', 'API\ProductController@store');
// });
