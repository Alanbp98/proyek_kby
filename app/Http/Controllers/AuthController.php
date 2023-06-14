<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(Request $request)
{
    $validatedData = $request->validate([
        'name' => 'required|max:255',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:5',
        'role_id' => 'required|in:admin,donatur', // Menambahkan validasi peran pengguna
    ]);

    $validatedData['password'] = bcrypt($request->password);

    $user = User::create($validatedData);

    $accessToken = $user->createToken('authToken')->accessToken;

    return response(['user' => $user, 'access_token' => $accessToken]);
}

public function showLoginForm()
{
    return view('login');
}

public function login(Request $request)
{
    $credentials = $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    if (Auth::attempt($credentials)) {
        // Authentikasi berhasil
        if(Auth::user()->role_id==1){
            return redirect('/dashboard-admin'); // Ganti dengan rute yang sesuai setelah berhasil login

        }
        if(Auth::user()->role_id==2){
            return redirect('/dashboard-donatur'); // Ganti dengan rute yang sesuai setelah berhasil login

        }
    } else {
        // Authentikasi gagal
        return back()->withErrors([
            'email' => 'Invalid credentials',
        ]);
    }
}

public function logout(Request $request)
{
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/landing-page');
}


}
