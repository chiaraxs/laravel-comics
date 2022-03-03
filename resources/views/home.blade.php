{{-- estensione del layout di default --}}
@extends('layouts.default')
{{-- /estensione del layout di default --}}


{{-- head title in layouts->default --}}
@section('pageTitle', 'Home')
{{-- /head title in layouts->default --}}

{{-- unica section main che cambia tra le pagine --}}
@section('main')
   
   <main>
       <div class="current-series">current series</div>

        
       <div class="cards-box">
            {{-- foreach --}}
            @foreach ($data as $comic)
            <div class="cards">
                <img src="{{$comic['thumb']}}" alt="">
                <h6>{{$comic['series']}}</h6>
            </div>
            @endforeach
            {{-- foreach --}}
       </div>
      

       <button>load more</button>
   </main>

@endsection
{{-- /unica section main che cambia tra le pagine --}}



