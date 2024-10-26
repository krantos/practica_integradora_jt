@extends('admin.layout')
@section('content')
  <div class="columns">
    <div class="col-10 col-mx-auto">
      <div class="columns">
        <div class="col-3">
          @include('dashboard.offersByState', ['offersByState' => $offersByState])
        </div>
      </div>  
    </div>
  </div>
@endsection