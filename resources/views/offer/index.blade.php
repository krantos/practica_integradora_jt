@extends('admin.layout')
@section('content')
<div class="offers">
	<table>
		<thead>
			<tr>
				<th>Position</th>
			</tr>
		</thead>
		<tbody>
			@foreach( $offers as $offer) 
				@include('offer.offer', [$offer])
			@endforeach
		</tbody>
	</table>
</div>
@endsection

