<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Admins extends Controller
{
    public function index(){
        return view('modules/admin/index');
    }
}
