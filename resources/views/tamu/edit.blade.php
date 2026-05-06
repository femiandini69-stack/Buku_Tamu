<h1>Edit Data Tamu</h1>

<form action="{{ route('tamu.update', $tamu->id) }}" method="POST">
    @csrf
    @method('PUT')

    <p>Nama Pengunjung</p>
    <input type="text" name="nama_pengunjung" value="{{ $tamu->nama_pengunjung }}">

    <p>Instansi Asal</p>
    <input type="text" name="instansi_asal" value="{{ $tamu->instansi_asal }}">

    <p>Tanggal Kunjungan</p>
    <input type="date" name="tanggal_kunjungan" value="{{ $tamu->tanggal_kunjungan }}">

    <p>Keperluan</p>
    <input type="text" name="keperluan_kunjungan" value="{{ $tamu->keperluan_kunjungan }}">

    <p>Nomor Kontak</p>
    <input type="text" name="nomor_kontak" value="{{ $tamu->nomor_kontak }}">

    <br><br>
    <button type="submit">Update</button>
</form>