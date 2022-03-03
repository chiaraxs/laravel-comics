{{-- estensione del layout di default --}}
@extends('layouts.default')
{{-- /estensione del layout di default --}}


{{-- head title in layouts->default --}}
@section('pageTitle', 'Home')
{{-- /head title in layouts->default --}}


@section('content')
   
   <main>
       <div class="current-series">current series</div>

        @foreach ($data as $comic)
       <div class="cards-box">
           <div class="cards">
               <img src="{{$comic['thumb']}}" alt="">
               <h3>{{$comic['series']}}</h3>
           </div>
       </div>
       @endforeach


       <button>load more</button>
   </main>

@endsection


