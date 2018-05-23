@extends('layouts.app')
@section('content')
    <div class="temp-container">
        <p>content of welcome.blade.php</p>
        @guest
            <p><a href="/register">Sign up</a></p>
        @else
            <p><a href="home">Game Start</a></p>
        @endguest
    </div>
@endsection
