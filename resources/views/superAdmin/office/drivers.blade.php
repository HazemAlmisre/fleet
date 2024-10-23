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
											<h3 class="m-0 text-gray-800">{{__('Drivers')}}</h3>
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
										<div  class="card-body ">
											<!--begin::Table-->
											<table id="kt_datatable_example_2" class="table table-flush align-middle table-row-bordered table-row-solid gy-4 gs-9">
													<!--begin::Thead-->
													<thead class="border-gray-200 fs-5 fw-bold bg-lighten">
														<tr>
															<th class="min-w-175px ps-9">{{__('Driver Name')}}</th>
															<th class="min-w-150px px-0">{{__('Driver Vehicle')}}</th>
															<th class="min-w-350px">{{__('Phone')}}</th>
															<th class="min-w-125px">{{__('Status')}}</th>
															<th class="min-w-125px text-center">{{__('Location')}}</th>
														</tr>
													</thead>
													<!--end::Thead-->
													<!--begin::Tbody-->
													<tbody class="fs-6 fw-bold text-gray-600">
                                                        @foreach($office->Drivers->where('is_deleted',false) as $driver)
														<tr>
															<td class="ps-9">{{$driver->User->name}}</td>
															<td class="ps-0">@if(!$driver->Vehicle) {{__('No Vehicle')}} @else {{$driver->Vehicle->plate}} @endif</td>
															<td>{{$driver->User->phone}}</td>
															<td class="text-success">{{$driver->status}}</td>
															<td class="text-center">
																<button class="btn btn-light btn-sm btn-active-light-primary">{{__('Show on Map')}}</button>
																<a href="{{route('driver_show',$driver->id)}}" class="btn btn-secondary btn-sm btn-active-secondary-primary">{{__('View Profile')}}</a>
															</td>
														</tr>
												@endforeach
													</tbody>
													<!--end::Tbody-->
												</table>
												<!--end::Table-->
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