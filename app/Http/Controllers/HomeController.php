<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Menu;
use App\Models\Slider;
use App\Models\Noticia;
use App\Models\Popup;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke(){
        $menus=Menu::where('activo_menu', 1)->whereNull('categoriamenu')->get();
        $submenus= Menu::whereNotNull('categoriamenu')->get();
        $data['noticia']=Noticia::orderBy('fechapubli', 'desc')->first();
        $data['menus']=$menus;
        $data['submenus']=$submenus;
        $data['popup']=Popup::where('estado', 1)->orderBy('created_at', 'desc')->first();
        $data['sliders']=Slider::where('activo_slider', 1)->get();
        return view('home', $data);
    }
    public function noticia(Noticia $noticia){
        $menus=Menu::where('activo_menu', 1)->whereNull('categoriamenu')->get();
        $submenus= Menu::whereNotNull('categoriamenu')->get();
        $data['menus']=$menus;
        $data['submenus']=$submenus;
        $data['noticia']=$noticia;
        return view('principal/noticia', $data);

    }
}
