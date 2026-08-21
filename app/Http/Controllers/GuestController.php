<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index()
    {
        $guests = Guest::latest()->get();

        return view('admin.index', compact('guests'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Guest::create([
            'name' => $request->name,
        ]);

        return redirect()
            ->route('admin.index')
            ->with('success', 'Tamu berhasil ditambahkan.');
    }

    public function destroy(Guest $guest)
    {
        $guest->delete();

        return redirect()
            ->route('admin.index')
            ->with('success', 'Tamu berhasil dihapus.');
    }
}