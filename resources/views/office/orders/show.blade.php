@extends('layouts.fleet')
@section('head')
<script src="https://maps.google.com/maps/api/js?key=AIzaSyCItcnWaO0HeV8oEbQNsBmLcRPv4wEgwoE" type="text/javascript">
</script>
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
                        {{__('Order TimeLine')}}
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
                            <div class="fw-bolder text-gray-800 ps-3"> {{__('Order Submited By')}} {{$order->Customer->User->name}}
                                ({{__('Customer')}})</div>
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
                                <span class="fw-bolder text-gray-800 ps-3"> {{__('Order Accepted By')}}
                                    {{$order->Driver->User->name}} ({{__('Driver')}})</span>
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
                                <span class="fw-bolder text-gray-800 ps-3">{{__("Order Rejected By")}}
                                    {{$order->Driver->User->name}} ({{__('Driver')}})</span>
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
                                <span class="fw-bolder text-gray-800 ps-3">{{__('Order Finished By')}}
                                    {{$order->Driver->User->name}} ({{__('Driver')}})</span>
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
                                <span class="fw-bolder text-gray-800 ps-3">{{__('Order Rated By')}}
                                    {{$order->Customer->User->name}} ({{__('Customer')}})</span>
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
                        <th>{{__("Driver")}}</th>
                        <td>{{$order->Driver->User->name}}</td>
                        <th>{{__('Customer')}}</th>
                        <td>{{$order->Customer->User->name}}</td>
                    </tr>
                    <tr>
                        <th>{{__('EST. Cost')}}</th>
                        <td>@money($order->est_price)</td>
                        <th>{{__('Cost')}}</th>
                        <td>@money($order->live_price)</td>
                    </tr>
                    <tr>
                        @php
                        $est_km_distance = $order->est_distance;
                        $km_distance = $order->live_distance;
                        @endphp
                        <th>{{__('EST. Distance')}}</th>
                        <td>{{$est_km_distance}} </td>
                        <th>{{__('Distance')}}</th>
                        <td>{{$km_distance}} </td>
                    </tr>
                    <tr>

                        <th>{{__('EST. Time')}}</th>
                        <td>{{$order->est_time}} </td>
                        <th>{{__('Time')}}</th>
                        <td>{{$order->live_time}} </td>
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
                    <div id="map" style="width: 100%; height: 100%;"></div>
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
    $(document).ready(function () {
        function initMap() {
            var directionsService = new google.maps.DirectionsService();
            var directionsRenderer = new google.maps.DirectionsRenderer();
            var istanbul = new google.maps.LatLng(41.064344, 28.868328);
            var mapOptions = {
                zoom: 7,
                center: istanbul
            }
            var map = new google.maps.Map(document.getElementById('map'), mapOptions);
            directionsRenderer.setMap(map);
            var start = new google.maps.LatLng(41.062032, 28.846397);
            var end = new google.maps.LatLng(41.081408, 28.920210);
            var request = {
                origin: start,
                destination: end,
                travelMode: 'DRIVING'
            };
            directionsService.route(request, function (result, status) {
                if (status == 'OK') {
                    directionsRenderer.setDirections(result);
                }
            });
        }


        initMap()

    })

</script>

@endsection
