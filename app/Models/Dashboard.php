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
      ->groupBy('state')
      ->orderBy('total', 'desc')
      ->get();
  }
}
