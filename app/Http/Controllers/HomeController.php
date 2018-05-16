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
        $monster = new Monster();

        $card = new Card(['monster' => $monster->getRandomMonster()]);
        $card2 = new Card(['monster' => $monster->getRandomMonster()]);

        return view('home', [
            'monster' => $card->monster,
            'monster2' => $card2->monster,
        ]);
    }
}
