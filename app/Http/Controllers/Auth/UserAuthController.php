<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserAuthController extends Controller
{
    // =====================
    // VIEW LOGIN
    // =====================
    public function showLogin()
    {
        return view('auth.loginuser');
    }

    // =====================
    // LOGIN PROCESS (USERNAME)
    // =====================
    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required',
        ]);

        if (Auth::attempt([
            'username' => $request->username,
            'password' => $request->password
        ])) {

            $request->session()->regenerate();

            $user = Auth::user();

            return match ($user->role ?? 'user') {
                'admin'   => redirect()->route('dashboard.admin'),
                'petugas' => redirect()->route('dashboard.petugas'),
                default   => redirect()->route('dashboard.user'),
            };
        }

        return back()->withErrors([
            'username' => 'Username atau password salah',
        ])->withInput();
    }

    // =====================
    // REGISTER PROCESS
    // =====================
    public function register(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:100',
            'username' => 'required|string|unique:user,username',
            'password' => 'required|min:6',
        ]);

        User::create([
            'nama' => $request->nama,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'role' => 'user',
        ]);

        return redirect()
            ->route('login.user')
            ->with('success', 'Registrasi berhasil, silakan login');
    }

    // =====================
    // LOGOUT
    // =====================
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login.user');
    }
}