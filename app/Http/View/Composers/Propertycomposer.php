<?php


namespace App\Http\View\Composers;

use App\District;
use App\Location;
use App\Property;
use App\User;
use Illuminate\View\View;

class Propertycomposer
{
    public function compose(View $view){
        $view->with('getslide',Property::orderBy('created_at','asc')->where('property_promotion',true)->get());
        $view->with('user',User::orderBy('created_at','asc')->get());
        $view->with('property',Property::orderBy('created_at','asc')->get());
        $view->with('location',Location::orderBy('created_at','asc')->get());
        $view->with('district',District::orderBy('created_at','asc')->get());


    }

}
