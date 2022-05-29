@extends('frontend.layouts.master')
@section('content')
    <div class="container">
        <div class="row d-flex justify-content-center mx-auto">
            <div class="col-sm-12 col-lg-5 contact-details">
              <div class="contact-details-all">
                <h2 style="text-align: center;margin-top: 10px; margin-bottom: 20px;">
                  CONTACT INFO
              </h2>
                <div class="CONTACT-INFO">
                <div class="CONTACT-INFO-1" style="display: flex;">
                  <i style="padding-left: 20px; font-size:28px;" class=" fa fa-mobile-android-alt"></i>
                  <div>
                    <p style="font-size:21px; font-weight: bold;">Phone</p>
                    <p style="font-size:17px; font-weight: lighter;">+88 01313 767080</p>
                  </div>
                </div>
                <div class="CONTACT-INFO-1"  style="display: flex;">
                  <i class=" fa fa-mail-bulk"></i>
                  <div>
                    <p style="font-size:21px; font-weight: bold;">Email Adress</p>
                    <p style="font-size:17px; font-weight: lighter;">info@blueaquabd.com</p>
                  </div>
                </div>
                <div class="CONTACT-INFO-1"  style="display: flex;">
                    <i class=" fa fa-home"></i>
                    <div>
                      <p style="font-size:21px; font-weight: bold;">Factory</p>
                      <p style="font-size:17px; font-weight: lighter;">Plot No. D/8, Block-A, BSCIC I/A, <br> Sholashahar, Baizid, Chattogram, <br> Bangladesh.</p>
                    </div>
                </div>
                </div>
              </div>
                

            </div>
            <div class=" col-sm-12 col-lg-7">
                <div>
                    <div class="contact-form-wrapper  contactUsForm">
                      <form action="{{route('mail.store')}}"  method="post" class="contact-form ">
                        @csrf
                        <h5 class="title">Contact us</h5>
                        <div>
                          <input type="text" class="form-control rounded border-white mb-3 form-input" id="name" name="name" placeholder="Name" required>
                        </div>
                        <div>
                          <input type="number" class="form-control rounded border-white mb-3 form-input" name="email" placeholder="Phone" required>
                        </div>
                        <div>
                          <textarea id="message" class="form-control rounded border-white mb-3 form-text-area" rows="5" name="message" cols="30" placeholder="Message" required></textarea>
                        </div>
                        <div class="submit-button-wrapper">
                          <input type="submit" value="Send">
                        </div>
                      </form>
                    </div>
                  </div>
            </div>
        </div>
    </div>
    @foreach ($errors->all() as $error)
<script type="text/javascript">
    Toast.fire({
        icon: 'error',
        title: '{!! $error !!}',
    })
</script>
@endforeach
@if(Session::has('success'))
<script type="text/javascript">
    Toast.fire({
        icon: 'success',
        title: '{!! Session::get('success') !!}',
    })
</script>
@php Session::forget('success') @endphp
@endif
@endsection