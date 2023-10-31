<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\EventController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SuperAdminController;

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
Route::get('/add_book', function () {
    return view('Admin_Dashboard.Add_Booking');
})->name('addbook');
Route::get('/view_book', function () {
    return view('Admin_Dashboard.View_Booking');
})->name('view_book');

Route::get('/user_view_book', function () {
    return view('InternalUser_DashBoard.View_Booking');
})->name('user_view_book');
Route::get('/user_add_book', function () {
    return view('InternalUser_DashBoard.Add_Booking');
})->name('user_add_book');


Route::get('/', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'login']);
Route::post('/register',[LoginController::class, 'register']);
Route::get('/home/{auditoriumId}', [LoginController::class, 'home'])->name('home');
Route::get('/superdash', [LoginController::class, 'superadmindash'])->name('superdash');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');
Route::get('/audiupdate', [DashboardController::class, 'audiupdate'])->name('audiupdate');
Route::get('/graph', [DashboardController::class, 'graph'])->name('graph');
Route::get('/upevent', [DashboardController::class, 'upevent'])->name('upevent');
Route::get('/table', [DashboardController::class, 'table'])->name('table');
Route::get('/tableadd', [DashboardController::class, 'tableadd'])->name('tableadd');
Route::get('/superadmin', function () {
    return view('Super_admin.add_admin');
});

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