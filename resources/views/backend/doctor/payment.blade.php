@extends('layouts.app')
@section('content')
@php
$slotData = App\SlotsData::paginate(8);
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
							<th>{{ _lang('Slot Title') }}</th>
							<th>{{ _lang('Price') }}</th>
							<th>{{ _lang('No of slot') }}</th>
							<th>{{ _lang('Registeration time') }}</th>
					    </tr>
					</thead>
					<tbody>
					      @foreach($slotData as $item)
					      @php
					      $user=App\User::where('id',$item->user_id)->first();

					      @endphp
					    <tr data-id="row_{{ $item->id }}">
							<td class='name'>{{ $loop->index+1 }}</td>
							<td class='name'>{{ $user->first_name ?? 'N/A' }}</td>
							<td class='name'>{{ $user->email ?? 'N/A' }}</td>
							<td class='name'>{{ $item->title ?? 'N/A' }}</td>
							<td class='name'>{{ $item->price ?? 'N/A' }}</td>
							<td class='name'>{{ $item->no_of_slots ?? 'N/A' }}</td>
							<td class='name'>{{ $item->registration_time ?? 'N/A' }}</td>
					    </tr>
					    @endforeach
					</tbody>
				</table>
			{{$slotData->links()}}
			</div>
		</div>
	</div>
</div>
@endsection

