@extends('dashboard.layouts.app')
@section('content')

<div class="content-section p-10">
    <h2 class="text-black mb-6">Contact Enquiry Details</h2>

    <div class="list-container bg-body px-6 rounded">

        <div class="row">

            <div class="col-lg-8">
                <ul class="list-unstyled">
                    <div class="d-flex align-items-center justify-content-between pe-16 pt-8 pb-2 border-bottoms">
                        <li class="fw-bold">Name</li>
                        <li class="ms-20">{{$contactEnquiry->name}}</li>
                    </div>
                    <div class="d-flex align-items-center justify-content-between pe-16 pt-8 pb-2 border-bottoms">
                        <li class="fw-bold">Email</li>
                        <li class="ms-20">{{$contactEnquiry->email}}</li>
                    </div>
                    <div class="d-flex align-items-center justify-content-between pe-16 pt-8 pb-2 border-bottoms">
                        <li class="fw-bold">Phone Number</li>
                        <li class="ms-20">{{$contactEnquiry->phone_no}}</li>
                    </div>
                    <div class="d-flex align-items-center justify-content-between pe-16 pt-8 pb-2 border-bottoms">
                        <li class="fw-bold">Subject</li>
                        <li class="ms-20">{{Str::upper($contactEnquiry->subject)}}</li>
                    </div>
                    <div class="d-flex align-items-center justify-content-between pe-16 pt-8 pb-2 border-bottoms">
                        <li class="fw-bold">Message</li>
                        <li class="ms-20">{{$contactEnquiry->message}}</li>
                    </div>
                </ul>
            </div>

        </div>

    </div>

</div>

@endsection