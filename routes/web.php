<?php

use App\Http\Controllers\ApplicantController;
use App\Http\Controllers\DrugsController;
use App\Http\Controllers\ReviewerController;
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
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//applicant and reviewer
Route::get('/applicant', [ApplicantController::class,'index'])->name('applicant.home');
Route::get('/add/entity', [DrugsController::class,'create'])->name('applicant.add.entity');
Route::get('/edit/entity', [DrugsController::class,'edit'])->name('applicant.edit.entity');
Route::get('/reviewer', [ReviewerController::class,'index'])->name('reviewer.home');
