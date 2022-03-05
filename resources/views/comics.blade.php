{{-- estensione del layout di default --}}
@extends('layouts.default')
{{-- /estensione del layout di default --}}


{{-- head title in layouts->default --}}
@section('pageTitle', 'Comics')
{{-- /head title in layouts->default --}}

{{-- unica section main che cambia tra le pagine --}}
@section('main')

<main>
    {{-- current series --}}
    <div class="current-series">current series</div>
    {{-- /current series --}}

    {{-- cards --}}
    <div class="cards-box">

        {{-- foreach card  --}}
        @foreach ($data as $comic)
        <div class="cards">
            <img src="{{$comic['thumb']}}" alt="">
            <h6>{{$comic['series']}}</h6>
        </div>

        {{-- link che al click rimanda a comics.details di ciascun comic  --}}
        <div class="d-flex">
            <a href="{{ route('comics.details', ["id"=> $loop->index]) }}" class="btn button-details btn-link align-self-center">Details</a>
        </div>
        {{-- /link che al click rimanda a comics.details di ciascun comic  --}}

        @endforeach
        {{-- /foreach card --}}

    </div>
    {{-- /cards --}}

    {{-- button --}}
    <button>load more</button>
    {{-- /button --}}

</main>

@endsection
{{-- /unica section main che cambia tra le pagine --}}
