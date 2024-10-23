@extends('layouts.fleet')
@section('head')
<script src="https://maps.google.com/maps/api/js?key=AIzaSyABepVYSCPvi3GPv_3lLyB95GgR7YxgdJk" type="text/javascript">
</script>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
     integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI="
     crossorigin=""/>
<style>
    .map-cont {
        position: relative;
        width: 600px;
        height: 450px;
    }

    #map {
width: 100%;
height: 300px;
}
#map2 { width: 100%;
height: 300px; }
</style>
@endsection
@section('content')

@include('superAdmin.office.profileNav')
<div class="col-md-12">
	<div class="row">
		<div class="col-md-6">
		<div class="card">
    <!--begin::Header-->
    <div class="card-header card-header-stretch">
        <!--begin::Title-->
        <div class="card-title">
            <h3 class="m-0 text-gray-800">{{__('Drivers Map')}}</h3>
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
        <div class="card-body p-0 ">
            <div class="row">
                <div class="col-xs-6">
                
        <div id="map2" style="width: 100%;
height:450px"></div>
                    


                </div>
            </div>
        </div>
        <!--end::Tab panel-->
    </div>
    <!--end::Tab Content-->
</div>
		</div>
		<div class="col-md-6">

		<div class="card">
    <!--begin::Header-->
    <div class="card-header card-header-stretch">
        <!--begin::Title-->
        <div class="card-title">
            <h3 class="m-0 text-gray-800">{{__('Lastest Orders')}}</h3>
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
        <div class="card-body p-0 ">
		<table id="kt_datatable_example_2" class="table table-striped table-row-bordered gy-5 gs-7">
            <thead>
                <tr class="fw-bold fs-6 text-gray-800">
                    <th>{{__('Driver')}}</th>
                    <th>{{__('Customer')}}</th>
                    <th>{{__('Vehicle')}}</th>
                </tr>
            </thead>
            <tbody>
                @foreach($office->Orders as $order)
                <tr>
                    <td>{{$order->Driver->User->name}}</td>
                    <td>{{$order->Customer->User->name}}</td>
                    <td>{{$order->Vehicle->plate}}</td>
                    
                </tr>
                @endforeach
            </tbody>
        </table>
        </div>
        <!--end::Tab panel-->
    </div>
    <!--end::Tab Content-->
</div>
		</div>
	</div>
</div>



@endsection
@section('scripts')
<script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
     integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM="
     crossorigin=""></script>

<script>



    var driversLocations = [];
    var markers = [];
    $(document).ready(function () {
        var map = L.map('map2').setView([51.505, -0.09], 13);
        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
        
        }).addTo(map);
                DeleteMarkers()

                getDrivers(L)
                function DeleteMarkers() { }
                function getDrivers(L) {
                    
                    $.ajax({
            "url": "{{route('office_drivers_locations',$office->id)}}",
            success: function (res) {
                DeleteMarkers()
                    var key = 0;
                    for(var drivers in res) {
                        var myIcon = L.icon({
                        iconUrl: res[drivers].vehicle_type.image,
                        iconSize: [38, 95],
                        iconAnchor: [22, 94],
                        popupAnchor: [-3, -76],
                 
                        
                    });
                        var marker =  L.marker([res[drivers].driver.current_lat, res[drivers].driver.current_lng]).addTo(map);
                        marker.bindPopup(res[drivers].driver.user.name).openPopup();
                    driversLocations[key] = [
                        res[drivers].driver.user.name,
                        res[drivers].driver.current_lat,
                        res[drivers].driver.current_lng,
                        res[drivers].vehicle_type.image
                    ];
                    key++;
                }
                
            },
            error: function (res) {
                console.log(res);
            }
        })
                }
                setInterval(() => {
                    getDrivers(map);
                }, 8000);
      
    });

</script>

@endsection
