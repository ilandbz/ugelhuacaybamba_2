<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Menu;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke(){
        $menus=Menu::where('activo_menu', 1)->get();
        $datsubmenu=DB::table('submenu')->join('menus','submenu.idmenus','=','menus.id')->select('submenu.id','submenu.nom_submenu','submenu.link_submenu','submenu.archivo','submenu.idpagina','submenu.idmenus')->orderBy('submenu.idmenus','ASC')->get();
        $data['menus']=$menus;
        $data['submenus']=$datsubmenu;
        $data['sliders']=Slider::where('activo_slider', 1)->get();
        return view('home', $data);
    }
}
