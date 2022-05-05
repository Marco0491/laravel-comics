@extends('layouts.app')
    
@section('title', 'fumetti')

@section('main-content')
    <div class="main">
        <div class="container">
            @foreach ($comicsList as $index => $comic)
                <div class="cards">
                    <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
                    <a href="{{route('comic-detail', ['index' => $index])}}">
                        <h6>{{$comic['title']}}</h6>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
    @endsection