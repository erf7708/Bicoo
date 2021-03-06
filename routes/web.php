<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PanelController;
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

Route::get('/',['App\Http\Controllers\Client\HomeController','index']);



Route::prefix('panel')->group(function (){

    Route::resource('/', PanelController::class);
    Route::resource('category', CategoryController::class);

});