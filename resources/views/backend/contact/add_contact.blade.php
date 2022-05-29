@extends('backend.layouts.master')
@section('content')


<div class="container-fluid">
				<div class="row justify-content-center">
				<div class="card col-12">
					<div class="card-block">
						<h4 class="sub-title">Add Contact</h4>
						<form action="{{route('contact.store')}}" method="post">
							@csrf
							<div class="form-group">
								<label>Phone number</label>
								<div>
									<input type="text" name="phone_number" id="name" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<label>Email</label>
								<div>
									<input type="text" name="email" id="name" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<label>Factory Address</label>
								<div>
									<input type="text" name="factory_address" id="name" class="form-control">
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