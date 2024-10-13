<tr>
  <td>
    <a href='{{ url("platforms/$platform->id") }}'>
      {{ $platform->name }}
    </a>
  </td>
  <td>
    {{ $platform->url ? $platform->url : '-' }}
  </td>
</tr>
