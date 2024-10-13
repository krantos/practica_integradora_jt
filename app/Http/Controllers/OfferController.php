<?php

namespace App\Http\Controllers;

use App\Http\Requests\OfferPostRequest;
use App\Models\Company;
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
				$offer = new Offer();
				$companies = Company::all();
        return view('offer.create', ['offer' => $offer, 'companies' => $companies]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(OfferPostRequest $request): RedirectResponse
    {
			try {
					$validated = $request->validated();
					$offer = Offer::create($validated);
				} catch (\Throwable $th) {
					return back()->withErrors([
						'error' => $th->getMessage(),
					]);
				}
				
				return redirect('/offers')->with(['toast' => ['style' => 'success', 'message' => "New $offer->position Offer Created"]]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
				return view('offer.show', ['offer' => $this->findOffer($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
				$offer = $this->findOffer($id);
				$companies = Company::all();
				return view('offer.edit', ['offer' => $offer, 'companies' => $companies]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(OfferPostRequest $request, string $id): RedirectResponse
    {
			$validated = $request->validated();
			$offer = $this->findOffer($id);
			$offer->updateOrFail($validated);
			if(!blank($validated['new_company_name'])) {
				$company = Company::create([
					'name' => $validated['new_company_name'], 
					'url' => $validated['new_company_url']
					]);
				$offer->update(['company_id' => $company->id]);
			}
			return redirect("/offers/$offer->id");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
			try {
        $offer = $this->findOffer($id);				
				$offer->delete();
			} catch (\Throwable $th) {
				return back()->withErrors([
					'error' => $th->getMessage(),
				]);
			}
			return redirect('/offers')->with(['toast' => ['style' => 'success', 'message' => "Offer: $offer->position Successfully Deleted!"]]);
    }

		protected function findOffer(string $id) {
			return Offer::find($id);
		}
}
