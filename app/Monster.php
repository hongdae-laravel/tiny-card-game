<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Monster extends Model
{
    // [실행] Card의 요청에 따라 몬스터 정보를 전달한다.

    protected $fillable = [
        'name',
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
}
