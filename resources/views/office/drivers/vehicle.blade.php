@extends('layouts.fleet')

@section('content')

@include('office.drivers.driverNav')
<div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
    <!--begin::Card header-->
    <div class="card-header cursor-pointer">
        <!--begin::Card title-->
        <div class="card-title m-0">
            <h3 class="fw-bolder m-0">{{__('Vehicle Details')}} </h3>
        </div>
        <!--end::Card title-->
        <!--begin::Action-->
        <a href="{{route('office.vehicle_edit',encrypt($driver->Vehicle->id))}}" class="btn btn-primary align-self-center"> {{__('Edit Vehicle')}} </a>
        <!--end::Action-->
    </div>
    <!--begin::Card header-->
    <!--begin::Card body-->
    <div class="card-body p-9">
        <!--begin::Row-->
        <div class="row mb-7">
            <!--begin::Label-->
            <label class="col-lg-4 fw-bold text-muted"> {{__('Plate')}} </label>
            <!--end::Label-->
            <!--begin::Col-->
            <div class="col-lg-8">
                <span class="fw-bolder fs-6 text-gray-800">{{$driver->Vehicle->plate}}</span>
            </div>
            <!--end::Col-->
        </div>
        <!--end::Row-->
        <!--begin::Input group-->
        <div class="row mb-7">
            <!--begin::Label-->
            <label class="col-lg-4 fw-bold text-muted"> {{__('Vehicle License Number')}} </label>
            <!--end::Label-->
            <!--begin::Col-->
            <div class="col-lg-8 fv-row">
                <span class="fw-bold text-gray-800 fs-6">{{$driver->Vehicle->license_number}}</span>
            </div>
            <!--end::Col-->
        </div>
        <!--end::Input group-->
        <!--begin::Input group-->
        <div class="row mb-7">
            <!--begin::Label-->
            <label class="col-lg-4 fw-bold text-muted"> {{__('Vehicle Brand')}} </label>
            <!--end::Label-->
            <!--begin::Col-->
            <div class="col-lg-8 fv-row">
                <span class="fw-bold text-gray-800 fs-6">{{$driver->Vehicle->VehicleBrand->name}}</span>
            </div>
            <!--end::Col-->
        </div>
        <!--end::Input group-->
        <!--begin::Input group-->
        <div class="row mb-7">
            <!--begin::Label-->
            <label class="col-lg-4 fw-bold text-muted"> {{__('Vehicle Type')}} </label>
            <!--end::Label-->
            <!--begin::Col-->
            <div class="col-lg-8 fv-row">
                <span class="fw-bold text-gray-800 fs-6">{{$driver->Vehicle->VehicleType->name}}</span>
            </div>
            <!--end::Col-->
        </div>
        <!--end::Input group-->
        <!--begin::Input group-->
        <div class="row mb-7">
            <!--begin::Label-->
            <label class="col-lg-4 fw-bold text-muted"> {{__('Vehicle Model Year')}} </label>
            <!--end::Label-->
            <!--begin::Col-->
            <div class="col-lg-8 fv-row">
                <span class="fw-bold text-gray-800 fs-6">{{$driver->Vehicle->model_year}}</span>
            </div>
            <!--end::Col-->
        </div>
        <!--end::Input group-->
        <!--begin::Input group-->
        <div class="row mb-7">
            <!--begin::Label-->
            <label class="col-lg-4 fw-bold text-muted"> {{__('Vehicle Owner Office')}} </label>
            <!--end::Label-->
            <!--begin::Col-->
            <div class="col-lg-8 fv-row">
                <span class="fw-bold text-gray-800 fs-6">{{$driver->Vehicle->Office->name}}</span>
            </div>
            <!--end::Col-->
        </div>
        <!--end::Input group-->

    </div>
    <!--end::Card body-->
</div>


@endsection
@section('scripts')
<script>
    $(document).ready(function(){
	
        $("#assignVehicleToDriverButton").click(function(){
            $.ajax({
                "url":"{{route('office.driver_a_modal_cont',encrypt($driver->id))}}",
                success:function(res){
                    $("#assignVehicleToDriverModalBody").html(res);
                },
                error:function(error){
                    console.log(error.responseJSON.message);
                }
            });
        });
    });
</script>
<script>



</script>
@endsection