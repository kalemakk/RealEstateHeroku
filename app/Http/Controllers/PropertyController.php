<?php

namespace App\Http\Controllers;
use App\District;
use App\Property;
use App\Location;
use App\Repository\PropertyRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PropertyController extends Controller
{

    public function __construct(PropertyRepositoryInterface $property)
    {
        $this->property = $property;
        $this->middleware('auth')->except( 'index','show');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $property = Property::all();
        $getall= Property::orderBy('created_at','desc')->get();

        if (Auth::check()) {
            return view('Property.index',compact('getall'));

        }
        return view('Property.client_index', compact('getall'));

//        {{ $articles->render() }}
//        return view('welcome', ['articles' => $articles, 'tags' => $tags]);
//        {{ $article->user->name }}
//        $articles = Article::where('user_id', 1)->orderBy('title', 'desc')->take(5)->get();

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $location = Location::all();
        $district = District::all();
        return view('Property.create',compact('location','district'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $request->validate([
////            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:4048',
//            'property_description'=>'required',
//            'property_usage'=>'required',
//            'property_location'=>'required',
//            'property_category'=>'required',
//            'property_type'=>'required',
//            'property_number_of_rooms'=>'required',
//            'property_price'=>'required',
//            'property_name'=>'required',
//            'property_main_image_url'=>'required'
//        ]);

        if ($request->file('file')) {
            $imagePath = $request->file('file');
            $imageName = $imagePath->getClientOriginalName();

//            $path = $request->file('file')->storeAs('uploads', $imageName, 'public');
        }

//        $file = $request->file('property_main_image_url');
//        $name = $file->getClientOriginalName();
        $location =$request->get('property_location');
        $id = DB::table('locations')->where('state', $location)->value('id');
        $property = new Property();
        $property->property_description =$request->get('property_description');
        $property->property_name =$request->get('property_name');
        $property->property_usage =$request->get('property_usage');
//        $property->property_location =$request->get('property_location');
        $property->location_id =$id;
        $property->property_category =$request->get('property_category');
        $property->property_type =$request->get('property_type');
        $property->property_number_of_rooms =$request->get('property_number_of_rooms');
        $property->property_price =$request->get('property_price');
        $property->property_size =$request->get('property_size');
        $property->property_promotion =$request->get('property_promotion');
        $property->property_id = Str::random(6);
        $property->property_date_of_construction =$request->get('property_date_of_construction');
        $property->property_main_image_url = 'helloworld.jpeg';
        $property->user_id =Auth::user()->id;

//        $image->name = $imageName;
//        $image->path = '/storage/'.$path;
//        $image->save();

        $property->save();
//        return dd($property);
        return redirect('/property')->with('success', 'Property saved!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $property = Property::findorFail($id);
        return view('Property.singleproperty',compact('property'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        $property = Property::findOrFail($id);
        return view('Property.edit',compact('property'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $property = Property::find($id);
        $property->property_description =$request->get('property_description');
        $property->property_name =$request->get('property_name');
        $property->property_usage =$request->get('property_usage');
        $location =$request->get('property_location');
        $id = DB::table('locations')->where('name', $location)->value('id');
        $property->location_id =$id;
        $property->property_category =$request->get('property_category');
        $property->property_type =$request->get('property_type');
        $property->property_number_of_rooms =$request->get('property_number_of_rooms');
        $property->property_price =$request->get('property_price');
        $property->property_sold_status =$request->get('property_sold_status');
        $property->property_promotion =$request->get('property_promotion');
        $property->property_size =$request->get('property_size');
        $property->property_date_of_construction =$request->get('property_date_of_construction');
//        $property->property_main_image_url = 'helloworld.jpeg';
        $property->save();
        return redirect('/property')->with('success', 'Student updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Property $property)
    {
        $property->delete();
//        Property::findOrFail($id)->delete();
        return redirect('/property')->with('success', 'Property deleted successfully');;
//        return dd($property);

    }
}
