<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function index()
    {

        return view('public.home.index');
    }
    public function login()
    {

        return view('public.akun.login');
    }
    public function register()
    {

        return view('public.akun.register');
    }
    public function pesanan()
    {

        return view('public.pesanan.index');
    }
    public function profil()
    {

        return view('public.akun.profil');
    }
}
