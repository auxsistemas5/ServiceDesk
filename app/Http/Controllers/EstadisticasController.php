<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Caso;
use App\Models\User;
use App\Models\Dano;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;

class EstadisticasController extends Controller
{
    public function show(){
        $total = Caso::where('ESTADO', 'Cerrado')->get()->count();
        $inicio = "2022-01-01";
        $final = "2022-01-31";
        $enero = Caso::where('ESTADO', 'Cerrado')->whereBetween('updated_at', ['2022-01-01','2022-01-31'])->get()->count();
        $febrero = Caso::where('ESTADO', 'Cerrado')->whereBetween('updated_at', ['2022-02-01','2022-02-28'])->get()->count();
        $marzo = Caso::where('ESTADO', 'Cerrado')->whereBetween('updated_at', ['2022-03-01','2022-03-31'])->get()->count();
        $abril = Caso::where('ESTADO', 'Cerrado')->whereBetween('updated_at', ['2022-04-01','2022-04-30'])->get()->count();
        
        return view('estadisticas.index', ['enero' => $enero,'febrero' => $febrero,'marzo' => $marzo,'abril' => $abril, 'total' => $total]);
    }
}
