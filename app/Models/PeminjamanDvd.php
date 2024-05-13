<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeminjamanDvd extends Model
{
    use HasFactory;

    protected $table = "peminjaman_dvd";

    protected $primaryKey = "id_peminjaman";

    protected $fillable = [
        'kode_kaset', 'jumlah_dvd', 'nama_peminjam', 
        'alamat_peminjam', 'no_kontak_peminjam', 'durasi_peminjaman',
        'id_metode_pembayaran', 'id_jenis_pembayaran', 'total_pembayaran'
    ] ;
}
