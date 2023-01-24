<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonaController;

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


Route :: get('/',[PersonaController::class,'index'])->name('persona.ver');
Route :: get('/create',[PersonaController::class,'create'])->name('persona.create');
Route :: post('/',[PersonaController::class,'store'])->name('persona.store');
Route :: get('/edit/{id}',[PersonaController::class,'edit'])->name('persona.edit');
Route :: delete('/delete/{id}',[PersonaController::class,'destroy'])->name('persona.delete');
Route :: put('/update/{id}',[PersonaController::class,'update'])->name('persona.update');
