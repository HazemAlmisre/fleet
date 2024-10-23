@extends('layouts.fleet')

@section('content')
@section('head')
<link rel="stylesheet" type="text/css"
    href="https://cdn.datatables.net/v/bs4/dt-1.12.1/b-2.2.3/b-colvis-2.2.3/b-html5-2.2.3/fh-3.2.4/datatables.min.css" />
@endsection
@include('superAdmin.office.profileNav')
<div class="card">
    <!--begin::Header-->
    <div class="card-header card-header-stretch">
        <!--begin::Title-->
        <div class="card-title">
            <h3 class="m-0 text-gray-800">{{__('Earnings')}}</h3>
        </div>
        <!--end::Title-->

    </div>
    <!--end::Header-->
    <!--begin::Tab Content-->
    <div id="" class="tab-content">
        <!--begin::Tab panel-->
        <div class="card-body  ">
            <!--begin::Table-->
            <table id="kt_datatable_example_2" class="table table-striped table-row-bordered gy-5 gs-7">
                    <thead>
                        <tr class="fw-bold fs-6 text-gray-800">
                            
                            <th>{{__('Order')}}</th>
                            <th>{{__('Total Price')}}</th>
                            
                            <th>{{__('Actions')}}</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($earnings as $earning)
                        <tr>
                            <td>{{\App\Order::find($earning->order_id)->order_number}}</td>
                            <td>{{$earning->total}}</td>
                          
                            <td>
                                <a href="{{route('order_show',$earning->order_id)}}" class="btn btn-icon btn-sm btn-primary">
                                    <i class="bi bi-eye-fill fs-1x"></i>
                                </a>
                                <a target="_blank" href="{{route('order_invoice',$earning->order_id)}}" class="btn btn-icon btn-sm btn-primary">
                            <i class="bi bi-file-earmark-text-fill fs-1x"></i>
                        </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    
                </table>
                <!--end::Table-->
            
        </div>
        <!--end::Tab panel-->
    </div>
    <!--end::Tab Content-->
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