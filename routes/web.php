<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
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
Route::get('/', HomeController::class);
Route::controller(MenuController::class)->group(function(){
    Route::get('menus', 'index')->name('menu');
    Route::get('menus/edit/{menu}', 'edit')->name('menu.edit');    
    Route::get('menus/create', 'create');
    Route::post('menus', 'store')->name('menus.store');
    Route::get('menus/paginaweb', 'paginaweb')->name('menus.paginaweb');
    Route::put('menus/update/{menu}', 'update')->name('menus.update');
    Route::delete('menus/{menu}', 'destroy')->name('menus.destroy');
    Route::get('menus/submenus/{menu}', 'submenus')->name('menu.submenus');
    Route::post('menus/submenusstore', 'submenusstore')->name('submenus.store');
    Route::delete('menus/submenu/{submenu}', 'submenudestroy')->name('submenu.destroy');
    Route::post('menus/paginawebstore', 'paginawebstore')->name('pagina.paginawebstore');
});
Route::controller(SliderController::class)->group(function(){
    Route::get('slider', 'index')->name('slider');
    Route::get('slider/create', 'create');
    Route::get('slider/{menu}', 'show');
});
Route::controller(NoticiaController::class)->group(function(){
    Route::get('noticias', 'index')->name('noticia');
    Route::get('noticias/create', 'create');
    Route::get('noticias/{menu}', 'show');
});
Route::get('/intranet', function () {
    return view('welcome');
})->name('intr');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
require __DIR__.'/auth.php';