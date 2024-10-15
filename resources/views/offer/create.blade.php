@extends('admin.layout')
@section('content')
  <div class="column col-6 col-mx-auto col-sm-11">
    @include('offer.form', ['offer' => $offer, 'method' => 'POST', 'companies' => $companies])
  </div>
@endsection
