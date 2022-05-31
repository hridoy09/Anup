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
                <a class="blockone" href="Gallery.html">Gallery </a> 
                <a class="blockthree" href="contact-us.html"> Contact us</a>
            </div>  
        </div>
  
   </section>
    
   <section class="sec2 row">
        <div class="slider2 col-lg-5  col-md-11  col-sm-11 mx-auto">
           <div class="rowImage">
                <img  style="width: 100%;" src="{{asset('assets/image/slider2/slider21.png')}}">
                <button  type="button" class="btn btn-primary btn-lg jwuButton">Join with us</button>
            </div>
          </div>
        <div class="content1 col-lg-5 col-md-11 col-sm-11 mx-auto">
            <div class="content1-sec">
                <p class="content1-text">WELCOME TO <br><span>
                    ANUP BISWAS</span></p>
                <!-- <p class="content1-text2">BLUE AQUA <span>Drinking Water  –  Drink The Difference </span></p> -->
                <p style="text-align: center; margin-top: 40px; ">
                    "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                </p>
                <p style="text-align: center; margin-top: 20px; ">
                    Skilled sales and suppliers in our transportation system are <br> always ready to deliver <span style="font-weight: bold;">BLUE AQUA</span> drinking water jars & small <br> bottles to your office, factory, residence, hospital, restaurant,
                    <br> shopping center and etc.
                </p>
                <p style="text-align: center; margin-top: 20px; ">Wash your hands well before meals, follow hygiene rules, and <br> always drink <span style="font-weight: bold;">BLUE AQUA</span> drinking water to stay healthy.</p>
                <div class="readMore">
                    <a href="#">READ MORE</a>
                </div>
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