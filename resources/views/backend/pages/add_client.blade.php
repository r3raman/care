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
                                        <span>2.</span>Guarantor Info</h3>
                                        <div class="wizard-bar"></div>
                                    </div>
                                </div>
                                <!--end::Wizard Step 2 Nav-->
                                <!--begin::Wizard Step 3 Nav-->
                                <div class="wizard-step" data-wizard-type="step" data-wizard-state="pending">
                                    <div class="wizard-label">
                                        <h3 class="wizard-title">
                                        <span>3.</span>Other Info</h3>
                                        <div class="wizard-bar"></div>
                                    </div>
                                </div>
                                <!--end::Wizard Step 3 Nav-->
                                <!--begin::Wizard Step 4 Nav-->
                                <div class="wizard-step" data-wizard-type="step" data-wizard-state="pending">
                                    <div class="wizard-label">
                                        <h3 class="wizard-title">
                                        <span>4.</span>Insurance &amp; Auth</h3>
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
                                <form class="form fv-plugins-bootstrap fv-plugins-framework" id="kt_form">
                                    <!--begin: Wizard Step 1-->
                                    <div class="pb-5" data-wizard-type="step-content" data-wizard-state="current">
                                        <!-- <h4 class="mb-10 font-weight-bold text-dark">Setup Your Current Location</h4> -->
                                        
                                            <div class="card-body">
                                                <div class="form-group row">
                                                    <div class="col-lg-4">
                                                        <label>First Name:</label>
                                                        <input type="text" class="form-control" placeholder="Enter first name">
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <label>Middle Name:</label>
                                                        <input type="text" class="form-control" placeholder="Enter middle name">
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <label>Last Name:</label>
                                                        <input type="text" class="form-control" placeholder="Enter last name">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-lg-4">
                                                        <label>Gender:</label>
                                                        <div class="radio-inline">
                                                            <label class="radio radio-solid">
                                                                <input type="radio" name="example_2" checked="checked" value="2">
                                                                <span></span>
                                                                Male
                                                            </label>
                                                            <label class="radio radio-solid">
                                                                <input type="radio" name="example_2" value="2">
                                                                <span></span>
                                                                Female
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <label>DOB:</label>
                                                        <input type="text" class="form-control" placeholder="Enter Date of Birth">
                                                    </div>
                                                    
                                                    <div class="col-lg-4">
                                                        <label>Email:</label>
                                                        <div class="input-group">
                                                            <input type="email" class="form-control" placeholder="Enter email address">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-lg-4">
                                                        <label>Phone:</label>
                                                        <input type="text" class="form-control" placeholder="Enter phone number">
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <label>Mobile:</label>
                                                        <input type="text" class="form-control" placeholder="Enter mobile number">
                                                    </div>
                                                    
                                                    <div class="col-lg-4">
                                                        <label>Address:</label>
                                                        <input type="text" class="form-control" placeholder="Enter Address">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-lg-4">
                                                        <label>Postcode:</label>
                                                        <div class="input-group">
                                                            <!-- <div class="input-group-append"><span class="input-group-text"><i class="la la-bookmark-o"></i></span></div> -->
                                                            <input type="text" class="form-control" placeholder="Enter your postcode">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <label>City:</label>
                                                        <input type="text" class="form-control" placeholder="Enter City">
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <label>State:</label>
                                                        <input type="text" class="form-control" placeholder="Enter State">
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
                                                        <div class="checkbox-inline">
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
                                        
                                    </div><div></div><div></div><div></div><div></div></form>
                                    <!--end: Wizard Step 1-->
                                    <!--begin: Wizard Step 2-->
                                    <div class="pb-5" data-wizard-type="step-content">
                                        <h4 class="font-weight-bold text-dark">Enter the Guarantor Info</h4>
                                        <form class="form">
                                            <div class="card-body">
                                                <div class="form-group row">
                                                    <div class="col-lg-4">
                                                        <label>First Name:</label>
                                                        <input type="text" class="form-control" placeholder="Enter first name">
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <label>Middle Name:</label>
                                                        <input type="text" class="form-control" placeholder="Enter middle name">
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <label>Last Name:</label>
                                                        <input type="text" class="form-control" placeholder="Enter last name">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-lg-4">
                                                        <label>Gender:</label>
                                                        <div class="radio-inline">
                                                            <label class="radio radio-solid">
                                                                <input type="radio" name="example_2" checked="checked" value="2">
                                                                <span></span>
                                                                Male
                                                            </label>
                                                            <label class="radio radio-solid">
                                                                <input type="radio" name="example_2" value="2">
                                                                <span></span>
                                                                Female
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <label>DOB:</label>
                                                        <input type="text" class="form-control" placeholder="Enter Date of Birth">
                                                    </div>
                                                    
                                                    <div class="col-lg-4">
                                                        <label>Email:</label>
                                                        <div class="input-group">
                                                            <input type="email" class="form-control" placeholder="Enter email address">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-lg-4">
                                                        <label>Phone:</label>
                                                        <input type="text" class="form-control" placeholder="Enter phone number">
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <label>Mobile:</label>
                                                        <input type="text" class="form-control" placeholder="Enter mobile number">
                                                    </div>
                                                    
                                                    <div class="col-lg-4">
                                                        <label>Address:</label>
                                                        <input type="text" class="form-control" placeholder="Enter Address">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-lg-4">
                                                        <label>Postcode:</label>
                                                        <div class="input-group">
                                                            <!-- <div class="input-group-append"><span class="input-group-text"><i class="la la-bookmark-o"></i></span></div> -->
                                                            <input type="text" class="form-control" placeholder="Enter your postcode">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <label>City:</label>
                                                        <input type="text" class="form-control" placeholder="Enter City">
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <label>State:</label>
                                                        <input type="text" class="form-control" placeholder="Enter State">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-lg-4">
                                                        <label>Relationship:</label>
                                                        <select class="form-control">
                                                            <option value="">-- Select Relationship --</option>
                                                            <option value="Self">Self</option>
                                                            <option value="Child">Child</option>
                                                            <option value="Spouse">Spouse</option>
                                                            <option value="Others">Others</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <!--end: Wizard Step 2-->
                                    <!--begin: Wizard Step 3-->
                                    <div class="pb-5" data-wizard-type="step-content">
                                        <h4 class="mb-10 font-weight-bold text-dark">Billing Location Info</h4>
                                        <form class="form">
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
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <!--end: Wizard Step 3-->
                                    <!--begin: Wizard Step 4-->
                                    <div class="pb-5" data-wizard-type="step-content">
                                        <h4 class="mb-10 font-weight-bold text-dark">Auth Information</h4>
                                        <div class="form-group row">
                                            <div class="col-lg-4">
                                                <label>Auth #:</label>
                                                <input type="text" class="form-control" placeholder="Enter Authorization number">
                                            </div>
                                            <div class="col-lg-4">
                                                <label>Serivce:</label>
                                                <select class="form-control">
                                                    <option value="">-- Select Service Type --</option>
                                                    <option value="">Behavior Therapy</option>
                                                    <option value="">Speech Therapy</option>
                                                    <option value="">Occupational Therapy</option>
                                                </select>
                                            </div>
                                            
                                            <div class="col-lg-4">
                                                <label>Diag:</label>
                                                <input type="text" class="form-control" placeholder="Enter Diag Code">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-4">
                                                <label>Eff. Start Dt:</label>
                                                <input type="text" class="form-control" placeholder="Auth Start Date">
                                            </div>
                                            <div class="col-lg-4">
                                                <label>Eff. End Dt</label>
                                                <input type="text" class="form-control" placeholder="Auth End Date">
                                            </div>
                                            
                                            <div class="col-lg-4">
                                                <label></label>
                                                <div class="checkbox-inline" style="margin-top: 0.6em !important;">
                                                    <label class="checkbox">
                                                    <input type="checkbox">
                                                    <span></span>Place Holder</label>
                                                    <label class="checkbox">
                                                    <input type="checkbox" checked="checked">
                                                    <span></span>No Auth</label>
                                                    <label class="checkbox">
                                                </label></div>
                                            </div>
                                        </div>
                                        <h4 class="mb-10 font-weight-bold text-dark">Insurance Information</h4>
                                        <div class="form-group row">
                                            <div class="col-lg-4">
                                                <label>Insurance Name:</label>
                                                <select class="form-control">
                                                    <option value="">-- Select Insurance --</option>
                                                    <option value="">Aetna</option>
                                                    <option value="">Emblem Health</option>
                                                    <option value="">United Health Care</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-4">
                                                <label>Policy ID:</label>
                                                <input type="text" class="form-control" placeholder="Enter Policy #">
                                            </div>
                                            <div class="col-lg-4">
                                                <label>Client Relationship:</label>
                                                <select class="form-control">
                                                    <option value="">-- Select Guarantor --</option>
                                                    <option value="">Self</option>
                                                    <option value="">Son</option>
                                                    <option value="">Spouse</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-4">
                                                <label>Eff. Start Dt:</label>
                                                <input type="text" class="form-control" placeholder="Policy Start Date">
                                            </div>
                                            <div class="col-lg-4">
                                                <label>Eff. End Dt</label>
                                                <input type="text" class="form-control" placeholder="Policy End Date">
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
                            <form class="form">
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
                            </form>
                        </div>
                        <div class="tab-pane fade" id="provider-4" role="tabpanel" aria-labelledby="provider-tab-4">
                            <div class="row">
                                <div class="col-lg-12 col-xl-6">
                                    <h5 class="font-weight-bold mt-10 mb-6">Service Location Info</h5>
                                </div>
                            </div>
                            <form class="form">
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
                            </form>
                            <div class="row">
                                <div class="col-lg-12 col-xl-6">
                                    <h5 class="font-weight-bold mt-10 mb-6">Provider Info</h5>
                                </div>
                            </div>
                            <form class="form">
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
                            </form>
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
    
@endpush