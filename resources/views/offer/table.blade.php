<div class="offers col-11 col-mx-auto">
  <h3>Offers</h3>
  <table class="table table-striped table-hover">
    <thead>
      <tr>
        <th>Position</th>
        <th>Company</th>
        <th>Salary</th>
        <th>Date Posted</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($offers as $offer)
        @include('offer.offer', [$offer])
      @endforeach
    </tbody>
  </table>
</div>
