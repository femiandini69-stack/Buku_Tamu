@extends('layouts.app')

@section('content')

<h3>Tambah Data Tamu</h3>

<form action="{{ route('tamu.store') }}" method="POST">
@csrf

<div class="mb-3">
    <label>Nama Pengunjung</label>
    <input type="text" name="nama_pengunjung"
        class="form-control @error('nama_pengunjung') is-invalid @enderror"
        value="{{ old('nama_pengunjung') }}">

    @error('nama_pengunjung')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label>Instansi Asal</label>
    <input type="text" name="instansi_asal"
        class="form-control @error('instansi_asal') is-invalid @enderror"
        value="{{ old('instansi_asal') }}">

    @error('instansi_asal')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label>Tanggal Kunjungan</label>
    <input type="date" name="tanggal_kunjungan"
        class="form-control @error('tanggal_kunjungan') is-invalid @enderror"
        value="{{ old('tanggal_kunjungan') }}">

    @error('tanggal_kunjungan')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label>Keperluan</label>
    <input type="text" name="keperluan_kunjungan"
        class="form-control @error('keperluan_kunjungan') is-invalid @enderror"
        value="{{ old('keperluan_kunjungan') }}">

    @error('keperluan_kunjungan')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label>Nomor Kontak</label>
    <input type="text" name="nomor_kontak"
        class="form-control @error('nomor_kontak') is-invalid @enderror"
        value="{{ old('nomor_kontak') }}">

    @error('nomor_kontak')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>

<button class="btn btn-primary">Simpan</button>

</form>

@endsection