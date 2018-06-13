@extends('layouts.app')

@section('content')
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <div class="cards">
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
                    <span class="point point-defense">{{  $card->monster->defense_power }}</span>
                </div>
            </div>
        </div>
        <div class="card-wrapper">
            <div class="card">
                <div class="card-header">
                    <p>{{ $card2->monster->name }}</p>
                </div>
                <div class="card-body">
                    <img src="{{ $card2->monster->image_url }}" alt="">
                </div>
                <div class="card-footer">
                    <span class="point point-attack">{{ $card2->monster->attack_power }}</span>
                    <span class="point point-defense">{{  $card2->monster->defense_power }}</span>
                </div>
            </div>
        </div>
    </div>
    <div class="game-info">
        <p>Choose a card.</p>
    </div>
@endsection
