<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            ['title' => 'Strategy'],
            ['title' => 'Role-Playing Game'],
            ['title' => 'First Person Shooter'],
            ['title' => 'Simulation Game'],
            ['title' => 'Other']
        ];
        foreach ($items as $item) {
            DB::table('genres')->insert($item);
        }
    }
}
