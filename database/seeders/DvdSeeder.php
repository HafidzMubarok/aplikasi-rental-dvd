<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class DvdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        foreach (range(1, 20) as $index) {
            //
            DB::table("dvd")->insert([
                "kode_kaset"=> $index,
                "judul_film" => $faker->numberBetween(1,10),
            ]);
        }
    }
}
