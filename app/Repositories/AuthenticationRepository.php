<?php

namespace App\Repositories;

use App\Interfaces\AuthenticationInterface;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthenticationRepository implements AuthenticationInterface
{

    public function login(array $data)
    {
        return Auth::attempt($data);
    }

    public function registration(array $data)
    {
        return User::create($data);
    }
    /**
     * Create a new class instance.
     */
    // public function __construct()
    // {
    //     //
    // }
}
