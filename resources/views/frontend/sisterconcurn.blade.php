@extends('frontend.layouts.master')
@section('content')
   

    <section class="NewPage-sec1">
        <img   src="{{url($sisterdetails->banner_img)}}" alt="" width="100%" height="auto">
    </section>
    <section class="container NewPage-sec2">
        <p>{{$sisterdetails->name}}</p>
        <div class="row">
            <div class="col-lg-5 col-md-12 col-sm-12 mx-auto">
        <p class="row1-header">
             About us
        </p>
        <p>
           {{$sisterdetails->about_us}}
        </p>
        {{-- @dd($sisterdetails) --}}
            </div>
            <div class="col-lg-2 mx-auto">

            </div>
            <div class="col-lg-5 col-md-12 col-sm-12 mx-auto">
                <img src="{{url($sisterdetails->logo_img)}}" alt="" width="200px" height="300px">
            </div>
        </div>       
    </section>
    
    <section class="container NewPage-sec3">
        <div class="row">
            <div class="col-lg-5 col-md-12 mx-auto">
                <iframe src="{{$sisterdetails->iframe}}" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-lg-5 col-md-12 mx-auto">
                <p class="row1-header">
                    Contact us
               </p>
               <div class="CONTACT-INFO">
                <div class="CONTACT-INFO-1" style="display: flex;">
                  <i style="padding-left: 20px; font-size:28px;" class=" fa fa-mobile-android-alt"></i>
                  <div>
                    <p style="font-size:21px; font-weight: bold;">Phone</p>
                    <p style="font-size:17px; font-weight: lighter;">{{$sisterdetails->phone}}</p>
                  </div>
                </div>
                <div class="CONTACT-INFO-1"  style="display: flex;">
                  <i class=" fa fa-mail-bulk"></i>
                  <div>
                    <p style="font-size:21px; font-weight: bold;">Email Adress</p>
                    <p style="font-size:17px; font-weight: lighter;">{{$sisterdetails->email}}</p>
                  </div>
                </div>
                <div class="CONTACT-INFO-1"  style="display: flex;">
                    <i class=" fa fa-home"></i>
                    <div>
                      <p style="font-size:21px; font-weight: bold;">Factory</p>
                      <p style="font-size:17px; font-weight: lighter;">{{$sisterdetails->factory_address}}</p>
                    </div>
                </div>
                </div>
        </div>
    </section>
    
    <section class="sec3">
        <div class="wrapper">
            <div class="carousel card-carousel">
                @foreach ($sisterdetails->slider as $slider)
                <div class="card"> 
                    <img src="{{url($slider->slider_image)}}" alt="" width="100%" height="265px">
                </div>
                @endforeach
             </div>
        </div>
    </section>

@endsection