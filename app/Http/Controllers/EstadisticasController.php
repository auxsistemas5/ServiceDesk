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
        $mayo = Caso::where('ESTADO', 'Cerrado')->whereBetween('updated_at', ['2022-05-01','2022-05-31'])->get()->count();
        $junio = Caso::where('ESTADO', 'Cerrado')->whereBetween('updated_at', ['2022-06-01','2022-06-30'])->get()->count();
        $julio = Caso::where('ESTADO', 'Cerrado')->whereBetween('FECHA_CERRADO', ['2022-07-01','2022-07-31'])->get()->count();
        $agosto = Caso::where('ESTADO', 'Cerrado')->whereBetween('FECHA_CERRADO', ['2022-08-01','2022-08-31'])->get()->count();
        $septiembre = Caso::where('ESTADO', 'Cerrado')->whereBetween('FECHA_CERRADO', ['2022-09-01','2022-09-31'])->get()->count();

        $usuario1 = Caso::where('USUARIOASIGNADO', 'Juan David Valencia')->where('ESTADO', 'Cerrado')->whereBetween('FECHA_CERRADO', ['2022-09-01','2022-09-31'])->get()->count();

        $usuario2 = Caso::where('USUARIOASIGNADO', 'Brucer Lee Broncallo')->where('ESTADO', 'Cerrado')->whereBetween('FECHA_CERRADO', ['2022-09-01','2022-09-31'])->get()->count();

        $usuario3 = Caso::where('USUARIOASIGNADO', 'Jarley Estiverd Saldarriaga Gutierrez')->where('ESTADO', 'Cerrado')->whereBetween('FECHA_CERRADO', ['2022-09-01','2022-09-31'])->get()->count();

        $usuario4 = Caso::where('USUARIOASIGNADO', 'Soporte')->where('ESTADO', 'Cerrado')->whereBetween('FECHA_CERRADO', ['2022-09-01','2022-09-31'])->get()->count();
        
        $usuario5 = Caso::where('USUARIOASIGNADO', 'Jean Carlos Marin Ospina')->where('ESTADO', 'Cerrado')->whereBetween('FECHA_CERRADO', ['2022-09-01','2022-09-31'])->get()->count();

        //datos para traer la cantidad de casos hasta el momento cerrados y abiertos

        $abierto1 = Caso::where('USUARIOASIGNADO', 'Brucer Lee Broncallo')->where('ESTADO','!=' ,'Cerrado')->whereBetween('created_at',['2022-09-01','2022-09-31'])->get()->count();
        $abierto2 = Caso::where('USUARIOASIGNADO', 'Jarley Estiverd Saldarriaga Gutierrez')->where('ESTADO', '!=','Cerrado')->whereBetween('created_at', ['2022-09-01','2022-09-31'])->get()->count();
        $abierto3 = Caso::where('USUARIOASIGNADO', 'Jean Carlos Marin Ospina')->where('ESTADO','!=' ,'Cerrado')->whereBetween('created_at', ['2022-09-01','2022-09-31'])->get()->count();
        $abierto4 = Caso::where('USUARIOASIGNADO', 'Juan David Valencia')->where('ESTADO', '!=','Cerrado')->whereBetween('created_at', ['2022-09-01','2022-09-31'])->get()->count();

        $abierto5 = Caso::where('USUARIOASIGNADO', 'Soporte')->where('ESTADO','!=','Cerrado')->whereBetween('created_at', ['2022-09-01','2022-09-31'])->get()->count();

        $cerrado1 = Caso::where('USUARIOASIGNADO', 'Brucer Lee Broncallo')->where('ESTADO', 'Cerrado')->whereBetween('FECHA_CERRADO', ['2022-09-01','2022-09-31'])->get()->count();
        $cerrado2 = Caso::where('USUARIOASIGNADO', 'Jarley Estiverd Saldarriaga Gutierrez')->where('ESTADO', 'Cerrado')->whereBetween('FECHA_CERRADO', ['2022-09-01','2022-09-31'])->get()->count();
        $cerrado3 = Caso::where('USUARIOASIGNADO', 'Jean Carlos Marin Ospina')->where('ESTADO', 'Cerrado')->whereBetween('FECHA_CERRADO', ['2022-09-01','2022-09-31'])->get()->count();
        $cerrado4 = Caso::where('USUARIOASIGNADO', 'Juan David Valencia')->where('ESTADO', 'Cerrado')->whereBetween('FECHA_CERRADO', ['2022-09-01','2022-09-31'])->get()->count();
        $cerrado5 = Caso::where('USUARIOASIGNADO', 'Soporte')->where('ESTADO', 'Cerrado')->whereBetween('FECHA_CERRADO', ['2022-09-01','2022-09-31'])->get()->count();

        $total1 = $abierto1 + $cerrado1;
        $total2 = $abierto2 + $cerrado2;
        $total3 = $abierto3 + $cerrado3;
        $total4 = $abierto4 + $cerrado4;
        $total5 = $abierto5 + $cerrado5;

        $totalAbiertos = $abierto1+$abierto2+$abierto3+$abierto4+$abierto4+$abierto5;
        $totalCerrados = $cerrado1+$cerrado2+$cerrado3+$cerrado4+$cerrado5;
        #-----------------------------DATOS TIPIFICADOS----------------------------------------#
        
        $tipificado1 = Caso::where('TIPODAÑO', 'LIKE','DINAMICA%')->whereBetween('created_at', ['2022-09-01','2022-09-31'])->get()->count();
        $tipicerrado1 = Caso::where('TIPODAÑO', 'LIKE','DINAMICA%')->where('ESTADO', 'Cerrado')->whereBetween('created_at', ['2022-09-01','2022-09-31'])->get()->count();
        $tipiAbierto1 = Caso::where('TIPODAÑO', 'LIKE','DINAMICA%')->where('ESTADO', '!=','Cerrado')->whereBetween('created_at', ['2022-09-01','2022-09-31'])->get()->count();

        $tipificado2 = Caso::where('TIPODAÑO', 'LIKE','IMPRESORA%')->whereBetween('created_at', ['2022-09-01','2022-09-31'])->get()->count();
        $tipicerrado2 = Caso::where('TIPODAÑO', 'LIKE','IMPRESORA%')->where('ESTADO', 'Cerrado')->whereBetween('created_at', ['2022-09-01','2022-09-31'])->get()->count();
        $tipiAbierto2 = Caso::where('TIPODAÑO', 'LIKE','IMPRESORA%')->where('ESTADO', '!=','Cerrado')->whereBetween('created_at', ['2022-09-01','2022-09-31'])->get()->count();

        $tipificado3 = Caso::where('TIPODAÑO', 'LIKE','ESCANER%')->whereBetween('created_at', ['2022-09-01','2022-09-31'])->get()->count();
        $tipicerrado3 = Caso::where('TIPODAÑO', 'LIKE','ESCANER%')->where('ESTADO', 'Cerrado')->whereBetween('created_at', ['2022-09-01','2022-09-31'])->get()->count();
        $tipiAbierto3 = Caso::where('TIPODAÑO', 'LIKE','ESCANER%')->where('ESTADO', '!=','Cerrado')->whereBetween('created_at', ['2022-09-01','2022-09-31'])->get()->count();

        $tipificado4 = Caso::where('TIPODAÑO', 'LIKE','EQUIPO%')->whereBetween('created_at', ['2022-09-01','2022-09-31'])->get()->count();
        $tipicerrado4 = Caso::where('TIPODAÑO', 'LIKE','EQUIPO%')->where('ESTADO', 'Cerrado')->whereBetween('created_at', ['2022-09-01','2022-09-31'])->get()->count();
        $tipiAbierto4 = Caso::where('TIPODAÑO', 'LIKE','EQUIPO%')->where('ESTADO', '!=','Cerrado')->whereBetween('created_at', ['2022-09-01','2022-09-31'])->get()->count();
        

        $tipificado5 = Caso::where('TIPODAÑO', 'LIKE','CAMARA%')->whereBetween('created_at', ['2022-09-01','2022-09-31'])->get()->count();
        $tipicerrado5 = Caso::where('TIPODAÑO', 'LIKE','CAMARA%')->where('ESTADO', 'Cerrado')->whereBetween('created_at', ['2022-09-01','2022-09-31'])->get()->count();
        $tipiAbierto5 = Caso::where('TIPODAÑO', 'LIKE','CAMARA%')->where('ESTADO', '!=','Cerrado')->whereBetween('created_at', ['2022-09-01','2022-09-31'])->get()->count();

        $tipificado6 = Caso::where('TIPODAÑO', 'LIKE','CORREO%')->whereBetween('created_at', ['2022-09-01','2022-09-31'])->get()->count();
        $tipicerrado6 = Caso::where('TIPODAÑO', 'LIKE','CORREO%')->where('ESTADO', 'Cerrado')->whereBetween('created_at', ['2022-09-01','2022-09-31'])->get()->count();
        $tipiAbierto6 = Caso::where('TIPODAÑO', 'LIKE','CORREO%')->where('ESTADO', '!=','Cerrado')->whereBetween('created_at', ['2022-09-01','2022-09-31'])->get()->count();

        $tipificado7 = Caso::where('TIPODAÑO', 'LIKE','CREACION DE USUARIO%')->whereBetween('created_at', ['2022-09-01','2022-09-31'])->get()->count();
        $tipicerrado7 = Caso::where('TIPODAÑO', 'LIKE','CREACION DE USUARIO%')->where('ESTADO', 'Cerrado')->whereBetween('created_at', ['2022-09-01','2022-09-31'])->get()->count();
        $tipiAbierto7 = Caso::where('TIPODAÑO', 'LIKE','CREACION DE USUARIO%')->where('ESTADO', '!=','Cerrado')->whereBetween('created_at', ['2022-09-01','2022-09-31'])->get()->count();

        $tipificado8 = Caso::where('TIPODAÑO', 'LIKE','INTRANET%')->whereBetween('created_at', ['2022-09-01','2022-09-31'])->get()->count();
        $tipicerrado8 = Caso::where('TIPODAÑO', 'LIKE','INTRANET%')->where('ESTADO', 'Cerrado')->whereBetween('created_at', ['2022-09-01','2022-09-31'])->get()->count();
        $tipiAbierto8 = Caso::where('TIPODAÑO', 'LIKE','INTRANET%')->where('ESTADO', '!=','Cerrado')->whereBetween('created_at', ['2022-09-01','2022-09-31'])->get()->count();

        $tipificado9 = Caso::where('TIPODAÑO', 'LIKE','TELEFONIA%')->whereBetween('created_at', ['2022-09-01','2022-09-31'])->get()->count();
        $tipicerrado9 = Caso::where('TIPODAÑO', 'LIKE','TELEFONIA%')->where('ESTADO', 'Cerrado')->whereBetween('created_at', ['2022-09-01','2022-09-31'])->get()->count();
        $tipiAbierto9 = Caso::where('TIPODAÑO', 'LIKE','TELEFONIA%')->where('ESTADO', '!=','Cerrado')->whereBetween('created_at', ['2022-09-01','2022-09-31'])->get()->count();

        $tipificado10 = Caso::where('TIPODAÑO', 'LIKE','SERVIDOR%')->whereBetween('created_at', ['2022-09-01','2022-09-31'])->get()->count();
        $tipicerrado10 = Caso::where('TIPODAÑO', 'LIKE','SERVIDOR%')->where('ESTADO', 'Cerrado')->whereBetween('created_at', ['2022-09-01','2022-09-31'])->get()->count();
        $tipiAbierto10 = Caso::where('TIPODAÑO', 'LIKE','SERVIDOR%')->where('ESTADO', '!=','Cerrado')->whereBetween('created_at', ['2022-09-01','2022-09-31'])->get()->count();

        $totalCasos = $tipificado1+$tipificado2+$tipificado3+$tipificado4+$tipificado5+$tipificado6+$tipificado7+$tipificado9+$tipificado10;

        $TOTAL = $agosto+$totalCasos;

        $variosAbiertos = Caso::where('ESTADO', '!=','Cerrado')->where('TIPODAÑO', 'NOT LIKE','SERVIDOR%')->orwhere('TIPODAÑO', 'NOT LIKE','TELEFONIA%')->orwhere('TIPODAÑO', 'NOT LIKE','INTRANET%')->orwhere('TIPODAÑO', 'NOT LIKE','CREACION DE USUARIO%')->orwhere('TIPODAÑO', 'NOT LIKE','CORREO%')->orwhere('TIPODAÑO', 'NOT LIKE','CAMARA%')->where('TIPODAÑO', 'NOT LIKE','EQUIPO%')->orwhere('TIPODAÑO', 'NOT LIKE','ESCANER%')->orwhere('TIPODAÑO', 'LIKE','IMPRESORA%')->whereBetween('created_at', ['2022-09-01','2022-09-31'])->get()->count();

        $variosCerrados = Caso::where('ESTADO','Cerrado')->orwhere('TIPODAÑO', 'LIKE','SWITCH%')->orwhere('TIPODAÑO', 'LIKE','INFORME%')->orwhere('TIPODAÑO', 'LIKE','CONVERTIR%')->orwhere('TIPODAÑO', ' LIKE','VPN%')->orwhere('TIPODAÑO', 'LIKE','PUNTOS DE RED%')->orwhere('TIPODAÑO', 'LIKE','SAIA%')->whereBetween('created_at', ['2022-09-01','2022-09-31'])->get()->count();
        

        #---------------------------------RENDERIZAR LOS DATOS EN LA VISTA---------------------------------#
        

        return view('estadisticas.index', ['enero' => $enero,'febrero' => $febrero,
        'marzo' => $marzo,'julio' => $julio,'agosto'=>$agosto,'septiembre'=>$septiembre ,'total' => $total, 
        'usuario1'=>$usuario1, 'usuario2'=> $usuario2,'usuario3'=>$usuario3, 'usuario4'=>$usuario4,'usuario5'=>$usuario5,
        'abierto1'=>$abierto1,'abierto2'=>$abierto2,'abierto3'=>$abierto3,'abierto4'=>$abierto4,'abierto5'=>$abierto5,
        'cerrado1'=>$cerrado1,'cerrado2'=>$cerrado2,'cerrado3'=>$cerrado3,'cerrado4'=>$cerrado4,'cerrado5'=>$cerrado5,
        'total1'=>$total1,'total2'=>$total2,'total3'=>$total3,'total4'=>$total4,'total5'=>$total5,
        'tipificado1'=>$tipificado1,'tipiabierto1'=>$tipiAbierto1,'tipicerrado1'=>$tipicerrado1,'tipificado2'=>$tipificado2,'tipificado3'=>$tipificado3,'tipificado4'=>$tipificado4,'tipificado5'=>$tipificado5,'tipificado6'=>$tipificado6,'tipificado7'=>$tipificado7,'tipificado8'=>$tipificado8,'tipificado9'=>$tipificado9,'tipificado10'=>$tipificado10,'totalCasos'=>$totalCasos,'TOTAL'=>$TOTAL,'tipiabierto2'=>$tipiAbierto2,'tipicerrado2'=>$tipicerrado2,'tipiabierto3'=>$tipiAbierto3,'tipicerrado3'=>$tipicerrado3,'tipiabierto4'=>$tipiAbierto4,'tipicerrado4'=>$tipicerrado4,'tipiabierto5'=>$tipiAbierto5,'tipicerrado5'=>$tipicerrado5,'tipiabierto6'=>$tipiAbierto6,'tipicerrado6'=>$tipicerrado6,'tipiabierto7'=>$tipiAbierto7,'tipicerrado7'=>$tipicerrado7,'tipiabierto8'=>$tipiAbierto8,'tipicerrado8'=>$tipicerrado8,'tipiabierto9'=>$tipiAbierto9,'tipicerrado9'=>$tipicerrado9,'tipiabierto10'=>$tipiAbierto10,'tipicerrado10'=>$tipicerrado10,'variosAbiertos'=>$variosAbiertos,
        'variosCerrados'=>$variosCerrados,
        'totalAbiertos'=>$totalAbiertos,'totalCerrados'=>$totalCerrados
        ]);
    }
}
