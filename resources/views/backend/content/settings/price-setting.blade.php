@extends('backend.layouts.app')

@section('title', ' Price Settings ')



@section('content')

    {{ html()->form('POST', route('admin.setting.socialStore'))->class('form-horizontal')->open() }}

    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header with-border">
                    <h3 class="card-title">Price Settings <small class="ml-2">(update information anytime)</small></h3>
                </div>
                <div class="card-body">

                    <div class="form-group row mb-4">
                        {{ html()->label('Base Currency')->class('col-md-4 col-form-label text-right')->for('base_currency') }}
                        <div class="col-md-8">
                            {{ html()->text('base_currency', get_setting('base_currency'))->class('form-control')->placeholder('CNY')->disabled(true)->attribute('aria-describedby', 'baseCurrency') }}
                            <small id="baseCurrency" class="form-text text-muted">This is the base currency of
                                OTC.</small>
                        </div> <!-- col-->
                    </div> <!-- form-group-->

                    <div class="form-group row mb-4">
                        {{ html()->label('Currency Icon')->class('col-md-4 col-form-label text-right')->for('currency_icon') }}
                        <div class="col-md-8">
                            {{ html()->select('currency_icon', ['৳' => '৳', 'BDT' => 'BDT'], get_setting('currency_icon'))->class('form-control')->attribute('style', 'font-family: sans-serif;') }}
                            <small id="baseCurrency" class="form-text text-muted">This icon will show the prefix of
                                price.</small>
                        </div> <!-- col-->
                    </div> <!-- form-group-->

                    <div class="form-group row mb-4">
                        {{ html()->label('China Local Currency Rate(BDT)')->class('col-md-4 text-right')->for('local_rate') }}
                        <div class="col-md-8">
                            {{ html()->text('local_rate')->class('form-control')->value(get_setting('local_rate'))->placeholder('local delivery rate')->attribute('aria-describedby', 'local_rate') }}
                        </div> <!-- col-->
                    </div> <!-- form-group-->

                    <div class="form-group row mb-4">
                        {{ html()->label('Currency Rate(BDT)')->class('col-md-4 col-form-label text-right')->for('actualrmb_rate') }}
                        <div class="col-md-8">
                            {{ html()->text('actualrmb_rate')->class('form-control')->value(get_setting('actualrmb_rate'))->placeholder('actual rmb rate')->attribute('aria-describedby', 'actualrmb_rate') }}
                        </div> <!-- col-->
                    </div> <!-- form-group-->


                    <div class="form-group row mb-4">
                        <div class="col-md-8 offset-md-5">
                            {{ html()->button('Update')->class('btn btn-sm btn-success') }}
                        </div> <!-- col-->
                    </div> <!-- form-group-->
                </div> <!--  .card-body -->
            </div> <!--  .card -->
        </div> <!-- .col-md-9 -->
    </div> <!-- .row -->

    {{ html()->form()->close() }}
@endsection




@push('after-scripts')
    {{ script('assets/js/jscolor.js') }}

    <script>
        function readImageURL(input, preview) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    preview.attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]); // convert to base64 string
            }
        }

        $(document).ready(function() {
            $(".image").change(function() {
                holder = $(this).closest('.form-group').find('.holder');
                readImageURL(this, holder);
            });
        });
    </script>
@endpush
