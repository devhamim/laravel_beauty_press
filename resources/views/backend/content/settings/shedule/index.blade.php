@extends('backend.layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">

                </div>
                <div class="card-body">
                    <form class="form-horizontal" action="{{ route('admin.setting.shedul.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Form</label>
                                    <select name="shedule_form" id="" class="form-control">
                                        <option value="">-- Select --</option>
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
                                    <label>To</label>
                                    <select name="shedule_to" id="" class="form-control">
                                        <option value="">-- Select --</option>
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
                                    <label>Time Form</label>
                                    <input id="id" name="time_form" type="time" class="form-control datetimepicker"  value="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Time To</label>
                                    <input id="id" name="time_to" type="time" class="form-control datetimepicker"  value="">
                                </div>
                            </div>
                        </div>



                        <div class="table-responsive">

                            <button type="submit" class="btn btn-info">Submit</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>Shedules Form</th>
                            <th>Shedules To</th>
                            <th>Time Form</th>
                            <th>Time To</th>
                            <th>Active/Deactive</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($shedules as $shedule)
                            <tr>
                                <td style="height: 40%;">{{ $shedule->shedule_form }}</td>

                                <td style="height: 40%;">{{ $shedule->shedule_to }}</td>

                                <td style="height: 40%;">{{ $shedule->time_form }}</td>

                                <td style="height: 40%;">{{ $shedule->time_to }}</td>

                                <td>
                                    @if ($shedule->is_active == 1)
                                        <button class="btn btn-sm btn-primary">Active</button>
                                    @elseif($shedule->is_active == 0)
                                        <button class="btn btn-sm btn-danger">Deactive</button>
                                    @endif
                                </td>


                                <td>
                                    <a href="{{ route('admin.setting.shedule.edit', $shedule->id) }}"
                                        class="btn btn-primary btn-sm editProduct">Edit</a>

                                </td>
                            </tr>
                        @endforeach

                    </tbody>

                </table>
            </div>
        </div>
    </div>
@endsection

