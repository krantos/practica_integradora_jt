@extends('admin.layout')
@section('content')
<div class="columns">
  <div class="col-11 col-mx-auto">
		<div class="columns">
			<div class="column">
				<label class="text-gray form-label">Name:</label>
				<h2>{{ $company->name }}</h2>
			</div>
			<div class="column col-auto">
				<div class="dropdown dropdown-right">
					<a class="btn dropdown-toggle" tabindex="0">
						<i class="icon icon-more-vert"></i>
					</a>
					<ul class="menu text-left">
						<li class="menu-item">
							<a href='{{ url("companies/$company->id/edit") }}'>Edit</a>
						</li>
						<form action="/companies/{{$company->id}}" method="post" id="form__submit">
							@method('DELETE') 
						<li class="menu-item">
								<a href='#' onclick="submitForm()">Delete</a>
						</li>
						<script>
									function submitForm() {
										if(window.confirm('Do you really want to delete this company?')) {
											document.getElementById('form__submit').submit();
										}
									}
								</script>
							@csrf
							</form>
					</ul>				
				</div>
			</div>
		</div>
	<label class="text-gray form-label">url:</label>
	<p>{{ $company->url ? $company->url : "-" }}</p>
	<label class="text-gray form-label">Location:</label>
	<p>{{ $company->location ? $company->location : "-" }}</p>
</div>
<div class="column col-12 col-mx-auto">
<div class="divider mx-2"></div>
</div>
@include('offer.table', ['offers' => isset($offers) ? $offers : []])
@endsection

