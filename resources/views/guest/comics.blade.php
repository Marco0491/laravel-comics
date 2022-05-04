@extends('layouts.app')

@section('main-content')
    <div class="container">
        <ul>
            @foreach ($comicsList as $comic)
                <li>{{ $comic['title'] }}</li>
            @endforeach
        </ul>
    </div>
@endsection