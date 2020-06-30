<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{

    protected $fillable = [

    ];
//    protected $guarded =[];


    public function properties()
    {
        return $this->hasMany('App\Property');
    }

    public function district(){
        return $this->belongsTo('App\District');
    }
}
