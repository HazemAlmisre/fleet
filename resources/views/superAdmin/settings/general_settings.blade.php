@extends('layouts.fleet')

@section('content')


<div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
    <!--begin::Card header-->
    <div class="card-header cursor-pointer">
        <!--begin::Card title-->
        <div class="card-title m-0">
            <h3 class="fw-bolder m-0">{{__('General Settings')}}</h3>
        </div>
        <!--end::Card title-->
        <!--begin::Action-->

    </div>
    <!--begin::Card header-->
    <form action="{{route('general_settings_update')}}" method="post">
        {{csrf_field()}}
    <!--begin::Card body-->
    <div class="card-body p-9">
        @foreach($settings as $setting)
        <!--begin::Row-->
        <div class="row mb-7">
            <!--begin::Label-->
            <label class="col-lg-4 fw-bold text-muted">{{$setting->label}} </label>
            <!--end::Label-->
            <!--begin::Col-->
            <input type="hidden" name="label" value="{{ $setting->label }}">
            <input type="hidden" name="id" value="{{ $setting->id }}">
            <div class="col-lg-8">
            <input type="text" required name="{{$setting->key}}" class="form-control form-control-lg form-control-solid" placeholder="Full name" value="{{$setting->text}}">
            </div>
            <!--end::Col-->
        </div>
        <!--end::Row-->
        @endforeach

    </div>
    <!--end::Card body-->
    <div class="card-footer d-flex justify-content-end py-6 px-9">
												<button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">{{__('Update General Settings')}} </button>
											</div>
                                            </form>
</div>


@endsection
