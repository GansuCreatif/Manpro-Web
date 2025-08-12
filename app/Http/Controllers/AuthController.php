<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('nipp', 'password');

        // Custom login using NIPP
        if (Auth::attempt(['nipp' => $credentials['nipp'], 'password' => $credentials['password']])) {
            return redirect()->route('dashboard');
        }

        return back()->withErrors([
            'nipp' => 'NIPP atau password salah.',
        ]);
    }

    public function dashboard()
    {
        return view('dashboard');
    }
}
