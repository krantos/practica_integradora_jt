<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileRequest;

class ProfileController extends Controller {
	public function index() {
		return view('admin.profile');
	}

  public function update(ProfileRequest $request) {
    $validated = $request->validated();
    dd($validated);
  }
}