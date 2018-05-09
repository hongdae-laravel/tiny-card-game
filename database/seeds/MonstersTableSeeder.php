<?php

use App\Monster;
use Illuminate\Database\Seeder;

class MonstersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Monster::create([
            'name' => 'Kraken',
            'attackPower' => 5,
            'defensePower' => 5,
            'card_id' => 1,
        ]);
        Monster::create([
            'name' => 'Cerberos',
            'attackPower' => 6,
            'defensePower' => 9,
            'card_id' => 2,
        ]);

    }
}
