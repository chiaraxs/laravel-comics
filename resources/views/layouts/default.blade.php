<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('pageTitle') | DC Comics</title>

    {{-- richiamo al mio app.css --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    {{-- richiamo al mio app.css --}}

    {{-- richiamo al mio app.js --}}
    <script src="{{ asset('js/app.js')}}"></script>
    {{-- richiamo al mio app.js --}}


</head>
<body>

    {{-- header uguale per tutte le pagine --}}
    <header>
        @include('partials.header')
    </header>
    {{-- /header uguale per tutte le pagine --}}


    {{-- jumbo --}}
    <div class="jumbotron">
        @include('partials.jumbo')
    </div>
    {{-- jumbo --}}


    {{-- main --}}
    <main>
        {{-- segnaposto --}}
        @yield('main')
        {{-- segnaposto --}}
    </main>
    {{-- /main --}}

    {{-- shop --}}
    @include('partials.shop')
    {{-- /shop --}}

    {{-- footer uguale per tutte le pagine --}}
    <footer>
        @include('partials.footer')
    </footer>
    {{-- footer uguale per tutte le pagine --}}


    {{-- contacts --}}
    @include('partials.contacts')
    {{-- /contacts --}}

    

</body>
</html>
