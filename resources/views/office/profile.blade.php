@extends('layouts.fleet')

@section('content')

<div class="card mb-5 mb-xl-10">
									<!--begin::Card header-->
									<div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
										<!--begin::Card title-->
										<div class="card-title m-0">
											<h3 class="fw-bolder m-0">{{__('Office Details')}}</h3>
										</div>
										<!--end::Card title-->
									</div>
									<!--begin::Card header-->
									<!--begin::Content-->
									<div id="kt_account_settings_profile_details" class="collapse show">
										<!--begin::Form-->
										<form id="kt_account_profile_details_form" class="form fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate" method="post" action="{{route('office.profile_update')}}" enctype="multipart/form-data">
                                            {{csrf_field()}}
											<!--begin::Card body-->
											<div class="card-body border-top p-9">
												<!--begin::Input group-->
												<div class="row mb-6">
													<!--begin::Label-->
													<label class="col-lg-4 col-form-label fw-bold fs-6">{{__('Logo')}}</label>
													<!--end::Label-->
													<!--begin::Col-->
													<div class="col-lg-8">
														<!--begin::Image input-->
														<div class="image-input image-input-outline image-input-empty" data-kt-image-input="true" style="background-image: url('{{$office->logo}}')">
															<!--begin::Preview existing avatar-->
															<div class="image-input-wrapper w-125px h-125px" style="background-image:none"></div>
															<!--end::Preview existing avatar-->
															<!--begin::Label-->
															<label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="" data-bs-original-title="Change avatar">
																<i class="bi bi-pencil-fill fs-7"></i>
																<!--begin::Inputs-->
																<input type="file" name="avatar" accept=".png, .jpg, .jpeg">
																<input type="hidden" name="avatar_remove">
																<!--end::Inputs-->
															</label>
															<!--end::Label-->
															<!--begin::Cancel-->
															<span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="" data-bs-original-title="Cancel avatar">
																<i class="bi bi-x fs-2"></i>
															</span>
															<!--end::Cancel-->
															<!--begin::Remove-->
															<span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="" data-bs-original-title="Remove avatar">
																<i class="bi bi-x fs-2"></i>
															</span>
															<!--end::Remove-->
														</div>
														<!--end::Image input-->
														<!--begin::Hint-->
														<div class="form-text">{{__('Allowed file types: png, jpg, jpeg.')}}</div>
														<!--end::Hint-->
													</div>
													<!--end::Col-->
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="row mb-6">
													<!--begin::Label-->
													<label class="col-lg-4 col-form-label required fw-bold fs-6">{{__('E-mail')}}</label>
													<!--end::Label-->
													<!--begin::Col-->
													<div class="col-lg-8 fv-row fv-plugins-icon-container">
														<input type="email" name="email" class="form-control form-control-lg form-control-solid" placeholder="E-mail" value="{{$office->User->email}}">
													<div class="fv-plugins-message-container invalid-feedback"></div></div>
													<!--end::Col-->
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="row mb-6">
													<!--begin::Label-->
													<label class="col-lg-4 col-form-label required fw-bold fs-6">Password</label>
													<!--end::Label-->
													<!--begin::Col-->
													<div class="col-lg-8 fv-row fv-plugins-icon-container">
														<input type="password" name="password" class="form-control form-control-lg form-control-solid" placeholder="Password" value="{{$office->User->password}}">
													<div class="fv-plugins-message-container invalid-feedback"></div></div>
													<!--end::Col-->
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="row mb-6">
													<!--begin::Label-->
													<label class="col-lg-4 col-form-label required fw-bold fs-6">{{__('Office Name')}}</label>
													<!--end::Label-->
													<!--begin::Col-->
													<div class="col-lg-8 fv-row fv-plugins-icon-container">
														<input type="text" name="company" class="form-control form-control-lg form-control-solid" placeholder="Company name" value="{{$office->name}}">
													<div class="fv-plugins-message-container invalid-feedback"></div></div>
													<!--end::Col-->
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="row mb-6">
													<!--begin::Label-->
													<label class="col-lg-4 col-form-label fw-bold fs-6">
														<span class="required">{{__('Contact Phone')}}</span>
														<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="" data-bs-original-title="Phone number must be active" aria-label="Phone number must be active"></i>
													</label>
													<!--end::Label-->
													<!--begin::Col-->
													<div class="col-lg-8 fv-row fv-plugins-icon-container">
														<input type="tel" name="phone" class="form-control form-control-lg form-control-solid" placeholder="Phone number" value="{{$office->User->phone}}">
													<div class="fv-plugins-message-container invalid-feedback"></div></div>
													<!--end::Col-->
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="row mb-6">
													<!--begin::Label-->
													<label class="col-lg-4 col-form-label fw-bold fs-6">
														<span class="required">{{__('Office Address')}}</span>

													</label>
													<!--end::Label-->
													<!--begin::Col-->
													<div class="col-lg-8 fv-row fv-plugins-icon-container">
														<textarea class="form-control form-control-lg form-control-solid" name="address" id="" cols="30" rows="3">{{$office->address}}</textarea>
													<div class="fv-plugins-message-container invalid-feedback"></div></div>
													<!--end::Col-->
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="row mb-6">
													<!--begin::Label-->
													<label class="col-lg-4 col-form-label required fw-bold fs-6">{{__('1 MIN  Price (SP)')}}</label>
													<!--end::Label-->
													<!--begin::Col-->
													<div class="col-lg-8 fv-row fv-plugins-icon-container">
														<input type="number" name="time_price" class="form-control form-control-lg form-control-solid" placeholder="1 Min Price" value="{{$office->per_min}}">
													<div class="fv-plugins-message-container invalid-feedback"></div></div>
													<!--end::Col-->
												</div>
												<!--end::Input group-->
													<!--begin::Input group-->
													<div class="row mb-6">
													<!--begin::Label-->
													<label class="col-lg-4 col-form-label required fw-bold fs-6">{{__('Oppining Price (SP)')}}</label>
													<!--end::Label-->
													<!--begin::Col-->
													<div class="col-lg-8 fv-row fv-plugins-icon-container">
														<input type="number" name="oppining_price" class="form-control form-control-lg form-control-solid" placeholder="Oppining Price" value="{{$office->open_price}}">
													<div class="fv-plugins-message-container invalid-feedback"></div></div>
													<!--end::Col-->
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="row mb-6">
													<!--begin::Label-->
													<label class="col-lg-4 col-form-label required fw-bold fs-6">{{__('KM Price (SP)')}}</label>
													<!--end::Label-->
													<!--begin::Col-->
													<div class="col-lg-8 fv-row fv-plugins-icon-container">
														<input type="number" name="km_price" class="form-control form-control-lg form-control-solid" placeholder="KM Price" value="{{$office->km_price}}">
													<div class="fv-plugins-message-container invalid-feedback"></div></div>
													<!--end::Col-->
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="row mb-6">
													<!--begin::Label-->
													<label class="col-lg-4 col-form-label required fw-bold fs-6">{{__('Office Commission From Driver')}}</label>
													<!--end::Label-->
													<!--begin::Col-->
													<div class="col-lg-8 fv-row fv-plugins-icon-container">
														<input type="number" name="commission_value" class="form-control form-control-lg form-control-solid" placeholder="Fleet Commission" value="{{$office->commission_value}}">
													<div class="fv-plugins-message-container invalid-feedback"></div></div>
													<!--end::Col-->
												</div>
												<!--end::Input group-->
                                                <div class="row mb-6">
                                                    <!--begin::Label-->
                                                    <label class="col-lg-4 col-form-label required fw-bold fs-6">{{__('max far Order from driver in meter')}}</label>
                                                    <!--end::Label-->
                                                    <!--begin::Col-->
                                                    <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                                        <input type="number" name="radius" class="form-control form-control-lg form-control-solid @error('radius') is-invalid @enderror"
                                                            placeholder="{{__('max far Order from driver in meter')}}" value="{{$office->radius}}">
                                                        <div class="fv-plugins-message-container invalid-feedback">
                                                                @error('radius')
                                                                <div class="alert alert-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <!--end::Col-->
                                                </div>
                                                <div class="row mb-6">
                                                    <!--begin::Label-->
                                                    <label class="col-lg-4 col-form-label fw-bold fs-6">
                                                        <span class="required">{{__("Office Has Travel Mode")}}</span>

                                                    </label>
                                                    <!--end::Label-->
                                                    <!--begin::Col-->
                                                    <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                                        <select name="has_travel_mode" required
                                                            class="form-control form-control-lg form-control-solid " id="">
                                                            <option value="1">{{__("True")}}</option>
                                                            <option value="0">{{__("False")}}</option>

                                                        </select>
                                                        @if($errors->has('has_travel_mode'))
                                                        <div class="fv-plugins-message-container invalid-feedback">
                                                            {{ $errors->first('has_travel_mode') }}
                                                        </div>
                                                        @endif
                                                    </div>
                                                    <!--end::Col-->
                                                    </div>

											</div>
											<!--end::Card body-->
											<!--begin::Actions-->
											<div class="card-footer d-flex justify-content-end py-6 px-9">
												<button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">{{__('Update Office')}}</button>
											</div>
											<!--end::Actions-->
										<input type="hidden"><div></div></form>
										<!--end::Form-->
									</div>
									<!--end::Content-->
								</div>



@endsection


