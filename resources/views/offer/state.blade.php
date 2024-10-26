<div class="current">
  <div id="status">
    <label class="text-gray form-label">State:</label>
    <span class="chip">{{ $offer->state }}</span>
  </div>
  <div class="form-group" id="statusForm" style="display: none;">
    <form action="/offers/{{ $offer->id }}/state" method="post" id="form__submit">
      @method('PUT')
      @csrf
      <label class="text-gray form-label">State:
      <select class="form-select" name="state" id="state">
        @foreach(\App\Enums\OfferState::cases() as $state)
          <option value="{{ $state->value }}" @selected($state->name == $offer->state)>{{ $state->value }}</option>
        @endforeach
      </select>
      </label>
      <input class="btn" type=submit value="&#10004;">
      <button class="btn">&#x274c;</button>
    </form>
  </div>
</div>

