<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Metronic - Bootstrap 5 HTML, VueJS, React, Angular & Laravel Admin Dashboard Theme
Purchase: https://1.envato.market/EA4JP
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
	<!--begin::Head-->
	<head><base href="">
        <title>{{App\WebsiteSetting::find(1)->first()->website_name}} | {{App\WebsiteSetting::find(1)->first()->website_slug}}</title>
		<meta charset="utf-8" />
		<meta name="description" content="{{App\WebsiteSetting::find(1)->first()->website_slug}}" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<link rel="shortcut icon" href="{{App\WebsiteSetting::find(1)->first()->favicon}}" />


		<meta name="title" content="Fleet Taxi | Taxi For Everyone And Everyday" />

		<!-- Open Graph / Facebook -->
		<meta property="og:type" content="website" />
		<meta property="og:url" content="{{ asset('/') }}" />
		<meta property="og:title" content="Fleet Taxi | Taxi For Everyone And Everyday" />
		<meta property="og:description" content="Taxi For Everyone And Everyday" />
		<meta property="og:image" content="https://metatags.io/images/meta-tags.png" />

		<!-- Twitter -->
		<meta property="twitter:card" content="summary_large_image" />
		<meta property="twitter:url" content="{{ asset('/') }}" />
		<meta property="twitter:title" content="Fleet Taxi | Taxi For Everyone And Everyday" />
		<meta property="twitter:description" content="Taxi For Everyone And Everyday" />

		<link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
		<link rel="shortcut icon" href="{{ asset('assets/logo.jpg') }}" />
		<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;700&display=swap" rel="stylesheet">
		<!--begin::Fonts-->
		<!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" /> -->
		<!--end::Fonts-->
		<!--begin::Global Stylesheets Bundle(used by all pages)-->
		<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
	</head>
	<!--end::Head-->
	<style>
		body {
			text-align: right;
			font-family: 'Cairo', sans-serif; /* تطبيق خط Cairo على الجسم */
		}
		.cardd {
			margin: 15px; /* زيادة المسافة بين الكاردات */
			padding: 20px;
			background-color: rgba(255, 255, 255, 0.8); /* لون خلفية مع شفافية */
			border: 1px solid #ddd;
			border-radius: 8px;
			box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
			flex: 1 0 30%; /* ضمان توزيع الكاردات بشكل مناسب */
			transition: transform 0.3s; /* إضافة تأثير الانتقال */
		}
		.cardd:hover {
			transform: scale(1.05); /* تحريك الكارد للأمام عند مرور المؤشر */
		}
		.cardd-title {
			margin-bottom: 10px;
			text-align: center; /* توسيط العنوان */
		}
		.cardd-text li {
			margin-bottom: 10px;
			color: #a1a5b7; /* لون النص */
		}


		.language-switcher {
		margin: 20px 0;
		}

		.content {
		margin: 20px auto;
		max-width: 600px;
		text-align: justify;
		}




	</style>
	<style>
		body {
	  direction: rtl;

	  text-align: right;
	  font-family: 'Cairo', sans-serif;
	  background: #f4f4f4;
	  color: #333;
	  margin: 0;
	  padding: 0;
  }

  .section-bg {
	  background-color: #fff;
	  padding: 60px 0;
  }

  .section-title {
	  text-align: center;
	  margin-bottom: 40px;
  }

  .section-title h2 {
	  font-size: 32px;
	  margin-bottom: 20px;
	  color: #444;
  }

  .section-title p {
	  font-size: 18px;
	  color: #777;
  }

  .card {
	  background: #fff;
	  border-radius: 15px;
	  padding: 20px;
	  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
	  text-align: center;
	  transition: all 0.3s ease-in-out;
	  position: relative;
	  overflow: hidden;
	  cursor: pointer;
  }

  .card::before {
	  content: '';
	  position: absolute;
	  top: -75px;
	  right: -75px;
	  width: 150px;
	  height: 150px;
	  background: #02264b;
	  border-radius: 50%;
	  z-index: 0;
	  transition: all 0.3s ease-in-out;
  }

  .card:hover::before {
	  top: -50px;
	  right: -50px;
	  width: 200px;
	  height: 200px;
  }

  .card .icon {
	  position: relative;
	  z-index: 1;
	  font-size: 40px;
	  color: #fff;
	  margin-bottom: 15px;
  }

  .card h4 {
	  position: relative;
	  z-index: 1;
	  font-size: 22px;
	  color: #fff;
	  margin-bottom: 15px;
  }

  .card p,
  .card ul,
  .card blockquote {
	  position: relative;
	  z-index: 1;
	  color: #555;
	  text-align: left;
  }

  .card h5 {
	  font-size: 18px;
	  margin: 15px 0;
	  color: #fff;
  }


  .card ul {
	  list-style-type: none;
	  padding: 0;
  }

  .card ul li {
	  font-size: 16px;
	  color: #fff;
	  margin-bottom: 10px;
	  position: relative;
	  padding-left: 20px;
  }
  .card h4 a {
  color:#50cd89; /* تغيير لون النص إلى الأخضر */
}

  .card ul li::before {
	  content: '✓';
	  position: absolute;
	  left: 0;
	  color: #fff;
  }

  .card blockquote {
	  font-size: 16px;
	  color: #fff;
	  border-left: 4px solid #fff;
	  padding-left: 15px;
	  margin-top: 20px;
  }

  [data-aos] {
	  opacity: 0;
	  transition-property: transform, opacity;
  }

  [data-aos].aos-animate {
	  opacity: 1;
  }

  [data-aos="fade-up"] {
	  transform: translate3d(0, 50px, 0);
  }

  [data-aos="fade-up"].aos-animate {
	  transform: translate3d(0, 0, 0);
  }

  .animate-click {
	  animation: click-animate 1.5s infinite;
  }

  @keyframes click-animate {
	  0%, 100% {
		  transform: scale(1);
	  }
	  50% {
		  transform: scale(1.1);
	  }
  }

  /* Custom modal center styling */
  .modal-dialog {
	  display: flex;
	  align-items: center;
	  justify-content: center;
	  min-height: 100vh;
  }
  .modal-content {
	  border-radius: 15px;
  }
  .modal-header .btn-close {
	  padding: .875rem .875rem;
	  margin: 0;
  }
  .modal-title {
	  margin-bottom: 0;
	  line-height: 1.5;
	  text-align: center;
	  color: navy; /* تلوين العنوان بلون كحلي */
  }
  .modal-body h5 {
	  color: rgb(23, 114, 11);
  }
  .left-align {
										text-align: left;
									}

/* .language-switcher {
  margin: 20px 0;
} */

.content {
  margin: 20px auto;
  max-width: 600px;
  text-align: justify;
}

#btn-login-ar, #btn-login-en {
    width: 150px; /* يمكنك تعديل العرض حسب الحاجة */
    text-align: center;
}
#applyNow-ar, #applyNow-en {
    width: 150px; /* يمكنك تعديل العرض حسب الحاجة */
    text-align: center;
    display: inline-block; /* يضمن أن الأزرار تعرض في سطر واحد إذا لزم الأمر */
  }


  </style>

<style>
	/* نمط موحد للعناوين */
	#subtitle-fleet-ar, #subtitle-fleet-en,
	#subtitle-connect-ar, #subtitle-connect-en {
	  width: 100%; /* عرض كامل */
	  text-align: center; /* توسيط النص */
	}

	/* نمط موحد للروابط */
	#link-faq-ar, #link-faq-en,
	#link-join-ar, #link-join-en,
	#link-facebook-ar, #link-facebook-en,
	#link-github-ar, #link-github-en,
	#link-twitter-ar, #link-twitter-en,
	#link-dribbble-ar, #link-dribbble-en,
	#link-instagram-ar, #link-instagram-en {
	  display: inline-block; /* لضمان عدم كسر الخط */
	  width: 100%; /* عرض كامل */
	  text-align: center; /* توسيط النص */
	}
	.language-switcher .btn {
  display: flex;
  align-items: center;
  gap: 10px;
  padding: 5px 5px;
}

.language-switcher .btn img {
  width: 20px;
  height: 20px;
}

.language-switcher .dropdown-menu .dropdown-item {
  display: flex;
  align-items: center;
  gap: 10px;
  padding: 5px 10px;
}

.language-switcher .dropdown-menu .dropdown-item img {
  width: 20px;
  height: 20px;
}

  </style>

	<!--begin::Body-->
	<body id="kt_body"  data-bs-spy="scroll" data-bs-target="#kt_landing_menu" data-bs-offset="200" class="bg-white position-relative">

		<!--begin::Main-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Header Section-->
			<div class="mb-0" id="home">
				<!--begin::Wrapper-->
				<div class="bgi-no-repeat bgi-size-contain bgi-position-x-center bgi-position-y-bottom landing-dark-bg" style="background-image: url(assets/media/svg/illustrations/landing.svg)">
					<!--begin::Header-->
					<div class="landing-header" data-kt-sticky="true" data-kt-sticky-name="landing-header" data-kt-sticky-offset="{default: '200px', lg: '300px'}">
						<!--begin::Container-->
						<div class="container">

							<!--begin::Wrapper-->
							<div class="d-flex align-items-center justify-content-between">

								<!--begin::Logo-->
								<div class="d-flex align-items-center flex-equal">

									<!--begin::Mobile menu toggle-->
									<button class="btn btn-icon btn-active-color-primary me-3 d-flex d-lg-none" id="kt_landing_menu_toggle">
										<!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
										<span class="svg-icon svg-icon-2hx">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="currentColor" />
												<path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</button>
									<!--end::Mobile menu toggle-->
									<!--begin::Logo image-->
									<a href="{{route('welcome')}}">
										<img alt="Logo" src="{{App\WebsiteSetting::find(1)->first()->website_logo}}" class="logo-default h-50px h-lg-50px" />
										<img alt="Logo" src="{{App\WebsiteSetting::find(1)->first()->website_logo}}" class="logo-sticky h-20px h-lg-25px" />
									</a>
									<!--end::Logo image-->
								</div>

								<!--end::Logo-->
								<!--begin::Menu wrapper-->
								<div class="d-lg-block" id="kt_header_nav_wrapper">

									<div class="d-lg-block p-5 p-lg-0" data-kt-drawer="true" data-kt-drawer-name="landing-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="200px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_landing_menu_toggle" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav_wrapper'}">
										<!--begin::Menu-->
										<div class="menu menu-column flex-nowrap menu-rounded menu-lg-row menu-title-gray-500 menu-state-title-primary nav nav-flush fs-5 fw-bold" id="kt_landing_menu">
											<!--begin::Menu item-->
										<div class="menu-item py-3 px-4 px-xxl-6">
											<div class="dropdown  ">
												<button class="btn no-background dropdown-toggle" type="button" id="languageDropdown" data-bs-toggle="dropdown" aria-expanded="false">
												  <div class=" menu-link nav-link content_ar">
													<img class="w-15px h-15px rounded-1 ms-2" src="assets/media/flags/syria.svg" alt="Arabic">
													عربي
												  </div>
												  <div class=" menu-link nav-link content_en" style="display: none;">
													<img class="w-15px h-15px rounded-1 ms-2" src="assets/media/flags/united-states.svg" alt="English">
													English
												  </div>
												</button>
												<ul class="dropdown-menu" aria-labelledby="languageDropdown">
												  <li>
													<a class="dropdown-item" href="#" onclick="changeLanguage('ar')">
													  <img class="w-15px h-15px rounded-1 ms-2" src="assets/media/flags/syria.svg" alt="Arabic">
													  عربي
													</a>
												  </li>
												  <li>
													<a class="dropdown-item" href="#" onclick="changeLanguage('en')">
													  <img class="w-15px h-15px rounded-1 ms-2" src="assets/media/flags/united-states.svg" alt="English">
													  English
													</a>
												  </li>
												</ul>
											  </div>
										</div>




												<style>
													.no-background {
														background: none !important;
														border: none !important;
														box-shadow: none !important;
														padding: 0 !important;
														color: white !important; /* لون النص أبيض */
													}

													.dropdown-toggle::after {
														display: none;
													}



													.language-switcher .btn {
														display: flex;
														align-items: center;
														gap: 10px;
														color: white; /* لون النص داخل الزر أبيض */
													}

													.language-switcher .btn img {
														width: 20px;
														height: 20px;
													}

													.language-switcher .dropdown-menu .dropdown-item {
														display: flex;
														align-items: center;
														gap: 10px;

													}

													.language-switcher .dropdown-menu .dropdown-item img {
														width: 20px;
														height: 20px;
													}
													.language-switcher {

														margin-left: auto; /* للتأكد من محاذاة العنصر إلى اليمين */
													}
													.language-text {
														color: white; /* لون النص داخل الزر */
													}


												</style>

											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item">
												<!--begin::Menu link-->
												<a class="menu-link nav-link py-3 px-4 px-xxl-6 content_ar" href="#home" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">الرئيسية</a>
												<a class="menu-link nav-link py-3 px-4 px-xxl-6 content_en" href="#home" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true" style="display: none;">Home</a>
												<!--end::Menu link-->
											</div>
											<div class="menu-item">
														<div class="dropdown">
															<button class="btn no-background dropdown-toggle" type="button" id="menuDropdown" data-bs-toggle="dropdown" aria-expanded="false">

																<div class=" menu-item content_ar ">
																	<a class="menu-link nav-link py-3 px-4 px-xxl-6 content_ar"data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">حول</a>
																</div>

																<div class=" menu-item content_en" style="display: none;">
																	<a class="menu-link nav-link py-3 px-4 px-xxl-6 content_en" style="display: none;" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">About</a>

																</div>
															</button>
															<ul class="dropdown-menu" aria-labelledby="menuDropdown">
																<li>
																	<a class="dropdown-item" href="#howus">
																		<div class="content_ar">
																			من نحن
																		</div>
																		<div class="content_en" style="display: none;">
																			Who we are
																		</div>
																	</a>
																</li>
																<li>
																	<a class="dropdown-item" href="#how-it-works">
																		<div class="content_ar">
																			عن التطبيق
																		</div>
																		<div class="content_en" style="display: none;">
																			About the application
																		</div>
																	</a>
																</li>
															</ul>
														</div>
											</div>
											<style>
												.no-background {
													background: none !important;
													border: none !important;
													box-shadow: none !important;
													padding: 0 !important;
													color: white !important;
												}

												.dropdown-toggle::after {
													display: none;
												}



												.language-switcher {
													margin-top: 0;
												}

												.language-switcher .btn, .dropdown .btn {
													display: flex;
													align-items: center;
													gap: 10px;
													color: white;
												}

												.language-switcher .btn img, .dropdown .btn img {
													width: 20px;
													height: 20px;
												}

												.language-switcher .dropdown-menu .dropdown-item, .dropdown .dropdown-menu .dropdown-item .content_ar  {
													display: flex;
													align-items: center;
													gap: 10px;
													direction: rtl !important; /* إضافة هذا السطر لمحاذاة النصوص من اليمين */
												}



												.language-switcher .dropdown-menu .dropdown-item img, .dropdown .dropdown-menu .dropdown-item img {
													width: 20px;
													height: 20px;
												}

												.language-switcher {
													position: relative;
													right: 20px;
													top: 0;
													margin-left: auto;
												}

												.language-text {
													color: white;
												}
												</style>
											<div class="menu-item">
												<!--begin::Menu link-->
												<a class="menu-link nav-link py-3 px-4 px-xxl-6 content_ar" href="#service" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">خدماتنا</a>
												<a class="menu-link nav-link py-3 px-4 px-xxl-6 content_en" href="#service" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true" style="display: none;">Our services</a>
												<!--end::Menu link-->
											</div>
											<div class="menu-item">
												<!--begin::Menu link-->
												<a class="menu-link nav-link py-3 px-4 px-xxl-6 content_ar" href="{{ route('aboutapp') }}" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true"> كيفية عمل التتطبيق</a>
												<a class="menu-link nav-link py-3 px-4 px-xxl-6 content_en" href="{{ route('aboutapp') }}" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true" style="display: none;">How it work</a>
												<!--end::Menu link-->
											</div>

											<!--end::Menu item-->
											<!--begin::Menu item-->

											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item">
												<!--begin::Menu link-->
												<a class="menu-link nav-link py-3 px-4 px-xxl-6 content_ar" href="#workus" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">انضم الينا</a>
												<a class="menu-link nav-link py-3 px-4 px-xxl-6 content_en" href="#workus" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true" style="display: none;">Join Us</a>
												<!--end::Menu link-->
											</div>
											<div class="menu-item">
												<!--begin::Menu link-->
												<a class="menu-link nav-link py-3 px-4 px-xxl-6 content_ar" href="#contant" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">تواصل</a>
												<a class="menu-link nav-link py-3 px-4 px-xxl-6 content_en" href="#contant" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true" style="display: none;">Contact</a>
												<!--end::Menu link-->
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->

											<div class="menu-item">
												<!--begin::Menu link-->
												<a class="menu-link nav-link py-3 px-4 px-xxl-6 content_ar" href="{{ route('safety') }}" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">معايير السلامة</a>
												<a class="menu-link nav-link py-3 px-4 px-xxl-6 content_en" href="{{ route('safety') }}" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true" style="display: none;">Safety</a>
												<!--end::Menu link-->
											</div>


											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</div>
								</div>
								<!--end::Menu wrapper-->
								<!--begin::Toolbar-->
                                <div class="flex-equal text-end ms-1">
									@auth
									@if(Auth()->user()->user_type == 0)
									<a href="{{route('home')}}" class="btn btn-success">{{__('Dashboard')}}</a>
									@elseif(Auth()->user()->user_type == 1)
									<a href="{{route('office.office_dashboard')}}" class="btn btn-success">{{__('Dashboard')}}</a>
									@else
									<a href="{{route('login')}}" class="btn btn-success">{{__('Sign In')}}</a>
									@endif
									@endauth
									@guest
									<a href="{{route('login')}}" class="btn btn-success">{{__('Sign In')}}</a>
									@endguest
								</div>
								{{-- <div class="flex-equal text-end ms-1">
									<a id="btn-login-ar" href="{{ route('login') }}" class="btn btn-success content_ar">تسجيل دخول</a>
									<a id="btn-login-en" href="{{ route('login') }}" class="btn btn-success content_en" style="display: none;">Sign In</a>
								</div> --}}

								<!--end::Toolbar-->

								<!--end::Toolbar-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Header-->
					<!--begin::Landing hero-->
					<div class="d-flex flex-column flex-center w-100 min-h-350px min-h-lg-400px px-9">
						<!--begin::Heading-->

						<div class="col mb-5 d-flex align-items-center">

							<div class="col-lg-6 text-container ms-lg-20">
								<!--begin::Title-->
								<br>
								<br>
								<h1 class="text-white text-center UberMoveText-Medium lh-base mb-5 content_ar">الراحة على الطريق والرحلة الامنة
									هو هدف الذي

									<span style="background: linear-gradient(to right, #12CE5D 0%, #FFD80C 100%);-webkit-background-clip: text;-webkit-text-fill-color: transparent;">
										<span id="kt_landing_hero_text">  تعمل من اجله شركتنا.</span>
									</span>
								</h1>
								<h1 class="text-white text-center UberMoveText-Medium lh-base mb-5 content_en" style="display: none;">Comfort on the road and a safe trip is the goal for


									<span style="background: linear-gradient(to right, #12CE5D 0%, #FFD80C 100%);-webkit-background-clip: text;-webkit-text-fill-color: transparent;">
										<span id="kt_landing_hero_text">  which our company works.</span>
									</span>
								</h1>
								<!--end::Title-->
								<br>
								<br>

								<br>
								<br>
								<br>
								<br>

								<!--begin::Action-->
								<div class="d-flex flex-column flex-md-row justify-content-around">
									<button  class="btn btn-success content_ar mb-2 mb-md-0 me-md-2" style="color: #ffffff;">

										<strong class="d-inline-block">
											<strong class="font-weight-light d-block">متوفر على</strong>
											متجر التطبيقات
										</strong>
									</button>
									<button class="btn btn-success content_en mb-2 mb-md-0 me-md-2" style="display: none; color: #ffffff;">

										<strong class="d-inline-block text-left">
											<strong class="font-weight-light d-block">Available on </strong>
											App Store
											</strong>
									</button>
									<button class="btn btn-success content_ar mb-2 mb-md-0" style="color: #ffffff;">

										<strong class="d-inline-block text-left">
											<strong class="font-weight-light d-block">احصل عليه على</strong>
											تطبيقات جوجل
										</strong>
									</button>
									<button class="btn btn-success content_en" style="display: none; color: #ffffff;">

										<strong class="d-inline-block ">
											<strong class="font-weight-light d-block">Get it on</strong>
											Google Play
										</strong>
									</button>
								</div>

								<!--end::Action-->
							</div>
							<tr></tr>
							<div class="col-lg-6 d-flex justify-content-center">
								<img src="assets/mockapp.png" class="hero-image" alt="">
							</div>
						</div>
						<style>
							.hero-image {
								width: 60%;
								max-width: 270px;
								transform: rotate(+18deg); /* إمالة الصورة */
							}

							.text-container {
								max-width: 100%;
							}

							@media (max-width: 768px) {
								.row {
									flex-direction: column;
									align-items: center;
								}

								.hero-image {
									width: 50%;
									max-width: none;
									transform: rotate(0deg); /* إلغاء الإمالة على الشاشات الصغيرة */
									margin-bottom: 20px; /* إضافة مساحة أسفل الصورة */
								}

								.text-container {
									text-align: center; /* مركز النص */
								}
							}


							</style>
							<!--end::Heading-->


						<!--end::Heading-->
						<!--begin::Clients-->

						<!--end::Clients-->
					</div>
					<!--end::Landing hero-->
				</div>
				<!--end::Wrapper-->
				<!--begin::Curve bottom-->
				<div class="landing-curve landing-dark-color mb-10 mb-lg-20">
					<svg viewBox="15 12 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M0 11C3.93573 11.3356 7.85984 11.6689 11.7725 12H1488.16C1492.1 11.6689 1496.04 11.3356 1500 11V12H1488.16C913.668 60.3476 586.282 60.6117 11.7725 12H0V11Z" fill="currentColor"></path>
					</svg>
				</div>
				<!--end::Curve bottom-->
			</div>
			<!--end::Header Section-->
			<!--begin::How It Works Section-->
			<div class="mb-n30 mb-lg-n50 z-index-2">
				<!--begin::Container-->
				<div class="container" id="howus">
					<!-- Title -->
					<div class="text-center mb-5">
						<h3 class="fs-2 text-dark mb-5 content_ar">عن الشركة</h3>
						<h3 class="fs-2 text-dark mb-5 content_en" style="display: none;">About The Company</h3>
					</div>

					<!-- Cards Container -->
					<div class="d-flex flex-wrap justify-content-center">
						<!-- Mission Statement Card -->
						<div class="cardd">
							<div class="cardd-body">
								<h5 class="cardd-title content_ar">بيان المهمة</h5>
								<h5 class="cardd-title content_en" style="display: none;">Mission Statement </h5>
								<ul class="cardd-text content_ar">
									<li >تهدف Fleet إلى تحسين تجربة النقل وتوفير خدمة موثوقة ومريحة للركاب في سوريا.</li>
									<li >نسعى جاهدين لتحقيق التميز في تقديم الخدمة وتلبية احتياجات المستخدمين.</li>
								</ul>
								<ul class="cardd-text content_en" style="display: none;">
									<li ><span> Fleet aims to improve the transportation experience and provide reliable and convenient service to passengers in Syria.</span></li>
									<li ><span>We strive to achieve excellence in providing service and meeting the needs of users.</span></li>
								</ul>
							</div>
						</div>

						<!-- Company Story Card -->
						<div class="cardd">
							<div class="cardd-body">
								<h5 class="cardd-title content_ar">قصة الشركة</h5>
								<h5 class="cardd-title content_en" style="display: none;">Company Story</h5>
								<ul class="cardd-text  content_ar">
									<li>بدأت Fleet كفكرة صغيرة في دمشق، حيث أراد مؤسسوها تحسين النقل العام.</li>
									<li>تطورت الفكرة إلى تطبيق إلكتروني يسهل حجز السيارات وتنظيم الرحلات.</li>
									<li>واجهت الشركة تحديات وحققت نجاحات، وأصبحت جزءاً لا يتجزأ من حياة الناس في سوريا.</li>
								</ul>
								<ul class="cardd-text content_en" style="display: none;">
									<li><span>Fleet started as a small idea in Damascus, where its founders aimed to improve public transportation.</span></li>
									<li><span>The idea evolved into an electronic application that facilitates car booking and trip organization.</span></li>
									<li><span>The company faced challenges and achieved successes, becoming an integral part of people's lives in Syria.</span></li>
								</ul>
							</div>
						</div>


						<!-- Core Values Card -->
						<div class="cardd">
							<div class="cardd-body">
								<h5 class="cardd-title content_ar">القيم الأساسية</h5>
								<h5 class="cardd-title content_en" style="display: none;">Core Values</h5>
								<ul class="cardd-text content_ar">
									<li>الجودة: نحن ملتزمون بتقديم خدمات عالية الجودة وآمنة لمستخدمينا.</li>
									<li>الشفافية: نعمل بنزاهة ونتواصل بصدق مع المستخدمين والشركاء.</li>
									<li>الابتكار: نستمر في تطوير التطبيق، وإدخال ميزات جديدة لتحسين تجربة المستخدم.</li>
								</ul>
								<ul class="cardd-text content_en" style="display: none;">
									<li><span>Quality: We are committed to providing high-quality and secure services to our users.</span></li>
									<li><span>Transparency: We operate with honesty and communicate openly with users and partners.</span></li>
									<li><span>Innovation: We continue to develop the application and introduce new features to enhance user experience.</span></li>
								</ul>
							</div>
						</div>

					</div>
				</div>
				<!--end::Container-->
			</div>
			<!--end::How It Works Section-->
			<br>
			<br>
			<!--begin::Statistics Section-->
			<div class="mt-sm-n0">
				<!--begin::Curve top-->
				<div class="landing-curve landing-dark-color ">
					<svg viewBox="15 -1 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M1 48C4.93573 47.6644 8.85984 47.3311 12.7725 47H1489.16C1493.1 47.3311 1497.04 47.6644 1501 48V47H1489.16C914.668 -1.34764 587.282 -1.61174 12.7725 47H1V48Z" fill="currentColor"></path>
					</svg>
				</div>
				<!--end::Curve top-->
				<!--begin::Wrapper-->
				<div class="pb-15 pt-10 landing-dark-bg">
					<!--begin::Container-->
					<div class="container">
						<!-- شسسشس -->
						<div class="text-center mb-17">
							<h3 class="fs-1 text-white mb-5" id="how-it-works" data-kt-scroll-offset="{default: 100, lg: 150}">
								<span class="content_ar">عن التطبيق</span>
								<span class="content_en" style="display: none;">About the Application</span>
							</h3>
							<h3>
								<span class="content_ar" style="color: #ddd;">
									وفر بشكل كبير باستخدام أداة واحدة قوية لمجموعة متنوعة من المهام الإدارية الأساسية
								</span>
								<span class="content_en" style="color: #ddd; display: none;">
									Greatly save using a powerful single tool for a variety of basic administrative tasks
								</span>
							</h3>
						</div>


						<div class="d-flex flex-wrap justify-content-center">
							<!-- First Card -->
							<div class="cardd">
								<div class="cardd-body text-center">
									<img src="assets/media/illustrations/sketchy-1/2.png" class="mh-125px mb-9" alt="" />
									<div class="d-flex flex-center mb-5">
										<h5 id="how-it-works" class="text-dark content_ar">الميزات</h5>
										<h5 id="how-it-works" class="text-dark content_en" style="display: none;">Features</h5>
									</div>
									<div class="text-muted content_ar">
										يقدم التطبيق مجموعة واسعة من الميزات التي تشمل إمكانية اختيار الوجهة المفتوحة، وتحديد نقطة بداية ونهاية الرحلة، واختيار نوع السيارة المفضلة، وعرض تفاصيل الرحلة المتوقعة من حيث المدة والمسافة والتكلفة
									</div>
									<div class="text-muted content_en" style="display: none;">
										The application offers a wide range of features including choosing open destination, setting start and end points of the trip, selecting preferred car type, and displaying expected trip details such as duration, distance, and cost.
									</div>
								</div>
							</div>

							<!-- Second Card -->
							<div class="cardd">
								<div class="cardd-body text-center">
									<img src="assets/media/illustrations/sketchy-1/8.png" class="mh-125px mb-9" alt="" />
									<div class="d-flex flex-center mb-5">
										<h5 class="text-dark content_ar">الفوائد</h5>
										<h5 class="text-dark content_en" style="display: none;">Benefits</h5>
									</div>
									<div class="text-muted content_ar">
										يساعد التطبيق في تحسين حياة المستخدمين من خلال تسهيل التنقل بين مناطق المحافظة، وتوفير خدمة سريعة وآمنة للنقل، مما يوفر الوقت والجهد في البحث عن وسائل النقل التقليدية.
									</div>
									<div class="text-muted content_en" style="display: none;">
										The application helps improve users' lives by facilitating transportation between provincial areas, providing fast and secure transport services, thus saving time and effort in searching for traditional transportation methods.
									</div>
								</div>
							</div>
						</div>

					</div>
					<!--end::Container-->
				</div>
				<!--end::Wrapper-->
				<!--begin::Curve bottom-->
				<div class="landing-curve landing-dark-color">
					<svg viewBox="15 12 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M0 11C3.93573 11.3356 7.85984 11.6689 11.7725 12H1488.16C1492.1 11.6689 1496.04 11.3356 1500 11V12H1488.16C913.668 60.3476 586.282 60.6117 11.7725 12H0V11Z" fill="currentColor"></path>
					</svg>
				</div>
				<!--end::Curve bottom-->
			</div>
			<!--end::Statistics Section-->
			<!--begin::Team Section-->
			<div class="py-10 py-lg-20">
				<!--begin::Container-->

			<!--begin::Container-->
			<div class="container" id="service">
				<div class="section-title">
					<h2 class="content_ar">خدماتنا</h2>
					<h2 class="content_en" style="display: none;">Our Services</h2>
					<p class="content_ar">اكتشف مجموعة متنوعة من الخدمات التي نقدمها للركاب والسائقين وعملاء الشركات.</p>
					<p class="content_en" style="display: none;">Discover a variety of services we offer to passengers, drivers, and corporate clients.</p>
				</div>


				<div class="row">
					<!-- Customers Section -->
					<div class="col-lg-4 col-md-6 d-flex align-items-stretch">
						<div class="card animate-click" data-aos="fade-up" data-bs-toggle="modal" data-bs-target="#customersModal">
							<div class="icon"><i class="bx bxs-user"></i></div>
							<h4><a href="javascript:void(0)" class=" content_ar">قسم العملاء</a><a href="javascript:void(0)" class=" content_en" style="display: none;">Customers Section</a></h4>
						</div>
					</div>

					<!-- Drivers Section -->
					<div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
						<div class="card animate-click" data-aos="fade-up" data-aos-delay="100" data-bs-toggle="modal" data-bs-target="#driversModal">
							<div class="icon"><i class="bx bxs-car"></i></div>
							<h4><a href="javascript:void(0)" class=" content_ar">قسم السائقين</a><a href="javascript:void(0)" class=" content_en" style="display: none;">Drivers Section</a></h4>
						</div>
					</div>

					<!-- Corporate Clients Section -->
					<div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
						<div class="card animate-click" data-aos="fade-up" data-aos-delay="200" data-bs-toggle="modal" data-bs-target="#corporateModal">
							<div class="icon"><i class="bx bxs-briefcase"></i></div>
							<h4><a href="javascript:void(0)" class=" content_ar">عملاء المكاتب/الشركات</a><a href="javascript:void(0)" class=" content_en" style="display: none;">Corporate Clients Section</a></h4>
						</div>
					</div>
				</div>
			</div>


			<!-- Modal Structure -->
			<div class="modal fade" id="customersModal" tabindex="-1" aria-labelledby="customersModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title content_ar" id="customersModalLabel">قسم العملاء</h5>
							<h5 class="modal-title content_en" style="display: none;" id="customersModalLabel">Customers Section</h5>
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						</div>
						<div class="modal-body">
							<h5 class="content_ar">كيف يعمل:</h5>
							<h5 class="content_en" style="display: none;">How It Works:</h5>
							<p class="content_ar">
								<strong>التسجيل:</strong> عند تشغيل التطبيق لأول مرة، يطلب من العميل إدخال رقم الهاتف الجوال لتلقي كود التفعيل المكون من ستة أرقام. بعد التأكد من صحة الكود، يطلب منه إدخال الاسم والكنية والمدينة.<br>
								<strong>حجز رحلة:</strong> يحدد العميل نقطة بداية الرحلة ونهايتها، ويختار نوع السيارة. تظهر تفاصيل الرحلة المتوقعة من مدة ومسافة وكلفة، والتي يمكن أن تتغير عند نهاية الرحلة بناءً على المسافة الفعلية والزمن الفعلي.<br>
								<strong>تتبع الرحلة:</strong> عند قبول الطلب، يتلقى العميل إشعارًا بقبول الرحلة مع عرض اسم السائق والزمن المتوقع لوصوله. يمكن تتبع السيارة عبر التطبيق.
							</p>
							<p class="content_en" style="display: none;">
								<strong>Registration:</strong> When launching the app for the first time, the customer is asked to enter their mobile phone number to receive a six-digit activation code. Upon verifying the code, they are prompted to enter their name, surname, and city.<br>
								<strong>Booking a Trip:</strong> The customer selects the starting and ending points of the trip, and chooses the type of car. Expected trip details such as duration, distance, and cost are displayed, which may vary at the end of the trip based on actual distance and time.<br>
								<strong>Tracking the Trip:</strong> Upon accepting the request, the customer receives a notification confirming the trip along with the driver's name and expected arrival time. The car can be tracked through the app.
							</p>
							<h5 class="content_ar">الفؤائد التي تعود على العملاء:</h5>
							<h5 class="content_en" style="display: none;">Benefits for Customers:</h5>
							<ul class="content_ar">
								<li>السلامة: يتم اختيار أفضل السائقين لضمان أمان الركاب.</li>
								<li>الراحة: توفر سيارات قريبة من موقعك لتقليل زمن الانتظار.</li>
								<li>القدرة على تحمل التكاليف: عرض تقديرات تكلفة الرحلة مقدمًا وإمكانية الدفع نقدًا.</li>
							</ul>
							<ul class="content_en" style="display: none;">
								<li>Safety: The best drivers are chosen to ensure passenger safety.</li>
								<li>Convenience: Cars near your location to reduce waiting time.</li>
								<li>Affordability: Displaying trip cost estimates upfront and offering cash payment options.</li>
							</ul>
							<h5 class="content_ar">شهادات العملاء:</h5>
							<h5 class="content_en" style="display: none;">Customer Testimonials:</h5>
							<blockquote class="content_ar">
								<p>"تجربتي مع تطبيق Fleet كانت رائعة! السائق كان محترفًا والرحلة كانت مريحة." - عميل راضٍ</p>
								<p>"أشعر بالأمان عند استخدام Fleet، وأحب التحديثات الفورية حول موقع السيارة." - عميلة راضية</p>
							</blockquote>
							<blockquote class="content_en" style="display: none;">
								<p>"My experience with the Fleet app was excellent! The driver was professional and the trip was comfortable." - Satisfied Customer</p>
								<p>"I feel safe using Fleet, and I love the real-time updates about the car's location." - Satisfied Customer</p>
							</blockquote>
						</div>
					</div>
				</div>
			</div>


			<div class="modal fade" id="driversModal" tabindex="-1" aria-labelledby="driversModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title content_ar" id="driversModalLabel">قسم السائقين</h5>
							<h5 class="modal-title content_en" style="display: none;" id="driversModalLabel">Drivers Section</h5>
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						</div>
						<div class="modal-body">
							<h5 class="content_ar">كيف يعمل للسائقين:</h5>
							<h5 class="content_en" style="display: none;">How It Works for Drivers:</h5>
							<p class="content_ar">
								<strong>التقديم:</strong> يمكن للسائقين المهتمين التقديم عبر التطبيق وتقديم المستندات المطلوبة. بعد الموافقة، يمكنهم البدء في تقديم الخدمات.<br>
								<strong>عملية التقديم:</strong> يتضمن التقديم فحص المركبة والتحقق من السجل الجنائي والتدريب على استخدام التطبيق.
							</p>
							<p class="content_en" style="display: none;">
								<strong>Application:</strong> Interested drivers can apply through the app and submit required documents. Upon approval, they can start providing services.<br>
								<strong>Application Process:</strong> Includes vehicle inspection, background check, and training on app usage.
							</p>
							<h5 class="content_ar">الفؤائد التي تعود على السائقين:</h5>
							<h5 class="content_en" style="display: none;">Benefits for Drivers:</h5>
							<ul class="content_ar">
								<li>الأرباح المحتملة: تحقيق دخل جيد من خلال تقديم الرحلات.</li>
								<li>المرونة: القدرة على تحديد ساعات العمل المناسبة للسائق.</li>
								<li>الدعم: دعم فني متوفر على مدار الساعة لمساعدة السائقين في أي مشكلة.</li>
							</ul>
							<ul class="content_en" style="display: none;">
								<li>Potential Earnings: Earn good income by providing trips.</li>
								<li>Flexibility: Ability to choose suitable working hours.</li>
								<li>Support: 24/7 technical support available to assist drivers with any issues.</li>
							</ul>
							<h5 class="content_ar">شهادات السائقين:</h5>
							<h5 class="content_en" style="display: none;">Driver Testimonials:</h5>
							<blockquote class="content_ar">
								<p>"كوني سائقًا مع Fleet منحني المرونة في العمل وكسب المال في الوقت المناسب لي." - سائق سعيد</p>
								<p>"الدعم الفني دائمًا متواجد لمساعدتي، مما يجعل عملي أسهل." - سائق مرتاح</p>
							</blockquote>
							<blockquote class="content_en" style="display: none;">
								<p>"Being a driver with Fleet gave me flexibility in work and earned me money at the right time." - Happy Driver</p>
								<p>"Technical support is always available to help me, making my job easier." - Satisfied Driver</p>
							</blockquote>
						</div>
					</div>
				</div>
			</div>


			<div class="modal fade" id="corporateModal" tabindex="-1" aria-labelledby="corporateModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title content_ar" id="corporateModalLabel">عملاء المكاتب/الشركات</h5>
							<h5 class="modal-title content_en" style="display: none;" id="corporateModalLabel">Corporate Clients</h5>
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						</div>
						<div class="modal-body">
							<h5 class="content_ar">خدمات الشركة:</h5>
							<h5 class="content_en" style="display: none;">Company Services:</h5>
							<p class="content_ar">
								<strong>حسابات الشركات:</strong> توفير حسابات مخصصة للشركات لإدارة وتنظيم رحلات الموظفين بسهولة.
								<br><strong>خدمات الأسطول:</strong> تقديم حلول نقل متكاملة للشركات بأفضل الأسعار.
							</p>
							<p class="content_en" style="display: none;">
								<strong>Corporate Accounts:</strong> Providing dedicated accounts for companies to manage and organize employee trips easily.
								<br><strong>Fleet Services:</strong> Offering integrated transportation solutions for companies at competitive rates.
							</p>
							<h5 class="content_ar">الفؤائد:</h5>
							<h5 class="content_en" style="display: none;">Benefits:</h5>
							<ul class="content_ar">
								<li>توفير التكاليف: تقديم أسعار مخفضة للشركات والتوفير في تكاليف النقل.</li>
								<li>رضا الموظفين: تحسين رضا الموظفين من خلال توفير وسيلة نقل مريحة وآمنة.</li>
							</ul>
							<ul class="content_en" style="display: none;">
								<li>Cost Savings: Providing discounted rates for companies and saving on transportation costs.</li>
								<li>Employee Satisfaction: Enhancing employee satisfaction by providing convenient and safe transportation.</li>
							</ul>
							<h5 class="content_ar">شهادات:</h5>
							<h5 class="content_en" style="display: none;">Testimonials:</h5>
							<blockquote class="content_ar">
								<p>"خدمات Fleet للشركات وفرت لنا الكثير من التكاليف ورفعت من رضا موظفينا." - شركة ABC</p>
								<p>"نستخدم Fleet بشكل منتظم لنقل موظفينا، والخدمة دائمًا ممتازة." - شركة XYZ</p>
							</blockquote>
							<blockquote class="content_en" style="display: none;">
								<p>"Fleet services for companies saved us a lot of costs and increased our employees' satisfaction." - Company ABC</p>
								<p>"We regularly use Fleet to transport our employees, and the service is always excellent." - Company XYZ</p>
							</blockquote>
						</div>
					</div>
				</div>
			</div>


					<!--end::Container-->
				</div>
			<!--begin::Testimonials Section-->
			<div class="mt-20 mb-n20 position-relative z-index-2">
				<!--begin::Container-->
				<div class="container" id="workus">
					<!--begin::Heading-->


					<!--end::Row-->
					<!--begin::Highlight-->
					<div class="d-flex flex-stack flex-wrap flex-md-nowrap card-rounded shadow p-8 p-lg-12 mb-n5 mb-lg-n13" style="background: linear-gradient(90deg, #20AA3E 0%, #03A588 100%);">
						<!--begin::Content-->
						<div class="my-2 me-5">
							<!--begin::Title-->
							<div class="mb-13">
								<!--begin::Title-->
								<h3 class="fs-2hx text-dark mb-5 content_ar" id="workus">انضم الينا</h3>
								<h3 class="fs-2hx text-dark mb-5 content_en" style="display: none;" id="workus">Join Us</h3>
								<!--end::Title-->
								<!--begin::Text-->
								<div class="fs-5 text-white fw-bold content_ar">
									كن جزءاً من مجتمعنا النامي واستفد من خدماتنا المتميزة. مع تطبيق فليبيت، ستتمتع بتجربة سلسة ومريحة لحجز الرحلات وإدارة المهام اليومية. انضم الآن واكتشف كيف يمكن لأداتنا القوية أن تحسن حياتك وتسهل مهامك.
								</div>
								<div class="fs-5 text-white fw-bold content_en" style="display: none;">
									Be part of our growing community and benefit from our outstanding services. With Fleet, you will enjoy a smooth and convenient experience for booking trips and managing daily tasks. Join now and discover how our powerful tool can improve your life and simplify your tasks.
								</div>
								<!--end::Text-->
							</div>
							<!--end::Title-->
							<!--begin::Link-->
							<div >
								<a id ="applyNow-ar" href="{{ route('apply') }}" class="btn btn-label btn-outline border-2 btn-outline-white my-2 content_ar" id="applyNow">قدم الآن</a>
								<a id ="applyNow-en"href="{{ route('apply') }}" class="btn btn-label btn-outline border-2 btn-outline-white my-2 content_en" style="display: none;" id="applyNow">Apply Now</a>
							</div>

							<!--end::Link-->
						</div>
						<!--end::Content-->
					</div>

					<!--end::Highlight-->
				</div>
				<!--end::Container-->
			</div>
			<!--end::Testimonials Section-->
			<!--begin::Footer Section-->
			<div class="mb-0">
				<!--begin::Curve top-->
				<div class="landing-curve landing-dark-color">
					<svg viewBox="15 -1 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M1 48C4.93573 47.6644 8.85984 47.3311 12.7725 47H1489.16C1493.1 47.3311 1497.04 47.6644 1501 48V47H1489.16C914.668 -1.34764 587.282 -1.61174 12.7725 47H1V48Z" fill="currentColor"></path>
					</svg>
				</div>
				<!--end::Curve top-->
				<!--begin::Wrapper-->
				<div class="landing-dark-bg pt-12">
					<!--begin::Container-->
					<div class="container" id="contant">
						<!--begin::Row-->
						<div class="row py-10 py-lg-20">
							<!--begin::Col-->
							<div class="col-lg-6 pe-lg-16 mb-10 mb-lg-0">
								<!--begin::Block-->
								<div class="rounded landing-dark-border p-9 mb-10">
									<!--begin::Title-->
									<h2 class="text-white content_ar">هل تحتاج إلى ترخيص مخصص؟</h2>
									<h2 class="text-white content_en" style="display: none;">Need a Custom License?</h2>
									<!--end::Title-->
									<!--begin::Text-->
									<span class="fw-normal fs-4 text-gray-700 content_ar">
										راسلنا عبر البريد الإلكتروني
										<a class="text-white opacity-50 text-hover-primary">support@fleet.sy</a>
									</span>
									<span class="fw-normal fs-4 text-gray-700 content_en" style="display: none;">
										Contact us via email
										<a class="text-white opacity-50 text-hover-primary">support@fleet.sy</a>
									</span>
									<!--end::Text-->
								</div>
								<!--end::Block-->
								<!--begin::Block-->
								<div class="rounded landing-dark-border p-9">
									<!--begin::Title-->
									<h2 class="text-white content_ar">ماذا عن مشروع مخصص؟</h2>
									<h2 class="text-white content_en" style="display: none;">How about a Custom Project?</h2>
									<!--end::Title-->
									<!--begin::Text-->
									<span class="fw-normal fs-4 text-gray-700 content_ar">
										استخدم خدمة التطوير المخصصة لدينا.
										<a class="text-white opacity-50 text-hover-primary">
											0116131394-963+
										</a>
									</span>
									<span class="fw-normal fs-4 text-gray-700 content_en" style="display: none;">
										Use our custom development service.
										<a class="text-white opacity-50 text-hover-primary">
											+963-0116131394
										</a>
									</span>
									<!--end::Text-->
								</div>
								<!--end::Block-->
							</div>

							<!--end::Col-->
							<!--begin::Col-->
							<div class="col-lg-6 ps-lg-16">
								<!--begin::Navs-->
								<div class="d-flex justify-content-center">
								  <!--begin::Links-->
								  <div class="d-flex fw-bold flex-column me-20">
									<!--begin::Subtitle-->
									<h4 id="subtitle-fleet-ar" class="fw-bolder text-gray-400 mb-6 content_ar">المزيد لـ Fleet</h4>
									<h4 id="subtitle-fleet-en" class="fw-bolder text-gray-400 mb-6 content_en" style="display: none;">More for Fleet</h4>
									<!--end::Subtitle-->
									<!--begin::Link-->
									<a id="link-faq-ar" href="{{ route('policy') }}" class="text-white opacity-50 text-hover-primary fs-5 mb-6 content_ar">سياسية الخصوصية</a>
									<a id="link-faq-ar" href="{{ route('policy') }}" class="text-white opacity-50 text-hover-primary fs-5 mb-6 content_en" style="display: none;">Privacy Policy</a>
									<a id="link-faq-ar" href="{{ route('classic') }}" class="text-white opacity-50 text-hover-primary fs-5 mb-6 content_ar">الأسئلة الشائعة</a>
									<a id="link-faq-en" href="{{ route('classic') }}" class="text-white opacity-50 text-hover-primary fs-5 mb-6 content_en" style="display: none;">FAQ</a>
									<a id="link-join-ar" href="{{ route('apply') }}" class="text-white opacity-50 text-hover-primary fs-5 mb-6 content_ar">انضم إلينا</a>
									<a id="link-join-en" href="{{ route('apply') }}" class="text-white opacity-50 text-hover-primary fs-5 mb-6 content_en" style="display: none;">Join US</a>
								</div>
								  <!--end::Links-->
								  <!--begin::Links-->
								  <div class="d-flex fw-bold flex-column me-lg-20">
									<!--begin::Subtitle-->
									<h4 id="subtitle-connect-ar" class="fw-bolder text-gray-400 mb-6 content_ar">ابقى على تواصل</h4>
									<h4 id="subtitle-connect-en" class="fw-bolder text-gray-400 mb-6 content_en" style="display: none;">Stay Connected</h4>
									<!--end::Subtitle-->
									<!--begin::Link-->
									<a href="" class="mb-6 d-flex align-items-center">
									  <img src="assets/media/svg/brand-logos/facebook-4.svg" class="h-20px me-2" alt="" />
									  <span id="link-facebook-ar" class="text-white opacity-50 text-hover-primary fs-5 content_ar">فيسبوك</span>
									  <span id="link-facebook-en" class="text-white opacity-50 text-hover-primary fs-5 content_en" style="display: none;">Facebook</span>
									</a>
									<!--end::Link-->
									<!--begin::Link-->
									<a href="" class="mb-6 d-flex align-items-center">
									  <img src="assets/media/svg/brand-logos/github.svg" class="h-20px me-2" alt="" />
									  <span id="link-github-ar" class="text-white opacity-50 text-hover-primary fs-5 content_ar">جيت هاب</span>
									  <span id="link-github-en" class="text-white opacity-50 text-hover-primary fs-5 content_en" style="display: none;">Github</span>
									</a>
									<!--end::Link-->
									<!--begin::Link-->
									<a href="" class="mb-6 d-flex align-items-center">
									  <img src="assets/media/svg/brand-logos/twitter.svg" class="h-20px me-2" alt="" />
									  <span id="link-twitter-ar" class="text-white opacity-50 text-hover-primary fs-5 content_ar">تويتر</span>
									  <span id="link-twitter-en" class="text-white opacity-50 text-hover-primary fs-5 content_en" style="display: none;">Twitter</span>
									</a>
									<!--end::Link-->
									<!--begin::Link-->
									<a href="" class="mb-6 d-flex align-items-center">
									  <img src="assets/media/svg/brand-logos/dribbble-icon-1.svg" class="h-20px me-2" alt="" />
									  <span id="link-dribbble-ar" class="text-white opacity-50 text-hover-primary fs-5 content_ar">دريبل</span>
									  <span id="link-dribbble-en" class="text-white opacity-50 text-hover-primary fs-5 content_en" style="display: none;">Dribbble</span>
									</a>
									<!--end::Link-->
									<!--begin::Link-->
									<a href="" class="mb-6 d-flex align-items-center">
									  <img src="assets/media/svg/brand-logos/instagram-2-1.svg" class="h-20px me-2" alt="" />
									  <span id="link-instagram-ar" class="text-white opacity-50 text-hover-primary fs-5 content_ar">انستغرام</span>
									  <span id="link-instagram-en" class="text-white opacity-50 text-hover-primary fs-5 content_en" style="display: none;">Instagram</span>
									</a>
									<!--end::Link-->
								  </div>
								  <!--end::Links-->
								</div>
								<!--end::Navs-->
							  </div>

							<!--end::Col-->
						</div>
						<!--end::Row-->
					</div>
					<!--end::Container-->
					<!--begin::Separator-->
					<div class="landing-dark-separator"></div>
					<!--end::Separator-->
					<!--begin::Container-->
					<div class="container">
						<!--begin::Wrapper-->
						<div class="d-flex flex-column flex-md-row flex-stack py-7 py-lg-10">
							<!--begin::Copyright-->
							<div class="d-flex align-items-center order-2 order-md-1">
								<!--begin::Logo-->
								<a href="#">
									<img src="{{ asset('assets/logo.jpg') }}" alt="Logo" src="" class="h-20px h-md-25px" />
								</a>
								<!--end::Logo image-->
								<!--begin::Logo image-->
								<span class="mx-5 fs-6 fw-bold text-gray-600 pt-1" href="{{ asset('uploads/1713342078.png') }}">© 2024 Fleet.</span>
								<!--end::Logo image-->
							</div>

						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Container-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Footer Section-->
			<!--begin::Scrolltop-->
			<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
				<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
				<span class="svg-icon">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
						<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
						<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
					</svg>
				</span>
				<!--end::Svg Icon-->
			</div>
			<!--end::Scrolltop-->
		</div>
		<!--end::Root-->
		<!--end::Main-->
		<!--begin::Javascript-->
		<script>var hostUrl = "assets/";</script>
		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="assets/plugins/global/plugins.bundle.js"></script>
		<script src="assets/js/scripts.bundle.js"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Page Vendors Javascript(used by this page)-->
		<script src="assets/plugins/custom/fslightbox/fslightbox.bundle.js"></script>
		<script src="assets/plugins/custom/typedjs/typedjs.bundle.js"></script>
		<!--end::Page Vendors Javascript-->
		<!--begin::Page Custom Javascript(used by this page)-->
		<script src="assets/js/custom/landing.js"></script>
		<script src="assets/js/custom/pages/pricing/general.js"></script>
		<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            easing: 'ease-in-out',
            once: true,
            mirror: false
        });
    </script>
	<script>
		function changeLanguage(lang) {
			content_ar =document.getElementsByClassName('content_ar')
			content_en =document.getElementsByClassName('content_en')
			body = document.getElementById("kt_body")


			if (lang === 'ar') {
				body.style.direction = "rtl"
				body.style.textAlign = "right"


				for (let index = 0; index < content_ar.length; index++) {
					content_ar[index].style.display = 'block';

				}
				for (let index = 0; index < content_en.length; index++) {
					content_en[index].style.display = 'none';

				}

			} else if (lang === 'en') {
				body.style.direction = "ltr"
				body.style.textAlign = "left"

				for (let index = 0; index < content_ar.length; index++) {
					content_ar[index].style.display = 'none';

				}
				for (let index = 0; index < content_en.length; index++) {
					content_en[index].style.display = 'block';

				}
			}
			}

	</script>

	</body>
	<!--end::Body-->
</html>
