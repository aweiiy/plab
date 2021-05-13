<?php

namespace Database\Seeders;

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
        $this->call([
            GenresSeeder::class,
            UserSeeder::class,
            GamesSeeder::class,
            BookmarksSeeder::class
        ]);
    }
}
