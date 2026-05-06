<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tamu;

class TamuController extends Controller
{
    public function index()
    {
        $tamus = Tamu::all();
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
            'nomor_kontak' => 'required|string|max:15',
        ]);

        Tamu::create([
            'nama_pengunjung' => $request->nama_pengunjung,
            'instansi_asal' => $request->instansi_asal,
            'tanggal_kunjungan' => $request->tanggal_kunjungan,
            'keperluan_kunjungan' => $request->keperluan_kunjungan,
            'nomor_kontak' => $request->nomor_kontak,
        ]);

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
            'nomor_kontak' => 'required|string|max:15',
        ]);

        $tamu = Tamu::findOrFail($id);

        $tamu->update([
            'nama_pengunjung' => $request->nama_pengunjung,
            'instansi_asal' => $request->instansi_asal,
            'tanggal_kunjungan' => $request->tanggal_kunjungan,
            'keperluan_kunjungan' => $request->keperluan_kunjungan,
            'nomor_kontak' => $request->nomor_kontak,
        ]);

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