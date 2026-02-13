<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;

Route::get('/login', [UserController::class,'login'] );
Route::get('/', [UserController::class,'login'] );
Route::post('/student-login', [UserController::class,'loginUser'])->name('student.login');
Route::get('/dashboard', [DashboardController::class,'dashboard'] )->name('dashboard');
Route::get('/profile', [DashboardController::class,'profile'] )->name('profile');

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });
