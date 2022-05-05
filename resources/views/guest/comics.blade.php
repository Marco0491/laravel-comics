@extends('layouts.app')
    
@section('title', 'fumetti')

@section('main-content')
    <div class="container">
        @foreach ($comicsList as $comic)
            <div class="cards">
                <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
                <h6>{{$comic['title']}}</h6>
            </div>
        @endforeach
    </div>
    @endsection