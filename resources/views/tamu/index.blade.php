@extends('layouts.app')

@section('content')

<h2 class="mb-3">Data Buku Tamu</h2>

@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<a href="{{ route('tamu.create') }}" class="btn btn-light mb-3">+ Tambah Data</a>

<div class="card p-3">
<table class="table table-bordered">
    <tr>
        <th>Nama</th>
        <th>Instansi</th>
        <th>Tanggal</th>
        <th>Keperluan</th>
        <th>Kontak</th>
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
            <a href="{{ route('tamu.edit', $t->id) }}" class="btn btn-warning btn-sm">Edit</a>

            <form action="{{ route('tamu.destroy', $t->id) }}" method="POST" style="display:inline">
                @csrf
                @method('DELETE')
                <button onclick="return confirm('Yakin hapus?')" class="btn btn-danger btn-sm">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
</div>

@endsection