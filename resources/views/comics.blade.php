@extends('layouts.app')
@section('main')
    <div class="row">
        @foreach($db as $k => $comic)
            <div class="box-card">
                <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                <h3>{{ $comic['title'] }}</h3>
            </div>
        @endforeach
    </div>
@endsection