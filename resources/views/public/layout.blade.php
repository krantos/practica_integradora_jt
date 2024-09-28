<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Job Tracker</title>
  @vite(['resources/css/app.css'])

</head>

<body>
  <header>
    @include('public.header')
  </header>
  <main>
    <div class="container">
      <div class="columns">
        @yield('content')
      </div>
    </div>
  </main>
  <footer>
    @include('public.footer')
  </footer>
</body>

</html>
