<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use Illuminate\Http\Request;

class AbsensiController extends Controller
{
    public function index()
    {
        $tb_absensi = Absensi::all();
        return view('absensi.index', compact('tb_absensi'));
    }

    public function create()
    {
        return view('absensi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_pegawai' => 'required',
            'tanggal_absensi' => 'required',
        ]);

        Absensi::create($request->all());
        return redirect()->route('absensi.index')->with('success', 'Absensi created successfully.');
    }

    public function show(Absensi $absensi)
    {
        return view('absensi.show', compact('absensi'));
    }

    public function edit(Absensi $absensi)
    {
        return view('absensi.edit', compact('absensi'));
    }

    public function update(Request $request, Absensi $absensi)
    {
        $request->validate([
            'id_pegawai' => 'required',
            'tanggal_absensi' => 'required',
        ]);

        $absensi->update($request->all());
        return redirect()->route('absensi.index')->with('success', 'Absensi updated successfully.');
    }

    public function destroy(Absensi $absensi)
    {
        $absensi->delete();
        return redirect()->route('absensi.index')->with('success', 'Absensi deleted successfully.');
    }
}
