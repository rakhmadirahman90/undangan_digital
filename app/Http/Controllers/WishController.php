<?php

namespace App\Http\Controllers;

use App\Models\Wish;
use Illuminate\Http\Request;

class WishController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'attendance' => 'required|string|max:30',
            'person_count' => 'nullable|string|max:20',
            'message' => 'required|string|max:1000',
        ]);

        $wish = Wish::create($validated);

        return response()->json([
            'success' => true,
            'message' => 'Ucapan berhasil dikirim.',
            'data' => $wish
        ]);
    }
}