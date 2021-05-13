<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ReviewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($x = 0; $x <= 100; $x++) {

        $usr_number = mt_rand(1, 4);
        $gam_number = mt_rand(1, 15);
        $rat_number = mt_rand(60,99);
        DB::table('reviews')->insert([
            'user_id' => $usr_number,
            'game_id' => $gam_number,
            'rating' =>  $rat_number,
            'title' => Str::random(10),
            'review' => Str::random(50)
        ]);
        }
    }
}
