<header class="navbar">
  <section class="navbar-section m-2">
    <a href="" class="btn btn-link mr-2">Dashboard</a>
    <a href="{{ url('offers') }}" class="btn btn-link">Ofertas</a>
    <a href="{{ url('companies') }}" class="btn btn-link">Companies</a>
    <a href="..." class="btn btn-link">Calendario</a>
    <a href="..." class="btn btn-link">Alertas</a>
    <a href="..." class="btn btn-link">Contactos</a>
    <div class="dropdown dropdown-left">
      <a class="btn dropdown-toggle" tabindex="0">New +</a>
      <ul class="menu p-2">
        <li class="menu-item"><a href="{{ url('offers/create') }}">Offer</a></li>
        <li class="menu-item"><a href="{{ url('interviews/create') }}">Interview</a></li>
        <li class="menu-item"><a href="{{ url('alerts/create') }}">Alert</a></li>
        <li class="menu-item"><a href="{{ url('companies/create') }}">Company</a></li>
        <li class="menu-item"><a href="{{ url('platforms/create') }}">Platform</a></li>
        <li class="menu-item"><a href="{{ url('technologies/create') }}">Technology</a></li>
      </ul>
    </div>
  </section>
  <section class="navbar-section">
    search...
  </section>
  <section class="navbar-section p-2">
    @include('menu.profile')
  </section>
</header>
<div class="divider"></div>
