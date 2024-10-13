<tr>
  <td>
    <a href='{{ url("offers/$offer->id") }}'>
      {{ $offer->position }}
    </a>
  </td>
  <td>
    {{ $offer->company ? $offer->company->name : 'missing company' }}
  </td>
  <td>
    {{ $offer->salary ? $offer->salary : 0 }}
  </td>
  <td>
    {{ $offer->publication_date ?  $offer->publication_date : "-/-/-"}}
  </td>
</tr>
