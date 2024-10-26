<div class="card">
  <div class="card-header">
    <div class="card-title h5">Top 5 States</div>
  </div>
  <div class="card-body">
    <table class="table table-hover">
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
  </div>
</div>