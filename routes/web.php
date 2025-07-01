<?php
use Illuminate\Support\Facades\App as LangApp;
use Illuminate\Support\Facades\Session;

use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\ContactoController;
use App\Http\Controllers\InmuebleController;
use App\Http\Controllers\ScrapingController;
use App\Http\Controllers\ReservaController;


use App\Http\Controllers\clienteController;
use App\Http\Controllers\ServicioController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\CupsController;
use App\Http\Controllers\Cups_ServicioController;
use App\Http\Controllers\FacturasController;

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
//Cambiar contraseña
Route::get('perfil/password', [UsuarioController::class, 'editPassword'])->name('perfil.password.edit');
Route::put('perfil/password', [UsuarioController::class, 'updatePassword'])->name('perfil.password.update');

//formulario de contacto
Route::get('/contacto', [ContactoController::class, 'show'])->name('contacto');
Route::post('/contacto', [ContactoController::class, 'send']);

Route::get('generate-pdf-user', [App\Http\Controllers\PDFController::class, 'generatePDFUser']);
Route::get('generate-pdf-clients', [App\Http\Controllers\PDFController::class, 'generatePDFCliente']);
Route::get('/generate-pdf-reserva/{id}', [App\Http\Controllers\PDFController::class, 'generatePDFReserva'])->name('pdf.reserva');


Route::post('/language', function () {
    $locale = request('locale');
    Session::put('locale', $locale);
    LangApp::setLocale($locale);
    return back();
})->name('language.change');


Route::get('/inmuebles', [InmuebleController::class, 'index'])->name('inmuebles');


//Sobre Nosotros tanto invitados como registrados
Route::get('/nosotros', function () {
    return view('SN');
})->name('nosotros');

//Solo para invitados
Route::group(['middleware' => ['guest']], function () {
    Route::get('/', function () {
        return view('Insesion');
    });

    Auth::routes(['verify' => true]);
});
Route::get('/politica-cookies', function () {
    return LangApp::getLocale() === 'en' ? view('pCookies_en') : view('pCookies_es');
})->name('cookies');

Route::get('/politica-privacidad', function () {
    return LangApp::getLocale() === 'en' ? view('PPrivacy_en') : view('PPrivacy_es');
})->name('privacy');

Route::get('/aviso-legal', function () {
    return LangApp::getLocale() === 'en' ? view('ALegal_en') : view('ALegal_es');
})->name('legal');



Route::post('/logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');


// Solo personas registradas pueden acceder
Route::group(['middleware' => ['auth', 'verified'], 'as' => 'admin.'], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    
    Route::get('perfil/reservas', [App\Http\Controllers\ReservaController::class, 'index'])->name('reservas.index');
    Route::post('perfil/reservas', [App\Http\Controllers\ReservaController::class, 'store'])->name('reservas.store');
    Route::delete('/reservas/{reserva}', [App\Http\Controllers\ReservaController::class, 'destroy'])->name('reservas.destroy');


//Inmueble tanto invitados como registrados
/*Route::get('/homeUser', function () {
    return view('home');
})->name('home');*/


Route::middleware(['admin'])->group(function () {
    Route::resource('usuarios', UsuarioController::class);
});
    Route::post('/scraping/todo', [ScrapingController::class, 'scrapeTodo'])->name('scraping.todo');
    Route::resource('perfil', UsuarioController::class);
    
    Route::resource('clientes', clienteController::class);
    Route::resource('servicios', ServicioController::class);
    Route::resource('cups', CupsController::class);
    Route::resource('cups_servicios', Cups_ServicioController::class);
    Route::resource('facturas', FacturasController::class);
    

    
});



