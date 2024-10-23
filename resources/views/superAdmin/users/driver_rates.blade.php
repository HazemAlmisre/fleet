@extends('layouts.fleet')

@section('content')

@include('superAdmin.users.driverNav')
<div class="card">
    <!--begin::Header-->
    <div class="card-header card-header-stretch">
        <!--begin::Title-->
        <div class="card-title">
            <h3 class="m-0 text-gray-800">Rates</h3>
        </div>
        <!--end::Title-->
        <!--begin::Toolbar-->
        <div class="card-toolbar m-0">
            <!--begin::Tab nav-->

            <!--end::Tab nav-->
        </div>
        <!--end::Toolbar-->
    </div>
    <!--end::Header-->
    <!--begin::Tab Content-->
    <div id="" class="tab-content">
        <!--begin::Tab panel-->
        <div class="card-body ">
            <!--begin::Table-->
            <table id="kt_datatable_example_2" class="table table-striped table-row-bordered gy-5 gs-7">
                <thead>
                    <tr class="fw-bold fs-6 text-gray-800">
                        <th>{{__('Order ID')}}</th>
                        <th>{{__('Rate')}}</th>
                        <th>{{__('Customer Note')}}</th>
                        <th>{{__('Customer')}}</th>
                        <th>{{__('Rate Date')}}</th>


                    </tr>
                </thead>
                <tbody>
                    @foreach($driver->Orders as $order)
                    <tr>
                        <td>{{$order->id}}</td>
                        <td>
                            <div class="rating">
                                @for($x = 0; $x <= 4; $x++) <div
                                    class="rating-label me-2 @if($x < $order->rate)  checked @endif">
                                    <i class="bi bi-star fs-1"></i>
                            </div>
                            @endfor

                        </td>
                        <td>{{$order->note}}</td>
                        <td>{{$order->Customer->user->name}}</td>
                        <td>{{$order->rate_date}}</td>

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
