<?php

namespace App\Http\Controllers;

use App\Models\Dashboard;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
  protected Dashboard $dashboard;

  function __construct(Dashboard $dashboard)
  {
    $this->dashboard = $dashboard;
  }

  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $offersByState = $this->dashboard->offersByState();
    $countOffersByCompany = $this->dashboard->countOffersByCompany();
    $top5Salary = $this->dashboard->top5Salary();

    return view('dashboard.index', [
      'offersByState' => $offersByState,
      'countByCompany' => $countOffersByCompany,
      'top5Salary' => $top5Salary
    ]);
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
  public function store(Request $request)
  {
    //
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
  public function update(Request $request, string $id)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    //
  }
}
