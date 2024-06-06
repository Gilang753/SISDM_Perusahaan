<?php

namespace App\Http\Controllers;

use App\Models\Pendidikan;
use Illuminate\Http\Request;

class PendidikanController extends Controller
{
    public function index()
    {
        $tb_pendidikan = Pendidikan::all();
        return view('pendidikan.index', compact('tb_pendidikan'));
    }

    public function create()
    {
        return view('pendidikan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_pegawai' => 'required',
            'id_pengembangan' => 'required',
            'jenjangPendidikan' => 'required',
            'institusiPendidikan' => 'required',
            'jurusan' => 'required',
            'tanggal_kelulusan' => 'required',
        ]);

        Pendidikan::create($request->all());
        return redirect()->route('pendidikan.index')->with('success', 'Pendidikan created successfully.');
    }

    public function show(Pendidikan $pendidikan)
    {
        return view('pendidikan.show', compact('pendidikan'));
    }

    public function edit(Pendidikan $pendidikan)
    {
        return view('pendidikan.edit', compact('pendidikan'));
    }

    public function update(Request $request, Pendidikan $pendidikan)
    {
        $request->validate([
            'id_pegawai' => 'required',
            'id_pengembangan' => 'required',
            'jenjangPendidikan' => 'required',
            'institusiPendidikan' => 'required',
            'jurusan' => 'required',
            'tanggal_kelulusan' => 'required',
        ]);

        $pendidikan->update($request->all());
        return redirect()->route('pendidikan.index')->with('success', 'Pendidikan updated successfully.');
    }

    public function destroy(Pendidikan $pendidikan)
    {
        $pendidikan->delete();
        return redirect()->route('pendidikan.index')->with('success', 'Pendidikan deleted successfully.');
    }
}
