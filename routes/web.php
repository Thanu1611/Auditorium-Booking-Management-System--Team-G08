<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\EventController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SuperController;


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
Route::get('/home', function () {
    return view('Admin_Dashboard.admin_welcome');
})->name('home');
Route::get('/add_book', function () {
    return view('Admin_Dashboard.Add_Booking');
})->name('addbook');
Route::get('/view_book', function () {
    return view('Admin_Dashboard.View_Booking');
})->name('view_book');



Route::get('/', function () {
    return view('home.welcome');
});

Route::get('a/', function () {
    return view('home.view');
});

Route::get('K/', function () {
    return view('home.K');
});

Route::get('C/', function () {
    return view('home.C');
});

Route::get('L/', function () {
    return view('home.L');
});

Route::get('P/', function () {
    return view('home.P');
});

Route::get('/', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'login']);
Route::post('/register',[LoginController::class, 'register']);
Route::get('/audiupdate', [DashboardController::class, 'audiupdate'])->name('audiupdate');
Route::get('/graph', [DashboardController::class, 'graph'])->name('graph');
Route::get('/upevent', [DashboardController::class, 'upevent'])->name('upevent');
Route::get('/table', [DashboardController::class, 'table'])->name('table');
Route::get('/tableadd', [DashboardController::class, 'tableadd'])->name('tableadd');


Route::get('/superfront', [SuperController::class, 'superfront'])->name('front');
Route::get('/addaudi', [SuperController::class, 'addaudi'])->name('newone');
