<?php

namespace Database\Seeders;

use App\Models\SectionTitle;
use Illuminate\Database\Seeder;

class SectionTitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SectionTitle::factory()->count(1)->create();
    }
}
