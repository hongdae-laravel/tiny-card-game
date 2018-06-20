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
        $cards = Card::orderByRaw('RAND()')->take(2)->get();

        return view('home', [
            'cards' => $cards
        ]);
    }
}
