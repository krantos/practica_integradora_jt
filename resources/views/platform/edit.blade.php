@extends('admin.layout')
@section('content')
  <div class="column col-6 col-mx-auto">
    @include('platform.form', ['platform' => $platform, 'method' => 'PUT'])
  </div>
@endsection
