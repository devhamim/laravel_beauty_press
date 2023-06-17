<?php

namespace App\Http\Controllers\Frontend;

use App\Domains\Products\Models\Product;
use App\Domains\Products\Models\Warehouse;
use Illuminate\Http\Request;
use DB;

/**
 * Class TermsController.
 */
class TrackingController
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('frontend.pages.tracking');
    }

    public function Track(Request $request)
    {
        $weight = request('weight', null);
        $shipped_from = request('shipped_from', null);
        $service_type = request('service_type', null);
        $category = request('category', null);
        $calculate_rate = Product::where('category', 'like', "%$category%")
            ->where('shipped_from', 'like', "%$shipped_from%")
            ->first();


        $rate = $calculate_rate->rate;
        $cal_rate = $rate * $weight;

        return view('frontend.pages.shippingInformationModal', compact('weight', 'shipped_from', 'category', 'rate', 'cal_rate'));


        // return view('frontend.index', compact('rate'));

    }
    public function Tracking(Request $request)
    {
        return view('frontend.pages.tracking');
    }
}
