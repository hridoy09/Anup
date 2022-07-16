@extends('backend.layouts.master')
@section('content')


    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
            </ol>
        </div>
    </div>
    <!-- row -->

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="form-validation">

                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            <form class="form-valide" action="{{route('sisterconcurn.update',$sisterconcurn->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-category">Banner Image<span
                                            class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="file"  class="form-control" name="banner_img"
                                            value="{{$sisterconcurn->banner_img}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-category">Name<span
                                            class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input  type="text"  class="form-control" name="name"
                                            value="{{$sisterconcurn->name}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-category">Logo<span
                                            class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="file"   class="form-control" name="logo_img"
                                            value="{{$sisterconcurn->logo_img}}">
                                    </div>
                                </div>
                             
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-category">Abou Us<span
                                            class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <textarea  class="form-control" name="about_us"
                                            value="{{$sisterconcurn->about_us}}">{{$sisterconcurn->about_us}}</textarea>
                                    </div>
                                </div>
                             
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-category">Side Image<span
                                            class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text"   class="form-control" name="side_img"
                                            value="{{$sisterconcurn->iframe}}">
                                    </div>
                                </div>
                             
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-category">Phone<span
                                            class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text"   class="form-control" name="phone"
                                            value="{{$sisterconcurn->phone}}">
                                    </div>
                                </div>
                             
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-category">Email<span
                                            class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input  type="text"  class="form-control" name="email"
                                            value="{{$sisterconcurn->email}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-category">Factory Address<span
                                            class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input  type="text"  class="form-control" name="factory_address"
                                            value="{{$sisterconcurn->factory_address}}">
                                    </div>
                                </div>
                             



                                <div class="form-group row">
                                    <div class="col-lg-8 ml-auto">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </div>
                            </form>



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #/ container -->


@endsection