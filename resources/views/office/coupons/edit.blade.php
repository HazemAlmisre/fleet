@extends('layouts.fleet')

@section('content')
@if(session('msg'))
<!--begin::Alert-->
<div class="alert alert-primary">
    <!--begin::Icon-->

    <!--end::Icon-->
    <!--begin::Wrapper-->
    <div class="d-flex flex-column">
        <!--begin::Title-->
        <h4 class="mb-1 text-dark">{{__('Coupon Editing Operation')}}</h4>
        <!--end::Title-->
        <!--begin::Content-->
        <span> {{__('Coupon edited Successfully')}} </span>
        <!--end::Content-->
    </div>
    <!--end::Wrapper-->
</div>
<!--end::Alert-->
@endif
<div class="card mb-5 mb-xl-10">
    <!--begin::Card header-->
    <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
        data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
        <!--begin::Card title-->
        <div class="card-title m-0">
            <h3 class="fw-bolder m-0"> {{__('Coupon Update')}} </h3>
        </div>
        <!--end::Card title-->
    </div>
    <!--begin::Card header-->
    <!--begin::Content-->
    <div id="kt_account_settings_profile_details" class="collapse show">
        <!--begin::Form-->
        <form id="kt_account_profile_details_form" class="form fv-plugins-bootstrap5 fv-plugins-framework"
            novalidate="novalidate" method="post" action="{{route('office.coupon_update',encrypt($coupon->id))}}"
            enctype="multipart/form-data">
            {{csrf_field()}}
            <!--begin::Card body-->
            <div class="card-body border-top p-9">

                <!--begin::Input group-->
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label required fw-bold fs-6"> {{__('Title')}} </label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8 fv-row fv-plugins-icon-container">
                        <input type="text" name="title" class="form-control form-control-lg form-control-solid" required
                            placeholder="Title" value="{{$coupon->name}}">
							@if($errors->has('title'))
                            	<div class="fv-plugins-message-container invalid-feedback">{{ $errors->first('title') }}</div>
							@endif
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label fw-bold fs-6">
                        <span class="required"> {{__('Description')}} </span>

                    </label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8 fv-row fv-plugins-icon-container">
                        <textarea class="form-control form-control-lg form-control-solid" name="description" required
                            id="" cols="30" rows="3">{{$coupon->description}}</textarea>
							@if($errors->has('description'))
                            	<div class="fv-plugins-message-container invalid-feedback">{{ $errors->first('description') }}</div>
							@endif
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Input group-->
				<!--begin::Input group-->
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label required fw-bold fs-6"> {{__('Coupon Code')}} </label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8 fv-row fv-plugins-icon-container">
                        <input type="text" name="coupon_code" class="form-control form-control-lg form-control-solid" required
                            placeholder="Coupon Code" value="{{$coupon->coupon_code}}" disabled>
							@if($errors->has('coupon_code'))
                            	<div class="fv-plugins-message-container invalid-feedback">{{ $errors->first('coupon_code') }}</div>
							@endif
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label required fw-bold fs-6"> {{__('Is Active ?')}} </label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8 fv-row fv-plugins-icon-container">
                        <div class="form-check form-switch form-check-custom form-check-solid">
                            <input class="form-check-input" @if($coupon->is_active) checked @endif type="checkbox" required name="is_active" value="true"
                                id="is_active" />
                            <label class="form-check-label" for="is_active">
                                Active
                            </label>
                        </div>
                        @if($errors->has('is_active'))
                            	<div class="fv-plugins-message-container invalid-feedback">{{ $errors->first('is_active') }}</div>
							@endif
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label fw-bold fs-6">
                        <span class="required"> {{__('Discount Type')}} </span>

                    </label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8 fv-row fv-plugins-icon-container">
                        <select name="dicount_type" required class="form-control form-control-lg form-control-solid" id="">
                            <option @if($coupon->discount_type == 0) selected @endif value="0"> {{__('percent %')}} </option>
                            <option @if($coupon->discount_type == 1) selected @endif value="1"> {{__('number')}} </option>
                        </select>
                    </div>
					@if($errors->has('discount_type'))
                            	<div class="fv-plugins-message-container invalid-feedback">{{ $errors->first('discount_type') }}</div>
							@endif
                    <!--end::Col-->
                </div>
                <!--end::Input group-->
				<!--begin::Input group-->
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label required fw-bold fs-6"> {{__('Discount Value')}} </label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8 fv-row fv-plugins-icon-container">
                        <input type="number" name="discount_value" class="form-control form-control-lg form-control-solid"
                            required placeholder="Discount Value" value="{{$coupon->discount_value}}">
							@if($errors->has('discount_value'))
                            	<div class="fv-plugins-message-container invalid-feedback">{{ $errors->first('discount_value') }}</div>
							@endif
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Input group-->
            </div>
            <!--end::Card body-->
            <!--begin::Actions-->
            <div class="card-footer d-flex justify-content-end py-6 px-9">
                <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit"> {{__('Update Coupon')}} </button>
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
