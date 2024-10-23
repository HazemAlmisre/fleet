@extends('layouts.fleet')

@section('content')


<div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
    <!--begin::Card header-->
    <div class="card-header cursor-pointer">
        <!--begin::Card title-->
        <div class="card-title m-0">
            <h3 class="fw-bolder m-0">General Settings</h3>
        </div>
        <!--end::Card title-->
        <!--begin::Action-->
       
    </div>
    <!--begin::Card header-->
    <form action="{{route('website_settings_update')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
    <!--begin::Card body-->
    <div class="card-body p-9">
      
        <!--begin::Row-->
        <div class="row mb-7">
            <!--begin::Label-->
            <label class="col-lg-4 fw-bold text-muted">Website Logo (164 * 26)</label>
            <!--end::Label-->
            <!--begin::Col-->
            <div class="col-lg-8">
            <input type="file"  name="website_logo" class="form-control form-control-lg form-control-solid"  >
            </div>
            <!--end::Col-->
        </div>
        <!--end::Row-->
        <!--begin::Row-->
        <div class="row mb-7">
            <!--begin::Label-->
            <label class="col-lg-4 fw-bold text-muted">Admin Logo (269 * 56)</label>
            <!--end::Label-->
            <!--begin::Col-->
            <div class="col-lg-8">
            <input type="file"  name="admin_logo" class="form-control form-control-lg form-control-solid"  >
            </div>
            <!--end::Col-->
        </div>
        <!--end::Row-->
        <!--begin::Row-->
        <div class="row mb-7">
            <!--begin::Label-->
            <label class="col-lg-4 fw-bold text-muted">Favicon</label>
            <!--end::Label-->
            <!--begin::Col-->
            <div class="col-lg-8">
            <input type="file"  name="favicon" class="form-control form-control-lg form-control-solid" >
            </div>
            <!--end::Col-->
        </div>
        <!--end::Row-->
        <!--begin::Row-->
        <div class="row mb-7">
            <!--begin::Label-->
            <label class="col-lg-4 fw-bold text-muted">Website Name</label>
            <!--end::Label-->
            <!--begin::Col-->
            <div class="col-lg-8">
            <input type="text" required name="website_name" class="form-control form-control-lg form-control-solid" placeholder="website_name" value="{{$settings->website_name}}">
            </div>
            <!--end::Col-->
        </div>
        <!--end::Row-->
         <!--begin::Row-->
         <div class="row mb-7">
            <!--begin::Label-->
            <label class="col-lg-4 fw-bold text-muted">Website Slug</label>
            <!--end::Label-->
            <!--begin::Col-->
            <div class="col-lg-8">
            <input type="text" required name="website_slug" class="form-control form-control-lg form-control-solid" placeholder="website_slug" value="{{$settings->website_slug}}">
            </div>
            <!--end::Col-->
        </div>
        <!--end::Row-->
         <!--begin::Row-->
         <div class="row mb-7">
            <!--begin::Label-->
            <label class="col-lg-4 fw-bold text-muted">Contact Phone</label>
            <!--end::Label-->
            <!--begin::Col-->
            <div class="col-lg-8">
            <input type="text" required name="phone" class="form-control form-control-lg form-control-solid" placeholder="phone" value="{{$settings->phone}}">
            </div>
            <!--end::Col-->
        </div>
        <!--end::Row-->
         <!--begin::Row-->
         <div class="row mb-7">
            <!--begin::Label-->
            <label class="col-lg-4 fw-bold text-muted">Contact Email</label>
            <!--end::Label-->
            <!--begin::Col-->
            <div class="col-lg-8">
            <input type="text" required name="email" class="form-control form-control-lg form-control-solid" placeholder="website_name" value="{{$settings->email}}">
            </div>
            <!--end::Col-->
        </div>
        <!--end::Row-->
         <!--begin::Row-->
         <div class="row mb-7">
            <!--begin::Label-->
            <label class="col-lg-4 fw-bold text-muted">Address</label>
            <!--end::Label-->
            <!--begin::Col-->
            <div class="col-lg-8">
            <input type="text" required name="address" class="form-control form-control-lg form-control-solid" placeholder="address" value="{{$settings->address}}">
            </div>
            <!--end::Col-->
        </div>
        <!--end::Row-->
         <!--begin::Row-->
         <div class="row mb-7">
            <!--begin::Label-->
            <label class="col-lg-4 fw-bold text-muted">Facebook</label>
            <!--end::Label-->
            <!--begin::Col-->
            <div class="col-lg-8">
            <input type="text" required name="social_fb" class="form-control form-control-lg form-control-solid" placeholder="social_fb" value="{{$settings->social_fb}}">
            </div>
            <!--end::Col-->
        </div>
        <!--end::Row-->
         <!--begin::Row-->
         <div class="row mb-7">
            <!--begin::Label-->
            <label class="col-lg-4 fw-bold text-muted">Instagram</label>
            <!--end::Label-->
            <!--begin::Col-->
            <div class="col-lg-8">
            <input type="text" required name="social_ig" class="form-control form-control-lg form-control-solid" placeholder="social_ig" value="{{$settings->social_ig}}">
            </div>
            <!--end::Col-->
        </div>
        <!--end::Row-->
         <!--begin::Row-->
         <div class="row mb-7">
            <!--begin::Label-->
            <label class="col-lg-4 fw-bold text-muted">Twitter</label>
            <!--end::Label-->
            <!--begin::Col-->
            <div class="col-lg-8">
            <input type="text" required name="social_tw" class="form-control form-control-lg form-control-solid" placeholder="social_tw" value="{{$settings->social_tw}}">
            </div>
            <!--end::Col-->
        </div>
        <!--end::Row-->
     
   
    </div>
    <!--end::Card body-->
    <div class="card-footer d-flex justify-content-end py-6 px-9">
												<button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">Update Website Settings </button>
											</div>
                                            </form>
</div>


@endsection
