<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
Route::get('/', function () {
    return redirect(route('login'));
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('dashboard', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard');

// Admision form

Route::post('/updateStatus', [App\Http\Controllers\AdmisionformController::class, 'updateStatus'])->name('updateStatus');



// Route::get('admision-form', [App\Http\Controllers\AdmisionformController::class, 'index'])->name('admin-status');
Route::get('status', [App\Http\Controllers\AdmisionformController::class, 'status'])->name('status');
Route::get('admisionform-view/{id}', [App\Http\Controllers\AdmisionformController::class, 'formview'])->name('admisionform-view');
Route::post('formstore', [App\Http\Controllers\AdmisionformController::class, 'formstore'])->name('formstore');
Route::get('formedit/{id}', [App\Http\Controllers\AdmisionformController::class, 'formedit'])->name('formedit');
Route::post('formupdate', [App\Http\Controllers\AdmisionformController::class, 'formupdate'])->name('formupdate');

// pdf
Route::get('formPdf/{id}',[App\Http\Controllers\AdmisionformController::class, 'formPdf'])->name('formPdf');

// excel
Route::get('export',[App\Http\Controllers\ExportController::class, 'exportForms'])->name('exportForms');



// manage users
Route::get('/manageusers', [App\Http\Controllers\ManageusersController::class, 'managerusers'])->name('managerusers');
Route::post('/managerusersupdate', [App\Http\Controllers\ManageusersController::class, 'managerusersupdate'])->name('managerusersupdate');
Route::get('/manageusersedit/{id}', [App\Http\Controllers\ManageusersController::class, 'managerusersedit'])->name('manageusersedit');
Route::delete('/managerusersdelete/{id}', [App\Http\Controllers\ManageusersController::class, 'managerusersdelete'])->name('managerusersdelete');






