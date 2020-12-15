<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    protected $table = 'equipment';
    protected $primaryKey = 'equipment_code';
    protected $fillable = [
        'equipment_code', 'equipment_name'
    ];
    public $incrementing = false;

    public function company() {
        return $this->belongsTo('App\Company', 'company_code', 'company_code');
    }

    public function plant() {
        return $this->belongsTo('App\Plant', 'plant_code', 'plant_code');
    }

    public function plant_section() {
        return $this->belongsTo('App\PlantSection', 'plant_section_code', 'plant_section_code');
    }

    public function plant_sub_section() {
        return $this->belongsTo('App\PlantSubSection', 'plant_sub_section_code', 'plant_sub_section_code');
    }

    public function analysis_prd()
    {
        return $this->hasMany('App\Analysis_PRD','equipment_code','equipment_code');
    }

    public function analysis_he()
    {
        return $this->hasMany('App\Analysis_HE','equipment_code','equipment_code');
    }

    public function analysis_pv_ast_piping()
    {
        return $this->hasMany('App\Analysis_PV_AST_Piping','equipment_code','equipment_code');
    }
}
