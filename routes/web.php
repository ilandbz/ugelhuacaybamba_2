<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ArchivoController;
use App\Http\Controllers\SliderController;
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
Route::get('/', HomeController::class)->name('home');
Route::controller(MenuController::class)->group(function(){
    Route::get('menus', 'index')->name('menu');
    Route::get('menus/edit/{menu}', 'edit')->middleware(['auth', 'verified'])->name('menu.edit');    
    Route::get('menus/create', 'create')->middleware(['auth', 'verified'])->name('formregistro');
    Route::post('menus', 'store')->name('menus.store');
    Route::get('menus/paginaweb', 'paginaweb')->name('menus.paginaweb');
    Route::put('menus/update/{menu}', 'update')->name('menus.update');
    Route::get('menus/{menu}', 'destroy')->name('menus.destroy');
    Route::get('menus/submenus/{menu}', 'submenus')->name('menu.submenus');
    Route::post('menus/submenusstore', 'submenusstore')->name('submenus.store');
    Route::delete('menus/submenu/{submenu}', 'submenudestroy')->name('submenu.destroy');
    Route::post('menus/paginawebstore', 'paginawebstore')->name('pagina.paginawebstore');
    Route::get('menus/paginaweb/{pagina}', 'showpaginaweb')->name('menus.showpaginaweb');
});
Route::controller(ArchivoController::class)->group(function(){
    Route::get('archivo', 'index')->middleware(['auth', 'verified'])->name('archivo');
});
Route::controller(SliderController::class)->group(function(){
    Route::get('slider/create', 'create')->name('slide.create');
    Route::post('slider/store', 'store')->name('slide.store'); 
    Route::get('slider/edit/{slider}', 'edit')->name('slide.edit');
    Route::put('slider/update/{slider}', 'update')->name('slide.update');
    Route::get('slider/{slider}', 'destroy')->name('slide.destroy');     
    Route::get('slider/{menu}', 'show');
});
Route::controller(NoticiaController::class)->group(function(){
    Route::get('noticias', 'index')->name('noticia');
    Route::get('noticias/create', 'create');
    Route::get('noticias/{menu}', 'show');
});
Route::get('prueba', [MenuController::class, 'prueba'])->name('prueba');

Route::get('/intranet', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('intranet');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
require __DIR__.'/auth.php';