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
Route::middleware([isReviewer::class])->group(function(){
	Route::get('/reviewer', [ReviewerController::class,'index'])->name('reviewer.home');
	Route::get('/reviewer/entity/edit/{drug}', [ReviewerController::class, 'edit'])->name('reviewer.entity.edit');
	Route::get('/reviewer/entity/show/{drug}', [ReviewerController::class, 'show'])->name('reviewer.entity.show');
	Route::put('/reviewer/entity/update/{id}', [ReviewerController::class, 'update'])->name('reviewer.entity.update');
	Route::put('/reviewer/entity/update/status', [ReviewerController::class, 'updateStatus'])->name('reviewer.entity.updateStatus');

});

Route::middleware([isApplicant::class])->group(function(){
	Route::get('/applicant', [ApplicantController::class,'index'])->name('applicant.home');

		Route::get('/entity/create', [DrugsController::class,'create'])->name('applicant.entity.create');
	Route::post('/entity/store', [DrugsController::class, 'store'])->name('applicant.entity.store');
	Route::get('/entity/edit/{drug}', [DrugsController::class, 'edit'])->name('applicant.entity.edit');
	Route::get('/entity/show/{drug}', [DrugsController::class, 'show'])->name('applicant.entity.show');
	Route::put('/entity/update/{id}', [DrugsController::class, 'update'])->name('applicant.entity.update');
	Route::delete('/entity/delete/{id}', [DrugsController::class, 'delete'])->name('applicant.entity.destroy');
});