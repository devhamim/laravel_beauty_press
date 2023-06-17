<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;

/**
 * Class DashboardController.
 */
class DashboardController
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('backend.dashboard');
    }

    public function search(Request $request)
    {
        $all_orders = $this->orderList();
        $orders = json_decode($all_orders);
        $all_orders = $orders->data->result;

        if ($request->input('itemNO')) {
            // $all_orders->all();
            // $all_orders = $all_orders->where('order_number', 'LIKE', "%" . $request->itemNO . "%")->paginate(20);
        }
        return view('backend.dashboard', compact('all_orders'));
    }
}
