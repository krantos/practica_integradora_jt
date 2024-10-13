<?php

namespace App\Http\Controllers;

use App\Http\Requests\PlatformPostRequest;
use App\Models\Platform;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class PlatformController extends Controller
{

    public function index()
    {
        return view('platform.index', ['platforms' => Platform::all()]);
    }

    public function create()
    {
        $platform = new Platform();
				return view('platform.create', ['platform' => $platform]);
    }

    public function store(PlatformPostRequest $request): RedirectResponse
    {
			try {
        $validated = $request->validated();
				$platform = Platform::create($validated);
			} catch (\Throwable $th) {
				return back()->withErrors([
					'error' => 'Something went wrong, try again later'
				]);
			}
				return redirect('/platforms')->with(['toast' => ['style' => 'success', 'message' => "New $platform->name Platform created"]]);
    }

    public function show(string $id)
    {
        return view('platform.show', ['platform' => $this->findPlatform($id)]);
    }

    public function edit(string $id)
    {
        $platform = $this->findPlatform($id);
				return view('platform.edit', ['platform' => $platform]);
    }

    public function update(PlatformPostRequest $request, string $id)
    {
        $validated = $request->validated();
				$platform = $this->findPlatform($id);
				try {
					$platform->updateOrFail($validated);
				} catch (\Throwable $th) {
					return back()->withErrors([
						'error' => 'Error while updating, try again later',
					]);
				}
				return redirect("/platforms/$platform->id");
    }

    public function destroy(string $id)
    {
			try {
        $platform = $this->findPlatform($id);
				$platform->delete();
			} catch (\Throwable $th) {
				return back()->withErrors([
					'error' => $th->getMessage(),
				]);
			}
			return redirect('/platforms')->with(['toast' => ['style' => 'success', 'message' => "Offer: $platform->name Successfully Deleted!"]]);
    }

		protected function findPlatform(string $id) {
			return Platform::find($id);
		}
}
