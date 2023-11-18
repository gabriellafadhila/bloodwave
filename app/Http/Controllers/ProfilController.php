<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RiwayatDonor;
use App\Models\LokasiDonor;
use App\Models\EvidenceFile;
use Exception;
use Illuminate\Auth\EloquentUserProvider;
use Illuminate\Support\Facades\Session;

class ProfilController extends Controller
{
    public function index()
    {
        $lokasiDonor = LokasiDonor::all();
        $riwayatDonor = RiwayatDonor::paginate(5);
        return view('profil', compact('riwayatDonor', 'lokasiDonor'));
    }

}
