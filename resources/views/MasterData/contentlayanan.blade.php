@extends('main')
@section('content')

<div class="toolbar" id="kt_toolbar">
    <div class="container-fluid d-flex justify-content-between flex-stack flex-wrap flex-sm-nowrap">
        <!--begin::Info-->
        <div class="d-flex flex-column align-items-start justify-content-center flex-wrap me-2">
            <!--begin::Title-->
            <h1 class="text-dark fw-bold my-1 fs-2">
                Content Layanan <small class="text-muted fs-6 fw-normal ms-1"></small>
            </h1>
            <!--end::Title-->

            <!--begin::Breadcrumb-->
            <ul class="breadcrumb fw-semibold fs-base my-1">
                <li class="breadcrumb-item text-muted">
                    <a href="" class="text-muted text-hover-primary">Master Data</a>
                </li>
                <li class="breadcrumb-item text-muted">Content Layanan </li>
            </ul>
            <!--end::Breadcrumb-->
        </div>
        <!--end::Info-->

        <!--begin::Card toolbar-->
        <div class="card-toolbar d-flex flex-row-fluid justify-content-end gap-5">
            <!--begin::Add product-->
            <a href="#" class="btn btn-primary" data-name="add_data">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
                </svg>
                Add Content
            </a>
            <!--end::Add product-->
        </div>
        <!--end::Card toolbar-->
    </div>
</div>

<!--begin::Post-->
<div class="post fs-6 d-flex flex-column-fluid" id="kt_post">
    <!--begin::Container-->
    <div class="container-xxl min-w-100">
        <!--begin::Products-->

        <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-10" id="myTab">
        
            @foreach ($arr as $key => $val)
                <li class="nav-item">
                    <a class="nav-link text-active-primary pb-4 @if ($key == 0) active @endif" data-bs-toggle="tab" href="#tabs_content_{{$val->id}}">{{ucwords($val->name)}}</a>
                </li>
            @endforeach
            
        </ul>
        <!--begin::Tab content-->
        <div class="tab-content">

            @foreach ($arr as $key => $val)
                <div class="tab-pane fade @if ($key == 0) show active @endif" id="tabs_content_{{$val->id}}" role="tab-panel">
                    <div class="card card-flush">
                        <div class="card-body pt-0">
                            <!--begin::Table-->
                            <table class="table align-middle table-row-dashed fs-6 gy-5" id="main_table">
                                <!--begin::Table head-->
                                <thead>
                                    <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                        <th>NO</th>
                                        <th>NAME</th>
                                        <th>DESCRIPTION</th>
                                        <th>STATUS</th>
                                        <th class="text-center">ACTION</th>
                                    </tr>
                                </thead>
                                <!--end::Table head-->

                                <!--begin::Table body-->
                                <tbody class="fw-semibold text-gray-600">
                                    @php
                                        $no = 1;
                                    @endphp
                                    
                                    @foreach ($content as $k => $v)
                                        @if ($v->id_layanan == $val->id)
                                            <tr>
                                                <td>{{$no++}}</td>
                                                <td>{{ucwords($v->name)}}</td>
                                                <td>{{ucfirst($v->content)}}</td>
                                                <td>
                                                    @if ($v->is_active == 1)
                                                        <div class="badge badge-light-success">Active</div>
                                                    @else
                                                        <div class="badge badge-light-danger">Inactive</div>
                                                    @endif
                                                </td>
                                                <td>
                                                    <div class="d-flex justify-content-center">
                                                        <button type="button" class="btn btn-info me-3" data-name="edit_data" data-item="">
                                                            Edit
                                                        </button>
                                                        <button type="button" data-name="save_data" class="btn btn-danger">
                                                            Delete
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endif
                                    @endforeach
                                    
                                </tbody>
                                <!--end::Table body-->
                            </table>
                            <!--end::Table-->
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

    </div>
</div>

<div class="modal fade" id="add_data" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <div class="modal-content">
            <div class="modal-header" id="">
                <h2>Add New Content</h2>
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <span class="svg-icon svg-icon-1">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                transform="rotate(-45 6 17.3137)" fill="currentColor" />
                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)"
                                fill="currentColor" />
                        </svg>
                    </span>
                </div>
            </div>
            <div class="modal-body py-10 px-lg-17">

                <div class="col-md-12 fv-row fv-plugins-icon-container">
                    <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                        <span class="required">LAYANAN</span>
                    </label>
                    <select name="id_layanan" data-name="id_layanan" data-control="select2" data-dropdown-parent="#add_data" data-placeholder="Select a Layanan..." class="form-select form-select-solid">
                        <option value="">Select a Layanan...</option>
                        @foreach ($arr as $key => $val)
                            <option value="{{$val->id}}">{{ucwords($val->name)}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="d-flex flex-column mb-8 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                        <span class="required">NAME</span>
                    </label>
                    <input type="text" class="form-control form-control-solid" placeholder="Name" data-name="name"/>
                </div>

                <div class="d-flex flex-column mb-8 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                        <span class="required">CONTENT</span>
                    </label>
                    <textarea name="content" data-name="content" id="content" rows="5" class="form-control form-control-solid" placeholder="Content"></textarea>
                </div>

            </div>
            <div class="modal-footer flex-center">
                <button type="button" class="btn btn-danger me-3" data-bs-dismiss="modal">
                    Cancel
                </button>
                <button type="button" data-name="save_data" class="btn btn-primary">
                    Save
                </button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="edit_data" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <div class="modal-content">
            <div class="modal-header" id="">
                <h2>Edit Layanan</h2>
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <span class="svg-icon svg-icon-1">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                transform="rotate(-45 6 17.3137)" fill="currentColor" />
                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)"
                                fill="currentColor" />
                        </svg>
                    </span>
                </div>
            </div>
            <div class="modal-body py-10 px-lg-17">

                <div class="d-flex flex-column mb-8 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                        <span class="required">NAME</span>
                    </label>
                    <input type="text" class="form-control form-control-solid" placeholder="Name" data-name="name_edit"/>
                </div>

            </div>
            <div class="modal-footer flex-center">
                <button type="button" class="btn btn-danger me-3" data-bs-dismiss="modal">
                    Cancel
                </button>
                <button type="button" data-name="save_data_edit" class="btn btn-primary">
                    Save
                </button>
            </div>
        </div>
    </div>
</div>

{{-- Action Add --}}
<script>
    $(document).on("click", "[data-name='add_data']", function (e) {
        $('[data-name="name"]').val('');
        $('[data-name="content"]').val('');
        $('[data-name="id_layanan"]').trigger("change");
        $('#add_data').modal('show');
    });

    $(document).on("click", "[data-name='save_data']", function (e) {

        $('.preloader').show();
        var id_layanan  = $('[data-name="id_layanan"]').val();
        var name        = $('[data-name="name"]').val();
        var content     = $('[data-name="content"]').val();

        $.ajax({
            type: "POST",
            url: "{{ route('addcontentlayanan') }}",
            data: {id_layanan:id_layanan,name:name,content:content},
            cache: false,
            success: function(data) {
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
        });

    });
</script>

{{-- Action Edit --}}
<script>
    $(document).on("click", "[data-name='edit_data']", function (e) {
        $('.preloader').show();
        var id     = $(this).attr("data-item").split(",")[0];
        var name   = $(this).attr("data-item").split(",")[1];

        $.ajax({
            type: "POST",
            url: "{{ route('showDataCategory') }}",
            data: {id:id},
            cache: false,
            success: function(data) {
                // console.log(data.data['name']);
                $('[data-name="name_edit"]').val(data.row['name']);
                $('#edit_data').modal('show');
                $('.preloader').hide();
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
        });
    });
</script>

@stop