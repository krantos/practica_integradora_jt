<div class="dropdown">
  <a class="btn dropdown-toggle" tabindex="0">
    <i class="icon icon-more-vert"></i>
  </a>
  <ul class="menu text-left">
    <li class="menu-item">
      <a onclick="editInterview('{{ $interview->call_details }}','{{ $interview->date_time }}', '/offers/{{ $offer->id }}/interviews/{{ $interview->id }}')">Edit</a>
    </li>
    <form action="/offers/{{ $offer->id }}/interviews/{{ $interview->id }}" method="post" id="interview__delete">
      @method('DELETE')
      <li class="menu-item">
        <a href='#' onclick="deleteInterview()">Delete</a>
      </li>
      <script>
        function deleteInterview() {
          if (window.confirm('Do you really want to delete this interview?')) {
            document.getElementById('interview__delete').submit();
          }
        }
      </script>
      @csrf
    </form>
  </ul>
</div>