@extends('dashboard.layouts.app')
@section('content')


<style>
    .table-responsive::-webkit-scrollbar {
        display: none;
    }

    .table-striped thead tr th {
        padding: 20px 10px;
        font-size: 18px;
        font-weight: 500;
    }

    .table-striped tbody tr td {
        padding: 10px 6px;
        font-weight: 500;
    }
</style>

<div class="container mt-4">
    <h3 class="mb-3 ms-5">Contact Details</h3>
    <div class="p-5 table-responsive">
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>S.No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Subject</th>
                    <th>Message</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
            @foreach($contactEnquiry as $key => $value)
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$value->name}}</td>
                    <td>{{$value->email}}</td>
                    <td>{{$value->phone_no}}</td>
                    <td>{{$value->subject}}</td>
                    <td>{{$value->message}}</td>
                    <td>{{ $value->created_at->format('d-M-Y') }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>



@endsection