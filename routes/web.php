<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\KeuanganController;
use App\Http\Controllers\FinancesController;

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
//     return view('index');
// });


// Route::get('/about', function () {
//     $nama = 'Frans Sebastian Leacardo';
//     return view('about', ['nama' => $nama]);
// });

Route::get('/', [PagesController::class, 'home']);
Route::get('/about', [PagesController::class, 'about']);

//  Keuangan
Route::get('/keuangan', [KeuanganController::class, 'index']);

// Finances

// Cara pertama
// Route::get('/finances', [FinancesController::class, 'index']);
// Route::get('/finances/create', [FinancesController::class, 'create']);
// Route::get('/finances/{finance}', [FinancesController::class, 'show']);
// Route::post('/finances', [FinancesController::class, 'store']);
// Route::delete('/finances/{finance}', [FinancesController::class, 'destroy']);
// Route::get('/finances/{finance}/edit', [FinancesController::class, 'edit']);
// Route::patch('/finances/{finance}', [FinancesController::class, 'update']);

// Cara Kedua
Route::resource('finances', FinancesController::class);
