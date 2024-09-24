<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\indexController;
use App\Http\Controllers\TambahController;


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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/index', [indexController::class, 'index'])->name('indexAja');
Route::get('/Tambah',[TambahController::class, 'tambah'])->name('TambahData');
// function ->name('indexAja'); sebagai penamaan dari baris route yang dibuat
