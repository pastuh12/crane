<?php

namespace Database\Seeders;

use App\Models\Crane;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CraneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cranes')->insert([
            'model' => Str::random(10),
            'mark' => Str::random(10),
            'description' => Str::random(50),
            'cargo_moment' => 12.5,
            'min_boom_length' => 10,
            'max_boom_length' => 20,
            'type' => 1,
            'max_load_capacity' => 300,
            'end_load_capacity' => 10,
        ]);
    }
}
