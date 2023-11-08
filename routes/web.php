<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataAdminController;


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

route::view('/user', 'user/index');
route::view('/layout-su', 'superadmin/layout');
route::view('/dashboard-su', 'superadmin/dashboard');
route::view('/data-admin-view', 'superadmin/data-admin');
route::view('/data-dinas-view', 'superadmin/data-dinas');
route::view('/data-user-view', 'superadmin/data-user');
route::view('/data-validator-view', 'superadmin/data-validator');
Route::get('/data-admin',[DataAdminController::class, 'index']);


