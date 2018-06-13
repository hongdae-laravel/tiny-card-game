<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    // [요청] Monster에게 몬스터 정보를 요청한다.
    // [실행] Playground에 두 장의 닫힌 카드를 전달한다.
    // [실행] 카드를 연다.
    // [상태] 카드 열기/닫기
    // [상태] 승패 기록
    // [상태] 몬스터 아이디

    protected $fillable= [
        'side',
        'moster_id',
    ];
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function monster()
    {
        return $this->hasOne(Monster::class);
    }
}
