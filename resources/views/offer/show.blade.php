@extends('admin.layout')
@section('content')
  <div class="columns">
    <h1>{{ $offer->position }}</h1>
    <a href='{{ url("offers/$offer->id/edit") }}' class="btn">Edit</a>
    <p>{{ $offer->publication_date }}</p>
    <p>{{ $offer->url }}</p>
    <p>{{ $offer->skills }}</p>
    <p>{{ $offer->experience }}</p>
    <p>{{ $offer->salary }}</p>
  </div>
@endsection
