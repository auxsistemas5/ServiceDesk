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

class CasoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(auth()->user()){
            date_default_timezone_set('America/Bogota');
            //muestra solo los casos asisgnados segun el area de destino asociada al usuario como si es admin o no
            if(auth()->user()->admin == "TECNOLOGÍA"){

                $cases = Caso::where('AREADESTINO',auth()->user()->admin)->where('USUARIOASIGNADO','Sin Asignar')->where('ESTADO', 'Abierto')->get();
                $contador = Caso::where('AREADESTINO',auth()->user()->admin)->where('USUARIOASIGNADO','Sin Asignar')->where('ESTADO', 'Abierto')->get()->count();
                return view('casos.index', ['cases' => $cases, 'contador' => $contador]);
            }else{
                if(auth()->user()->admin == "MANTENIMIENTO"){

                    $cases = Caso::where('AREADESTINO',auth()->user()->admin)->where('USUARIOASIGNADO','Sin Asignar')->where('ESTADO', 'Abierto')->get();
                    $contador = Caso::where('AREADESTINO','MANTENIMIENTO')->where('USUARIOASIGNADO','Sin Asignar')->where('ESTADO', 'Abierto')->get()->count();
                    return view('casos.index', ['cases' => $cases, 'contador' => $contador]);
                }else{
                    if(auth()->user()->admin == "SOPORTE"){
    
                        $cases = Caso::where('AREADESTINO',auth()->user()->admin)->where('USUARIOASIGNADO','Sin Asignar')->where('ESTADO', 'Abierto')->get();
                        $contador = Caso::where('AREADESTINO','SOPORTE')->where('USUARIOASIGNADO','Sin Asignar')->where('ESTADO', 'Abierto')->get()->count();
                        return view('casos.index', ['cases' => $cases, 'contador' => $contador]);
                    }
                }
            }


        }else{
            return redirect()->route('login');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    
    {
        date_default_timezone_set('America/Bogota');
        $area = DB::table('areas_hospital')->orderBy('DEPARTAMENTO', 'ASC')->get();
        $daños = Dano::orderBy('TIPODANO', 'ASC')->get();
        return view('casos.create', ['area' => $area],['daños' => $daños]);
    }

    public function administrarCasos(){
        
    }

    public function miscasos(){
        if(auth()->user()){
            $micaso = Caso::where('USUARIOASIGNADO', auth()->user()->name)->where('ESTADO', 'Abierto')->orwhere('ESTADO', 'En Desarrollo')->get();
            $contador = Caso::where('USUARIOASIGNADO', auth()->user()->name)->where('ESTADO', 'Abierto')->orwhere('ESTADO', 'En Desarrollo')->get()->count();
            return view('casos.miscasos',['micaso' => $micaso, 'contador' => $contador]);
        }else{
            return redirect()->route('login');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        date_default_timezone_set('America/Bogota');
        $caso = new Caso();
        $caso->SOLICITANTE = $request->get('SOLICITANTE');
        $caso->PRIORIDAD = $request->get('PRIORIDAD');
        $caso->DESCRIPTION = $request->get('DESCRIPTION');
        $caso->AREA = $request->get('AREA');
        $caso->AREADESTINO = $request->get('AREADESTINO');
        $caso->TIPODAÑO = $request->get('TIPODAÑO');

        if($caso->AREADESTINO == 'SOPORTE'){
            $caso->USUARIOASIGNADO = 'Soporte';
        }

        //establece el formato de hora

        if($request->file('IMAGENEVIDENCIA') != null){
            $caso->IMAGENEVIDENCIA = $request->file('IMAGENEVIDENCIA')->store('public');
        }

        $saved = $caso->save();
        
        if($saved){
            Session::flash('creado', ' Caso Creado con exito');    
            return redirect('/dash/casos');
        }
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $area = DB::table('areas_hospital')->orderBy('DEPARTAMENTO', 'ASC')->get();
        $daños = DB::table('danos')->orderBy('TIPODANO', 'ASC')->get();
        //se trae todos los usuarios que tenga rol de administrador
        $users = User::where('type_rol',1)->get();
        $caso = Caso::find($id);
        date_default_timezone_set('America/Bogota');

        if($caso->IMAGENEVIDENCIA != NULL){

            $content = Storage::get($caso->IMAGENEVIDENCIA);
        }
        
        return view('casos.edit', ['caso' => $caso, 'users' => $users , 'area' => $area, 'daños' => $daños]);
        
    }

    public function image($id)
    {
        $caso = Caso::find($id);
        return Storage::download($caso->IMAGENEVIDENCIA);
    }

    /*public function casos(){
        return view('casos.casos');
    }*/



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function solucion($id)
    {
        $caso = Caso::find($id);
        return view('casos.solucion', ['caso' => $caso]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        date_default_timezone_set('America/Bogota');
        $caso = Caso::find($id);

        $caso->PRIORIDAD = $request->get('PRIORIDAD');
        $caso->DESCRIPTION = $request->get('DESCRIPTION');
        $caso->AREA = $request->get('AREA');
        $caso->AREADESTINO = $request->get('AREADESTINO');
        $caso->TIPODAÑO = $request->get('TIPODAÑO');
        $caso->USUARIOASIGNADO = $request->get('USUARIOASIGNADO');
        $caso->ESTADO = $request->get('ESTADO');


        //$caso->IMAGENEVIDENCIA = $request->file('IMAGENEVIDENCIA')->store('public');

        $saved = $caso->save();
        
        if($saved){
            Session::flash('actualizar', ' Caso Asignado con exito');    
            return redirect('/dash/casos');
        }
    }

    public function reasignar($id){
        date_default_timezone_set('America/Bogota');
        $area = DB::table('areas_hospital')->orderBy('DEPARTAMENTO', 'ASC')->get();
        $daños = DB::table('danos')->orderBy('TIPODANO', 'ASC')->get();
        //se trae todos los usuarios que tenga rol de administrador
        $users = User::where('type_rol',1)->get();
        $caso = Caso::find($id);

        if($caso->IMAGENEVIDENCIA != NULL){

            $content = Storage::get($caso->IMAGENEVIDENCIA);
        }
        
        return view('casos.reasignar', ['caso' => $caso, 'users' => $users , 'area' => $area, 'daños' => $daños]);
    }

    public function asignacion(Request $request, $id){
        $caso = Caso::find($id);

        $caso->PRIORIDAD = $request->get('PRIORIDAD');
        $caso->DESCRIPTION = $request->get('DESCRIPTION');
        $caso->AREA = $request->get('AREA');
        $caso->AREADESTINO = $request->get('AREADESTINO');
        $caso->TIPODAÑO = $request->get('TIPODAÑO');
        $caso->USUARIOASIGNADO = $request->get('USUARIOASIGNADO');
        $caso->ESTADO = $request->get('ESTADO');

        date_default_timezone_set('America/Bogota');

        //$caso->IMAGENEVIDENCIA = $request->file('IMAGENEVIDENCIA')->store('public');

        $saved = $caso->save();
        
        if($saved){
            Session::flash('creado', 'Caso Asignado con exito');    
            return redirect('/dash/casos');
        }
    }

    public function cerrarCaso(Request $request, $id)
    {
        //busca el id del objeto y luego modifica su estado a cerrado para salir de la lista de casos abiertos
        date_default_timezone_set('America/Bogota');
        $caso = Caso::find($id);

        $caso->ESTADO = $request->get('ESTADO');
        $caso->RESPUESTAUSUARIOASIGNADO = $request->get('RESPUESTAUSUARIOASIGNADO');
        $fecha = date('Y-m-d h:i:s');
        $caso->FECHA_CERRADO = $fecha;

        $caso->save();
        
        //saca el email del usuario que publico el caso para enviarle la respuesta
        /*$model = User::where('name', $caso->SOLICITANTE)->get();
        
        Mail::to($model[0]->email)->send(new NotificacionMailable($caso));*/
        Session::flash('cerrar', 'Caso Cerrado con exito');   
        return redirect('/dash/casos');
        

    }

    public function casoscerrados(){
        date_default_timezone_set('America/Bogota');

        //se organiza los casos cerrados desde el cerrado recien hasta el primero en cerrar//
        $casoscerrados = Caso::where('ESTADO','Cerrado')->where('AREADESTINO','TECNOLOGÍA')->orwhere('AREADESTINO','Soporte')->orderBy('id', 'DESC')->get();
        
        $contador = Caso::where('ESTADO','Cerrado')->where('AREADESTINO','TECNOLOGÍA')->orwhere('AREADESTINO','Soporte')->orderBy('updated_at', 'DESC')->get()->count();
        return view('casos.casoscerrados', ['casoscerrados' => $casoscerrados, 'contador' => $contador]);
        date_default_timezone_set('America/Bogota');
    }

    public function miscasoscreados(){
        date_default_timezone_set('America/Bogota');
        $caso = CASO::where('SOLICITANTE', auth()->user()->name)->get();
        return view('casos.miscasoscreados', ['caso' => $caso]);
        date_default_timezone_set('America/Bogota');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        date_default_timezone_set('America/Bogota');
        $caso = Caso::find($id);
        $caso->delete();
        return redirect('casos.administrarCasos');
    }

    public function excel(){
        date_default_timezone_set('America/Bogota');
        return Excel::download(new CasosExport, 'casos.xlsx');
        return redirect('/estadisticas/ver');
    }

}
