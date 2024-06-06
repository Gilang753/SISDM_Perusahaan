<?php

// app/Http/Controllers/PenggunaController.php
namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    public function index()
    {
        $tb_pengguna = Pengguna::all();
        return view('pengguna.index', compact('tb_pengguna'));
    }

    public function create()
    {
        return view('pengguna.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_pegawai' => 'required',
            'username' => 'required',
            'password' => 'required',
        ]);

        Pengguna::create($request->all());
        return redirect()->route('pengguna.index')->with('success', 'Pengguna created successfully.');
    }

    public function show(Pengguna $pengguna)
    {
        return view('pengguna.show', compact('pengguna'));
    }

    public function edit(Pengguna $pengguna)
    {
        return view('pengguna.edit', compact('pengguna'));
    }

    public function update(Request $request, Pengguna $pengguna)
    {
        $request->validate([
            'id_pegawai' => 'required',
            'username' => 'required',
            'password' => 'required',
        ]);

        $pengguna->update($request->all());
        return redirect()->route('pengguna.index')->with('success', 'Pengguna updated successfully.');
    }

    public function destroy(Pengguna $pengguna)
    {
        $pengguna->delete();
        return redirect()->route('pengguna.index')->with('success', 'Pengguna deleted successfully.');
    }
}


