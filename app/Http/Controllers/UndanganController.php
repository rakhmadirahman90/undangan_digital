<?php

namespace App\Http\Controllers;

use App\Models\Ucapan;

class UndanganController extends Controller
{
    public function index()
    {
        $ucapan = Ucapan::latest()->get();

        return view('undangan_nunu', compact('ucapan'));
    }
}