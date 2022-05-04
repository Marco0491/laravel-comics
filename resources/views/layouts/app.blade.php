<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <script src="https://kit.fontawesome.com/f9418bd38a.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{asset("css/app.css")}}">
        <title>Laravel DC-Comics</title>
    </head>
    <body>
        @include('components.header')

        <section id="jumbotron">
            <span>current series</span>
        </section>

        <main>
            @yield('main-content')
        </main>

        @include('components.footer')
    </body>
</html>