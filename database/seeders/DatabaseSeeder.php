<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'email'=>'administrador@gmail.com',
            'name'=>'administrador',
            'password'=>bcrypt('123456789')
        ]);
    }
}
