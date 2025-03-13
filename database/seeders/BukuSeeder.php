<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Buku;

class BukuSeeder extends Seeder
{
    public function run()
    {
        // Menghapus semua data yang ada di tabel buku (opsional)
        Buku::truncate();

        // Menambahkan data dummy ke tabel buku
        $data_buku = [
            [
                'judul' => 'Koleksi Aplikasi Web Laravel',
                'penulis' => 'Ir. Yuniar Supardi',
                'tahun_terbit' => 2022,
            ],
            [
                'judul' => 'Pemrograman PHP untuk Pemula',
                'penulis' => 'Elex Media Komputindo',
                'tahun_terbit' => 2020,
            ],
            [
                'judul' => 'Membangun Aplikasi Web dengan CodeIgniter 4',
                'penulis' => 'Dwi Winarno',
                'tahun_terbit' => 2021,
            ],
            [
                'judul' => 'Dasar-dasar Pengembangan Web',
                'penulis' => 'Fitriani',
                'tahun_terbit' => 2019,
            ],
        ];


        // Masukkan data ke tabel buku
        foreach ($data_buku as $buku) {
            Buku::create($buku);
        }
    }
}
