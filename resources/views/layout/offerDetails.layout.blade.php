<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Job Tracker</title>
  @vite(['resources/css/app.css'])

</head>

<body>
  @include('admin.header')
  <main>
    <div class="container">
      <div class="columns">

      </div>
    </div>
  </main>
  <footer>
    @include('admin.footer')
  </footer>
</body>

</html>
