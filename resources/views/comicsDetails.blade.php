{{-- estensione del layout di default --}}
@extends('layouts.default')
{{-- /estensione del layout di default --}}


{{-- head title in layouts->default --}}
@section('pageTitle', $comics['title'])
{{-- /head title in layouts->default --}}


@section('comicsDetails')
<div class="comics-details">
    <div class="cards-box">

        <div class="cards">
            <h4>{{$comics['title']}}</h4>
            <img src="{{$comics['thumb']}}" alt="">
            <h6>{{$comics['series']}}</h6>
            <p>{{$comics['price']}}</p>
        </div>
        <p>{{$comics['description']}}</p>


    </div>

</div>

@endsection