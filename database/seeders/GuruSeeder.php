<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $guru = [
            ['NIP' => '111', 'Nama_Guru' => 'Andriansyah', 'Alamat_Guru' => 'Pamoyanan', 'Jenis_Kelamin' => 'Pria', 'Pendidikan_Guru' => 'S2 Sistem Informasi'],
            ['NIP' => '112', 'Nama_Guru' => 'Revy Cahya', 'Alamat_Guru' => 'Leles', 'Jenis_Kelamin' => 'Wanita', 'Pendidikan_Guru' => 'S1 Sistem Informasi'],
        ];
        DB::table('guru')->insert($guru);
    }
}
