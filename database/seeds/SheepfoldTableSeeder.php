<?php

use Illuminate\Database\Seeder;
use App\Sheepfold;

class SheepfoldTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sheepfold::truncate();
        Sheepfold::create(['title' => 'Загон 1']);
        Sheepfold::create(['title' => 'Загон 2']);
        Sheepfold::create(['title' => 'Загон 3']);
        Sheepfold::create(['title' => 'Загон 4']);
    }
}
