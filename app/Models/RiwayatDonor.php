<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatDonor extends Model
{
    use HasFactory;

    protected $table = 'tb_riwayat_donor_darah';

    protected $fillable = [
        'id_user',
        'id_lokasi',
        'tanggal_donor',
        'jam_donor',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function evidenceFiles()
    {
        return $this->hasMany(EvidenceFile::class, 'id_riwayat_donor_darah');
    }

    public function lokasiDonor()
    {
        return $this->belongsTo(LokasiDonor::class, 'id_lokasi');
    }
}
