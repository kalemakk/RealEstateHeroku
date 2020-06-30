<?php


namespace App\Http\View\Composers;

use App\Property;
use Illuminate\View\View;

class Propertycomposer
{
    public function compose(View $view){
        $view->with('getslide',Property::orderBy('created_at','asc')->where('property_promotion',true)->get());


    }

}
