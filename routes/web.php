<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataAdminController;
//use App\Http\Controllers\DataValidatorController;
use App\Http\Controllers\PengaduanController;

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

//Route::get('/', function () {
    //return view('register');
//});


// route master data
//Route::get('/dashboard', function () {
   // return view('dashboard', ['title' => 'Dashboard']);
 //})->name('dahsboard');
//route::view('/user', 'user/index');
//route::view('/layout-su', 'superadmin/layout');
//route::view('/dashboard-su', 'superadmin/dashboard');
route::view('/data-admin-view', 'superadmin/data-admin');
//Route::get('/data-validator', [App\Http\Controllers\DataValidatorController::class, 'superadmin'])->name('data-validator');
//route::view('/data-dinas-view', 'superadmin/data-dinas');
//route::view('/data-user-view', 'superadmin/data-user');
//route::view('/data-validator-view', 'superadmin/data-validator');
Route::get('/data-admin',[App\Http\Controllers\DataAdminController::class, 'index'])->name('data-admin');


//route pengaduan
Route::get('/pengaduan',[App\Http\Controllers\PengaduanController::class, 'index'])->name('pengaduan');


route::view('/data-dinas-view', 'superadmin/data-dinas');
route::view('/data-user-view', 'superadmin/data-user');
route::view('/data-validator-view', 'superadmin/data-validator');
//route::get('/data-admin',[DataAdminController::class, 'index']);

