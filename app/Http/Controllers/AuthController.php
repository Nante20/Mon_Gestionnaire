<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index(){
//User::create([
//'name' => 'nata',
//'email' => 'nata@gmail.com',
//'password' => Hash::make('1234')
//]
//);
        return view('security.login');
    }
    public function login(Request $request){
$credentials = $request->validate([
    'email' => 'required|string|email',
    'password' => 'required|string'
]
);
//dd($credentials);
if(Auth::attempt($credentials)){
    $request->session()->regenerate();
    return to_route('index');
}
return back()->with([
    'error' => 'email ou mot de passe incorrect'
]

);

    }
}
