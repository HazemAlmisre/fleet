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
  .cursor-pointer.content_ar h5,h3,h4,h5
.cursor-pointer.content_en h5,h3,h4,h5 {
	font-size: 18px;
	padding-left: 30px;
	padding-right: 30px;
    color: #168210; /* لون عنوان الفقرة في كلتا النسختين العربية والإنجليزية */
    font-weight: bold; /* زيادة سمك النص لتمييز العنوان */
}
.cursor-pointer.content_ar ul,p
.cursor-pointer.content_en ul,p {
	/* padding: 20px; */
	padding-right: 40px;
	padding-left: 40px;
	padding-bottom: 10px;
    font-size: 16px; /* لون عنوان الفقرة في كلتا النسختين العربية والإنجليزية */
    font-weight: normal; /* زيادة سمك النص لتمييز العنوان */
};
  </style>
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

											<div class="menu-item">
												<!--begin::Menu link-->
												<a class="menu-link nav-link py-3 px-4 px-xxl-6 content_ar" href="{{ route('welcome') }}#service" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">خدماتنا</a>
												<a class="menu-link nav-link py-3 px-4 px-xxl-6 content_en" href="{{ route('welcome') }}#service" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true" style="display: none;">Our services</a>
												<!--end::Menu link-->
											</div>
											<div class="menu-item">
												<!--begin::Menu link-->
												<a class="menu-link nav-link py-3 px-4 px-xxl-6 content_ar" href="{{ route('aboutapp') }}" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true"> كيفية عمل التتطبيق</a>
												<a class="menu-link nav-link py-3 px-4 px-xxl-6 content_en"  href="{{ route('aboutapp') }}" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true" style="display: none;">How it work</a>
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

                                  <h3 class="  cursor-pointer content_ar">سياسية الخصوصية وشروط الاستخدام الخاصة بتطبيق Fleet</h3>
                                  <h3 class="  cursor-pointer content_en" style="display: none;">Fleet Privacy Policy and Terms of Use</h3>

                                  <p class="  cursor-pointer content_ar">توضح هذه الوثيقة البيانات الشخصية التي نجمعها، وكيفية استخدامها ومشاركتها، بالإضافة إلى الخيارات المتوفرة أمامك بشأن هذه البيانات. ونوصيك بقراءة هذه الوثيقة والتي تتناول النقاط الرئيسية لممارسات الخصوصية، الرجاء قراءة هذه الشروط قبل تفعيل الحساب، وفي حال وجود أي استفسارات يمكنك التواصل على الرقم <span style="color: green">6131394-011</span></p>
                                  <p class="  cursor-pointer content_en" style="display: none;">This document explains the personal data we collect, how we use and share it, as well as the choices available to you regarding this data. We recommend reading this document which addresses the main points of privacy practices. Please read these terms before activating your account, and if you have any questions, you can contact us at <span style="color: green">011-6131394</span></p>

                                  <h5 class="  cursor-pointer content_ar">تعريف بالتطبيق :</h5>
                                  <h5 class="  cursor-pointer content_en" style="display: none;">App Definition:</h5>
                                  <p class="  cursor-pointer content_ar">تطبيق Fleet (ويشار اليه “التطبيق”) هو تطبيق إلكتروني لحجز سيارات وعمل رحلات في الجمهورية العربية السورية، حيث يعمل التطبيق على أجهزة الهاتف الجوال وتعمل الشركة على تطويره وإضافة الخدمات لضمان الى استمرار الاعتماد عليه.</p>
                                  <p class="  cursor-pointer content_en" style="display: none;">Fleet (referred to as "the app") is an electronic app for booking cars and making trips in the Syrian Arab Republic. The app works on mobile phones, and the company is working on developing it and adding services to ensure continued reliance on it.</p>

                                  <p class="  cursor-pointer content_ar">تطبيق العملاء: يتم استخدامه من قبل شريحة من المجتمع التي تحتاج وسيلة نقل لقضاء رحلتها، إضافة إلى طلب وسيلة نقل لشخص آخر.</p>
                                  <p class="  cursor-pointer content_en" style="display: none;">Customer App: It is used by a segment of the community that needs a means of transportation to complete their trip, in addition to requesting a means of transportation for another person.</p>

                                  <p class="  cursor-pointer content_ar">تطبيق السائقين: يتم استخدامه من قبل السائقين المتعاقدين معهم والمسموح لهم بتقديم الخدمات عبر التطبيق.</p>
                                  <p class="  cursor-pointer content_en" style="display: none;">Driver App: It is used by drivers contracted with the company who are allowed to provide services through the app.</p>

                                  <h5 class="  cursor-pointer content_ar">الجهة المسؤولة عن التطبيق :</h5>
                                  <h5 class="  cursor-pointer content_en" style="display: none;">App Responsible Entity:</h5>
                                  <p class="  cursor-pointer content_ar">شركة رمو المحدودة المسؤولية مسجلة في السجل التجاري بمدينة دمشق تحت رقم: 19705 بتاريخ 2022/06/12 في الجمهورية العربية السورية.</p>
                                  <p class="  cursor-pointer content_en" style="display: none;">Ramo Limited Liability Company is registered in the commercial register in Damascus under number: 19705 dated 2022/06/12 in the Syrian Arab Republic.</p>

                                  <h5 class="  cursor-pointer content_ar">الفئات المستهدفة :</h5>
                                  <h5 class="  cursor-pointer content_en" style="display: none;">Target Categories:</h5>
                                  <p class="  cursor-pointer content_ar">الركاب: هم الأشخاص الذين يقومون بطلب وسيلة النقل أو يتلقونها.</p>
                                  <p class="  cursor-pointer content_en" style="display: none;">Passengers: They are the individuals who request or receive the means of transportation.</p>

                                  <p class="  cursor-pointer content_ar">السائقون: هم الأشخاص الذين يقومون بالتعاقد مع الشركة لتقديم خدمات النقل أو التوصيل أو غيرها من الخدمات المقدمة عبر التطبيق والذين يملكون مركبات تحقق شروط معينة.</p>
                                  <p class="  cursor-pointer content_en" style="display: none;">Drivers: They are individuals who contract with the company to provide transportation, delivery, or other services through the app and who own vehicles that meet certain conditions.</p>

                                  <h4 class="  cursor-pointer content_ar">توصيف عمل التطبيق :</h4>
                                  <h4 class="  cursor-pointer content_en" style="display: none;">App Description:</h4>

                                  <p class="  cursor-pointer content_ar">هو تطبيق للمستخدم لحجز سيارات وعمل رحلات في سورية وبأي وقت ولكيفية استخدام التطبيق يجب الاطلاع على التفاصيل التالية:</p>
                                  <p class="  cursor-pointer content_en" style="display: none;">It is an app for users to book cars and make trips in Syria at any time, and to understand how to use the app, you should review the following details:</p>

                                  <p class="  cursor-pointer content_ar">الحساب: عند تشغيل التطبيق لأول مرة يطلب من العميل إدخال رقم الهاتف الجوال ليصل كود التفعيل الخاص به المكون من ستة أرقام لفتح التطبيق وعند التأكد من صحة الكود يطلب منه إدخال الاسم والكنية والمدينة.</p>
                                  <p class="  cursor-pointer content_en" style="display: none;">Account: When launching the app for the first time, the user is asked to enter their mobile phone number to receive a six-digit activation code to open the app. Once the code is verified, they are asked to enter their first name, last name, and city.</p>

                                  <h4 class="  cursor-pointer content_ar">عمل التطبيق :</h4>
                                  <h4 class="  cursor-pointer content_en" style="display: none;">App Functionality:</h4>

                                  <h5 class="  cursor-pointer content_ar">تكسي محلي :</h5>
                                  <h5 class="  cursor-pointer content_en" style="display: none;">Local Taxi:</h5>
                                  <p class="  cursor-pointer content_ar">يسمح بالتنقل بين مناطق المحافظة الواحدة حيث يجب تحديد نقطة بداية الرحلة ونهايتها إما لوجهة معينة أو اختيار الرحلة مفتوحة الوجهة واختيار نوع السيارة ليتم إظهار تفاصيل الرحلة المتوقعة من مدة ومسافة وكلفة حيث جميع القيم الظاهرة هي قيم تقريبية يمكن أن تتغير عند نهاية الرحلة تبعا للمسافة الفعلية المقطوعة وزمن الرحلة الفعلي المحتسبة من قبل تطبيق الكابتن، وعند طلب الرحلة سيتم إرسال الطلب لأقرب سائق متاح إلى العميل وفي حال لم يتم قبول الطلب سيرسل لسائق آخر قريب.... وعند قبول الرحلة سيصل اشعار إليه بقبول الرحلة مع عرض اسم السائق والزمن المتوقع لوصول السائق إلى نقطة بداية الرحلة عند وصول السائق إلى نقطة البداية سيقوم السائق بتنبيه العميل ليصل إشعار إليه بوصول السائق.</p>
                                  <p class="  cursor-pointer content_en" style="display: none;">Allows movement within the same province where the start and end points of the journey must be specified, either for a specific destination or an open destination. The type of car must be selected to show the expected details of the journey such as duration, distance, and cost. All displayed values are approximate and may change at the end of the journey depending on the actual distance traveled and the actual time calculated by the Captain app. When requesting a journey, the request will be sent to the nearest available driver. If the request is not accepted, it will be sent to another nearby driver. Upon accepting the journey, the client will receive a notification with the driver’s name and the expected time of arrival at the journey’s starting point. When the driver arrives at the starting point, the driver will notify the client and a notification will be sent to the client.</p>

                                  <p class="  cursor-pointer content_ar">عند صعود العميل إلى السيارة يقوم السائق ببدء الرحلة ليتم البدء بحساب عداد الرحلة والزمن، وعند الوصول إلى نقطة النهاية أو عند رغبة العميل بالتوقف في منطقة معينة يقوم السائق بإنهاء الرحلة لتظهر لدى العميل تفاصيل الرحلة كاملة من مدة ومسافة ومبلغ مع إمكانية تقييم الرحلة والتأكد من المبلغ المدفوع، في حال كانت مسافة الرحلة اصغر من مسافة معينة كم يتم تثبيت تكلفة هذه الرحلة من قبل الشركة، وفي حال كان هناك خطأ بتفاصيل الرحلة يمكن الابلاغ عن المشكلة عن طريق الاتصال بالدعم الفني، لمعالجة المشكلة فورا.</p>
                                  <p class="  cursor-pointer content_en" style="display: none;">When the client gets into the car, the driver starts the journey to begin calculating the journey meter and time. Upon reaching the end point or if the client wishes to stop at a certain location, the driver ends the journey, and the complete details of the journey such as duration, distance, and amount will be shown to the client with the option to rate the journey and confirm the amount paid. If the journey distance is smaller than a certain distance, the cost of the journey is fixed by the company. If there is an error in the journey details, the issue can be reported by contacting technical support to resolve it immediately.</p>

                                  <h5 class="  cursor-pointer content_ar">آلية الدفع والتحصيل:</h5>
                                  <h5 class="  cursor-pointer content_en" style="display: none;">Payment and Collection Mechanism:</h5>
                                  <p class="  cursor-pointer content_ar">يمكن للعميل أن يدفع للسائق مبلغ الرحلة بشكل كامل بشكل مباشر (كاش)، وفي حال لم يتم الدفع يمكن للسائق تبليغ الشركة (أنه لم يتم الدفع).</p>
                                  <p class="  cursor-pointer content_en" style="display: none;">The client can pay the driver the full amount for the journey directly (in cash). If payment is not made, the driver can notify the company (that payment was not made).</p>

                                  <p class="  cursor-pointer content_ar">يجب على السائق مراجعة مندوبي الشركة بشكل دوري لتحصيل المبالغ المدفوعة له لتحصيل نسبة الشركة وذلك من خلال نظام الكتروني لدى مندوب الشركة يقوم بتسجيل وتحصيل نسبة الشركة وطباعة فاتورة.</p>
                                  <p class="  cursor-pointer content_en" style="display: none;">The driver must regularly check with company representatives to collect the amounts paid to them in order to collect the company's percentage. This is done through an electronic system with the company representative who records and collects the company’s percentage and prints an invoice.</p>

                                  <h5 class="  cursor-pointer content_ar">الإلغاء:</h5>
                                  <h5 class="  cursor-pointer content_en" style="display: none;">Cancellation:</h5>
                                  <p class="  cursor-pointer content_ar">يحق للعميل إلغاء طلب الرحلة خلال المدة التي حددتها الشركة (5 دقائق مثلاً) وفي حال إلغاء الرحلة بعد انتهاء المدة المحددة يترتب على العميل دفع غرامة تحدد قيمتها من قبل الشركة.</p>
                                  <p class="  cursor-pointer content_en" style="display: none;">The client has the right to cancel the journey request within the period specified by the company (e.g., 5 minutes). If the journey is canceled after the specified period, the client is required to pay a penalty determined by the company.</p>

                                  <h5 class="  cursor-pointer content_ar">ميزات أخرى :</h5>
                                  <h5 class="  cursor-pointer content_en" style="display: none;">Other Features:</h5>
                                  <ul class="  cursor-pointer content_ar">
                                    <li>السرعة: حيث يوفر التطبيق السيارة الأقرب لمكان تواجدك.</li>
                                    <li>الأمان: من خلال التعامل مع أفضل السائقين.</li>
                                    <li>تقنيات متطورة: تم استخدام أفضل التقنيات البرمجية الحديثة لتسهيل عملية الاستخدام.</li>
                                    <li>الخصوصية</li>
                                  </ul>
                                  <ul class="  cursor-pointer content_en" style="display: none;">
                                    <li>Speed: The app provides the nearest car to your location.</li>
                                    <li>Safety: By dealing with the best drivers.</li>
                                    <li>Advanced Technologies: The best modern programming technologies have been used to facilitate the use process.</li>
                                    <li>Privacy</li>
                                  </ul>

                                  <h5 class="  cursor-pointer content_ar">خدمات إضافية :</h5>
                                  <h5 class="  cursor-pointer content_en" style="display: none;">Additional Services:</h5>
                                  <ul class="  cursor-pointer content_ar">
                                    <li>إمكانية إضافة عناوين ثابتة للعملاء (منزل - مكان العمل ...).</li>
                                    <li>استعلام العميل عن كافة الرحلات التي قام بها وإظهار كافة التفاصيل مع إمكانية إضافة شكوى لرحلة سابقة.</li>
                                    <li>إمكانية تقديم اقتراحات للشركة والتواصل معها.</li>
                                    <li>تغيير لغة التطبيق بين العربية والانكليزية.</li>
                                  </ul>
                                  <ul class="  cursor-pointer content_en" style="display: none;">
                                    <li>Ability to add fixed addresses for customers (home - workplace ...).</li>
                                    <li>The client can inquire about all the trips they have made and display all details with the option to add a complaint for a previous trip.</li>
                                    <li>Ability to provide suggestions to the company and communicate with it.</li>
                                    <li>Changing the app language between Arabic and English.</li>
                                  </ul>

                                  <h5 class="  cursor-pointer content_ar">سماحيات الوصول :</h5>
                                  <h5 class="  cursor-pointer content_en" style="display: none;">Access Permissions:</h5>
                                  <p class="  cursor-pointer content_ar">يمكن للتطبيق الوصول إلى الملفات لاختيار صورة لك والموقع الخاص بك في حال الموافقة على الصلاحيات.</p>
                                  <p class="  cursor-pointer content_en" style="display: none;">The app can access files to select a picture of you and your location if you agree to the permissions.</p>

                                  <h5 class="  cursor-pointer content_ar">الشكاوي:</h5>
                                  <h5 class="  cursor-pointer content_en" style="display: none;">Complaints:</h5>
                                  <p class="  cursor-pointer content_ar">إمكانية تقديم شكوى بشكل فوري بعد دفع مبلغ الرحلة، أو في وقت لاحق حيث يمكنك اختيار الرحلة التي ترغب في تقديم شكوى حولها مع إمكانية اختيار شكوى من الشكاوى المقترحة او كتابة شكوى أو يمكن التواصل بشكل مباشر عن طريق معلومات التواصل الخاصة بالشركة.</p>
                                  <p class="  cursor-pointer content_en" style="display: none;">You can file a complaint immediately after paying the journey amount, or later. You can choose the journey you wish to file a complaint about with the option to choose from suggested complaints or write a complaint. You can also communicate directly through the company's contact information.</p>

                                  <h5 class="  cursor-pointer content_ar">الاقتراحات:</h5>
                                  <h5 class="  cursor-pointer content_en" style="display: none;">Suggestions:</h5>
                                  <p class="  cursor-pointer content_ar">إمكانية تقديم ملاحظات واقتراحات وشكاوي حول التطبيق وسيتم الرد من قبل الشركة بأقرب وقت ممكن، وفي حال لم تكن راضيا عن الرد أو تعتقد أن معالجة معلوماتك لا تتوافر مع قانون تنظیم التواصل على الشبكة ومكافحة الجريمة المعلوماتية يمكنك التواصل معنا عبر الاتصال بالرقم <span style="color: green">0116131394</span> او عن طريق البريد الالكتروني <span style="color: green">report@fleet.sy</span></p>
                                  <p class="  cursor-pointer content_en" style="display: none;">You can provide feedback, suggestions, and complaints about the app, and the company will respond as soon as possible. If you are not satisfied with the response or believe that the handling of your information does not comply with the law, you can contact us at <span style="color: green">011-6131394</span> or via email at <span style="color: green">report@fleet.sy</span></p>

                                  <h5 class="  cursor-pointer content_ar">عروض وحسومات :</h5>
                                  <h5 class="  cursor-pointer content_en" style="display: none;">Offers and Discounts:</h5>
                                  <p class="  cursor-pointer content_ar">حيث يمكن للمستخدم أن يحصل على كود للرحلات في حال الوصول لعدد رحلات معين (يتم تحديد العدد من قبل الشركة), أو كعروض تشجيعية، أو في المناسبات والأعياد، حيث لا يمكن استخدام أكثر من کود حسم خلال القيام برحلة معينة.</p>
                                  <p class="  cursor-pointer content_en" style="display: none;">The user can get a journey code if they reach a certain number of trips (the number is determined by the company), or as promotional offers, or during occasions and holidays. Only one discount code can be used per journey.</p>

                                  <h5 class="  cursor-pointer content_ar">حقوق المستخدم ومسؤولياته وآليات الحماية والخصوصية لمعلوماته:</h5>
                                  <h5 class="  cursor-pointer content_en" style="display: none;">User Rights and Responsibilities, and Mechanisms for Protecting and Ensuring the Privacy of their Information:</h5>
                                  <ul class="  cursor-pointer content_ar">
                                    <li>يحق للعميل تقييم الرحلات والسائقين.</li>
                                    <li>يحق للعميل إلغاء الطلب خلال المدة التي تحددها الشركة.</li>
                                    <li>يحق للشركة الغاء الطلب في حال مخالفة العدد المسموح للركاب للقانون.</li>
                                    <li>يحث للشركة حظر حسابات المستخدمين الذين يسيئون استعمال الخدمة.</li>
                                    <li>على العميل دفع تكلفة الرحلة كاملة, وفي حال عدم الدفع يقوم السائق بتبليغ الشركة عن طريق التطبيق (لم يتم الدفع).</li>
                                    <li>يجوز للشركة الاحتفاظ ببيانات معينة للمستخدم بعد تلقي طلب بحذف الحساب، كالبيانات المتعلقة بالامتثال للمتطلبات القانونية، وذلك إذا لزم الأمر.</li>
                                  </ul>
                                  <ul class="  cursor-pointer content_en" style="display: none;">
                                    <li>The client has the right to rate trips and drivers.</li>
                                    <li>The client has the right to cancel the request within the period specified by the company.</li>
                                    <li>The company has the right to cancel the request if the allowed number of passengers is violated.</li>
                                    <li>The company has the right to ban users who misuse the service.</li>
                                    <li>The client must pay the full cost of the trip. If payment is not made, the driver reports this to the company via the app (payment not made).</li>
                                    <li>The company may retain certain user data after receiving an account deletion request, such as data related to legal compliance, if necessary.</li>
                                  </ul>

                                  <h5 class="  cursor-pointer content_ar">توفر الخدمة:</h5>
                                  <h5 class="  cursor-pointer content_en" style="display: none;">Service Availability:</h5>
                                  <p class="  cursor-pointer content_ar">كل خدمة من الخدمات التي يوفرها التطبيق مناطق توصيل محددة والتي من المحتمل أن تتغير اعتماداً على عوامل معينة كالطلب المتزايد على الخدمة وغيرها، وذلك بغية الحفاظ على جودة الخدمة كما أن لكل سائق مشترك بالتطبيق ساعات عمل خاصة به لذلك توفر الخدمات معتمد على السائقين المشاركين.</p>
                                  <p class="  cursor-pointer content_en" style="display: none;">Each service provided by the app has specific delivery areas that may change based on certain factors such as increased demand for the service and others, to maintain service quality. Each driver subscribed to the app has their own working hours, so service availability depends on the participating drivers.</p>

                                  <p class="  cursor-pointer content_ar">وفي حال القيام بالطلب من منطقة خارج نطاق التوصيل المعتمد، أو خارج ساعات العمل أو لم تكن الخدمة متاحة سيتم إعلامك بأن الطلب غير ممكن.</p>
                                  <p class="  cursor-pointer content_en" style="display: none;">If a request is made from an area outside the approved delivery range, outside working hours, or if the service is not available, you will be informed that the request is not possible.</p>

                                  <h5 class="  cursor-pointer content_ar">حقوق الجهة المسؤولة عن التطبيق وواجباتها:</h5>
                                  <h5 class="  cursor-pointer content_en" style="display: none;">Rights and Duties of the Responsible Entity for the App:</h5>
                                  <p class="  cursor-pointer content_ar">تحتفظ الشركة ببيانات الملف التعريفي للمستخدم، ومعاملاته وبيانات الاستخدام والبيانات الشخصية الأخرى مادام المستخدم محتفظاً بحسابه في الشركة، وتتحدد فترة الاحتفاظ بهذه المعلومات اعتماداً على عوامل كالنزاعات المحتملة، والإرشادات الصادرة عن الهيئة الناظمة للاتصالات والبريد والإرشادات الصادرة عن الهيئة الوطنية لخدمات تقانة المعلومات والهيئات الحكومية الأخرى، وسيتم نقل المعلومات التي نجمعها عنك وتخزينها على خوادمنا الموجودة داخل اراضي الجمهورية العربية السورية فنحن حريصون وشفافون للغاية بشأن من تتم مشاركة معلوماتك معه. كما أنه يمكن الكشف عن معلوماتك أو نقلها في حال الدخول في مشروع مشترك مع كيان تجاري آخر، أو تم شراءه أو بيعه لكيان تجاري آخر.</p>
                                  <p class="  cursor-pointer content_en" style="display: none;">The company retains the user's profile data, transactions, usage data, and other personal information as long as the user maintains their account with the company. The retention period of this information depends on factors such as potential disputes, guidelines issued by the Telecommunications and Postal Regulatory Authority, guidelines issued by the National Information Technology Authority, and other governmental bodies. The information we collect about you will be transferred and stored on our servers located within the Syrian Arab Republic. We are very careful and transparent about who your information is shared with. Information about you may be disclosed or transferred if we enter into a joint venture with another business entity, or if it is purchased or sold to another business entity.</p>

                                  <h5 class="  cursor-pointer content_ar">التسويق:</h5>
                                  <h5 class="  cursor-pointer content_en" style="display: none;">Marketing:</h5>
                                  <p class="  cursor-pointer content_ar">يتضمن التسويق عن خدمات الشركة، وميزاتها، وعروضها الترويجية والدراسات القائمة، واستطلاعات الرأي، والأخبار، والتحديثات والفعاليات على وسائل التواصل الخاصة بالمستخدمين.</p>
                                  <p class="  cursor-pointer content_en" style="display: none;">Marketing includes information about the company's services, features, promotional offers, ongoing studies, surveys, news, updates, and events on the users' social media.</p>

                                  <h5 class="  cursor-pointer content_ar">الإجراءات التي ستتخذها الجهة في حال مخالفة المستخدم لسياسة الاستخدام:</h5>
                                  <h5 class="  cursor-pointer content_en" style="display: none;">Actions the Entity Will Take in Case of User Violation of the Usage Policy:</h5>
                                  <ul class="  cursor-pointer content_ar">
                                    <li>يجوز لنا استخدام البيانات الشخصية (رقم الهاتف) التي نجمعها للتحقيق في المطالبات أو النزاعات المتعلقة باستخدام خدمات الشركة وحلها، أو وفقا لما يسمح به القانون، أو بناء على طلب جهات التنظيم، والجهات الحكومية، والاستفسارات الرسمية.</li>
                                    <li>يجوز للشركة مشاركة بيانات المستخدمين الشخصية المذكورة سابقا إذا اعتقدنا أنها مطلوبة بموجب القانون، أو الإجراءات القانونية السارية أو الطلبات الحكومية، أو حيث ما يكون الكشف عن هذه البيانات ملائمة بسبب أمور تمس السلامة أو مخاوف مشابهة. ويتضمن ذلك مشاركة البيانات الشخصية مع مسؤولي تنفيذ القانون، لحماية حقوق الشركة أو ممتلكاتها أو حقوق الآخرين، أو سلامتهم، أو ممتلكاتهم، أو في حال وجود مطالبة أو نزاع يتعلق باستخدام خدماتنا.</li>
                                    <li>يجوز للشركة مشاركة بيانات المستخدم الشخصية بخلاف ما هو موضح في هذه الوثيقة إذا أبلغنا المستخدم ووافق على المشاركة.</li>
                                  </ul>
                                  <ul class="  cursor-pointer content_en" style="display: none;">
                                    <li>We may use the personal data (phone number) we collect to investigate claims or disputes related to the use of the company's services and resolve them, or as permitted by law, or upon the request of regulatory bodies, government agencies, and official inquiries.</li>
                                    <li>The company may share users' personal data mentioned earlier if we believe it is required by law, applicable legal procedures, or governmental requests, or where the disclosure of this data is appropriate due to safety concerns or similar issues. This includes sharing personal data with law enforcement officials, to protect the company's rights or property, or the rights or property of others, or safety, in the event of a claim or dispute related to the use of our services.</li>
                                    <li>The company may share users' personal data as described in this document if we notify the user and they agree to the sharing.</li>
                                  </ul>

                                  <h5 class="  cursor-pointer content_ar">تعديل سياسة الاستخدام:</h5>
                                  <h5 class="  cursor-pointer content_en" style="display: none;">Usage Policy Modification:</h5>
                                  <p class="  cursor-pointer content_ar">يجوز لنا تحديث هذه الوثيقة من حين لآخر وإعلامك بتغييرها عبر مواقع التواصل الاجتماعي، وخدمة العملاء، ويعد استخدام خدماتنا بعد تحديثها موافقة على الإشعار المحدث.</p>
                                  <p class="  cursor-pointer content_en" style="display: none;">We may update this document from time to time and notify you of the change via social media, and customer service. Using our services after an update constitutes agreement to the updated notice.</p>


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
