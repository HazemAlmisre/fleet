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
        <h4 class="mb-1 text-dark">{{__('Vehicle Adding Operation')}}</h4>
        <!--end::Title-->
        <!--begin::Content-->
        <span>{{__('Vehicle Added Successfully')}} </span>
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
            <h3 class="fw-bolder m-0">{{__('Add Vehicle Type')}}</h3>

        </div>
        <!--end::Card title-->
    </div>
    <!--begin::Card header-->
    <!--begin::Content-->
    <div id="kt_account_settings_profile_details" class="collapse show">
        <!--begin::Form-->
        <form id="kt_account_profile_details_form" class="form fv-plugins-bootstrap5 fv-plugins-framework"
            novalidate="novalidate" method="post" action="{{route('office.vehicle_store')}}"
            enctype="multipart/form-data">
            {{csrf_field()}}
            <!--begin::Card body-->
            <div class="card-body border-top p-9">
                <!--begin::Input group-->
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label required fw-bold fs-6">{{__('Vehicle Plate')}}</label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8 fv-row fv-plugins-icon-container">
                        <input type="text" required name="plate" class="form-control form-control-lg form-control-solid"
                            placeholder="Vehicle Plate" value="">
                        @if($errors->has('plate'))
                        <div class="fv-plugins-message-container invalid-feedback">{{ $errors->first('plate') }}</div>
                        @endif
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label required fw-bold fs-6">{{__('Vehicle License Number')}}</label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8 fv-row fv-plugins-icon-container">
                        <input type="text" required name="license_number"
                            class="form-control form-control-lg form-control-solid" placeholder="{{__('Vehicle License Number')}}"
                            value="">
                        @if($errors->has('license_number'))
                        <div class="fv-plugins-message-container invalid-feedback">
                            {{ $errors->first('license_number') }}</div>
                        @endif
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Input group-->

                <!--begin::Input group-->
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label fw-bold fs-6">
                        <span class="required">{{__('Vehicle Type')}}</span>

                    </label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8 fv-row fv-plugins-icon-container">
                        <select name="type_id" required class="form-control form-control-lg form-control-solid" id="">
                            <option value="">{{__('Please Select Vehicle Type')}}</option>
                            @foreach($types as $type)
                            <option value="{{$type->id}}">{{$type->name}} </option>
                            @endforeach
                        </select>
                        @if($errors->has('type_id'))
                        <div class="fv-plugins-message-container invalid-feedback">{{ $errors->first('type_id') }}</div>
                        @endif
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label fw-bold fs-6">
                        <span class="required">{{__('Vehicle Brand')}}</span>

                    </label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8 fv-row fv-plugins-icon-container">
                        <select name="brand_id" required class="form-control form-control-lg form-control-solid" id="">
                            <option value="">{{__('Please Select Vehicle brand')}}</option>
                            @foreach($brands as $brand)
                            <option value="{{$brand->id}}">{{$brand->name}} </option>
                            @endforeach
                        </select>
                        @if($errors->has('brand_id'))
                        <div class="fv-plugins-message-container invalid-feedback">{{ $errors->first('brand_id') }}
                        </div>
                        @endif
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label fw-bold fs-6">
                        <span class="required">{{__('Vehicle Model Year')}}</span>

                    </label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8 fv-row fv-plugins-icon-container">
                        <select name="model_year" required class="form-control form-control-lg form-control-solid"
                            id="">
                            <option value="">{{__('Please Select Vehicle Model Year')}}</option>
                            @for($year = 2000; $year < date("Y"); $year++ ) <option value="{{$year}}">{{$year}}
                                </option>
                                @endfor
                        </select>
                        @if($errors->has('model_year'))
                        <div class="fv-plugins-message-container invalid-feedback">{{ $errors->first('model_year') }}
                        </div>
                        @endif
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label fw-bold fs-6">
                        <span class="required">{{__('Vehicle Model')}}</span>

                    </label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8 fv-row fv-plugins-icon-container">
                        <input type="text" class="form-control form-control-lg form-control-solid" name="model" required>
                        @if($errors->has('model'))
                        <div class="fv-plugins-message-container invalid-feedback">{{ $errors->first('model') }}
                        </div>
                        @endif
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label fw-bold fs-6">
                        <span class="required">{{__('Vehicle Color')}}</span>

                    </label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8 fv-row fv-plugins-icon-container">
                        <input type="text" class="form-control form-control-lg form-control-solid" name="color" required>
                        @if($errors->has('color'))
                        <div class="fv-plugins-message-container invalid-feedback">{{ $errors->first('color') }}
                        </div>
                        @endif
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Input group-->

            </div>
            <!--end::Card body-->
            <!--begin::Actions-->
            <div class="card-footer d-flex justify-content-end py-6 px-9">
                <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">{{__('Add Vehicle')}}</button>
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
