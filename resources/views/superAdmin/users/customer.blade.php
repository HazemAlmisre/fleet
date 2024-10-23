@extends('layouts.fleet')

@section('content')

@include('superAdmin.users.customerNav')
<div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
    <!--begin::Card header-->
    <div class="card-header cursor-pointer">
        <!--begin::Card title-->
        <div class="card-title m-0">
            <h3 class="fw-bolder m-0">{{__('Customer Informations')}}</h3>
        </div>
        <!--end::Card title-->
        <!--begin::Action-->

    </div>
    <!--begin::Card header-->
    <!--begin::Card body-->
    <div class="card-body p-9">
        <!--begin::Row-->
        <div class="row mb-7">
            <!--begin::Label-->
            <label class="col-lg-4 fw-bold text-muted">{{__('Customer Name')}}</label>
            <!--end::Label-->
            <!--begin::Col-->
            <div class="col-lg-8">
                <span class="fw-bolder fs-6 text-gray-800">{{$customer->User['name']}}</span>
            </div>
            <!--end::Col-->
        </div>
        <!--end::Row-->
        <!--begin::Input group-->
        <div class="row mb-7">
            <!--begin::Label-->
            <label class="col-lg-4 fw-bold text-muted">{{__('Phone Number')}}</label>
            <!--end::Label-->
            <!--begin::Col-->
            <div class="col-lg-8 fv-row">
                <span class="fw-bold text-gray-800 fs-6">{{$customer->User['phone']}}</span>
            </div>
            <!--end::Col-->
        </div>
        <!--end::Input group-->


        <!--begin::Input group-->
        <div class="row mb-7">
            <!--begin::Label-->
            <label class="col-lg-4 fw-bold text-muted">{{__('Customer Nation Number')}}</label>
            <!--end::Label-->
            <!--begin::Col-->
            <div class="col-lg-8 fv-row">
                <span class="fw-bold text-gray-800 fs-6">{{$customer->User['nt_number']}}</span>
            </div>
            <!--end::Col-->
        </div>
        <!--end::Input group-->


    </div>
    <!--end::Card body-->
</div>

<div class="card">
    <!--begin::Header-->
    <div class="card-header card-header-stretch">
        <!--begin::Title-->
        <div class="card-title">
            <h3 class="m-0 text-gray-800">{{__('Customer Orders')}}</h3>
        </div>
        <!--end::Title-->
        <!--begin::Toolbar-->

    </div>
    <!--end::Header-->
    <!--begin::Tab Content-->
    <div id="" class="tab-content">
        <!--begin::Tab panel-->
        <div class="card-body p-0 ">
            <div class="table-responsive">
                <table id="kt_datatable_example_2" class="table table-striped table-row-bordered gy-5 gs-7">
                    <thead>
                        <tr class="fw-bold fs-6 text-gray-800">
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
                        @foreach($customer->Orders as $order)
                        <tr>  
                            <td>{{$order->Driver->user->name}}</td>
                            <td>{{$order->Office->name}}</td>
                            <td>{{$order->Vehicle->plate}}</td>
                            <td>{{$order->Customer->User['name']}}</td>

                            <td>{{$order->rate}}</td>

                            @php
                            $start_date = explode(" ",$order->created_at);
                            @endphp
                            <td>{{$start_date[0]}}</td>
                            <td>
                                <a href="{{route('order_show',$order->id)}}" class="btn btn-icon btn-sm btn-primary">
                                    <i class="bi bi-eye-fill fs-1x"></i>
                                </a>
                            </td>

                        </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>
        <!--end::Tab panel-->
    </div>
    <!--end::Tab Content-->
</div>


@endsection