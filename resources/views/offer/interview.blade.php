<div class="col-12">
  <div class="divider"></div>
  <h5 style="display: inline;">Interviews:</h5>
  <div class="column">
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
        <td>
          @include('offer.editInterview', ['offer' => $offer, 'interview' => $interview])
        </td>
      </tr>
      @endforeach
    </table>
  </div>
  <a onclick='addInterview("/offers/{{ $offer->id }}/interviews")'>Add Interview</a>
</div>
<div id="form__display" style="display: none;">
  <form action="" method="post" id="form__interview">
    @csrf
    <div class="columns">
      <div class="form-group column col-6">
        <label class="form-label" for="i_details">Details:
          <textarea id="i-details" name="call_details">

          </textarea>
        </label>
      </div>
      <div class="form-group column col-3">
        <label class="form-label" for="date_time">Date:
          <input class="form-input" type="datetime-local" name="date_time" id="date_time">
        </label>
      </div>
    </div>
    <a onclick="toggleForm('form__display')" style="cursor: pointer;">Cancel</a>
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

    function addInterview(url) {
      const el = document.getElementById('form__display');
      if(el.style.display != 'block') {
        el.style.display = 'block'
      }
      const formEl = document.getElementById('form__interview');
      formEl.action = url;
      $('#date_time').val(null);
      $('#i-details').summernote('code', null);
      $('#form__interview').append('<input type="hidden" name="_method" value="POST">');
    }

    function editInterview(call_details, date_time, url) {
      const el = document.getElementById('form__display');
      if(el.style.display != 'block') {
        el.style.display = 'block'
      }
      const formEl = document.getElementById('form__interview');
      formEl.action = url;
      $('#date_time').val(date_time);
      $('#i-details').summernote('code', call_details);
      $('#form__interview').append('<input type="hidden" name="_method" value="PUT">');
    }
  </script>
</div>
<div class="divider"></div>