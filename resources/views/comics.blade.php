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
