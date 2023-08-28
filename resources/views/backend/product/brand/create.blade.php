@extends('layouts.app')
@section('content')
<div class="row">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-header">
				<span class="panel-title">{{ _lang('Add New Testimonial') }}</span>
			</div>
			<div class="card-body">
			    <form method="post" autocomplete="off" action="{{ route('brands.store') }}" enctype="multipart/form-data">
					{{ csrf_field() }}
					<div class="row">
						<div class="col-md-12">
					        <div class="form-group row">
						        <label class="col-md-12 col-form-label">{{ _lang('Title') }}</label>	
						        <div class="col-md-12">					
							        <input type="text" class="form-control" name="title" value="{{ old('title') }}" >
							    </div>
					        </div>
					        <div class="form-group row">
						        <label class="col-md-12 col-form-label">{{ _lang('Name') }}</label>	
						        <div class="col-md-12">					
							        <input type="text" class="form-control" name="name" value="{{ old('name') }}" required>
							    </div>
					        </div>
					        <div class="form-group row">
						        <label class="col-md-12 col-form-label">{{ _lang('content') }}</label>	
						        <div class="col-md-12">					
							        <textarea  class="form-control summernote" name="content" value="{{ old('content') }}"></textarea>
							    </div>
					        </div>
					        <div class="form-group row">
						        <label class="col-md-12 col-form-label">{{ _lang('Image') }}</label>
						        <input type="file" class="form-control dropify" name="image" data-allowed-file-extensions="png jpg jpeg">
					        </div>
						    
							<div class="form-group row">
								<div class="col-md-12 offset-md-0">
								    <input type='submit' class='btn btn-primary' value='Save'>
								</div>
							</div>
						</div>
					</div>			
			    </form>
			</div>
		</div>
    </div>
</div>
@endsection