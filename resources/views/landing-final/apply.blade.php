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
		<title>Fleet Taxi</title>
		<meta charset="utf-8" />

		<meta name="title" content="Fleet Taxi | Taxi For Everyone And Everyday" />
		<meta name="description" content="Taxi For Everyone And Everyday" />

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
        <link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
	</head>
	<!--end::Head-->
	<style>
		body {
			direction: rtl;
			text-align: right;
			font-family: 'Cairo', sans-serif; /* تطبيق خط Cairo على الجسم */
		}
	</style>
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

	.language-switcher {
	  margin: 20px 0;
	}

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
		padding: 5px 10px; /* تعديل الحواف الداخلية */
		border-radius: 5px; /* تعديل الزوايا */
		font-size: 14px; /* تعديل حجم الخط */
		font-weight: bold; /* جعل النص عريض */
		color: #000; /* لون النص */
		background-color: #fff; /* خلفية بيضاء */
		border: 1px solid #ccc; /* إطار رمادي فاتح */
	  }

	  .language-switcher .btn:hover {
		background-color: #f0f0f0; /* تغيير الخلفية عند التحويم */
	  }

	  .flag-icon {
		width: 20px; /* عرض العلم */
		height: 20px; /* ارتفاع العلم */
	  }

	  .language-switcher .btn img {
		margin-right: 5px; /* مسافة بين العلم والنص */
	  }

	  .language-switcher .btn:focus {
		outline: none; /* إزالة الحدود عند التركيز */
	  }

	  .language-switcher .btn-ar {
		margin-right: 10px; /* مسافة بين الزرين */
	  }
	  </style>
	<!--begin::Body-->
	<body id="kt_body" data-bs-spy="scroll" data-bs-target="#kt_landing_menu" data-bs-offset="200" class="bg-white position-relative">

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
									<a href="{{ route('welcome') }}">
										<img alt="Logo" src="{{ asset('assets/logo.jpg') }}" class="logo-default h-50px h-lg-60px" />
										<img alt="Logo" src="{{ asset('assets/logo.jpg') }}" class="logo-sticky h-40px h-lg-50px" />

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
                                                        <img class="w-15px h-15px rounded-1 ms-2" src="{{ asset('assets/media/flags/syria.svg') }}" alt="Arabic">
                                                        عربي
                                                      </div>
                                                      <div class=" menu-link nav-link content_en" style="display: none;">
                                                        <img class="w-15px h-15px rounded-1 ms-2" src="{{ asset('assets/media/flags/united-states.svg') }}" alt="English">
                                                        English
                                                      </div>
                                                    </button>
                                                    <ul class="dropdown-menu" aria-labelledby="languageDropdown">
                                                      <li>
                                                        <a class="dropdown-item" href="#" onclick="changeLanguage('ar')">
                                                          <img class="w-15px h-15px rounded-1 ms-2" src="{{ asset('assets/media/flags/syria.svg') }}" alt="Arabic">
                                                          عربي
                                                        </a>
                                                      </li>
                                                      <li>
                                                        <a class="dropdown-item" href="#" onclick="changeLanguage('en')">
                                                          <img class="w-15px h-15px rounded-1 ms-2" src="{{ asset('assets/media/flags/united-states.svg') }}" alt="English">
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
												<a class="menu-link nav-link py-3 px-4 px-xxl-6 content_ar" href="{{ route('welcome') }}#home" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">الرئيسية</a>
												<a class="menu-link nav-link py-3 px-4 px-xxl-6 content_en" href="{{ route('welcome') }}#home" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true" style="display: none;">Home</a>
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
																	<a class="dropdown-item" href="{{ route('welcome') }}#howus">
																		<div class="content_ar">
																			من نحن
																		</div>
																		<div class="content_en" style="display: none;">
																			Who we are
																		</div>
																	</a>
																</li>
																<li>
																	<a class="dropdown-item" href="{{ route('welcome') }}#how-it-works">
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
												<a class="menu-link nav-link py-3 px-4 px-xxl-6 content_ar" href="{{ route('welcome') }}#service" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">خدماتنا</a>
												<a class="menu-link nav-link py-3 px-4 px-xxl-6 content_en" href="{{ route('welcome') }}#service" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true" style="display: none;">Our services</a>
												<!--end::Menu link-->
											</div>
											<div class="menu-item">
												<!--begin::Menu link-->
												<a class="menu-link nav-link py-3 px-4 px-xxl-6 content_ar" href="{{ route('aboutapp') }}  " data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true"> كيفية عمل التتطبيق</a>
												<a class="menu-link nav-link py-3 px-4 px-xxl-6 content_en"  href="{{ route('aboutapp') }} " data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true" style="display: none;">How it work</a>
												<!--end::Menu link-->
											</div>

											<!--end::Menu item-->
											<!--begin::Menu item-->

											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item">
												<!--begin::Menu link-->
												<a class="menu-link nav-link py-3 px-4 px-xxl-6 content_ar" href="{{ route('welcome') }}#workus" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">انضم الينا</a>
												<a class="menu-link nav-link py-3 px-4 px-xxl-6 content_en" href="{{ route('welcome') }}#workus" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true" style="display: none;">Join Us</a>
												<!--end::Menu link-->
											</div>
											<div class="menu-item">
												<!--begin::Menu link-->
												<a class="menu-link nav-link py-3 px-4 px-xxl-6 content_ar" href="{{ route('welcome') }}#contant" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">تواصل</a>
												<a class="menu-link nav-link py-3 px-4 px-xxl-6 content_en"  href="{{ route('welcome') }}#contant" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true" style="display: none;">Contact</a>
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
									<a id="btn-login-ar" href="{{ route('login') }}" class="btn btn-success content_ar">تسجيل دخول</a>
									<a id="btn-login-en" href="{{ route('login') }}" class="btn btn-success content_en" style="display: none;">Sign In</a>
								</div>

								<!--end::Toolbar-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Header-->
					<!--begin::Landing hero-->

					<!--end::Landing hero-->
				</div>
				<!--end::Wrapper-->
				<!--begin::Curve bottom-->

				<!--end::Curve bottom-->
			</div>
			<!--end::Header Section-->
			<div class="d-flex flex-column flex-root">
				<!--begin::Page-->
				<div class="page d-flex flex-row flex-column-fluid">


					<!--begin::Wrapper-->
					<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
						<!--begin::Header-->

							<!--begin::Post-->
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl">
            <!--begin::Careers - Apply-->
            <div class="card">
            @if(session('msg'))
                <div class="alert alert-success" role="alert">
                    {{ session('msg') }}
                </div>
            @endif
                <!--begin::Body-->
                <div class="card-body p-lg-17">
                    <!--begin::Hero-->
                    <div class="position-relative mb-17">
                        <!--begin::Overlay-->
                        <div class="overlay overlay-show">
                            <!--begin::Image-->
                            <div class="bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-250px" style="background-image:url('assets/media/stock/1600x800/img-1.jpg')"></div>
                            <!--end::Image-->
                            <!--begin::layer-->
                            <div class="overlay-layer rounded bg-black" style="opacity: 0.4"></div>
                            <!--end::layer-->
                        </div>
                        <!--end::Overlay-->
                        <!--begin::Heading-->
                        <div class="position-absolute text-white mb-8 ms-10 bottom-0">
							<!--begin::Title-->
							<h3 class="text-white left fs-2qx fw-bolder mb-3 m content_en">Careers at Fleet</h3>
							<h3 class="text-white left fs-2qx fw-bolder mb-3 m content_ar" style="display: none;">الوظائف في فليت</h3>
							<!--end::Title-->
							<!--begin::Text-->
							<!--end::Text-->
						</div>
                        <!--end::Heading-->
                    </div>
                    <!--end::-->
                    <!--begin::Layout-->
                    <div class="d-flex flex-column flex-lg-row mb-17">
						<!--begin::Content-->
						<div class="flex-lg-row-fluid me-0 me-lg-20">
							<!--begin::Form-->
							<form action="{{ route('request_employee.store') }}" class="form mb-15" method="post" >
                                @method("POST")
                                @csrf
								<!--begin::Input group-->
								<div class="row mb-5">
									<!--begin::Col-->
									<div class="col-md-6 fv-row">
										<!--begin::Label-->
										<label class="required fs-5 fw-bold mb-2 content_ar">الاسم الآول</label>
										<label class="required fs-5 fw-bold mb-2 content_en" style="display: none;">First Name</label>
										<!--end::Label-->
										<!--begin::Input-->
										<input type="text" required class="form-control form-control-solid @error('firstName') is-invalid @enderror" placeholder="" name="firstName" />
                                        @error('firstName')
                                        <div class="invalid-feedback">{{ $errors->first('firstName') }}
                                        </div>
                                         @enderror										<!--end::Input-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-md-6 fv-row">
										<!--begin::Label-->
										<label class="required fs-5 fw-bold mb-2 content_ar">الكنية</label>
										<label class="required fs-5 fw-bold mb-2 content_en" style="display: none;">Last Name</label>
										<!--end::Label-->
										<!--begin::Input-->
										<input type="text" required class="form-control form-control-solid @error('lastName') is-invalid @enderror" placeholder="" name="lastName" />
                                        @error('lastName')
                                        <div class="invalid-feedback">{{ $errors->first('lastName') }}</div> @enderror										<!--end::Input-->
									</div>
									<!--end::Col-->
								</div>
								<!--end::Input group-->
								<!--begin::Input group-->
								<div class="row mb-5">
									<!--begin::Col-->
									<div class="col-md-6 fv-row">
										<!--begin::Label-->
										<label class="required fs-5 fw-bold mb-2 content_ar">البريد الإلكتروني</label>
										<label class="required fs-5 fw-bold mb-2 content_en" style="display: none;">Email</label>
										<!--end::Label-->
										<!--begin::Input-->
										<input class="form-control form-control-solid @error('email') is-invalid @enderror" required type="email" placeholder="" name="email" />
                                        @error('email')
                                        <div class="invalid-feedback">{{ $errors->first('email') }}</div> @enderror
										<!--end::Input-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-md-6 fv-row">
										<!--begin::Label-->
										<label class="fs-5 fw-bold mb-2 content_ar">رقم الهاتف</label>
										<label class="fs-5 fw-bold mb-2 content_en" style="display: none;">Phone Number</label>
										<!--end::Label-->
										<!--begin::Input-->
										<input type="text" required  class="form-control form-control-solid @error('phoneNumber') is-invalid @enderror" placeholder="" name="phoneNumber" />
                                        @error('phoneNumber')
                                        <div class="invalid-feedback">{{ $errors->first('phoneNumber') }}</div> @enderror										<!--end::Input-->
									</div>
									<!--end::Col-->
								</div>
								<!--end::Input group-->
								<!--begin::Input group-->
								<div class="row mb-5">
									<!--begin::Col-->
									<div class="col-md-6 fv-row">
										<!--begin::Label-->
										<label class="required fs-5 fw-bold mb-2 content_ar">العمر</label>
										<label class="required fs-5 fw-bold mb-2 content_en" style="display: none;">Age</label>
										<!--end::Label-->
										<!--begin::Input-->
										<input type="text" required class="form-control form-control-solid @error('age') is-invalid @enderror" placeholder="" name="age" />
                                        @error('age')
                                        <div class="invalid-feedback">{{ $errors->first('age') }}</div> @enderror										<!--end::Input-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-md-6 fv-row">
										<!--begin::Label-->
										<label class="required fs-5 fw-bold mb-2 content_ar">المدينة</label>
										<label class="required fs-5 fw-bold mb-2 content_en" style="display: none;">City</label>
										<!--end::Label-->
										<!--begin::Input-->
										<input type="text" required class="form-control form-control-solid @error('city') is-invalid @enderror" placeholder="" name="city" />
                                        @error('city')
                                        <div class="invalid-feedback">{{ $errors->first('city') }}</div> @enderror										<!--end::Input-->
									</div>
									<!--end::Col-->
								</div>
								<!--end::Input group-->
								<!--begin::Input group-->
								<div class="d-flex flex-column mb-5 fv-row">
									<!--begin::Label-->
									<!-- <label class="d-flex align-items-center fs-5 fw-bold mb-2 content_ar">
										<span class="required content_ar">الوظيفة</span>
										<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Your payment statements may vary based on selected position"></i>
									</label> -->
									<label class="d-flex align-items-center fs-5 fw-bold mb-2 content_en" style="display: none;">
										<span class="required content_">Position</span>
										<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Your payment statements may vary based on selected position"></i>
									</label>
									<!--end::Label-->
									<!--begin::Select-->
									<select name="poistion" data-control="select2" data-placeholder="Select a position..." class="form-select form-select-solid @error('poistion') is-invalid @enderror">
                                        @foreach ($positions as $position)
                                        <option value={{ $position->id }}>{{ $position->name }}</option>
                                        @endforeach
									</select>
                                    @error('poistion')
                                    <div class="invalid-feedback">{{ $errors->first('poistion') }}</div> @enderror									<!--end::Select-->
								</div>
								<!--end::Input group-->
								<!--begin::Input group-->
								<div class="row mb-5">
									<!--begin::Col-->
									<div class="col-md-6 fv-row">
										<!--begin::Label-->
										<label class="required fs-5 fw-bold mb-2 content_ar">الراتب المتوقع</label>
										<label class="required fs-5 fw-bold mb-2 content_en" style="display: none;">Expected Salary</label>
										<!--end::Label-->
										<!--begin::Input-->
										<input type="text" required class="form-control form-control-solid @error('salary') is-invalid @enderror" placeholder="" name="salary" />
                                        @error('salary')
                                        <div class="invalid-feedback">{{ $errors->first('salary') }}</div> @enderror										<!--end::Input-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-md-6 fv-row">
										<!--begin::Label-->
										<label class="required fs-5 fw-bold mb-2 content_ar">تاريخ البدء</label>
										<label class="required fs-5 fw-bold mb-2 content_en" style="display: none;">Start Date</label>
										<!--end::Label-->
										<!--begin::Input-->
										<input type="date"  required class="form-control form-control-solid @error('startDate') is-invalid @enderror" placeholder="" name="startDate" />
                                        @error('startDate')
                                        <div class="invalid-feedback">{{ $errors->first('startDate') }}</div> @enderror

										<!--end::Input-->
									</div>
									<!--end::Col-->
								</div>
								<!--end::Input group-->
								<!--begin::Input group-->
								<div class="d-flex flex-column mb-5 fv-row">
									<!--begin::Label-->
									<label class="fs-5 fw-bold mb-2 content_ar">الموقع الإلكتروني (إن وجد)</label>
									<label class="fs-5 fw-bold mb-2 content_en" style="display: none;">Website (If Any)</label>
									<!--end::Label-->
									<!--begin::Input-->
									<input class="form-control form-control-solid @error('website') is-invalid @enderror" placeholder="" name="website" />
                                    @error('website')
                                    <div class="invalid-feedback">{{ $errors->first('website') }}</div> @enderror
									<!--end::Input-->
								</div>
								<!--end::Input group-->
								<!--begin::Input group-->
								<div class="d-flex flex-column mb-5">
									<label class="fs-6 fw-bold mb-2 content_ar">عدد سنوات الخبرة</label>
									<label class="fs-6 fw-bold mb-2 content_en" style="display: none;">Years of Experience</label>
									<input type="number" required class="form-control form-control-solid @error('numOfExperience') is-invalid @enderror" rows="2" name="numOfExperience" placeholder=""></input type="number">
                                    @error('numOfExperience')
                                    <div class="invalid-feedback">{{ $errors->first('numOfExperience') }}</div>
                                    @enderror
                                </div>
								<!--end::Input group-->
								<!--begin::Input group-->
								<div class="d-flex flex-column mb-8">
									<label class="fs-6 fw-bold mb-2 content_ar">ملاحظات</label>
									<label class="fs-6 fw-bold mb-2 content_en" style="display: none;">Notes</label>
									<textarea class="form-control form-control-solid @error('notes') is-invalid @enderror" rows="4" name="notes" placeholder=""></textarea>
                                    @error('notes')
                                    <div class="invalid-feedback">{{ $errors->first('notes') }}</div> @enderror
								</div>
								<!--end::Input group-->
                                <!--begin::Input group-->
								<div class="row mb-5">
									<!--begin::Col-->
									<div class="col-md-6 fv-row">
                                        <img class="form-control" src="{{ captcha_src('math') }}" alt="captcha">
                                        <div class="mt-2"></div>
                                        <input
                                            type="text" name="captcha" class="form-control @error('captcha') is-invalid @enderror" placeholder="Please Insert Captch"
                                            >
                                             @error('captcha')
                                             <div class="invalid-feedback">{{ $errors->first('captcha') }}</div> @enderror
									</div>
									<!--end::Col-->
								</div>
								<!--end::Input group-->
								<!--begin::Separator-->
								<div class="separator mb-8"></div>
								<!--end::Separator-->
								<!--begin::Submit-->
								<button type="submit" class="btn btn-success" id="kt_careers_submit_button">
									<!--begin::Indicator-->
									<span class="indicator-label content_ar">تقديم الآن</span>
									<span class="indicator-label content_en" style="display: none;">Apply Now</span>
									<span class="indicator-progress">Please wait...
										<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
									<!--end::Indicator-->
								</button>
								<!--end::Submit-->
							</form>
							<!--end::Form-->
							<!--begin::Job-->
							<!--end::Job-->
						</div>
						<!--end::Content-->
					</div>
                    <!--end::Layout-->
                    <!--begin::Section-->

                    <!--end::Section-->
                    <!--begin::Card-->

                    <!--end::Card-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Careers - Apply-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Post-->

						<!--end::Footer-->
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Page-->
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
									<a id="link-join-ar" href="#" class="text-white opacity-50 text-hover-primary fs-5 mb-6 content_ar">انضم إلينا</a>
									<a id="link-join-en" href="#" class="text-white opacity-50 text-hover-primary fs-5 mb-6 content_en" style="display: none;">Join US</a>

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
								<a href="{{ route('welcome') }}">
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
		<!--end::Page Custom Javascript-->
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>
