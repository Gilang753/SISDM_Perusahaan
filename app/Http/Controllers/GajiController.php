<?php

namespace App\Http\Controllers;

use App\Models\Gaji;
use Illuminate\Http\Request;

class GajiController extends Controller
{
    public function index()
    {
        $tb_gaji = Gaji::all();
        return view('gaji.index', compact('tb_gaji'));
    }

    public function create()
    {
        return view('gaji.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_pegawai' => 'required',
            'id_tunjangan' => 'required',
            'tanggal_gaji' => 'required',
            'gaji_pokok' => 'required',
            'gaji_total' => 'required',
        ]);

        Gaji::create($request->all());
        return redirect()->route('gaji.index')->with('success', 'Gaji created successfully.');
    }

    public function show(Gaji $gaji)
    {
        return view('gaji.show', compact('gaji'));
    }

    public function edit(Gaji $gaji)
    {
        return view('gaji.edit', compact('gaji'));
    }

    public function update(Request $request, Gaji $gaji)
    {
        $request->validate([
            'id_pegawai' => 'required',
            'id_tunjangan' => 'required',
            'tanggal_gaji' => 'required',
            'gaji_pokok' => 'required',
            'gaji_total' => 'required',
        ]);

        $gaji->update($request->all());
        return redirect()->route('gaji.index')->with('success', 'Gaji updated successfully.');
    }

    public function destroy(Gaji $gaji)
    {
        $gaji->delete();
        return redirect()->route('gaji.index')->with('success', 'Gaji deleted successfully.');
    }
}
