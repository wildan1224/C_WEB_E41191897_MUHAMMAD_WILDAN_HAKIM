<?php

use Illuminate\Database\Seeder;
class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mahasiswa')->insert([
            'NIM'=>'E4119189',
            'Nama' => 'Muhammad Wildan',
            'Jenis_kelamin' => '1',
            'Alamat' => "Perum BMP DL12a" ,
            'No_Handphone' => "085648627461"
        ]);
        //
    }
}
