<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\HomeComponent;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',HomeComponent::class)->name('home');


// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

// For User or Customer
Route::middleware(['auth:sanctum', 'verified'])->group(function(){

});

// For CLB colaborador
Route::middleware(['auth:sanctum', 'verified','authsuplente'])->group(function(){

});

// COS Contador Suplente
Route::middleware(['auth:sanctum', 'verified','authcolaborador'])->group(function(){

});


// Administrador
Route::middleware(['auth:sanctum', 'verified','authadmin'])->group(function(){

});

