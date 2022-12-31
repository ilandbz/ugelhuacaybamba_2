<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index(){
        $enlace = "http://".request()->server('HTTP_HOST');
        $portalesweb=DB::table('direcciones_web')->where('dns_direcciones_web',$enlace)->value('iddirecciones_web');
        // $iddireccionweb=$portalesweb;//id de pagina web
        $iddireccionweb=1;//id de pagina web
        $menus=DB::table('menus')->where(['iddirecciones_web'=>$iddireccionweb,'activo_menu'=>1])->orderBy('idmenus','ASC')->get();
        $datsubmenu=DB::table('submenu')->join('menus','submenu.idmenus','=','menus.idmenus')->where(['activo_submenu'=>1,'iddirecciones_web'=>$iddireccionweb])->select('submenu.idsubmenu','submenu.nom_submenu','submenu.link_submenu','submenu.archivo','submenu.idpagina','submenu.ico_submenu','submenu.idmenus')->orderBy('submenu.idmenus','ASC')->get();
        return response()->json([
            'menus'=>$menus,
            'submenus'=>$datsubmenu
        ], 200);      
    }
    public function create(){
        return 'FORM CREACION';
    }
    public function show($menu){
        return 'Este es el '.$menu;
    }
}
