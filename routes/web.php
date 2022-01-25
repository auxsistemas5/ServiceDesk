<?php

use Illuminate\Support\Facades\Route;
use App\Mail\NotificacionMailable;
use Illuminate\Support\Facades\Mail;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//-----------rutas de login y cierre de session--------------------------\\
Route::get('/', 'Laravel\Fortify\Http\Controllers\AuthenticatedSessionController@create');
Route::get('/logout', 'Laravel\Fortify\Http\Controllers\AuthenticatedSessionController@destroy');

//rutas de la vista y controlados casos dentro del administrador
Route::get ('/dash/casos', function (){
    return view('casos.index');
});

Route::get('/dash/info', function (){
    return view('profile.show');
});

Route::get('/dash/casos/miscasos/solucionarCaso', function (){
    return view('casos.solucion');
});

Route::get('/dash/casos/miscasos', function (){
    return view('casos.miscasos');
});



Route::get('/dash/casos/casoscerrados', function (){
    return view('casos.casoscerrados');
});

Route::get('/dash/casos/miscasoscreados', function (){
    return view('casos.miscasoscreados');
});


Route::get('/dash', 'App\Http\Controllers\DashboardController@index');

Route::get('/dash/usuarios/ver', 'App\Http\Controllers\UsuariosController@index');

Route::resource('/dash/casos', 'App\Http\Controllers\CasoController');

Route::get('/dash/casos/create', 'App\Http\Controllers\CasoController@create');
Route::get('/dash/casos/miscasos', 'App\Http\Controllers\CasoController@miscasos');
Route::get('/dash/casos/miscasos/{id}/solucionarCaso', 'App\Http\Controllers\CasoController@solucion');
Route::put('/dash/casos/miscasos/{id}/cerrarCaso', 'App\Http\Controllers\CasoController@cerrarCaso');
Route::get('/dash/casos/casoscerrados', 'App\Http\Controllers\CasoController@casoscerrados');
Route::get('/dash/casos/miscasoscreados', 'App\Http\Controllers\CasoController@miscasoscreados');

Route::get('/dash/casos/{id}/edit/image', 'App\Http\Controllers\CasoController@image');
Route::get('/dash/casos/{id}/reasignar/', 'App\Http\Controllers\CasoController@reasignar');

Route::put('/dash/casos/miscasos/{id}/asignar', 'App\Http\Controllers\CasoController@asignacion');




Route::get('/dash/mesaDeAyuda', function (){
    return view('home.index');
});

Route::get('/dash/mesaDeAyuda/miscasos', function (){
    return view('home.miscasos');
});

Route::get('/dash/info/hospital', function (){
    return view('home.info');
});



Route::resource('/dash/mesaDeAyuda/', 'App\Http\Controllers\CasoUsuarioController');
Route::get('/dash/mesaDeAyuda/miscasos', 'App\Http\Controllers\CasoUsuarioController@index');
Route::get('/dash/mesaDeAyuda/create', 'App\Http\Controllers\CasoUsuarioController@create');
Route::get('/dash/mesaDeAyuda/miscasos', 'App\Http\Controllers\CasoUsuarioController@miscasos');
Route::get('/dash/mesaDeAyuda/miscasoscerrados', 'App\Http\Controllers\CasoUsuarioController@miscasoscerrados');



//ruta de daños dentro del administrador
Route::resource('/dash/danos', 'App\Http\Controllers\DanoController');
Route::get('/dash/danos/create', 'App\Http\Controllers\DanoController@create');

//rut apara el pdf
/*Route::get('/dash/casos/reporte', function (){
    return view('document.index');
});*/
Route::resource('/reporte', 'App\Http\Controllers\DocumentController');
Route::get('/reporte/casos/', 'App\Http\Controllers\DocumentController@show');
Route::get('/reporte/casos/exportar', 'App\Http\Controllers\DocumentController@downloadPDF');


//ruta de estadisticas
Route::resource('/estadisticas', 'App\Http\Controllers\EstadisticasController');
Route::get('/estadisticas/ver', 'App\Http\Controllers\EstadisticasController@index');






