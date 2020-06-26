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
        $this->call(SheepfoldTableSeeder::class);
        $this->call(SheepTableSeeder::class);
        $this->call(TimesTableSeeder::class);
        // $this->call(UserSeeder::class);
    }
}
