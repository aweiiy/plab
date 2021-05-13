<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GamesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   //All ratings based on Metacritic
        //Strategy---------------------------------------

        DB::table('games')->insert([
            'title' => "Sid Meier's Civilization V: Brave New World",
            'image' => "civilization.jpg",
            'genre_id' => 1,
            'rating' => 85,
        ]);
        DB::table('games')->insert([
            'title' => "Crusader Kings II",
            'image' => "crusader2.jpg",
            'genre_id' => 1,
            'rating' => 82,
        ]);
        DB::table('games')->insert([
            'title' => "Warcraft III: Reforged",
            'image' => "warcraft3.jpg",
            'genre_id' => 1,
            'rating' => 60,
        ]);

        //Role-playing game---------------------------

        DB::table('games')->insert([
            'title' => "Else Heart.Break()",
            'image' => "heartbreak.jpg",
            'genre_id' => 2,
            'rating' => 79,
        ]);
        DB::table('games')->insert([
            'title' => "Shadowrun: Dragonfall - Director's Cut",
            'image' => "shadowrundragonfall.jpg",
            'genre_id' => 2,
            'rating' => 87,
        ]);
        DB::table('games')->insert([
            'title' => "Stardew Valley",
            'image' => "stardewvalley.jpg",
            'genre_id' => 2,
            'rating' => 89,
        ]);
        DB::table('games')->insert([
            'title' => "Disco Elysium",
            'image' => "discoelysium.jpg",
            'genre_id' => 2,
            'rating' => 91,
        ]);
        DB::table('games')->insert([
            'title' => "Project Zomboid",
            'image' => "projectzomboid.jpg",
            'genre_id' => 2,
            'rating' => 87,
        ]);
        DB::table('games')->insert([
            'title' => "Shadowrun Returns",
            'image' => "shadowrunreturns.jpg",
            'genre_id' => 2,
            'rating' => 76,
        ]);
        DB::table('games')->insert([
            'title' => "Shadowrun: Hong Kong - Extended Edition",
            'image' => "shadowrunhongkong.jpg",
            'genre_id' => 2,
            'rating' => 81,
        ]);

        //First Person shooter---------------------------

        DB::table('games')->insert([
            'title' => "Tom Clancy's Rainbow Six® Siege",
            'image' => "tomclancy.jpg",
            'genre_id' => 3,
            'rating' => 79,
        ]);

        //Simulation game-------------------------------
        DB::table('games')->insert([
            'title' => "Euro Truck Simulator 2",
            'image' => "eurotruck.jpg",
            'genre_id' => 4,
            'rating' => 79,
        ]);
        DB::table('games')->insert([
            'title' => "Farming Simulator 19",
            'image' => "farmingsimulator.jpg",
            'genre_id' => 4,
            'rating' => 73,
        ]);
        DB::table('games')->insert([
            'title' => "Train Simulator 2020",
            'image' => "trainsimulator2020.jpg",
            'genre_id' => 4,
            'rating' => 60,
        ]);
        DB::table('games')->insert([
            'title' => "RimWorld",
            'image' => "rimworld.jpg",
            'genre_id' => 4,
            'rating' => 87,
        ]);

        //Other------------------------------------------

        DB::table('games')->insert([
            'title' => "Cave Story+",
            'image' => "cavestory.jpg",
            'genre_id' => 5,
            'rating' => 81,
        ]);
        DB::table('games')->insert([
            'title' => "Sorcery! Parts 1 & 2",
            'image' => "sorcery.jpg",
            'genre_id' => 5,
            'rating' => 69,
        ]);
        DB::table('games')->insert([
            'title' => "Dwarf Fortress",
            'image' => "dwarffortres.jpg",
            'genre_id' => 5,
            'rating' => 0, //no reviews
        ]);



    }
}
