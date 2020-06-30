<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class User extends Controller
{
    public function index(){
        return view('user.index');
    }

    public function edit(){
        return view('user.index');
    }
    public function create(){
        return view('user.index');
    }
}
