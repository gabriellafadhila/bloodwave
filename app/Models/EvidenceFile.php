<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EvidenceFile extends Model
{
    use HasFactory;

    protected $table = 'tb_evidence_file';

    protected $fillable = [
        'id_riwayat_donor_darah',
    ];

    public function riwayatDonorDarah()
    {
        return $this->belongsTo(RiwayatDonorDarah::class, 'id_riwayat_donor_darah');
    }
}
