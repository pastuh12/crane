<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 5; $i++) {
            DB::table('images')->insert([
                'tech_id' => 5,
                'path' => './storage/crane/crane.jpg',
                'is_main_image' => false,
            ]);
        }
    }
}
