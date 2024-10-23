@extends('layouts.fleet')
@section('head')
<link rel="stylesheet" type="text/css"
    href="https://cdn.datatables.net/v/bs4/dt-1.12.1/b-2.2.3/b-colvis-2.2.3/b-html5-2.2.3/fh-3.2.4/datatables.min.css" />
@endsection
@section('content')


<div class="card">
    <!--begin::Card header-->
    <div class="card-header border-0 pt-6">
        <!--begin::Card title-->
        <div class="card-title">
            {{__('Orders')}}
        </div>
        <!--begin::Card title-->
        <!--begin::Card toolbar-->
        <div class="card-toolbar">
            <!--begin::Toolbar-->
            <div class="d-flex justify-content-end" data-kt-subscription-table-toolbar="base">
                <!--begin::Add subscription-->

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
                    <th>#</th>
                    <th>{{__('Driver')}}</th>
                    <th>{{__('Office')}}</th>
                    <th>{{__('Vehicle')}}</th>
                    <th>{{__('Customer')}}</th>
                    <th>{{__('Rate')}}</th>
                    <th>{{__('Start date')}}</th>
                    <th>{{__('Actions')}}</th>

                </tr>
            </thead>
            <tbody>
                @foreach($orders as $order)
                <tr>
                    <td>{{$order->order_number}}</td>
                    <td>{{$order->Driver->user->name}}</td>
                    <td>{{$order->Office->name}}</td>
                    <td>{{$order->Vehicle->plate}}</td>
                    <td>{{$order->Customer->user->name}}</td>
                    <td>{{$order->rate}}</td>
                    @php
                    $start_date = explode(" ",$order->created_at);
                    @endphp
                    <td>{{$start_date[0]}}</td>
                    <td>
                        <a href="{{route('order_show',$order->id)}}" class="btn btn-icon btn-sm btn-primary">
                            <i class="bi bi-eye-fill fs-1x"></i>
                        </a>
                        <a target="_blank" href="{{route('order_invoice',$order->id)}}" class="btn btn-icon btn-sm btn-primary">
                            <i class="bi bi-file-earmark-text-fill fs-1x"></i>
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

<script type="text/javascript"
    src="https://cdn.datatables.net/v/bs4/dt-1.12.1/b-2.2.3/b-colvis-2.2.3/b-html5-2.2.3/fh-3.2.4/datatables.min.js">
</script>
<script>
    $(document).ready(function () {
        var table = $('#kt_datatable_example_2').DataTable({
            "dom": 'Bfrtip'
        });
        new $.fn.dataTable.Buttons(table, {
            buttons: [
                'copy', 'excel', 'pdf'
            ]
        });
    });

</script>
@endsection
