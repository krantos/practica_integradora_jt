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
    {{ $company->url ? $company->url : "-" }}
  </td>
</tr>
