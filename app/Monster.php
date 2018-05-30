<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Monster extends Model
{
    // [실행] Card의 요청에 따라 몬스터 정보를 전달한다.

    public $timestamps = false;

    protected $fillable = [
        'name',
        'imageUrl',
        'attackPower',
        'defensePower',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function card()
    {
        return $this->belongsTo(Card::class);
    }

    public function getRandomMonster()
    {
        $random = mt_rand(1, 12);
        return Monster::find($random);
    }
}
