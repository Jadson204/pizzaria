<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Menu;
use App\Models\Reservation;


class AdminController extends Controller
{
    public function user() {
        $data = user::all();
        return view("admin.users", compact("data"));
    }

    public function deleteuser($id) {
        $data = user::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function pizzas() {
        $data = user::all();
        return view("admin.menupizzas");
    }

    public function menupizzas() {
        $data = menu::all();
        return view("admin.menupizzas", compact("data"));
    }

    public function upload(Request $request) {
        $data = new menu;

        $imagem = $request->imagem;

        $imagemname = time().'.'.$imagem->getClientOriginalExtension();
        $request->imagem->move('imagempizza', $imagemname);

        $data->imagem = $imagemname;

        $data->titulo = $request->titulo;

        $data->preco = $request->preco;

        $data->descricao = $request->descricao;

        $data->save();

        return redirect()->back();  
    }

    public function reservation(Request $request) {
        $data = new reservation;

        $data->nome = $request->nome;

        $data->email = $request->email;

        $data->fone = $request->fone;

        $data->guest = $request->guest;

        $data->date = $request->date;

        $data->time = $request->time;
        
        $data->mensagem = $request->mensagem;



        $data->save();

        return redirect()->back();  
    }

    public function viewreservation() {
        $data = reservation::all();

        return view("admin.adminreservation", compact("data"));
    }
}
