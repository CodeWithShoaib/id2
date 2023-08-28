@extends('layouts.app')

@section('content')
<div class="row">
	<div class="col-lg-12">
		<form method="post" class="validate" autocomplete="off" action="{{ action('CouponController@update', $id) }}" enctype="multipart/form-data">
			{{ csrf_field()}}
			<input name="_method" type="hidden" value="PATCH">
			<div class="row">
				<div class="col-lg-12">
					<div class="card">
						<div class="card-header">
							<span class="panel-title">{{ _lang('General Information') }}</span>
						</div>
						<div class="card-body">
							<div class="row">
								<div class="col-md-12">
							        <div class="form-group">
								        <label class="control-label">{{ _lang('Package Title') }}</label>						
								        <input type="text" class="form-control" name="title" value="{{ $coupon->title }}" required>
							        </div>
							    </div>

								<div class="col-md-12">
							        <div class="form-group">
								        <label class="control-label">{{ _lang('Price') }}</label>						
								        <input type="text" class="form-control" name="value" value="{{ $coupon->value }}" required>
							        </div>
							    </div>
								<div class="col-md-12">
							        <div class="form-group">
								        <label class="control-label">{{ _lang('Value') }}</label>						
								        <input type="text" class="form-control " name="fee_time" value="{{ $coupon->fee_time }}">
							        </div>
							    </div>
								<div class="col-md-12">
							        <div class="form-group">
								        <label class="control-label">{{ _lang('Patience Registeration Time limit') }}</label>						
								        <input type="text" class="form-control " name="patience_registeration_time_limit" value="{{ $coupon->patience_registeration_time_limit }}">
							        </div>
							    </div>
								<div class="col-md-12">
							        <div class="form-group">
								        <label class="control-label">{{ _lang('Button Name') }}</label>						
								        <input type="text" class="form-control " name="button_name" value="{{ $coupon->button_name }}">
							        </div>
							    </div>
								<div class="col-md-12">
							        <div class="form-group">
								        <label class="control-label">{{ _lang('Slots') }}</label>						
								        <input type="text" class="form-control " name="no_of_slots" value="{{ $coupon->no_of_slots }}">
							        </div>
							    </div>
                				<div class="col-md-12">
                					<div class="form-group">
                						<button type="submit" class="btn btn-primary">{{ _lang('Update') }}</button>
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


