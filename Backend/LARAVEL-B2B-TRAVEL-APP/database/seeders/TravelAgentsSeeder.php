<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TravelAgent;

class TravelAgentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        TravelAgent::factory(10)->create();
    }
}
