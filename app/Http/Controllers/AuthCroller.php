<?php

namespace App\Http\Controllers;

use App\ForgottenPasswordRequest;
use App\Http\Requests\Authentication\ForgottenPasswordRequest as AuthenticationForgottenPasswordRequest;
use App\Http\Requests\Authentication\LoginRequest;
use App\Http\Requests\Authentication\RegistrationRequest;
use App\Interfaces\AuthenticationInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthCroller extends Controller
{
    private AuthenticationInterface $authInterface;
    public function __construct(AuthenticationInterface $authInterface)
    {
        $this->authInterface = $authInterface;
    }

    public function Home(){
        return view('dashboard');
    }

    public function forgottenPassword(AuthenticationForgottenPasswordRequest $request){
        $email = [
            'email' =>$request->email,
        ];
        try{
            $user = $this->authInterface->forgottenPassword($email);

            return redirect()->route('otpCode');
        }catch (\Exception $ex){
            return back()->with('error', 'Une erreur est survenu lors du traitement, Réessayez!');
        }

        // return view('otp');
    }

    public function checkOtpCode()
    {
        return view('dashboard');
    }

    public function login(LoginRequest $request)
    {
        $data = [
            'email' =>$request->email,
            'password' =>$request->email,
        ];

        try{

            if($this->authInterface->login($data))
                return redirect()->route('login')->with('sucess', 'bienvenue');
            else
            return back()->with('error', 'Email ou mot de passe incorect(s).');

        } catch (\Exception $ex){
            return back()->with('error', 'Une erreur est survenu lors du traitement, Réessayez!');
        }
    }

    public function registration(RegistrationRequest $request)
    {
        $data =[
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->email
        ];

        try{
            $user = $this->authInterface->registration($data);

            // Auth::login($user);
            return redirect()->route('login');
        }catch (\Exception $ex){
            return back()->with('error', 'Une erreur est survenu lors du traitement, Réessayez!');
        }
    }
}
