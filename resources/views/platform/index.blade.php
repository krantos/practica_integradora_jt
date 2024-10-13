@extends('admin.layout')
@section('content')
  @if (session('toast'))
    <div class="toast toast-{{ session('toast')['style'] }}" id="toast">
      <button class="btn btn-clear float-right" onclick="document.getElementById('toast').remove()"></button>
      {{ session('toast')['message'] }}
    </div>
  @endif
	@if(blank($platforms))
			@include('platform.empty')
		@else
  <div class="col-11 col-mx-auto">
			<h3>Platforms</h3>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>Name</th>
						<th>url</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($platforms as $platform)
						@include('platform.platform', [$platform])
					@endforeach
				</tbody>
			</table>
		@endif
  </div>
@endsection
