<?php

namespace App\Http\Controllers;

use App\Models\Wish;
use Illuminate\Http\Request;

class WeddingController extends Controller
{
    public function index(Request $request)
    {
        $guest = $request->query('to', 'Tamu Undangan');

        $wishes = Wish::latest()->get();

        return view('undangan', compact('guest', 'wishes'));
    }
}