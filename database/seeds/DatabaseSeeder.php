<?php

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
        // $this->call(UserSeeder::class);
//        factory('App\Desk', 30)->create();
//        factory('App\DeskList', 14)->create();
//        factory('App\Card', 60)->create();
        factory('App\Task', 30)->create();
    }
}
