@extends('layouts.fleet')

@section('content')


<!--begin::Stepper-->
<div class="stepper stepper-pills stepper-column d-flex flex-column flex-xl-row flex-row-fluid" id="kt_create_account_stepper">
									<!--begin::Aside-->
									<div class="card d-flex justify-content-center justify-content-xl-start flex-row-auto w-100 w-xl-300px w-xxl-400px me-9">
										<!--begin::Wrapper-->
										<div class="card-body px-6 px-lg-10 px-xxl-15 py-20">
										@include('office.orders.sideBar')
										</div>
										<!--end::Wrapper-->
									</div>
									<!--begin::Aside-->
									<!--begin::Content-->
									<div class="card d-flex flex-row-fluid flex-center">
										<!--begin::Form-->
										<form class="card-body py-20 w-100 w-xl-700px px-9" novalidate="novalidate" id="kt_create_account_form" action="{{route('office.order_step_1')}}" method="POST">
                                            {{csrf_field()}}
											<!--begin::Step 1-->
											<div class="current" data-kt-stepper-element="content">
												<!--begin::Wrapper-->
												<div class="w-100">
													<!--begin::Heading-->
													<div class="pb-10 pb-lg-15">
														<!--begin::Title-->
														<h2 class="fw-bolder d-flex align-items-center text-dark">Choose Order Type
														<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Billing is issued based on your selected account type"></i></h2>
														<!--end::Title-->
														
													</div>
													<!--end::Heading-->
													<!--begin::Input group-->
													<div class="fv-row">
														<!--begin::Row-->
														<div class="row">
															<!--begin::Col-->
															<div class="col-lg-6">
                                                                <div class="form-check form-check-custom form-check-solid me-10">
                                                                    <input class="form-check-input h-40px w-40px" type="radio" value="travel_mode" name="order_type" id="order_type"/>
                                                                    <label class="form-check-label" for="order_type">
                                                                       Travel Mode
                                                                    </label>
                                                                </div>
															</div>
															<!--end::Col-->
															<!--begin::Col-->
															<div class="col-lg-6">
																<!--begin::Option-->
																<div class="form-check form-check-custom form-check-solid me-10">
                                                                    <input class="form-check-input h-40px w-40px" type="radio" value="normal_mode" name="order_type" id="order_type"/>
                                                                    <label class="form-check-label" for="order_type">
                                                                        Normal Mode
                                                                    </label>
                                                                </div>
																<!--end::Option-->
															</div>
															<!--end::Col-->
														</div>
														<!--end::Row-->
													</div>
													<!--end::Input group-->
												</div>
												<!--end::Wrapper-->
											</div>
											<!--end::Step 1-->
											<div class="d-flex flex-stack pt-10">
												
												<!--begin::Wrapper-->
												<div>
													
													<button type="submit" class="btn btn-lg btn-primary" data-kt-stepper-action="next">Continue
													<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
													<span class="svg-icon svg-icon-4 ms-1 me-0">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black"></rect>
															<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black"></path>
														</svg>
													</span>
													<!--end::Svg Icon--></button>
												</div>
												<!--end::Wrapper-->
											</div>
										</form>
										<!--end::Form-->
									</div>
									<!--end::Content-->
								</div>
								<!--end::Stepper-->


@endsection
