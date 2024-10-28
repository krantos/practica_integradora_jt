@extends('admin.layout')
@section('content')
<div class="columns">
  <div class="col-10 col-mx-auto">
    <div class="columns">
      <h3>Next Interviews</h3>
    </div>
    <div class="columns">
      <div class="column">
        @include('dashboard.incomingInterviews', ['incomingInterviews' => $incomingInterviews])
      </div>
    </div>
    <div class="columns my-2">
      <h3>Offers</h3>
    </div>
    <div class="columns">
      <div class="column my-2 col-6 col-md-12">
        @include('dashboard.top5Salary', ['top5Salary' => $top5Salary])
      </div>
      <div class="column my-2 col-6 col-md-12">
        @include('dashboard.offersByState', ['offersByState' => $offersByState])
      </div>
    </div>
    <div class="columns">
      <div class="column my-2 col-6 col-md-12">
        @include('dashboard.countByCompany', ['countByCompany' => $countByCompany])
      </div>
    </div>
    <div class="divider"></div>
  </div>

</div>
@endsection