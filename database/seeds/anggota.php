<?php

use Illuminate\Database\Seeder;

class anggota extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Anggota_model::insert([
            [
                'nama_anggota' => 'Cinta',
                'alamat' => 'Tulungagung',
                'telp' => '085736612013',
                'created_at' => Date('Y-m-d H:i:s')
            ],
            [
                'nama_anggota' => 'Chatlea',
                'alamat' => 'Malang',
                'telp' => '082216386184',
                'created_at' => Date('Y-m-d H:i:s')
            ],
            [
                'nama_anggota' => 'Niansa',
                'alamat' => 'Magetan',
                'telp' => '082134567089',
                'created_at' => Date('Y-m-d H:i:s')
            ],
            [
                'nama_anggota' => 'Sixty',
                'alamat' => 'Madiun',
                'telp' => '081278965401',
                'created_at' => Date('Y-m-d H:i:s')
            ],
            [
                'nama_anggota' => 'Ciansa',
                'alamat' => 'Malang',
                'telp' => '089912356709',
                'created_at' => Date('Y-m-d H:i:s')
            ],
        ]);
    }
}
