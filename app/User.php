<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    // [요청] Playground에게 게임시작을 요청한다.
    // [요청] Playground에게 게임재개를 요청한다.
    // [실행] 카드를 고른다
    // [실행] 전적을 기록한다 -> 점수판 승패 기록과 동시에 처리해야 함

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
