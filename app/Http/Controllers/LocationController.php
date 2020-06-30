<?php

namespace App\Http\Controllers;

use App\District;
use App\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LocationController extends Controller
{
    public function create(){
        $district = District::all();
        return view('location.create',compact('district'));
    }
    public function store(Request $request){


        $request->validate([
            'location_name'=>'required',
            'location_district'=>'required',
//            'location_image'=>'required',
        ]);





        $location =$request->get('location_district');
        $id = DB::table('districts')->where('name', $location)->value('id');
        $location = new Location();


        $location->state =$request->get('location_name');
        $location->district_id =$id;
//        $location->image_url =$request->get('location_image');
        $location->save();
        return redirect('/location/create');
//        return dd([$location->name,$location->district,$location->image_url]);
    }
}
