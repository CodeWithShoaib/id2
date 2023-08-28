@extends('layouts.app')
@section('content')
@php
$countPatient=count($patient);
@endphp
<div class="row">
	<div class="col-lg-12">
		<div class="card no-export">
		    <div class="card-header">
				<span class="panel-title">{{ _lang('Patient List') }}</span>
			</div>
			<div class="card-body">
				<table id="orders_table" class="table table-bordered">
					<thead>
					    <tr>
							<th>{{ _lang('ID') }}</th>
							<th>{{ _lang('First Name') }}</th>
							<th>{{ _lang('Last Name') }}</th>
							<th>{{ _lang('Email') }}</th>
							<th>{{ _lang('Gender') }}</th>
							<th>{{ _lang('Doctor') }}</th>
							<th>{{ _lang('Profile Picture') }}</th>
							<th class="text-center">{{ _lang('Action') }}</th>
					    </tr>
					</thead>
					    @if($countPatient>0)
					<tbody>
					      @foreach($patient as $brand)
					      @php
					      $User=App\User::where('id',$brand->user_matching_id)->first();
					      $doctor=App\User::where('id',$brand->user_id)->first();
					      @endphp
					    <tr data-id="row_{{ $brand->id }}">
							<td class='name'>{{ $loop->index+1 }}</td>
							<td class='name'>{{ $brand->fname ?? 'N/A' }}</td>
							<td class='name'>{{ $brand->lname ?? 'N/A' }}</td>
							<td class='name'>{{ $brand->email ?? 'N/A' }}</td>
							<td class='name'>{{ $brand->gender ?? 'N/A' }}</td>
							<td class='name'>{{ $doctor->first_name ?? 'N/A' }}</td>
						
							<td class='logo'>
								<div class="thumbnail-holder">
									<img src="{{ asset('public/uploads/profile/' . ($User->profile_picture ?? 'default.png')) }}" style="width:200px; height:200px;">
								</div>
							</td>
							<td class="text-center">
								<div class="dropdown">
								  <button class="btn btn-light dropdown-toggle btn-xs" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								  {{ _lang('Action') }}
								  <i class="fas fa-angle-down"></i>
								  </button>
								  <form action="{{ action('PatientController@destroy', $brand['id']) }}" method="post">
									{{ csrf_field() }}
									<input name="_method" type="hidden" value="DELETE">
									<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
										<a href="{{ action('PatientController@view', $brand['id']) }}" class="dropdown-item dropdown-edit dropdown-edit" target="_blank"><i class="mdi mdi-pencil"></i> {{ _lang('Login') }}</a>
									
									</div>
								  </form>
								</div>
							</td>
					    </tr>
					    @endforeach
					</tbody>
					    @endif
				    </table>
	             {{ $patient->links() }}
	           	@if($countPatient<=0)
				 <p>No Patient is registered!</p>
				 @endif
			</div>

			
		</div>
	</div>
</div>
@endsection

