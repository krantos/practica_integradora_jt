<div class="current">
  <div id="status" onclick="statusHide()">
    <label style="cursor: pointer;" class="form-label">State:
      <p>
        <span class="chip">{{ $offer->state }}</span>
      </p>
    </label>
  </div>
  <div class="form-group" id="statusForm" style="display: none;">
    <form action="/offers/{{ $offer->id }}/state" method="post" id="form__newState">
      @method('PUT')
      @csrf
      <label class="form-label">State:
        <select class="form-select" name="state" id="new-state">
          @foreach(\App\Enums\OfferState::cases() as $state)
          <option value="{{ $state->value }}" @selected($offer->state == $state->value)>{{ $state->value }}</option>
          @endforeach
        </select>
      </label>
      <a onclick="statusInputHide()" style="cursor: pointer;">cancel</a>
    </form>
  </div>
</div>
<script>
  function statusHide() {
    $('#status').toggle();
    $('#statusForm').toggle();
  }

  function statusInputHide() {
    $('#statusForm').toggle();
    $('#status').toggle();
  }

  $('#new-state').on('change', function() {
    $('#form__newState').submit();
  })
</script>