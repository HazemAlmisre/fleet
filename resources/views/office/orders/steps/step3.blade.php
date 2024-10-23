@extends('layouts.fleet')
@php 
foreach ($types as $type) {
            $vehicle_types[] = $type->load('vehicles','vehicles.driver.user','vehicles.vehicleType','vehicles.vehicleBrand');
           
        }
       foreach ($vehicle_types as $vehicle_type) {
           $available_drivers[$vehicle_type->id] =[] ; 
           foreach ($vehicle_type['vehicles'] as $vehicle) {

              $driver =  $vehicle->driver;
                if($vehicle->driver){
                    $current = "{".$driver->current_lat.",".$driver->current_lng."}";
                    $url = "https://maps.googleapis.com/maps/api/distancematrix/json?destinations={".$customer_lat.",".$customer_lng."}&origins=$current&key=AIzaSyCItcnWaO0HeV8oEbQNsBmLcRPv4wEgwoE";
                    $response = Http::get($url);
                    $j_res = $response->body();
                    
                   $distance_v =  2000;
                   $distance_t =  "2KM";
                   $duration_v =  10000;
                   $duration_t =  "10MIN";
                   $km_price = 100;
                   $opening_price = 1000;
                   $available_drivers[$vehicle_type->id] = ['km_price'=>$km_price,'opening_price'=>$opening_price,'distance_v'=>$distance_v,'distance_t'=>$distance_t,'duration_v'=>$duration_v,'duration_t'=>$duration_t,'driver'=>$driver->load('vehicle','user','vehicle.vehicleType','vehicle.vehicleBrand')];
                }
     
             
            }
            
        }
        array_multisort(array_column($available_drivers, 'duration_v'), SORT_ASC, $available_drivers);
        
@endphp
@section('content')
<style>
    #map_destination {
    width: 500px;
    height: 500px;
}
#map_pickup {
    width: 500px;
    height: 500px;
}
/* #current {
    padding-top: 25px;
} */
</style>

<!--begin::Stepper-->
<div class="stepper stepper-pills stepper-column d-flex flex-column flex-xl-row flex-row-fluid" id="kt_create_account_stepper">
									<!--begin::Aside-->
									<div class="card d-flex justify-content-center justify-content-xl-start flex-row-auto w-100 w-xl-300px w-xxl-400px me-9">
										<!--begin::Wrapper-->
										<div class="card-body px-6 px-lg-10 px-xxl-15 py-20">
										@include('office.orders.sideBar')
										</div>
										<!--end::Wrapper-->
									</div>
									<!--begin::Aside-->
									<!--begin::Content-->
									<div class="card d-flex flex-row-fluid flex-center">
										<!--begin::Form-->
										<form class="card-body py-20 w-100 w-xl-700px px-9" novalidate="novalidate" id="kt_create_account_form" action="{{route('office.order_step_store')}}" method="POST">
                                            {{csrf_field()}}
                                            <input type="hidden" name="order_type" value="{{$data['order_type']}}">
                                         
											
											<div data-kt-stepper-element="content" class="current">
												<!--begin::Wrapper-->
												<div class="w-100">
													<!--begin::Heading-->
													<div class="pb-10 pb-lg-12">
														<!--begin::Title-->
														<h2 class="fw-bolder text-dark">Travel Details</h2>
														<!--end::Title-->
														<!--begin::Notice-->
														<div class="text-muted fw-bold fs-6">If you need more info, please check out
														<a href="#" class="link-primary fw-bolder">Help Page</a>.</div>
														<!--end::Notice-->
													</div>
													<!--end::Heading-->
													 <!--begin::Input group-->
                                                     <div class="row mb-6">
                                                    <!--begin::Label-->
                                                    <label class="col-lg-4 col-form-label fw-bold fs-6">
                                                        <span class="required">Driver</span>

                                                    </label>
                                                    <!--end::Label-->
                                                    <!--begin::Col-->
                                                    <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                                        <select name="driver_id" required class="form-control form-control-lg form-control-solid" id="">
                                                            <option value="">Please Select Driver</option>
                                                                @foreach($available_drivers as $driver)
                                                             
                                                             <option name="driver_id" value="{'driver_id':{{$driver['driver']->id}},'est_time':{{$driver['duration_v']}},'est_distance':{{$driver['distance_v']}}}">{{$driver['driver']->user->name}} {{$driver['distance_t']}} / {{$driver['duration_t']}} {{$driver['driver']->vehicle->vehicleType->name}}</option> 
                                                           @endforeach
                                                        </select>
                                                        @if($errors->has('type_id'))
                                                        <div class="fv-plugins-message-container invalid-feedback">{{ $errors->first('type_id') }}</div>
                                                        @endif
                                                    </div>
                                                    <!--end::Col-->
                                                </div>
                                                <!--end::Input group-->
                                                    
                                                
													
												</div>
                                                    <!--end::Wrapper-->
											</div>
											<div class="d-flex flex-stack pt-10">
												
												<!--begin::Wrapper-->
												<div>
													
													<button type="submit" class="btn btn-lg btn-primary" data-kt-stepper-action="next">Continue
													<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
													<span class="svg-icon svg-icon-4 ms-1 me-0">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black"></rect>
															<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black"></path>
														</svg>
													</span>
													<!--end::Svg Icon--></button>
												</div>
												<!--end::Wrapper-->
											</div>
										</form>
										<!--end::Form-->
									</div>
									<!--end::Content-->
								</div>
								<!--end::Stepper-->


@endsection
@section('scripts')
<script src="https://maps.google.com/maps/api/js?sensor=false&.js&key=AIzaSyCItcnWaO0HeV8oEbQNsBmLcRPv4wEgwoE"></script>
<script>

var map_destination = new google.maps.Map(document.getElementById('map_destination'), {
    zoom: 14,
    center: new google.maps.LatLng(41.064344, 28.868328),
    mapTypeId: google.maps.MapTypeId.ROADMAP
});
var map_pickup = new google.maps.Map(document.getElementById('map_pickup'), {
    zoom: 14,
    center: new google.maps.LatLng(41.064344, 28.868328),
    mapTypeId: google.maps.MapTypeId.ROADMAP
});

var myMarker = new google.maps.Marker({
    position: new google.maps.LatLng(41.064344, 28.868328),
    draggable: true
});
var myMarker1 = new google.maps.Marker({
    position: new google.maps.LatLng(41.064344, 28.868328),
    draggable: true
});

google.maps.event.addListener(myMarker, 'dragend', function (evt) {
    // document.getElementById('current').innerHTML = '<p>Marker dropped: Current Lat: ' + evt.latLng.lat().toFixed(3) + ' Current Lng: ' + evt.latLng.lng().toFixed(3) + '</p>';
    document.getElementById('destination').value =  evt.latLng.lat() +","+evt.latLng.lng() ;
    console.log(evt.latLng.lat() +","+evt.latLng.lng());
});
google.maps.event.addListener(myMarker1, 'dragend', function (evt) {
    // document.getElementById('current').innerHTML = '<p>Marker dropped: Current Lat: ' + evt.latLng.lat().toFixed(3) + ' Current Lng: ' + evt.latLng.lng().toFixed(3) + '</p>';
    document.getElementById('pickup').value =  evt.latLng.lat() +","+evt.latLng.lng() ;
    console.log(evt.latLng.lat() +","+evt.latLng.lng());
});

google.maps.event.addListener(myMarker, 'dragstart', function (evt) {
    document.getElementById('pickup').value =  evt.latLng.lat() +","+evt.latLng.lng() ;
    console.log(evt.latLng.lat() +","+evt.latLng.lng());
});
google.maps.event.addListener(myMarker1, 'dragstart', function (evt) {
    document.getElementById('destination').value =  evt.latLng.lat() +","+evt.latLng.lng() ;
    console.log(evt.latLng.lat() +","+evt.latLng.lng());
});

map_destination.setCenter(myMarker.position);
map_pickup.setCenter(myMarker1.position);
myMarker.setMap(map_destination);
myMarker1.setMap(map_pickup);
</script>

@endsection