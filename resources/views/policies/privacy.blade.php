<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head><base href="">
		<title>{{App\WebsiteSetting::find(1)->first()->website_name}} | {{App\WebsiteSetting::find(1)->first()->website_slug}}</title>
		<meta charset="utf-8" />
		<meta name="description" content="{{App\WebsiteSetting::find(1)->first()->website_slug}}" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<link rel="shortcut icon" href="{{App\WebsiteSetting::find(1)->first()->favicon}}" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Global Stylesheets Bundle(used by all pages)-->
		<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
		<!--end::Global Stylesheets Bundle-->
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" data-bs-spy="scroll" data-bs-target="#kt_landing_menu" data-bs-offset="200" class="bg-white position-relative">
		<!--begin::Main-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root " >
			<!--begin::Header Section-->
			<div class="mb-0" id="home">
				<!--begin::Wrapper-->
				<div class="" >
					<!--begin::Header-->
					<div class="landing-header bgi-no-repeat bgi-size-contain bgi-position-x-center bgi-position-y-bottom landing-dark-bg" data-kt-sticky="true" data-kt-sticky-name="landing-header" data-kt-sticky-offset="{default: '200px', lg: '300px'}">
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
												<path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="black" />
												<path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="black" />
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
											<div class="menu-item">
												<!--begin::Menu link-->
												<a class="menu-link nav-link active py-3 px-4 px-xxl-6" href="{{route('welcome')}}" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">{{__('Home')}}</a>
												<!--end::Menu link-->
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item">
												<!--begin::Menu link-->
												<a class="menu-link nav-link py-3 px-4 px-xxl-6" href="{{route('privacy_policy')}}" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">{{__('Privacy Policy')}}</a>
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
								<!--end::Toolbar-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Header-->
					<!--begin::Landing hero-->

<!DOCTYPE html>
<html lang="ar">
  <head>
    <!-- Metas -->
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width" />


    <meta name="author" content="LionCoders" />
    <!-- Links -->
    <link rel="icon" type="image/png" href="https://fleet.sy/uploads/1693400659.png" style="background-color: black !important"/>
    {{-- <link
      href="https://fonts.googleapis.com/css?family=Work+Sans:400,600&display=swap"
      rel="stylesheet"
    /> --}}
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap" rel="stylesheet">

    <link rel="stylrsheet" href="{{ asset('assets/css/style.bundle.css') }}">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Document Title -->
    <title>سياسة الخصوصية وشروط الاستخدام fleet</title>
  </head>
  <body dir="rtl">
    <!-- HEADER SECTION -->
    <header id="home" style="width: 100%">
        <div class="container">
         <style>

          body {
      color: #000000;
      font-family: 'Cairo', serif;
      font-size: 14px;
      font-weight: 400;
      overflow-x: hidden;
      transition: opacity 1s;
      min-width: 95%;
  }
  img {
      max-width: 100%;
      height: auto;
  }
  a {
      font-weight: 600;
      color: #000000;
      text-decoration: none;
      letter-spacing: 1px;
      position: relative;
      text-align: center;
  }
  div ul {
      font-family: arabic-normal;
      direction: rtl;
      text-align: right;
      line-height: 2;
      font-size: 1.1rem;
      color: #6e757a;
  }
  .contact-btn button {
      width: 200px;
      height: 60px;
      border: 0px;
      -webkit-box-shadow: 0px 4px 6px 0px rgba(30, 32, 33, 0.07);
      -moz-box-shadow: 0px 4px 6px 0px rgba(30, 32, 33, 0.07);
      box-shadow: 0px 4px 6px 0px rgba(30, 32, 33, 0.07);
      background-color: #fff;
      border-radius: 3px;
      font-size: 1.2rem;
      font-family: "Work Sans", sans-serif;
      font-weight: 600;
      color: #009685;
  }
  .navbar-light .navbar-nav .active > .nav-link, .navbar-light .navbar-nav .nav-link.active, .navbar-light .navbar-nav .nav-link.show, .navbar-light .navbar-nav .show > .nav-link {
      color: #009685;
  }
  .navbar-light .navbar-nav .nav-link {
      font-size: 1rem;
  }
  div h3 {
      font-family: arabic-normal;
      direction: rtl;
      text-align: right;
  }
  div h5 {
      font-family: arabic-normal;
      direction: rtl;
      text-align: right;
      color: #009685;
      padding-top: 12px;
  }
  div h4 {
      font-family: arabic-normal;
      direction: rtl;
      text-align: right;
      padding-top: 16px;
      padding-bottom: 16px;
  }
  h4, .h4 {
      font-size: 24px;
  }
  h5, .h5 {
      font-size: 1rem;
      color: #009685;
  }
  h1, .h1, h2, .h2, h3, .h3, h4, .h4, h5, .h5, h6, .h6 {
      color: #000000;
      font-weight: 600;
      letter-spacing: 1px;
      margin-top: 0%
  }
  .hero p {
      margin-bottom: 50px;
  }
  p {
      font-family: arabic-normal;
      direction: rtl;
      text-align: right;
      font-size: 1.1rem;
      line-height: 1.8;
      color: #6e757a;
      margin-bottom: 15px;
      letter-spacing: 0.025em;
  }
  footer {
      background-color: #009685;
      width: 100%;
      min-height: 400px;
      text-align: center;
      padding: 70px 0px 0px 0px;
  }
  div ul {
      font-family: arabic-normal;
      direction: rtl;
      text-align: right;
      line-height: 2;
      font-size: 1.1rem;
      color: #6e757a;
  }
  .contact-nav li {
      display: inline;
      color: #fff;
  }
  .contact-nav a {
      color: #fff;
      font-size: 1.1rem;
      padding: 20px 20px;
      line-height: 3rem;
  }
  footer h5 {
      color: #fff;
      padding-bottom: 10px;
  }
  div h5 {
      font-family: arabic-normal;
      direction: rtl;
      text-align: right;
      color: #009685;
      padding-top: 12px;
  }
  footer h3 {
      color: #009685;
      font-size: 3rem;
      margin-bottom: 30px;
  }
  div h3 {
      font-family: arabic-normal;
      direction: rtl;
      text-align: right;
  }
  footer h6 {
      color: #fff;
      font-size: 0.9rem;
      font-weight: 400;
      margin-top: 50px;
      margin-bottom: 20px;
      text-align: right
  }
  *{
      font-family:  'Cairo', serif !important;
      margin: 0;
      padding: 0;
  }
  @media (max-width: 1199px)
  {
      h3 {
      font-size: 1.4rem;
      line-height: 2rem;
      margin-bottom: 20px;
      }
  }
         </style>
        <!-- HERO SECTION -->
        <div class="container-fluid hero" style="font-family: arabic-normal;">

          <div style="padding-top: 64px;">
            <h3> سياسية الخصوصية وشروط الاستخدام الخاصة بتطبيق Fleet</h3>
            <p>توضح هذه الوثيقة البيانات الشخصية التي نجمعها، وكيفية استخدامها ومشاركتها، بالإضافة إلى الخيارات المتوفرة أمامك بشأن هذه البيانات. ونوصيك بقراءة هذه الوثيقة والتي تتناول النقاط الرئيسية لممارسات الخصوصية، الرجاء قراءة هذه الشروط قبل تفعيل الحساب، وفي حال وجود أي استفسارات يمكنك التواصل على الرقم    <span style="color: green"> 6131394-011 </span></p>
            {{-- <p>في كل مرة تدخل فيها أو تستخدم الخدمات أو تزودنا بمعلومات، فإنك بقيامك بذلك تقبل وتوافق على الممارسات المبينة في سياسة الخصوصية هذه.</p> --}}
           <h5>تعريف بالتطبيق :</h5>
            <p>تطبيق Fleet (ويشار اليه “التطبيق”) هو تطبيق إلكتروني لحجز سيارات وعمل رحلات في الجمهورية العربية السورية، حيث يعمل التطبيق على أجهزة الهاتف الجوال وتعمل الشركة على تطويره وإضافة الخدمات لضمان الى استمرار الاعتماد عليه. </p>
            <p>تطبيق العملاء: يتم استخدامه من قبل شريحة من المجتمع التي تحتاج وسيلة نقل لقضاء رحلتها، إضافة إلى طلب وسيلة نقل لشخص آخر.</p>
            <p>تطبيق السائقين: يتم استخدامه من قبل السائقين المتعاقدين معهم والمسموح لهم بتقديم الخدمات عبر التطبيق.</p>
           <h5>الجهة المسؤولة عن التطبيق :</h5>
            <p>شركة رمو المحدودة المسؤولية مسجلة في السجل التجاري بمدينة دمشق تحت رقم: 19705  بتاريخ 2022/06/12 في الجمهورية العربية السورية.</p>
            <h5>الفئات المستهدفة :</h5>
            <p>الركاب: هم الأشخاص الذين يقومون بطلب وسيلة النقل أو يتلقونها.</p>
            <p>السائقون: هم الأشخاص الذين يقومون بالتعاقد مع الشركة لتقديم خدمات النقل أو التوصيل أو غيرها من الخدمات المقدمة عبر التطبيق والذين يملكون مركبات تحقق شروط معينة.</p>
            <h4>توصيف عمل التطبيق :</h4>
            <h5>هو تطبيق للمستخدم لحجز سيارات وعمل رحلات في سورية وبأي وقت ولكيفية استخدام التطبيق يجب الاطلاع على التفاصيل التالية:</h5>

            <p>الحساب: عند تشغيل التطبيق لأول مرة يطلب من العميل إدخال رقم الهاتف الجوال ليصل كود التفعيل الخاص به المكون من ستة أرقام لفتح التطبيق وعند التأكد من صحة الكود يطلب منه إدخال الاسم والكنية والمدينة.</p>
            <h4>عمل التطبيق :</h4>
            <h5>تكسي محلي :</h5>
            <p>يسمح بالتنقل بين مناطق المحافظة الواحدة حيث يجب تحديد نقطة بداية الرحلة ونهايتها إما لوجهة معينة أو اختيار الرحلة مفتوحة الوجهة واختيار نوع السيارة ليتم إظهار تفاصيل الرحلة المتوقعة من مدة ومسافة وكلفة حيث جميع القيم الظاهرة هي قيم تقريبية يمكن أن تتغير عند نهاية الرحلة تبعا للمسافة الفعلية المقطوعة وزمن الرحلة الفعلي المحتسبة من قبل تطبيق الكابتن، وعند طلب الرحلة سيتم إرسال الطلب لأقرب سائق متاح إلى العميل وفي حال لم يتم قبول الطلب سيرسل لسائق آخر قريب.... وعند قبول الرحلة سيصل اشعار إليه بقبول الرحلة مع عرض اسم السائق والزمن المتوقع لوصول السائق إلى نقطة بداية الرحلة عند وصول السائق إلى نقطة البداية سيقوم السائق بتنبيه العميل ليصل إشعار إليه بوصول السائق.</p>
            <p>عند صعود العميل إلى السيارة يقوم السائق ببدء الرحلة ليتم البدء بحساب عداد الرحلة والزمن، وعند الوصول إلى نقطة النهاية أو عند رغبة العميل بالتوقف في منطقة معينة يقوم السائق بإنهاء الرحلة لتظهر لدى العميل تفاصيل الرحلة كاملة من مدة ومسافة ومبلغ مع إمكانية تقييم الرحلة والتأكد من المبلغ المدفوع، في حال كانت مسافة الرحلة اصغر من مسافة معينة كم يتم تثبيت تكلفة هذه الرحلة من قبل الشركة، وفي حال كان هناك خطأ بتفاصيل الرحلة يمكن الابلاغ عن المشكلة عن طريق الاتصال بالدعم الفني، لمعالجة المشكلة فورا.</p>

            <h5>آلية الدفع والتحصيل:</h5>
            <p>يمكن للعميل أن يدفع للسائق مبلغ الرحلة بشكل كامل بشكل مباشر (كاش)، وفي حال لم يتم الدفع يمكن للسائق تبليغ الشركة (أنه لم يتم الدفع).</p>
            <p>يجب على السائق مراجعة مندوبي الشركة بشكل دوري لتحصيل المبالغ المدفوعة له لتحصيل نسبة الشركة وذلك من خلال نظام الكتروني لدى مندوب الشركة يقوم بتسجيل وتحصيل نسبة الشركة وطباعة فاتورة.</p>
            <h5>الإلغاء:</h5>
            <p>يحق للعميل إلغاء طلب الرحلة خلال المدة التي حددتها الشركة (5 دقائق مثلاً) وفي حال إلغاء الرحلة بعد انتهاء المدة المحددة يترتب على العميل دفع غرامة تحدد قيمتها من قبل الشركة.</p>
            <h5>ميزات أخرى :</h5>
            <ul>
             <li>السرعة: حيث يوفر التطبيق السيارة الأقرب لمكان تواجدك.</li>
             <li>الأمان: من خلال التعامل مع أفضل السائقين.</li>
             <li>تقنيات متطورة: تم استخدام أفضل التقنيات البرمجية الحديثة لتسهيل عملية الاستخدام.</li>
             <li>الخصوصية</li>
            </ul>
            <h5>خدمات إضافية :</h5>
            <ul>
             <li>إمكانية إضافة عناوين ثابتة للعملاء (منزل - مكان العمل ...).</li>
             <li>ستعلام العميل عن كافة الرحلات التي قام بها وإظهار كافة التفاصيل مع إمكانية إضافة شكوى لرحلة سابقة.</li>
             <li>إمكانية تقديم اقتراحات للشركة والتواصل معها.</li>
             <li>تغيير لغة التطبيق بين العربية والانكليزية.</li>
            </ul>
            <h5>سماحيات الوصول :</h5>
            <p>يمكن للتطبيق الوصول إلى الملفات لاختيار صورة لك والموقع الخاص بك في حال الموافقة على الصلاحيات.</p>
            <h5>الشكاوي:</h5>
            <p>إمكانية تقديم شكوى بشكل فوري بعد دفع مبلغ الرحلة، أو في وقت لاحق حيث يمكنك اختيار الرحلة التي ترغب في تقديم شكوى حولها مع إمكانية اختيار شكوى من الشكاوى المقترحة او كتابة شكوى أو يمكن التواصل بشكل مباشر عن طريق معلومات التواصل الخاصة بالشركة.</p>
            <h5>الاقتراحات:</h5>
            <p>إمكانية تقديم ملاحظات واقتراحات وشكاوي حول التطبيق وسيتم الرد من قبل الشركة بأقرب وقت ممكن، وفي حال لم تكن راضيا عن الرد أو تعتقد أن معالجة معلوماتك لا تتوافر مع قانون تنظیم التواصل على الشبكة ومكافحة الجريمة المعلوماتية يمكنك التواصل معنا عبر االاتصال بالرقم  <span style="color: green">0116131394 </span>  او عن طريق البريد الالكتروني  <span style="color: green"> report@fleet.sy </span></p>
            <h5>عروض وحسومات :</h5>
            <p>حيث يمكن للمستخدم أن يحصل على كود للرحلات في حال الوصول لعدد رحلات معين (يتم تحديد العدد من قبل الشركة), أو كعروض تشجيعية، أو في المناسبات والأعياد، حيث لا يمكن استخدام أكثر من کود حسم خلال القيام برحلة معينة.</p>
            <h5>حقوق المستخدم ومسؤولياته وآليات الحماية والخصوصية لمعلوماته:</h5>
            <ul>
             <li>يحق للعميل تقييم الرحلات والسائقين.</li>
             <li>يحق للعميل إلغاء الطلب خلال المدة التي تحددها الشركة.</li>
             <li> يحق للشركة الغاء الطلب في حال مخالفة العدد المسموح للركاب للقانون.</li>
             <li>يحث للشركة حظر حسابات المستخدمين الذين يسيئون استعمال الخدمة.</li>
             <li>على العميل دفع تكلفة الرحلة كاملة, وفي حال عدم الدفع يقوم السائق بتبليغ الشركة عن طريق التطبيق (لم يتم الدفع).</li>
             <li>يجوز للشركة الاحتفاظ ببيانات معينة للمستخدم بعد تلقي طلب بحذف الحساب، كالبيانات المتعلقة بالامتثال للمتطلبات القانونية، وذلك إذا لزم الأمر.</li>
            </ul>
            <h5>توفر الخدمة:</h5>
            <p>كل خدمة من الخدمات التي يوفرها التطبيق مناطق توصيل محددة والتي من المحتمل أن تتغير اعتماداً على عوامل معينة كالطلب المتزايد على الخدمة وغيرها، وذلك بغية الحفاظ على جودة الخدمة كما أن لكل سائق مشترك بالتطبيق ساعات عمل خاصة به لذلك توفر الخدمات معتمد على السائقين المشاركين.</p>
            <p>وفي حال القيام بالطلب من منطقة خارج نطاق التوصيل المعتمد، أو خارج ساعات العمل أو لم تكن الخدمة متاحة سيتم إعلامك بأن الطلب غير ممكن.</p>
            <h4>حقوق الجهة المسؤولة عن التطبيق وواجباتها:</h4>
            <p>تحتفظ الشركة ببيانات الملف التعريفي للمستخدم، ومعاملاته وبيانات الاستخدام والبيانات الشخصية الأخرى مادام المستخدم محتفظاً بحسابه في الشركة، وتتحدد فترة الاحتفاظ بهذه المعلومات اعتماداً على عوامل كالنزاعات المحتملة، والإرشادات الصادرة عن الهيئة الناظمة للاتصالات والبريد والإرشادات الصادرة عن الهيئة الوطنية لخدمات تقانة المعلومات والهيئات الحكومية الأخرى، وسيتم نقل المعلومات التي نجمعها عنك وتخزينها على خوادمنا الموجودة داخل اراضي الجمهورية العربية السورية فنحن حريصون وشفافون للغاية بشأن من تتم مشاركة معلوماتك معه. كما أنه يمكن الكشف عن معلوماتك أو نقلها في حال الدخول في مشروع مشترك مع كيان تجاري آخر، أو تم شراءه أو بيعه لكيان تجاري آخر.</p>
            <h5>التسويق:</h5>
            <p>يتضمن التسويق عن خدمات الشركة، وميزاتها، وعروضها الترويجية والدراسات القائمة، واستطلاعات الرأي، والأخبار، والتحديثات والفعاليات على وسائل التواصل الخاصة بالمستخدمين.</p>
             <h5>الإجراءات التي ستتخذها الجهة في حال مخالفة المستخدم لسياسة الاستخدام:</h5>
            <ul>
             <li>يجوز لنا استخدام البيانات الشخصية ( رقم الهاتف) التي نجمعها للتحقيق في المطالبات أو النزاعات المتعلقة باستخدام خدمات الشركة وحلها، أو وفقا لما يسمح به القانون، أو بناء على طلب جهات التنظيم، والجهات الحكومية، والاستفسارات الرسمية.</li>
             <li>يجوز للشركة مشاركة بيانات المستخدمين الشخصية المذكورة سابقا إذا اعتقدنا أنها مطلوبة بموجب القانون، أو الإجراءات القانونية السارية أو الطلبات الحكومية، أو حيث ما يكون الكشف عن هذه البيانات ملائمة بسبب أمور تمس السلامة أو مخاوف مشابهة. ويتضمن ذلك مشاركة البيانات الشخصية مع مسؤولي تنفيذ القانون، لحماية حقوق الشركة أو ممتلكاتها أو حقوق الآخرين، أو سلامتهم، أو ممتلكاتهم، أو في حال وجود مطالبة أو نزاع يتعلق باستخدام خدماتنا.</li>
             <li>يجوز للشركة مشاركة بيانات المستخدم الشخصية بخلاف ما هو موضح في هذه الوثيقة إذا أبلغنا المستخدم ووافق على المشاركة.</li>
            </ul>
           <h5>تعديل سياسة الاستخدام:</h5>
           <p>يجوز لنا تحديث هذه الوثيقة من حين لآخر وإعلامك بتغييرها عبر مواقع التواصل الاجتماعي، وخدمة العملاء، ويعد استخدام خدماتنا بعد تحديثها موافقة على الإشعار المحدث.</p>
           </div>
      </header>

      <!-- FOOTER SECTION -->
      <footer style="font-family: arabic-light; padding-right: 50px; padding-bottom: 50px;">
          <div class="row">

            <div class="col-12">

              <h5 style="color: white">انضم إلى مجتمعنا</h5>
              <h3 style="color: white">تطبيق FLEET</h3>
              <ul class="contact-nav">
                <li><a data-scroll href="#home">الرئيسية</a></li>
                <li><a data-scroll href="https://onelink.to/cvnww6">حمل التطبيق الآن</a></li>
              </ul>
              <h6 style="font-family: arabic-light;">© 2024 - جميع الحقوق محفوظة لتطبيق فلييت</h6>
          </div>
      </footer>

    <!-- Scripts -->
    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
      integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
      crossorigin="anonymous"
    ></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/smooth-scroll.min.js"></script>
    <script src="js/main.js"></script>
    <!-- Scripts Ends -->


  </body>
</html>

					<!--end::Landing hero-->
				</div>
				<!--end::Wrapper-->

			</div>
			<!--end::Header Section-->

			<!--end::Footer Section-->
			<!--begin::Scrolltop-->
			<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
				<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
				<span class="svg-icon">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
						<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="black" />
						<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="black" />
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
		<!--end::Page Custom Javascript-->
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>
