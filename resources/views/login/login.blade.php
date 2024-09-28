<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Job Tracker</title>
  @vite(['resources/css/app.css'])

</head>

<body>
  <main>
    <div class="container">
      <div class="columns">
        <div class="column w-4 mt-2 col-mx-auto">
          <div class="card">
            <div class="card-header">
              <div class="card-title h5">Login</div>
              <div class="card-subtitle text-gray">Welcome back!</div>
            </div>
            <div class="card-body">
              <form method="POST" action="{{ url('/login') }}">
                @csrf
                <div class="form-group">
                  <label for="email" class="form-label">Email</label>
                  <input required type="email" class="form-input" name="email" placeholder="example@email.com">
                </div>
                <div class="form-group">
                  <label for="password" class="form-label">Password</label>
                  <input required type="password" class="form-input" name="password" placeholder="********">
                </div>
                <div class="form-group">
                  <input type=submit class="btn btn-primary btn-block" value="Sign in">
                </div>
              </form>
            </div>
            @error('credentials')
              <div class="card-footer">
                <div class="text-error">{{ $message }}</div>
              </div>
            @enderror
          </div>
        </div>
      </div>
    </div>
    </div>
  </main>
</body>

</html>
