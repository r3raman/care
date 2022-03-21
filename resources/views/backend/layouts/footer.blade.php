<div class="footer py-2 py-lg-0 my-5 d-flex flex-lg-column" id="kt_footer">
    <!--begin::Container-->
    <div class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
        <!--begin::Copyright-->
        <div class="text-dark order-2 order-md-1">
            <span class="text-muted font-weight-bold mr-2">2021©</span>
            <a href="http://Imfutech.com/metronic" target="_blank" class="text-dark-75 text-hover-primary">Imfutech</a>
        </div>
        <!--end::Copyright-->
        <!--begin::Nav-->
        <div class="nav nav-dark order-1 order-md-2">
            <a href="http://Imfutech.com/metronic" target="_blank" class="nav-link pr-3 pl-0">About</a>
            <a href="http://Imfutech.com/metronic" target="_blank" class="nav-link px-3">Team</a>
            <a href="http://Imfutech.com/metronic" target="_blank" class="nav-link pl-3">Contact</a>

            <form action="{{ route('logout') }}" method="post">
                @csrf
                <button type="submit" class="btn nav-link pr-3 pl-0 text-danger">Logout</button>
            </form>
        </div>
        <!--end::Nav-->
    </div>
    <!--end::Container-->
</div>