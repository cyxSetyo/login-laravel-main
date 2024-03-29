<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TicketController;
use Illuminate\Auth\Events\Login;
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


//dashboard
Route::middleware(['auth', 'isAdmin'])->group(function () {
  Route::get('/', [DashboardController::class, 'DashboardAdmin'])->name('index.dashboard')->middleware('auth');
});
Route::get('/WelcomeMember', [DashboardController::class, 'DashboardMember'])->middleware('auth');

//createTicket
Route::post('/create', [DashboardController::class, 'Create']);

//register
Route::get('/register', [RegisterController::class, 'Register'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'postRegister']);

//login
Route::get('/login', [LoginController::class, 'Login'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'postLogin']);
//logout
Route::post('/logout', [LoginController::class, 'postLogout'])->middleware('auth');

//Ticket
//oute::resource('/dashboard', TicketController::class);
Route::post('/ticket', [DashboardController::class, 'store'])->name('postTicket');


//Update
Route::get('/edit/{id}', [DashboardController::class, 'Edit'])->name('ticket.edit');
Route::post('/Update/{id}', [DashboardController::class, "Update"])->name('ticket.update');

//destroy
Route::get('/delete/{id}', [DashboardController::class, 'Destroy'])->name('ticket.destroy');