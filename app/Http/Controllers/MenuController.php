<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index(){
 
    }
    public function create(){
        return 'FORM CREACION';
    }
    public function show($menu){
        return 'Este es el '.$menu;
    }
}
