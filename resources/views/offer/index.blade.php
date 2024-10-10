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
  <div class="offers col-11 col-mx-auto">
    <table class="table table-striped table-hover">
      <thead>
        <tr>
          <th>Position</th>
          <th>Company</th>
          <th>Salary</th>
          <th>Date Posted</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($offers as $offer)
          @include('offer.offer', [$offer])
        @endforeach
      </tbody>
    </table>
  </div>
@endsection
