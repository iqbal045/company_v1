<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Seeders\AboutSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(1)->create();

        $this->call([
            AboutSeeder::class,
            SectionTitleSeeder::class,
        ]);

    }
}
