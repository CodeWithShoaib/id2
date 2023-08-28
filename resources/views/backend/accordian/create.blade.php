@extends('layouts.app')
@section('content')
<div class="row">
	<div class="col-lg-12">
		<span class="panel-title d-none">{{ _lang('Create Accordian') }}</span>
	    <form method="post"  action="{{ route('accordian.store') }}">
			{{ csrf_field() }}
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
								        <label class="control-label">{{ _lang('Title') }}</label>						
								        <input type="text" class="form-control" name="title" value="{{ old('title') }}" required>
							        </div>
							    </div>

								<div class="col-md-12">
							        <div class="form-group">
								        <label class="control-label">{{ _lang('Content') }}</label>						
								        <!--<textarea  class="summernote" name="data" required></textarea>-->
								        <textarea class="summernote" name="content"  rows="4" cols="40"></textarea>

							        </div>
							    </div>
                            <div class="col-md-12">
                            <div class="form-group">
                            <input type="submit" class="btn btn-primary" value='submit' />
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


