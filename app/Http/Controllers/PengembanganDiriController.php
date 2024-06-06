<?php

namespace App\Http\Controllers;

use App\Models\PengembanganDiri;
use Illuminate\Http\Request;

class PengembanganDiriController extends Controller
{
    public function index()
    {
        $tb_pengembangandiri = PengembanganDiri::all();
        return view('pengembangandiri.index', compact('tb_pengembangandiri'));
    }

    public function create()
    {
        return view('pengembangandiri.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_pegawai' => 'required',
            'jenis_pelatihan' => 'required',
            'tanggal_pelaksana' => 'required',
        ]);

        PengembanganDiri::create($request->all());
        return redirect()->route('pengembangandiri.index')->with('success', 'Pengembangan Diri created successfully.');
    }

    public function show(PengembanganDiri $pengembangandiri)
    {
        return view('pengembangandiri.show', compact('pengembangandiri'));
    }

    public function edit(PengembanganDiri $pengembangandiri)
    {
        return view('pengembangandiri.edit', compact('pengembangandiri'));
    }

    public function update(Request $request, PengembanganDiri $pengembangandiri)
    {
        $request->validate([
            'id_pegawai' => 'required',
            'jenis_pelatihan' => 'required',
            'tanggal_pelaksana' => 'required',
        ]);

        $pengembangandiri->update($request->all());
        return redirect()->route('pengembangandiri.index')->with('success', 'Pengembangan Diri updated successfully.');
    }

    public function destroy(PengembanganDiri $pengembangandiri)
    {
        $pengembangandiri->delete();
        return redirect()->route('pengembangandiri.index')->with('success', 'Pengembangan Diri deleted successfully.');
    }
}
