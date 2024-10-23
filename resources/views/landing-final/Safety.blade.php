<!DOCTYPE html>
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
		  width: 100%;
		  height: 100%;
		}

		.section-bg {
		  background-color: #fff;
		  padding: 60px 0;
		  width: 100%;
		  height: 100%;
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
		  width: 100%;
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
		max-width: 100%;
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
  .cursor-pointer.content_ar h5,h3,h4,h5 ,h2,h1
.cursor-pointer.content_en h5,h3,h4,h5 ,h2,h1 {
	font-size: 18px;
	padding-left: 30px;
	padding-right: 30px;
    color: #168210; /* لون عنوان الفقرة في كلتا النسختين العربية والإنجليزية */
    font-weight: bold; /* زيادة سمك النص لتمييز العنوان */
    margin-bottom: 15px;
}
.cursor-pointer.content_ar ul,p
.cursor-pointer.content_en ul,p  {
	/* padding: 20px;  */
	padding-right: 30px;
	padding-left: 30px;
	padding-bottom: 10px;
    font-size: 16px; /* لون عنوان الفقرة في كلتا النسختين العربية والإنجليزية */
    font-weight: normal; /* زيادة سمك النص لتمييز العنوان */
    margin-bottom: 15px;
    list-style-position: inside;
};

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
												  <div class="menu-link nav-link content_ar">
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
												<a class="menu-link nav-link py-3 px-4 px-xxl-6 content_ar"href="{{ route('welcome') }}#home" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">الرئيسية</a>
												<a class="menu-link nav-link py-3 px-4 px-xxl-6 content_en"href="{{ route('welcome') }}#home" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true" style="display: none;">Home</a>
												<!--end::Menu link-->
											</div>
											<div class="menu-item">
														<div class="dropdown ">
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
																	<a class="dropdown-item" href="{{ route('welcome') }}#how-it-works"">
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
												<a class="menu-link nav-link py-3 px-4 px-xxl-6 content_ar" href="{{ route('welcome') }}#workus" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">انضم الينا</a>
												<a class="menu-link nav-link py-3 px-4 px-xxl-6 content_en" href="{{ route('welcome') }}#workus" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true" style="display: none;">Join Us</a>
												<!--end::Menu link-->
											</div>
											<div class="menu-item">
												<!--begin::Menu link-->
												<a class="menu-link nav-link py-3 px-4 px-xxl-6 content_ar" href="{{ route('welcome') }}#contant" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">تواصل</a>
												<a class="menu-link nav-link py-3 px-4 px-xxl-6 content_en" href="{{ route('welcome') }}#contant" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true" style="display: none;">Contact</a>
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
								<div class="flex-equal   ms-1">
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

						<!--begin::Content-->
						<div class="content d-flex flex-column flex-column-fluid" id="kt_content">

							<!--end::Toolbar-->
							<!--begin::Post-->
							<div class="post d-flex flex-column-fluid" id="kt_post">
								<!--begin::Container-->
								<div class="mb-n30 mb-lg-n50 z-index-2">
                  <!--begin::Container-->
                  <div class="container-fluid hero" id="howus">

                    <h1 class="  cursor-pointer content_ar">مميزات شركة رمو بتطبيقها فليت</h1>
                    <h1 class="  cursor-pointer content_en" style="display: none;">Advantages of Ramo Company with its Fleet application</h1>
                    <p class="  cursor-pointer content_ar">فيما يلي أهم الخدمات والمميزات التي تجعل تطبيق فليت المفضل الأكثر استعمالاً من طرف المسافرين الذين تجاوبوا مع التطبيق بشكل إيجابي<br> نظراً للخدمات التي يقدمها لهم في حياتهم اليومية.</p>
                    <p class="  cursor-pointer content_en" style="display: none;">Below are the most important services and features that make Fleet the preferred application most used by travelers who responded positively to the application due to the services it provides to them in their daily lives.</p>

                    <h2 class="  cursor-pointer content_ar">السهولة والراحة يمنحها لك تطبيق فليت للسفر Fleet App</h2>
                    <h2 class="  cursor-pointer content_en" style="display: none;">The ease and comfort provided by the Fleet App for travel</h2>
                    <p class="  cursor-pointer content_ar">الحصول على سيارة إلى وجهتك المحددة بسائق محترف ومحترم تجدها عند شركة رمو. كما أن عملية الدفع في تطبيق فليت متنوعة وسهلة وخالية من أي إجهاد، كما يساعد التطبيق على التخلص من العملية المحبطة في استدعاء سيارة أجرة، حيث يتيح التطبيق القدرة على التعامل مع كل هذه التفاصيل مباشرة من الهاتف، ونظرًا لأن تطبيق فليت يجذب السائقين للانضمام إليه.</p>
                    <p class="  cursor-pointer content_en" style="display: none;">You can get a car to your specific destination with a professional and respected driver from Remo Company. The payment process in the Fleet application is diverse, easy and stress-free, and the application also helps eliminate the frustrating process of calling a taxi, as the application provides the ability to deal with all these details directly from the phone, and since the Fleet application attracts drivers to join it.</p>

                    <ul class="cursor-pointer content_ar" >
                        <li><strong>الأسعار المنافسة من مميزات فليت : </strong> عند تجربتك السفر عن طريق تطبيق فليت, سوف تكتشف أن الأسعار منافسة مقارنة مع الخدمات التي تقدمها لكم الشركات الأخرى. و خدمات في المستوى المطلوب. سواء تعلق الأمر بأوقات العطل أو المناسبات الرياضية أو حتى نهاية الأسبوع المزدحمة. الشركة تضمن لكم أسعار منافسة.</li>
                        <li><strong>جودة الخدمة Fleet App : </strong> سيارات فليت Fleet app دائماً على أعلى جاهزية وأتم استعداد مع تحقيق معايير السلامة والنظافة.</li>
                        <li><strong>إلغاء الرحلة في تطبيق فليت Fleet App:</strong> لسبب ما قد يرغب المستخدم في إلغاء رحلته لظرف ما، سيتيح تطبيق فليت القيام بذلك عبر التطبيق. يتم الدخول إلى تطبيق فليت وإرسال رسالة إلى فريق الدعم الذين سوف يعالجون الأمر.</li>
                        <li><strong>تقييم الخدمة والسائق في تطبيق فليت Fleet App:</strong> في نهاية كل رحلة، يطلب تطبيق فليت من الزبون تقييم الخدمات وكذلك السائق من نجمة إلى خمسة نجوم. هذا يساعدنا على تطوير الخدمات والاستماع لكل نصائحكم. إضافة إلى هذا، التقييم يؤثر على التصنيف الإجمالي الحالي للسائق الذي يراه جميع الزبائن.</li>
                    </ul>
                    <ul class="cursor-pointer content_en" style="display: none;" >
                        <li><strong> Competitive prices are among the advantages of Fleet : </strong>When you experience traveling through the Fleet application, you will discover that the prices are competitive compared to the services provided to you by other companies. And services at the required level. Whether it's holidays, sporting events or even busy weekends. The company guarantees you competitive prices. </li>
                        <li><strong>Quality of service Fleet App : </strong>Fleet app cars are always at the highest level of readiness and fully prepared while meeting safety and hygiene standards.</li>
                        <li><strong>Cancellation of the trip in the Fleet App : </strong> For some reason the user may want to cancel his trip due to some circumstances, Fleet will allow this to be done through the application. Log in to the Fleet application and send a message to the support team who will handle the matter.</li>
                        <li><strong>Evaluation of the service and the driver in the Fleet App : </strong> At the end of each trip, the Fleet application asks the customer to rate the services as well as the driver from one to five stars. This helps us develop services and listen to all your advice. In addition, the rating affects the current overall driver rating seen by all customers. </li>
                    </ul>



                    <h2 class="cursor-pointer content_ar">لماذا يجب على الركاب اختيارنا</h2>
                    <h2  class="cursor-pointer content_en" style="display: none;">Why passengers should choose us</h2>
                    <p class="cursor-pointer content_ar">تطبيق فليت يقدم العديد من المزايا التي تخدم الزبناء من الدرجة الأولى. الشركة قامت بدراسة وتحليل مشكلات سوق العمل في هذا القطاع بالإضافة إلى المعاناة التي يمر بها المسافرون أثناء السفر. وقد عملت الشركة على توظيف العديد من المزايا التي تخدم الزبناء من الدرجة الأولى من أجل الحد من المشاكل التي يتعرضون لها.</p>
                    <p class="cursor-pointer content_en" style="display: none;">Fleet application offers many advantages that serve first-class customers. The company studied and analyzed the labor market problems in this sector, in addition to the suffering that travelers go through while traveling. The company has worked to employ many features that serve first-class customers in order to reduce the problems they face.</p>
                    <ul  class="cursor-pointer content_ar">
                        <li>أن تجد سيارة أجرة بالقرب منك في مدة زمنية قصيرة. وتأتي كي تقل إلى الوجهة التي تريدها هو أمر رائع حقاً تجده فقط في تطبيق فليت.</li>
                        <li>أن تكون على علم مسبق بأنك في رحلة بقيادة كابتن محترف ويعمل بشكل قانوني هو من بين الأمور التي تتميز بها شركة رمو التي تقدم هذه الخدمة من خلال تطبيقها فليت.</li>
                        <li>الحصول على سيارة مريحة تسافر بك إلى أي مدينة سورية في الوقت الذي تريده أنت، هذه الميزة تجدها فقط عبر تطبيق فليت الذي يستعمل فقط السيارات المريحة.</li>
                        <li>من بين أهم المميزات التي توفرها شركة رمو من خلال تطبيقها فليت هو احترام وتقدير على اختلافهم وتنوع فئاتهم العمرية. حيث أن الشركة تضمن لكم أن تتلقوا كافة الاحترام والتقدير وحسن المعاملة التي يتميز بها السائقين.</li>
                        <li>احترام الوقت من بين أهم الأمور التي جعلت من شركة رمو متميزة عن غيرها. احترام الوقت مع الزبناء سر أسرار نجاحها.</li>
                        <li>تعتبر استراتيجية الدفع مفيدة للغاية بالنسبة للمسافرين حيث لا يحتاجون إلا أخذ نقود دفع نقداً. أو يمكن إجراء مدفوعات عبر الإنترنت من خلال تطبيقات البنوك المحلية، أو ببساطة توصيل محافظهم المحسوبة بتطبيق فليت.</li>
                        <li>لا يحتاجون إلى الوقوف في الشوارع وطلب من سيارات الأجرة. هذا يوفر عليهم الكثير من الوقت والجهد.</li>
                    </ul>
                    <ul class="cursor-pointer content_en" style="display: none;">
                        <li>Finding a taxi nearby quickly, arriving to your destination is truly amazing, you can find it only in the FLEET application.</li>
                        <li>Being aware in advance that you are on a trip with a professional and legally operating captain is among the things that characterize Ramu Company, which provides this service through its FLEET application.</li>
                        <li>Getting a comfortable car that travels to any Syrian city at your preferred time, this feature is only available through the FLEET application, which exclusively uses comfortable cars.</li>
                        <li>Among the most important features provided by Ramu Company through its FLEET application is respect and appreciation for their diversity and different age groups. The company ensures that you receive all the respect, appreciation, and good treatment that its drivers are known for.</li>
                        <li>Respecting time is one of the key factors that has made Ramu Company stand out from others. Respecting time with customers is the secret to its success.</li>
                        <li>The payment strategy is very beneficial for travelers as they only need to take cash. Or payments can be made online through local bank applications, or simply by connecting their wallets through the FLEET application.</li>
                        <li>They do not need to stand in the streets and hail taxis. This saves them a lot of time and effort.</li>
                    </ul>

                    <h2 class="cursor-pointer content_ar">من خلال تحميل تطبيق فليت، يمكنك حجز سيارة أجرة من المكتب الذي ترغب فيه، سواء كان الأمر يتعلق بـ:</h2>
                    <ul class="cursor-pointer content_ar">
                        <li>زيارة صديق في مدينة أو منطقة أخرى.</li>
                        <li>الذهاب إلى مقر العمل.</li>
                        <li>رحلة ترفيهية مع أصدقائك.</li>
                        <li>رحلة مع العائلة.</li>
                    </ul>
                    <p class="cursor-pointer content_ar">2. اختر مكتب سيارات الأجرة: تسمح لك هذه الأيقونة بالتواصل مع أحد مكاتب سيارات الأجرة التي شركتها معنا. يمكنك أيضًا اختيار المكتب الذي ترغب فيه من خلال القائمة المنسدلة أمامك.</p>
                    <p class="cursor-pointer content_ar">3. من خلال أيقونة وضع السفر، التي توفر لك معلومات حصرية مثل موعد الانطلاق وتحديد الوجهة. من سوريا إلى لبنان أو العكس. كما ستحصل أيضًا على معلومات حصرية حول وقت السفر وتحديد الوجهة بين المدن السورية.</p>
                    <p class="cursor-pointer content_ar">4. أما بخصوص مربع البحث، فمن خلال هذه الأيقونة يمكنك طلب سيارة أجرة في وقت قياسي. يستخدم تطبيق فليت نظام تحديد المواقع بالأقمار الصناعية ويعمل مركز الاتصال على مدار 24 ساعة لربط الزبائن بسيارات الأجرة القريبة منهم بناءً على موقعهم.</p>

                    <h2  class="cursor-pointer content_en" style="display: none;">By downloading the Fleet app, you can book a taxi from the office you prefer, whether it's:</h2>
                    <ul  class="cursor-pointer content_en" style="display: none;">
                        <li>Visiting a friend in another city or region.</li>
                        <li>Going to your workplace.</li>
                        <li>Taking a recreational trip with your friends.</li>
                        <li>Going on a trip with your family.</li>
                    </ul>
                    <p  class="cursor-pointer content_en" style="display: none;">2. Choose a taxi office: This icon allows you to connect with one of the taxi offices that have partnered with us. You can also select the office you prefer from the dropdown menu in front of you.</p>
                    <p  class="cursor-pointer content_en" style="display: none;">3. Through the travel mode icon, which provides you with exclusive information such as departure times and destination selection. Whether it's from Syria to Lebanon or vice versa. You will also receive exclusive information about travel times and destination selection between Syrian cities.</p>
                    <p  class="cursor-pointer content_en" style="display: none;">4. As for the search box icon, through this you can request a taxi in record time. The Fleet app uses satellite location systems and operates a 24-hour call center to connect customers with taxis near them based on their location.</p>

                    <h2 class="cursor-pointer content_ar">تحميل تطبيق فليت</h2>
                    <ul class="cursor-pointer content_ar">
                        <li>أنشئ حساباً عن طريق إدخال عنوان بريدك الإلكتروني ورقم هاتفك.</li>
                        <li>أدخِل وجهتك: افتح التطبيق وأدخِل وجهتك في مربع الوجهة: إلى أين؟</li>
                        <li>التقِ بالسائق: يمكنك تتبُّع وصول السائق على الخريطة.</li>
                        <li>اجلِس واستمتع بمشوارك.</li>
                    </ul>

                    <h2  class="cursor-pointer content_en" style="display: none;">Download the Fleet App</h2>
                    <ul  class="cursor-pointer content_en" style="display: none;">
                        <li>Create an account by entering your email address and phone number.</li>
                        <li>Enter your destination: Open the app and enter your destination in the destination box: Where to?</li>
                        <li>Meet the driver: You can track the driver's arrival on the map.</li>
                        <li>Sit back and enjoy your ride.</li>
                    </ul>


                    <h2 class="cursor-pointer content_ar">إرشادات المستخدمين </h2>
                    <h5 class="cursor-pointer content_ar">السائق</h5>
                    <p class="cursor-pointer content_ar">توفر شركة رمو من خلال تطبيقها فليت فرصة مضمونة لربح المال. إن كنت سائق يعمل بدوام كامل، أو تعمل لعدد محدد من الساعات في اليوم، أو لديك سيارة وتعمل في الوظائف المؤقتة، وتريد أن تزيد من دخلك الشهري أو اليومي، لن تجد أحسن من تطبيق فليت الذي يوفر لك فرص عمل مختلفة على حساب وضعيتك.</p>
                    <p class="cursor-pointer content_ar">كل ما عليك هو تحميل التطبيق والتسجيل فيه.</p>

                    <h2 class="cursor-pointer content_ar">لماذا تصبح سائق مع فليت؟</h2>
                    <ul class="cursor-pointer content_ar">
                        <li>تختار عدد ساعات العمل المناسبة لك.</li>
                        <li>أبدأ بالعمل في أي وقت يناسبك من أيام الأسبوع.</li>
                        <li>كسب المال: فليت تقوم بالدفع لكم.</li>
                        <li>يمكنك الاطلاع على أرباحك عن طريق التطبيق فليت داريفر Fleet driver. ويتم تحويل أرباحك تلقائيًا إلى حسابك البنكي كل أسبوع.</li>
                    </ul>

                    <h2 class="cursor-pointer content_ar">ماذا تحتاج لتصبح سائقاً مع فليت؟</h2>
                    <ul class="cursor-pointer content_ar">
                        <li>أن يكون عمرك أكثر من 18 سنة.</li>
                        <li>رخصة القيادة فعالة.</li>
                        <li>سيارة تحتوي على 4 أبواب.</li>
                    </ul>

                    <h2 class="cursor-pointer content_ar">الوثائق المطلوبة</h2>
                    <ul class="cursor-pointer content_ar">
                        <li>رخصة قيادة فعالة.</li>
                        <li>نسخة من بطاقة الهوية - جواز السفر الخاص بك.</li>
                        <li>إثبات الإقامة في مدينتك.</li>
                        <li>وثيقة التأمين على السيارة.</li>
                        <li>صورة شمسية للسائق.</li>
                    </ul>

                    <p class="cursor-pointer content_ar"><strong>ملاحظة:</strong> يجب أن تكون الصورة واضحة الملامح.</p>

                    <h2 class="cursor-pointer content_en" style="display: none;">User Guidelines</h2>
                    <h5 class="cursor-pointer content_en" style="display: none;">Driver</h5>
                    <p class="cursor-pointer content_en" style="display: none;">Ramo Company provides through its Fleet application a guaranteed opportunity to earn money. Whether you work full-time, for a limited number of hours a day, or have a car and work in temporary jobs, and want to increase your monthly or daily income, you won't find better than the Fleet app, which offers you various job opportunities based on your situation.</p>
                    <p class="cursor-pointer content_en" style="display: none;">All you have to do is download the app and register.</p>

                    <h2 class="cursor-pointer content_en" style="display: none;">Why become a driver with Fleet?</h2>
                    <ul class="cursor-pointer content_en" style="display: none;">
                        <li>Choose the suitable working hours for you.</li>
                        <li>Start working at any time that suits you during the week.</li>
                        <li>Earn money: Fleet pays you.</li>
                        <li>You can track your earnings through the Fleet Driver app. Your earnings are automatically transferred to your bank account every week.</li>
                    </ul>

                    <h2 class="cursor-pointer content_en" style="display: none;">What do you need to become a driver with Fleet?</h2>
                    <ul class="cursor-pointer content_en" style="display: none;">
                        <li>You must be over 18 years old.</li>
                        <li>An active driving license.</li>
                        <li>A car with 4 doors.</li>
                    </ul>

                    <h2 class="cursor-pointer content_en" style="display: none;">Required Documents</h2>
                    <ul class="cursor-pointer content_en" style="display: none;">
                        <li>Active driving license.</li>
                        <li>Copy of your ID card - passport.</li>
                        <li>Proof of residence in your city.</li>
                        <li>Car insurance document.</li>
                        <li>A clear photo of the driver.</li>
                    </ul>

                    <p class="cursor-pointer content_en" style="display: none;"><strong>Note:</strong> The photo must be clear.</p>


                    <h2 class="cursor-pointer content_ar">التسجيل عبر الإنترنت</h2>
                    <p class="cursor-pointer content_ar">يرجى كتابة وصف دقيق عن نفسك وعن سيارتك. نحن بحاجة للعديد من المعلومات نظراً لاختلاف المتطلبات من منطقة إلى أخرى.</p>
                    <p class="cursor-pointer content_ar">أرسل لنا الوثائق المطلوبة:</p>
                    <ul class="cursor-pointer content_ar">
                        <li>نسخة من بطاقة الهوية - جواز السفر الخاص بك.</li>
                        <li>إثبات الإقامة في مدينتك.</li>
                        <li>وثيقة التأمين على السيارة.</li>
                        <li>صورة شمسية للسائق.</li>
                    </ul>

                    <p class="cursor-pointer content_ar">قم بتحميل التطبيق وابدأ القيادة</p>
                    <p class="cursor-pointer content_ar">بعد أن تقوم بتحميل التطبيق واستكمال عملية التسجيل يمكنك البدء في كسب المال.</p>

                    <h2 class="cursor-pointer content_ar">ما هي متطلبات السيارة؟</h2>
                    <ul class="cursor-pointer content_ar">
                        <li>سيارة حديثة أو تكون أقل من 20 سنة.</li>
                        <li>سيارة ذات 4 أبواب.</li>
                        <li>أن تكون في حالة جيدة ونظيفة مع عدم وجود أي أضرار.</li>
                        <li>لا تحتوي على أي علامات تجارية.</li>
                        <li>أن تكون قد اجتازت الفحص التقني.</li>
                    </ul>

                    <h2 class="cursor-pointer content_ar">التسجيل</h2>
                    <p class="cursor-pointer content_ar">تقبل الشركة كل الوثائق الرسمية. وهذا لا يعني أن السيارة يجب أن تكون مسجلة باسمك.</p>

                    <h2 class="cursor-pointer content_ar">التأمين</h2>
                    <p class="cursor-pointer content_ar">يجب على جميع السائقين الحفاظ على وثيقة التأمين الخاصة بهم وفقًا للقوانين المحلية المعمول بها وطنياً.</p>


                    <h2 class="cursor-pointer content_en" style="display: none;">Online Registration</h2>
                    <p class="cursor-pointer content_en" style="display: none;">Please provide a detailed description about yourself and your car. We need many pieces of information due to varying requirements from one area to another.</p>
                    <p class="cursor-pointer content_en" style="display: none;">Send us the required documents:</p>
                    <ul class="cursor-pointer content_en" style="display: none;">
                        <li>Copy of your ID card - passport.</li>
                        <li>Proof of residence in your city.</li>
                        <li>Car insurance document.</li>
                        <li>A clear photo of the driver.</li>
                    </ul>

                    <p class="cursor-pointer content_en" style="display: none;">Download the app and start driving</p>
                    <p class="cursor-pointer content_en" style="display: none;">After downloading the app and completing the registration process, you can start earning money.</p>

                    <h2 class="cursor-pointer content_en" style="display: none;">What are the car requirements?</h2>
                    <ul class="cursor-pointer content_en" style="display: none;">
                        <li>A modern car or one less than 20 years old.</li>
                        <li>A car with 4 doors.</li>
                        <li>In good and clean condition with no damage.</li>
                        <li>No visible branding.</li>
                        <li>Passed technical inspection.</li>
                    </ul>

                    <h2 class="cursor-pointer content_en" style="display: none;">Registration</h2>
                    <p class="cursor-pointer content_en" style="display: none;">The company accepts all official documents. This does not mean that the car must be registered in your name.</p>

                    <h2 class="cursor-pointer content_en" style="display: none;">Insurance</h2>
                    <p class="cursor-pointer content_en" style="display: none;">All drivers must maintain their own insurance document according to national and local laws.</p>


                    <h2 class="cursor-pointer content_ar">متطلبات السائق</h2>
                    <h3 class="cursor-pointer content_ar">عرض ملصق / علامة</h3>
                    <p class="cursor-pointer content_ar">الشركة تقدم لكم ملصق قابل لإلزالة. الملصق يتم وضعه على السيارة أثناء العمل. هذا يساعد الركاب
                        على التعرف عليك و يعرفون أنك سائق من طرف شركة رمو.</p>


                    <h2 class="cursor-pointer content_ar">الحد الأقصى في القيادة</h2>
                    <p class="cursor-pointer content_ar">لسلامتكم شركة فليت تحدد عدد الطلبات التي يمكن لكل سائق أن يتلقاها عبر الإنترنت. من خلال تطبيق فليت سوف تتلقى الإشعارات تنبهك بعدد الطلبات التي تلقيتها. عندما يتم دفع رصيدك، سوف تتلقى الطلبات من جديد.</p>

                    <h2 class="cursor-pointer content_ar">الخصوصيات التي يجب احترامها</h2>
                    <p class="cursor-pointer content_ar">الأمان والاحترام من بين الأمور التي نراعي لها بشدة. لذا كل من يعمل أو مشترك مع الشركة يجب احترام الإرشادات التالية:</p>
                    <ul class="cursor-pointer content_ar">
                        <li><strong>ملصق الشركة:</strong> يجب على كل سائق متصل بالإنترنت ويستخدم تطبيق السائق، أن يتم عرض الملصق stickers fleet على الواجهة الأمامية للسيارة.</li>
                        <li><strong>نقل الأطفال والقاصرين:</strong> لا يسمح نقل الأطفال والقاصرين الذين تقل أعمارهم عن 18 سنة إلا في حالة كانوا برفقة شخص بالغ. يحق للسائق الذي يعمل لحساب فليت في سوريا أن يتأكد من عمر الراكب، ويطلب منه وثيقة تؤكد عمره. بعد التأكد من العمر، في حالة ما كان الراكب أقل من 18 سنة يجب إلغاء الرحلة وإخبار الشركة بذلك عن طريق التطبيق بالتواصل مع فريق الدعم.</li>
                        <li><strong>فحص المركبات وصيانتها:</strong> الإدلاء بوثيقة تؤكد الفحص التقني للسيارة. الفحص يكون كل عام أو عن كل 80,000 كلم من القيادة. يجب أن تكون السيارة في حالة جيدة من الناحية الميكانيكية. سلامتكم من اهتماماتنا.</li>
                    </ul>

                    <h2 class="cursor-pointer content_en" style="display: none;">Driver Requirements</h2>
                    <h3 class="cursor-pointer content_en" style="display: none;">Display Sticker/Tag</h3>
                    <p class="cursor-pointer content_en" style="display: none;">The company provides you with a removable sticker. The sticker is placed on the car during work. This helps passengers identify you and know that you are a driver representing Ramo.</p>


                    <h2 class="cursor-pointer content_en" style="display: none;">Maximum Driving Limits</h2>
                    <p class="cursor-pointer content_en" style="display: none;">For your safety, Fleet sets the number of requests each driver can receive online. Through the Fleet app, you will receive notifications alerting you to the number of requests you have received. Once your balance is paid, you will receive requests again.</p>

                    <h2 class="cursor-pointer content_en" style="display: none;">Respect for Privacy</h2>
                    <p class="cursor-pointer content_en" style="display: none;">Safety and respect are among our top priorities. Therefore, everyone working or partnering with the company must adhere to the following guidelines:</p>
                    <ul class="cursor-pointer content_en" style="display: none;">
                        <li><strong>Company Sticker:</strong> Every online-connected driver using the driver app must display the Fleet stickers on the front of their vehicle.</li>
                        <li><strong>Transporting Children and Minors:</strong> Transporting children and minors under 18 years of age is not allowed unless accompanied by an adult. Drivers working for Fleet in Syria are required to verify the passenger's age and request documentation confirming it. If the passenger is under 18 years old, the trip must be canceled, and the driver must inform the company through the app by contacting support.</li>
                        <li><strong>Vehicle Inspection and Maintenance:</strong> Provide documentation confirming the vehicle's technical inspection. Inspections should occur annually or every 80,000 kilometers of driving. The vehicle must be in good mechanical condition. Your safety is our concern.</li>
                    </ul>


                    <h2 class="cursor-pointer content_ar">زر المساعدة في حالات الطوارئ</h2>
                    <p class="cursor-pointer content_ar">في أي وقت يمكنك طلب المساعدة من خلال أيقونة حالة الطوارئ. من خلال النقر على هذه الأيقونة نتعرف على موقعك وتفاصيل الرحلة. هذا يساعدنا على مشاركتها مع الطوارئ.</p>

                    <h2 class="cursor-pointer content_ar">دعم الحوادث 24/7</h2>
                    <p class="cursor-pointer content_ar">يتوفر شركاء عملاء فليت المدربون على الاستجابة للحوادث على مدار الساعة.</p>

                    <h2 class="cursor-pointer content_ar">اتبع رحلتي</h2>
                    <p class="cursor-pointer content_ar">يمكن للأصدقاء والعائلة اتباع وجهتك وسيعرفون بمجرد وصولك.</p>

                    <h2 class="cursor-pointer content_ar">تتبع مسارك ويتم تحديد موقعك</h2>
                    <p class="cursor-pointer content_ar">يقوم فريق فليت بتتبع جميع رحلات فليت من البداية إلى النهاية، لذلك هناك سجل لرحلتك إذا حدث شيء ما.</p>

                    <h2 class="cursor-pointer content_ar">كيف يتم احتساب الأرباح</h2>
                    <p class="cursor-pointer content_ar"><strong>أجرة الرحلة العادية:</strong> تختلف الأجرة نظراً لتدخل العديد من العوامل. حيث يتم احتساب أجرة الرحلة العادية عن احتساب المسافة.</p>

                    <h2 class="cursor-pointer content_ar">نصائح فليت</h2>
                    <ul class="cursor-pointer content_ar">
                        <li><strong>الحفاظ على نظافة السيارة:</strong> الركاب عادة ما يكون تقييمهم من خلال نظافة السيارة. ننصحك بتنظيف السيارة بشكل يومي.</li>
                        <li><strong>الاستماع للموسيقى:</strong> يكون من الأفضل أن يطلب السائق من الركاب ما إذا كانوا يفضلون الاستماع إلى الموسيقى وأي محطة راديو مفضلة لديهم. أو ربما قد يريدون الاستماع إلى الموسيقى الخاصة بهم في هواتفهم.</li>
                    </ul>

                    <h2  class="cursor-pointer content_en" style="display: none;">Emergency Assistance Button</h2>
                    <p  class="cursor-pointer content_en" style="display: none;">At any time, you can request assistance through the emergency status icon. By clicking on this icon, we can identify your location and trip details, which helps us share them with emergency services.</p>

                    <h2  class="cursor-pointer content_en" style="display: none;">24/7 Accident Support</h2>
                    <p  class="cursor-pointer content_en" style="display: none;">Fleet's trained customer partners are available around the clock to respond to accidents.</p>

                    <h2  class="cursor-pointer content_en" style="display: none;">Follow My Trip</h2>
                    <p  class="cursor-pointer content_en" style="display: none;">Friends and family can track your destination and will be notified upon your arrival.</p>

                    <h2  class="cursor-pointer content_en" style="display: none;">Track Your Route and Location</h2>
                    <p  class="cursor-pointer content_en" style="display: none;">The Fleet team tracks all Fleet trips from start to finish, so there's a record of your trip in case anything happens.</p>

                    <h2  class="cursor-pointer content_en" style="display: none;">How Earnings are Calculated</h2>
                    <p  class="cursor-pointer content_en" style="display: none;"><strong>Regular Trip Fare:</strong> Fare varies depending on several factors. The regular trip fare is calculated based on distance.</p>

                    <h2  class="cursor-pointer content_en" style="display: none;">Fleet Tips</h2>
                    <ul  class="cursor-pointer content_en" style="display: none;">
                        <li><strong>Maintain Car Cleanliness:</strong> Passengers often rate cleanliness, so we recommend cleaning your car daily.</li>
                        <li><strong>Music Preferences:</strong> It's best to ask passengers if they prefer listening to music and if they have any favorite radio stations. Alternatively, they may want to listen to their own music on their phones.</li>
                    </ul>


                    <h2 class="cursor-pointer content_ar">الراكب</h2>
                    <p class="cursor-pointer content_ar"><strong>لماذا يجب أن يستخدم الراكب تطبيق Fleet؟</strong></p>
                    <ul class="cursor-pointer content_ar">
                        <li>ركوب حسب الطلب: اطلب سيارة من أجل مشوارك في أي وقت تريده، نحن في الخدمة على طول العام.</li>
                        <li>خيارات صديقة للميزانية: تعرف على الأسعار ثم قارن الأسعار بين كل نوع من الرحلات، بالقرب من مكتب سيارات الأجرة المحلي.</li>
                        <li>سهولة الترفيه: انقر واطلب السائق يأخذك إلى حيث تريد دون قلق وبكل أمان.</li>
                        <li>إرشادات المجتمع: تساعد معاييرنا في إنشاء اتصالات آمنة وتفاعلات إيجابية مع الجميع. تعرف على كيفية تطبيق إرشاداتنا عليك.</li>
                        <li>تقديم المساعدة: يتيح لك زر الطوارئ في التطبيق الاتصال برقم 112. يمكنك أيضاً الاعتماد على الدعم على مدار الساعة طوال أيام الأسبوع للأسئلة أو مخاوف السلامة.</li>
                    </ul>

                    <h2 class="cursor-pointer content_ar">سياسة الخصوصيات لتطبيق فليت</h2>
                    <ul class="cursor-pointer content_ar">
                        <li>سياسة الاستخدام وسياسة الخصوصية التي نضعها هي من أجل أن تجعلكم تشعرون بالأمان.</li>
                        <li>تضم كل الإرشادات والسياسات التي نضعها لكل من السائقين، الركاب، والشركاء.</li>
                        <li>يجب الاطلاع على هذه الإرشادات حيث أننا نقوم بتغييرها من حين إلى آخر.</li>
                    </ul>

                    <h2 class="cursor-pointer content_ar">تعامل مع الجميع باحترام</h2>
                    <p class="cursor-pointer content_ar">الاحترام قولاً وفعلاً. لهذا السبب وضعت فليت معايير وسياسات بشأن التهديد والسلوك الوقح. نحن نؤكد على أننا ضد كل نوع من أنواع التمييز العنصري. نحن لا نفرق بين الجنسيات ولا الديانات. نقبل بكل نوع من الاختلاف ونندد بشدة أي عنف سواء كان لفظي أو جسدي. وندد أيضاً بأي شكل من أشكال العنف والاعتداء الجنسي والجسدي. وندعو الجميع إلى الاحترام وتقبل الآخرين.</p>

                    <h2 class="cursor-pointer content_ar">الإساءة اللفظية</h2>
                    <p class="cursor-pointer content_ar">أي سلوك عدواني كيفما كان سواء كان لفظاً أو على شكل إيماءات تنقص من قيمة الغير. لا نقبلها بشدة. لذا نتمنى الابتعاد عن النقاشات السياسية والمعتقدات الدينية.</p>

                    <h2 class="cursor-pointer content_ar">نصائح مهمة للسائقين</h2>
                    <ul class="cursor-pointer content_ar">
                        <li>المحادثات القصيرة والعادية بطريقة ودية مع الركاب سوف تكون أفضل لك ولهم.</li>
                        <li>لا تتصرف بعدوانية مع الآخرين كيفما كان شكلهم أو ثقافتهم.</li>
                        <li>في حالة ما تلقيت معاملة سيئة يمكنك الإبلاغ عن ذلك عن طريق التطبيق وسوف نتعامل مع المشكلة انطلاقاً من سياستنا.</li>
                        <li>لا يسمح برفض أو إلغاء الطلبات عمداً فقط لسبب معين مثل تجنب منطقة، حي، مدينة معينة بسبب مميزات تلك الوجهة.</li>
                    </ul>

                    <h2 class="cursor-pointer content_ar">نصائح مهمة للركاب</h2>
                    <ul class="cursor-pointer content_ar">
                        <li>اجعل المحادثات عادية وودية مع موظفي التوصيل والسائقين والمسافرين. لا تطرح أسئلة شخصية أو تتصرف بعدوانية تجاه الآخرين.</li>
                        <li>في حالة ما تلقيت معاملة سيئة يمكنك الإبلاغ عن ذلك عن طريق التطبيق وسوف نتعامل مع المشكلة انطلاقاً من سياستنا.</li>
                    </ul>

                    <h2 class="cursor-pointer content_ar">نصائح للسائقين</h2>
                    <p class="cursor-pointer content_ar">في حالة ما اتصل بك راكب بعد الرحلة لأي سبب كيفما كان يجب الإبلاغ عن ذلك إلى الشركة عن طريق تطبيق فليت خصوصاً لإعادة شيء مفقود.</p>

                    <h2 class="cursor-pointer content_ar">نصائح للركاب</h2>
                    <p class="cursor-pointer content_ar">في حالة ما اتصل بك السائق بعد الرحلة لأي سبب كيفما كان يجب الإبلاغ عن ذلك إلى الشركة عن طريق تطبيق فليت خصوصاً لإعادة شيء مفقود. في حالة ما كنت متأكداً أنه تم حرمانك من الرحلة بسبب ما، فيرجى الإبلاغ عن ذلك عن طريق التطبيق.</p>

                    <h2 class="cursor-pointer content_ar">الاتصال الجسدي</h2>
                    <p class="cursor-pointer content_ar">لا يسمح بلمس أي شخص ما دام لم يطلب ذلك. لا تلمس أي شخص قابلته على تطبيق فليت. هناك حالات خاصة يطلب فيها الراكب المساعدة من الركوب أو النزول من السيارة، في هذه الحالة يسمح بذلك. لا يسمح أبداً بإيذاء أي شخص أو نية إيذائه.</p>

                    <h2 class="cursor-pointer content_ar">التمييز العنصري</h2>
                    <p class="cursor-pointer content_ar">يجب أن تشعر دائماً بالأمان والترحيب. لهذا السبب لا نتسامح مع السلوك العنصري أو التمييزي، بما في ذلك تجاه فريق دعم الأسطول. نحن نندد بكل أشكال التمييز العنصري كيفما كان نوعه. سواء تعلق الأمر بلونه، جنسيته، ديانته، عرقه، لغته، جنسه، وعمره... يجب احترام الآخرين وتقبل الاختلاف.</p>

                    <h2 class="cursor-pointer content_ar">الاعتداء الجنسي</h2>
                    <p class="cursor-pointer content_ar">نحن جميعاً نقدر مساحتنا الشخصية وخصوصيتنا. لا بأس من الدردشة مع الآخرين مع الحفاظ على الاحترام. لكن من فضلك لا تعلق على مظهر شخص ما أو تسأل عما إذا كانوا عازبين. يحظر الاعتداء الجنسي وسوء السلوك الجنسي من أي نوع. يشير الاعتداء الجنسي وسوء السلوك إلى الاتصال الجنسي أو السلوك دون موافقة صريحة من الشخص الآخر. كل فعل أو قول يظهر إساءة أو اعتداء جنسي هو أمر ممنوع بتاتاً. لا يسمح بطرح الأسئلة التي تشير إلى الاعتداء الجنسي. لا يسمح بتعليق عن شكل المظهر أو طريقة اللباس. لا يسمح بعقد علاقات حميمية. كل فعل أو قول يظهر على سوء المعاملة الجنسية مرفوض بشكل قاطع.</p>

                    <h2 class="cursor-pointer content_ar">يمكننا تجنب الاعتداء الجنسي</h2>
                    <ul class="cursor-pointer content_ar">
                        <li>تجنب طرح أسئلة شخصية على سبيل المثال، حول حالة العلاقة أو التوجه الجنسي.</li>
                        <li>تجنب التعليق على المظهر، وإبداء تعليقات مهينة.</li>
                        <li>تجنب الإدلاء بتعليقات أو إيماءات جنسية.</li>
                        <li>المغازلة بما في ذلك المغازلة غير اللفظية والموحية.</li>
                        <li>التقارب الجسدي أكثر من اللازم.</li>
                        <li>عرض محتوى غير لائق على سبيل المثال، صور موحية جنسياً.</li>
                    </ul>

                    <h2 class="cursor-pointer content_ar">إتلاف الممتلكات</h2>
                    <p class="cursor-pointer content_ar">لا يسمح بإتلاف الممتلكات. تشمل بعض الأمثلة إتلاف السيارة أو أي وسيلة نقل أخرى مطلوبة من خلال منصة Fleet، أو كسر أو تخريب الهاتف أو الجهاز اللوحي، أو سكب الطعام أو الشراب عمداً، أو التدخين في السيارة، أو إتلاف مباني التاجر، أو التقيؤ بسبب الإفراط في استهلاك الكحول أو غير ذلك. في حالة إتلاف الممتلكات، فأنت مسؤول عن تكلفة رسوم التنظيف والإصلاح، خارج نطاق الاستهلاك العادي. لا يسمح بإيقاع أي أضرار في ممتلكات الغير. على سبيل المثال، إتلاف السيارات أو كسر الجهاز اللوحي. طلاء المقاعد بالطعام أو الشراب عمداً. التدخين في السيارة. التقيؤ بسبب الإفراط في استهلاك الكحول. في هذه الحالة تكون تكلفة التنظيف والإصلاح خارجة عن تكلفة الاستهلاك العادي.</p>

                          <h2 class="cursor-pointer content_en" style="display: none;">Passenger</h2>
                            <p class="cursor-pointer content_en" style="display: none;"><strong>Why should the passenger use the Fleet app?</strong></p>
                            <ul class="cursor-pointer content_en" style="display: none;">
                                <li>Ride on Demand: Order a car for your journey anytime you want, we're available year-round.</li>
                                <li>Budget-Friendly Options: Learn about rates and compare prices between different types of trips, near your local taxi office.</li>
                                <li>Convenience: Click and request a driver to take you wherever you want safely and worry-free.</li>
                                <li>Community Guidelines: Our standards help create safe connections and positive interactions with everyone. Learn how our guidelines apply to you.</li>
                                <li>Providing Assistance: The emergency button in the app lets you contact 112. You can also rely on 24/7 support for safety questions or concerns.</li>
                            </ul>

                            <h2 class="cursor-pointer content_en" style="display: none;">Fleet App Privacy Policy</h2>
                            <ul class="cursor-pointer content_en" style="display: none;">
                                <li>Our usage policy and privacy policy are designed to make you feel secure.</li>
                                <li>Includes all guidelines and policies we set for drivers, passengers, and partners.</li>
                                <li>These guidelines should be reviewed as we update them from time to time.</li>
                            </ul>

                            <h2 class="cursor-pointer content_en" style="display: none;">Respectful Interaction</h2>
                            <p class="cursor-pointer content_en" style="display: none;">Respect in words and actions. That's why Fleet has set standards and policies regarding threats and rude behavior. We emphasize that we are against any form of racial discrimination. We do not differentiate based on nationalities or religions. We accept all kinds of differences and strongly condemn any violence, whether verbal or physical. We also condemn any form of violence, sexual assault, or physical assault. We call on everyone to respect and accept others.</p>

                            <h2 class="cursor-pointer content_en" style="display: none;">Verbal Abuse</h2>
                            <p class="cursor-pointer content_en" style="display: none;">Any aggressive behavior, whether verbal or gestural, that diminishes the value of others is strongly prohibited. Therefore, we advise avoiding political discussions and religious beliefs.</p>

                            <h2 class="cursor-pointer content_en" style="display: none;">Important Tips for Drivers</h2>
                            <ul class="cursor-pointer content_en" style="display: none;">
                                <li>Short and casual conversations in a friendly manner with passengers will be better for you and them.</li>
                                <li>Do not act aggressively towards others no matter their appearance or culture.</li>
                                <li>If you receive poor treatment, you can report it through the app, and we will handle the issue according to our policy.</li>
                                <li>Intentionally refusing or canceling requests for specific reasons such as avoiding an area, neighborhood, or specific city due to features of that destination is not allowed.</li>
                            </ul>

                            <h2 class="cursor-pointer content_en" style="display: none;">Important Tips for Passengers</h2>
                            <ul class="cursor-pointer content_en" style="display: none;">
                                <li>Keep conversations casual and friendly with delivery staff, drivers, and travelers. Do not ask personal questions or behave aggressively towards others.</li>
                                <li>If you receive poor treatment, you can report it through the app, and we will handle the issue according to our policy.</li>
                            </ul>

                            <h2 class="cursor-pointer content_en" style="display: none;">Physical Contact</h2>
                            <p class="cursor-pointer content_en" style="display: none;">Do not touch anyone unless requested. Do not touch anyone you met on the Fleet app. There are special cases where the passenger asks for help from the ride or getting out of the car, in which case it is allowed. It is strictly prohibited to harm or intend to harm anyone.</p>

                            <h2 class="cursor-pointer content_en" style="display: none;">Racial Discrimination</h2>
                            <p class="cursor-pointer content_en" style="display: none;">You should always feel safe and welcome. That is why we do not tolerate racial or discriminatory behavior, including towards the Fleet support team. We condemn all forms of racial discrimination, whatever its kind. Whether it's about its color, nationality, religion, ethnicity, language, sex, and age... Respect others and accept differences.</p>

                            <h2 class="cursor-pointer content_en" style="display: none;">Sexual Assault</h2>
                            <p class="cursor-pointer content_en" style="display: none;">We all appreciate our personal space and privacy. It's okay to chat with others while maintaining respect. But please do not comment on someone's appearance or ask if they are single. Sexual assault and sexual misconduct of any kind are prohibited. Sexual assault and misconduct refer to sexual contact or behavior without explicit consent from the other person. Any act or statement that shows disrespect or sexual assault is strictly prohibited. Questions indicating sexual assault are not allowed. Commenting on appearance or dress style is not allowed. Intimacy is not allowed. Any act or statement that shows sexual misconduct is absolutely rejected.</p>

                            <h2 class="cursor-pointer content_en" style="display: none;">We Can Avoid Sexual Assault</h2>
                            <ul class="cursor-pointer content_en" style="display: none;">
                                <li>Avoid asking personal questions, such as about relationship status or sexual orientation.</li>
                                <li>Avoid commenting on appearance and making derogatory comments.</li>
                                <li>Avoid making sexually suggestive comments or gestures.</li>
                                <li>Flirting, including non-verbal and suggestive flirting.</li>
                                <li>Physical closeness more than necessary.</li>
                                <li>Displaying inappropriate content, such as sexually suggestive images.</li>
                            </ul>

                            <h2 class="cursor-pointer content_en" style="display: none;">Property Damage</h2>
                            <p class="cursor-pointer content_en" style="display: none;">Property damage is not allowed. Some examples include damaging the car or any other means of transport required through the Fleet platform, breaking or damaging the phone or tablet, deliberately spilling food or drink, smoking in the car, damaging the merchant's buildings, or vomiting due to excessive alcohol consumption. In case of property damage, you are responsible for the cleaning and repair costs, outside of normal wear and tear. Causing any damage to others' property is not allowed. For example, damaging cars or breaking tablets. Painting seats with food or drink on purpose. Smoking in the car. Vomiting due to excessive alcohol consumption. In this case, the cleaning and repair costs are beyond the cost of normal wear and tear.</p>


                          </div>
                      </div>
            </div>
        </div>


    <!--end::Content-->
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
									<a id="link-faq-ar" href="./policy.html" class="text-white opacity-50 text-hover-primary fs-5 mb-6 content_ar">سياسية الخصوصية</a>
									<a id="link-faq-ar" href="./policy.html" class="text-white opacity-50 text-hover-primary fs-5 mb-6 content_en" style="display: none;">Privacy Policy</a>
									<a id="link-faq-ar" href="./classic.html" class="text-white opacity-50 text-hover-primary fs-5 mb-6 content_ar">الأسئلة الشائعة</a>
									<a id="link-faq-en" href="./classic.html" class="text-white opacity-50 text-hover-primary fs-5 mb-6 content_en" style="display: none;">FAQ</a>
									<a id="link-join-ar" href="./apply.html" class="text-white opacity-50 text-hover-primary fs-5 mb-6 content_ar">انضم إلينا</a>
									<a id="link-join-en" href="./apply.html" class="text-white opacity-50 text-hover-primary fs-5 mb-6 content_en" style="display: none;">Join US</a>

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
									<img src="assets/logo.jpg" alt="Logo" src="" class="h-20px h-md-25px" />
								</a>
								<!--end::Logo image-->
								<!--begin::Logo image-->
								<span class="mx-5 fs-6 fw-bold text-gray-600 pt-1" href="https://fleetapp.net/uploads/1713342078.png">© 2024 Fleet.</span>
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
