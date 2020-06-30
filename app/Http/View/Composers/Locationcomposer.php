<?php


namespace App\Http\View\Composers;


use App\District;
use App\Location;
use Illuminate\View\View;

class Locationcomposer
{
    public function compose(View $view){
        $view->with('location',District::orderBy('name','asc')->get());
    }

}
