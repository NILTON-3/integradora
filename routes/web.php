<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Solicitud;
use App\Models\Juguete;

// Página de inicio
Route::get('/', function () {
    return view('inicio');
});

// Página de servicios
Route::get('/servicios', function () {
    return view('servicios');
});

// Mostrar formulario de contacto
Route::get('/contacto', function () {
    return view('contacto');
});

// Guardar solicitudes
Route::post('/contacto', function (Request $request) {

    $datos = $request->validate([
        'nombre' => 'required|max:100',
        'correo' => 'required|email',
        'telefono' => 'nullable|max:30',
        'servicio' => 'required',
        'mensaje' => 'required|max:2000',
    ]);

    Solicitud::create($datos);

    return redirect('/contacto')
        ->with('exito', '¡Tu solicitud fue enviada correctamente!');
});

// Mostrar formulario de inicio de sesión
Route::get('/login', function () {
    return view('login');
})->name('login');

// Verificar correo y contraseña
Route::post('/login', function (Request $request) {

    $datos = $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    if (Auth::attempt($datos)) {
        $request->session()->regenerate();
        return redirect('/panel');
    }

    return back()->with('error', 'Correo o contraseña incorrectos.');
});

// Panel protegido
Route::get('/panel', function () {

    $solicitudes = Solicitud::latest()->get();

    return view('panel', compact('solicitudes'));

})->middleware('auth');

// Cerrar sesión
Route::post('/logout', function (Request $request) {

    Auth::logout();

    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect('/login');
})->middleware('auth');
// EXAMEN INTEGRADOR - JUGUETERIA EL TROMPO

// Mostrar todos los juguetes
Route::get('/juguetes', function () {
    $juguetes = Juguete::all();

    return view('juguetes', [
        'juguetes' => $juguetes
    ]);
});

// Mostrar formulario para registrar
Route::get('/juguetes/nuevo', function () {
    return view('juguetes-nuevo');
});

// Validar y guardar juguete
Route::post('/juguetes/nuevo', function () {

    request()->validate([
        'nombre' => 'required',
        'precio' => 'required|integer'
    ], [
        'nombre.required' => 'Pone el nombre del juguete.',
        'precio.required' => 'Pone el precio del juguete.',
        'precio.integer' => 'Aca el precio va entero, sin decimales ni letras.'
    ]);

    Juguete::create([
        'nombre' => request()->input('nombre'),
        'precio' => request()->input('precio')
    ]);

    return redirect('/juguetes');
});