<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<meta name="csrf-token" content="{{ csrf_token() }}">
@include('backend.layouts.head')
<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled sidebar-enabled page-loading">
    <!------------------------------------------------------------------------------------------------>
    @include('backend.layouts.mobile-header')
    <!-- WRAPPER ------------------------------------------------------------------------------------->
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="d-flex flex-row flex-column-fluid page">
            <!--begin::Aside-->
            @include('backend.menus.left-menu')
            <!--end::Aside-->
            <!--begin::Wrapper-->
            <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
                <!--begin::Content-->
                @yield('content')
                <!--end::Content-->
                <!--begin::Footer-->
                @include('backend.layouts.footer')
                <!--end::Footer-->
            </div>
            <!--end::Wrapper-->
            <!--begin::Aside Secondary-->
            @include('backend.layouts.sidebar')
            <!--end::Aside Secondary-->
        </div>
        <!--end::Page-->
    </div>

    <!-- END WRAPPER --------------------------------------------------------------------------------->
    <!------------------------------------------------------------------------------------------------>

    @include('backend.layouts.script')
    @yield('page-script')
</body>

</html>
