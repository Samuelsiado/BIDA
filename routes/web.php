<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormValidtionController;
use Illuminate\Http\Request;

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

Route::get('/menu', function () {
    return view('menu');
});





Route::get('/form', [FormValidtionController::class, 'createUserForm']);
Route::post('/form', [FormValidtionController::class, 'UserForm'])->name('validate.form');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
