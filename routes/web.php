<?php

use App\Http\Controllers\AgentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\LegalController;
use App\Http\Controllers\ProjectController; 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Request;

// Aplicação NeveStar Página principal
Route::get('/', function () {
    return view('welcome');
})->name('dashboard');    

// Aplicação NeveStar Área de Serviços
Route::get('/services/software', [UserController::class, 'software'])->name('pages.software');
Route::get('/services/mobile', [UserController::class, 'mobile'])->name('pages.mobile');
Route::get('/services/web', [UserController::class, 'web'])->name('pages.web');
Route::get('/services/desktop', [UserController::class, 'desktop'])->name('pages.desktop');

// Aplicação NeveStar Páginas Complementares
Route::get('/orcament/plans', [UserController::class, 'plans'])->name('pages.plans');
Route::get('/about', [UserController::class, 'about'])->name('pages.about');
Route::get('/contact', [UserController::class, 'contact'])->name('pages.contact');

//  Route::post('/aceitar-cookies', function(Request $request) {
//     return response('OK')->cookie('cookies_accepted', 'yes', 60*24*30); // 30 dias
//  });

// Rotas de Cookies, Termos de Utilização e Privacidade
Route::get('/termos', [LegalController::class, 'termos'])->name('termos');
Route::get('/privacidade', [LegalController::class, 'privacidade'])->name('privacidade');
Route::get('/politica-de-cookies', [LegalController::class, 'cookiesPolicy'])->name('legal.cookies');

// Rota para salvar consentimento no backend (opcional)
Route::post('/cookies/accept', [LegalController::class, 'acceptCookies'])->name('cookies.accept');

//  Routa de detalhes de Projectos
Route::get('/projects/{projectId}', [ProjectController::class, 'show'])->name('details.detalhes');

// Routa de Chat
Route::get('/chat/messages', [ChatController::class, 'messages'])->name('chat.messages');
Route::get('/chat/mode', [ChatController::class, 'mode'])->name('chat.mode');
Route::post('/chat/choose', [ChatController::class, 'choose'])->name('chat.choose');
Route::post('/chat/send', [ChatController::class, 'send'])->name('chat.send');
Route::post('/chat/clear', [ChatController::class, 'clear'])->name('chat.clear'); // opcional para testes

// 

// Route::middleware(['auth'])->group(function () {
    Route::get('/agent', [AgentController::class, 'index'])->name('agent.index');
    Route::get('/agent/sessions', [AgentController::class, 'sessions'])->name('agent.sessions');
    Route::get('/agent/session/{sessionId}', [AgentController::class, 'openSession'])->name('agent.session.open');
    Route::post('/agent/session/{sessionId}/send', [AgentController::class, 'sendToSession'])->name('agent.session.send');
    Route::post('/agent/toggle-online', [AgentController::class, 'toggleOnline'])->name('agent.toggleOnline');

// });


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

