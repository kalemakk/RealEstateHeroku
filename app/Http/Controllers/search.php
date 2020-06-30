<?php

namespace App\Http\Controllers;

use App\Property;
use Illuminate\Http\Request;

class search extends Controller
{
    public function __invoke(Request $request)
    {
        $request->validate([
            'property_type'=>'required',
//            'property_location'=>'required',
//            'property_price'=>'required',
            'property_category'=>'required',
        ]);

        $property_type = $request->input('property_type');
        $property_location = $request->input('property_location');
        $property_price = $request->input('property_price');
        $property_category = $request->input('property_category');



        $search = Property::where([
            ['property_type', 'LIKE', '%' . $property_type . '%'],
//            ['property_location', 'LIKE', '%' . $property_location . '%'],
//            ['property_price', 'LIKE', '%' . $property_price . '%'],
            ['property_category', 'LIKE', '%' . $property_category . '%'],
        ])->get();
        return view('search')->with(compact('search'));






//        if ($property_usage != "") {
//            $posts = House::where([
//                ['usage_of_house', 'LIKE', '%' . $property_usage . '%'],
//                ['location_of_house', 'LIKE', '%' . $property_location . '%'],
//            ])->get();

//            if (count($posts) > 0)
//                return view('search')->with('posts', $posts);
//            else
//                return view('search')->with('posts', $posts)->withMessage('No Details found. Try to search again !');
//        } else {
//            redirect('/');
//        }

    }
}
