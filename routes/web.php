<?php

use Illuminate\Support\Facades\Route;
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
Route::get('/add_book', function () {
    return view('Admin_Dashboard.Add_Booking');
})->name('add_book');
Route::get('/view_book', function () {
    return view('Admin_Dashboard.View_Booking');
})->name('view_book');*/


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
