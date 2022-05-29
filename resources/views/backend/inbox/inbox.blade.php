@extends('backend.layouts.master')
@section('content')


<div class="container-fluid">
				<div class="row justify-content-center">
					<div class="card col-12">
						<div class="card-block">
							<h4 class="sub-title">mail List</h4>
							<table class="table">
								<thead>
									<tr>
										<th scope="col">Sl</th>
										<th scope="col">Name</th>
										<th scope="col">Phone Number</th>
										<th scope="col">Message</th>
										<th scope="col">Action</th>
									</tr>
								</thead>
								<tbody>
									@foreach($mails as $mail)
									<tr>
										<th >{{$loop->iteration}}</th>
										<td>{{$mail->name}}</td>
										<td>{{$mail->email}}</td>
										<td>{{$mail->message}}</td>
										<td>
											<form action="{{ route('mail.destroy',$mail->id) }}">
							                 
							                    @csrf
							                    @method('get')
							      
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