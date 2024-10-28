@extends('admin.layout')
@section('content')
<div class="columns">
  <div class="col-10 col-sm-11 col-mx-auto my-2">
    <div class="columns">
      <div class="column">
        <div class="columns bg-gray" style="min-height: 120px;">
          <div class="column col-1 flex-centered ">
            @include('offer.EditOptions', ['offer' => $offer])
          </div>
          <div class="column col-5 col-sm-12">
            <label class="form-label">Position:
              <h2>{{ $offer->position }}</h2>
            </label>
          </div>
          <div class="column col-3 col-sm-12">
            <label class="form-label">Salary:
              <h2 class="">$ {{ $offer->salary ?  $offer->salary : '-'}}</h2>
            </label>
          </div>
          <div class="column col-2 col-sm-12">
            @include('offer.state', ['state' => $offer->state ])
          </div>
        </div>
        <div class="column">
          @include('offer.interview', ['offer' => $offer, 'interviews' => $interviews])
        </div>
        <div class="columns">
          <div class="column col-6 col-sm-12">
            <label class="text-gray form-label">Publication Date:</label>
            <p class="text-large">{{ $offer->publication_date }}</p>
          </div>
          <div class="colum col-6 col-sm-12">
            <label class="text-gray form-label">url:</label>
            <p><a href="{{ $offer->url }}" target="_blanck">Link</a></p>
          </div>
          <div class="column col-6 col-sm-12">
            <label class="text-gray form-label">Skills:</label>
            <p>{!! $offer->skills !!}</p>
          </div>
          <div class="column col-6 col-sm-12">
            <label class="text-gray form-label">Experience:</label>
            <p>{!! $offer->experience !!}</p>
          </div>
        </div>
      </div>
    </div>
    <div class="columns">
      <div class="column col-mx-auto my-2">
        <div class="divider"></div>
        <label class="text-gray form-label">Company</label>
        <h3>{{ $offer->company ? $offer->company->name : '-' }}</h3>
        <label class="text-gray form-label">url:</label>
        <p>
          <a href='{{ $offer->company ? url("$offer->company->url") : ""}}' target="_blank">
            {{ $offer->company ? $offer->company->url : '-' }}
          </a>
        </p>
      </div>
    </div>

    <div class="columns">
      <div class="column col-mx-auto my-2">
        <div class="divider"></div>
        <label class="text-gray form-label">Platform</label>
        <h3>{{ $offer->platform ? $offer->platform->name : '-' }}</h3>
        <label class="text-gray form-label">url:</label>
        <p>
          <a href='{{ $offer->platform ? url("$offer->platform->url") : ""}}' target="_blank">
            {{ $offer->platform ? $offer->platform->url : '-' }}
          </a>
        </p>
      </div>
    </div>
  </div>
</div>
@endsection