<header class="navbar">
  <section class="navbar-section m-2">
    <a href="" class="btn btn-link mr-2">Dashboard</a>
    <a href="{{ url('offers') }}" class="btn btn-link">Ofertas</a>
    <a href="..." class="btn btn-link">Calendario</a>
    <a href="..." class="btn btn-link">Alertas</a>
    <a href="..." class="btn btn-link">Contactos</a>
    <a href="{{ url('offers/create') }}" class="btn btn-primary">New +</a>
  </section>
  <section class="navbar-section">
    search...
  </section>
  <section class="navbar-section p-2">
    @include('menu.profile')
  </section>
</header>
