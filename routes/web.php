<?php

use App\Http\Controllers\LibroController;
use App\Http\Controllers\LoginController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login',[LoginController::class,'loginGET'])->name('login');
Route::post('/login',[LoginController::class,'loginPOST']);
Route::get('/logout',[LoginController::class,'logout']);
// http://127.0.0.1:8000/libro
Route::controller(LibroController::class)->prefix('libro')->group(function () {
    Route::middleware('auth')->get('/', [LibroController::class,'index'])->name('librolistar'); 
    Route::middleware('auth')->get('/create', [LibroController::class, 'create'])->name('librocreate'); 
    Route::middleware('auth')->post('/create', [LibroController::class, 'store']);
});