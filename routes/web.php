<?php
use App\Http\Controllers\clienteController;
use App\Http\Controllers\ServicioController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\CupsController;
use App\Http\Controllers\Cups_ServicioController;
use Illuminate\Support\Facades\Route;

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


Route::group(['middleware' => ['guest']], function () {
    Route::get('/', function () {
        return view('auth/login');
    });

    Auth::routes(['verify' => true]);
});

Route::post('/logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');

Route::group(['middleware' => ['auth', 'verified'], 'as' => 'admin.'], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::resource('usuarios', UsuarioController::class);
    Route::resource('clientes', clienteController::class);
    Route::resource('servicios', ServicioController::class);
    Route::resource('cups', CupsController::class);
    Route::resource('cups_servicios', Cups_ServicioController::class);
});


