@extends('frontend.layouts.master')
@section('content')
   
    <div class="OSconcern-header">
        <h3 >
            OUR SISTER COCERN
        </h3>
        <hr>
    </div>
    
    <div class="OSconcern-sec1">
        <div class="OSconcern-grid">
            @foreach ($sisterlists as $sisterlist )
            <a href="{{route('sisterdetails',$sisterlist->id )}}">
                <div class="OSconcern-item">
                    <img src="{{$sisterlist->logo_img}}" alt="" width="100%">
                   
                </div>
               </a>
            @endforeach
          
         
            
    </div>
    </div>
@endsection
       