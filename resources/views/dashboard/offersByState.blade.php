<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th>State</th>
      <th>Total</th>
    </tr>
  </thead>
  <tbody>
    @foreach($offersByState as $offer)
      <tr>
        <td>{{ $offer->state }}</td>
        <td>{{ $offer->total }}</td>
      </tr>
    @endforeach
  </tbody>
</table>