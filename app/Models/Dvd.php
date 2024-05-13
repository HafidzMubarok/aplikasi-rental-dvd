<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dvd extends Model
{
    use HasFactory;

    protected $table = "dvd";

    protected $primaryKey = "kode_kaset";

    protected $fillable = [
        'kode_kaset', 'judul_film', 'genre', 'stok_dvd', 'tahun_rilis_film', 'harga_sewa', 'id_bahasa'
    ] ;
}
