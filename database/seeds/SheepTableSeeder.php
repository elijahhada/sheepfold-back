<?php

use Illuminate\Database\Seeder;
use App\Sheepfold;
use App\Sheep;

class SheepTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sheep::truncate();
        $sheepfold1 = Sheepfold::where('title', 'Загон 1')->first();
        $sheepfold2 = Sheepfold::where('title', 'Загон 2')->first();
        $sheepfold3 = Sheepfold::where('title', 'Загон 3')->first();
        $sheepfold4 = Sheepfold::where('title', 'Загон 4')->first();

        $sheepfoldsArray = [
            1 => $sheepfold1,
            2 => $sheepfold2,
            3 => $sheepfold3,
            4 => $sheepfold4
        ];

        $sheep1 = Sheep::create(['title' => 'Овечка 1', 'sheepfold_id' => $sheepfoldsArray[3]->id]);
        $sheep2 = Sheep::create(['title' => 'Овечка 2', 'sheepfold_id' => $sheepfoldsArray[3]->id]);
        $sheep3 = Sheep::create(['title' => 'Овечка 3', 'sheepfold_id' => $sheepfoldsArray[1]->id]);
        $sheep4 = Sheep::create(['title' => 'Овечка 4', 'sheepfold_id' => $sheepfoldsArray[2]->id]);
        $sheep5 = Sheep::create(['title' => 'Овечка 5', 'sheepfold_id' => $sheepfoldsArray[1]->id]);
        $sheep6 = Sheep::create(['title' => 'Овечка 6', 'sheepfold_id' => $sheepfoldsArray[1]->id]);
        $sheep7 = Sheep::create(['title' => 'Овечка 7', 'sheepfold_id' => $sheepfoldsArray[2]->id]);
        $sheep8 = Sheep::create(['title' => 'Овечка 8', 'sheepfold_id' => $sheepfoldsArray[4]->id]);
        $sheep9 = Sheep::create(['title' => 'Овечка 9', 'sheepfold_id' => $sheepfoldsArray[2]->id]);
        $sheep10 = Sheep::create(['title' => 'Овечка 10', 'sheepfold_id' => $sheepfoldsArray[4]->id]);
    }
}
