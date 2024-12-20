<?php

namespace App\Http\Controllers;

use App\Http\Requests\InterviewRequest;
use App\Models\Interview;
use App\Models\Offer;
use Illuminate\Http\Request;

class InterviewController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    //
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    //
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(InterviewRequest $request, string $offerId)
  {
    $validated = $request->validated();
    $offer = Offer::find($offerId);
    $offer->interviews()->create($validated);
    return back();
  }

  /**
   * Display the specified resource.
   */
  public function show(string $id)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(string $id)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(InterviewRequest $request, string $offerId, string $id)
  {
    $interview = Interview::find($id);
    $validated = $request->validated();
    $interview->update($validated);
    return back();    
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $offerId, string $id)
  {
    $interview = Interview::find($id);
    $interview->delete();
    return back();
  }
}
