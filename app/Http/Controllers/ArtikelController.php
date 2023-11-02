<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Artikel;

class ArtikelController extends Controller
{
    public function index(){
        $artikel = Artikel::all();
        return view('letsread', ['artikel' => $artikel]);
    }
    public function store(Request $request){
        $create = Artikel::create([
            "judul" => $request->judul,
            "slug" => Str::slug($request->judul, '-'),
            "isi" => $request->isi,
        ]);
        return redirect('/admin');
    }
}
