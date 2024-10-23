@extends('layouts.fleet')
@section('head')

<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
     integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI="
     crossorigin=""/>
     <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
     integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM="
     crossorigin=""></script>
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

@include('office.drivers.driverNav')
<div class="col-md-12">
	<div class="row">
		<div class="col-md-12">
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
                <div class="col-xs-12">
                
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
	
	</div>
</div>



@endsection
@section('scripts')
<script>
    $(document).ready(function(){
		var map = L.map('map2').setView(["{{$driver->current_lat}}","{{$driver->current_lng}}"], 13);
        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
        
        }).addTo(map);
                DeleteMarkers()

                getDrivers(L)
                function DeleteMarkers() { }
                function getDrivers(L) {
                    var marker =  L.marker(["{{$driver->current_lat}}","{{$driver->current_lng}}"]).addTo(map);
                        marker.bindPopup("test").openPopup();
             
                }
                setInterval((L) => {
                    getDrivers(L);
                }, 8000);
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