<tr>
  <td>
    <a href='{{ url("offers/$offer->id") }}'>
      {{ $offer->position }}
    </a>
  </td>
  <td>
    {{ $offer->company }}
  </td>
  <td>
    {{ $offer->salary }}
  </td>
</tr>
