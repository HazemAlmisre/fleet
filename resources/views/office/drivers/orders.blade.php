@extends('layouts.fleet')

@section('content')

@include('office.drivers.driverNav')
                                <div class="card">
									<!--begin::Header-->
									<div class="card-header card-header-stretch">
										<!--begin::Title-->
										<div class="card-title">
											<h3 class="m-0 text-gray-800"> {{__('Orders')}} </h3>
										</div>
										<!--end::Title-->
										
									</div>
									<!--end::Header-->
									<!--begin::Tab Content-->
									<div id="" class="tab-content">
										<!--begin::Tab panel-->
										<div  class="card-body p-0 ">
											<div class="table-responsive">
												<!--begin::Table-->
												<table id="kt_datatable_example_2" class="table table-striped table-row-bordered gy-5 gs-7">
                    <thead>
                        <tr class="fw-bold fs-6 text-gray-800">
                            <th>{{__('Driver')}} </th>
                            <th>{{__('Office')}} </th>
                            <th>{{__('Vehicle')}} </th>
                            <th>{{__('Customer')}} </th>
                            <th>{{__('Rate')}} </th>
                            <th>{{__('Start date')}} </th>
                            <th>{{__('Actions')}} </th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($driver->Orders as $order)
                        <tr>
                            <td>{{$order->Driver->user->name}}</td>
                            <td>{{$order->Office->name}}</td>
                            <td>{{$order->Vehicle->plate}}</td>
                            <td>{{$order->Customer->user->name}}</td>

                            <td>{{$order->rate}}</td>

                            @php
                            $start_date = explode(" ",$order->created_at);
                            @endphp
                            <td>{{$start_date[0]}}</td>
                            <td>
                                <a href="{{route('order_show',$order->id)}}" class="btn btn-icon btn-sm btn-primary">
                                    <i class="bi bi-eye-fill fs-1x"></i>
                                </a>
                            </td>

                        </tr>
                        @endforeach
                    </tbody>
                    
                </table>
												<!--end::Table-->
											</div>
										</div>
										<!--end::Tab panel-->
									</div>
									<!--end::Tab Content-->
								</div>


@endsection



@section('scripts')
<script>
    $(document).ready(function(){

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