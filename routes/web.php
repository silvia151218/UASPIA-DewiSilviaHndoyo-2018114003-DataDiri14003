<?php

use App\Http\Controllers\AbsensController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PendidikansController;
use App\Http\Controllers\PekerjaanController;
use App\Http\Controllers\KontaksController;
use App\Http\Controllers\KontraksController;
use Illuminate\Support\Facades\Route;

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

Route::get('', [ProfileController::class, 'index']);
//Route::get('/Profile', [StudentController::class, 'index']);
//Route::get('/Profile/create', [StudentController::class, 'create']);
//Route::post('/Profile', [StudentController::class, 'store']);
//Route::get('/Profile/{id}', [StudentController::class, 'show']);
//Route::get('/Profile/{id}/edit', [StudentController::class, 'edit']);
//Route::put('/Profile/{id}', [StudentController::class, 'update']);
//Route::delete('/Profile/{id}', [StudentController::class, 'destroy']);
Route::resources([
    'Profile' => ProfileController::class,
    'absens' => AbsensController::class,
    'pendidikans' => PendidikansController::class,
    'pekerjaan' => PekerjaanController::class,
    'kontaks' => KontaksController::class,

]);
Route::get('/absens/addmember/{absen}', [AbsensController::class, 'addmember']);
Route::put('/absens/addmember/{absen}', [AbsensController::class, 'updateaddmember']);
Route::put('/absens/deleteaddmember/{absen}', [AbsensController::class, 'deleteaddmember']);