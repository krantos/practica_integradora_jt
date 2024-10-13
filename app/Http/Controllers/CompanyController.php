<?php

namespace App\Http\Controllers;

use App\Http\Requests\CompanyPostRequest;
use App\Models\Company;
use Illuminate\Http\RedirectResponse;

class CompanyController extends Controller
{
    public function index() {
			return view('company.index', ['companies' => Company::all()]);
		}

		public function show(string $id) {
			$company = $this->findCompany($id);
			$offers = $company->offers;
			return view('company.show', ['company' => $company, 'offers' => $offers]);
		}

		public function create() {
			$company = new Company();
			return view('company.create', ['company' => $company]);
		}

		public function edit(string $id) {
			$company = $this->findCompany($id);
			return view('company.edit', ['company' => $company]);
		}

		public function store(CompanyPostRequest $request): RedirectResponse {
			try {
				$validated = $request->validated();
				$company = Company::create($validated);
			} catch (\Throwable $th) {
				return back()->withErrors([
					'error' => 'Something went wrong, try again later...'
				]);
			}
			return redirect('/companies')->with(['toast' => ['style' => 'success', 'message' => "New $company->name Company"]]);
		}

		public function update(CompanyPostRequest $request, string $id): RedirectResponse
    {
			$validated = $request->validated();
			$company = $this->findCompany($id);
			$company->updateOrFail($validated);
			
			return redirect("/companies/$company->id");
    }

		public function destroy(string $id): RedirectResponse {
			try {
				$company = $this->findCompany($id);
				$company->delete();
			} catch (\Throwable $th) {
				return back()->withErrors([
					'error' => $th->getMessage(),
				]);
			}
			
			return redirect('/companies')->with(['toast' => ['style' => 'success', 'message' => "Offer: $company->name Successfully Deleted!"]]);
		}

		protected function findCompany(string $id) {
			return Company::find($id);
		}
}
