<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;

Route::get('/', function () {
    return view('welcome');
})->name('dashboard');

Route::get('/index-user', [UserController::class, 'index'])->name('user.index');
Route::get('/show-user/{user}', [UserController::class, 'show'])->name('user.show');

Route::get('/create-user', [UserController::class, 'create'])->name('user.create');
Route::post('/store-user', [UserController::class, 'store'])->name('user.store');

// Aplicação NeveStar
Route::get('/neveStar', [UserController::class, 'nevestar'])->name('user.nevestar');

// Aplicação NeveStar Área de Serviços
Route::get('/services/software', [UserController::class, 'software'])->name('user.software');
Route::get('/services/mobile', [UserController::class, 'mobile'])->name('user.mobile');
Route::get('/services/web', [UserController::class, 'web'])->name('user.web');
Route::get('/services/desktop', [UserController::class, 'desktop'])->name('user.desktop');

// Aplicação NeveStar Páginas Complementares
Route::get('/orcament/plans', [UserController::class, 'plans'])->name('user.plans');
Route::get('/about', [UserController::class, 'about'])->name('user.about');
Route::get('/contact', [UserController::class, 'contact'])->name('user.contact');

// Painel Administrativo da Aplicação NeveStar
Route::prefix('admin')->group(function () {
    // Show login form
    Route::get('login', [AdminController::class, 'create'])->name('admin.login');
    // Handle Login from Submission the Request
    Route::post('login', [AdminController::class, 'store'])->name('admin.login.request');
    

    Route::middleware('admin')->group(function () {
        // Dashboard Route or the Main page
        Route::resource('dashboard', AdminController::class)->only(['index']);
        // Display Update Password Page
        Route::get('update-password',[AdminController::class, 'edit'])->name('admin.update-password');
        // Verify Password Route
         Route::post('verify-password',[AdminController::class, 'verifyPassword'])->name('admin.verify-password');
        // Update Password Route
        Route::post('update-password',[AdminController::class, 'updatePasswordRequest'])->name('admin.update-password.request');
        // Admin Logout Route
        Route::get('logout',[AdminController::class, 'destroy'])->name('admin.logout');
    });

});

Route::get('/edit-user/{user}', [UserController::class, 'edit'])->name('user.edit');
Route::put('/update-user/{user}', [UserController::class, 'update'])->name('user.update');

Route::get('/edit-user-password/{user}', [UserController::class, 'editPassword'])->name('user.edit-password'); 
Route::put('/update-user-password/{user}', [UserController::class, 'updatePassword'])->name('user.update-password'); 

Route::delete('/destroy-user/{user}', [UserController::class, 'destroy'])->name('user.destroy');

Route::get('/generate-pdf-user/{user}', [UserController::class, 'generatePdf'])->name('user.generate-pdf');