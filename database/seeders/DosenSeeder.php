<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dosen = [
            ['nidn' => '231', 'nama_dosen' => 'Mr. John', 'jeniskelamin' => 'Pria', 'alamat' => 'London', 'usia' => '23'],
            ['nidn' => '432', 'nama_dosen' => 'Mrs. Rose', 'jeniskelamin' => 'Wanita', 'alamat' => 'Manchester', 'usia' => '24'],
        ];
        DB::table('dosen')->insert($dosen);
    }
}
