<div class="card">
  <div class="card-header">
    <div class="card-title h5">Top 5 Companies</div>
  </div>
  <div class="card-body">
    <table class="table table-hover">
      <thead>
        <tr>
          <th>Company</th>
          <th>Total</th>
        </tr>
      </thead>
      <tbody>
        @foreach($countByCompany as $count)
        <tr>
          <td>
            <a href='{{ url("companies/$count->id") }}'>
              {{ $count->name }}
            </a>
          </td>
          <td>{{ $count->total }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
