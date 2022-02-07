<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Dano;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class DanoController extends Controller
{
    public function index(){
        $dano = Dano::where('AREA',auth()->user()->admin)->get()    ; 
        return view('dano.index')->with('dano', $dano);
    }

    public function create(){
        return view('dano.create');
    }

    public function store(Request $request){
        $dano = new Dano();
        $dano->TIPODANO =  $request->get('TIPODANO');
        $dano->AREA = $request->get('AREA');

        $dano->save();
        Session::flash('creado', 'Daño creado con exito');   
        return redirect('/dash/danos');
    }

    public function edit($id){
        $dano = Dano::find($id);
        return view('dano.edit', ['dano' => $dano]);
    }

    public function update(Request $request ,$id){
        $dano = Dano::find($id);

        $dano->TIPODANO = $request->get('TIPODANO');
        $dano->AREA = $request->get('AREA');

        $dano->save();
        Session::flash('actualizar', 'Daño actualizado con exito!');   
        return redirect('/dash/danos');

    }
}
