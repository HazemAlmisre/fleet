@extends('layouts.fleet')

@section('content')

<div class="card mb-5 mb-xl-10">
    <!--begin::Card header-->
    <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
        data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
        <!--begin::Card title-->
        <div class="card-title m-0">
            <h3 class="fw-bolder m-0">{{__('Office Details')}}</h3>
        </div>
        <!--end::Card title-->
    </div>
    <!--begin::Card header-->
    <!--begin::Content-->
    <div id="kt_account_settings_profile_details" class="collapse show">
        <!--begin::Form-->
        <form id="kt_account_profile_details_form" class="form fv-plugins-bootstrap5 fv-plugins-framework"
            novalidate="novalidate" method="post" action="{{route('office_reset_post',$office->id)}}"
            enctype="multipart/form-data">
            {{csrf_field()}}
            <!--begin::Card body-->
            <div class="card-body border-top p-9">
            
                
                <!--begin::Input group-->
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label required fw-bold fs-6">{{__('Orders Limit ')}}</label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8 fv-row fv-plugins-icon-container">
                        <input type="number" name="limit_orders" class="form-control form-control-lg form-control-solid"
                            placeholder="Orders Limit" value="{{$office->limit_orders}}">
                        <div class="fv-plugins-message-container invalid-feedback"></div>
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label required fw-bold fs-6">{{__('Money Limit')}}</label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8 fv-row fv-plugins-icon-container">
                        <input type="number" name="limit_money" class="form-control form-control-lg form-control-solid"
                            placeholder="Money Limit" value="{{$office->limit_money}}">
                        <div class="fv-plugins-message-container invalid-feedback"></div>
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Input group-->
          
            </div>
            <!--end::Card body-->
            <!--begin::Actions-->
            <div class="card-footer d-flex justify-content-end py-6 px-9">
                <button type="submit" class="btn btn-primary"
                    id="kt_account_profile_details_submit">{{__('Update Office')}}</button>
            </div>
            <!--end::Actions-->
            <input type="hidden">
            <div></div>
        </form>
        <!--end::Form-->
    </div>
    <!--end::Content-->
</div>



@endsection