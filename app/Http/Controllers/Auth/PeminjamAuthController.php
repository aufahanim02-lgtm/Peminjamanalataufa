<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Hash;

class PeminjamAuthController extends Controller
{
    public function login()
    {
        return view('auth.loginpeminjam');
    }

    public function register()
    {
        return view('auth.registerpeminjam');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|unique:users',
            'password'=>'required|min:6'
        ]);

        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make(
                $request->password
            ),
            'role'=>'peminjam'
        ]);

        return redirect()
            ->route(
                'login.peminjam'
            );
    }

    public function proses(Request $request)
    {
        $data=[
            'email'=>$request->email,
            'password'=>$request->password,
            'role'=>'peminjam'
        ];

        if(Auth::attempt($data))
        {
            return redirect(
                '/dashboard-peminjam'
            );
        }

        return back()
            ->with(
                'error',
                'Login gagal'
            );
    }
}