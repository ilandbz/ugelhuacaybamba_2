<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Paginasweb;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
route::get('/menus',[Paginasweb::class,'menus'])->name('menus');
route::get('/pagina/{id}',[Paginasweb::class,'pagina'])->name('pagina');
route::get('/convocatorias',[Paginasweb::class,'convocatorias'])->name('convocatorias');
route::get('/noticiasini',[Paginasweb::class,'noticiasini'])->name('noticiasini');
route::get('enlace_refe',[Paginasweb::class,'enlacerefe'])->name('enlacerefe');//secciones
route::get('secciones',[Paginasweb::class,'secciones'])->name('secciones');
route::get('allnoticias',[Paginasweb::class,'allnoticias'])->name('allnoticias');//allnoticias
route::get('noticias/{id}',[Paginasweb::class,'detnoticias'])->name('detnoticias');
route::get('visitas',[Paginasweb::class,'visitas'])->name('visitas');
route::get('buscarvisita/{bus}',[Paginasweb::class,'buscarvisita'])->name('buscarvisita');
route::get('listapopup',[Paginasweb::class,'listapopup'])->name('listapopup');
route::get('normatividad/{text?}/{anio?}/{bus?}',[Paginasweb::class,'normatividad'])->name('normatividad');
route::get('directorio/{dir?}',[Paginasweb::class,'directorio'])->name('directorio');//directorio

route::get('organigrama',[Paginasweb::class,'organigrama'])->name('organigrama');
route::get('unidad/{cod?}',[Paginasweb::class,'unidad'])->name('unidad');
route::get('fag',[Paginasweb::class,'fag'])->name('fag');
route::get('slider',[Paginasweb::class,'slider'])->name('slider');




// <?php

// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Route;

// /*
// |--------------------------------------------------------------------------
// | API Routes
// |--------------------------------------------------------------------------
// |
// | Here is where you can register API routes for your application. These
// | routes are loaded by the RouteServiceProvider within a group which
// | is assigned the "api" middleware group. Enjoy building your API!
// |
// */

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
