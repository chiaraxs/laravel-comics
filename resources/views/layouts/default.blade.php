<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('pageTitle') | DC Comics</title>

    {{-- richiamo al mio app.css --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    {{-- /richiamo al mio app.css --}}

    {{-- richiamo al mio app.js --}}
    <script src="{{ asset('js/app.js')}}"></script>
    {{-- /richiamo al mio app.js --}}
</head>

<body>

    {{-- header uguale per tutte le pagine --}}
    <header>
        @include('partials.header')
    </header>
    {{-- /header uguale per tutte le pagine --}}


    {{-- jumbo uguale per tutte le pagine --}}
    <div class="jumbotron">
        @include('partials.jumbo')
    </div>
    {{-- /jumbo uguale per tutte le pagine --}}


    {{-- main - unico elemento che cambia per ogni pagina --}}
    <main>
        {{-- segnaposto --}}
        @yield('main')
        {{-- segnaposto --}}
    </main>
    {{-- /main - unico elemento che cambia per ogni pagina --}}

    {{-- segnaposto che rimanda al dettaglio title di ogni comics --}}
    @yield('comicsDetails')
    {{-- segnaposto che rimanda al dettaglio title di ogni comics -> esempio http://127.0.0.1:8000/comics/2 --}}


    {{-- shop uguale per tutte le pagine --}}
    <section>
        @include('partials.shop')
        {{-- /shop uguale per tutte le pagine --}}
    </section>


    {{-- footer uguale per tutte le pagine --}}
    <footer>
        @include('partials.footer')
    </footer>
    {{-- /footer uguale per tutte le pagine --}}


    <section>
        {{-- contacts uguale per tutte le pagine --}}
        @include('partials.contacts')
        {{-- /contacts uguale per tutte le pagine --}}
    </section>


</body>
</html>
