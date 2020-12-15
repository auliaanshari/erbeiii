<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'company';
    protected $primaryKey = 'company_code';
    protected $fillable = [
        'company_code', 'company_name'
    ];
    public $incrementing = false;

    public function equipment()
    {
        return $this->hasMany('App\Equipment','company_code','company_code');
    }
}
