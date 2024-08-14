<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ViewController extends Controller
{
    public function ToLogout(){
        Auth::logout();
        return redirect('dashboard');
    }

    public function ToRegiste(){
        if (Auth::check()) 
        return redirect()->route('login');
        else
        // return back()->with('error', 'Une erreur est survenu lors du traitement, Réessayez!');
        return view('registration');
    }

    public function LoginView(){
        if (Auth::check()) 
        return redirect()->route('dashboard');
        else
        return view('login');
    }
}
