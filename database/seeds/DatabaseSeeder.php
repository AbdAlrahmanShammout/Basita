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
        $this->call(CitiesTableDataSeeder::class);
        $this->call(RegionsTableDataSeeder::class);

        // $this->call(UsersTableSeeder::class);
    }
}
