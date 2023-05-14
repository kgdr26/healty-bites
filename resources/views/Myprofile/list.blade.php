@extends('main')
@section('content')

<div class="toolbar" id="kt_toolbar">
    <div class="container-fluid d-flex justify-content-between flex-stack flex-wrap flex-sm-nowrap">
        <!--begin::Info-->
        <div class="d-flex flex-column align-items-start justify-content-center flex-wrap me-2">
            <!--begin::Title-->
            <h1 class="text-dark fw-bold my-1 fs-2">
                Profile <small class="text-muted fs-6 fw-normal ms-1"></small>
            </h1>
            <!--end::Title-->
        </div>
        <!--end::Info-->
    </div>
</div>

<div class="post fs-6 d-flex flex-column-fluid" id="kt_post">
    <!--begin::Container-->
    <div class=" container-xxl ">

        <div class="card mb-5 mb-xl-10">
            <!--begin::Card header-->
            <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
                <!--begin::Card title-->
                <div class="card-title m-0">
                    <h3 class="fw-bold m-0">Profile Details</h3>
                </div>
                <!--end::Card title-->
            </div>
            <!--begin::Card header-->
        
            <!--begin::Content-->
            <div id="kt_account_settings_profile_details" class="collapse show">
                <!--begin::Form-->
                <form id="kt_account_profile_details_form" class="form fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate">
                    <!--begin::Card body-->
                    <div class="card-body border-top p-9">
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label fw-semibold fs-6">Avatar</label>   
                            <!--end::Label-->  
                            
                            <!--begin::Col-->
                            <div class="col-lg-8">
                                <!--begin::Image input-->
                                <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('{{asset('img/profile').'/'.$idn_user->foto}}')">
                                    <!--begin::Preview existing avatar-->
                                    <div class="image-input-wrapper w-125px h-125px" style="background-image: url({{asset('img/profile').'/'.$idn_user->foto}})"></div>
                                    <!--end::Preview existing avatar-->
        
                                    <!--begin::Label-->
                                    <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" aria-label="Change avatar" data-bs-original-title="Change avatar" data-kt-initialized="1">
                                        <i class="bi bi-pencil-fill fs-7"></i>
                                        <!--begin::Inputs-->
                                        <input type="file" name="avatar" accept=".png, .jpg, .jpeg">
                                        <input type="hidden" name="avatar_remove">
                                        <!--end::Inputs-->
                                    </label>
                                    <!--end::Label-->
                                </div>
                                <!--end::Image input-->
        
                                <!--begin::Hint-->
                                <div class="form-text">Allowed file types:  png, jpg, jpeg.</div>
                                <!--end::Hint-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
        
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Name</label>
                            <!--end::Label-->
        
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                <input type="text" name="" class="form-control form-control-lg form-control-solid" placeholder="Name" value="{{strtoupper($idn_user->name)}}">
                            <div class="fv-plugins-message-container invalid-feedback"></div></div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Email</label>
                            <!--end::Label-->
        
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                <input type="text" name="" class="form-control form-control-lg form-control-solid" placeholder="Email" value="{{$idn_user->email}}">
                            <div class="fv-plugins-message-container invalid-feedback"></div></div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Username</label>
                            <!--end::Label-->
        
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                <input type="text" name="" class="form-control form-control-lg form-control-solid" placeholder="Username" value="{{$idn_user->username}}">
                            <div class="fv-plugins-message-container invalid-feedback"></div></div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Password</label>
                            <!--end::Label-->
        
                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                <input type="password" name="" class="form-control form-control-lg form-control-solid" placeholder="Password" value="{{$idn_user->pass}}">
                            <div class="fv-plugins-message-container invalid-feedback"></div></div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->


                    </div>
                    <!--end::Card body-->
        
                    <!--begin::Actions-->
                    <div class="card-footer d-flex justify-content-end py-6 px-9">
                        <button type="reset" class="btn btn-light btn-active-light-primary me-2">Discard</button>
        
                        <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">Save Changes</button>
                    </div>
                    <!--end::Actions-->
                <input type="hidden"></form>
                <!--end::Form-->
            </div>
            <!--end::Content-->
        </div>

    </div>
    <!--end::Container-->
</div>

@stop