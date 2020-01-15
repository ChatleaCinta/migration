<?php

use Illuminate\Database\Seeder;

class buku extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Buku_model::insert([
            [
                'judul' => 'Melodylan',
                'penerbit' => 'Gramedia',
                'pengarang' => 'Poppi Pertiwi',
                'foto' => '-',
            ],
            [
                'judul' => 'Nanti Kita Cerita Tentang Hari Ini',
                'penerbit' => 'Gramedia',
                'pengarang' => 'Marcella FP',
                'foto' => '-',
            ],
            [
                'judul' => 'Dua Garis Biru',
                'penerbit' => 'Gramedia',
                'pengarang' => 'Gina S Noer',
                'foto' => '-',
            ],
            [
                'judul' => 'Bumi Manusia',
                'penerbit' => 'Gramedia',
                'pengarang' => 'Pramoedia Ananta Toer',
                'foto' => '-',
            ],
            [
                'judul' => 'Milea',
                'penerbit' => 'Gramedia',
                'pengarang' => 'Pidi Baiq',
                'foto' => '-',
            ],
        ]);
    }
}
