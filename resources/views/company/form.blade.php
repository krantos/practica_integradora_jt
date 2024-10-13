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
<h3>Company</h3>
@if ($method == 'PUT')
  <form method="POST" action='{{ url("/companies/$company->id") }}'>
    @method('PUT')
  @else
    <form method="POST" action='{{ url("/companies") }}'>
@endif
@csrf
<div class="form-group">
  <label for="name" class="form-label">Name</label>
  <input class="form-input" type="text" name="name" placeholder="Software Company Inc"
    value="{{ $company->name }}">
</div>
<div class="form-group">
  <label for="url" class="form-label">url</label>
  <input class="form-input" type="url" name="url" placeholder="https://company.com/"
    value="{{ $company->url }}">
</div>
<div class="form-group">
  <div class="columns py-2">
    <div class="column col-auto col-mr-auto my-1">
      <a href='{{ url("/companies/$company->id") }}'>Cancel</a>
    </div>
    <div class="column col-6">
      <input class="btn btn-primary btn-block" type=submit class="btn btn-primary btn-block" value="Save">
    </div>
  </div>
</div>
</form>
