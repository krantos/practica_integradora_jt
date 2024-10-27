@if ($errors->any())
<div class="toast toast-error" id="error-form-toast">
  <button class="btn btn-clear float-right" onclick="document.getElementById('error-form-toast').remove()"></button>
  <ul>
    @foreach ($errors->all() as $error)
    <li class="">{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif
<h3>Offer</h3>
@if ($method == 'PUT')
<form method="POST" action='{{ url("/offers/$offer->id") }}'>
  @method('PUT')
  @else
  <form method="POST" action='{{ url("/offers") }}'>
    @endif
    @csrf
    <div class="form-group">
      <label for="position" class="form-label">Position
        <input class="form-input" type="text" name="position" placeholder="Software Engineer Backend"
          value="{{ $offer->position }}">
      </label>
    </div>
    <div class="form-group">
      <label for="state">State
        <select class="form-select" name="state" id="state">
          @foreach(\App\Enums\OfferState::cases() as $state)
          <option value="{{ $state->value }}" @selected($state->name == $offer->state)>{{ $state->value }}</option>
          @endforeach
        </select>
      </label>
    </div>
    <div class="form-group">
      <label for="salary" class="form-label">Salary
        <input class="form-input" type="number" min="0.00" name="salary" placeholder="85000" value="{{ $offer->salary }}">
      </label>
    </div>
    <div class="form-group">
      <label for="publication_date" class="form-label">Publication Date
        <input class="form-input" type="date" name="publication_date" placeholder="https://jobdescription.com/"
          value="{{ $offer->publication_date }}">
      </label>
    </div>
    <div class="form-group">
      <label for="url" class="form-label">url
        <input class="form-input" type="url" name="url" placeholder="https://jobdescription.com/"
          value="{{ $offer->url }}">
      </label>
    </div>
    <div class="form-group">
      <label for="skills" class="form-label">Skills
        <textarea id="skillsEditor" name="skills">{{ $offer->skills }}</textarea>
      </label>
    </div>

    <div class="form-group">
      <label for="experience" class="form-label">Experience
        <textarea id="experienceEditor" name="experience">{{ $offer->experience }}</textarea>
      </label>
    </div>
    <div class="form-group">
      <div class="divider"></div>
      <label for="company">Company:</label>
      <select class="form-select" name="company_id">
        <option value=""></option>
        @foreach ($companies as $company)
        <option value="{{ $company->id }}" {{ $company->id == $offer->company_id ? 'selected' : '' }}>
          {{ $company->name }}
        </option>
        @endforeach
      </select>
      <a onclick="showInputs('company-inputs')">New Company</a>
      <div class="my-2" id="company-inputs" style="display: none;">
        <div class="columns">
          <div class="column col">
            <h3>New Company</h3>
          </div>
          <div class="column col text-right">
            <a onclick="hideInputs('company-inputs')"> <i class="icon icon-cross" style="cursor: pointer;"></i> </a>
          </div>
        </div>
        <div class="form-group">
          <label for="new_company_name" class="form-label">Name:</label>
          <input class="form-input" type="text" name="new_company_name">
        </div>
        <div class="form-group">
          <label for="new_company_url" class="form-label">url:</label>
          <input class="form-input" type="url" name="new_company_url">
        </div>
      </div>
    </div>

    <div class="form-group">
      <div class="divider"></div>
      <label for="company">Platform:</label>
      <select class="form-select" name="platform_id">
        <option value=""></option>
        @foreach ($platforms as $platform)
        <option value="{{ $platform->id }}" {{ $platform->id == $offer->platform_id ? 'selected' : '' }}>
          {{ $platform->name }}
        </option>
        @endforeach
      </select>
      <a onclick="showInputs('platform-inputs')">New Platform</a>
      <div class="my-2" id="platform-inputs" style="display: none;">
        <div class="columns">
          <div class="column col">
            <h3>New Platform</h3>
          </div>
          <div class="column col text-right">
            <a onclick="hideInputs('platform-inputs')"> <i class="icon icon-cross" style="cursor: pointer;"></i> </a>
          </div>
        </div>
        <div class="form-group">
          <label for="new_platform_name" class="form-label">Name:</label>
          <input class="form-input" type="text" name="new_platform_name">
        </div>
        <div class="form-group">
          <label for="new_platform_url" class="form-label">url:</label>
          <input class="form-input" type="url" name="new_platform_url">
        </div>
      </div>
    </div>

    <div class="form-group">
      <div class="columns py-2">
        <div class="column col-auto col-mr-auto my-1">
          <a href='{{ url("/offers/$offer->id") }}'>Cancel</a>
        </div>
        <div class="column col-6">
          <input class="btn btn-primary btn-block" type=submit value="Save">
        </div>
      </div>
    </div>
  </form>
  <script>
    $('#skillsEditor').summernote({
      height: 300,
      tabsize: 2,
      placeholder: 'Skills required',
      toolbar: [
        ['style', ['style']],
        ['font', ['bold', 'underline']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['view', ['codeview']],
      ]
    });

    $('#experienceEditor').summernote({
      height: 300,
      tabsize: 2,
      placeholder: 'Experience expected',
      toolbar: [
        ['style', ['style']],
        ['font', ['bold', 'underline']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['view', ['codeview']],
      ]
    });

    function showInputs(id) {
      document.getElementById(id).style.display = "block";
    }

    function hideInputs(id) {
      document.getElementById(id).style.display = "none";
    }
  </script>