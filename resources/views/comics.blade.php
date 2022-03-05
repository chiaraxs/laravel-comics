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
        
        {{-- link che al click su img rimanda a comics.details di ciascun comic  --}}
        <a href="{{ route('comics.details', ["id"=> $loop->index])}}">
            <img src="{{$comic['thumb']}}" alt="" />
        </a>
        {{-- /link che al click su img rimanda a comics.details di ciascun comic  --}}

        <h6>{{$comic['series']}}</h6>
        </div>

        
        @endforeach
        {{-- /foreach card --}}

    </div>
    {{-- /cards --}}

    {{-- button --}}
    <button>load more</button>
    {{-- /button --}}

</main>

@endsection

