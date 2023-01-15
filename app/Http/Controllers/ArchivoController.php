<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArchivoController extends Controller
{
    public function index(){
        return view('intranet/archivos/create'); 
    }
}
