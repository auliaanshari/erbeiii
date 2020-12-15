<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnalysisPVASTPiping extends Model
{
    protected $table = 'analysis_pv_ast_piping';
    protected $primaryKey = array('equipment_code','inspection_date');
    protected $fillable = [
        'thinning', 'ext_damage', 'brittle_fracture', 
        'stress_corr_crack', 'htha', 'mechanical_fatigue', 
        'total_df', 'msf', 'gff_total', 'pof', 'pof_cat', 
        'flammable_cd', 'flammable_pi', 'toxic_cd', 'toxic_pi', 
        'non_cd', 'non_pi', 'final_area_cof', 'area_cof_cat', 
        'final_financial_cof', 'financial_cof_cat', 'area_risk_cat', 
        'area_risk_ranking', 'financial_risk_cat', 'financial_risk_ranking', 
        'eta', '2ta', '3ta', '4ta', 'suggested_action', 'obrf'
    ];
    public $incrementing = false;

    public function equipment()
    {
        return $this->hasMany('App\Equipment','equipment_code','equipment_code');
    }
}
