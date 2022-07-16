@extends('frontend.layouts.master')
@section('content')
   
    <section class="sec1">
        <div class="wrapper">
            <div class="carousel card-carousel1">
                @foreach ($banners as $banner )
                <div class="card"> 
                    <img style="width:100%;" src="{{$banner->banner_image}}" alt="" height="500px">
                </div>
                @endforeach
                
                
</div>
        </div>
        <div class="content">
            <div class="another--three-blocks">
                <a class="blockone" href="{{route('gallery')}}">Gallery </a> 
                <a class="blockthree" href="{{route('contact')}}"> Contact us</a>
            </div>  
        </div>
  
   </section>
    
   <section class="sec2 row">
        <div class="slider2 col-lg-5  col-md-11  col-sm-11 mx-auto">
           <div class="rowImage">
                <img  style="width: 100%;" src="{{asset('assets/image/new.jpg')}}">
                
            </div>
          </div>
        <div class="content1 col-lg-5 col-md-11 col-sm-11 mx-auto">
            <div class="content1-sec">
                <p class="content1-text">WELCOME TO <br><span>
                    SRC EXPORT IMPORT & COLD STORAGE</span></p>
                <!-- <p class="content1-text2">BLUE AQUA <span>Drinking Water  –  Drink The Difference </span></p> -->
                <p style="text-align: center; margin-top: 40px; ">
                    SRC Cold storage came into the production in 2021 as a sister concern of Anup 
Biswas & Brothers. It is located in the center of Iqbal Road, Fisheryghat , 
Patherghata ,Chittagong. The plant has build up with high technology and 
environment friendly equipment .The plant has modern storage facilities for the 
preservation of various types of Fish, Dry Fish, Fruits and Vegetables.
                </p>
                <p style="text-align: center; margin-top: 20px; ">
                    It is one 
of the newest cold storage in Chittagong with high technology and modern 
storage facilitated in affordable cost .The storing capacity of the cold storage 
Aprrox 240 (Two Hundred Forty) Tons.
                </p>
                <p style="text-align: center; margin-top: 20px; ">After establishment it is playing a great 
                    role in the economy of port city Chittagong.</p>
                
            </div>
        </div>
    </section> 
   
    <section class="sec3">
        <div class="wrapper">
            <div class="carousel card-carousel">
                @foreach ($sliders as $slider)
                <div class="card"> 
                    <img src="{{$slider->slider_image}}" alt="" width="100%" height="265px">
                </div>
                @endforeach
             </div>
        </div>
    </section>

@endsection