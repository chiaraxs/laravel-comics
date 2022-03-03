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

    <header>
        
        {{-- header uguale x tutte la pagine --}}
        @include('partials.header')
        {{-- header uguale x tutte la pagine --}}

    </header>

    <div class="jumbotron">
        @include('partials.jumbo')
    </div>


    <main>
        {{-- segnaposto --}}
        @yield('content')
        {{-- segnaposto --}}
    </main>


    <footer>
        
        
        {{-- footer uguale per tutte le pagine --}}
        @include('partials.footer')
        {{-- footer uguale per tutte le pagine --}}

    </footer>

    @include('partials.contacts')
    



</body>
</html>
