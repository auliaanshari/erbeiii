<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnalysisPRD extends Model
{
    protected $table = 'analysis_prd';
    protected $primaryKey = array('equipment_code','inspection_date');
    protected $fillable = [
        'pof', 'component_damage', 'surr_equip_damage', 'unit_prod_lost', 
        'env_cleanup_cost', 'personel_injury', 'cof', 
        'pof_pol', 'mild_moderate', 'stuck_to_open', 
        'cof_col', 'gff', 'pof_od', 'pof_od_cat', 
        'cof_od', 'cof_od_cat', 'fail_to_open_risk_ranking', 
        'pol', 'pol_cat', 'col', 'col_cat', 'leaking_final_risk_ranking', 
        'eta', '2ta', '3ta', '4ta', 'suggested_action', 'obrf'
    ];
    public $incrementing = false;

    public function equipment()
    {
        return $this->hasMany('App\Equipment','equipment_code','equipment_code');
    }
}
