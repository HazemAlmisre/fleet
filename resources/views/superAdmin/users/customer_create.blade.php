@extends('layouts.fleet')

@section('content')
<style>
     /* Style all input fields */
input {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
}

/* Style the submit button */
input[type=submit] {
  background-color: #04AA6D;
  color: white;
}

/* Style the container for inputs */
.container {
  background-color: #f1f1f1;
  padding: 20px;
}

/* The message box is shown when the user clicks on the password field */
#message {
  display:none;
  background: #f1f1f1;
  color: #000;
  position: relative;
  padding: 20px;
  margin-top: 10px;
}

#message p {
  padding: 10px 35px;
  font-size: 18px;
}

/* Add a green text color and a checkmark when the requirements are right */
.valid {
  color: green;
}



/* Add a red text color and an "x" icon when the requirements are wrong */
.invalid {
  color: red;
}


</style>
                                                        @if(session('msg'))
                                                            <!--begin::Alert-->
                                                            <div class="alert alert-primary">
                                                                <!--begin::Icon-->
                                                                <span class="svg-icon svg-icon-2hx svg-icon-primary me-3">...</span>
                                                                <!--end::Icon-->
                                                                <!--begin::Wrapper-->
                                                                <div class="d-flex flex-column">
                                                                    <!--begin::Title-->
                                                                    <h4 class="mb-1 text-dark">{{__('Customer Adding Operation')}}</h4>
                                                                    <!--end::Title-->
                                                                    <!--begin::Content-->
                                                                    <span>{{__('Customer Added Successfully . you can view the driver profile from')}} <a href="{{route('customer_view',session('customer_id'))}}">{{__('Here')}}</a></span>
                                                                    <!--end::Content-->
                                                                </div>
                                                                <!--end::Wrapper-->
                                                            </div>
                                                            <!--end::Alert-->
                                                        @endif
                                                        @if($errors->any())
                                                            <!--begin::Alert-->
                                                            <div class="alert alert-danger">
                                                                <!--begin::Icon-->
                                                                <span class="svg-icon svg-icon-2hx svg-icon-primary me-3">...</span>
                                                                <!--end::Icon-->
                                                                <!--begin::Wrapper-->
                                                                <div class="d-flex flex-column">
                                                                    <!--begin::Title-->
                                                                    <h4 class="mb-1 text-dark">{{__('Customer Adding Operation')}}</h4>
                                                                    <!--end::Title-->
                                                                    <!--begin::Content-->
                                                                    <span>{{$errors->first()}}</span>
                                                                    <!--end::Content-->
                                                                </div>
                                                                <!--end::Wrapper-->
                                                            </div>
                                                            <!--end::Alert-->
                                                        @endif
<div class="card mb-5 mb-xl-10">
									<!--begin::Card header-->
									<div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
										<!--begin::Card title-->
										<div class="card-title m-0">
											<h3 class="fw-bolder m-0">{{__("Add Customer")}}</h3>
                                            
										</div>
										<!--end::Card title-->
									</div>
									<!--begin::Card header-->
									<!--begin::Content-->
									<div id="kt_account_settings_profile_details" class="collapse show">
										<!--begin::Form-->
										<form id="kt_account_profile_details_form" class="form fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate" method="post" action="{{route('customer_store')}}" enctype="multipart/form-data">
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
														<div class="image-input image-input-outline image-input-empty" data-kt-image-input="true" style="background-image: url('{{asset('assets/media/svg/avatars/blank.svg')}}')">
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
														<input type="email" required name="email" class="form-control form-control-lg form-control-solid" placeholder="E-mail" value="">
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
                        <input type="password" name="password" class="form-control form-control-lg form-control-solid @error('Password') is-invalid @enderror"
                            placeholder="Password"  id="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" value="">
                        <div class="fv-plugins-message-container invalid-feedback">
                        <div id="message">
                                <h3>Password must contain the following:</h3>
                                <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
                                <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
                                <p id="number" class="invalid">A <b>number</b></p>
                                <p id="length" class="invalid">Minimum <b>8 characters</b></p>
                                </div>
                                @error('Password')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
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
														<input type="text" required name="name" class="form-control form-control-lg form-control-solid" placeholder="Full name" value="">
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
														<input type="text" required name="nt_number" class="form-control form-control-lg form-control-solid" placeholder="National Number(ID Number)" value="">
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
													<label class="col-lg-4 col-form-label fw-bold fs-6">
														<span class="required">{{__('Contact Phone')}}</span>
														<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="" data-bs-original-title="Phone number must be active" required aria-label="Phone number must be active"></i>
													</label>
													<!--end::Label-->
													<!--begin::Col-->
													<div class="col-lg-8 fv-row fv-plugins-icon-container">
														<input type="tel" name="phone" class="form-control form-control-lg form-control-solid" placeholder="Phone number" value="">
                                                        @if($errors->has('phone'))
                                                            <div class="fv-plugins-message-container invalid-feedback">{{ $errors->first('phone') }}</div>
                                                        @endif
                                                        </div>
													<!--end::Col-->
												</div>
												<!--end::Input group-->
												
											</div>
											<!--end::Card body-->
											<!--begin::Actions-->
											<div class="card-footer d-flex justify-content-end py-6 px-9">
												<button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">{{__('Add Customer')}}</button>
											</div>
											<!--end::Actions-->
										<input type="hidden"><div></div></form>
										<!--end::Form-->
									</div>
									<!--end::Content-->
								</div>



@endsection

@section("scripts")

<script>
var myInput = document.getElementById("password");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
}

  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }

  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
</script>
@endsection


