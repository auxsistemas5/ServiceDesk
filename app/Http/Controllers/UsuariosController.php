<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Caso;
use App\Models\User;
use App\Models\Dano;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;
use App\Mail\NotificacionMailable;
use Illuminate\Support\Facades\Mail;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\CasosExport;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Crypt;


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

    public function actualizarPermisos(Request $request, $id){
        $user = User::find($id);

        $user->type_rol = $request->get('type_rol');
        $user->admin = $request->get('admin');

        date_default_timezone_set('America/Bogota');

        $saved = $user->save();
        
        if($saved){
            Session::flash('actualizado', 'Usuario Actualizado con exito!');    
            return redirect('/dash/usuarios/ver');
        }
    }
        
}
