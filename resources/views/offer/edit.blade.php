@extends('admin.layout')
@section('content')
  <div class="column col-6 col-sm-11 col-mx-auto">
    @include('offer.form', ['offer' => $offer, 'method' => 'PUT'])
  </div>
@endsection
