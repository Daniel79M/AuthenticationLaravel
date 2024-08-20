<?php


use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthCroller;
use App\Http\Controllers\UserControllers;
use App\Http\Controllers\ViewController;
use Illuminate\Support\Facades\Route;

Route::get('/forgotten-password', function () {

        if (Auth::check())
                return redirect()->route('dashboard');

        return view('forgottenPassword');
})->name('forgottenPassword');

Route::get('/otp-code', function () {

        if (Auth::check())
                return redirect()->route('dashboard');

        return view('otp');
})->name('otpCode');

Route::get('/new-password', function () {

        if (Auth::check())
                return redirect()->route('dashboard');

        return view('newPassword');
})->name('newPassword');

Route::get('/', [AuthCroller::class, 'Home']);

Route::get('/login', [ViewController::class, 'LoginView'])->name('login');

Route::get('/registration', [ViewController::class, 'ToRegiste'])->name('registration');

Route::get('/logout', [ViewController::class, 'ToLogout'])->name('logout');

Route::middleware(['auth'])->group(function () {
        Route::get('/dashboard', function () {
                return view('dashboard');
        })->name('dashboard');
});

Route::post('/login', [AuthCroller::class, 'login'])->name('login.process');

Route::post('/registration', [AuthCroller::class, 'registration'])->name('registration.process');
Route::post('/forgotten-password', [AuthCroller::class, 'forgottenPassword'])->name('forgottenPassword.process');
Route::post('/otp-code', [AuthCroller::class, 'checkOtpCode'])->name('checkOtpCode.process');
Route::post('/new-password', [AuthCroller::class, 'newPassword'])->name('newPassword.process');

Route::resource('/users', UserControllers::class);
