<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Caso;
use App\Models\User;
use App\Models\Dano;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;

class CasoUsuarioController extends Controller
{
    public function index(){
        return view('home.index');
    }

    public function create(){
        $area = DB::table('areas_hospital')->get();
        $daños = Dano::all();
        return view('home.create',['area' => $area, 'daños' => $daños]);
        date_default_timezone_set('America/Bogota');
    }

    public function store(Request $request)
    {
        
        $caso = new Caso();
        $caso->SOLICITANTE = $request->get('SOLICITANTE');
        $caso->PRIORIDAD = $request->get('PRIORIDAD');
        $caso->DESCRIPTION = $request->get('DESCRIPTION');
        $caso->AREA = $request->get('AREA');
        $caso->AREADESTINO = $request->get('AREADESTINO');
        $caso->TIPODAÑO = $request->get('TIPODAÑO');
        //$caso->created_at = $request->get('created_at');
        //$caso->updated_at = $request->get('updated_at');
        date_default_timezone_set('America/Bogota');
       
        if($request->file('IMAGENEVIDENCIA') != null){
            $caso->IMAGENEVIDENCIA = $request->file('IMAGENEVIDENCIA')->store('public');
        }

        $saved = $caso->save();
        
        if($saved){
            Session::flash('creado', 'Caso Creado con exito');    
            date_default_timezone_set('America/Bogota');
            return redirect('/dash/mesaDeAyuda');
        }
        
        
    }

    public function miscasos(){
        if(auth()->user()){
            date_default_timezone_set('America/Bogota');
            if(auth()->user()->admin == "No"){
                $micaso = Caso::where('SOLICITANTE', auth()->user()->name)->where('ESTADO', 'Abierto')->orwhere('ESTADO', 'En Desarrollo')->get();
                $contador = Caso::where('SOLICITANTE', auth()->user()->name)->where('ESTADO', 'Abierto')->orwhere('ESTADO', 'En Desarrollo')->get()->count();
                return view('home.miscasos',['micaso' => $micaso, 'contador' => $contador]);
            }
        }else{
            return redirect()->route('login');
        }
    }

    public function miscasoscerrados(){
        $caso = Caso::where('SOLICITANTE', auth()->user()->name)->where('ESTADO', 'Cerrado')->get();
        date_default_timezone_set('America/Bogota');
        return view('home.miscasoscerrados',['caso' => $caso]);
    }

    
}
