<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserHasRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('user_has_roles')->insert([
            'role_id' => 1,
            'model_type' => 'App\Models\User',
            'user_id' => 1,
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}


