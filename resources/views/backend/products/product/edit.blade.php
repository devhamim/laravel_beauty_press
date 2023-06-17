@inject('model', '\App\Domains\Auth\Models\User')

@extends('backend.layouts.app')

@section('title', __('Update Products Status'))

@section('content')


    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

    <div class="row justify-content-center">
        <div class="col-md-10">

            {{ html()->modelForm($product, 'PATCH', route('admin.product.product.update', $product))->attribute('enctype', 'multipart/form-data')->open() }}
            @csrf


            <x-backend.card>
                <x-slot name="header">
                    @lang('Update Products Status')
                </x-slot>

                <x-slot name="headerActions">
                    <x-utils.link class="btn btn-sm btn-secondary" :href="route('admin.product.product.index')" :text="__('Cancel')" />
                </x-slot>

                <x-slot name="body">


                    <div class="row">
                        <div class="form-group col">
                            <label for="service_type">Service Type</label>
                            <select class="form-control" name="service_type" value="{{ $product->service_type }}">>
                                <option value="d2d">D2D</option>
                                {{-- <option value="freight">Freight</option> --}}
                            </select>
                        </div> <!-- form-group -->

                        <div class="form-group col">
                            <label for="category">Category Name</label>
                            <input type="text" name="category" id="category" placeholder="category"
                                value="{{ $product->category }}" class="form-control" />
                        </div>

                        <div class="form-group col">
                            <label for="shipped_from">Shipping From</label>
                            <select class="form-control" name="shipped_from" value="{{ $product->shipped_from }}">
                                <option value=""></option>
                                <option value="china">China</option>
                                <option value="hongkong">HongKong</option>
                            </select>
                        </div> <!-- form-group -->

                        <div class="form-group col">
                            <label for="rate">Rate</label>
                            <input type="text" name="rate" id="rate" placeholder="rate"
                                value="{{ $product->rate }}" class="form-control" />
                        </div>
                    </div>


        </div> <!-- form-group -->


        </x-slot>

        <x-slot name="footer">
            <button class="btn btn-sm btn-primary" type="submit">@lang('Update status')</button>
        </x-slot>
        </x-backend.card>

        {{ html()->closeModelForm() }}

    </div>
    </div>


@endsection
