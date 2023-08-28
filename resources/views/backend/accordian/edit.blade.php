@extends('layouts.app')

@section('content')
<div class="row">
	<div class="col-lg-12">
		<form method="post" class="validate" autocomplete="off" action="{{ action('AccordianController@update', $id) }}" enctype="multipart/form-data">
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
								        <label class="control-label">{{ _lang('Title') }}</label>						
								        <input type="text" class="form-control" name="title" value="{{ $accordian->title }}">
							        </div>
							    </div>
							    	<div class="col-md-12">
							        <div class="form-group">
								        <label class="control-label">{{ _lang('Content') }}</label>
								        <textarea type="text" class="form-control summernote" name="content" value="{!! $accordian->content !!}" ></textarea>
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


