@extends('layouts.fleet')

@section('content')
                                                       
<div class="card mb-5 mb-xl-10">
									<!--begin::Card header-->
									<div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
										<!--begin::Card title-->
										<div class="card-title m-0">
											<h3 class="fw-bolder m-0">{{__('Edit Driver')}}</h3>
                                            
										</div>
										<!--end::Card title-->
									</div>
									<!--begin::Card header-->
									<!--begin::Content-->
									<div id="kt_account_settings_profile_details" class="collapse show">
										<!--begin::Form-->
										<form id="kt_account_profile_details_form" class="form fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate" method="post" action="{{route('driver_update',$driver->id)}}" enctype="multipart/form-data">
                                            {{csrf_field()}}
											<!--begin::Card body-->
											<div class="card-body border-top p-9">
												<!--begin::Input group-->
												<div class="row mb-6">
													<!--begin::Label-->
													<label class="col-lg-4 col-form-label fw-bold fs-6">{{__('Avatar')}}</label>
													<!--end::Label-->
													<!--begin::Col-->
													<div class="col-lg-8">
														<!--begin::Image input-->
														<div class="image-input image-input-outline image-input-empty" data-kt-image-input="true" style="background-image: url('{{asset($driver->User->avatar)}}')">
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
                                                        @if($errors->has('avatar'))
                                                            <div class="fv-plugins-message-container invalid-feedback">{{ $errors->first('avatar') }}</div>
                                                        @endif
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
														<input type="email" required name="email" class="form-control form-control-lg form-control-solid" placeholder="E-mail" value="{{$driver->User->email}}">
                                                        @if($errors->has('email'))
                                                            <div class="fv-plugins-message-container invalid-feedback">{{ $errors->first('email') }}</div>
                                                        @endif
                                                        </div>
													<!--end::Col-->
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="row mb-6">
													<!--begin::Label-->
													<label class="col-lg-4 col-form-label required fw-bold fs-6">{{__('Password')}}</label>
													<!--end::Label-->
													<!--begin::Col-->
													<div class="col-lg-8 fv-row fv-plugins-icon-container">
														<input type="password" required name="password" class="form-control form-control-lg form-control-solid" placeholder="Password" value="{{$driver->User->Password}}">
                                                        @if($errors->has('password'))
                                                            <div class="fv-plugins-message-container invalid-feedback">{{ $errors->first('password') }}</div>
                                                        @endif
                                                        </div>
													<!--end::Col-->
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="row mb-6">
													<!--begin::Label-->
													<label class="col-lg-4 col-form-label required fw-bold fs-6">{{__('Full Name')}}</label>
													<!--end::Label-->
													<!--begin::Col-->
													<div class="col-lg-8 fv-row fv-plugins-icon-container">
														<input type="text" required name="name" class="form-control form-control-lg form-control-solid" placeholder="Full name" value="{{$driver->User->name}}">
                                                        @if($errors->has('name'))
                                                            <div class="fv-plugins-message-container invalid-feedback">{{ $errors->first('name') }}</div>
                                                        @endif
                                                        </div>
													<!--end::Col-->
												</div>
												<!--end::Input group-->
                                                <!--begin::Input group-->
												<div class="row mb-6">
													<!--begin::Label-->
													<label class="col-lg-4 col-form-label required fw-bold fs-6">{{__('National Number(ID Number)')}}</label>
													<!--end::Label-->
													<!--begin::Col-->
													<div class="col-lg-8 fv-row fv-plugins-icon-container">
														<input type="text" required name="nt_number" class="form-control form-control-lg form-control-solid" placeholder="National Number(ID Number)" value="{{$driver->User->nt_number}}">
                                                        @if($errors->has('nt_number'))
                                                            <div class="fv-plugins-message-container invalid-feedback">{{ $errors->first('nt_number') }}</div>
                                                        @endif
                                                        </div>
													<!--end::Col-->
												</div>
												<!--end::Input group-->
                                                <!--begin::Input group-->
												<div class="row mb-6">
													<!--begin::Label-->
													<label class="col-lg-4 col-form-label required fw-bold fs-6">{{__('Birthdate')}}</label>
													<!--end::Label-->
													<!--begin::Col-->
													<div class="col-lg-8 fv-row fv-plugins-icon-container">
														<input type="date" required name="birthdate" class="form-control form-control-lg form-control-solid" placeholder="Birthdate" value="{{$driver->birthdate}}">
                                                        @if($errors->has('birthdate'))
                                                            <div class="fv-plugins-message-container invalid-feedback">{{ $errors->first('birthdate') }}</div>
                                                        @endif
                                                        </div>
													<!--end::Col-->
												</div>
												<!--end::Input group-->
                                                <!--begin::Input group-->
												<div class="row mb-6">
													<!--begin::Label-->
													<label class="col-lg-4 col-form-label required fw-bold fs-6">{{__('License Number')}}</label>
													<!--end::Label-->
													<!--begin::Col-->
													<div class="col-lg-8 fv-row fv-plugins-icon-container">
														<input type="text" required name="license_number" class="form-control form-control-lg form-control-solid" placeholder="License Number" value="{{$driver->license_number}}">
                                                        @if($errors->has('license_number'))
                                                            <div class="fv-plugins-message-container invalid-feedback">{{ $errors->first('license_number') }}</div>
                                                        @endif
                                                        </div>
													<!--end::Col-->
												</div>
												<!--end::Input group-->
                                                <!--begin::Input group-->
												<div class="row mb-6">
													<!--begin::Label-->
													<label class="col-lg-4 col-form-label required fw-bold fs-6">{{__('Years Of Exp')}}</label>
													<!--end::Label-->
													<!--begin::Col-->
													<div class="col-lg-8 fv-row fv-plugins-icon-container">
														<input type="text" required name="exp_year" class="form-control form-control-lg form-control-solid" placeholder="Years Of Exp" value="{{$driver->exp_year}}">
                                                        @if($errors->has('exp_year'))
                                                            <div class="fv-plugins-message-container invalid-feedback">{{ $errors->first('exp_year') }}</div>
                                                        @endif
                                                        </div>
													<!--end::Col-->
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="row mb-6">
													<!--begin::Label-->
													<label class="col-lg-4 col-form-label fw-bold fs-6">
														<span class="required">{{__('Contact Phone')}}</span>
														<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="" data-bs-original-title="Phone number must be active" required aria-label="Phone number must be active"></i>
													</label>
													<!--end::Label-->
													<!--begin::Col-->
													<div class="col-lg-8 fv-row fv-plugins-icon-container">
														<input type="tel" name="phone" class="form-control form-control-lg form-control-solid" placeholder="Phone number" value="{{$driver->User->phone}}">
                                                        @if($errors->has('phone'))
                                                            <div class="fv-plugins-message-container invalid-feedback">{{ $errors->first('phone') }}</div>
                                                        @endif
                                                        </div>
													<!--end::Col-->
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="row mb-6">
													<!--begin::Label-->
													<label class="col-lg-4 col-form-label fw-bold fs-6">
														<span class="required">{{__('Belong To Office')}}</span>
														
													</label>
													<!--end::Label-->
													<!--begin::Col-->
													<div class="col-lg-8 fv-row fv-plugins-icon-container">
														<select name="office_id" required class="form-control form-control-lg form-control-solid" id="">
                                                            <option value="">{{__('Please Select Office')}}</option>
                                                            @foreach($offices as $office)
                                                                <option value="{{$office->id}}" @if($driver->office_id == $office->id) selected @endif>{{$office->name}}</option>
                                                            @endforeach
                                                        </select>
                                                        @if($errors->has('office_id'))
                                                            <div class="fv-plugins-message-container invalid-feedback">{{ $errors->first('office_id') }}</div>
                                                        @endif
                                                        </div>
													<!--end::Col-->
												</div>
												<!--end::Input group-->
											</div>
											<!--end::Card body-->
											<!--begin::Actions-->
											<div class="card-footer d-flex justify-content-end py-6 px-9">
												<button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">{{__('Update Driver Informations')}}</button>
											</div>
											<!--end::Actions-->
										<input type="hidden"><div></div></form>
										<!--end::Form-->
									</div>
									<!--end::Content-->
								</div>



@endsection


