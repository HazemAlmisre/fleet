@extends('layouts.fleet')

@section('content')

@include('office.drivers.driverNav')
                                <div class="card">
									<!--begin::Header-->
									<div class="card-header card-header-stretch">
										<!--begin::Title-->
										<div class="card-title">
											<h3 class="m-0 text-gray-800"> {{__('Logs')}} </h3>
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
												<table class="table table-flush align-middle table-row-bordered table-row-solid gy-4 gs-9">
													<!--begin::Thead-->
													<thead class="border-gray-200 fs-5 fw-bold bg-lighten">
														<tr>
															<th class="min-w-175px ps-9"> {{__('Date')}} </th>
														
															<th class="min-w-350px"> {{__('Details')}} </th>
														
														
														</tr>
													</thead>
													<!--end::Thead-->
													<!--begin::Tbody-->
													<tbody class="fs-6 fw-bold text-gray-600">
														@foreach(App\Log::where(['model'=>'Driver','sub_id'=>$driver->id])->get() as $log)
														<tr>
															<td class="ps-9">{{$log->created_at}}</td>

															<td>{{$log->msg}}</td>
														
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



