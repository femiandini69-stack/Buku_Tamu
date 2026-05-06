<h1>Tambah Data Tamu</h1>

<form action="{{ route('tamu.store') }}" method="POST">
    @csrf

    <p>Nama Pengunjung</p>
    <input type="text" name="nama_pengunjung">

    <p>Instansi Asal</p>
    <input type="text" name="instansi_asal">

    <p>Tanggal Kunjungan</p>
    <input type="date" name="tanggal_kunjungan">

    <p>Keperluan</p>
    <input type="text" name="keperluan_kunjungan">

    <p>Nomor Kontak</p>
    <input type="text" name="nomor_kontak">

    <br><br>
    <button type="submit">Simpan</button>
</form>