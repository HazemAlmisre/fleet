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

<style>
    .map-cont {
        position: relative;
        width: 800px;
        height: 350px;
    }

    #map {
        overflow: hidden;
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 25%
    }

</style>
@endsection
@section('content')
<div class="col-md-12">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <!--begin::Card header-->
                <div class="card-header border-0 pt-6">
                    <!--begin::Card title-->
                    <div class="card-title">
                        Order TimeLine
                    </div>
                    <!--begin::Card title-->
                    <!--begin::Card toolbar-->
                    <div class="card-toolbar">
                        <!--begin::Toolbar-->
                        <div class="d-flex justify-content-end" data-kt-subscription-table-toolbar="base">

                        </div>
                        <!--end::Toolbar-->
                    </div>
                    <!--end::Card toolbar-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-0">
                    <!--begin::Add subscription-->
                    <div class="timeline-label">
                        <!--begin::Item-->
                        <div class="timeline-item">
                            <!--begin::Label-->
                            @php
                            $start_date = explode(" ",$order->created_at);
                            $h_m = explode(":",$start_date[1]);
                            @endphp
                            <div class="timeline-label fw-bolder text-gray-800 fs-6">{{$h_m[0]}}:{{$h_m[1]}}</div>
                            <!--end::Label-->
                            <!--begin::Badge-->
                            <div class="timeline-badge">
                                <i class="fa fa-genderless text-warning fs-1"></i>
                            </div>
                            <!--end::Badge-->
                            <!--begin::Text-->
                            <div class="fw-bolder text-gray-800 ps-3">Order Submited By {{$order->Customer->User->name}}
                                (Customer)</div>
                            <!--end::Text-->
                        </div>
                        <!--end::Item-->
                        @if($order->accept_date != null)
                        <!--begin::Item-->
                        <div class="timeline-item">
                            <!--begin::Label-->
                            @php
                            $accept_date = explode(" ",$order->accept_date);
                            $h_m_ad = explode(":",$accept_date[1]);
                            @endphp
                            <div class="timeline-label fw-bolder text-gray-800 fs-6">{{$h_m_ad[0]}}:{{$h_m_ad[1]}}</div>
                            <!--end::Label-->
                            <!--begin::Badge-->
                            <div class="timeline-badge">
                                <i class="fa fa-genderless text-primary fs-1"></i>
                            </div>
                            <!--end::Badge-->
                            <!--begin::Content-->
                            <div class="timeline-content d-flex">
                                <span class="fw-bolder text-gray-800 ps-3">Order Accepted By
                                    {{$order->Driver->User->name}} (Driver)</span>
                            </div>
                            <!--end::Content-->
                        </div>
                        <!--end::Item-->
                        @endif
                        @if($order->reject_date != null)
                        <!--begin::Item-->
                        <div class="timeline-item">
                            <!--begin::Label-->
                            @php
                            $reject_date = explode(" ",$order->reject_date);
                            $h_m_rd = explode(":",$reject_date[1]);
                            @endphp
                            <div class="timeline-label fw-bolder text-gray-800 fs-6">{{$h_m_rd[0]}}:{{$h_m_rd[1]}}</div>
                            <!--end::Label-->
                            <!--begin::Badge-->
                            <div class="timeline-badge">
                                <i class="fa fa-genderless text-danger fs-1"></i>
                            </div>
                            <!--end::Badge-->
                            <!--begin::Content-->
                            <div class="timeline-content d-flex">
                                <span class="fw-bolder text-gray-800 ps-3">Order Rejected By
                                    {{$order->Driver->User->name}} (Driver)</span>
                            </div>
                            <!--end::Content-->
                        </div>
                        <!--end::Item-->
                        @endif
                        @if($order->finish_date != null)
                        <!--begin::Item-->
                        <div class="timeline-item">
                            <!--begin::Label-->
                            @php
                            $finish_date = explode(" ",$order->finish_date);
                            $h_m_fd = explode(":",$finish_date[1]);
                            @endphp
                            <div class="timeline-label fw-bolder text-gray-800 fs-6">{{$h_m_fd[0]}}:{{$h_m_fd[1]}}</div>
                            <!--end::Label-->
                            <!--begin::Badge-->
                            <div class="timeline-badge">
                                <i class="fa fa-genderless text-success fs-1"></i>
                            </div>
                            <!--end::Badge-->
                            <!--begin::Content-->
                            <div class="timeline-content d-flex">
                                <span class="fw-bolder text-gray-800 ps-3">Order Finished By
                                    {{$order->Driver->User->name}} (Driver)</span>
                            </div>
                            <!--end::Content-->
                        </div>
                        <!--end::Item-->
                        @endif
                        @if($order->rate_date != null)
                        <!--begin::Item-->
                        <div class="timeline-item">
                            <!--begin::Label-->
                            @php
                            $rate_date = explode(" ",$order->rate_date);
                            $h_m_rtd = explode(":",$rate_date[1]);
                            @endphp
                            <div class="timeline-label fw-bolder text-gray-800 fs-6">{{$h_m_rtd[0]}}:{{$h_m_rtd[1]}}
                            </div>
                            <!--end::Label-->
                            <!--begin::Badge-->
                            <div class="timeline-badge">
                                <i class="fa fa-genderless text-success fs-1"></i>
                            </div>
                            <!--end::Badge-->
                            <!--begin::Content-->
                            <div class="timeline-content d-flex">
                                <span class="fw-bolder text-gray-800 ps-3">Order Rated By
                                    {{$order->Customer->User->name}} (Customer)</span>
                            </div>
                            <!--end::Content-->
                        </div>
                        <!--end::Item-->
                        @endif

                    </div>
                    <!--end::Add subscription-->
                </div>
                <!--end::Card body-->
            </div>

        </div>
        <div class="col-md-4">
            <div class="card">
                <!--begin::Card header-->
                <div class="card-header border-0 pt-6">
                    <!--begin::Card title-->
                    <div class="card-title">
                        {{__('Order Rate')}}
                    </div>
                    <!--begin::Card title-->
                    <!--begin::Card toolbar-->
                    <div class="card-toolbar">
                        <!--begin::Toolbar-->
                        <div class="d-flex justify-content-end" data-kt-subscription-table-toolbar="base">

                        </div>
                        <!--end::Toolbar-->
                    </div>
                    <!--end::Card toolbar-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-0">
                    <div class="row">
                        <div class="col-md-12">
                            <label for="">{{__('Customer Rate')}}</label>
                            <div class="rating">
                                @for($x = 0; $x <= 4; $x++) 
                                <div class="rating-label me-2 @if($x < $order->rate)  checked @endif">
                                    <i class="bi bi-star fs-1"></i>
                                </div>
                                @endfor
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">{{__('Customer Note')}}</label>
                                <textarea type="text" class="form-control" disabled>{{$order->note}}</textarea>
                            </div>
                        </div>
                    </div>
                </div>




            </div>
            <!--end::Card body-->
        </div>
        <div class="col-md-4">
        <div class="card">
            <!--begin::Card header-->
            <div class="card-header border-0 pt-6">
                <!--begin::Card title-->
                <div class="card-title">
                    {{__('Order Details')}}
                </div>
                <!--begin::Card title-->
                <!--begin::Card toolbar-->
                <div class="card-toolbar">
                    <!--begin::Toolbar-->
                    <div class="d-flex justify-content-end" data-kt-subscription-table-toolbar="base">

                    </div>
                    <!--end::Toolbar-->
                </div>
                <!--end::Card toolbar-->
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body pt-0 table-responsive">
                <table class="table table-row-bordered">
                    <tr>
                        <th>{{__('Driver')}}</th>
                        <td>{{$order->Driver->User->name}}</td>
                        <th>{{__('Customer')}}</th>
                        <td>{{$order->Customer->User->name}}</td>
                    </tr>
                    <tr>
                        <th>{{__('EST. Cost')}}</th>
                        <td>@money($order->est_price)</td>
                        <th>Cost</th>
                        <td>@money($order->live_price)</td>
                    </tr>
                    <tr>
                        @php
                        $est_km_distance = $order->est_distance;
                        $km_distance = $order->live_distance;
                        @endphp
                        <th>{{__('EST. Distance')}}</th>
                        <td>{{$est_km_distance}} KM</td>
                        <th>{{__('Distance')}}</th>
                        <td>{{$km_distance}} KM</td>
                    </tr>
                    <tr>

                        <th>{{__('EST. Time')}}</th>
                        <td>{{$order->est_time}} MIN</td>
                        <th>{{__('Time')}}</th>
                        <td>{{$order->live_time}} MIN</td>
                    </tr>
                </table>
            </div>
            <!--end::Card body-->
        </div>

    </div>
    </div>
  
</div>
<div class="row pt-2">
    <div class="col-md-12">
        <div class="card">
            <!--begin::Card header-->
            <div class="card-header border-0 pt-6">
                <!--begin::Card title-->
                <div class="card-title">
                    {{__('Order Route')}}
                </div>
                <!--begin::Card title-->
                <!--begin::Card toolbar-->
                <div class="card-toolbar">
                    <!--begin::Toolbar-->
                    <div class="d-flex justify-content-end" data-kt-subscription-table-toolbar="base">
                        <!--begin::Add subscription-->

                        <!--end::Add subscription-->
                    </div>
                    <!--end::Toolbar-->
                </div>
                <!--end::Card toolbar-->
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body pt-0">
                <div class="map-cont">
                               
        <div id="map2" style="width: 100%;
height:450px"></div>
                </div>
                <!--end::Card body-->
            </div>

        </div>
    </div>
</div>
</div>
</div>




@endsection

@section('scripts')

<script>
    function decode(encoded){

// array that holds the points

var points=[ ]
var index = 0, len = encoded.length;
var lat = 0, lng = 0;
while (index < len) {
    var b, shift = 0, result = 0;
    do {

b = encoded.charAt(index++).charCodeAt(0) - 63;//finds ascii                                                                                    //and substract it by 63
          result |= (b & 0x1f) << shift;
          shift += 5;
         } while (b >= 0x20);


   var dlat = ((result & 1) != 0 ? ~(result >> 1) : (result >> 1));
   lat += dlat;
  shift = 0;
  result = 0;
 do {
    b = encoded.charAt(index++).charCodeAt(0) - 63;
    result |= (b & 0x1f) << shift;
   shift += 5;
     } while (b >= 0x20);
 var dlng = ((result & 1) != 0 ? ~(result >> 1) : (result >> 1));
 lng += dlng;

points.push([( lat / 1E5),( lng / 1E5)])  

}
return points

}






    var driversLocations = [];
    var markers = [];
    $(document).ready(function () {
        var map = L.map('map2').setView(["{{$order->customer_start_lat}}", "{{$order->customer_start_lng}}"], 13);
        var markerstart =  L.marker(["{{$order->customer_start_lat}}", "{{$order->customer_start_lng}}"]).addTo(map);
        var markerend =  L.marker(["{{$order->finish_lat}}", "{{$order->finish_lng}}"]).addTo(map);
        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
        
        }).addTo(map);
        var points = decode("{{$order->google_route}}");

        var polyline = L.polyline(points, {color: 'black'});
        polyline.addTo(map);
    
            });


    // $(document).ready(function () {
    //     function initMap() {
    //         var directionsService = new google.maps.DirectionsService();
    //         var directionsRenderer = new google.maps.DirectionsRenderer();
    //         var istanbul = new google.maps.LatLng(50.064344, 28.868328);
    //         var mapOptions = {
    //             zoom: 12,
    //             center: istanbul
    //         }
    //         var map = new google.maps.Map(document.getElementById('map'), mapOptions);
    //         directionsRenderer.setMap(map);
    //             var polyline = new google.maps.Polyline({
    //             path: google.maps.geometry.encoding.decodePath("{{$order->google_route}}"),
    //             map: map,
    //             geodesic: true,
    //             strokeOpacity: 1.0,
    //             strokeWeight: 2,

    //         });
    //         const origin =  new google.maps.LatLng({{$order->customer_start_lat}},{{$order->customer_start_lng}});
    //         const destination =  new google.maps.LatLng({{$order->finish_lat}},{{$order->finish_lng}});
    //         new google.maps.Marker({
    //             position: origin,
    //             map,
    //             title: "Origin",
    //         });
    //         new google.maps.Marker({
    //             position: destination,
    //             map,
    //             title: "Destination",
    //         });
    //         map.setCenter(polyline.getPath().getAt(Math.round(polyline.getPath().getLength() / 2)));
    //         if({{$order->status}} == 0){
                
    //             const driver_location =  new google.maps.LatLng({{$order->Driver->current_lat}},{{$order->Driver->current_lng}});
    //             driver = new google.maps.Marker({
    //                     position: new google.maps.LatLng({{$order->Driver->current_lat}},{{$order->Driver->current_lng}}),
    //                     icon: "{{$order->Vehicle->VehicleType->image}}",
    //                     map: map
    //                 });
    //             map.setCenter(driver_location);
    //             map.setZoom(19);
    //         }

    //     }
        



    //     initMap()

    // })

</script>

@endsection
