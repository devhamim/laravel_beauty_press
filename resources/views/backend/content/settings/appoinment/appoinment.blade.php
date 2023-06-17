@extends('backend.layouts.app')

@section('content')

<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <table id="example" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>Service Name</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Number</th>
                        <th>Message</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($appointments as $appointment)
                        <tr>
                            <td style="height: 40%;" >{{ $appointment->rel_to_service->title }}</td>
                            <td style="height: 40%;" >{{ $appointment->appointment_date }}</td>
                            <td style="height: 40%;" >{{ $appointment->appointment_time }}</td>
                            <td style="height: 40%;" >{{ $appointment->name }}</td>
                            <td style="height: 40%;" >{{ $appointment->email }}</td>
                            <td style="height: 40%;" >{{ $appointment->number }}</td>
                            <td style="height: 40%;" >{{ $appointment->message }}</td>
                        </tr>
                    @endforeach

                </tbody>

            </table>
        </div>
    </div>
</div>
@endsection
