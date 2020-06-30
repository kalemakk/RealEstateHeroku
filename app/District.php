<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    public function locations()
    {
        return $this->hasMany('App\Location');
    }


    public function locationProperty()
    {
        return $this->hasManyThrough('App\Property', 'App\Location');
    }

}
