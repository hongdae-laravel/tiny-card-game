@extends('layouts.app')

@section('content')
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <div class="cards">
        @if(count($cards)>0)
            @foreach($cards as $card)
                @if($card->side == "back")
                    <div class="card-wrapper">
                        <div class="card">
                            <div class="card-header">
                                <p>Back side</p>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('card.pick') }}" method="post">
                                    {{ csrf_field() }}
                                    @foreach($cards as $item)
                                        <input type="hidden" name="cards[]" value="{{$item->id}}">
                                    @endforeach
                                    <input type="hidden" name="selectedCardId" value="{{$card->id}}">
                                    <input type="submit" value="Flip">
                                </form>
                            </div>
                            <div class="card-footer">
                                <p>Back side</p>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="card-wrapper">
                        <div class="card">
                            <div class="card-header">
                                <p>{{ $card->monster->name }}</p>
                            </div>
                            <div class="card-body">
                                <img src="{{ $card->monster->image_url }}" alt="">
                            </div>
                            <div class="card-footer">
                                <span class="point point-attack">{{ $card->monster->attack_power }}</span>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        @endif
    </div>
    <div class="game-info">
        @if(count($cards)>0)
            <p>Choose a card.</p>
        @else
            <p>There is no card.</p>
        @endif
    </div>
@endsection
