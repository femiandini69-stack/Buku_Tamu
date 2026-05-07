<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tamu extends Model
{
    use HasFactory;

    protected $table = 'tamus';

    protected $fillable = [
        'nama_pengunjung',
        'instansi_asal',
        'jabatan',
        'tanggal_kunjungan',
        'keperluan_kunjungan',
        'nomor_kontak',
    ];
}