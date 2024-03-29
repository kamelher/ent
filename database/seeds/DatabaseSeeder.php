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

        $this->call(FacultiesTableSeeder::class);
        //$this->call(DepartementTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
