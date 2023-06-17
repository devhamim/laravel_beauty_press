<?php

namespace App\Domains\Products\Http\Controllers;

use App\Domains\Products\Models\Shipping;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class ShippingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('backend.products.shipping.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.products.shipping.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:shippings,name',
        ]);

        $createShipping = new Shipping();
        $createShipping->name = $request->name;
        $createShipping->user_id = auth()->id();
        $createShipping->save();

        return redirect()
            ->route('admin.product.shipping.index')
            ->withFlashSuccess('Shipping created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $shipping = Shipping::findOrFail($id);
        return view('backend.products.shipping.edit', compact('shipping'));
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

        $updateShipping = Shipping::findOrFail($id);
        if ($updateShipping) {
            $updateShipping->name = $request->name;
            $updateShipping->save();
        }
        return redirect()
            ->route('admin.product.shipping.index')
            ->withFlashSuccess('Shipping updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $shipping = Shipping::find($id);
        if ($shipping) {
            $shipping->delete($shipping);
        }
        return redirect()
            ->route('admin.product.shipping.index')
            ->withFlashSuccess('Shipping deleted successfully');
    }


    public function validateShippings($id = 0)
    {
        $data = request()->validate([
            'name' => 'required|string|max:191',
        ]);
        if (!$id) {
            $data['user_id'] = auth()->id();
        }

        return $data;
    }
}
