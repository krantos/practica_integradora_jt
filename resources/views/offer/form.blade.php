@if ($errors->any())
    <div class="toast toast-error" id="error-form-toast">
			<button 
				class="btn btn-clear float-right" 
				onclick="document.getElementById('error-form-toast').remove()"></button>
        <ul>
            @foreach ($errors->all() as $error)
                <li class="">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@if($method == 'PUT')
  <form method="POST" action='{{ url("/offers/$offer->id") }}'>
    @method('PUT')
  @else
    <form method="POST" action='{{ url("/offers") }}'>    
	@endif
  @csrf
        <div class="form-group">
          <label for="position" class="form-label">Position</label>
          <input class="form-input" type="text" name="position" placeholder="Software Engineer Backend"
            value="{{ $offer->position }}">
        </div>
        <div class="form-group">
          <label for="publication_date" class="form-label">Publication Date</label>
          <input class="form-input" type="date" name="publication_date" placeholder="https://jobdescription.com/"
            value="{{ $offer->publication_date }}">
        </div>
        <div class="form-group">
          <label for="skills" class="form-label">Skills</label>
          <textarea class="form-input" rows="4" name="skills" placeholder="- Good communicator"
            >{{ $offer->skills }}</textarea>
        </div>
        <div class="form-group">
          <label for="experience" class="form-label">Experience</label>
          <textarea class="form-input" rows="4" name="experience" placeholder="Required Experience: "
            >{{ $offer->experience }}</textarea>
        </div>
        <div class="form-group">
          <label for="salary" class="form-label">Salary</label>
          <input class="form-input" type="number" name="salary" placeholder="85000"
            value="{{ $offer->salary }}">
        </div>
        <div class="form-group">
          <label for="url" class="form-label">url</label>
          <input class="form-input" type="url" name="url" placeholder="https://jobdescription.com/"
            value="{{ $offer->url }}">
        </div>
        <div class="form-group">
					<div class="columns py-2">
						<div class="column col-auto col-mr-auto my-1">
							<a href='{{ url("/offers/$offer->id") }}'>Cancel</a>
						</div>
						<div class="column col-6">
							<input class="btn btn-primary btn-block" type=submit class="btn btn-primary btn-block" value="Save">
						</div>
					</div>
        </div>
    </form>
