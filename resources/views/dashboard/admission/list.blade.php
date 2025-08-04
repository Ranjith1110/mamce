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
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="mb-3 ms-5">Student Details</h3>
        <div>
            <form class="form" action="{{route('mamce.admission_enquiry_list')}}" method="GET" id="search-form">
                <div class="d-flex align-items-center">
                    <div class="me-3">
                        <span>From</span>
                        <input type="date" class="form-control" id="fromDate" name="from_date" value="{{!empty($from_date) ? $from_date : ''}}" placeholder="Select Date" style="width: 150px; display: inline-block;">
                    </div>
                    <div class="me-3">
                        <span>To</span>
                        <input type="date" class="form-control" id="toDate" name="to_date" value="{{!empty($to_date) ? $to_date : ''}}" placeholder="Select Date" style="width: 150px; display: inline-block;">
                    </div>

                    <button type="submit" class="btn text-white ms-2" style="background-color: #2f4050;">Search </button>
                    @if($from_date != '' || $to_date != '')
                    <a href="{{route('mamce.admission_enquiry_list')}}" type="submit" class="btn text-white ms-2" style="background-color: #2f4050;">Clear </a>
                    @endif
                </div>
            </form>
            <button class="btn text-white ms-2" id="downloadodf" style="background-color: #2f4050;float: inline-end;">Download PDF</button>
        </div>
    </div>
    <div class="p-5 table-responsive">
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>S.No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Address</th>
                    <th>Degree</th>
                    <th>Course</th>
                    <th>Date of Enquiry</th>
                </tr>
            </thead>
            <tbody>
            @foreach($admissionEnquiry as $key => $value)
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$value->name}}</td>
                    <td>{{$value->email}}</td>
                    <td>{{$value->phone_no}}</td>
                    <td>{{$value->address}}</td>
                    <td>{{$value->course_type}}</td>
                    <td>{{$value->course}}</td>
                    <td>{{$value->created_time}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    {{$admissionEnquiry->appends(['from_date'=>$from_date,'to_date'=>$to_date])->links()}}

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
<script>
    document.getElementById('downloadodf').addEventListener('click', function() {
        var element = document.querySelector('.table-responsive'); // Capture the table part

        var opt = {
            margin: 0.5,
            filename: 'student-details.pdf',
            image: {
                type: 'jpeg',
                quality: 0.98
            },
            html2canvas: {
                scale: 2
            },
            jsPDF: {
                unit: 'in',
                format: 'a4',
                orientation: 'landscape'
            }
        };

        html2pdf().set(opt).from(element).save();
    });
</script>


@endsection