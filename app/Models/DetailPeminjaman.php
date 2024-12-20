<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPeminjaman extends Model
{
    use HasFactory;

    // Nama tabel jika berbeda dari nama model
    protected $table = 'detail_peminjaman';

    // Primary key dari tabel
    protected $primaryKey = 'kode_detail';

    // Tipe primary key
    protected $keyType = 'string';

    // Kolom yang dapat diisi (mass assignment)
    protected $fillable = [
        'kode_detail',
        'kode_pinjam',
        'tanggal_req_pinjam',
        'tanggal_req_kembali',
        'tanggal_pinjam_barang',
        'tanggal_kembali_barang',
        'kode_barang',
    ];

    // Relasi jika ada
    public function peminjaman()
    {
        return $this->belongsTo(Peminjaman::class, 'kode_pinjam', 'kode_pinjam');
    }
    // Di model DetailPeminjaman
    public function barang()
    {
        return $this->belongsTo(Barang::class, 'kode_barang', 'kode_barang');
    }
}
