@extends('backend.layouts.master')
@section('content')


<div class="container-fluid">
				<div class="row justify-content-center">
					<div class="card col-12">
						<div class="card-block">
							<h4 class="sub-title">contact List</h4>
							<table class="table">
								<thead>
									<tr>
										<th scope="col">Sl</th>
										<th scope="col">Phone Number</th>
										<th scope="col">Email</th>
										<th scope="col">Factory Address</th>
										<th scope="col">Action</th>
									</tr>
								</thead>
								<tbody>
									@foreach($all_contact as $contact)
									<tr>
										<th scope="row">{{$loop->iteration}}</th>
										<td>{{$contact->phone_number}}</td>
										<td>{{$contact->email}}</td>
										<td>{{$contact->factory_address}}</td>
										<td>
											<form action="{{ route('contact.destroy',$contact->id) }}" method="POST">
							                 
							                    @csrf
							                    @method('DELETE')
							      
							                    <button type="submit" class="text-danger" style="border: none; background: inherit; cursor: pointer;"><i class="fas fa-trash-alt"></i></button>
							                </form>
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>
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