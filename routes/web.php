<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// Halaman awal
Route::get('/', function () {
    return view('welcome'); 
});

// Halaman Register
Route::get('/register', [AuthController::class, 'showRegisterForm']);
Route::post('/register', [AuthController::class, 'register']);

// Halaman Login
Route::get('/login', [AuthController::class, 'showLoginForm']);
Route::post('/login', [AuthController::class, 'login']);

// Halaman Home
Route::get('/home', function () {
    $data = [
        'nim' => '2257401003',
        'name' => 'Deni Firmanda',
        'class' => 'MI22AB'
    ];
    return view('home', $data);
})->middleware('auth'); // Menggunakan middleware untuk melindungi halaman ini

// Logout
Route::get('/logout', [AuthController::class, 'logout']);
?>