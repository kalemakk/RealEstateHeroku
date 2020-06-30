<?php

namespace App\View\Components;

use App\Repository\PropertyRepositoryInterface;
use Illuminate\View\Component;

class Property extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(PropertyRepositoryInterface $property)
    {
        $this->property = $property;
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.property');
    }

    public function allProperty(){

//        $property = $this->property->index();
//        return $property;
//        $property = $this->property->index();
//        return dd($property);
//        return $property;
        return $this->property->index();
    }
}
