<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Caso;
use App\Models\User;
use App\Models\Dano;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;
use PDF;
use Datetime;

class DocumentController extends Controller
{
    public function show(){
        if(date('m') == '01'){

            $casos = Caso::where('ESTADO','Cerrado')->get();
            $contador = Caso::where('ESTADO','Cerrado')->whereBetween('updated_at',['01-01-2022','31-01-2022'])->get()->count();
            return view('document.index', ['casos' => $casos, 'contador' => $contador]);
        }else{
            if(date('m') == '02'){
                $casos = Caso::where('ESTADO','Cerrado')->get();
                $contador = Caso::where('ESTADO','Cerrado')->whereBetween('updated_at',['01-02-2022','28-02-2022'])->get()->count();
                return view('document.index', ['casos' => $casos, 'contador' => $contador]);
            }else{
                if(date('m') == '03'){
                    $casos = Caso::where('ESTADO','Cerrado')->get();
                    $contador = Caso::where('ESTADO','Cerrado')->whereBetween('updated_at',['01-03-2022','31-03-2022'])->get()->count();
                    return view('document.index', ['casos' => $casos, 'contador' => $contador]);
                }else{
                    if(date('m') == '04'){
                        $casos = Caso::where('ESTADO','Cerrado')->get();
                        $contador = Caso::where('ESTADO','Cerrado')->whereBetween('updated_at',['01-04-2022','30-04-2022'])->get()->count();
                        return view('document.index', ['casos' => $casos, 'contador' => $contador]);
                    }else{
                        if(date('m') == '05'){
                            $casos = Caso::where('ESTADO','Cerrado')->get();
                            $contador = Caso::where('ESTADO','Cerrado')->whereBetween('updated_at',['01-05-2022','31-05-2022'])->get()->count();
                            return view('document.index', ['casos' => $casos, 'contador' => $contador]);
                        }else{
                            if(date('m') == '06'){
                                $casos = Caso::where('ESTADO','Cerrado')->get();
                                $contador = Caso::where('ESTADO','Cerrado')->whereBetween('updated_at',['01-06-2022','30-06-2022'])->get()->count();
                                 return view('document.index', ['casos' => $casos, 'contador' => $contador]);
                            }else{
                                if(date('m') == '07'){
                                    $casos = Caso::where('ESTADO','Cerrado')->get();
                                    $contador = Caso::where('ESTADO','Cerrado')->whereBetween('updated_at',['01-07-2022','31-07-2022'])->get()->count();
                                    return view('document.index', ['casos' => $casos, 'contador' => $contador]);
                                }else{
                                    if(date('m') == '08'){
                                        $casos = Caso::where('ESTADO','Cerrado')->get();
                                        $contador = Caso::where('ESTADO','Cerrado')->whereBetween('updated_at',['01-08-2022','31-08-2022'])->get()->count();
                                         return view('document.index', ['casos' => $casos, 'contador' => $contador]);
                                    }else{
                                        if(date('m') == '09'){
                                            $casos = Caso::where('ESTADO','Cerrado')->get();
                                            $contador = Caso::where('ESTADO','Cerrado')->whereBetween('updated_at',['01-09-2022','30-09-2022'])->get()->count();
                                            return view('document.index', ['casos' => $casos, 'contador' => $contador]);
                                        }else{
                                            if(date('m') == '10'){
                                                $casos = Caso::where('ESTADO','Cerrado')->get();
                                                $contador = Caso::where('ESTADO','Cerrado')->whereBetween('updated_at',['01-10-2022','31-10-2022'])->get()->count();
                                                return view('document.index', ['casos' => $casos, 'contador' => $contador]);
                                            }else{
                                                if(date('m') == '11'){
                                                    $casos = Caso::where('ESTADO','Cerrado')->get();
                                                    $contador = Caso::where('ESTADO','Cerrado')->whereBetween('updated_at',['01-11-2022','30-11-2022'])->get()->count();
                                                    return view('document.index', ['casos' => $casos, 'contador' => $contador]);
                                                }else{
                                                    if(date('m') == '02'){
                                                        $casos = Caso::where('ESTADO','Cerrado')->get();
                                                        $contador = Caso::where('ESTADO','Cerrado')->whereBetween('updated_at',['01-12-2022','31-12-2022'])->get()->count();
                                                        return view('document.index', ['casos' => $casos, 'contador' => $contador]);
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    }

    public function downloadPDF(){
        $fechaI = "2022-01-01";
        $final = "2022-01-31";
        $casos = Caso::where('ESTADO','Cerrado')->whereBetween('updated_at',[$fechaI,$final])->get();
        $pdf = PDF::loadView('document.index', compact('casos'));

        return $pdf->download('casosDelMes.pdf');
        return redirect('/estadisticas/ver');
    }
}

