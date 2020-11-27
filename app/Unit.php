<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    protected $fillable = [
        'unit_name', 'unit_code'
    ];

    public function basicMaterial(){
        return $this->hasMany('App\BasicMaterial');
    }
}
