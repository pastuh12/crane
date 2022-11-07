<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 5; $i++) {
            DB::table('services')->insert([
                'title' => "GNMLRENF AFENOIEMifjmoiedmfmMDNSMFOSMNf SNSOIDFWE",
                'description' => 'sdjvoisd sdofnoivn fwbi bfxcvoifj oijvuiohnfgiuwefb ishvouiwfiowf uish gfuiwf vsvjf',
            ]);
        }
    }
}
