<?php

namespace App\Domains\Products\Http\Controllers;

use App\Domains\Products\Models\Warehouse;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class WarehouseController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {

    return view('backend.products.warehouse.index');
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view('backend.products.warehouse.create');
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
      'warehouse' => 'required|unique:warehouses,name',
    ]);


    $createWarehouse = new Warehouse();
    $createWarehouse->name = $request->warehouse;
    $createWarehouse->user_id = auth()->id();
    $createWarehouse->save();

    return redirect()
      ->route('admin.product.warehouse.index')
      ->withFlashSuccess('warehouse created successfully');
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
    // dd($id);
    $warehouse = warehouse::findOrFail($id);
    return view('backend.products.warehouse.edit', compact('warehouse'));
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

    $updateWarehouse = warehouse::findOrFail($id);
    if ($updateWarehouse) {
      $updateWarehouse->name = $request->name;
      $updateWarehouse->save();
    }
    return redirect()
      ->route('admin.product.warehouse.index')
      ->withFlashSuccess('warehouse updated successfully');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    $warehouse = warehouse::find($id);
    if ($warehouse) {
      $warehouse->delete($warehouse);
    }
    return redirect()
      ->route('admin.product.warehouse.index')
      ->withFlashSuccess('warehouse deleted successfully');
  }


  public function validatestatuses($id = 0)
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
