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
  @include('offer.table', ['offers' => $offers])
@endsection
