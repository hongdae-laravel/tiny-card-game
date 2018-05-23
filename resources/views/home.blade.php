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
            </div>
        </div>
        <div class="card-wrapper">
            <div class="card">
                <div class="card-header">
                    <p>{{ $monster2->name }}</p>
                </div>

            </div>
        </div>
    </div>
@endsection
