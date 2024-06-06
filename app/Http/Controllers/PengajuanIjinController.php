<?php

namespace App\Http\Controllers;

use App\Models\PengajuanIjin;
use Illuminate\Http\Request;

class PengajuanIjinController extends Controller
{
    public function index()
    {
        $tb_pengajuanijin = PengajuanIjin::all();
        return view('pengajuanijin.index', compact('tb_pengajuanijin'));
    }

    public function create()
    {
        return view('pengajuanijin.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_pegawai' => 'required',
            'id_jenisijin' => 'required',
            'tanggalPengajuan' => 'required',
        ]);

        PengajuanIjin::create($request->all());
        return redirect()->route('pengajuanijin.index')->with('success', 'Pengajuan Ijin created successfully.');
    }

    public function show(PengajuanIjin $pengajuanijin)
    {
        return view('pengajuanijin.show', compact('pengajuanijin'));
    }

    public function edit(PengajuanIjin $pengajuanijin)
    {
        return view('pengajuanijin.edit', compact('pengajuanijin'));
    }

    public function update(Request $request, PengajuanIjin $pengajuanijin)
    {
        $request->validate([
            'id_pegawai' => 'required',
            'id_jenisijin' => 'required',
            'tanggalPengajuan' => 'required',
        ]);

        $pengajuanijin->update($request->all());
        return redirect()->route('pengajuanijin.index')->with('success', 'Pengajuan Ijin updated successfully.');
    }

    public function destroy(PengajuanIjin $pengajuanijin)
    {
        $pengajuanijin->delete();
        return redirect()->route('pengajuanijin.index')->with('success', 'Pengajuan Ijin deleted successfully.');
    }
}
