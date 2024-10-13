@extends('admin.layout')
@section('content')
  <div class="column col-6 col-mx-auto my-2">
		<div class="columns">
			<div class="column">
				<h1>{{ $offer->position }}</h1>
			</div>
			<div class="col col-auto">
				<div class="dropdown dropdown-right">
					<a class="btn dropdown-toggle" tabindex="0">
						<i class="icon icon-more-vert"></i>
					</a>
					<ul class="menu text-left">
						<li class="menu-item">
							<a href='{{ url("offers/$offer->id/edit") }}'>Edit</a>
						</li>
						<form action="/offers/{{$offer->id}}" method="post" id="form__submit">
							@method('DELETE') 
						<li class="menu-item">
								<a href='#' onclick="submitForm()">Delete</a>
						</li>
						<script>
									function submitForm() {
										if(window.confirm('Do you really want to delete this offer?')) {
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
		<label class="text-gray form-label">Salary:</label>
		<p>{{ $offer->salary }}</p>
		<label class="text-gray form-label">Publication Date:</label>
    <p>{{ $offer->publication_date }}</p>
		<label class="text-gray form-label">url:</label>
    <p><a href="{{ $offer->url }}" target="_blanck">{{ $offer->url }}</a></p>
		<label class="text-gray form-label">Skills:</label>
    <p>{{ $offer->skills }}</p>
		<label class="text-gray form-label">Experience:</label>
    <p>{{ $offer->experience }}</p>
  </div>
@endsection
