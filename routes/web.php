<?php


use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthCroller;
use App\Http\Controllers\ViewController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AuthCroller::class, 'Home']);

Route::get('/login',[ViewController::class, 'LoginView'])->name('login');

Route::get('/registration',[ViewController::class, 'ToRegiste'])->name('registration');

Route::get('/logout', [ViewController::class, 'ToLogout'])->name('logout');

Route::middleware(['auth'])->group(function () {
        Route::get('/dashboard', function () { return view('dashboard');})->name('dashboard');
});

Route::post('/login', [AuthCroller::class, 'login'])->name('login.process');

Route::post('/registration', [AuthCroller::class, 'registration'])->name('registration.process');
