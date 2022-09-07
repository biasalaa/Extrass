<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\extraController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UserRegisController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

// landingpage route    
Route::get('/', [LandingController::class, 'index']);

// authentication route
Route::get('/login', [AuthController::class, 'LoginUI'])->middleware('guest')->name('login');

Route::post('/login', [AuthController::class, 'authenticate']);

Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth');

Route::get('/register', [AuthController::class, 'RegisterUI']);

Route::post('/registration', [AuthController::class, 'Registration']);


// dashboard route

Route::get('/dashboard', [DashboardController::class, 'dashboard'])->middleware(['auth']);

Route::get('/userextra', [DashboardController::class, 'UserExtra'])->middleware(['auth', 'user']);

Route::get('/pilextra', [DashboardController::class, 'pilExtra'])->middleware(['auth', 'user']);

Route::post('/pilextra', [DashboardController::class, 'pilExtraPost'])->middleware(['auth', 'user']);

Route::get('/daftarextra', [DashboardController::class, 'DaftarExtra'])->middleware(['auth', 'user']);

Route::get('/userterdaftar', [DashboardController::class, 'UserTerdaftar'])->middleware(['auth', 'admin']);

Route::post('/userterdaftar', [DashboardController::class, 'UserFilter'])->middleware(['auth', 'admin']);

Route::get('/userterdaftar/{id}', [DashboardController::class, 'ShowUser'])->middleware(['auth', 'admin']);

Route::get('/deleteuser/{id}', [DashboardController::class, 'DeleteUser'])->middleware(['auth', 'admin']);

Route::get('/deleteextra/{id}', [DashboardController::class, 'DeleteExtra'])->middleware(['auth', 'admin']);

Route::get('edituserterdaftar/{id}', [DashboardController::class, 'EditUser'])->middleware(['auth', 'admin']);

Route::post('edituserterdaftar/{id}', [DashboardController::class, 'EditUserTerdaftar'])->middleware(['auth', 'admin']);

Route::resource('/dataextrakulikuler', extraController::class)->middleware(['auth', 'admin']);

Route::resource('/category', categoryController::class)->middleware(['auth', 'admin']);

Route::resource('/userregister', UserRegisController::class)->middleware(['auth', 'admin']);

Route::post('/contact', [ContactController::class, 'store'])->middleware('guest');

Route::get('/contact', [ContactController::class, 'index'])->middleware(['auth', 'admin']);

Route::get('/contact/{id}', [ContactController::class, 'show'])->middleware(['auth', 'admin']);

Route::post('/contact/{id}', [ContactController::class, 'destroy'])->middleware(['auth', 'admin']);

Route::get('editprofil/{id}', [DashboardController::class, 'editProfil'])->middleware(['auth', 'user']);

Route::post('editprofil/{id}', [DashboardController::class, 'updateProfil'])->middleware(['auth', 'user']);