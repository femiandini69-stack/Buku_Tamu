<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container mt-5">

    <h1 class="mb-4">Data Tamu</h1>

    <!-- Notifikasi Sukses -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Tombol Tambah -->
    <a href="{{ route('tamu.create') }}" class="btn btn-primary mb-3">
        + Tambah Data
    </a>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>Nama Pengunjung</th>
                <th>Instansi Asal</th>
                <th>Tanggal Kunjungan</th>
                <th>Keperluan</th>
                <th>Nomor Kontak</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($tamu as $item)
            <tr>
                <td>{{ $item->nama_pengunjung }}</td>
                <td>{{ $item->instansi_asal }}</td>
                <td>{{ $item->tanggal_kunjungan }}</td>
                <td>{{ $item->keperluan_kunjungan }}</td>
                <td>{{ $item->nomor_kontak }}</td>
                <td>
                    <!-- Edit -->
                    <a href="{{ route('tamu.edit', $item->id) }}" class="btn btn-warning btn-sm">
                        Edit
                    </a>

                    <!-- Hapus -->
                    <form action="{{ route('tamu.destroy', $item->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm"
                            onclick="return confirm('Yakin mau hapus?')">
                            Hapus
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>