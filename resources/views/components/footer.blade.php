@php
    $comicsDcLink = [
        [
            'text' => 'Characters',
            'url' => '#'
        ],
        [
            'text' => 'Comics',
            'url' => '#'
        ],
        [
            'text' => 'Movies',
            'url' => '#'
        ],
        [
            'text' => 'TV',
            'url' => '#'
        ],
        [
            'text' => 'Games',
            'url' => '#'
        ],
        [
            'text' => 'Videos',
            'url' => '#'
        ],
        [
            'text' => 'News',
            'url' => '#'
        ]
    ];
        $shopLink = [
        [
            'text' => 'Shop DC',
            'url' => '#'
        ],
        [
            'text' => 'Shop DC Collectibles',
            'url' => '#'
        ]
    ];
        $dcLink = [
        [
            'text' => 'Terms of Use',
            'url' => '#'
        ],
        [
            'text' => 'Privacy Policy(new)',
            'url' => '#'
        ],
        [
            'text' => 'AD Choises',
            'url' => '#'
        ],
        [
            'text' => 'Advertising',
            'url' => '#'
        ],
        [
            'text' => 'Jobs',
            'url' => '#'
        ],
        [
            'text' => 'Subscriptions',
            'url' => '#'
        ],
        [
            'text' => 'Talent Workshops',
            'url' => '#'
        ],
        [
            'text' => 'CPSC Certificates',
            'url' => '#'
        ],
        [
            'text' => 'Ratings',
            'url' => '#'
        ],
        [
            'text' => 'Shop Help',
            'url' => '#'
        ],
        [
            'text' => 'Contact Us',
            'url' => '#'
        ]
    ];
        $sitesLink = [
        [
            'text' => 'DC',
            'url' => '#'
        ],
        [
            'text' => 'Mad Magazine',
            'url' => '#'
        ],
        [
            'text' => 'DC Kids',
            'url' => '#'
        ],
        [
            'text' => 'DC Universe',
            'url' => '#'
        ],
        [
            'text' => 'DC Power Visa',
            'url' => '#'
        ]
    ];
@endphp

<footer>
    <div class="container">
        <div class="left-col">
            <h5>dc comics</h5>
            <ul>
                @foreach ($comicsDcLink as $comic)
                    <li>
                        <a href="{{ $comic['url'] }}">{{ $comic['text'] }}</a>
                    </li>
                @endforeach
            </ul>
            <h5>shop</h5>
            <ul>
                @foreach ($shopLink as $shop)
                    <li>
                        <a href="{{ $shop['url'] }}">{{ $shop['text'] }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="central-col">
            <h5>dc</h5>
            <ul>
                @foreach ($dcLink as $link)
                    <li>
                        <a href="{{ $link['url'] }}">{{ $link['text'] }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="right-col">
            <h5>sites</h5>
            <ul>
                @foreach ($sitesLink as $site)
                    <li>
                        <a href="{{ $site['url'] }}">{{ $site['text'] }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
        <div id="dc-logo"></div>
    </div>
    <div class="social-section">
        <div class="container">
            <button>sign up now!</button>
            <div class="social-logo">
                <h4>follow us</h4>
                <img src="{{asset('images/footer-facebook.png')}}" alt="facebook logo">
                <img src="{{asset('images/footer-twitter.png')}}" alt="twitter logo">
                <img src="{{asset('images/footer-youtube.png')}}" alt="youtube logo">
                <img src="{{asset('images/footer-pinterest.png')}}" alt="pinterest logo">
                <img src="{{asset('images/footer-periscope.png')}}" alt="periscope logo">
            </div>
        </div>
    </div>
</footer>