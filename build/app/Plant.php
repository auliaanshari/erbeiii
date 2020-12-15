<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plant extends Model
{
    protected $table = 'plant';
    protected $primaryKey = 'plant_code';
    protected $fillable = [
        'plant_code', 'plant_name'
    ];
    public $incrementing = false;
    
    public function equipment()
    {
        return $this->hasMany('App\Equipment','plant_code','plant_code');
    }
}
