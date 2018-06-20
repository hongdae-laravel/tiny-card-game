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
            'image_url' => '/images/monsters/m01.jpg',
            'attack_power' => 5,
            'defense_power' => 5,
            'card_id' => 1,
        ]);
        Monster::create([
            'name' => 'Cerberos',
            'image_url' => '/images/monsters/m02.jpg',
            'attack_power' => 6,
            'defense_power' => 9,
            'card_id' => 2,
        ]);
        Monster::create([
            'name' =>'Sphinx',
            'image_url' => '/images/monsters/m03.jpg',
            'attack_power' => 10,
            'defense_power' => 7,
            'card_id' => 3,
        ]);
        Monster::create([
            'name' =>'Griffin',
            'image_url' => '/images/monsters/m04.jpg',
            'attack_power' => 6,
            'defense_power' => 5,
            'card_id' => 4,
        ]);
        Monster::create([
            'name' =>'Minotauros',
            'image_url' => '/images/monsters/m05.jpg',
            'attack_power' => 10,
            'defense_power' => 7,
            'card_id' => 5,
        ]);
        Monster::create([
            'name' =>'Cyclops',
            'image_url' => '/images/monsters/m06.jpg',
            'attack_power' => 6,
            'defense_power' => 9,
            'card_id' => 6,
        ]);
        Monster::create([
            'name' =>'Siren',
            'image_url' => '/images/monsters/m07.jpg',
            'attack_power' => 10,
            'defense_power' => 7,
            'card_id' => 7,
        ]);
        Monster::create([
            'name' =>'Basilisk',
            'image_url' => '/images/monsters/m08.jpg',
            'attack_power' => 5,
            'defense_power' => 9,
            'card_id' => 8,
        ]);
        Monster::create([
            'name' =>'Myrmekes',
            'image_url' => '/images/monsters/m09.jpg',
            'attack_power' => 8,
            'defense_power' => 6,
            'card_id' => 9,
        ]);
        Monster::create([
            'name' =>'Peryton',
            'image_url' => '/images/monsters/m10.jpg',
            'attack_power' => 5,
            'defense_power' => 9,
            'card_id' => 10,
        ]);
        Monster::create([
            'name' =>'Satyrs',
            'image_url' => '/images/monsters/m11.jpg',
            'attack_power' => 5,
            'defense_power' => 8,
            'card_id' => 11,
        ]);
        Monster::create([
            'name' =>'Chimera',
            'image_url' => '/images/monsters/m12.jpg',
            'attack_power' => 9,
            'defense_power' => 6,
            'card_id' => 12,
        ]);
    }
}
