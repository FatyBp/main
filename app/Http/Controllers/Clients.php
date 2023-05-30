<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Clients extends Controller
{
    public function index(){
        return view('modules/cliente/index');
    }
}
