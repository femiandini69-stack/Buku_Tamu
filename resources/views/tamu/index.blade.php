@extends('layouts.app')

@section('content')

<style>
    * {
        font-family: "Times New Roman", Times, serif;
    }

    .btn-edit {
        background-color: #3A071F;
        color: white;
        border: none;
    }

    .btn-edit:hover {
        background-color: #893A49;
    }

    .btn-delete {
        background-color: #6F1F3B;
        color: white;
        border: none;
    }

    .btn-delete:hover {
        background-color: #7E2A53;
    }
</style>

<h2 class="mb-4 mt-3 text-white">
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

<div class="card p-4 bg-white mt-4">

<table class="table table-bordered text-dark">
    <tr>
        <th>Nama Pengunjung</th>
        <th>Instansi Asal</th>
        <th>Jabatan</th>
        <th>Tanggal Kunjungan</th>
        <th>Keperluan Kunjungan</th>
        <th>Nomor Kontak</th>
        <th>Aksi</th>
    </tr>

    @foreach($tamus as $tamu)
    <tr>
        <td>{{ $tamu->nama_pengunjung }}</td>
        <td>{{ $tamu->instansi_asal }}</td>
        <td>{{ $tamu->jabatan }}</td>
        <td>{{ $tamu->tanggal_kunjungan }}</td>
        <td>{{ $tamu->keperluan_kunjungan }}</td>
        <td>{{ $tamu->nomor_kontak }}</td>

        <td>
            <a href="{{ route('tamu.edit', $tamu->id) }}" 
               class="btn btn-edit btn-sm">
               Edit
            </a>

            <form action="{{ route('tamu.destroy', $tamu->id) }}" 
                  method="POST" 
                  style="display:inline;">
                @csrf
                @method('DELETE')

                <button onclick="return confirm('Yakin hapus data ini?')"
                        class="btn btn-delete btn-sm">
                    Hapus
                </button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

</div>

@endsection