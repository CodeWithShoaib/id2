@extends('layouts.app')
@section('content')
@php
$User=App\User::where('id',$doctor->user_matching_id)->first();
$doctor=App\User::where('id',$doctor->user_id)->first();
@endphp
<div class="row">
	<div class="col-lg-12">
		<form >
			<div class="row">
				<div class="col-lg-12">
					<div class="card">
						<div class="card-header">
							<span class="panel-title">{{ _lang('Patient Information') }}</span>
						</div>
						<div class="card-body">
							<div class="row">
								<div class="col-md-12">
							        <div class="form-group">
								        <label class="control-label">{{ _lang('First Name') }}</label>						
								        <input type="text" class="form-control" name="title" value="{{ $doctor->fname }}" required readonly>
							        </div>
							    </div>

								<div class="col-md-12">
							        <div class="form-group">
								        <label class="control-label">{{ _lang('Last Name') }}</label>						
								        <input type="text" class="form-control" name="value" value="{{ $doctor->lname }}" required readonly>
							        </div>
							    </div>
							
								<div class="col-md-12">
							        <div class="form-group">
								        <label class="control-label">{{ _lang('Email') }}</label>						
								        <input type="text" class="form-control " name="patience_registeration_time_limit" value="{{ $doctor->email }}" readonly>
							        </div>
							    </div>
								<div class="col-md-12">
							        <div class="form-group">
								        <label class="control-label">{{ _lang('Phone') }}</label>						
								        <input type="text" class="form-control " name="button_name" value="{{ $doctor->number }}" readonly>
							        </div>
							    </div>
								<div class="col-md-12">
							        <div class="form-group">
								        <label class="control-label">{{ _lang('Country') }}</label>						
								        <input type="text" class="form-control " name="button_name" value="{{ $doctor->country }}" readonly>
							        </div>
							    </div>
								<div class="col-md-12">
							        <div class="form-group">
								        <label class="control-label">{{ _lang('State') }}</label>						
								        <input type="text" class="form-control" value="{{ $doctor->State }}" readonly>
							        </div>
							    </div>
								<div class="col-md-12">
							        <div class="form-group">
								        <label class="control-label">{{ _lang('city') }}</label>						
								        <input type="text" class="form-control" value="{{ $doctor->city }}" readonly>
							        </div>
							    </div>
								<div class="col-md-12">
							        <div class="form-group">					
								       <label class="control-label">{{ _lang('Profile Pic') }}</label>
							        </div>
							    </div>
								<div class="col-md-12">
							        <div class="form-group">
								        <img src='{{ asset('public/uploads/profile/' . ($User->profile_picture ?? 'default.png')) }}' />
							        </div>
							    </div>
                			
		
							</div>	
						</div>
					</div>			
				</div>


		

			</div>	
		</form>
	</div>
</div>

@endsection


