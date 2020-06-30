<?php

namespace App\View\Components;

use App\Property;
use Illuminate\View\Component;

class similarproperty extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

//
//        public $property_type;
//        public $property_location;
//        public $property_price;
//        public $property_category;



//    public function __construct($property_type,$property_category)
    public function __construct()

    {
//        $this->property_category =$property_category;
//        $this->property_type=$property_type;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.similarproperty',[
            'list'=> $this->list(),
        ]);
    }


//    public function items()
//    {
//        $simillar = Property::all();
////        $simillar = Property::where([
////            ['property_type', 'LIKE', '%' . $property_type . '%'],
//////            ['property_location', 'LIKE', '%' . $property_location . '%'],
//////            ['property_price', 'LIKE', '%' . $property_price . '%'],
////            ['property_category', 'LIKE', '%' . $property_category . '%'],
////        ])->get();
//        return $simillar;
//
//    }


    public function list(){
        return['a','b',2];
    }
}
