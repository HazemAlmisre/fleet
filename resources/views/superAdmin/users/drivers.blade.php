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
                <a href="{{route('driver_create')}}" class="btn btn-primary">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                    <span class="svg-icon svg-icon-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1"
                                transform="rotate(-90 11.364 20.364)" fill="currentColor"></rect>
                            <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor"></rect>
                        </svg>
                    </span>
                    <!--end::Svg Icon-->{{__("Add Driver")}}</a>
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
                    <th>{{__("Name")}}</th>
                    <th>{{__("Office")}}</th>
                    <th>{{__("Vehicle")}}</th>
                    <th>{{__("Years Of Exp")}}</th>
                    <th>{{__("Phone")}}</th>
                    <th>{{__("Rate")}}</th>
                    <th>{{__("Start date")}}</th>
                    <th>{{__("Driver Status")}}</th>
                    <th>{{__("Actions")}}</th>

                </tr>
            </thead>
            <tbody>
                @foreach($drivers->where('is_deleted',false) as $driver)
                <tr>
                    <td>{{$driver->user->name}}</td>
                    <td>{{$driver->Office->name}}</td>
                    <td>@if($driver->Vehicle){{$driver->Vehicle->plate}}@else {{__("No Vehicle ")}}@endif</td>
                    <td>{{$driver->exp_year}}</td>
                    <td>{{$driver->user->phone}}</td>
                    <td>{{$driver->rate}}</td>
         
                    @php
                    $start_date = explode(" ",$driver->created_at);
                    @endphp
                    <td>{{$start_date[0]}}</td>
                    <td>
                        @if($driver->User->is_active)
                       <a href="#" data-toggle="tooltip" data-placement="top" title=" @if($driver->status == 0) {{__('Online')}} @elseif($driver->status == 1) {{__('On Ride')}} @endif"> 
                        @if($driver->status == 0)
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="green" class="bi bi-circle-fill" viewBox="0 0 16 16">
                            <circle cx="8" cy="8" r="8"/>
                            </svg>
                            {{__("Online")}}
                        @elseif($driver->status == 1)
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="green" class="bi bi-car-front-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M2.52 3.515A2.5 2.5 0 0 1 4.82 2h6.362c1 0 1.904.596 2.298 1.515l.792 1.848c.075.175.21.319.38.404.5.25.855.715.965 1.262l.335 1.679c.033.161.049.325.049.49v.413c0 .814-.39 1.543-1 1.997V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.338c-1.292.048-2.745.088-4 .088s-2.708-.04-4-.088V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.892c-.61-.454-1-1.183-1-1.997v-.413a2.5 2.5 0 0 1 .049-.49l.335-1.68c.11-.546.465-1.012.964-1.261a.807.807 0 0 0 .381-.404l.792-1.848ZM3 10a1 1 0 1 0 0-2 1 1 0 0 0 0 2Zm10 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2ZM6 8a1 1 0 0 0 0 2h4a1 1 0 1 0 0-2H6ZM2.906 5.189l.956-1.913A.5.5 0 0 1 4.309 3h7.382a.5.5 0 0 1 .447.276l.956 1.913a.51.51 0 0 1-.497.731c-.91-.073-3.35-.17-4.597-.17-1.247 0-3.688.097-4.597.17a.51.51 0 0 1-.497-.731Z"/>
                            </svg>
                            {{__("On Ride")}}
                            @endif

                        </a>
                        @else
                        <a href="#" data-toggle="tooltip" data-placement="top" title="{{__('Offline')}}"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="red" class="bi bi-circle-fill" viewBox="0 0 16 16">
                        <circle cx="8" cy="8" r="8"/>
                        </svg>
                        {{__("Offline")}}
                        </a>
                       
                        @endif
                        
                    </td>
                    <td>
                        <a href="{{route('driver_show',$driver->id)}}" class="btn btn-icon btn-sm btn-primary">
						<i class="bi bi-eye-fill fs-1x"></i>
                        </a>
						<a href="{{route('driver_edit',$driver->id)}}" class="btn btn-icon btn-sm btn-warning">
						<i class="bi bi-pencil-fill fs-1x"></i>
                        </a>
						<a href="{{route('driver_delete',$driver->id)}}" class="btn btn-icon btn-sm btn-danger">
						<i class="bi bi-trash-fill fs-1x"></i>
                        </a>
                        @if(!$driver->Vehicle)
                        <a href="#" class="btn btn-icon btn-sm btn-success">
						<i class="bi bi-link fs-1x"></i>
                        </a>
                        @endif
						
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
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>
@endsection