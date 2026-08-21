<?php

namespace App\Http\Controllers;

use App\Models\Ucapan;
use Illuminate\Http\Request;

class UcapanController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'attendance' => 'required|in:Hadir,Tidak Hadir,Ragu-ragu',
            'person_count' => 'required|integer|min:1|max:4',
            'message' => 'required|string|max:1000',
        ]);

        $ucapan = Ucapan::create($data);

        return response()->json([
            'success' => true,
            'message' => 'Ucapan berhasil dikirim.',
            'data' => $ucapan,
        ]);
    }
}