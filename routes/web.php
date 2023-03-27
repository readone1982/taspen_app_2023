<?php

use App\Invoice;
use App\Owner;
use App\Unit;
use App\Usage;
use App\Estore;
use App\Attendance;
use App\Ticket;
use App\TicketList;
use App\Http\Controllers\TiketController;
use App\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::get('/login', function () {
    return view('login');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/tenant/tiket', [App\Http\Controllers\TiketController::class, 'tiket'])->name('tenant.tiket.index');
Route::get('/tiket/create', [App\Http\Controllers\TiketController::class, 'tiketCreate'])->name('tenant.tiket.create');
Route::post('/tiket/save', [App\Http\Controllers\TiketController::class, 'tiketSave'])->name('tenant.tiket.save');
Route::get('/tiket/pdf/{id}', [App\Http\Controllers\TiketController::class, 'tiket_pdf'])->name('tenant.tiket.pdf');
