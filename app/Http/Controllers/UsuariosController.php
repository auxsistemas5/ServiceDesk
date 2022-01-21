<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UsuariosController extends Controller
{
    public function index(){
        //valida si hay session en un usuario para dejarlo acceder
        if(auth()->user()){
            $validar = User::where('admin','SISTEMAS')->get();
            $users = DB::table('users')->get();
            return view('usuarios.index', ['users' => $users, 'validar' => $validar]);
            
        }else{
            return redirect()->route('login');
        }
    }
        
}
