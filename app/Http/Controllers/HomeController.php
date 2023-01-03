<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Menu;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke(){
        //$menus=DB::table('menus')->orderBy('idmenus','ASC')->get();
        $menus=Menu::where('activo_menu', 1)->get();
        $datsubmenu=DB::table('submenu')->join('menus','submenu.idmenus','=','menus.idmenus')->select('submenu.idsubmenu','submenu.nom_submenu','submenu.link_submenu','submenu.archivo','submenu.idpagina','submenu.ico_submenu','submenu.idmenus')->orderBy('submenu.idmenus','ASC')->get();
        $data['menus']=$menus;
        $data['submenus']=$datsubmenu;
        return view('home', $data);
    }
}
