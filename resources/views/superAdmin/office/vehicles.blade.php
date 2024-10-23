@extends('layouts.fleet')
@section('head')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.12.1/b-2.2.3/b-colvis-2.2.3/b-html5-2.2.3/fh-3.2.4/datatables.min.css"/>
@endsection
@section('content')

@include('superAdmin.office.profileNav')
                                <div class="card">
									<!--begin::Header-->
									<div class="card-header card-header-stretch">
										<!--begin::Title-->
										<div class="card-title">
											<h3 class="m-0 text-gray-800">{{__('Vehicles')}}</h3>
										</div>
										<!--end::Title-->
										<!--begin::Toolbar-->
										<div class="card-toolbar m-0">
											<!--begin::Tab nav-->
                                            <!-- <ul class="nav nav-stretch fs-5 fw-bold nav-line-tabs border-transparent">
                                                <li class="nav-item">
                                                <a class="nav-link text-active-gray-800 me-4">Export</a>
                                                </li>
                                            </ul> -->
											
											<!--end::Tab nav-->
										</div>
										<!--end::Toolbar-->
									</div>
									<!--end::Header-->
									<!--begin::Tab Content-->
									<div id="" class="tab-content">
										<!--begin::Tab panel-->
										<div  class="card-body p-0 ">
											<div class="table-responsive">
												<!--begin::Table-->
												<table id="kt_datatable_example_2" class="table table-flush align-middle table-row-bordered table-row-solid gy-4 gs-9">
													<!--begin::Thead-->
													<thead class="border-gray-200 fs-5 fw-bold bg-lighten">
														<tr>
															<th class="min-w-175px ps-9">{{__('Plate')}}</th>
															<th class="min-w-175px ps-9">{{__('License Number')}}</th>
															<th class="min-w-150px px-0">{{__('Driver')}}</th>
															<th class="min-w-350px">{{__('Brand')}}</th>
															<th class="min-w-125px">{{__('Type')}}</th>
															<th class="min-w-125px">{{__('Model Year')}}</th>
															<th class="min-w-125px text-center">{{__('Location')}}</th>
														</tr>
													</thead>
													<!--end::Thead-->
													<!--begin::Tbody-->
													<tbody class="fs-6 fw-bold text-gray-600">
                                                        @foreach($office->Vehicles as $vehicle)
														<tr>
															<td class="ps-9">{{$vehicle->plate}}</td>
															<td class="ps-9">{{$vehicle->license_number}}</td>
															<td class="ps-0">@if(!$vehicle->Driver) {{__('No Driver')}} @else {{$vehicle->Driver->User->name}} @endif</td>
															<td>{{$vehicle->VehicleBrand->name}}</td>
															<td>{{$vehicle->VehicleType->name}}</td>
															<td class="text-success">{{$vehicle->model_year}}</td>
															<td class="text-center">
																<button class="btn btn-light btn-sm btn-active-light-primary">{{__('Show on Map')}}</button>
															</td>
														</tr>
												@endforeach
													</tbody>
													<!--end::Tbody-->
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
 
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.12.1/b-2.2.3/b-colvis-2.2.3/b-html5-2.2.3/fh-3.2.4/datatables.min.js"></script>
<script>
    $(document).ready( function () {
    var table = $('#kt_datatable_example_2').DataTable({
        "dom": 'Bfrtip'
    });
    new $.fn.dataTable.Buttons( table, {
    buttons: [
        'copy', 'excel', 'pdf'
    ]
} );
} );
</script>
@endsection