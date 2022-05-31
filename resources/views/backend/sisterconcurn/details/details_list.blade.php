@extends('backend.layouts.master')
@section('content')


<div class="container-fluid">
				<div class="row justify-content-center">
					<div class="card col-12">
						<div class="card-block">
							<h4 class="sub-title">Sisterconcurn List</h4>
							<table class="table">
								<thead>
									<tr>
										<th scope="col">Sl</th>
										<th scope="col">Name</th>
										<th scope="col">Sisterconcurn Name</th>
										<th scope="col">Phone</th>
										<th scope="col">Details</th>
										<th scope="col">Action</th>
									</tr>
								</thead>
								<tbody>
									@foreach($all_detail as $detail)
									<tr>
										<th scope="row">{{$loop->iteration}}</th>
										<td>{{$detail->name}}</td>
										<td>{{$detail->sisterconcurn_name}}</td>
										<td>{{$detail->number}}</td>
										<td>{{$detail->details}}</td>
										<td>
											<form action="{{ route('sisterconcurn.destroy',$detail->id) }}" method="POST">
												<a class="text-success" href="{{ route('sisterconcurn.edit',$detail->id) }}"><i class="far fa-edit"></i></a> ||
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