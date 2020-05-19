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
        $this->call([
            // classTableSeeder::class,
            // cardtypeTableSeeder::class,
            // rarityTableSeeder::class,
            card_set_idTableSeeder::class,
        ]);
    }
}
