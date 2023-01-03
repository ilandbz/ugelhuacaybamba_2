<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\NoticiaController;
use App\Http\Controllers\IntranetController;
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

Route::get('/', HomeController::class);

Route::controller(MenuController::class)->group(function(){
    Route::get('menus', 'index');
    Route::get('menus/create', 'create');
    Route::get('menus/{menu}', 'show');
});

Route::controller(NoticiaController::class)->group(function(){
    Route::get('noticias', 'index');
    Route::get('noticias/create', 'create');
    Route::get('noticias/{menu}', 'show');
});

Route::controller(IntranetController::class)->group(function(){
    Route::get('intranet', 'index')->name('intr');
});