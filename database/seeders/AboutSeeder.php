<?php

namespace Database\Seeders;

use App\Models\About;
use App\Models\Image;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        About::factory()
            ->count(1)
            ->has(Image::factory()
                    ->count(3)
                    ->aboutimage(), 'images')
            ->create();
    }
}
