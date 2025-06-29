<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\GoogleAuthController;

// Landing Page
Route::get('/', function () {
    return view('landing');
});

// About Page
Route::get('/about', function () {
    return view('about');
});

// Contact Page
Route::get('/contact', function () {
    return view('contact');
});

// Support Page
Route::get('/support', function () {
    return view('support');
});


// Google OAuth Routes
Route::get('auth/google', [GoogleAuthController::class, 'redirect'])->name('google.login');
Route::get('auth/callback/google', [GoogleAuthController::class, 'callback']);


// Logout Route
Route::post('/logout', function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('/');
})->name('logout');


// routes/web.php (tambahkan ke group middleware auth)
Route::middleware(['auth'])->prefix('user')->name('user.')->group(function () {
    Route::get('chat-ai', [\App\Http\Controllers\User\ChatAIController::class, 'index'])->name('chat-ai');
    Route::post('chat-ai/ask', [\App\Http\Controllers\User\ChatAIController::class, 'ask'])->name('chat-ai.ask');
    Route::post('chat-ai/new', [\App\Http\Controllers\User\ChatAIController::class, 'newTopic'])->name('chat-ai.new');
    Route::get('chat-ai/topic/{id}', [\App\Http\Controllers\User\ChatAIController::class, 'index'])->name('chat.by.topic');
    Route::patch('chat-ai/{id}/rename', [\App\Http\Controllers\User\ChatAIController::class, 'renameTopic']);
    Route::delete('chat-ai/{id}', [\App\Http\Controllers\User\ChatAIController::class, 'deleteTopic']);
});
