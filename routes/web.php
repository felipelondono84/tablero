<?php

use Illuminate\Support\Facades\Route;
use App\Models\Event;
use App\Models\Dependencia;
use App\Models\Medidas;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\DependenciaController;
use App\Http\Controllers\Admin\MedidasController;
use App\Http\Controllers\Admin\HechosController;
use App\Http\Controllers\Admin\PoliticaController;
use App\Http\Controllers\Admin\ProgramasController;
use App\Http\Controllers\Admin\EstrategiasController;
use App\Http\Controllers\Admin\MetasController;
use App\Http\Controllers\Admin\PlanController;
use App\Http\Controllers\Admin\ActividadesController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');

Route::get('/new', function(){
    return 'new page';
});

Route::get('/events', function(){
    // Obtenemos los eventos de la BD
    $events = Event::all();

    // Asignar la cabecera del datatable
    $heads = [
        'ID',
        'Nombre',
        'Descripcion',
        'Tipo',
        'Fecha'
    ];


    //Retornamos la vista con los paramentros
     return view('events', compact('events', 'heads'));

});

Route::get('/events/create', function(){

    

    return view('events-create');
});

Route::resource('roles', RoleController::class)->names('admin.roles');

Route::resource('alumnos', AlumnoController::class);

Route::resource('users', UserController::class)->names('admin.users');

Route::resource('dependencia', DependenciaController::class);

Route::resource('medidas', MedidasController::class);

Route::resource('hechos', HechosController::class);

Route::resource('politica', PoliticaController::class);

Route::resource('programas', ProgramasController::class);

Route::resource('estrategias', EstrategiasController::class);

Route::resource('metas', MetasController::class);

Route::resource('planes', PlanController::class);

Route::resource('actividades', Actividades::class);