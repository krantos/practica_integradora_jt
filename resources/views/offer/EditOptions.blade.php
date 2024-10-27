<div class="dropdown">
  <a class="btn dropdown-toggle" tabindex="0">
    <i class="icon icon-more-vert"></i>
  </a>
  <ul class="menu text-left">
    <li class="menu-item">
      <a href='{{ url("offers/$offer->id/edit") }}'>Edit</a>
    </li>
    <form action="/offers/{{ $offer->id }}" method="post" id="form__submit">
      @method('DELETE')
      <li class="menu-item">
        <a href='#' onclick="submitForm()">Delete</a>
      </li>
      <script>
        function submitForm() {
          if (window.confirm('Do you really want to delete this offer?')) {
            document.getElementById('form__submit').submit();
          }
        }
      </script>
      @csrf
    </form>
  </ul>
</div>