@inject('model', '\App\Domains\Auth\Models\User')

@extends('backend.layouts.app')

@section('title', __('Create Product'))

@section('content')



    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

    <div class="row justify-content-center">
        <div class="col-md-10">


            <form action="{{ route('admin.product.product.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <x-backend.card>
                    <x-slot name="header">
                        @lang('Create product')
                    </x-slot>

                    <x-slot name="headerActions">

                        <x-utils.link class="btn btn-sm btn-secondary" :href="route('admin.product.product.create')" :text="__('Add New')" />
                        <div style="padding-left: 2px;">
                            <x-utils.link class="btn btn-sm btn-danger" :href="route('admin.product.product.index')" :text="__('Back')" />
                        </div>
                    </x-slot>

                    <x-slot name="body">

                        <table style="width:100%" id="dynamicAddRemove">
                            <tr>
                                <td>
                                    <div class="row">
                                        <div class="form-group col">
                                            <label for="service_type">Service Type</label>
                                            <select class="form-control" name="service_type[]">
                                                <option value="d2d">D2D</option>
                                                {{-- <option value="freight">Freight</option> --}}
                                            </select>
                                        </div> <!-- form-group -->

                                        <div class="form-group col">
                                            <label for="category">Category Name</label>
                                            <input type="text" name="category[]" id="category" placeholder="category"
                                                class="form-control" />
                                        </div>

                                        <div class="form-group col">
                                            <label for="shipped_from">Shipping From</label>
                                            <select class="form-control" name="shipped_from[]">
                                                <option value=""></option>
                                                <option value="china">China</option>
                                                <option value="hongkong">HongKong</option>
                                            </select>
                                        </div> <!-- form-group -->

                                        <div class="form-group col">
                                            <label for="rate">Rate</label>
                                            <input type="text" name="rate[]" id="rate" placeholder="rate"
                                                class="form-control" />
                                        </div>
                                    </div>
                                </td>
                                <div class="form-group col">
                                    <td class="text-right" style="width:1%;padding-top: 12px;">

                                        <button type="button" name="add" id="add-btn"
                                            class="btn btn-outline-success add-btn">+</button>
                                    </td>
                                    <td class="text-right" style="width:1%;padding-top: 12px;">
                                        <button type="button" class="btn btn-outline-danger">-</button>
                                    </td>
                                </div>
                            </tr>
                        </table>
                    </x-slot>

                    <x-slot name="footer">
                        <button class="btn btn-sm btn-primary" type="submit">@lang('Create product')</button>
                    </x-slot>
                </x-backend.card>
            </form>


        </div>

    </div>

    {{-- 
    <script type="text/javascript">
        var i = 0;
        $("#add-btn").click(function() {
            ++i;
            $("#dynamicAddRemove").append(
                '<tr><td><div class="row"><div class="form-group col"><select class="form-control" name="service_type"><option value="d2d">D2D</option></select></div><div class="form-group col"><input type="text" name="category" id="category" placeholder="category"class="form-control" /></div><div class="form-group col"><select class="form-control" name="shipped_from"><option value=""></option><option value="china">China</option><option value="hongkong">HongKong</option></select></div><div class="form-group col"><input type="text" name="rate" id="rate" placeholder="rate" class="form-control" /></div></div></td><td class="text-right"><button type="button" name="add" id="add-btn" class="btn btn-success add-btn">Add</button></td><td class="text-right" style="width:1%"><button type="button" class="btn btn-danger remove-tr">Remove</button></td></tr>'
            );
        });
        $(document).on('click', '.remove-tr', function() {
            $(this).parents('tr').remove();
        });
    </script> --}}





@endsection
