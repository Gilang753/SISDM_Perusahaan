<?php

namespace App\Http\Controllers;

use App\Models\Tunjangan;
use Illuminate\Http\Request;

class TunjanganController extends Controller
{
    public function index()
    {
        $tb_tunjangan = Tunjangan::all();
        return view('tunjangan.index', compact('tb_tunjangan'));
    }

    public function create()
    {
        return view('tunjangan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_tunjangan' => 'required',
            'besaran_tunjangan' => 'required',
        ]);

        Tunjangan::create($request->all());
        return redirect()->route('tunjangan.index')->with('success', 'Tunjangan created successfully.');
    }

    public function show(Tunjangan $tunjangan)
    {
        return view('tunjangan.show', compact('tunjangan'));
    }

    public function edit(Tunjangan $tunjangan)
    {
        return view('tunjangan.edit', compact('tunjangan'));
    }

    public function update(Request $request, Tunjangan $tunjangan)
    {
        $request->validate([
            'nama_tunjangan' => 'required',
            'besaran_tunjangan' => 'required',
        ]);

        $tunjangan->update($request->all());
        return redirect()->route('tunjangan.index')->with('success', 'Tunjangan updated successfully.');
    }

    public function destroy(Tunjangan $tunjangan)
    {
        $tunjangan->delete();
        return redirect()->route('tunjangan.index')->with('success', 'Tunjangan deleted successfully.');
    }
}
