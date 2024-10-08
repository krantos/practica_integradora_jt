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
  <div class="offers">
    <table>
      <thead>
        <tr>
          <th>Position</th>
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
