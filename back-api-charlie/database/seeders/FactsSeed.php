<?php

namespace Database\Seeders;

use App\Models\Facts;
use Illuminate\Database\Seeder;

class FactsSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Facts::factory()->count(6)->create();
    }
}
