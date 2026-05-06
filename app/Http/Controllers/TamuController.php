<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tamu;

class TamuController extends Controller
{
    public function index()
    {
        $tamus = Tamu::latest()->get();
        return view('tamu.index', compact('tamus'));
    }

    public function create()
    {
        return view('tamu.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_pengunjung' => 'required',
            'instansi_asal' => 'required',
            'tanggal_kunjungan' => 'required|date',
            'keperluan_kunjungan' => 'required',
            'nomor_kontak' => 'required|numeric',
        ], [
            'nomor_kontak.numeric' => 'Nomor kontak harus berupa angka.',
        ]);

        Tamu::create($request->all());

        return redirect()->route('tamu.index')
            ->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $tamu = Tamu::findOrFail($id);
        return view('tamu.edit', compact('tamu'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_pengunjung' => 'required',
            'instansi_asal' => 'required',
            'tanggal_kunjungan' => 'required|date',
            'keperluan_kunjungan' => 'required',
            'nomor_kontak' => 'required|numeric',
        ], [
            'nomor_kontak.numeric' => 'Nomor kontak harus berupa angka.',
        ]);

        $tamu = Tamu::findOrFail($id);
        $tamu->update($request->all());

        return redirect()->route('tamu.index')
            ->with('success', 'Data berhasil diupdate');
    }

    public function destroy($id)
    {
        Tamu::findOrFail($id)->delete();

        return redirect()->route('tamu.index')
            ->with('success', 'Data berhasil dihapus');
    }
}