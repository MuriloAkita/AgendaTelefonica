<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgendaController;

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

Route::get('/', [AgendaController::class, 'index'])->name('agenda.index');
Route::get('adicionar', [AgendaController::class, 'create'])->name('agenda.create');
Route::get('editar/{id}', [AgendaController::class, 'edit'])->name('agenda.edit');
Route::post('adicionar', [AgendaController::class, 'store'])->name('agenda.store');
Route::put('editar/{id}', [AgendaController::class, 'update'])->name('agenda.update');
Route::delete('excluir/{id}', [AgendaController::class, 'destroy'])->name('agenda.destroy');
