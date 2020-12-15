<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnalysisHE extends Model
{
    protected $table = 'analysis_he';
    protected $primaryKey = array('equipment_code','inspection_date');
    protected $fillable = [
        'exchanger_type', 'planned_ta1', 'planned_ta2', 'shell_diameter', 
        'tube_length', 'tube_type', 'tube_material', 'tube_quantity', 
        'tube_outside_diameter', 'tube_furnished_thickness', 'tube_pitch', 
        'tube_joint_design', 'tubesheet_material_spec', 'baffle_type', 'baffle_cut', 
        'baffle_spacing', 'pof', 'pof_cat', 'prod_losses_cost', 'bundle_repl_cost', 
        'env_impact', 'maintenance_cost', 'bundle_fail_final_cost', 'cof', 'cof_cat', 
        'risk_level', 'risk_ranking', 'action_taken', 'suggested_action', 'obrf'
    ];
    public $incrementing = false;

    public function equipment()
    {
        return $this->hasMany('App\Equipment','equipment_code','equipment_code');
    }
}
