@extends('frontend.layouts.master')
@section('content')
   
<div style="margin-top: 100px;" ></div>
    @foreach ($teams as $team )

    <h1 style="text-align:center; color: #6EC1E4; font-weight: bold;font-family: Arial, Helvetica, sans-serif; margin-bottom: 50px;">{{$team->sisterconcurn_name??''}}</h1>
    <div class="container">
        <div class="row  justify-content-center">
            <div  class="col-lg-6 col-sm-12  justify-content-center text-center ">
                <div>
                    <img src="{{$team->image??''}}" width="50%" alt="">
                    <p style="margin-top: 10px; font-family: Arial, Helvetica, sans-serif; font-weight: bold; font-size: 19px; color: #747474;">{{$team->name??''}}</p>
                    <p style="margin-top: 10px; font-family: Arial, Helvetica, sans-serif; font-size: 19px; color: #747474;">{{$team->designation??''}}</p>
                </div>
            </div>
        </div>
    </div>
   
    @endforeach
    
    {{ $teams->links() }}

  

@endsection