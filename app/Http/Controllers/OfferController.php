<?php

namespace App\Http\Controllers;

use App\Http\Requests\OfferPostRequest;
use App\Models\Company;
use App\Models\Offer;
use App\Models\Platform;
use Illuminate\Http\RedirectResponse;

class OfferController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    return view('offer.index', [
      'offers' => Offer::orderBy('publication_date', 'desc')->get()
    ]);
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    $offer = new Offer();
    $companies = Company::all();
    $platforms = Platform::all();
    return view('offer.create', [
      'offer' => $offer,
      'companies' => $companies,
      'platforms' => $platforms
    ]);
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(OfferPostRequest $request): RedirectResponse
  {
    try {
      $validated = $request->validated();
      $offer = Offer::create($validated);

      $newCompany = !blank($validated['new_company_name']);
      $newPlatform = !blank($validated['new_platform_name']);

      if ($newCompany)
        $this->createCompany($validated, $offer);

      if ($newPlatform)
        $this->createPlatform($validated, $offer);
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
    $platforms = Platform::all();
    return view('offer.edit', [
      'offer' => $offer,
      'companies' => $companies,
      'platforms' => $platforms
    ]);
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(OfferPostRequest $request, string $id): RedirectResponse
  {
    $validated = $request->validated();
    $offer = $this->findOffer($id);
    $offer->updateOrFail($validated);

    $newCompany = !blank($validated['new_company_name']);
    $newPlatform = !blank($validated['new_platform_name']);

    if ($newCompany)
      $this->createCompany($validated, $offer);

    if ($newPlatform)
      $this->createPlatform($validated, $offer);

    return redirect("/offers/$offer->id");
  }

  private function createCompany($data, $offer)
  {
    $company = Company::create([
      'name' => $data['new_company_name'],
      'url' => $data['new_company_url']
    ]);
    $offer->update(['company_id' => $company->id]);
  }

  private function createPlatform($data, $offer)
  {
    $platform =  Platform::create([
      'name' => $data['new_platform_name'],
      'url' => $data['new_platform_url']
    ]);
    $offer->update(['platform_id' => $platform->id]);
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

  protected function findOffer(string $id)
  {
    return Offer::findOrFail($id);
  }
}
