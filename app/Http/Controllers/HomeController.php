<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Models\Menu;

class HomeController extends Controller
{
    public function index() {

        $data=menu::all();
        return view("home", compact("data"));
    }

    public function redirects() {
        
        $data = menu::all();
        $tipoUsuario = Auth::user()->tipoUsuario;

        if($tipoUsuario == '1') {
            return view('admin.adminhome');
        } else {
            return view('home', compact('data'));
        }

    }
}
