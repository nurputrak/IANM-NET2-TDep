<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{   
    
    public function index()
    {
        return view('home');
    }
    public function indexProfil()
    {
        return view('profil');
    }
    public function indexPerusahaan()
    {
        return view('perusahaan');
    }
    public function indexLayanan()
    {
        return view('layanan');
    }
    public function indexTim()
    {
        return view('tim');
    }
    public function indexQnA()
    {
        return view('qna');
    }
}

