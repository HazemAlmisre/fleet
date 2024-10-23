<!DOCTYPE html>

@if(app()->getLocale() == "ar")
<html direction="rtl" dir="rtl" style="direction: rtl">
    @else
    <html direction="ltr" dir="ltr" style="direction: ltr">

        @endif

        <!--begin::Head-->
        <head><base href="">
            <title>{{App\WebsiteSetting::find(1)->first()->website_name}}
                |
                {{App\WebsiteSetting::find(1)->first()->website_slug}}</title>
            <meta charset="utf-8"/>
            <meta
                name="description"
                content="{{App\WebsiteSetting::find(1)->first()->website_slug}}"/>
            <meta name="viewport" content="width=device-width, initial-scale=1"/>
            <meta property="og:locale" content="en_US"/>
            <meta property="og:type" content="article"/>
            <meta
                property="og:title"
                content="{{App\WebsiteSetting::find(1)->first()->website_name}} | {{App\WebsiteSetting::find(1)->first()->website_slug}}"/>

            <link
                rel="shortcut icon"
                href="{{App\WebsiteSetting::find(1)->first()->favicon}}"/>
            <!--begin::Fonts-->
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap" rel="stylesheet">
            <style>
                *{
                    font-family : 'Cairo', serif !important;
                }
            </style>
            <!--end::Fonts-->
            <!--begin::Page Vendor Stylesheets(used by this page)-->
            <link
                href="{{asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.css')}}"
                rel="stylesheet"
                type="text/css"/>
            <link
                href="{{asset('assets/plugins/custom/datatables/datatables.bundle.css')}}"
                rel="stylesheet"
                type="text/css"/>
            <!--end::Page Vendor Stylesheets-->

            @if(app()->getLocale() == "ar")
            <!--begin::Page Vendor Stylesheets(used by this page)-->
            <link
                href="{{asset('assets/plugins/custom/prismjs/prismjs.bundle.rtl.css')}}"
                rel="stylesheet"
                type="text/css"/>
            <!--end::Page Vendor Stylesheets-->
            <link
                href="{{asset('assets/plugins/global/plugins.bundle.rtl.css')}}"
                rel="stylesheet"
                type="text/css"/>
            <link
                href="{{asset('assets/css/style.bundle.rtl.css')}}"
                rel="stylesheet"
                type="text/css"/>
            @else
            <!--begin::Global Stylesheets Bundle(used by all pages)-->
            <link
                href="{{asset('assets/plugins/global/plugins.bundle.css')}}"
                rel="stylesheet"
                type="text/css"/>
            <link
                href="{{asset('assets/css/style.bundle.css')}}"
                rel="stylesheet"
                type="text/css"/>
            @endif @yield('head')
            <!--end::Global Stylesheets Bundle-->
        </head>
        <!--end::Head-->
        <!--begin::Body-->
        <body
            id="kt_body"
            class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed aside-enabled aside-fixed"
            style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
            <!--begin::Main-->
            <!--begin::Root-->
            <div class="d-flex flex-column flex-root">

                <!--begin::Page-->
                <div class="page d-flex flex-row flex-column-fluid">
                    <!--begin::Aside-->
                    <div
                        id="kt_aside"
                        class="aside aside-dark aside-hoverable"
                        data-kt-drawer="true"
                        data-kt-drawer-name="aside"
                        data-kt-drawer-activate="{default: true, lg: false}"
                        data-kt-drawer-overlay="true"
                        data-kt-drawer-width="{default:'200px', '300px': '250px'}"
                        data-kt-drawer-direction="start"
                        data-kt-drawer-toggle="#kt_aside_mobile_toggle">
                        <!--begin::Brand-->
                        <div class="aside-logo flex-column-auto" id="kt_aside_logo">
                            <!--begin::Logo-->
                            <a href="{{route('welcome')}}" >
                                <img
                                    alt="Logo"
                                    src="{{App\WebsiteSetting::find(1)->first()->admin_logo}}"
                                    class="h-25px logo "
                                    style="margin-left:50%;margin-right: 20%"
                                    />
                            </a>
                            <!--end::Logo-->
                            <!--begin::Aside toggler-->
                            <div
                                id="kt_aside_toggle"
                                class="btn btn-icon w-auto px-0 btn-active-color-primary aside-toggle"
                                data-kt-toggle="true"
                                data-kt-toggle-state="active"
                                data-kt-toggle-target="body"
                                data-kt-toggle-name="aside-minimize">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr079.svg-->
                                <span class="svg-icon svg-icon-1 rotate-180">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewbox="0 0 24 24"
                                        fill="none">
                                        <path
                                            opacity="0.5"
                                            d="M14.2657 11.4343L18.45 7.25C18.8642 6.83579 18.8642 6.16421 18.45 5.75C18.0358 5.33579 17.3642 5.33579 16.95 5.75L11.4071 11.2929C11.0166 11.6834 11.0166 12.3166 11.4071 12.7071L16.95 18.25C17.3642 18.6642 18.0358 18.6642 18.45 18.25C18.8642 17.8358 18.8642 17.1642 18.45 16.75L14.2657 12.5657C13.9533 12.2533 13.9533 11.7467 14.2657 11.4343Z"
                                            fill="black"/>
                                        <path
                                            d="M8.2657 11.4343L12.45 7.25C12.8642 6.83579 12.8642 6.16421 12.45 5.75C12.0358 5.33579 11.3642 5.33579 10.95 5.75L5.40712 11.2929C5.01659 11.6834 5.01659 12.3166 5.40712 12.7071L10.95 18.25C11.3642 18.6642 12.0358 18.6642 12.45 18.25C12.8642 17.8358 12.8642 17.1642 12.45 16.75L8.2657 12.5657C7.95328 12.2533 7.95328 11.7467 8.2657 11.4343Z"
                                            fill="black"/>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                            <!--end::Aside toggler-->
                        </div>
                        <!--end::Brand-->
                        <!--begin::Aside menu-->
                        @include('layouts.parts.aside')
                        <!--end::Aside menu-->

                    </div>
                    <!--end::Aside-->
                    <!--begin::Wrapper-->
                    <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                        <!--begin::Header-->
                        <div id="kt_header" style="" class="header align-items-stretch">
                            <!--begin::Container-->
                            <div class="container-fluid d-flex align-items-stretch justify-content-between">
                                @include('layouts.parts.aside_mobile')
                                <!--begin::Wrapper-->
                                <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1">
                                    <!--begin::Navbar-->
                                    <div class="d-flex align-items-stretch" id="kt_header_nav">
                                        <!--begin::Menu wrapper-->

                                        <!--end::Menu wrapper-->
                                    </div>
                                    <!--end::Navbar-->
                                    @include('layouts.parts.toolbar')
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Container-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Content-->
                        <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                            <!--begin::Toolbar-->
                            <div class="toolbar" id="kt_toolbar">
                                <!--begin::Container-->
                                <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                                    <!--begin::Page title-->
                                    <div
                                        data-kt-swapper="true"
                                        data-kt-swapper-mode="prepend"
                                        data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                                        class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                                        <!--begin::Title-->
                                        <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">{{__('Dashboard')}}
                                            <!--begin::Separator-->
                                            <span class="h-20px border-gray-200 border-start ms-3 mx-2"></span>
                                            <!--end::Separator-->
                                            <!--begin::Description-->
                                            <small class="text-muted fs-7 fw-bold my-1 ms-1">{{__('Welcome')}}
                                                {{auth()->user()->name}}</small>
                                            <!--end::Description-->
                                        </h1>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Page title-->
                                    <!-- begin::Actions-->

                                    <!--end::Actions -->
                                </div>
                                <!--end::Container-->
                            </div>
                            <!--end::Toolbar-->
                            <!--begin::Post-->
                            <div class="post d-flex flex-column-fluid" id="kt_post">

                                <!--begin::Container-->
                                <div id="kt_content_container" class="container-xxl">
									@office
									@if(auth()->user()->office->current_orders >= auth()->user()->office->limit_orders || auth()->user()->office->current_money >= auth()->user()->office->limit_money)
                                    <div class="row">
                                        <div class="alert alert-danger d-flex align-items-center p-5 mb-10">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen048.svg-->
                                            <span class="svg-icon svg-icon-2hx svg-icon-danger me-4">
                                                <svg
                                                    width="24"
                                                    height="24"
                                                    viewbox="0 0 24 24"
                                                    fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        opacity="0.3"
                                                        d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z"
                                                        fill="currentColor"></path>
                                                    <path
                                                        d="M10.5606 11.3042L9.57283 10.3018C9.28174 10.0065 8.80522 10.0065 8.51412 10.3018C8.22897 10.5912 8.22897 11.0559 8.51412 11.3452L10.4182 13.2773C10.8099 13.6747 11.451 13.6747 11.8427 13.2773L15.4859 9.58051C15.771 9.29117 15.771 8.82648 15.4859 8.53714C15.1948 8.24176 14.7183 8.24176 14.4272 8.53714L11.7002 11.3042C11.3869 11.6221 10.874 11.6221 10.5606 11.3042Z"
                                                        fill="currentColor"></path>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                            <div class="d-flex flex-column">
                                                <h4 class="mb-1 text-danger">Alert !!!</h4>
                                                <span>{{__('You have exceeded the limit of requests. Please contact Fleet management. Drivers will not be able to receive requests until all dues are paid.')}}</span>
                                            </div>
                                        </div>
                                    </div>

									@endif
									@endoffice
                                    @yield('content')
                                </div>
                                <!--end::Container-->
                            </div>
                            <!--end::Post-->
                        </div>
                        <!--end::Content-->

                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Page-->
            </div>
            <!--end::Root-->
            <!--end::Main-->
            <!--begin::Scrolltop-->
            <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
                <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                <span class="svg-icon">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewbox="0 0 24 24"
                        fill="none">
                        <rect
                            opacity="0.5"
                            x="13"
                            y="6"
                            width="13"
                            height="2"
                            rx="1"
                            transform="rotate(90 13 6)"
                            fill="black"/>
                        <path
                            d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                            fill="black"/>
                    </svg>
                </span>
                <!--end::Svg Icon-->
            </div>
            <!--end::Scrolltop-->
            <!--begin::Modals-->

            <!--end::Modals-->
            <!--begin::Javascript-->
            <script>
                var hostUrl = "assets/";
            </script>
            <!--begin::Global Javascript Bundle(used by all pages)-->
            <script src="{{asset('assets/plugins/global/plugins.bundle.js')}}"></script>
            <script src="{{asset('assets/js/scripts.bundle.js')}}"></script>
            <!--end::Global Javascript Bundle-->
            <!--begin::Page Vendors Javascript(used by this page)-->
            <script
                src="{{asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.js')}}"></script>
            <script
                src="{{asset('assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
            <!--end::Page Vendors Javascript-->
            <!--begin::Page Custom Javascript(used by this page)-->
            <script src="{{asset('assets/js/widgets.bundle.js')}}"></script>
            <script src="{{asset('assets/js/custom/widgets.js')}}"></script>
            <!--end::Page Custom Javascript-->
            <!--end::Javascript-->
            @yield('modals') @yield('scripts')
        </body>
        <!--end::Body-->
    </html>
