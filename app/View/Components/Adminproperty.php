<?php

namespace App\View\Components;

use App\Repository\PropertyRepositoryInterface;
use Illuminate\View\Component;

class Adminproperty extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(PropertyRepositoryInterface $slide)
    {
        $this->slide =$slide;
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
//        return view('partials.slider');
    }

    public function getslide(){
        return $this->slide->index();
    }
}
