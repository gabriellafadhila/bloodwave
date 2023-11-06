<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\LokasiDonor;
use Illuminate\Support\Facades\DB;

class LokasiDonorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('tb_lokasi_donor')->insert([
            ['nama_lokasi' => 'RS Saiful Anwar'],
            ['nama_lokasi' => 'RS Malang'],
            ['nama_lokasi' => 'RS UNISMA'],
            ['nama_lokasi' => 'RS Brawijaya'],
            ['nama_lokasi' => 'RS Lavalette'],
        ]);
    }
}
