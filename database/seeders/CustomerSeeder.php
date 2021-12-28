<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->insert([
            'kode_buku' =>'001',
            'judul' =>'Lebih Senyap dari Bisikan',
            'tahun_terbit' =>'2021',
            'harga' => 64000,
            'keterangan' => 'Di akhirat nanti, kalau aku ketemu Tuhan, akan kutanyakan kenapa Dia bikin tubuh perempuan seperti makanan kaleng. Kubayangkan di bawah pusar atau pantatku ada tulisan: Best Before: Mei 2026.',
        ]);
        DB::table('customers')->insert([
            'kode_buku' =>'002',
            'judul' =>'Danur',
            'tahun_terbit' =>'2011',
            'harga' => 57000,
            'keterangan' => 'Jangan heran jika mendapatiku sedang berbicara sendirian atau tertawa tanpa seorang pun terlihat sedang bersamaku. Saat itu. mungkin saja aku sedang bersama salah satu dari lima sahabatku.
            Kalian mungkin tak melihatnya.... Wajar. Mereka memang tak kasat mata dan sering disebut... hantu. Ya, mereka adalah hantu, jiwa-jiwa penasaran atas kehidupan yang dianggap mereka tidak adil.',
        ]);
        DB::table('customers')->insert([
            'kode_buku' =>'003',
            'judul' =>'Harry Potter and The Sorcerers Stone ',
            'tahun_terbit' =>'1997',
            'harga' => 140000,
            'keterangan' => 'Menjadi buku pertama dari rangkaian kisah perjalanan Harry Potter, buku ini bercerita tentang awal kehidupan seorang anak laki-laki bernama Harry Potter ketika tinggal bersama paman dan bibinya.',
        ]);
        DB::table('customers')->insert([
            'kode_buku' =>'004',
            'judul' =>'Laskar Pelangi ',
            'tahun_terbit' =>'2008',
            'harga' => 72000,
            'keterangan' => '10 anak dari keluarga miskin yang bersekolah di sekolah sederhana namun mempunyai semangat belajar tinggi.',
        ]);
        DB::table('customers')->insert([
            'kode_buku' =>'005',
            'judul' =>'Sebuah Usaha Melupakan ',
            'tahun_terbit' =>'2016',
            'harga' => 52000,
            'keterangan' => 'Sebuah Usaha Melupakan adalah kumpulan catatan perasaan (konsep penulisan yang sama dengan dua buku sebelumnya, ‘Catatan Pendek Untuk Cinta yang Panjang’ dan buku ‘Senja, Hujan, dan Cerita yang Telah Usai',
        ]);
        DB::table('customers')->insert([
            'kode_buku' =>'006',
            'judul' =>'Peter',
            'tahun_terbit' =>'2016',
            'harga' => 530000,
            'keterangan' => 'Apa kau tahu kalau ada juga hantu yang menyebalkan? Ada, namanya Peter van Gils! Anak hantu keturunan bangsawan Belanda itu paling bisa membuatku gemas, kesal, marah, bahkan terkadang takut.',
        ]);
    }
}
