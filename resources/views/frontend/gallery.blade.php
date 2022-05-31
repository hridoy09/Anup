@extends('frontend.layouts.master')
@section('content')
  <h1 style="font-size:50px; text-align: center; margin-top: 150px; font-weight: bolder;padding-bottom: 20px; border-bottom: 1px solid rgba(167, 167, 167, 0.596);">Gallery</h1>
    <div class="row ImageFlex-P mx-auto g-3">
            @foreach ($gallerys as $gallery )
            <div class="modalimage col-lg-4 col-md-6 col-sm-12 ">
              <img class="modal-target1" alt="Img 1" src="{{$gallery->gallary_image}}" />
            </div>
            @endforeach
            </div>
        
      <div id="modal1" class="modal1">
        <span id="modal-close1" class="modal-close1">&times;</span>
        <img id="modal-content1" class="modal-content1">
        <div id="modal-caption1" class="modal-caption1"></div>
      </div>

@endsection