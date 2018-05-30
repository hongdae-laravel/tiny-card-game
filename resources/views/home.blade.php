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
                    <p>{{ $monster->name }}</p>
                </div>
                <div class="card-body">
                    <img src="{{ $monster->image_url }}" alt="">
                </div>
                <div class="card-footer">
                    <span class="point point-attack">{{ $monster->attack_power }}</span>
                    <span class="point point-defense">{{  $monster->defense_power }}</span>
                </div>
            </div>
        </div>
        <div class="card-wrapper">
            <div class="card">
                <div class="card-header">
                    <p>{{ $monster2->name }}</p>
                </div>
                <div class="card-body">
                    <img src="{{ $monster2->image_url }}" alt="">
                </div>
                <div class="card-footer">
                    <span class="point point-attack">{{ $monster2->attack_power }}</span>
                    <span class="point point-defense">{{  $monster2->defense_power }}</span>
                </div>
            </div>
        </div>
    </div>
@endsection
