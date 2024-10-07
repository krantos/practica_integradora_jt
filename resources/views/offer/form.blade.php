@isset($offer)
  <form method="POST" action='{{ url("/offers/$offer->id") }}'>
    @method('PUT')
  @else
    <form method="POST" action='{{ url("/offers") }}'>
      @endif
      @csrf
      <div class="column col-10 col-md-12 col-mx-auto">

        <div class="form-group">
          <label for="position" class="form-label">Position</label>
          <input class="form-input" type="text" name="position" placeholder="Software Engineer Backend"
            value="{{ $offer ? $offer->position : '' }}">
        </div>
        <div class="form-group">
          <label for="publication_date" class="form-label">Publication Date</label>
          <input class="form-input" type="date" name="publication_date" placeholder="https://jobdescription.com/"
            value="{{ $offer ? $offer->publication_date : '' }}">
        </div>
        <div class="form-group">
          <label for="skills" class="form-label">Skills</label>
          <textarea class="form-input" rows="4" name="skills" placeholder="- Good communicator"
            value="{{ $offer ? $offer->skills : '' }}"></textarea>
        </div>
        <div class="form-group">
          <label for="experience" class="form-label">Experience</label>
          <textarea class="form-input" rows="4" name="experience" placeholder="Required Experience: "
            value="{{ $offer ? $offer->experience : '' }}"></textarea>
        </div>
        <div class="form-group">
          <label for="salary" class="form-label">Salary</label>
          <input class="form-input" type="number" name="salary" placeholder="85000"
            value="{{ $offer ? $offer->salary : '' }}">
        </div>
        <div class="form-group">
          <label for="url" class="form-label">url</label>
          <input class="form-input" type="url" name="url" placeholder="https://jobdescription.com/"
            value="{{ $offer ? $offer->url : '' }}">
        </div>
        <div class="form-group">
          <input class="btn btn-primary btn-block" type=submit class="btn btn-primary btn-block" value="Save">
        </div>
      </div>
    </form>
