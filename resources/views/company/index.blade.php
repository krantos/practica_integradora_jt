@extends('admin.layout')
@section('content')
@if (session('toast'))
    <div class="toast toast-{{ session('toast')['style'] }}" id="toast">
			<button 
				class="btn btn-clear float-right" 
				onclick="document.getElementById('toast').remove()"></button>
				{{ session('toast')['message'] }}
    </div>
@endif
  <div class="col-11 col-mx-auto">
		<h3>Companies</h3>
    <table class="table table-striped table-hover">
      <thead>
        <tr>
          <th>Name</th>
          <th>Location</th>
          <th>url</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($companies as $company)
          @include('company.company', [$company])
        @endforeach
      </tbody>
    </table>
  </div>
@endsection
