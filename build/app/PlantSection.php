<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlantSection extends Model
{
    protected $table = 'plant_section';
    protected $primaryKey = 'plant_section_code';
    protected $fillable = [
        'plant_section_code', 'plant_section_name'
    ];
    public $incrementing = false;

    public function equipment()
    {
        return $this->hasMany('App\Equipment','plant_section_code','plant_section_code');
    }
}
