@extends('layouts.app')
@section('content')
@php
$count=count($doctors);
@endphp
<div class="row">
	<div class="col-lg-12">
		<div class="card no-export">
		    <div class="card-header">
				<span class="panel-title">{{ _lang('doctor List') }}</span>
			</div>

			<div class="card-body">
				<table id="orders_table" class="table table-bordered">
					<thead>
					    <tr>
							<th>{{ _lang('ID') }}</th>
							<th>{{ _lang('Name') }}</th>
							<th>{{ _lang('Email') }}</th>
							<th>{{ _lang('Phone no') }}</th>
							<th>{{ _lang('Profile Picture') }}</th>
							<th class="text-center">{{ _lang('Action') }}</th>
					    </tr>
					</thead>
					   @if($count>0)
					<tbody>
					   
					      @foreach($doctors as $brand)
					    <tr data-id="row_{{ $brand->id }}">
							<td class='name'>{{ $loop->index+1 }}</td>
							<td class='name'>{{ $brand->first_name }}</td>
							<td class='name'>{{ $brand->email }}</td>
							<td class='name'>{{ $brand->phone }}</td>
							<td class='logo'>
								<div class="thumbnail-holder">
									<img src="{{ asset('public/uploads/profile/'. $brand->profile_picture) }}" style='width:200px; height:200px;'>
								</div>
							</td>
							<td class="text-center">
								<div class="dropdown">
								  <button class="btn btn-light dropdown-toggle btn-xs" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								  {{ _lang('Action') }}
								  <i class="fas fa-angle-down"></i>
								  </button>
								  <form action="{{ action('DoctorController@destroy', $brand['id']) }}" method="post">
									{{ csrf_field() }}
									<input name="_method" type="hidden" value="DELETE">
									<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
										<a href="{{ action('DoctorController@view', $brand['id']) }}"  class="dropdown-item dropdown-edit dropdown-edit"><i class="mdi mdi-pencil"></i> {{ _lang('Login') }}</a>
									
									</div>
								  </form>
								</div>
							</td>
					    </tr>
					    @endforeach
					</tbody>
					@endif
				</table>
				 @if($count<=0)
				 <p>No doctors registered</p>
				 @endif
			</div>
		</div>
	</div>
</div>
@endsection

