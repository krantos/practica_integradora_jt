<?php

namespace App\Http\Controllers\Authentication;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class AuthController extends Controller {
	/**
	 * Handle an authentication attempt
	 */
	public function authentication(Request $req): RedirectResponse {
		$cred = $req->validate([
			'email' => ['required', 'email'],
			'password' => ['required'],
		]);

		if (Auth::attempt($cred)) {
			$req->session()->regenerate();
			return redirect()->intended('profile');
		}

		return back()->withErrors([
			'credentials' => 'The provided credentials do not match our records',
		]);
	}

	public function logout(Request $req): RedirectResponse {
		Auth::logout();
		$req->session()->invalidate();
		$req->session()->regenerateToken();
		return redirect('/');
	}
}