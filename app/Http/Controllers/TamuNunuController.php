<?php

namespace App\Http\Controllers;

use App\Models\TamuNunu;
use Illuminate\Http\Request;

class TamuNunuController extends Controller
{
    public function index()
    {
        $tamu = TamuNunu::latest()->get();

        return view('admin.tamu_nunu', compact('tamu'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        TamuNunu::create([
            'name' => $request->name,
        ]);

        return redirect()
            ->route('tamu.nunu.index')
            ->with('success', 'Nama tamu berhasil ditambahkan.');
    }

    public function update(Request $request, TamuNunu $tamuNunu)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $tamuNunu->update([
            'name' => $request->name,
        ]);

        return redirect()
            ->route('tamu.nunu.index')
            ->with('success', 'Nama tamu berhasil diubah.');
    }

    public function destroy(TamuNunu $tamuNunu)
    {
        $tamuNunu->delete();

        return redirect()
            ->route('tamu.nunu.index')
            ->with('success', 'Tamu berhasil dihapus.');
    }
}