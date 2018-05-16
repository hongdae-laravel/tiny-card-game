<?php

namespace App\Http\Controllers;

use App\Monster;
use Illuminate\Http\Request;

class CardController extends Controller
{
    protected $monster;

    public function __construct(Monster $monster)
    {
        $this->monster = $monster;
    }
}
