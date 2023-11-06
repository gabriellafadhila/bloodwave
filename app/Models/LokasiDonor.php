<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LokasiDonor extends Model
{
    use HasFactory;
    protected $table = 'tb_lokasi_donor'; // Nama tabel dalam database

    protected $fillable = ['nama_lokasi']; // Kolom yang dapat diisi

}
