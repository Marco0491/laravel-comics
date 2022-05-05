@extends('layouts.app')

@section('title', 'Dettaglio fumetti')

@section('main-content')
    <div class="main bg-white">
        <div class="container">
            <div class="left-col">
                <img src="{{$comicDetail['thumb']}}" alt="{{$comicDetail['title']}}">
                <h2>{{$comicDetail['title']}}</h2>
                <div class="top-price-info">
                    <div class="top-left-price-info">
                        <span>U.S. Price: {{$comicDetail['price']}}</span>
                        <span>AVAILABLE</span>
                    </div>
                    <div class="top-right-price-info">
                        <span>Check Availability <i class="fa-solid fa-caret-down"></i></span>
                    </div>
                </div>
                <p id="description">{{$comicDetail['description']}}</p>
            </div>
            <div class="right-col">
                <h4>ADVERTISEMENT</h4>
                <img src="{{asset('images/adv.jpg')}}" alt="">
            </div>
        </div>
    </div>
    <div class="main-bottom">
        <div class="container">
            <div class="left-column">
                <h2>Talent</h2>
                <div class="artists">
                    <h5>Art By:</h5>
                    <div class="artist-list">
                        @foreach ($comicDetail['artists'] as $artist)
                            <span>{{$artist}},</span>
                        @endforeach
                    </div>
                </div>
                <div class="writers">
                    <h5>Written By:</h5>
                    <div class="writer-list">
                        @foreach ($comicDetail['writers'] as $writer)
                            <span>{{$writer}},</span>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="right-column">
                <h2>Specs</h2>
                <div class="series">
                    <h5>Series:</h5>
                    <span>{{$comicDetail['series']}}</span>
                </div>
                <div class="price">
                    <h5>U.S. Price:</h5>
                    <span>{{$comicDetail['price']}}</span>
                </div>
                <div class="date">
                    <h5>On Sale Date:</h5>
                    <span>{{$comicDetail['sale_date']}}</span>
                </div>
            </div>
        </div>
    </div>
@endsection