@auth
  <div class="dropdown dropdown-right">
    <a class="btn btn-link dropdown-toggle" tabindex="0">
      {{ Auth::user()->name }}
      <i class="icon icon-caret"></i>
    </a>
    <ul class="menu p-2">
      <li class="menu-item"><a href="{{ url('profile') }}">Profile</a></li>
      <li class="menu-item"><a href="#dropdowns">Settings</a></li>
      <li class="menu-item"><a href="{{ url('/logout') }}">Logout</a></li>
    </ul>
  </div>
@endauth
