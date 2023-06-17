<?php

namespace App\Domains\Products\Http\Controllers;

use App\Domains\Products\Models\Brand;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Str;

class BrandController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    return view('backend.products.brand.index');
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view('backend.products.brand.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $data = $this->validateBrands();
    Brand::create($data);
    return redirect()
      ->route('admin.product.brand.index')
      ->withFlashSuccess('Brand created successfully');
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
    $brand = Brand::findOrFail($id);
    return view('backend.products.brand.edit', compact('brand'));
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
    $data = $this->validateBrands($id);
    $brand = Brand::find($id);
    if ($brand) {
      $brand->update($data);
    }
    return redirect()
      ->route('admin.product.brand.index')
      ->withFlashSuccess('Brand updated successfully');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    //
  }




  public function validateBrands($id = 0)
  {

    $data = request()->validate([
      'active' => 'nullable|string|max:191',
      'name' => 'required|string|max:191|unique:brands,name,' . $id,
      'logo' => 'nullable|max:1800|mimes:jpeg,jpg,png,gif,webp',
      'meta_title' => 'nullable|string|max:255',
      'meta_description' => 'nullable|string|max:400',
    ]);

    unset($data['logo']);
    $data['active'] = request('active', null);
    $data['top'] = request('top', false);

    $data['slug'] = Str::slug($data['name']);

    if (!$id) {
      $data['user_id'] = auth()->id();
    }

    if (request()->hasFile('logo')) {
      $logo = request()->file('logo');
      $data['logo'] = store_picture($logo, 'brands');
    }

    return $data;
  }
}
