<?php 

namespace App\Models;

use App\Traits\BelongsToTenant;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Dashboard extends Model
{
  use HasFactory, BelongsToTenant;
  
  public function index() {
    // load offers by state and count

    // load companies and count offers order by count
    // load top offers by salary
    // latest offers created 
    // 
    
  }

  public function offersByState() {
    return DB::table('offers')->selectRaw('state, count(state) as total')
      ->where('tenant_id', session()->get('tenant_id'))
      ->whereNull('offers.deleted_at')
      ->groupBy('state')
      ->orderBy('total', 'desc')
      ->limit(5)
      ->get();
  }

  public function countOffersByCompany() {
    return DB::table('companies')
      ->selectRaw('companies.id, companies.name, count(offers.position) as total')
      ->where('companies.tenant_id', session()->get('tenant_id'))
      ->whereNull('offers.deleted_at')
      ->whereNull('companies.deleted_at')
      ->join('offers', 'companies.id', '=', 'offers.company_id')
      ->groupBy(['companies.id','companies.name'])
      ->orderBy('total', 'desc')
      ->limit(5)
      ->get();
  }

  public function top5Salary() {
    return DB::table('offers')
      ->select(['id', 'position', 'salary'])
      ->where('tenant_id', session()->get('tenant_id'))
      ->whereNull('deleted_at')
      ->whereNotNull('salary')
      ->orderBy('salary', 'desc')
      ->limit(5)
      ->get();
  }
}
