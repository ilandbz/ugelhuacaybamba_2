<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Menu;
use App\Models\Slider;
use App\Models\Noticia;
use App\Models\Popup;
use App\Models\Directorio;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke(){
        $menus=Menu::where('activo_menu', 1)->whereNull('categoriamenu')->get();
        $submenus= Menu::whereNotNull('categoriamenu')->get();
        $data['noticias']=Noticia::orderBy('fechapubli', 'desc')->take(3)->get();
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
    public function directorio(){
        $menus=Menu::where('activo_menu', 1)->whereNull('categoriamenu')->get();
        $submenus= Menu::whereNotNull('categoriamenu')->get();
        $data['director']=Directorio::where('cargo', 'DIRECTOR')->first();
        $data['jefeagi']=Directorio::where('cargo', 'JEFE DE AGI')->first();        
        $data['menus']=$menus;
        $data['submenus']=$submenus;
        $data['registros']=Directorio::whereNotIn('cargo' , ['DIRECTOR', 'JEFE DE AGI'])->get();
        return view('principal/directorio', $data);
    }
    public function nosotros(){
        $menus=Menu::where('activo_menu', 1)->whereNull('categoriamenu')->get();
        $submenus= Menu::whereNotNull('categoriamenu')->get();
        $data['menus']=$menus;
        $data['submenus']=$submenus;
        return view('principal/nosotros', $data);        
    }
    public function mision(){
        $menus=Menu::where('activo_menu', 1)->whereNull('categoriamenu')->get();
        $submenus= Menu::whereNotNull('categoriamenu')->get();
        $data['menus']=$menus;
        $data['submenus']=$submenus;
        return view('principal/mision', $data);        
    }
    public function vision(){
        $menus=Menu::where('activo_menu', 1)->whereNull('categoriamenu')->get();
        $submenus= Menu::whereNotNull('categoriamenu')->get();
        $data['menus']=$menus;
        $data['submenus']=$submenus;
        return view('principal/vision', $data);        
    }


}
