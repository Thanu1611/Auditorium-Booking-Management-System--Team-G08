<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\EventController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\EventController;
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
/*
Route::get('/', function () {
    return view('Admin_Dashboard.admin_welcome');
});

*/

Route::get('/add_book/{auditoriumId}', [LoginController::class, 'addbook'])->name('addbook');
Route::get('/view_book/{auditoriumId}', [LoginController::class, 'viewbook'])->name('viewbook');

Route::get('/add_bookcus/{userId}', [LoginController::class, 'addbookcus'])->name('addbookcus');
Route::get('/view_bookcus/{userId}', [LoginController::class, 'viewbookcus'])->name('viewbookcus');

Route::get('/', function () {
    return view('Home.homepage');
});
Route::get('/CS', function () {
    return view('Home.cs');
});
Route::get('/Ka', function () {
    return view('Home.ka');
});
Route::get('/PA', function () {
    return view('Home.phy');
});
Route::get('/LA', function () {
    return view('Home.lib');
});

Route::get('/index', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/home/{auditoriumId}', [LoginController::class, 'home'])->name('home');
Route::get('/superdash', [LoginController::class, 'superadmindash'])->name('superdash');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');
Route::get('/audiupdate/{auditoriumId}', [DashboardController::class, 'audiupdate'])->name('audiupdate');
Route::get('/graph/{auditoriumId}', [DashboardController::class, 'graph'])->name('graph');
Route::get('/upevent/{auditoriumId}', [DashboardController::class, 'upevent'])->name('upevent');
Route::get('/table/{auditoriumId}', [DashboardController::class, 'table'])->name('table');
Route::get('/tableadd/{auditoriumId}', [DashboardController::class, 'tableadd'])->name('tableadd');

Route::get('/addaudi', [SuperAdminController::class, 'addaudi'])->name('addaudi');

Route::get('/superadmina', [SuperAdminController::class, 'superadmina'])->name('superadmina');

Route::post('/storeaudi', [SuperAdminController::class, 'storeaudi'])->name('storeaudi');

Route::get('/viewaudi/{id}', [SuperAdminController::class, 'viewAudi'])->name('viewaudi');

Route::get('/editaudi/{id}', [SuperAdminController::class, 'editAudi'])->name('editaudi');

Route::PUT('/updateaudi/{id}', [SuperAdminController::class, 'updateAudi'])->name('updateaudi');

Route::get('/superadmin', [SuperAdminController::class, 'superadmin'])->name('superadmin');

Route::get('/addadmin', [SuperAdminController::class, 'addadmin'])->name('addadmin');

Route::post('/storead', [SuperAdminController::class, 'storead'])->name('storead');

Route::get('/viewad/{id}', [SuperAdminController::class, 'viewAd'])->name('viewad');

Route::delete('/admin/{id}', [SuperAdminController::class, 'destroy'])->name('destroy');

Route::post('/storebook', [EventController::class, 'storebook'])->name('storebook');

Route::post('/storefaci', [EventController::class, 'storefaci'])->name('storefaci');

Route::get('/changeAppStatus/{eventId}', [EventController::class, 'changeAppStatus'])->name('changeAppStatus');

Route::get('/disAppStatus/{eventId}', [EventController::class, 'disAppStatus'])->name('disAppStatus');

Route::get('/AppStatus/{eventId}', [EventController::class, 'AppStatus'])->name('AppStatus');

Route::get('/pay/{eventId}', [EventController::class, 'pay'])->name('pay');

Route::get('/checkpay/{eventId}', [EventController::class, 'checkpay'])->name('checkpay');

Route::get('/editfaci/{name}/{auditorium}', [EventController::class, 'editfaci'])->name('editfaci');

Route::PUT('/updatefaci/{name}/{auditorium}', [EventController::class, 'updatefaci'])->name('updatefaci');

Route::PUT('/updatepay/{eventId}', [EventController::class, 'updatepay'])->name('updatepay');

Route::PUT('/confirmpay/{eventId}', [EventController::class, 'confirmpay'])->name('confirmpay');