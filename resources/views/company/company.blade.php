<tr>
  <td>
    <a href='{{ url("companies/$company->id") }}'>
      {{ $company->name }}
    </a>
  </td>
  <td>
    {{ $company->location ? $company->location->country : '-' }}
  </td>
  <td>
    <div class="crop-with-ellipsis">
      <a href="{{  $company->url ? $company->url : '#' }}" target="_blank">{{  $company->url ? $company->url : '-' }}</a>
    </div>
  </td>
</tr>
