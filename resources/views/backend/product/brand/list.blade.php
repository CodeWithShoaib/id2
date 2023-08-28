@extends('layouts.app')

@section('content')

<div class="row">
	<div class="col-lg-12">
		<div class="card no-export">
		    <div class="card-header d-flex align-items-center">
				<span class="panel-title">{{ _lang('Testimonials List') }}</span>
				<a class="btn btn-primary btn-xs ml-auto" href="{{ route('brands.create') }}">{{ _lang('Add New') }}</a>
			</div>
			<div class="card-body">
				<table id="brands_table" class="table table-bordered data-table">
					<thead>
					    <tr>
						    <th>{{ _lang('ID') }}</th>
						    <th>{{ _lang('Name') }}</th>
						    <th>{{ _lang('Title') }}</th>
						    <th>{{ _lang('Content') }}</th>
						    <th>{{ _lang('Image') }}</th>
							<th class="text-center">{{ _lang('Action') }}</th>
					    </tr>
					</thead>
					<tbody>
					    @foreach($brands as $brand)
					    <tr data-id="row_{{ $brand->id }}">
					        
							<td class='name'>{{ $loop->index+1 }}</td>
							<td class='name'>{{ $brand->title }}</td>
							<td class='name'>{{ $brand->name }}</td>
							<td class='name'>{!! substr($brand->content,0,190) !!}</td>
							<td class='logo'>
								<div class="thumbnail-holder">
									<img src="{{ asset('upload/image/'. $brand->image) }}" style='width:200px; height:200px;'>
								</div>
							</td>
							<td class="text-center">
								<div class="dropdown">
								  <button class="btn btn-light dropdown-toggle btn-xs" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								  {{ _lang('Action') }}
								  <i class="fas fa-angle-down"></i>
								  </button>
								  <form action="{{ action('BrandController@destroy', $brand['id']) }}" method="post">
									{{ csrf_field() }}
									<input name="_method" type="hidden" value="DELETE">
									<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
										<a href="{{ action('BrandController@edit', $brand['id']) }}" class="dropdown-item dropdown-edit dropdown-edit"><i class="mdi mdi-pencil"></i> {{ _lang('Edit') }}</a>
										<button class="btn-remove dropdown-item" type="submit"><i class="mdi mdi-delete"></i> {{ _lang('Delete') }}</button>
									</div>
								  </form>
								</div>
							</td>
					    </tr>
					    @endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
@endsection