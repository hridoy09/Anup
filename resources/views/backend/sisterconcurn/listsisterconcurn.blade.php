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
        <div class="row" >
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">sisterconcurn List</h4>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered zero-configuration">
                                <thead>
                                    <tr>
                                        <th>Serial No </th>
                                        <th>sisterconcurn Image </th>
                                        <th>Name</th>
                                        <th>Logo</th>
                                        <th>About Us</th>
                                        <th>Iframe Link</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>Factory Address</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                    
                                    @php
                                    $i = 1;
                                    @endphp
                                    @foreach($sisterconcurns as $sisterconcurn)
                                    <tr>
                                        <th scope="row">{{ $i++ }}</th>
                                        <td><img src="{{ asset($sisterconcurn->banner_img) }}"
                                                style="width: 100px; height: 100px;"></td>
                                        <td>{{ $sisterconcurn->name }}</td>
                                        <td><img src="{{ asset($sisterconcurn->logo_img) }}"
                                            style="width: 100px; height: 100px;"></td>
                                        <td>{{ $sisterconcurn->about_us }}</td>
                                        <td>{{$sisterconcurn->iframe }} </td>
                                        <td>{{ $sisterconcurn->phone }}</td>
                                        <td>{{ $sisterconcurn->email }}</td>
                                        <td>{{ $sisterconcurn->factory_address }}</td>
                                      
                                    
                                        @if($sisterconcurn->status == 1)
                                        <td><span class="badge badge-success">Active</span></td>
                                        @else
                                        <td><span class="badge badge-danger">Inactive</span></td>
                                        @endif
                                        <td>
                                            @if($sisterconcurn->status == 1) <a
                                                href="{{ URL::to('sisterconcurn/change_status/'.$sisterconcurn->id) }}"><i
                                                    class="fa fa-arrow-circle-down"></i></a>@else<a
                                                href="{{ URL::to('sisterconcurn/change_status/'.$sisterconcurn->id) }}"><i
                                                    class="fa fa-arrow-circle-up"></i></a>@endif <a
                                                href="{{ URL::to('sisterconcurn/delete/'.$sisterconcurn->id) }}" id="delete"><i
                                                    class="fa fa-trash"></i></a>
                                                    <a href="{{ URL::to('sisterconcurn/edit/'.$sisterconcurn->id) }}"><i class="fas fa-edit"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   

@endsection