<div class="card">
  <div class="card-header">
    <div class="card-title h5">Top 5 Salary</div>
  </div>
  <div class="card-body">
    <table class="table table-hover">
      <thead>
        <tr>
          <th>Position</th>
          <th>Salary</th>
        </tr>
      </thead>
      <tbody>
        @foreach($top5Salary as $offer)
        <tr>
          <td>
            <a href='{{ url("offers/$offer->id") }}'>
              {{ $offer->position }}
            </a>
          </td>
          <td>$ {{ $offer->salary }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>