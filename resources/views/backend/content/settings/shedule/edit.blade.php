@extends('backend.layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">

                </div>
                <div class="card-body">
                    <form action="{{ route('admin.setting.shedule.update') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="hidden" name="shedules_id" value="{{ $shedules->id }}">

                                    <label>Shedules Form</label>
                                    <select name="shedule_form" id="" class="form-control">
                                        <option value="{{ $shedules->shedule_form }}">{{ $shedules->shedule_form }}</option>
                                        <option value="Saturday">Saturday</option>
                                        <option value="Sunday">Sunday</option>
                                        <option value="Monday">Monday</option>
                                        <option value="Tuesday">Tuesday</option>
                                        <option value="Wednesday">Wednesday</option>
                                        <option value="Thursday">Thursday</option>
                                        <option value="Friday">Friday</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Shedules To</label>
                                    <select name="shedule_to" id="" class="form-control" >
                                        <option value="{{ $shedules->shedule_to }}">{{ $shedules->shedule_to }}</option>
                                        <option value="Saturday">Saturday</option>
                                        <option value="Sunday">Sunday</option>
                                        <option value="Monday">Monday</option>
                                        <option value="Tuesday">Tuesday</option>
                                        <option value="Wednesday">Wednesday</option>
                                        <option value="Thursday">Thursday</option>
                                        <option value="Friday">Friday</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Shedules To</label>
                                    <input id="id" name="time_form" type="time" class="form-control datetimepicker"  value="{{ $shedules->time_form }}">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Shedules To</label>
                                    <input id="id" name="time_to" type="time" class="form-control datetimepicker"  value="{{ $shedules->time_to }}">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Active/Deactive</label>
                            <select class="form-control" name="is_active">
                                <option value="1" @if ($shedules->is_active == 1) selected @endif>Active</option>
                                <option value="0" @if ($shedules->is_active == 0) selected @endif>Deactive</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-info">Update</button>
                    </form>
                </div>
            </div>
        </div>





    </div>
@endsection
