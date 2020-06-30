<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Property;


class Similar extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
//        public $mess;
        public $type;
    public $id;

//        public $property_category;
    public function __construct($type)
//            public function __construct($property_type, $property_category)

            {
//        $this->mess =$mess;
        $this->type =$type;
//        $type->id =$id;
//        $this->property_category =$property_category;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.similar');
    }

    public function idd(){
        return $this->id;
    }
    public function real(){

//        return Property::all();


//        $property_type =$this->property_type;
//        $property_category =$this->property_category;

        return Property::where([
            ['property_type', 'LIKE', '%' . $this->type . '%'],
////            ['property_location', 'LIKE', '%' . $property_location . '%'],
////            ['property_price', 'LIKE', '%' . $property_price . '%'],
//            ['property_category', 'LIKE', '%' . $property_category . '%'],
        ])->get();


    }
}
