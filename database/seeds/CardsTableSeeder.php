<?php

use App\Card;
use Illuminate\Database\Seeder;

class CardsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Card::create([
            'side' => 'back',
            'monster_id' => 1,
        ]);
        Card::create([
            'side' => 'back',
            'monster_id' => 2,
        ]);
        Card::create([
            'side' => 'back',
            'monster_id' => 3,
        ]);
        Card::create([
            'side' => 'back',
            'monster_id' => 4,
        ]);
        Card::create([
            'side' => 'back',
            'monster_id' => 5,
        ]);
        Card::create([
            'side' => 'back',
            'monster_id' => 6,
        ]);
        Card::create([
            'side' => 'back',
            'monster_id' => 7,
        ]);
        Card::create([
            'side' => 'back',
            'monster_id' => 8,
        ]);
        Card::create([
            'side' => 'back',
            'monster_id' => 9,
        ]);
        Card::create([
            'side' => 'back',
            'monster_id' => 10,
        ]);
        Card::create([
            'side' => 'back',
            'monster_id' => 11,
        ]);
        Card::create([
            'side' => 'back',
            'monster_id' => 12,
        ]);
    }
}
