<?php

namespace App\Http\Controllers;

use App\Card;
use App\Monster;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Todo: 두 장의 카드를 배열에 담아서 뷰에 넘긴다.
        // Todo: 카드가 놓인 면(side)에 따라 다르게 보여준다.

        $card = Card::find(mt_rand(1, 12));
        $card2 = Card::find(mt_rand(1, 12));

        return view('home', [
            'card' => $card,
            'card2' => $card2,
        ]);
    }
}
