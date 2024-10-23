@extends('layouts.fleet')
@section('head')

<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
     integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI="
     crossorigin=""/>
     <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
     integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM="
     crossorigin=""></script>
<style>

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
<div class="row gy-5 g-xl-10">
    <!--begin::Col-->
    <div class="col-xxl-6 mb-lg-10 mb-xl-5 mb-xxl-10">
        <div class="row g-5 g-lg-10">
            <div class="col-md-6 col-xl-6 mb-md-5 mb-xxl-10">
                <!--begin::Card widget 8-->
                <div class="card overflow-hidden h-md-50 mb-5 mb-lg-10">
                    <!--begin::Card body-->
                    <div class="card-body d-flex justify-content-between flex-column px-0 pb-0">
                        <!--begin::Statistics-->
                        <div class="mb-4 px-9">
                            <!--begin::Info-->
                            <div class="d-flex align-items-center mb-2">
                                <!--begin::Currency-->
                                <span class="fs-4 fw-bold text-gray-400 align-self-start me-1>"></span>
                                <!--end::Currency-->
                                <!--begin::Value-->
                                <span
                                    class="fs-2hx fw-bolder text-gray-800 me-2 lh-1">{{App\Vehicle::count()}}</span>
                                <!--end::Value-->

                            </div>
                            <!--end::Info-->
                            <!--begin::Description-->
                            <span class="fs-6 fw-bold text-gray-400">{{__('Total Vehicles')}}</span>
                            <!--end::Description-->
                        </div>
                        <!--end::Statistics-->
                        <!--begin::Chart-->
                        <!--end::Chart-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card widget 8-->
                <!--begin::Card widget 5-->
                <div class="card card-flush h-md-50 mb-lg-10">
                    <!--begin::Header-->
                    <div class="card-header pt-5">
                        <!--begin::Title-->
                        <div class="card-title d-flex flex-column">
                            <!--begin::Info-->
                            <div class="d-flex align-items-center">
                                <!--begin::Amount-->
                                <span
                                    class="fs-2hx fw-bolder text-dark me-2 lh-1">{{App\Order::count()}}</span>
                                <!--end::Amount-->

                            </div>
                            <!--end::Info-->
                            <!--begin::Subtitle-->
                            <span class="text-gray-400 pt-1 fw-bold fs-6">{{__('Total Orders')}}</span>
                            <!--end::Subtitle-->
                        </div>
                        <!--end::Title-->
                    </div>
                    <!--end::Header-->
                    <!--begin::Card body-->
                    <div class="card-body d-flex align-items-end pt-0">
                        <!--begin::Progress-->
                        <div class="d-flex align-items-center flex-column mt-3 w-100">
                            <div class="d-flex justify-content-between w-100 mt-auto mb-2">
                                <span
                                    class="fw-boldest fs-6 text-dark">{{-- auth()->user()->Office->limit_orders - auth()->user()->Office->Orders->count() --}}
                                    Order to reach the Limit</span>
                                <span
                                    class="fw-bolder fs-6 text-gray-400">{{-- (auth()->user()->Office->Orders->count() / auth()->user()->Office->limit_orders)*100 --}}%</span>
                            </div>
                            <div class="h-8px mx-3 w-100 bg-light-success rounded">
                                <div class="bg-success rounded h-8px" role="progressbar"
                                    style="width: %;"
                                    aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <!--end::Progress-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card widget 5-->
            </div>
            <div class="col-md-6 col-xl-6 mb-md-5 mb-xxl-10">
                <!--begin::Card widget 9-->
                <div class="card overflow-hidden h-md-50 mb-5 mb-lg-10">
                    <!--begin::Card body-->
                    <div class="card-body d-flex justify-content-between flex-column px-0 pb-0">
                        <!--begin::Statistics-->
                        <div class="mb-4 px-9">
                            <!--begin::Statistics-->
                            <div class="d-flex align-items-center mb-2">
                                <!--begin::Currency-->
                                <span class="fw-boldest fs-6 text-dark>"></span>
                                <!--end::Currency-->
                                <!--begin::Value-->
                                <span
                                    class="fs-2hx fw-bolder text-gray-800 me-2 lh-1">SYP {{App\Earning::where('user_id',1)->sum('total')}}
                                </span>
                                <!--end::Value-->

                            </div>
                            <!--end::Statistics-->
                            <!--begin::Description-->
                            <span class="fs-6 fw-bold text-gray-400">{{__('Total Fleet Earnings')}} </span>
                            <!--end::Description-->
                        </div>
                        <!--end::Statistics-->
                        <!--begin::Chart-->
                        <!--end::Chart-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card widget 9-->
                <!--begin::Card widget 7-->
                <div class="card card-flush h-md-50 mb-lg-10">
                    <!--begin::Header-->
                    <div class="card-header pt-5">
                        <!--begin::Title-->
                        <div class="card-title d-flex flex-column">
                            <!--begin::Amount-->
                            <span
                                class="fs-2hx fw-bolder text-dark me-2 lh-1">{{App\Driver::count()}}</span>
                            <!--end::Amount-->
                            <!--begin::Subtitle-->
                            <span class="text-gray-400 pt-1 fw-bold fs-6">{{__('Total Drivers')}}</span>
                            <!--end::Subtitle-->
                        </div>
                        <!--end::Title-->
                    </div>
                    <!--end::Header-->
                    <!--begin::Card body-->
                    <div class="card-body d-flex flex-column justify-content-end pe-0">
                        <!--begin::Title-->
                        <span class="fs-6 fw-boldest text-gray-800 d-block mb-2">{{__("Today’s Heroes")}}</span>
                        <!--end::Title-->
                        <!--begin::Users group-->
                        <div class="symbol-group symbol-hover flex-nowrap">
                            @foreach(App\Driver::take(3) as $driver)
                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title=""
                                data-bs-original-title="{{$driver->user->name}}">
                                <span
                                    class="symbol-label bg-warning text-inverse-warning fw-bolder">{{ substr($driver->user->name, 0, 1)}}</span>
                            </div>
                            @endforeach

                            <a href="#" class="symbol symbol-35px symbol-circle" data-bs-toggle="modal"
                                data-bs-target="#kt_modal_view_users">
                                <span
                                    class="symbol-label bg-light text-gray-400 fs-8 fw-bolder">{{App\Driver::count() - 3}}
                                    +</span>
                            </a>
                        </div>
                        <!--end::Users group-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card widget 7-->
            </div>
        </div>
    </div>
    <!--end::Col-->
    <!--begin::Col-->
    <div class="col-xl-6 mb-5 mb-lg-10">
        <!--begin::Maps widget 1-->
        <div class="card card-flush h-md-100">
            <!--begin::Header-->
            <div class="card-header pt-7">
                <!--begin::Title-->
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bolder text-dark">{{__('Monthly Orders Statistics')}}</span>
                    <span class="text-gray-400 pt-2 fw-bold fs-6"></span>
                </h3>
                <!--end::Title-->

            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body d-flex flex-center">
                <div id="kt_apexcharts_1" style="height: 350px;"></div>
            </div>
            <!--end::Body-->
        </div>
        <!--end::Maps widget 1-->
    </div>
    <!--end::Col-->
</div>
<div class="row">


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
                                <div class="col-md-12 col-offset-3">

                                <div class="map-cont">
                                    <div id="map2" style="width: 100%;
height:450px"></div>
                                    </div>

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
                                    @foreach(App\Order::query()->whereHas('Driver')->get() as $order)
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


    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>


    <script>
        var options = {
            series: [{
                name: "Orders",
                data: [20, 100, ]
            }],
            chart: {
                height: 350,
                type: 'bar',
                events: {
                    click: function (chart, w, e) {
                        // console.log(chart, w, e)
                    }
                }
            },
            // colors: colors,
            plotOptions: {
                bar: {
                    columnWidth: '45%',
                    distributed: true,
                }
            },
            dataLabels: {
                enabled: false
            },
            legend: {
                show: false
            },
            xaxis: {
                categories: [
                    'Jan',
                    'Feb',
                    'Mar',
                    'Apr',
                    'May',
                    'Jun',
                    'Jul',
                    'Aug',
                    'Sep',
                    'Oct',
                    'Nov',
                    'Dec',

                ],
                labels: {
                    style: {
                        //   colors: colors,
                        fontSize: '12px'
                    }
                }
            }
        };

        var chart = new ApexCharts(document.querySelector("#kt_apexcharts_1"), options);
        chart.render();

    </script>
     <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
     integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM="
     crossorigin=""></script>

<script>



    var driversLocations = [];
    var markers = [];
    $(document).ready(function () {
        var map = L.map('map2').setView([33.513792,  36.276481], 13);
        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,

        }).addTo(map);
                DeleteMarkers()

                getDrivers(L)
                function DeleteMarkers() { }
                function getDrivers(L) {
                    $.ajax({
                        "url": "{{route('all_drivers_locations')}}",
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
                        marker.bindPopup("Driver : "+res[drivers].driver.user.name+"<br> Office :"+res[drivers].driver.office.name).openPopup();
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
