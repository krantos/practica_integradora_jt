<tr>
  <td>
    <a href='{{ url("platforms/$platform->id") }}'>
      {{ $platform->name }}
    </a>
  </td>
  <td>
    <div class="crop-with-ellipsis">
      <a href="{{ $platform->url ? $platform->url : '#' }}">{{ $platform->url ? $platform->url : '-' }}</a>
      
    </div>
  </td>
</tr>
