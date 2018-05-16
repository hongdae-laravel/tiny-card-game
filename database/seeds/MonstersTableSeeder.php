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
            'attack_power' => 5,
            'defense_power' => 5,
            'card_id' => 1,
        ]);
        Monster::create([
            'name' => 'Cerberos',
            'attack_power' => 6,
            'defense_power' => 9,
            'card_id' => 2,
        ]);
        Monster::create([
            'name' =>'Sphinx',
            'attack_power' => 10,
            'defense_power' => 7,
            'card_id' => 3,
        ]);
        Monster::create([
            'name' =>'Griffin',
            'attack_power' => 6,
            'defense_power' => 5,
            'card_id' => 4,
        ]);
        Monster::create([
            'name' =>'Minotauros',
            'attack_power' => 10,
            'defense_power' => 7,
            'card_id' => 5,
        ]);
        Monster::create([
            'name' =>'Cyclops',
            'attack_power' => 6,
            'defense_power' => 9,
            'card_id' => 6,
        ]);
        Monster::create([
            'name' =>'Siren',
            'attack_power' => 10,
            'defense_power' => 7,
            'card_id' => 7,
        ]);
        Monster::create([
            'name' =>'Basilisk',
            'attack_power' => 5,
            'defense_power' => 9,
            'card_id' => 8,
        ]);
        Monster::create([
            'name' =>'Myrmekes',
            'attack_power' => 8,
            'defense_power' => 6,
            'card_id' => 9,
        ]);
        Monster::create([
            'name' =>'Peryton',
            'attack_power' => 5,
            'defense_power' => 9,
            'card_id' => 10,
        ]);
        Monster::create([
            'name' =>'Satyrs',
            'attack_power' => 5,
            'defense_power' => 8,
            'card_id' => 11,
        ]);
        Monster::create([
            'name' =>'Chimera',
            'attack_power' => 9,
            'defense_power' => 6,
            'card_id' => 12,
        ]);
    }
}
