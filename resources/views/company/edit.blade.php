@extends('admin.layout')
@section('content')
  <div class="column col-6 col-mx-auto">
    @include('company.form', ['company' => $company, 'method' => 'PUT'])
  </div>
@endsection
