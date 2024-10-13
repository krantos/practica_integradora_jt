@if ($errors->any())
  <div class="toast toast-error" id="error-form-toast">
    <button class="btn btn-clear float-right" onclick="document.getElementById('error-form-toast').remove()"></button>
    <ul>
      @foreach ($errors->all() as $error)
        <li class="">{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif
<h3>Platform</h3>
@if ($method == 'PUT')
  <form method="POST" action='{{ url("/platforms/$platform->id") }}'>
    @method('PUT')
  @else
    <form method="POST" action='{{ url("/platforms") }}'>
@endif
@csrf
<div class="form-group">
  <label for="name" class="form-label">Name</label>
  <input class="form-input" type="text" name="name" placeholder="Software platform Inc"
    value="{{ $platform->name }}">
</div>
<div class="form-group">
  <label for="url" class="form-label">url</label>
  <input class="form-input" type="url" name="url" placeholder="https://platform.com/"
    value="{{ $platform->url }}">
</div>
<div class="form-group">
  <div class="columns py-2">
    <div class="column col-auto col-mr-auto my-1">
      <a href='{{ url("/platforms/$platform->id") }}'>Cancel</a>
    </div>
    <div class="column col-6">
      <input class="btn btn-primary btn-block" type=submit class="btn btn-primary btn-block" value="Save">
    </div>
  </div>
</div>
</form>
