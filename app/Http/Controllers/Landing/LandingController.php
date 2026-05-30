<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;

class LandingController extends Controller
{
    public function home()
    {
        return view('landing.home');
    }

    public function tentang()
    {
        return view('landing.tentang');
    }

    public function kontak()
    {
        return view('landing.kontak');
    }

    public function daftaralat()
    {
        return view('landing.daftaralat');
    }
}