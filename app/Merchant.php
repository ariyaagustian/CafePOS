<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Merchant extends Model
{
    protected $fillable = [
        'merchant_name', 'merchant_address'
    ];

    public function user(){
        return $this->hasMany('App\User');
    }
}
