@extends('layouts.app')

@section('content')
<div class="row">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-header">
				<span class="panel-title">{{ _lang('Update Testimonial') }}</span>
			</div>
			<div class="card-body">
				<form method="post" class="validate" autocomplete="off" action="{{ action('BrandController@update', $id) }}" enctype="multipart/form-data">
					{{ csrf_field()}}
					<input name="_method" type="hidden" value="PATCH">				
					<div class="row">
						<div class="col-md-12">
							<div class="form-group row">
						        <label class="col-md-12 col-form-label">{{ _lang('Title') }}</label>	
						        <div class="col-md-12">					
							        <input type="text" class="form-control" name="title" value="{{ $brand->title }}" required>
							    </div>
					        </div>
							<div class="form-group row">
						        <label class="col-md-12 col-form-label">{{ _lang('Name') }}</label>	
						        <div class="col-md-12">					
							        <input type="text" class="form-control" name="name" value="{{ $brand->name }}" required>
							    </div>
					        </div>
					        
                             <div class="form-group row">
						        <label class="col-md-12 col-form-label">{{ _lang('content') }}</label>	
						        <div class="col-md-12">					
							        <textarea  class="form-control summernote" name="content" >{{$brand->content}}</textarea>
							    </div>
					        </div>
					        <div class="form-group row">
						        <label class="col-md-12 col-form-label">{{ _lang('Image') }}</label>
						        <input type="file" class="form-control dropify" name="image" data-allowed-file-extensions="png jpg jpeg" data-default-file="{{asset('upload/image/'.$brand->image )}}">
					        </div>


							<div class="form-group row">	
								<div class="col-md-9">
									<button type="submit" class="btn btn-primary">{{ _lang('Update') }}</button>
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


