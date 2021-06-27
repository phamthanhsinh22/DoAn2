<?php

namespace Database\Seeders;
use DB;
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
      DB::table('users')->insert([
        ['id'=>3, 'email'=>'sinh','password'=>bcrypt(1234)]
        ]);
       //  \App\Models\User::factory(2)->create();
       //  \App\Models\Category::factory(5)->create();
       //  \App\Models\Type::factory(7)->create();
       //  \App\Models\Anime::factory(10)->create();
    }
}
