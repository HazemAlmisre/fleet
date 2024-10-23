@extends('layouts.fleet')

@section('content')
<style>
    #map_canvas {
    width: 980px;
    height: 500px;
}
#current {
    padding-top: 25px;
}
</style>
<div class="card mb-5 mb-xl-10">
									<!--begin::Card header-->
									<div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
										<!--begin::Card title-->
										<div class="card-title m-0">
											<h3 class="fw-bolder m-0">{{__('Travel Mode Edit')}}</h3>
										</div>
										<!--end::Card title-->
									</div>
									<!--begin::Card header-->
									<!--begin::Content-->
									<div id="kt_account_settings_profile_details" class="collapse show">
										<!--begin::Form-->
										<form id="kt_account_profile_details_form" class="form fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate" method="post" action="{{route('office.travel_mode_update',$travelMode->id)}}" enctype="multipart/form-data">
                                            {{csrf_field()}}
											<!--begin::Card body-->
											<div class="card-body border-top p-9">
												<!--begin::Input group-->
												<div class="row mb-6">
													<!--begin::Label-->
													<label class="col-lg-4 col-form-label fw-bold fs-6">{{__('Icon')}}</label>
													<!--end::Label-->
													<!--begin::Col-->
													<div class="col-lg-8">
														<!--begin::Image input-->
														<div class="image-input image-input-outline image-input-empty" data-kt-image-input="true" style="background-image: url('{{asset($travelMode->icon)}}')">
															<!--begin::Preview existing avatar-->
															<div class="image-input-wrapper w-125px h-125px" style="background-image:none"></div>
															<!--end::Preview existing avatar-->
															<!--begin::Label-->
															<label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="" data-bs-original-title="Change avatar">
																<i class="bi bi-pencil-fill fs-7"></i>
																<!--begin::Inputs-->
																<input type="file" name="avatar" accept=".png, .jpg, .jpeg">
																<input type="hidden" name="avatar_remove">
																<!--end::Inputs-->
															</label>
															<!--end::Label-->
															<!--begin::Cancel-->
															<span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="" data-bs-original-title="Cancel avatar">
																<i class="bi bi-x fs-2"></i>
															</span>
															<!--end::Cancel-->
															<!--begin::Remove-->
															<span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="" data-bs-original-title="Remove avatar">
																<i class="bi bi-x fs-2"></i>
															</span>
															<!--end::Remove-->
														</div>
														<!--end::Image input-->
														<!--begin::Hint-->
														<div class="form-text">{{__('Allowed file types: png, jpg, jpeg.')}}</div>
														<!--end::Hint-->
													</div>
													<!--end::Col-->
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="row mb-6">
													<!--begin::Label-->
													<label class="col-lg-4 col-form-label required fw-bold fs-6">{{__('Title')}}</label>
													<!--end::Label-->
													<!--begin::Col-->
													<div class="col-lg-8 fv-row fv-plugins-icon-container">
														<input type="text" name="title" class="form-control form-control-lg form-control-solid" required placeholder="Title" value="{{$travelMode->title}}">
													<div class="fv-plugins-message-container invalid-feedback"></div></div>
													<!--end::Col-->
												</div>
												<!--end::Input group-->
												
												
											
												<!--begin::Input group-->
												<div class="row mb-6">
													<!--begin::Label-->
													<label class="col-lg-4 col-form-label fw-bold fs-6">
														<span class="required">{{__('Description')}}</span>
														
													</label>
													<!--end::Label-->
													<!--begin::Col-->
													<div class="col-lg-8 fv-row fv-plugins-icon-container">
														<textarea class="form-control form-control-lg form-control-solid" name="description" required id="" cols="30" rows="3">
                                                        {{$travelMode->description}}
                                                        </textarea>
													<div class="fv-plugins-message-container invalid-feedback"></div></div>
													<!--end::Col-->
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="row mb-6">
													<!--begin::Label-->
													<label class="col-lg-4 col-form-label required fw-bold fs-6">{{__('Total Price')}}</label>
													<!--end::Label-->
													<!--begin::Col-->
													<div class="col-lg-8 fv-row fv-plugins-icon-container">
														<input type="number" name="price" class="form-control form-control-lg form-control-solid" required placeholder="Price" value="{{$travelMode->price}}">
													<div class="fv-plugins-message-container invalid-feedback"></div></div>
													<!--end::Col-->
												</div>
												<!--end::Input group-->
                                                	<!--begin::Input group-->
												<div class="row mb-6">
													<!--begin::Label-->
													<label class="col-lg-4 col-form-label required fw-bold fs-6">{{__('Is Active ?')}}</label>
													<!--end::Label-->
													<!--begin::Col-->
													<div class="col-lg-8 fv-row fv-plugins-icon-container">
                                                    <div class="form-check form-switch form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" required name="is_active"@if($travelMode->is_active) checked  @endif value="true" id="is_active"/>
                                                    <label class="form-check-label" for="is_active">
                                                        {{__('Active')}}
                                                    </label>
                                                </div>  
													<div class="fv-plugins-message-container invalid-feedback"></div></div>
													<!--end::Col-->
												</div>
												<!--end::Input group-->
                                                <!--begin::Input group-->
												<div class="row mb-6">
													<!--begin::Label-->
													<label class="col-lg-4 col-form-label required fw-bold fs-6">{{__('Destionation')}}</label>
													<!--end::Label-->
													<!--begin::Col-->
													<div class="col-lg-8 fv-row fv-plugins-icon-container">
                                                    <div class="form-check form-switch form-check-custom form-check-solid">
                                                        <div id='map_canvas'></div>
                                                        <input type="text" id="current" hidden  value="{{$travelMode->destination_lat}},{{$travelMode->destination_lng}}" name="current" required>
                                                    </div>
                                                    </div>
													<!--end::Col-->
												</div>
												<!--end::Input group-->

												
                                                              
												
											</div>
											<!--end::Card body-->
											<!--begin::Actions-->
											<div class="card-footer d-flex justify-content-end py-6 px-9">
												<button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">{{__('Update Travel Mode')}}</button>
											</div>
											<!--end::Actions-->
										<input type="hidden"><div></div></form>
										<!--end::Form-->
									</div>
									<!--end::Content-->
								</div>



@endsection

@section('scripts')
<script src="https://maps.google.com/maps/api/js?sensor=false&.js&key=AIzaSyCItcnWaO0HeV8oEbQNsBmLcRPv4wEgwoE"></script>
<script>

var map = new google.maps.Map(document.getElementById('map_canvas'), {
    zoom: 14,
    center: new google.maps.LatLng({{$travelMode->destination_lat}}, {{$travelMode->destination_lng}}),
    mapTypeId: google.maps.MapTypeId.ROADMAP
});

var myMarker = new google.maps.Marker({
    position: new google.maps.LatLng({{$travelMode->destination_lat}}, {{$travelMode->destination_lng}}),
    draggable: true
});

google.maps.event.addListener(myMarker, 'dragend', function (evt) {
    // document.getElementById('current').innerHTML = '<p>Marker dropped: Current Lat: ' + evt.latLng.lat().toFixed(3) + ' Current Lng: ' + evt.latLng.lng().toFixed(3) + '</p>';
    document.getElementById('current').value =  evt.latLng.lat() +","+evt.latLng.lng() ;
    console.log(evt.latLng.lat() +","+evt.latLng.lng());
});

google.maps.event.addListener(myMarker, 'dragstart', function (evt) {
    document.getElementById('current').value =  evt.latLng.lat() +","+evt.latLng.lng() ;
    console.log(evt.latLng.lat() +","+evt.latLng.lng());
});

map.setCenter(myMarker.position);
myMarker.setMap(map);
</script>

@endsection


