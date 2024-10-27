<tr>
	<td>
    <div class="crop-with-ellipsis">
      <a href='{{ url("offers/$offer->id") }}'>
        {{ $offer->position }}
      </a>
    </div>
	</td>
  <td>
    @if($offer->state)
    <span class="chip">{{ $offer->state }}</span>
    @endif
  </td>
	<td>
		<a href='{{ $offer->company ? url("companies/$offer->company_id") : "" }}'>
			{{ $offer->company ? $offer->company->name : '-' }}
		</a>
	</td>
	<td>
		{{ $offer->salary ? $offer->salary : 0 }}
	</td>
	<td>
		{{ $offer->publication_date ?  $offer->publication_date : "-/-/-"}}
	</td>
</tr>
