<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $fillable = [
        'property_description',
        'property_usage',
        'property_location',
        'property_category',
        'property_type',
        'property_number_of_rooms',
        'property_price',
        'property_main_image_url',
        'property_name'

    ];
    protected $guarded =[];

    public function image(){
            return $this->morphOne('App\Image','imagable');
    }

    public function propertyimages(){
        return $this->hasMany('App\PropertyImages');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
    public function location(){
        return $this->belongsTo('App\Location');
    }
}

