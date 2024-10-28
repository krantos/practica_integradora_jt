@extends('admin.layout')
@section('content')
<div class="columns">
  <div class="column col-4 col-mx-auto">
    <form action="{{ url('/profile') }}" method="post">
      @method('PUT')
      @csrf
      <div class="form-group">
        <label for="uname" class="form-label">Username:
          <input class="form-input" type="text" name="username" id="uname" value="{{ Auth::user()->name }}">
        </label>
      </div>
      <div class="form-group">
        <label for="uemail" class="form-label">Email:
          <input class="form-input" type="email" name="email" id="uemail" value="{{ Auth::user()->email }}">
        </label>
      </div>
      <div class="form-group">
        <label for="upassword" class="form-label">Update Password:
          <input class="form-input" type="password" name="password" id="upassword" value="changethis">
        </label>
      </div>
      <div class="form-group">
          <input class="btn btn-primary btn-block" type=submit value="Update">
      </div>
    </form>
  </div>
</div>
@endsection