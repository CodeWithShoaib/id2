@extends('layouts.app')
@section('content')
<div class="row">
	<div class="col-lg-12">
		<form >
			<div class="row">
				<div class="col-lg-12">
					<div class="card">
						<div class="card-header">
							<span class="panel-title">{{ _lang('Doctor Information') }}</span>
						</div>
						<div class="card-body">
							<div class="row">
								<div class="col-md-12">
							        <div class="form-group">
								        <label class="control-label">{{ _lang('First Name') }}</label>						
								        <input type="text" class="form-control" name="title" value="{{ $doctor->first_name }}" required readonly>
							        </div>
							    </div>

								<div class="col-md-12">
							        <div class="form-group">
								        <label class="control-label">{{ _lang('Last Name') }}</label>						
								        <input type="text" class="form-control" name="value" value="{{ $doctor->last_name }}" required readonly>
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
								        <input type="text" class="form-control " name="button_name" value="{{ $doctor->phone }}" readonly>
							        </div>
							    </div>
								<div class="col-md-12">
							        <div class="form-group">
								        <label class="control-label">{{ _lang('Business Name') }}</label>						
								        <input type="text" class="form-control" value="{{ $doctor->business_name }}" readonly>
							        </div>
							    </div>
								<div class="col-md-12">
							        <div class="form-group">					
								       <label class="control-label">{{ _lang('Profile Pic') }}</label>
							        </div>
							    </div>
								<div class="col-md-12">
							        <div class="form-group">
								        						
								        <img src='{{ asset('public/uploads/profile/'. $doctor->profile_picture) }}' />
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


