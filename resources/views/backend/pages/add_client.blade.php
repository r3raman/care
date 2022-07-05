@extends('backend.layouts.master')

@push('stylesheet')
    
@endpush

@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="d-flex flex-column-fluid">
        <div class="container-fluid" id="patient_new">
            <div class="card card-custom">
                <div class="card-body p-0">
                    <!--begin: Wizard-->
                    <div class="wizard wizard-3" id="kt_wizard_v3" data-wizard-state="first" data-wizard-clickable="true">
                        <!--begin: Wizard Nav-->
                        <div class="wizard-nav">
                            <div class="wizard-steps px-8 py-8 px-lg-15 py-lg-3">
                                <!--begin::Wizard Step 1 Nav-->
                                <div class="wizard-step" data-wizard-type="step" data-wizard-state="current">
                                    <div class="wizard-label">
                                        <h3 class="wizard-title">
                                        <span>1.</span>Basic Info</h3>
                                        <div class="wizard-bar"></div>
                                    </div>
                                </div>
                                <!--end::Wizard Step 1 Nav-->
                                <!--begin::Wizard Step 2 Nav-->
                                <div class="wizard-step" data-wizard-type="step" data-wizard-state="pending">
                                    <div class="wizard-label">
                                        <h3 class="wizard-title">
                                        <span>2.</span>Other & Guarantor Info</h3>
                                        <div class="wizard-bar"></div>
                                    </div>
                                </div>
                                <!--end::Wizard Step 2 Nav-->
                                <!--begin::Wizard Step 3 Nav-->
                                <div class="wizard-step" data-wizard-type="step" data-wizard-state="pending">
                                    <div class="wizard-label">
                                        <h3 class="wizard-title">
                                        <span>3.</span>Insurance & Auth Info</h3>
                                        <div class="wizard-bar"></div>
                                    </div>
                                </div>
                                <!--end::Wizard Step 3 Nav-->
                                <!--begin::Wizard Step 4 Nav-->
                                <div class="wizard-step" data-wizard-type="step" data-wizard-state="pending">
                                    <div class="wizard-label">
                                        <h3 class="wizard-title">
                                        <span>4.</span>Services Info</h3>
                                        <div class="wizard-bar"></div>
                                    </div>
                                </div>
                                <!--end::Wizard Step 4 Nav-->
                            </div>
                        </div>
                        <!--end: Wizard Nav-->
                        <!--begin: Wizard Body-->
                        <div class="row justify-content-center py-10 px-8 py-lg-12 px-lg-10" style="padding-top: 0px !important;">
                            <div class="col-xl-12 col-xxl-12">
                                <!--begin: Wizard Form-->
                                <form class="form fv-plugins-bootstrap fv-plugins-framework" id="kt_form" method="post" action="{{route('store_client')}}">
                                    @csrf
                                    @method('POST')
                                    <!--begin: Wizard Step 1-->
                                    <div class="pb-5" data-wizard-type="step-content" data-wizard-state="current">
                                        <!-- <h4 class="mb-10 font-weight-bold text-dark">Setup Your Current Location</h4> -->
                                        
                                            <div class="card-body">
                                                <div class="form-group row">
                                                    <div class="col-lg-4">
                                                        <label>First Name:</label>
                                                        <input type="text" class="form-control" name="first_name" placeholder="Enter first name">
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <label>Middle Name:</label>
                                                        <input type="text" class="form-control" name="middle_name" placeholder="Enter middle name">
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <label>Last Name:</label>
                                                        <input type="text" class="form-control" name="last_name" placeholder="Enter last name">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-lg-4">
                                                        <label>Gender:</label>
                                                        <div class="radio-inline">
                                                            <label class="radio radio-solid">
                                                                <input type="radio" name="gender" checked="checked" value="male">
                                                                <span></span>
                                                                Male
                                                            </label>
                                                            <label class="radio radio-solid">
                                                                <input type="radio" name="gender" value="female">
                                                                <span></span>
                                                                Female
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <label>DOB:</label>
                                                        <input type="text" class="form-control" name="dob" placeholder="Enter Date of Birth">
                                                    </div>
                                                    
                                                    <div class="col-lg-4">
                                                        <label>Email:</label>
                                                        <div class="input-group">
                                                            <input type="email" class="form-control" name="email" placeholder="Enter email address">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-lg-4">
                                                        <label>Phone:</label>
                                                        <input type="text" class="form-control" name="phone_home" placeholder="Enter phone number">
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <label>Mobile:</label>
                                                        <input type="text" class="form-control" name="phone_mobile" placeholder="Enter mobile number">
                                                    </div>
                                                    
                                                    <div class="col-lg-4">
                                                        <label>Address:</label>
                                                        <input type="text" class="form-control" name="addr" placeholder="Enter Address">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-lg-4">
                                                        <label>Postcode:</label>
                                                        <div class="input-group">
                                                            <!-- <div class="input-group-append"><span class="input-group-text"><i class="la la-bookmark-o"></i></span></div> -->
                                                            <input type="text" class="form-control" name="addr_zip" placeholder="Enter your postcode">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <label>City:</label>
                                                        <input type="text" class="form-control" name="addr_city" placeholder="Enter City">
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <label>State:</label>
                                                        <input type="text" class="form-control" name="addr_state" placeholder="Enter State">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-3 col-form-label">Enable Client Portal</label>
                                                    <div class="col-2">
                                                        <span class="switch switch-icon">
                                                            <label>
                                                                <input type="checkbox" name="is_client_portal" value="1">
                                                                <span></span>
                                                            </label>
                                                        </span>
                                                    </div>
                                                    <label class="col-xl-3 col-lg-3 col-form-label">Communication</label>
                                                    <div class="col-lg-4 col-xl-4">
                                                        <div class="checkbox-inline">
                                                            <label class="checkbox">
                                                            <input type="checkbox" checked="checked" name="is_email" value="1">
                                                            <span></span>Email</label>
                                                            <label class="checkbox">
                                                            <input type="checkbox" checked="checked" name="is_sms" value="1">
                                                            <span></span>SMS</label>
                                                        </label></div>
                                                    </div>
                                                </div>
                                            </div>
                                        
                                    </div><div></div><div></div><div></div><div></div>
                                    <!--end: Wizard Step 1-->
                                    <!--begin: Wizard Step 2-->
                                    <div class="pb-5" data-wizard-type="step-content">
                                        <h4 class="mb-10 font-weight-bold text-dark">Provider & Billing Location Info</h4>
                                            <div class="card-body">
                                                <div class="form-group row">
                                                    <div class="col-lg-3">
                                                        <label>Rendering Provider (Box # 31):</label>
                                                        <select class="form-control" name="provider_id">
                                                            <option value="">-- Select Provider --</option>
                                                            <option value="1">Provider A</option>
                                                            <option value="2">Provider B</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <label>Location (Box # 32):</label>
                                                        <select class="form-control" name="default_location">
                                                            <option value="">-- Select Location --</option>
                                                            <option value="1">Location A</option>
                                                            <option value="2">Location B</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        
                                        <h4 class="mb-10 font-weight-bold text-dark">Guarantor Info</h4>
                                        <div class="form-group row">
                                            <div class="col-lg-4">
                                                <label>Relationship:</label>
                                                <select class="form-control" id="relationship" name="relationship">
                                                    <option value="">-- Select Relationship --</option>
                                                    <option value="Self">Self</option>
                                                    <option value="Child">Child</option>
                                                    <option value="Spouse">Spouse</option>
                                                    <option value="Others">Others</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div id="guarantorDiv">
                                        <h4 class="font-weight-bold text-dark">Enter the Guarantor Info</h4>
                                        <div class="card-body">
                                            <div class="form-group row">
                                                <div class="col-lg-3">
                                                    <label>First Name:</label>
                                                    <input type="text" class="form-control" name="guarantor_first_name" placeholder="Enter first name">
                                                </div>
                                                <div class="col-lg-3">
                                                    <label>Middle Name:</label>
                                                    <input type="text" class="form-control" name="guarantor_middle_name" placeholder="Enter middle name">
                                                </div>
                                                <div class="col-lg-3">
                                                    <label>Last Name:</label>
                                                    <input type="text" class="form-control" name="guarantor_last_name" placeholder="Enter last name">
                                                </div>
                                                <div class="col-lg-3">
                                                    <label>Gender:</label>
                                                    <div class="radio-inline">
                                                        <label class="radio radio-solid">
                                                            <input type="radio" name="guarantor_gender" checked="checked" value="male">
                                                            <span></span>
                                                            Male
                                                        </label>
                                                        <label class="radio radio-solid">
                                                            <input type="radio" name="guarantor_gender" value="female">
                                                            <span></span>
                                                            Female
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-3">
                                                    <label>DOB:</label>
                                                    <input type="text" class="form-control" name="guarantor_dob" placeholder="Enter Date of Birth">
                                                </div>
                                                <div class="col-lg-3">
                                                    <label>Email:</label>
                                                    <div class="input-group">
                                                        <input type="email" class="form-control" name="guarantor_email" placeholder="Enter email address">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <label>Phone:</label>
                                                    <input type="text" class="form-control" name="guarantor_phone_home" placeholder="Enter phone number">
                                                </div>
                                                <div class="col-lg-3">
                                                    <label>Mobile:</label>
                                                    <input type="text" class="form-control" name="guarantor_phone_mobile" placeholder="Enter mobile number">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-3">
                                                    <label>Address:</label>
                                                    <input type="text" class="form-control" name="guarantor_addr" placeholder="Enter Address">
                                                </div>
                                                <div class="col-lg-3">
                                                    <label>Postcode:</label>
                                                    <div class="input-group">
                                                        <!-- <div class="input-group-append"><span class="input-group-text"><i class="la la-bookmark-o"></i></span></div> -->
                                                        <input type="text" class="form-control" name="guarantor_addr_zip" placeholder="Enter your postcode">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <label>City:</label>
                                                    <input type="text" class="form-control" name="guarantor_addr_city" placeholder="Enter City">
                                                </div>
                                                <div class="col-lg-3">
                                                    <label>State:</label>
                                                    <input type="text" class="form-control" name="guarantor_addr_state" placeholder="Enter State">
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <!--end: Wizard Step 2-->
                                    <!--begin: Wizard Step 3-->
                                    <div class="pb-5" data-wizard-type="step-content">
                                        <div class="accordion accordion-solid accordion-svg-toggle" id="accordionExample7">
                                            <div class="card">
                                                <div class="card-header" id="headingOne7">
                                                    <div class="card-title" data-toggle="collapse" data-target="#collapseOne7">
                                                        <span class="svg-icon svg-icon-primary">
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                                                    <path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" fill="#000000" fill-rule="nonzero"></path>
                                                                    <path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999) "></path>
                                                                </g>
                                                            </svg>
                                                        </span>
                                                        <div class="card-label pl-4">Primary Insurance</div>
                                                    </div>
                                                </div>
                                                <div id="collapseOne7" class="collapse show" data-parent="#accordionExample7">
                                                    <div class="card-body pl-12">
                                                        <h4 class="mb-10 font-weight-bold text-dark">Primary Insurance Information</h4>
                                                        <div class="form-group row">
                                                            <div class="col-lg-3">
                                                                <label>Insurance Name</label>
                                                                <select class="form-control" name="p_payer_id">
                                                                    <option value="">-- Select Insurance --</option>
                                                                    <option value="1">Aetna</option>
                                                                    <option value="2">Emblem Health</option>
                                                                    <option value="3">United Health Care</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <label>Policy ID</label>
                                                                <input type="text" class="form-control" name="p_policy_number" placeholder="Enter Policy #">
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <label>Eff. Start Dt</label>
                                                                <input type="text" class="form-control" name="p_policy_start" placeholder="Policy Start Date">
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <label>Eff. End Dt</label>
                                                                <input type="text" class="form-control" name="p_policy_end" placeholder="Policy End Date">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-lg-3">
                                                                <label>Group ID</label>
                                                                <input type="text" class="form-control" name="p_group_id" placeholder="Enter Group No.">
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <label>Group Name</label>
                                                                <input type="text" class="form-control" name="p_group_name" placeholder="Enter Group Name">
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <label>Copay</label>
                                                                <input type="text" class="form-control" name="p_copay" placeholder="Enter Copay">
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <label>Deductible</label>
                                                                <input type="text" class="form-control" name="p_deductible" placeholder="Enter Deductible">
                                                            </div>
                                                        </div>
                                                        <h4 class="mb-10 font-weight-bold text-dark">Auth Information</h4>
                                                        <div class="form-group row">
                                                            <div class="col-lg-3">
                                                                <label>Auth #</label>
                                                                <input type="text" class="form-control" name="p_authorization" placeholder="Enter Authorization number">
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <label>Serivce</label>
                                                                <select class="form-control" name="p_speciality">
                                                                    <option value="">-- Select Service Type --</option>
                                                                    <option value="1">Behavior Therapy</option>
                                                                    <option value="2">Speech Therapy</option>
                                                                    <option value="3">Occupational Therapy</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <label>Status</label>
                                                                <select class="form-control" name="p_auth_status">
                                                                    <option value="">-- Select Auth Status --</option>
                                                                    <option value="Approved">Approved</option>
                                                                    <option value="Pending">Pending</option>
                                                                    <option value="Closed">Closed</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <label></label>
                                                                <div class="checkbox-inline" style="margin-top: 0.6em !important;">
                                                                    <label class="checkbox">
                                                                    <input type="checkbox" name="p_no_auth" value="1">
                                                                    <span></span>No Auth</label>
                                                                    <label class="checkbox">
                                                                </label></div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-lg-3">
                                                                <label>Diag1</label>
                                                                <input type="text" class="form-control" name="p_diag1" placeholder="Enter Diag Code">
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <label>Diag2</label>
                                                                <input type="text" class="form-control" name="p_diag2" placeholder="Enter Diag Code">
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <label>Diag3</label>
                                                                <input type="text" class="form-control" name="p_diag3" placeholder="Enter Diag Code">
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <label>Diag4</label>
                                                                <input type="text" class="form-control" name="p_diag4" placeholder="Enter Diag Code">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-lg-3">
                                                                <label>Eff. Start Dt</label>
                                                                <input type="text" class="form-control" name="p_effective_start" placeholder="Auth Start Date">
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <label>Eff. End Dt</label>
                                                                <input type="text" class="form-control" name="p_effective_end" placeholder="Auth End Date">
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <label>Rendering Provider</label>
                                                                <select class="form-control" name="p_auth_provider_id">
                                                                    <option value="">-- Select Provider --</option>
                                                                    <option value="1">Provider A</option>
                                                                    <option value="2">Provider B</option>
                                                                    <option value="3">Provider C</option>
                                                                </select>
                                                            </div>
                                                        </div>                
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="headingTwo7">
                                                    <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseTwo7">
                                                        <span class="svg-icon svg-icon-primary">
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                                                    <path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" fill="#000000" fill-rule="nonzero"></path>
                                                                    <path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999) "></path>
                                                                </g>
                                                            </svg>
                                                        </span>
                                                        <div class="card-label pl-4">Secondary Insurance</div>
                                                    </div>
                                                </div>
                                                <div id="collapseTwo7" class="collapse" data-parent="#accordionExample7">
                                                    <div class="card-body pl-12">
                                                        <h4 class="mb-10 font-weight-bold text-dark">Secondary Insurance Information</h4>
                                                        <div class="form-group row">
                                                            <div class="col-lg-3">
                                                                <label>Insurance Name</label>
                                                                <select class="form-control" name="s_payer_id">
                                                                    <option value="">-- Select Insurance --</option>
                                                                    <option value="1">Aetna</option>
                                                                    <option value="2">Emblem Health</option>
                                                                    <option value="3">United Health Care</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <label>Policy ID</label>
                                                                <input type="text" class="form-control" name="s_policy_number" placeholder="Enter Policy #">
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <label>Eff. Start Dt</label>
                                                                <input type="text" class="form-control" name="s_policy_start" placeholder="Policy Start Date">
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <label>Eff. End Dt</label>
                                                                <input type="text" class="form-control" name="s_policy_end" placeholder="Policy End Date">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-lg-3">
                                                                <label>Group ID</label>
                                                                <input type="text" class="form-control" name="s_group_id" placeholder="Enter Group No.">
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <label>Group Name</label>
                                                                <input type="text" class="form-control" name="s_group_name" placeholder="Enter Group Name">
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <label>Copay</label>
                                                                <input type="text" class="form-control" name="s_copay" placeholder="Enter Copay">
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <label>Deductible</label>
                                                                <input type="text" class="form-control" name="s_deductible" placeholder="Enter Deductible">
                                                            </div>
                                                        </div>
                                                        <h4 class="mb-10 font-weight-bold text-dark">Auth Information</h4>
                                                        <div class="form-group row">
                                                            <div class="col-lg-3">
                                                                <label>Auth #</label>
                                                                <input type="text" class="form-control" name="s_authorization" placeholder="Enter Authorization number">
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <label>Serivce</label>
                                                                <select class="form-control" name="s_speciality">
                                                                    <option value="">-- Select Service Type --</option>
                                                                    <option value="1">Behavior Therapy</option>
                                                                    <option value="2">Speech Therapy</option>
                                                                    <option value="3">Occupational Therapy</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <label>Status</label>
                                                                <select class="form-control" name="s_auth_status">
                                                                    <option value="">-- Select Auth Status --</option>
                                                                    <option value="Approved">Approved</option>
                                                                    <option value="Pending">Pending</option>
                                                                    <option value="Closed">Closed</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <label></label>
                                                                <div class="checkbox-inline" style="margin-top: 0.6em !important;">
                                                                    <label class="checkbox">
                                                                    <input type="checkbox" name="s_no_auth" value="1">
                                                                    <span></span>No Auth</label>
                                                                    <label class="checkbox">
                                                                </label></div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-lg-3">
                                                                <label>Diag1</label>
                                                                <input type="text" class="form-control" name="s_diag1" placeholder="Enter Diag Code">
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <label>Diag2</label>
                                                                <input type="text" class="form-control" name="s_diag2" placeholder="Enter Diag Code">
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <label>Diag3</label>
                                                                <input type="text" class="form-control" name="s_diag3" placeholder="Enter Diag Code">
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <label>Diag4</label>
                                                                <input type="text" class="form-control" name="s_diag4" placeholder="Enter Diag Code">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-lg-3">
                                                                <label>Eff. Start Dt</label>
                                                                <input type="text" class="form-control" name="s_effective_start" placeholder="Auth Start Date">
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <label>Eff. End Dt</label>
                                                                <input type="text" class="form-control" name="s_effective_end" placeholder="Auth End Date">
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <label>Rendering Provider</label>
                                                                <select class="form-control" name="s_auth_provider_id">
                                                                    <option value="">-- Select Provider --</option>
                                                                    <option value="1">Provider A</option>
                                                                    <option value="2">Provider B</option>
                                                                    <option value="3">Provider C</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="headingThree7">
                                                    <div class="card-title collapsed" data-toggle="collapse" data-target="#collapseThree7">
                                                        <span class="svg-icon svg-icon-primary">
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                                                    <path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" fill="#000000" fill-rule="nonzero"></path>
                                                                    <path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999) "></path>
                                                                </g>
                                                            </svg>
                                                        </span>
                                                        <div class="card-label pl-4">Teritary Insurance</div>
                                                    </div>
                                                </div>
                                                <div id="collapseThree7" class="collapse" data-parent="#accordionExample7">
                                                    <div class="card-body pl-12">
                                                        <h4 class="mb-10 font-weight-bold text-dark">Teritary Insurance Information</h4>
                                                        <div class="form-group row">
                                                            <div class="col-lg-3">
                                                                <label>Insurance Name</label>
                                                                <select class="form-control" name="t_payer_id">
                                                                    <option value="">-- Select Insurance --</option>
                                                                    <option value="1">Aetna</option>
                                                                    <option value="2">Emblem Health</option>
                                                                    <option value="3">United Health Care</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <label>Policy ID</label>
                                                                <input type="text" class="form-control" name="t_policy_number" placeholder="Enter Policy #">
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <label>Eff. Start Dt</label>
                                                                <input type="text" class="form-control" name="t_policy_start" placeholder="Policy Start Date">
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <label>Eff. End Dt</label>
                                                                <input type="text" class="form-control" name="t_policy_end" placeholder="Policy End Date">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-lg-3">
                                                                <label>Group ID</label>
                                                                <input type="text" class="form-control" name="t_group_id" placeholder="Enter Group No.">
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <label>Group Name</label>
                                                                <input type="text" class="form-control" name="t_group_name" placeholder="Enter Group Name">
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <label>Copay</label>
                                                                <input type="text" class="form-control" name="t_copay" placeholder="Enter Copay">
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <label>Deductible</label>
                                                                <input type="text" class="form-control" name="t_deductible" placeholder="Enter Deductible">
                                                            </div>
                                                        </div>
                                                        <h4 class="mb-10 font-weight-bold text-dark">Auth Information</h4>
                                                        <div class="form-group row">
                                                            <div class="col-lg-3">
                                                                <label>Auth #</label>
                                                                <input type="text" class="form-control" name="t_authorization" placeholder="Enter Authorization number">
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <label>Serivce</label>
                                                                <select class="form-control" name="t_speciality">
                                                                    <option value="">-- Select Service Type --</option>
                                                                    <option value="1">Behavior Therapy</option>
                                                                    <option value="2">Speech Therapy</option>
                                                                    <option value="3">Occupational Therapy</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <label>Status</label>
                                                                <select class="form-control" name="t_auth_status">
                                                                    <option value="">-- Select Auth Status --</option>
                                                                    <option value="Approved">Approved</option>
                                                                    <option value="Pending">Pending</option>
                                                                    <option value="Closed">Closed</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <label></label>
                                                                <div class="checkbox-inline" style="margin-top: 0.6em !important;">
                                                                    <label class="checkbox">
                                                                    <input type="checkbox" name="t_no_auth" value="1">
                                                                    <span></span>No Auth</label>
                                                                    <label class="checkbox">
                                                                </label></div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-lg-3">
                                                                <label>Diag1</label>
                                                                <input type="text" class="form-control" name="t_diag1" placeholder="Enter Diag Code">
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <label>Diag2</label>
                                                                <input type="text" class="form-control" name="t_diag2" placeholder="Enter Diag Code">
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <label>Diag3</label>
                                                                <input type="text" class="form-control" name="t_diag3" placeholder="Enter Diag Code">
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <label>Diag4</label>
                                                                <input type="text" class="form-control" name="t_diag4" placeholder="Enter Diag Code">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-lg-3">
                                                                <label>Eff. Start Dt</label>
                                                                <input type="text" class="form-control" name="t_effective_start" placeholder="Auth Start Date">
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <label>Eff. End Dt</label>
                                                                <input type="text" class="form-control" name="t_effective_end" placeholder="Auth End Date">
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <label>Rendering Provider</label>
                                                                <select class="form-control" name="t_auth_provider_id">
                                                                    <option value="">-- Select Provider --</option>
                                                                    <option value="1">Provider A</option>
                                                                    <option value="2">Provider B</option>
                                                                    <option value="3">Provider C</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end: Wizard Step 3-->
                                    <!--begin: Wizard Step 4-->
                                    <div class="pb-5" data-wizard-type="step-content">
                                        <div id="kt_repeater_1">
                                            <div class="form-group row" id="kt_repeater_1">
                                                <div data-repeater-list="services_list" class="col-lg-12">
                                                    <div data-repeater-item class="form-group row align-items-center">
                                                        <div class="col-md-3">
                                                            <label>Service Name</label>
                                                            <select class="form-control" id="service_name" name="service_name">
                                                                <option value="">-- Select Service --</option>
                                                                <option value="Self">Assessment</option>
                                                                <option value="Child">Direct Behavior</option>
                                                                <option value="Spouse">Supervision</option>
                                                            </select>
                                                            <div class="d-md-none mb-2"></div>
                                                        </div>
                                                        <div class="col-md-1">
                                                            <label>Mod1</label>
                                                            <input type="text" class="form-control" name="mod1" />
                                                            <div class="d-md-none mb-2"></div>
                                                        </div>
                                                        <div class="col-md-1">
                                                            <label>Mod2</label>
                                                            <input type="text" class="form-control" name="mod2" />
                                                            <div class="d-md-none mb-2"></div>
                                                        </div>
                                                        <div class="col-md-1">
                                                            <label>Mod3</label>
                                                            <input type="text" class="form-control" name="mod3" />
                                                            <div class="d-md-none mb-2"></div>
                                                        </div>
                                                        <div class="col-md-1">
                                                            <label>Mod4</label>
                                                            <input type="text" class="form-control" name="mod4" />
                                                            <div class="d-md-none mb-2"></div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <label>Increment</label>
                                                            <select class="form-control" id="service_increment" name="service_increment">
                                                                <option value="">-- Select Increment--</option>
                                                                <option value="15 mins">15 mins</option>
                                                                <option value="30 mins">30 mins</option>
                                                                <option value="1 Hour">1 Hour</option>
                                                                <option value="Entire as One">Entire as One</option>
                                                            </select>
                                                            <div class="d-md-none mb-2"></div>
                                                        </div>
                                                        <div class="col-md-1">
                                                            <label>Units</label>
                                                            <input type="text" class="form-control" name="units" />
                                                            <div class="d-md-none mb-2"></div>
                                                        </div>
                                                        <div class="col-md-1">
                                                            <label>Rate</label>
                                                            <input type="text" class="form-control" name="rate" />
                                                            <div class="d-md-none mb-2"></div>
                                                        </div>
                                                        <div class="col-md-1">
                                                            <a href="javascript:;" data-repeater-delete="" class="btn btn-sm font-weight-bolder btn-light-danger">
                                                                <i class="la la-trash-o"></i>Delete
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-2 col-form-label text-right"></label>
                                                <div class="col-lg-4">
                                                    <a href="javascript:;" data-repeater-create="" class="btn btn-sm font-weight-bolder btn-light-primary">
                                                        <i class="la la-plus"></i>Add
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end: Wizard Step 4-->
                                    <!--begin: Wizard Actions-->
                                    <div class="d-flex justify-content-between border-top mt-5 pt-10">
                                        <div class="mr-2">
                                            <button type="button" class="btn btn-light-primary font-weight-bolder text-uppercase px-9 py-4" data-wizard-type="action-prev">Previous</button>
                                        </div>
                                        <div>
                                            <button type="button" class="btn btn-success font-weight-bolder text-uppercase px-9 py-4" data-wizard-type="action-submit">Submit</button>
                                            <button type="button" class="btn btn-primary font-weight-bolder text-uppercase px-9 py-4" data-wizard-type="action-next">Next</button>
                                        </div>
                                    </div>
                                    <!--end: Wizard Actions-->
                                </form>
                                <!--end: Wizard Form-->
                            </div>
                        </div>
                        <!--end: Wizard Body-->
                    </div>
                    <!--end: Wizard-->
                </div>
            </div>
        </div>
    </div>
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">

        <!--begin::Container-->
        <div class="container-fluid" id="patient_edit" style="display: none;">
            <div class="example mb-10">
                <div class="example-preview">
                    <ul class="nav nav-pills nav-fill">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab-4" data-toggle="tab" href="#home-4">
                                <span class="nav-icon">
                                    <i class="flaticon2-chat-1"></i>
                                </span>
                                <span class="nav-text">Basic Info</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="provider-tab-4" data-toggle="tab" href="#provider-4">
                                <span class="nav-icon">
                                    <i class="flaticon2-chat-1"></i>
                                </span>
                                <span class="nav-text">Billing Location &amp; Provider</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab-4" data-toggle="tab" href="#profile-4" aria-controls="profile">
                                <span class="nav-icon">
                                    <i class="flaticon2-layers-1"></i>
                                </span>
                                <span class="nav-text">Insurance &amp; Auth</span>
                            </a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" id="contact-tab-4" data-toggle="tab" href="#contact-4" aria-controls="contact">
                                <span class="nav-icon">
                                    <i class="flaticon2-rocket-1"></i>
                                </span>
                                <span class="nav-text">Billing</span>
                            </a>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link" id="document-tab-4" data-toggle="tab" href="#document-4" aria-controls="document">
                                <span class="nav-icon">
                                    <i class="flaticon2-rocket-1"></i>
                                </span>
                                <span class="nav-text">Documents</span>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content mt-5" id="myTabContent4">
                        <div class="tab-pane fade show active" id="home-4" role="tabpanel" aria-labelledby="home-tab-4">
                                <div class="card-body">
                                    <div class="form-group row">
                                        <div class="col-lg-4">
                                            <label>First Name:</label>
                                            <input type="text" class="form-control" placeholder="Enter first name" value="Jasmine">
                                        </div>
                                        <div class="col-lg-4">
                                            <label>Middle Name:</label>
                                            <input type="text" class="form-control" placeholder="Enter middle name">
                                        </div>
                                        <div class="col-lg-4">
                                            <label>Last Name:</label>
                                            <input type="text" class="form-control" placeholder="Enter last name" value="Flores">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-4">
                                            <label>Gender:</label>
                                            <div class="radio-inline">
                                                <label class="radio radio-solid">
                                                    <input type="radio" name="example_2" value="2">
                                                    <span></span>
                                                    Male
                                                </label>
                                                <label class="radio radio-solid">
                                                    <input type="radio" name="example_2" checked="checked" value="2">
                                                    <span></span>
                                                    Female
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <label>DOB:</label>
                                            <input type="text" class="form-control" placeholder="Enter Date of Birth" value="07-11-2001">
                                        </div>
                                        
                                        <div class="col-lg-4">
                                            <label>Email:</label>
                                            <div class="input-group">
                                                <input type="email" class="form-control" placeholder="Enter email address" value="jasmine@jivesol.com">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-4">
                                            <label>Phone:</label>
                                            <input type="text" class="form-control" placeholder="Enter phone number" value="9874563210">
                                        </div>
                                        <div class="col-lg-4">
                                            <label>Mobile:</label>
                                            <input type="text" class="form-control" placeholder="Enter mobile number" value="8344435038">
                                        </div>
                                        
                                        <div class="col-lg-4">
                                            <label>Address:</label>
                                            <input type="text" class="form-control" placeholder="Enter Address" value="1024 Rosebay St">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-4">
                                            <label>Postcode:</label>
                                            <div class="input-group">
                                                <!-- <div class="input-group-append"><span class="input-group-text"><i class="la la-bookmark-o"></i></span></div> -->
                                                <input type="text" class="form-control" placeholder="Enter your postcode" value="07351">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <label>City:</label>
                                            <input type="text" class="form-control" placeholder="Enter City" value="Jersey City">
                                        </div>
                                        <div class="col-lg-4">
                                            <label>State:</label>
                                            <input type="text" class="form-control" placeholder="Enter State" value="NJ">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-3 col-form-label">Enable Client Portal</label>
                                        <div class="col-2">
                                            <span class="switch switch-icon">
                                                <label>
                                                    <input type="checkbox" name="">
                                                    <span></span>
                                                </label>
                                            </span>
                                        </div>
                                        <label class="col-xl-3 col-lg-3 col-form-label">Communication</label>
                                        <div class="col-lg-4 col-xl-4">
                                            <div class="checkbox-inline" style="margin-top: 0.6em !important;">
                                                <label class="checkbox">
                                                <input type="checkbox" checked="checked">
                                                <span></span>Email</label>
                                                <label class="checkbox">
                                                <input type="checkbox" checked="checked">
                                                <span></span>SMS</label>
                                                <label class="checkbox">
                                            </label></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="row">
                                        <div class="col-lg-4"></div>
                                        <div class="col-lg-8">
                                            <button type="reset" class="btn btn-primary mr-2">Update</button>
                                            <button type="reset" class="btn btn-secondary">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class="tab-pane fade" id="provider-4" role="tabpanel" aria-labelledby="provider-tab-4">
                            <div class="row">
                                <div class="col-lg-12 col-xl-6">
                                    <h5 class="font-weight-bold mt-10 mb-6">Service Location Info</h5>
                                </div>
                            </div>
                                <div class="card-body">
                                    <div class="form-group row">
                                        <div class="col-lg-6">
                                            <label>Location (Box # 32):</label>
                                            <select class="form-control">
                                                <option value="">-- Select Location --</option>
                                                <option value="">Location A</option>
                                                <option value="">Location B</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-6" style="margin-top:2em">
                                            <label></label>
                                            <button type="reset" class="btn btn-primary mr-2">Update</button>
                                        </div>
                                    </div>
                                </div>
                            <div class="row">
                                <div class="col-lg-12 col-xl-6">
                                    <h5 class="font-weight-bold mt-10 mb-6">Provider Info</h5>
                                </div>
                            </div>
                                <div class="card-body">
                                    <div class="form-group row">
                                        <div class="col-lg-4">
                                            <label>Billing Provider (Box # 31):</label>
                                            <select class="form-control">
                                                <option value="">-- Select Provider --</option>
                                                <option value="">Provider A</option>
                                                <option value="">Provider B</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-4">
                                            <label>Referring Provider (Box # 17):</label>
                                            <select class="form-control">
                                                <option value="">-- Select Provider --</option>
                                                <option value="">Provider A</option>
                                                <option value="">Provider B</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-4">
                                            <label>Referring NPI (Box # 17b):</label>
                                            <input type="text" class="form-control" placeholder="Enter Referring NPI">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="row">
                                        <div class="col-lg-4"></div>
                                        <div class="col-lg-8">
                                            <button type="reset" class="btn btn-primary mr-2">Update</button>
                                            <button type="reset" class="btn btn-secondary">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class="tab-pane fade" id="profile-4" role="tabpanel" aria-labelledby="profile-tab-4">
                            <div class="card card-custom">
                                <div class="card-header">
                                    <div class="card-title">
                                        <span class="card-icon">
                                            <i class="flaticon2-favourite text-primary"></i>
                                        </span>
                                        <h3 class="card-label">Insurance &amp; Auth Info</h3>
                                    </div>
                                    <div class="card-toolbar">
                                        <!--begin::Button-->
                                        <a href="#" class="btn btn-primary font-weight-bolder">
                                        <i class="la la-plus"></i>New Insurance</a>
                                        <!--end::Button-->
                                    </div>
                                </div>
                                <div class="card-body">
                                    <!--begin: Datatable-->
                                    <div id="kt_datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="kt_datatable_length"><label>Show <select name="kt_datatable_length" aria-controls="kt_datatable" class="custom-select custom-select-sm form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="kt_datatable_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="kt_datatable"></label></div></div></div><div class="row"><div class="col-sm-12"><table class="table table-bordered table-hover table-checkable dataTable no-footer dtr-inline" id="kt_datatable" style="margin-top: 13px !important; width: 0px;" role="grid" aria-describedby="kt_datatable_info">
                                        <thead>
                                            <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="kt_datatable" rowspan="1" colspan="1" style="width: 0px;" aria-sort="ascending" aria-label="ID: activate to sort column descending">ID</th><th class="sorting" tabindex="0" aria-controls="kt_datatable" rowspan="1" colspan="1" style="width: 0px;" aria-label="Identifier: activate to sort column ascending">Identifier</th><th class="sorting" tabindex="0" aria-controls="kt_datatable" rowspan="1" colspan="1" style="width: 0px;" aria-label="Payer: activate to sort column ascending">Payer</th><th class="sorting" tabindex="0" aria-controls="kt_datatable" rowspan="1" colspan="1" style="width: 0px;" aria-label="Policy #: activate to sort column ascending">Policy #</th><th class="sorting" tabindex="0" aria-controls="kt_datatable" rowspan="1" colspan="1" style="width: 0px;" aria-label="Validity: activate to sort column ascending">Validity</th><th class="sorting" tabindex="0" aria-controls="kt_datatable" rowspan="1" colspan="1" style="width: 0px;" aria-label="Auth #: activate to sort column ascending">Auth #</th><th class="sorting" tabindex="0" aria-controls="kt_datatable" rowspan="1" colspan="1" style="width: 0px;" aria-label="Validity: activate to sort column ascending">Validity</th><th class="sorting" tabindex="0" aria-controls="kt_datatable" rowspan="1" colspan="1" style="width: 0px;" aria-label="Status: activate to sort column ascending">Status</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 0px;" aria-label="Actions">Actions</th></tr>
                                        </thead>
                                        <tbody>
                                            
                                            
                                        <tr class="odd">
                                                <td class="dtr-control sorting_1" tabindex="0">1</td>
                                                <td>DAVJON0001_1</td>
                                                <td>AETNA</td>
                                                <td>8566515</td>
                                                <td>07-04-2021 to 07-04-2022</td>
                                                <td>AUTH_00001_11</td>
                                                <td>07-04-2021 to 07-04-2022</td>
                                                <td>Inactive</td>
                                                <td nowrap="nowrap">							<div class="dropdown dropdown-inline">								<a href="javascript:;" class="btn btn-sm btn-clean btn-icon" data-toggle="dropdown">	                                <i class="la la-cog"></i>	                            </a>							  	<div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">									<ul class="nav nav-hoverable flex-column">							    		<li class="nav-item"><a class="nav-link" href="#"><i class="nav-icon la la-edit"></i><span class="nav-text">Edit Details</span></a></li>							    		<li class="nav-item"><a class="nav-link" href="#"><i class="nav-icon la la-leaf"></i><span class="nav-text">Update Status</span></a></li>							    		<li class="nav-item"><a class="nav-link" href="#"><i class="nav-icon la la-print"></i><span class="nav-text">Print</span></a></li>									</ul>							  	</div>							</div>							<a href="javascript:;" class="btn btn-sm btn-clean btn-icon" title="Edit details">								<i class="la la-edit"></i>							</a>							<a href="javascript:;" class="btn btn-sm btn-clean btn-icon" title="Delete">								<i class="la la-trash"></i>							</a>						</td>
                                            </tr><tr class="even">
                                                <td class="dtr-control sorting_1" tabindex="0">2</td>
                                                <td>DAVJON0001_2</td>
                                                <td>UHC</td>
                                                <td>8564541</td>
                                                <td>07-04-2022 to 07-04-2023</td>
                                                <td>AUTH_00001_11</td>
                                                <td>07-04-2022 to 07-04-2023</td>
                                                <td>Active</td>
                                                <td nowrap="nowrap">							<div class="dropdown dropdown-inline">								<a href="javascript:;" class="btn btn-sm btn-clean btn-icon" data-toggle="dropdown">	                                <i class="la la-cog"></i>	                            </a>							  	<div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">									<ul class="nav nav-hoverable flex-column">							    		<li class="nav-item"><a class="nav-link" href="#"><i class="nav-icon la la-edit"></i><span class="nav-text">Edit Details</span></a></li>							    		<li class="nav-item"><a class="nav-link" href="#"><i class="nav-icon la la-leaf"></i><span class="nav-text">Update Status</span></a></li>							    		<li class="nav-item"><a class="nav-link" href="#"><i class="nav-icon la la-print"></i><span class="nav-text">Print</span></a></li>									</ul>							  	</div>							</div>							<a href="javascript:;" class="btn btn-sm btn-clean btn-icon" title="Edit details">								<i class="la la-edit"></i>							</a>							<a href="javascript:;" class="btn btn-sm btn-clean btn-icon" title="Delete">								<i class="la la-trash"></i>							</a>						</td>
                                            </tr></tbody>
                                    </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="kt_datatable_info" role="status" aria-live="polite">Showing 1 to 2 of 2 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="kt_datatable_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="kt_datatable_previous"><a href="#" aria-controls="kt_datatable" data-dt-idx="0" tabindex="0" class="page-link"><i class="ki ki-arrow-back"></i></a></li><li class="paginate_button page-item active"><a href="#" aria-controls="kt_datatable" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item next disabled" id="kt_datatable_next"><a href="#" aria-controls="kt_datatable" data-dt-idx="2" tabindex="0" class="page-link"><i class="ki ki-arrow-next"></i></a></li></ul></div></div></div></div>
                                    <!--end: Datatable-->
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="document-4" role="tabpanel" aria-labelledby="document-tab-4">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Document Name</th>
                                        <th scope="col">Added on</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Nick</td>
                                        <td>05-08-2021 02:15:00 AM</td>
                                        <td>
                                            <span class="label label-inline label-light-primary font-weight-bold">
                                                Pending
                                            </span>
                                        </td>
                                        <td><a href="javascript:;" class="btn btn-sm btn-clean btn-icon" title="Delete"><i class="la la-trash"></i></a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Medical_Record.doc</td>
                                        <td>05-07-2021 08:30:00 PM</td>
                                        <td>
                                            <span class="label label-inline label-light-success font-weight-bold">
                                                Approved
                                            </span>
                                        </td>
                                        <td><a href="javascript:;" class="btn btn-sm btn-clean btn-icon" title="Delete"><i class="la la-trash"></i></a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>EOB.pdf</td>
                                        <td>05-07-2021 02:00:00 AM</td>
                                        <td>
                                            <span class="label label-inline label-light-danger font-weight-bold">
                                                New
                                            </span>
                                        </td>
                                        <td><a href="javascript:;" class="btn btn-sm btn-clean btn-icon" title="Delete"><i class="la la-trash"></i></a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
@endsection

@push('scripts')
    <script type="text/javascript">
        $(document).ready(function(){
            $("#guarantorDiv").hide();
            KTFormRepeater.init();
        })
        $("#relationship").on('change',function(){
            var relationship = $("#relationship").val();
            if(relationship != "Self"){
                $("#guarantorDiv").show();
            }
            else{
                $("#guarantorDiv").hide();
            }
        })

        var KTFormRepeater = function() {
            // Private functions
            var demo1 = function() {
                $('#kt_repeater_1').repeater({
                    initEmpty: false,

                    defaultValues: {
                        'text-input': 'foo'
                    },

                    show: function () {
                        $(this).slideDown();
                    },

                    hide: function (deleteElement) {
                        $(this).slideUp(deleteElement);
                    }
                });
            }

            return {
                // public functions
                init: function() {
                    demo1();
                }
            };
        }();
    </script>
@endpush