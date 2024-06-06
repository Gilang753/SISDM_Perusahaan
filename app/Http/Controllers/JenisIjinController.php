<?php

namespace App\Http\Controllers;

use App\Models\JenisIjin;
use Illuminate\Http\Request;

class JenisIjinController extends Controller
{
    public function index()
    {
        $tb_jenisijin = JenisIjin::all();
        return view('jenisijin.index', compact('tb_jenisijin'));
    }

    public function create()
    {
        return view('jenisijin.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'lamaijin' => 'required',
        ]);

        JenisIjin::create($request->all());
        return redirect()->route('jenisijin.index')->with('success', 'Jenis Ijin created successfully.');
    }

    public function show(JenisIjin $jenisijin)
    {
        return view('jenisijin.show', compact('jenisijin'));
    }

    public function edit(JenisIjin $jenisijin)
    {
        return view('jenisijin.edit', compact('jenisijin'));
    }

    public function update(Request $request, JenisIjin $jenisijin)
    {
        $request->validate([
            'lamaijin' => 'required',
        ]);

        $jenisijin->update($request->all());
        return redirect()->route('jenisijin.index')->with('success', 'Jenis Ijin updated successfully.');
    }

    public function destroy(JenisIjin $jenisijin)
    {
        $jenisijin->delete();
        return redirect()->route('jenisijin.index')->with('success', 'Jenis Ijin deleted successfully.');
    }
}
