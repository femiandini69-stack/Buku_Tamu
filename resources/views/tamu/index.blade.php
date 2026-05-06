@extends('layouts.app')

@section('content')

<style>
    * {
        font-family: "Times New Roman", Times, serif;
    }
</style>

<h2 class="mb-3 text-white">
    Data Buku Tamu
</h2>

@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<a href="{{ route('tamu.create') }}" class="btn mb-3 text-white"
   style="background-color:#2B7574;">
    + Tambah Data
</a>

<div class="card p-3 bg-white">

<table class="table table-bordered text-dark">
    <tr>
        <th>Nama Pengunjung</th>
        <th>Instansi Asal</th>
        <th>Tanggal Kunjungan</th>
        <th>Keperluan</th>
        <th>Nomor Kontak</th>
        <th>Aksi</th>
    </tr>

    @foreach($tamus as $t)
    <tr>
        <td>{{ $t->nama_pengunjung }}</td>
        <td>{{ $t->instansi_asal }}</td>
        <td>{{ $t->tanggal_kunjungan }}</td>
        <td>{{ $t->keperluan_kunjungan }}</td>
        <td>{{ $t->nomor_kontak }}</td>
        <td>
            <a href="{{ route('tamu.edit', $t->id) }}"
               class="btn btn-warning btn-sm">
               Edit
            </a>

            <form action="{{ route('tamu.destroy', $t->id) }}"
                  method="POST"
                  style="display:inline">

                @csrf
                @method('DELETE')

                <button onclick="return confirm('Yakin hapus data ini?')"
                        class="btn btn-danger btn-sm">
                    Hapus
                </button>
            </form>
        </td>
    </tr>
    @endforeach

</table>

</div>

@endsection