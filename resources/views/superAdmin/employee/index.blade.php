@extends('layouts.fleet')
@section('head')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.12.1/b-2.2.3/b-colvis-2.2.3/b-html5-2.2.3/fh-3.2.4/datatables.min.css"/>




@endsection
@section('content')

<div class="card">
    @if(session('msg'))
    <div class="alert alert-success" role="alert">
        {{ session('msg') }}
    </div>
    @endif
    <!--begin::Card header-->
    <div class="card-header border-0 pt-6">
        <!--begin::Card title-->
        <div class="card-title">

        </div>
        <!--begin::Card title-->
        <!--begin::Card toolbar-->
        <div class="card-toolbar">
        </div>
        <!--end::Card toolbar-->
    </div>
    <!--end::Card header-->
    <!--begin::Card body-->
    <div class="card-body pt-0">
        <table id="kt_datatable_example_2" class="table table-striped table-row-bordered gy-5 gs-7">
            <thead>
                <tr class="fw-bold fs-6 text-gray-800">
                    <th>{{__('#')}}</th>
                    <th>{{__('Name')}}</th>
                    <th>{{__('Email')}}</th>
                    <th>{{__('phoneNumber')}}</th>
                    <th>{{__('age')}}</th>
                    <th>{{__('city')}}</th>
                    <th>{{__('poistion')}}</th>
                    <th>{{__('salary')}}</th>
                    <th>{{__('startDate')}}</th>
                    <th>{{__('website')}}</th>
                    <th>{{__('numOfExperience')}}</th>
                    <th>{{__('notes')}}</th>
                    <th>{{__('requestDate')}}</th>
                    <th>{{__('Actions')}}</th>

                </tr>
            </thead>
            <tbody>
                @foreach($requestEmployees as $requestEmployee)
                <tr>
                    <td>{{$requestEmployee->id}}</td>
                    <td>{{$requestEmployee->firstName ." ".$requestEmployee->lastName}}</td>
                    <td>{{$requestEmployee->email}}</td>
                    <td>{{$requestEmployee->phoneNumber}}</td>
                    <td>{{$requestEmployee->age}}</td>
                    <td>{{$requestEmployee->city}}</td>
                    <td>{{$requestEmployee->poistion}}</td>
                    <td>{{$requestEmployee->salary}}</td>
                    <td>{{$requestEmployee->startDate}}</td>
                    <td>{{$requestEmployee->website}}</td>
                    <td>{{$requestEmployee->numOfExperience}}</td>
                    <td>{{$requestEmployee->notes}}</td>
                    <td>{{$requestEmployee->created_at}}</td>
                    <td>
						<a href="{{route('request_employee_delete',$requestEmployee->id)}}" class="btn btn-icon btn-sm btn-danger">
						<i class="bi bi-trash-fill fs-1x"></i>
                        </a>

                    </td>

                </tr>
                @endforeach
            </tbody>

        </table>
    </div>
    <!--end::Card body-->
</div>


@endsection
@section('scripts')

<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.12.1/b-2.2.3/b-colvis-2.2.3/b-html5-2.2.3/fh-3.2.4/datatables.min.js"></script>
<script>
    $(document).ready( function () {
    var table = $('#kt_datatable_example_2').DataTable({
        "dom": 'Bfrtip'
    });
    new $.fn.dataTable.Buttons( table, {
    buttons: [
        'copy', 'excel', 'pdf'
    ]
} );
} );
</script>
@endsection
