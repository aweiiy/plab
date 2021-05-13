<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookmarksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bookmarks')->insert([
            'user_id' => "1",
            'game_id' => "1",
        ]);
        DB::table('bookmarks')->insert([
            'user_id' => "1",
            'game_id' => "2",
        ]);
        DB::table('bookmarks')->insert([
            'user_id' => "2",
            'game_id' => "3",
        ]);
        DB::table('bookmarks')->insert([
            'user_id' => "2",
            'game_id' => "4",
        ]);
        DB::table('bookmarks')->insert([
            'user_id' => "2",
            'game_id' => "5",
        ]);
        DB::table('bookmarks')->insert([
            'user_id' => "3",
            'game_id' => "4",
        ]);
        DB::table('bookmarks')->insert([
            'user_id' => "3",
            'game_id' => "5",
        ]);
        DB::table('bookmarks')->insert([
            'user_id' => "3",
            'game_id' => "6",
        ]);
        DB::table('bookmarks')->insert([
            'user_id' => "3",
            'game_id' => "7",
        ]);
        DB::table('bookmarks')->insert([
            'user_id' => "3",
            'game_id' => "13",
        ]);
        DB::table('bookmarks')->insert([
            'user_id' => "4",
            'game_id' => "8",
        ]);
        DB::table('bookmarks')->insert([
            'user_id' => "4",
            'game_id' => "10",
        ]);
        DB::table('bookmarks')->insert([
            'user_id' => "4",
            'game_id' => "11",
        ]);
        DB::table('bookmarks')->insert([
            'user_id' => "4",
            'game_id' => "12",
        ]);
    }
}
