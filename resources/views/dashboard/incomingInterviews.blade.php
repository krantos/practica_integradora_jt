<div class="card">
  <div class="card-header">
    
  </div>
  <div class="card-body">
    <table class="table table-hover">
      <thead>
        <tr>
          <th>Date & Time</th>
          <th>Position</th>
        </tr>
      </thead>
      <tbody>
        @foreach($incomingInterviews as $i)
        <tr>
          <td>{{ $i->date_time }}</td>
          <td>
            <div class="crop-with-ellipsis">
              <a href='{{ url("offers/$i->id") }}'>
                {{ $i->position }}
              </a>
            </div>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>