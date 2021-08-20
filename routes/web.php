<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;

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

Route::delete('/eliminar/{id}', [DataController::class, 'destroy'])->name('destroy');

 
Route::get('/', [DataController::class, 'index'])->name('index');
Route::get('/edit/{id}', [DataController::class, 'edit'])->name('edit');
Route::put('/edit/{id}', [DataController::class, 'update'])->name('update');




Route::get('/create', [DataController::class, 'create'])->name('create');
Route::post('/create', [DataController::class, 'store'])->name('store');



//route::resource('data', DataController::class);