<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pinjam extends Model
{
    protected $table = 'pinjam';
    protected $fillable = [
        'nama_peminjam',
        'nama_buku',
        'jumlah_buku',
        'tanggal_pinjam',
        'tanggal_kembali',
        'denda',
    ];
}
