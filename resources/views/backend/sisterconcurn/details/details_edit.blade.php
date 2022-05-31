@extends('backend.layouts.master')
@section('content')


<div class="container-fluid">
				<div class="row justify-content-center">
				<div class="card col-12">
					<div class="card-block">
						<h4 class="sub-title">Add sisterconcurn</h4>
						<form action="{{route('sisterconcurn.update',$detail->id)}}" method="post">
							@csrf
                            @method('PATCH')
							<div class="form-group">
								<label>Name</label>
								<div>
									<input type="text" name="name" id="name"  value="{{$detail->name}}" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<label>Sisterconcurn name</label>
								<div>
									<input type="text" name="sisterconcurn_name" id="name"  value="{{$detail->sisterconcurn_name}}" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<label>Phone</label>
								<div>
									<input type="text" name="number" id="name" value="{{$detail->number}}"  class="form-control">
								</div>
							</div>
							<div class="form-group">
								<label>Details</label>
								<div>
									<textarea type="text" name="details" id="name" value="{{$detail->details}}"  class="form-control">{{$detail->details}}</textarea>
								</div>
							</div>
							<div class="form-group">
								<label></label>
								<div>
									<button class="btn btn-primary">Save</button>
								</div>
							</div>
						</form>
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