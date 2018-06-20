<?php

namespace App\Http\Controllers;

use App\Card;
use App\Monster;
use Illuminate\Http\Request;

class CardController extends Controller
{
    protected $monster;
    public $side;

    public function __construct(Monster $monster)
    {
        $this->monster = $monster;
        $this->side = 'back';
    }

    public function pick(Request $request)
    {
        $cards = [];
        foreach($request->cards as $cardId) {
            $card = Card::find($cardId);
            $cardId == $request->selectedCardId ? $card->setAttribute('side', 'front') : '';
            array_push($cards, $card);
        }
        return view('home', [
            'cards' => $cards
        ]);
    }

}
