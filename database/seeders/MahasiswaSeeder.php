<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvent;
use Faker\Factory as Faker;
use App\Models\Mahasiswa;
class MahasiswaSeeder extends Seeder

{
    /**
     * Run the database seeds.
     *
     * 
     */
    public function run()
    {
        //
        $faker = Faker::create('id_ID');

        for($i = 1; $i <= 20; $i++){
        Mahasiswa::create([
            'nama' => $faker -> name,
            'nim' =>  $faker -> buildingNumber,
            'alamat' =>  $faker -> address
        ]);
    }
}
}