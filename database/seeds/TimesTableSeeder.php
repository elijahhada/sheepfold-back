<?php

use Illuminate\Database\Seeder;
use App\Time;

class TimesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Time::truncate();
        $initialTimeAndInfo = Time::create(['days' => 0, 'seconds' => 0,'info' => 'Начало работы фермы']);
    }
}
