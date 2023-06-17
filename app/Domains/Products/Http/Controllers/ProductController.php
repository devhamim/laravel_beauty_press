<?php

namespace App\Domains\Products\Http\Controllers;

use App\Domains\Products\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    // $product = Product::all();
    return view('backend.products.product.index');
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    $product = Product::all();

    return view('backend.products.product.create', compact('product'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    // dd($request);
    foreach ($request->category as $key => $category) {

      $createProduct = new Product();
      $createProduct->category = $request->category[$key];
      $createProduct->shipped_from = $request->shipped_from[$key];
      $createProduct->rate = $request->rate[$key];
      $createProduct->service_type = $request->service_type[$key];
      $createProduct->save();
    }

    // $data = $this->validateproducts;


    return redirect()
      ->route('admin.product.product.index')
      ->withFlashSuccess('product created successfully');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show(Request $request, $id)
  {
    // $product = Product::findOrFail($id);

    // return view('show', compact('product', $product));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    $product = Product::find($id);

    return view('backend.products.product.edit', compact('product'));
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
    $updateProduct = product::findOrFail($id);
    if ($updateProduct) {

      $updateProduct->category = $request->category;
      $updateProduct->shipped_from = $request->shipped_from;
      $updateProduct->rate = $request->rate;
      $updateProduct->service_type = $request->service_type;
      $updateProduct->save();
    }
    return redirect()
      ->route('admin.product.product.index')
      ->withFlashSuccess('product updated successfully');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    $product = product::find($id);
    if ($product) {

      $product->delete($product);
    }

    return redirect()
      ->back()
      ->withFlashSuccess('product deleted successfully');
  }

  public function validateproducts($id = 0)
  {

    return request()->validate([
      'category' => 'nullable|max:191',
      'shipped_from' => 'nullable|max:191',
      'rate' => 'nullable|max:191',
      'service_type' => 'nullable|max:191',

    ]);
  }
}
