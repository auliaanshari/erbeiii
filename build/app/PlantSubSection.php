<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlantSubSection extends Model
{
    protected $table = 'plant_sub_section';
    protected $primaryKey = 'plant_sub_section_code';
    protected $fillable = [
        'plant_sub_section_code', 'plant_sub_section_name'
    ];
    public $incrementing = false;

    public function equipment()
    {
        return $this->hasMany('App\Equipment','plant_sub_section_code','plant_sub_section_code');
    }
}
