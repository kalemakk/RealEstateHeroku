<?php
//
//namespace App\View\Components;
//
//use App\Repository\PropertyRepositoryInterface;
//use Illuminate\View\Component;
//
//class Listing extends Component
//{
//    /**
//     * Create a new component instance.
//     *
//     * @return void
//     */
//    public function __construct(PropertyRepositoryInterface $property)
//    {
//        $this->property = $property;
//        $prop = $this->property->index();
//
//
//
//        //
//    }
//
//    /**
//     * Get the view / contents that represent the component.
//     *
//     * @return \Illuminate\View\View|string
//     */
//    public function render()
//    {
//
//        return <<<'blade'
//@foreach($prop as pro)
// <tr>
//     <th scope="row">
//        <div class="feat_property list favorite_page style2">
//            <div class="thumb">
//                <img class="img-whp" src="{{url('images/property/fp1.jpg')}}" alt="fp1.jpg">
//                <div class="thmb_cntnt">
//                    <ul class="tag mb0">
//                        <li class="list-inline-item dn"></li>
//                        <li class="list-inline-item"><a href="#">For Rent{{$prop->property_category}}</a></li>
//                    </ul>
//                </div>
//            </div>
//            <div class="details">
//                <div class="tc_content">
//                    <h4>Renovated Apartment</h4>
//                    <p><span class="flaticon-placeholder"></span> 1421 San Pedro St, Los Angeles, CA 90015</p>
//                    <a class="fp_price text-thm" href="#">$13444444,000<small>/mo</small></a>
//                </div>
//            </div>
//        </div>
//    </th>
//    <td>30 December, 2020</td>
//    <td><span class="status_tag badge">Pending</span></td>
//    <td>2,345</td>
//    <td>
//        <ul class="view_edit_delete_list mb0">
//            <li class="list-inline-item" data-toggle="tooltip" data-placement="top" title="Edit"><a href="#"><span class="flaticon-edit"></span></a></li>
//            <li class="list-inline-item" data-toggle="tooltip" data-placement="top" title="Delete"><a href="#"><span class="flaticon-garbage"></span></a></li>
//        </ul>
//    </td>
//</tr>
//@endforeach
//blade;
//    }
//}
