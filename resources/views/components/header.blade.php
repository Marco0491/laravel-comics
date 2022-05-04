<?php
    $headerNav = [
        [
            'text' => 'characters',
            'url' => '#',
            'active' => 'false'
        ],
        [
            'text' => 'comics',
            'url' => '#',
            'active' => 'true'
        ],
        [
            'text' => 'movies',
            'url' => '#',
            'active' => 'false'
        ],
        [
            'text' => 'tv',
            'url' => '#',
            'active' => 'false'
        ],
        [
            'text' => 'games',
            'url' => '#',
            'active' => 'false'
        ],
        [
            'text' => 'collectibles',
            'url' => '#',
            'active' => 'false'
        ],
        [
            'text' => 'videos',
            'url' => '#',
            'active' => 'false'
        ],
        [
            'text' => 'fans',
            'url' => '#',
            'active' => 'false'
        ],
        [
            'text' => 'news',
            'url' => '#',
            'active' => 'false'
        ],
        [
            'text' => 'shop',
            'url' => '#',
            'active' => 'false'
        ],
    ];
?>

<header>
    <div class="header-top">
        <div class="container">
            <span>dc power visa</span>
            <span>additional dc sites
                <i class="fa-solid fa-caret-down"></i>
            </span>
        </div>
    </div>
    <div class="header-bottom">
        <div class="container">
            <img src="{{asset('images/dc-logo.png')}}" alt="logo dc-comics">
            <nav>
                <ul>
                    @foreach ($headerNav as $navElement)
                        <li>
                            <a href="{{ $navElement['url'] }}">{{ $navElement['text'] }}</a>
                        </li>
                    @endforeach
                </ul>
            </nav>
            <div class="search">
                <input type="text" placeholder="Search">
                <i class="fa-solid fa-magnifying-glass"></i>
            </div>
        </div>
    </div>
</header>