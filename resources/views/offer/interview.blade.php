<div class="col-12">
  <div class="divider"></div>
  <h5 style="display: inline;">Interviews:</h5>
  <div class="column col-6">
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Details</th>
          <th>Date & time</th>
          <th></th>
        </tr>
      </thead>
      @foreach($interviews as $interview)
      <tr>
        <td>{!! $interview->call_details !!}</td>
        <td>{{ $interview->date_time }}</td>
        <td></td>
      </tr>
      @endforeach
    </table>
  </div>
  <a onclick="toggleForm('form__interview')">Add Interview</a>
</div>
<div id="form__interview" style="display: none;">
  <form action="/offers/{{ $offer->id }}/interviews" method="post">
    @method('POST')
    @csrf
    <div class="columns">
      <div class="form-group column col-6">
        <label class="form-label" for="i_details">Details:
          <textarea id="i-details" name="call_details">

          </textarea>
        </label>
      </div>
      <div class="form-group column col-3">
        <label class="form-label" for="date">Date:
          <input class="form-input" type="datetime-local" name="date_time" id="date">
        </label>
      </div>
    </div>
    <a onclick="toggleForm('form__interview')" style="cursor: pointer;">Cancel</a>
    <input type="submit" class="btn" value="Save">
  </form>
  <script>
    $('#i-details').summernote({
      height: 300,
      tabsize: 2,
      placeholder: 'Skills required',
      toolbar: [
        ['style', ['style']],
        ['font', ['bold', 'underline']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['view', ['codeview']],
      ]
    });

    function toggleForm(id) {
      $(`#${id}`).toggle();
    }
  </script>
</div>
<div class="divider"></div>