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
										<form class="card-body py-20 w-100 w-xl-700px px-9" novalidate="novalidate" id="kt_create_account_form" action="{{route('office.order_step_2')}}" method="POST">
                                            {{csrf_field()}}
                                            <input type="hidden" name="order_type" value="{{$data['order_type']}}">
											<div data-kt-stepper-element="content" class="current">
												<!--begin::Wrapper-->
												<div class="w-100">
													<!--begin::Heading-->
													<div class="pb-10 pb-lg-12">
														<!--begin::Title-->
														<h2 class="fw-bolder text-dark">Customer Details</h2>
														<!--end::Title-->
														<!--begin::Notice-->
														<div class="text-muted fw-bold fs-6">If you need more info, please check out
														<a href="#" class="link-primary fw-bolder">Help Page</a>.</div>
														<!--end::Notice-->
													</div>
													<!--end::Heading-->
													<!--begin::Input group-->
													<div class="fv-row mb-10 fv-plugins-icon-container">
														<!--begin::Label-->
														<label class="form-label required">Customer Name</label>
														<!--end::Label-->
														<!--begin::Input-->
														<input name="customer_name" class="form-control form-control-lg form-control-solid" value="" placeholder="Customer Name">
														<!--end::Input-->
                                                        @if($errors->has('customer_name'))
                                                            <div class="fv-plugins-message-container invalid-feedback">{{ $errors->first('customer_name') }}</div>
                                                        @endif
                                                    </div>
													<!--end::Input group-->
                                                    <!--begin::Input group-->
													<div class="fv-row mb-10 fv-plugins-icon-container">
														<!--begin::Label-->
														<label class="form-label required">Customer Phone</label>
														<!--end::Label-->
														<!--begin::Input-->
														<input name="phone" class="form-control form-control-lg form-control-solid" value="" placeholder="Customer Phone">
														<!--end::Input-->
                                                        @if($errors->has('customer_phone'))
                                                            <div class="fv-plugins-message-container invalid-feedback">{{ $errors->first('customer_phone') }}</div>
                                                        @endif
                                                    </div>
													<!--end::Input group-->
                                                    
                                                
													
												</div>
                                                    <!--end::Wrapper-->
											</div>
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
