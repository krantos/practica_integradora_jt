<div class="dropdown">
  <a class="btn dropdown-toggle" tabindex="0">
    <i class="icon icon-more-vert"></i>
  </a>
  <ul class="menu text-left">
    <li class="menu-item">
      <a href='{{ url("offers/$offer->id/edit") }}'>Edit</a>
    </li>
    <form action="/offers/{{ $offer->id }}" method="post" id="offer__delete">
      @method('DELETE')
      <li class="menu-item">
        <a href='#' onclick="deleteOffer()">Delete</a>
      </li>
      <script>
        function deleteOffer() {
          if (window.confirm('Do you really want to delete this offer?')) {
            document.getElementById('offer__delete').submit();
          }
        }
      </script>
      @csrf
    </form>
  </ul>
</div>