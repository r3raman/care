<script>
    var HOST_URL = "https://preview.Imfutech.com/metronic/theme/html/tools/preview";
</script>
<!--begin::Global Config(global config for global JS scripts)-->
<script>
    var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1200 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#663259", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#F3F6F9", "dark": "#212121" }, "light": { "white": "#ffffff", "primary": "#F4E1F0", "secondary": "#ECF0F3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#212121", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#ECF0F3", "gray-300": "#E5EAEE", "gray-400": "#D6D6E0", "gray-500": "#B5B5C3", "gray-600": "#80808F", "gray-700": "#464E5F", "gray-800": "#1B283F", "gray-900": "#212121" } }, "font-family": "Poppins" };
</script>
<!--end::Global Config-->
<!--begin::Global Theme Bundle(used by all pages)-->
<script src="{{asset('backend/assets/plugins/global/plugins.bundle.js')}}"></script>
<script src="{{asset('backend/assets/plugins/custom/prismjs/prismjs.bundle.js')}}"></script>
<script src="{{asset('backend/assets/js/scripts.bundle.js')}}"></script>
<script src="{{asset('backend/assets/js/function.js')}}"></script>
<script src="{{asset('backend/assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
<!--end::Page Vendors-->
<!--begin::Page Scripts(used by this page)-->
<script src="{{asset('backend/assets/js/pages/crud/datatables/data-sources/html.js')}}"></script>
<script src="{{asset('backend/assets/js/pages/custom/education/school/library.js')}}"></script>
<script src="{{asset('backend/assets/js/pages/custom/wizard/wizard-3.js')}}"></script>
<!--end::Global Theme Bundle-->

<script src="{{asset('backend/assets/js/dhtmlxscheduler.js')}}"></script>
<script src="{{asset('backend/assets/codebase/ext/dhtmlxscheduler_minical.js?v=5.3.11')}}"></script>
<script src="{{asset('backend/assets/codebase/ext/dhtmlxscheduler_editors.js?v=5.3.11')}}"></script>
<!--end::Page Vendors-->
<!--begin::Page Scripts(used by this page)-->

@stack('scripts')
