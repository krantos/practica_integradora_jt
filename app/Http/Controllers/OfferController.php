<?php

namespace App\Http\Controllers;

use App\Http\Requests\OfferPostRequest;
use Illuminate\Http\Request;
use App\Models\Offer;
use Illuminate\Http\RedirectResponse;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('offer.index', ['offers' => Offer::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('offer.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(OfferPostRequest $request): RedirectResponse
    {
        $validated = $request->validated();
				$offer = new Offer();
				$offer->position = $validated['position'];
				$offer->saveOrFail();
				
				return redirect('/offers');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // $offer = Offer::find($id);
				return view('offer.show', ['offer' => $this->findOffer($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
				$offer = $this->findOffer($id);
				return view('offer.edit', ['offer' => $offer]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(OfferPostRequest $request, string $id): RedirectResponse
    {
			$validated = $request->validated();
			$offer = $this->findOffer($id);
			$offer->position = $validated['position'];
			$offer->publication_date = $validated['publication_date'];
			$offer->skills = $validated['skills'];
			$offer->experience = $validated['experience'];
			$offer->salary = $validated['salary'];
			$offer->url = $validated['url'];
			$offer->saveOrFail();
			
			return redirect("/offers/$offer->id");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

		protected function findOffer(string $id) {
			return Offer::find($id);
		}
}
