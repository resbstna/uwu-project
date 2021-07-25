<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TamuController;
use App\Http\Controllers\TampilanController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RangkaianAcaraController;
use App\Http\Controllers\PengaturanController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/register2', function () {
    return view('register');
});

Route::get('/undangan', [TampilanController::class, 'index'])->name('tampilan.index');
Route::get('/undangan/{url}', [TampilanController::class, 'index2'])->name('tampilan.index2');
Route::post('/undangan', [TampilanController::class, 'store'])->name('tampilan.store');
Route::get('/undangan/delete/{id}', [TampilanController::class, 'destroy'])->name('tampilan.destroy');
Route::post('/undangan/update/{id}', [TampilanController::class, 'update'])->name('tampilan.update');



Route::get('/tamu', [TamuController::class, 'index'])->name('tamu.index');
Route::post('/tamu', [TamuController::class, 'store'])->name('tamu.store');
Route::get('/tamu/delete/{id}', [TamuController::class, 'destroy'])->name('tamu.destroy');
Route::put('/tamu/update/{id}', [TamuController::class, 'update'])->name('tamu.update');
Route::get('/export_tamu', [TamuController::class, 'export'])->name('tamu.export');
Route::get('/export_template', [TamuController::class, 'export_template'])->name('tamu.export_template');


Route::get('/rangkaian_acara', [RangkaianAcaraController::class, 'index'])->name('rangkaian_acara.index');
Route::post('/rangkaian_acara', [RangkaianAcaraController::class, 'store'])->name('rangkaian_acara.store');
Route::get('/rangkaian_acara/delete/{id}', [RangkaianAcaraController::class, 'destroy'])->name('rangkaian_acara.destroy');
Route::put('/rangkaian_acara/update/{id}', [RangkaianAcaraController::class, 'update'])->name('rangkaian_acara.update');



Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
Route::get('/pengaturan', [PengaturanController::class, 'index'])->name('pengaturan.index');


Route::get('qrcode', [DashboardController::class, 'generate'])->name('generate');


Route::get('/template-undangan', function () {
    return view('template-undangan');
});

Route::get('/qr', function()
{
	return QrCode::size(500)
	->backgroundColor(255, 255, 204)
	->generate('kohortkia.net');
});
