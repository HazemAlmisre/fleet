@extends('layouts.fleet')
@section('head')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.12.1/b-2.2.3/b-colvis-2.2.3/b-html5-2.2.3/fh-3.2.4/datatables.min.css"/>




@endsection
@section('content')

<div class="card">
    <!--begin::Card header-->
    <div class="card-header border-0 pt-6">
        <!--begin::Card title-->
        <div class="card-title">

        </div>
        <!--begin::Card title-->
        <!--begin::Card toolbar-->
        <div class="card-toolbar">
            <!--begin::Toolbar-->
            <div class="d-flex justify-content-end" data-kt-subscription-table-toolbar="base">
                <!--begin::Add subscription-->
                <a href="{{route('office_create')}}" class="btn btn-primary">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                    <span class="svg-icon svg-icon-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1"
                                transform="rotate(-90 11.364 20.364)" fill="currentColor"></rect>
                            <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor"></rect>
                        </svg>
                    </span>
                    <!--end::Svg Icon-->{{__('Add Office')}}</a>
                <!--end::Add subscription-->
            </div>
            <!--end::Toolbar-->
        </div>
        <!--end::Card toolbar-->
    </div>
    <!--end::Card header-->
    <!--begin::Card body-->
    <div class="card-body pt-0">
        <table id="kt_datatable_example_2" class="table table-striped table-row-bordered gy-5 gs-7">
            <thead>
                <tr class="fw-bold fs-6 text-gray-800">
                    <th>{{__('Name')}}</th>
                    <th>{{__('Office Email')}}</th>
                    <th>{{__('Office Owner')}}</th>
                    <th>{{__('Address')}}</th>
                    <th>{{__('Phone')}}</th>
                    <th>{{__('Drivers / Vehicles')}}</th>
                    <th>{{__('Start date')}}</th>
                    <th>{{__('Actions')}}</th>

                </tr>
            </thead>
            <tbody>
                @foreach($offices as $office)
                <tr>
                    <td>{{$office->name}}</td>
                    <td>{{$office->user->email}}</td>
                    <td>{{$office->user->name}}</td>
                    <td>{{$office->address}}</td>
                    <td>{{$office->user->phone}}</td>
                    <td>{{$office->Drivers->count()}} / {{$office->Vehicles->count()}}</td>
                    @php
                    $start_date = explode(" ",$office->created_at);
                    @endphp
                    <td>{{$start_date[0]}}</td>
                    <td>

                        @if($office->is_enabled)
                        <a href="{{route('office_enable',$office->id)}}" class="btn btn-icon btn-sm  btn-success " >
                            <i class="bi bi-patch-check-fill fs-1x"></i>
                        </a>
                        @else
                        <a href="{{route('office_enable',$office->id)}}" class="btn btn-icon btn-sm  btn-danger" >
                            <i class="bi bi-patch-exclamation-fill fs-1x"></i>
                        </a>
                        @endif
                        <a href="{{route('office_show',$office->id)}}" class="btn btn-icon btn-sm btn-primary">
						<i class="bi bi-eye-fill fs-1x"></i>
                        </a>
						<a href="{{route('office_edit',$office->id)}}" class="btn btn-icon btn-sm btn-warning">
						<i class="bi bi-pencil-fill fs-1x"></i>
                        </a>
						<a href="{{route('office_delete',$office->id)}}" class="btn btn-icon btn-sm btn-danger">
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
