<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ParkingController;  // Asegúrate de que el controlador esté importado
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('home');
});

Route::get('/roles', [RoleController::class, 'index']); 
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Ruta de Parking
Route::get('/parking', [ParkingController::class, 'index'])->name('parking.page');

// Rutas para autenticación social
Route::get('/auth/{provider}', function ($provider) {
    return Socialite::driver($provider)->redirect();
});

Route::get('/auth/{provider}/callback', function ($provider) {
    $socialUser = Socialite::driver($provider)->user();

    $user = User::updateOrCreate(
        ['email' => $socialUser->getEmail()],
        [
            'name' => $socialUser->getName(),
            'provider_id' => $socialUser->getId(),
            'provider' => $provider,
        ]
    );

    Auth::login($user);

    // Redirigir después de la autenticación
    return redirect('/parking');  // Aquí rediriges a la página de parking después de iniciar sesión
});
