<?php


namespace App\Repository;


use App\Property;
use Illuminate\Support\Facades\DB;

class PropertyRepository implements PropertyRepositoryInterface
{

    public function index(){
//        $property = Property::all();
        $property = Property::orderBy('created_at','desc')->get();
//        $property = DB::table('properties')->orderBy('created_at','desc');

//        $property = Property::all();

//        $call = $property->image();
//        return compact('property');
        return $property;
    }
}
