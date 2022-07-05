@extends('backend.layouts.master')

@push('stylesheet')

@endpush

@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
            <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                <!--begin::Subheader-->
                <div class="subheader py-2 py-lg-6 subheader-transparent" id="kt_subheader">
                    <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                        <!--begin::Info-->
                        <div class="d-flex align-items-center flex-wrap mr-1">
                            <!--begin::Page Heading-->
                            <div class="d-flex align-items-baseline flex-wrap mr-5">
                                <!--begin::Page Title-->
                                <h5 class="text-dark font-weight-bold my-1 mr-5">Clients List</h5>
                                <!--end::Page Title-->
                                <!--begin::Breadcrumb-->
                                <!-- <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                                    <li class="breadcrumb-item text-muted">
                                        <a href="" class="text-muted">Home</a>
                                    </li>
                                    <li class="breadcrumb-item text-muted">
                                        <a href="" class="text-muted">Datatables.net</a>
                                    </li>
                                    <li class="breadcrumb-item text-muted">
                                        <a href="" class="text-muted">Search Options</a>
                                    </li>
                                    <li class="breadcrumb-item text-muted">
                                        <a href="" class="text-muted">Advanced Search</a>
                                    </li>
                                </ul> -->
                                <!--end::Breadcrumb-->
                            </div>
                            <!--end::Page Heading-->
                        </div>
                        <!--end::Info-->
                    </div>
                </div>
                <!--end::Subheader-->
                <!--begin::Entry-->
                <div class="d-flex flex-column-fluid">
                    <!--begin::Container-->
                    <div class="container-fluid">
                        <!--begin::Notice-->
                        
                        <!--end::Notice-->
                        <!--begin::Card-->
                        <div class="card card-custom">
                            <div class="card-body">
                                <!--begin: Search Form-->
                                <form class="mb-15">
                                    <div class="row mb-6">
                                        <div class="col-lg-3 mb-lg-0 mb-6">
                                            <label>Firstname:</label>
                                            <input type="text" class="form-control datatable-input" placeholder="E.g: 4590" id="kt_val1" data-col-index="0" />
                                        </div>
                                        <div class="col-lg-3 mb-lg-0 mb-6">
                                            <label>Lastname:</label>
                                            <input type="text" class="form-control datatable-input" placeholder="E.g: 37000-300" data-col-index="1" />
                                        </div>
                                        <div class="col-lg-3 mb-lg-0 mb-6">
                                            <label>Insurance:</label>
                                            <select class="form-control datatable-input" data-col-index="2" id="kt_datatable_search_type">
                                                <option value="">Select</option>
                                                <option value="1">Online</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-3 mb-lg-0 mb-6">
                                            <label>Provider:</label>
                                            <input type="text" class="form-control datatable-input" placeholder="Agent ID or name" data-col-index="4" />
                                        </div>
                                    </div>
                                    <!-- <div class="row mb-8">
                                        <div class="col-lg-3 mb-lg-0 mb-6">
                                            <label>Ship Date:</label>
                                            <div class="input-daterange input-group" id="kt_datepicker">
                                                <input type="text" class="form-control datatable-input" name="start" placeholder="From" data-col-index="5" />
                                                <div class="input-group-append">
                                                            <span class="input-group-text">
                                                                <i class="la la-ellipsis-h"></i>
                                                            </span>
                                                </div>
                                                <input type="text" class="form-control datatable-input" name="end" placeholder="To" data-col-index="5" />
                                            </div>
                                        </div>
                                        <div class="col-lg-3 mb-lg-0 mb-6">
                                            <label>Status:</label>
                                            <select class="form-control datatable-input" data-col-index="6">
                                                <option value="">Select</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-3 mb-lg-0 mb-6">
                                            <label>Type:</label>
                                            <select class="form-control datatable-input" data-col-index="7">
                                                <option value="">Select</option>
                                            </select>
                                        </div>
                                    </div> -->
                                    <div class="row mt-8">
                                        <div class="col-lg-12">
                                            <input type="button" class="btn btn-primary btn-primary--icon" id="kt_search" value="Search"/>
                                            <button class="btn btn-secondary btn-secondary--icon" id="kt_reset">
                                                    <span>
                                                        <i class="la la-close"></i>
                                                        <span>Reset</span>
                                                    </span>
                                            </button></div>
                                    </div>
                                </form>
                                <div class="card-toolbar" style="float:right">
                                    <!--begin::Button-->
                                    <a href="{{route('add_client')}}" class="btn btn-primary font-weight-bolder">
                                            <span class="svg-icon svg-icon-md">
                                                <!--begin::Svg Icon | path:/metronic/theme/html/demo10/dist/assets/media/svg/icons/Design/Flatten.svg-->
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24" />
                                                        <circle fill="#000000" cx="9" cy="15" r="6" />
                                                        <path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3" />
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>New Client</a>
                                    <!--end::Button-->
                                </div>
                                <!--begin: Datatable-->
                                <!--begin: Datatable-->
                                @csrf
                                <div class="datatable datatable-bordered datatable-head-custom" id="kt_datatable"></div>
                                <!--end: Datatable-->
                            </div>
                        </div>
                        <div id="kt_datatable_modal" class="modal fade" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-xl modal-dialog-centered">
                                <div class="modal-content" style="min-height: 590px;">
                                    <div class="modal-header py-5">
                                        <h5 class="modal-title">Authorization Details 
                                        <!-- <span class="d-block text-muted font-size-sm">sub datatable for the selected row is loaded from remote data source</span> -->
                                        </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <i aria-hidden="true" class="ki ki-close"></i>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <!--begin: Search Form-->
                                        <!--begin::Search Form-->
                                        <div class="mb-5">
                                            <div class="row align-items-center">
                                                
                                            </div>
                                        </div>
                                        <!--end::Search Form-->
                                        <!--end: Search Form-->
                                        <!--begin: Datatable-->
                                        <div class="datatable datatable-bordered datatable-head-custom" id="kt_datatable_sub"></div>
                                        <!--end: Datatable-->
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-light-primary font-weight-bold text-uppercase" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary font-weight-bold text-uppercase">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end::Card-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Entry-->
            </div>
        </div>
    </div>
@endsection

@push('scripts')

@endpush
