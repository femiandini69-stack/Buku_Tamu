@extends('layouts.app')

@section('content')

<h2>Edit Data Tamu</h2>

<form method="POST" action="{{ route('tamu.update', $tamu->id) }}">
@csrf
@method('PUT')

<div class="mb-2">
    <label>Nama Pengunjung</label>
    <input class="form-control @error('nama_pengunjung') is-invalid @enderror"
           name="nama_pengunjung"
           value="{{ old('nama_pengunjung', $tamu->nama_pengunjung) }}">

    @error('nama_pengunjung')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>

<div class="mb-2">
    <label>Instansi Asal</label>
    <input class="form-control @error('instansi_asal') is-invalid @enderror"
           name="instansi_asal"
           value="{{ old('instansi_asal', $tamu->instansi_asal) }}">

    @error('instansi_asal')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>

<div class="mb-2">
    <label>Tanggal Kunjungan</label>
    <input type="date"
           class="form-control @error('tanggal_kunjungan') is-invalid @enderror"
           name="tanggal_kunjungan"
           value="{{ old('tanggal_kunjungan', $tamu->tanggal_kunjungan) }}">

    @error('tanggal_kunjungan')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>

<div class="mb-2">
    <label>Keperluan Kunjungan</label>
    <input class="form-control @error('keperluan_kunjungan') is-invalid @enderror"
           name="keperluan_kunjungan"
           value="{{ old('keperluan_kunjungan', $tamu->keperluan_kunjungan) }}">

    @error('keperluan_kunjungan')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>

<div class="mb-2">
    <label>Nomor Kontak</label>
    <input class="form-control @error('nomor_kontak') is-invalid @enderror"
           name="nomor_kontak"
           value="{{ old('nomor_kontak', $tamu->nomor_kontak) }}">

    @error('nomor_kontak')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>

<button class="btn btn-primary">Update</button>

</form>

@endsection