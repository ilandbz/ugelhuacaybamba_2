<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ArchivoController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\NoticiaController;
use App\Http\Controllers\PopupController;
use App\Http\Controllers\DirectorioController;
use App\Http\Controllers\ConvocatoriaController;
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
Route::get('/noticia/{noticia}', [HomeController::class, 'noticia'])->name('noticia');
Route::get('/directorioweb', [HomeController::class, 'directorio'])->name('directorioweb');
Route::get('/nosotros', [HomeController::class, 'nosotros'])->name('nosotros');
Route::get('/mision', [HomeController::class, 'mision'])->name('mision');
Route::get('/vision', [HomeController::class, 'vision'])->name('vision');

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
    Route::get('archivos/inicio', 'index')->middleware(['auth', 'verified'])->name('archivo');
    Route::get('archivos/{archivo}', 'destroy')->middleware(['auth', 'verified'])->name('archivos.destroy');
    Route::get('archivos/edit/{archivo}', 'edit')->middleware(['auth', 'verified'])->name('archivos.edit');
    Route::post('archivos/store', 'store')->middleware(['auth', 'verified'])->name('archivos.store');
    Route::put('archivos/update/{archivo}', 'update')->name('archivos.update');
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
    Route::get('noticias', 'index')->middleware(['auth', 'verified'])->name('noticias');
    Route::get('noticias/create', 'create')->middleware(['auth', 'verified'])->name('noticias.create');
    Route::post('noticias/store', 'store')->middleware(['auth', 'verified'])->name('noticias.store');
    Route::get('noticias/{noticia}', 'destroy')->middleware(['auth', 'verified'])->name('noticias.destroy');
    Route::get('noticias/edit/{noticia}', 'edit')->middleware(['auth', 'verified'])->name('noticias.edit');
    Route::put('noticias/update/{noticia}', 'update')->middleware(['auth', 'verified'])->name('noticias.update');
    Route::get('noticias/show/{noticia}', 'show')->middleware(['auth', 'verified'])->name('noticias.show'); 
});

Route::controller(PopupController::class)->group(function(){
    Route::get('popup', 'index')->middleware(['auth', 'verified'])->name('popup');
    Route::get('popup/create', 'create')->middleware(['auth', 'verified'])->name('popup.create');    
    Route::post('popup/store', 'store')->middleware(['auth', 'verified'])->name('popup.store');
    Route::get('popup/{popup}', 'destroy')->middleware(['auth', 'verified'])->name('popup.destroy');
    Route::get('popup/edit/{popup}', 'edit')->middleware(['auth', 'verified'])->name('popup.edit');
    Route::put('popup/update/{popup}', 'update')->middleware(['auth', 'verified'])->name('popup.update');
    Route::get('popup/show/{popup}', 'show')->middleware(['auth', 'verified'])->name('show');
});
Route::controller(DirectorioController::class)->group(function(){
    Route::get('directorio', 'index')->middleware(['auth', 'verified'])->name('directorio');
    Route::get('directorio/create', 'create')->middleware(['auth', 'verified'])->name('directorio.create');
    Route::post('directorio/store', 'store')->middleware(['auth', 'verified'])->name('directorio.store');
    Route::get('directorio/{directorio}', 'destroy')->middleware(['auth', 'verified'])->name('directorio.destroy');
    Route::get('directorio/edit/{directorio}', 'edit')->middleware(['auth', 'verified'])->name('directorio.edit');
    Route::put('directorio/update/{directorio}', 'update')->middleware(['auth', 'verified'])->name('directorio.update');               
});
Route::controller(ConvocatoriaController::class)->group(function(){
    Route::get('convocatoria', 'index')->middleware(['auth', 'verified'])->name('convocatoria');
    Route::get('convocatoria/create', 'create')->middleware(['auth', 'verified'])->name('convocatoria.create');
    Route::post('convocatoria/store', 'store')->middleware(['auth', 'verified'])->name('convocatoria.store');
    Route::get('convocatoria/{convocatoria}', 'destroy')->middleware(['auth', 'verified'])->name('convocatoria.destroy');
    Route::get('convocatoria/edit/{convocatoria}', 'edit')->middleware(['auth', 'verified'])->name('convocatoria.edit');
    Route::put('convocatoria/update/{convocatoria}', 'update')->middleware(['auth', 'verified'])->name('convocatoria.update'); 
    Route::get('convocatoria/show/{convocatoria}', 'show')->middleware(['auth', 'verified'])->name('convocatoria.show'); 
    Route::get('convocatoria/archivocreate/{convocatoria}', 'archivo_convocatoriacreate')->middleware(['auth', 'verified'])->name('archivo.convocatoria.create'); 
    Route::get('convocatoria/archivo/{archivoconvocatoria}', 'archivoconvocatoriadestroy')->middleware(['auth', 'verified'])->name('archivo.convocatoria.destroy');
    Route::get('convocatoria/editarchivo/{convocatoria}', 'archivoedit')->middleware(['auth', 'verified'])->name('archivo.convocatoria.edit');
    Route::post('convocatoria/archivo/store/{convocatoria}', 'archivocstore')->middleware(['auth', 'verified'])->name('archivo.convocatoria.store');
    
              
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