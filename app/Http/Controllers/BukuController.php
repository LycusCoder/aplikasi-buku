<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Buku;

class BukuController extends Controller
{
    public function index()
    {
        // Ambil semua data buku dari database
        $daftar_buku = Buku::all();

        // Kirim data ke view
        return view('buku.index', ['daftar_buku' => $daftar_buku]);
    }
}
