<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Model\User;
use app\resources\view\auth;

class DashboardController extends Controller
{
    public function index(){
        //valida si hay una session activa en caso de que no redirige hacia el login
        
            //distingue el usuario segun el tipo de rol que este tenga y lo edeirecciona
        if(auth()->user()){

            if(auth()->user()->type_rol == 1){
                return view('dash.index');
                
            }else if(auth()->user()->type_rol == 0){

                return view('dash.home');
            }
        }
        else{

            return redirect()->route('login');
        
        }
        
    }
}
