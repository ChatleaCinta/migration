<?php

use Illuminate\Database\Seeder;

class petugas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Petugas_model::insert([
            [
                'nama_petugas' => 'Zio',
                'alamat' => 'Jaksel',
                'telp' => '089234876912',
                'username' => 'ziooo',
                'password' => 'zio123',
                'created_at' => Date('Y-m-d H:i:s')
            ],
            [
                'nama_petugas' => 'Al',
                'alamat' => 'Banten',
                'telp' => '082231868942',
                'username' => 'Alvaro',
                'password' => 'al123',
                'created_at' => Date('Y-m-d H:i:s')
            ],
            [
                'nama_petugas' => 'Atha',
                'alamat' => 'Bekasi',
                'telp' => '082134589063',
                'username' => 'agatha',
                'password' => 'atha567',
                'created_at' => Date('Y-m-d H:i:s')
            ],
            [
                'nama_petugas' => 'Chasya',
                'alamat' => 'Depok',
                'telp' => '08234567890',
                'username' => 'aya',
                'password' => 'chasya123',
                'created_at' => Date('Y-m-d H:i:s')
            ],
            [
                'nama_petugas' => 'Olivia',
                'alamat' => 'Jakpus',
                'telp' => '081456789023',
                'username' => 'oliv',
                'password' => 'olivoil',
                'created_at' => Date('Y-m-d H:i:s')
            ],
        ]);
    }
}
