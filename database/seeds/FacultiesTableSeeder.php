<?php

use Illuminate\Database\Seeder;

class FacultiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Faculty::class,3)->create()->each(function($dep){
            $dep->deparetements()->save(factory(App\Models\Departement::class)->make());
        });
    }
}
