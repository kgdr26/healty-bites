@extends('main')
@section('content')

<div class="toolbar" id="kt_toolbar">
    <div class="container-fluid d-flex justify-content-between flex-stack flex-wrap flex-sm-nowrap">
        <!--begin::Info-->
        <div class="d-flex flex-column align-items-start justify-content-center flex-wrap me-2">
            <!--begin::Title-->
            <h1 class="text-dark fw-bold my-1 fs-2">
                Setting Konsultasi <small class="text-muted fs-6 fw-normal ms-1"></small>
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
                    <h3 class="fw-bold m-0">Konsultasi</h3>
                </div>
                <!--end::Card title-->
            </div>
            <!--begin::Card header-->
        
            <!--begin::Content-->
            <div id="kt_account_settings_profile_details" class="collapse show">
                <!--begin::Form-->
                <!--begin::Card body-->
                <div class="card-body border-top p-9">
    
                    <!--begin::Input group-->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">No Telp</label>
                        <!--end::Label-->
    
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row fv-plugins-icon-container">
                            <input type="text" name="tlp" data-name="tlp" class="form-control form-control-lg form-control-solid" placeholder="No Tlp" value="{{$arr->tlp}}">
                        <div class="fv-plugins-message-container invalid-feedback"></div></div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Jam Operasional</label>
                        <!--end::Label-->
    
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row fv-plugins-icon-container">
                            <input type="text" name="tlp" data-name="tlp" class="form-control form-control-lg form-control-solid" placeholder="Jam Operasional" value="{{$arr->jam}}">
                        <div class="fv-plugins-message-container invalid-feedback"></div></div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Alamat</label>
                        <!--end::Label-->
    
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row fv-plugins-icon-container">
                            <input type="text" name="alamat" data-name="alamat" class="form-control form-control-lg form-control-solid" placeholder="Alamat" value="{{$arr->alamt}}">
                        <div class="fv-plugins-message-container invalid-feedback"></div></div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->


                </div>
                <!--end::Card body-->
    
                <!--begin::Actions-->
                <div class="card-footer d-flex justify-content-end py-6 px-9">
                    <button type="button" class="btn btn-primary" data-name="save_edit">Save Changes</button>
                </div>
                <!--end::Actions-->
                <!--end::Form-->
            </div>
            <!--end::Content-->
        </div>

    </div>
    <!--end::Container-->
</div>

<script>
    $(document).on("click", "[data-name='save_edit']", function (e) {
        $('.preloader').show();
        var id          = 1;
        var tlp         = $("[name='tlp']").val();
        var jam         = $("[name='jam']").val();
        var alamt       = $("[name='alamt']").val();
        var dats        = {tlp:tlp,jam:jam,alamt:alamt};
        var table       = "mst_konsultasi";
        var whr         = "id";

        // console.log(password);
        $.ajax({
            type: "POST",
            url: "{{route('edit')}}",
            data: {id:id,table:table,dats:dats,whr:whr},
            cache: false,
            success: function (res) {
                // console.log(res)
                $('.preloader').hide();
                Swal.fire({
                    position:'center',
                    title: 'Success!',
                    icon: 'success',
                    showConfirmButton: false,
                    timer: 1500
                }).then((data) => {
                    location.reload();
                })
            },
            error: function (data) {
                $('.preloader').hide();
                Swal.fire({
                    position:'center',
                    title: 'Action Not Valid!',
                    icon: 'warning',
                    showConfirmButton: true,
                    // timer: 1500
                }).then((data) => {
                    // location.reload();
                })
            }
        })

    });
</script>

@stop