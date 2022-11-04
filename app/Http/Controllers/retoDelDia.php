<?php

namespace App\Http\Controllers;

use App\Models\hardware;
use Illuminate\Http\Request;

class retoDelDia extends Controller
{
    public function index(){
        $titulo = "Reto";
        $hardwares = hardware::all();
        return view('welcome',compact('titulo','hardwares'));
    }
}
