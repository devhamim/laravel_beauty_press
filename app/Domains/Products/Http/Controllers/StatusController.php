<?php

namespace App\Domains\Products\Http\Controllers;

use App\Domains\Products\Models\Status;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class StatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('backend.products.status.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.products.status.create');
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
            'name' => 'required|unique:statuses,name',
        ]);


        $createStatus = new Status();
        $createStatus->name = $request->name;
        $createStatus->user_id = auth()->id();
        $createStatus->save();

        return redirect()
            ->route('admin.product.status.index')
            ->withFlashSuccess('status created successfully');
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

        $status = Status::findOrFail($id);
        return view('backend.products.status.edit', compact('status'));
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

        $updateStatus = Status::findOrFail($id);
        if ($updateStatus) {
            $updateStatus->name = $request->name;
            $updateStatus->save();
        }
        return redirect()
            ->route('admin.product.status.index')
            ->withFlashSuccess('Status updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $status = status::find($id);
        if ($status) {
            $status->delete($status);
        }
        return redirect()
            ->route('admin.product.status.index')
            ->withFlashSuccess('status deleted successfully');
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
