<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index()
    {
        return view('dashboard.profil.datapribadi',[
            'title' => 'Data Pribadi',
            'menu' => 'Profil'
        ]);
    }
}
