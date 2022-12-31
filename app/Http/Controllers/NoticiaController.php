<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class NoticiaController extends Controller
{
    public function index(){
        $iddireccionweb=1;//id de pagina web
        $menus=DB::table('menus')->where(['iddirecciones_web'=>$iddireccionweb,'activo_menu'=>1])->orderBy('idmenus','ASC')->get();
        $datsubmenu=DB::table('submenu')->join('menus','submenu.idmenus','=','menus.idmenus')->where(['activo_submenu'=>1,'iddirecciones_web'=>$iddireccionweb])->select('submenu.idsubmenu','submenu.nom_submenu','submenu.link_submenu','submenu.archivo','submenu.idpagina','submenu.ico_submenu','submenu.idmenus')->orderBy('submenu.idmenus','ASC')->get();
        $data['menus']=$menus;
        $data['submenus']=$datsubmenu;
        return view('principal/noticias', $data);
    }
}
