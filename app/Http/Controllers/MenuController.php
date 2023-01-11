<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\SubMenu;
use App\Models\Pagina;

class MenuController extends Controller
{
    public function index(){
        $data['menus']=Menu::paginate(10);
        return view('intranet/menu', $data); 
    }
    public function create(){
        return 'FORM CREACION';
    }
    public function store(Request $request){
        $menu = new Menu();
        $menu->nom_menu = $request->nom_menu;
        $menu->link_menu = $request->link_menu;
        $menu->activo_menu = 1;
        $menu->save();
        return redirect()->route('menu', $menu);
    }
    public function destroy(Menu $menu){
        $menu->delete();
        return redirect()->route('menu');
    }
    public function update(Request $request, Menu $menu){
        $menu->nom_menu=$request->nom_menu;
        $menu->link_menu = $request->link_menu;
        $menu->activo_menu = $request->activo_menu;
        $menu->save();
        return redirect()->route('menu');
    }
    public function edit(Menu $menu){
        $data['menus']=Menu::paginate(10);
        $data['menu']=$menu;
        return view('intranet/menu', $data); 
    }
    public function submenus(Menu $menu){
        $data['menu']=$menu;
        $data['submenus']=SubMenu::where('idmenus', $menu->id)->paginate(10);
        return view('intranet/submenu', $data);
    }
    public function submenusstore(Request $request){
        $submenu = new SubMenu();
        $submenu->nom_submenu = $request->nom_submenu;
        $submenu->link_submenu = $request->link_submenu;
        $submenu->activo_submenu = 1;
        $submenu->idpagina = 1;
        $submenu->idmenus = $request->idmenus;
        $submenu->save();
        return redirect()->route('menu.submenus', $request->idmenus);
    }
    public function submenudestroy(SubMenu $submenu){
        $idmenus = $submenu->idmenus;
        $submenu->delete();
        return redirect()->route('menu.submenus', $idmenus);
    }
    public function paginaweb($idpagina=null){
        $data['menus']=Menu::paginate(10);
        return view('intranet/pagina', $data); 

    }
    public function paginawebstore(Request $request){
        $pagina = new Pagina();
        $pagina->nom_pagina=$request->nom_pagina;
        $pagina->cont_pagina=$request->cont_pagina;
        $pagina->save();

        return $pagina;
        // if($tipo=='Menu'){
        //     $menu = new Menu();
        // }else{
        //     $submenu= new SubMenu();
        // }
    }

}
