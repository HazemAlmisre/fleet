@extends('layouts.fleet')

@section('content')

<div class="card mb-5 mb-xl-10">
									<!--begin::Card header-->
									<div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
										<!--begin::Card title-->
										<div class="card-title m-0">
											<h3 class="fw-bolder m-0">{{__('Log Details')}}</h3>
										</div>
										<!--end::Card title-->
									</div>
									<!--begin::Card header-->
									<!--begin::Content-->
									<div id="kt_account_settings_profile_details" class="collapse show">
                                    <div class="table-responsive">
												<!--begin::Table-->
												<table class="table table-row-bordered align-middle gy-4 gs-9">
													<thead class="border-bottom border-gray-200 fs-6 text-gray-600 fw-bolder bg-light bg-opacity-75">
														<tr>
															<td class="min-w-150px">{{__('Date')}}</td>
															<td class="min-w-250px">{{__('Description')}}</td>
														
															<td></td>
														</tr>
													</thead>
													<tbody class="fw-bold text-gray-600">
                                                        @foreach($logs   as $log)
														<!--begin::Table row-->
														<tr>
															<td>{{date('F-j-Y', strtotime($log->created_at))}}</td>
															<td>
																<a href="#">@if($log->msg != null) {{$log->msg}} @else No Note @endif</a>
															</td>
														
														
														</tr>
														<!--end::Table row-->
                                                        @endforeach 													
													</tbody>
												</table>
												<!--end::Table-->
											</div>
									</div>
									<!--end::Content-->
								</div>



@endsection


