@extends('main')
@section('content')

<div class="toolbar" id="kt_toolbar">
    <div class=" container-fluid  d-flex flex-stack flex-wrap flex-sm-nowrap">
        <!--begin::Info-->
        <div class="d-flex flex-column align-items-start justify-content-center flex-wrap me-2">
            <!--begin::Title-->
            <h1 class="text-dark fw-bold my-1 fs-2">
                Users <small class="text-muted fs-6 fw-normal ms-1"></small>
            </h1>
            <!--end::Title-->

            <!--begin::Breadcrumb-->
            <ul class="breadcrumb fw-semibold fs-base my-1">
                <li class="breadcrumb-item text-muted">
                    <a href="" class="text-muted text-hover-primary">Users</a>
                </li>
                <li class="breadcrumb-item text-muted">List Users </li>
            </ul>
            <!--end::Breadcrumb-->
        </div>
        <!--end::Info-->
    </div>
</div>

<!--begin::Post-->
<div class="post fs-6 d-flex flex-column-fluid" id="kt_post">
    <!--begin::Container-->
    <div class="container-xxl min-w-100">
        <!--begin::Products-->
        <div class="card card-flush">
            <!--begin::Card header-->
            <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                <!--begin::Card title-->
                <div class="card-title">
                    <!--begin::Search-->
                    <div class="d-flex align-items-center position-relative my-1">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                        <span class="svg-icon svg-icon-1 position-absolute ms-4"><svg width="24"
                                height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546"
                                    height="2" rx="1" transform="rotate(45 17.0365 15.1223)"
                                    fill="currentColor" />
                                <path
                                    d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                    fill="currentColor" />
                            </svg>
                        </span>
                        <!--end::Svg Icon--> 
                        <input type="text" data-search-table="search" class="form-control form-control-solid w-250px ps-14" placeholder="Search" value=""/>
                    </div>
                    <!--end::Search-->
                </div>
                <!--end::Card title-->

                <!--begin::Card toolbar-->
                <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                    <!--begin::Add product-->
                    <a href="#" class="btn btn-primary" data-name="add_data">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
                        </svg>
                        Add Users
                    </a>
                    <!--end::Add product-->
                </div>
                <!--end::Card toolbar-->
            </div>
            <!--end::Card header-->

            <!--begin::Card body-->
            <div class="card-body pt-0">

                <!--begin::Table-->
                <table class="table align-middle table-row-dashed fs-6 gy-5" id="main_table">
                    <!--begin::Table head-->
                    <thead>
                        <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                            <th>NO</th>
                            <th>USERNAME</th>
                            <th>PASSWORD</th>
                            <th>NAMA LENGKAP</th>
                            <th>ROLE</th>
                            <th>EMAIL</th>
                            <th class="text-center">ACTION</th>
                        </tr>
                    </thead>
                    <!--end::Table head-->

                    <!--begin::Table body-->
                    <tbody class="fw-semibold text-gray-600">
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($arr as $key => $val)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$val->username}}</td>
                                <td>*******</td>
                                <td>{{strtoupper($val->name)}}</td>
                                <td>{{$val->role_name}}</td>
                                <td>{{$val->email}}</td>
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <button type="button" class="btn btn-info me-3" data-name="edit_data" data-item="{{$val->id}},{{strtoupper($val->name)}}">
                                            Edit
                                        </button>
                                        <button type="button" data-name="delete_data" class="btn btn-danger" data-item="{{$val->id}},{{strtoupper($val->name)}}">
                                            Delete
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <!--end::Table body-->
                </table>
                <!--end::Table-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Products-->
    </div>
    <!--end::Container-->
</div>
<!--end::Post-->

<form action="#" method="post" id="AddFormAction" enctype="multipart/form-data">
    <div class="modal fade" id="add_data" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <div class="modal-content">
                <div class="modal-header" id="">
                    <h2>Add New User</h2>
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

                    <div class="row mb-5">
                        <div class="col-md-12 fv-row fv-plugins-icon-container">
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span class="required">USERNMAE</span>
                            </label>
                            <input type="text" class="form-control form-control-solid" placeholder="USERNMAE" name="username"/>
                        </div>

                        <div class="col-md-12 fv-row fv-plugins-icon-container">
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span class="required">PASSWORD</span>
                            </label>
                            <input type="password" class="form-control form-control-solid" placeholder="PASSWORD" name="password"/>
                        </div>

                        <div class="col-md-12 fv-row fv-plugins-icon-container">
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span class="required">NAMA LENGKAP</span>
                            </label>
                            <input type="text" class="form-control form-control-solid" placeholder="NAMA LENGKAP" name="name"/>
                        </div>

                        <div class="col-md-12 fv-row fv-plugins-icon-container">
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span class="required">FOTO</span>
                            </label>
                            <input type="file" class="form-control form-control-solid" name="add_image" id="foto"/>
                        </div>

                        <div class="col-md-12 fv-row fv-plugins-icon-container">
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span class="required">EMAIL</span>
                            </label>
                            <input type="text" class="form-control form-control-solid" placeholder="EMAIL" name="email"/>
                        </div>

                        <div class="col-md-12 fv-row fv-plugins-icon-container">
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span class="required">ROLE</span>
                            </label>
                            <select name="role_id" data-control="select2" data-dropdown-parent="#add_data" data-placeholder="Select a Role..." class="form-select form-select-solid">
                                <option value="">Select a Role...</option>
                                @foreach ($role as $key => $val)
                                    <option value="{{$val->id}}">{{$val->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <input type="hidden" id="foto_name" name="foto_name">
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
</form>

<div class="modal fade" id="edit_data" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <div class="modal-content">
            <div class="modal-header" id="">
                <h2>Edit User</h2>
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

                <div class="row mb-5">
                    <div class="col-md-12 fv-row fv-plugins-icon-container">
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">USERNMAE</span>
                        </label>
                        <input type="text" class="form-control form-control-solid" placeholder="USERNMAE" name="edit_username"/>
                        <input type="hidden" name="edit_id">
                    </div>

                    <div class="col-md-12 fv-row fv-plugins-icon-container">
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">PASSWORD</span>
                        </label>
                        <input type="password" class="form-control form-control-solid" placeholder="PASSWORD" name="edit_password"/>
                    </div>

                    <div class="col-md-12 fv-row fv-plugins-icon-container">
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">NAMA LENGKAP</span>
                        </label>
                        <input type="text" class="form-control form-control-solid" placeholder="NAMA LENGKAP" name="edit_name"/>
                    </div>

                    <div class="col-md-12 fv-row fv-plugins-icon-container">
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">FOTO</span>
                        </label>
                        <input type="file" class="form-control form-control-solid" id="edit_foto"/>
                    </div>

                    <div class="col-md-12 fv-row fv-plugins-icon-container">
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">EMAIL</span>
                        </label>
                        <input type="text" class="form-control form-control-solid" placeholder="EMAIL" name="edit_email"/>
                    </div>

                    <div class="col-md-12 fv-row fv-plugins-icon-container">
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">ROLE</span>
                        </label>
                        <select name="edit_role_id" data-control="select2" data-dropdown-parent="#add_data" data-placeholder="Select a Role..." class="form-select form-select-solid">
                            <option value="">Select a Role...</option>
                            @foreach ($role as $key => $val)
                                <option value="{{$val->id}}">{{$val->name}}</option>
                            @endforeach
                        </select>
                    </div>
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

<script>
    $(document).on("click", "[data-name='add_data']", function (e) {
        $('[name="name"]').val('');
        $('[name="foto"]').val('');
        $('[name="email"]').val('');
        $('[name="username"]').val('');
        $('[name="password"]').val('');
        $('[name="role_id"]').val('').trigger("change");
        $('#add_data').modal('show');
    });

    var btnUpload       = $("#foto");
    btnUpload.on("change", function(e){
        var ext = btnUpload.val().split('.').pop().toLowerCase();
        // console.log(ext)
        if($.inArray(ext, ['gif','png','jpg','jpeg']) == -1) {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Format image failed!'
            })
        } else {
            var uploadedFile = URL.createObjectURL(e.target.files[0]);
            var photo        = e.target.files[0];
            var formData    = new FormData();
            formData.append('add_image', photo);
            // console.log(formData);
            $.ajax({
                url: "{{route('upload_img')}}",
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function (res) {
                    // console.log(res);
                    $('#foto_name').val(res);
                }
            })

        }
    });

    $(document).on("click", "[data-name='save_data']", function (e) {
        e.preventDefault();
        $('.preloader').show();
        var form        = $("#AddFormAction");
        var actform     = form.serializeArray();

        var username    = actform[0].value;
        var password    = actform[1].value;
        var name        = actform[2].value;
        var email       = actform[3].value;
        var role_id     = actform[4].value;
        var foto        = actform[5].value;
        // console.log(actform);
        if(foto.trim() == '') {
            foto = 'default.jpg';
        }
        
        if(username.trim() == ''){
            Swal.fire({
                position:'center',
                title: 'Username is empty!',
                icon: 'error',
                showConfirmButton: false,
                timer: 1000
            })
            return false
        }

        if(password.trim() == ''){
            Swal.fire({
                position:'center',
                title: 'Password is empty!',
                icon: 'error',
                showConfirmButton: false,
                timer: 1000
            })
            return false
        }

        if(name.trim() == ''){
            Swal.fire({
                position:'center',
                title: 'Name is empty!',
                icon: 'error',
                showConfirmButton: false,
                timer: 1000
            })
            return false
        }

        if(email.trim() == ''){
            Swal.fire({
                position:'center',
                title: 'Email is empty!',
                icon: 'error',
                showConfirmButton: false,
                timer: 1000
            })
            return false
        }

        if(role_id.trim() == ''){
            Swal.fire({
                position:'center',
                title: 'Role is empty!',
                icon: 'error',
                showConfirmButton: false,
                timer: 1000
            })
            return false
        }

        if(foto.trim() == ''){
            Swal.fire({
                position:'center',
                title: 'Role is empty!',
                icon: 'error',
                showConfirmButton: false,
                timer: 1000
            })
            return false
        }

        // console.log(foto);
        $.ajax({
            type: "POST",
            url: "{{ route('adduser') }}",
            data: {username:username,password:password,role_id:role_id,name:name,email:email,foto:foto},
            cache: false,
            success: function(data) {
                // console.log(data);
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

<script>
    "use strict";
    var MainJSTable = function () {
        // Shared variables
        var table;
        var datatable;

        // Private functions
        var initDatatable = function () {
            datatable = $(table).DataTable({
                "info": false,
                'order': [],
                'pageLength': 10,
            });
            datatable.on('draw', function () {
                handleDeleteRows();
            });
        }

        var handleSearchDatatable = () => {
            const filterSearch = document.querySelector('[data-search-table="search"]');
            filterSearch.addEventListener('keyup', function (e) {
                datatable.search(e.target.value).draw();
            });
        }

        return {
            init: function () {
                table = document.querySelector('#main_table');

                if (!table) {
                    return;
                }

                initDatatable();
                handleSearchDatatable();
            }
        };
    }();

    KTUtil.onDOMContentLoaded(function () {
        MainJSTable.init();
    });
</script>

<script>
    $(document).on("click", "[data-name='delete_data']", function (e) {
        var id      = $(this).attr("data-item").split(",")[0];
        var name    = $(this).attr("data-item").split(",")[1];
        var whr     = "id";
        var table   = "users";
        
        Swal.fire({
            title: 'Anda yakin?',
            text: 'Aksi ini tidak dapat diulang!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, hapus data!',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: "POST",
                    url: "{{route('delete')}}",
                    data: {id:id,table:table,whr:whr},
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
            }
        })

    });
</script>

<script>
    $(document).on("click", "[data-name='edit_data']", function (e) {
        var id      = $(this).attr("data-item").split(",")[0];
        var name    = $(this).attr("data-item").split(",")[1];
        var whr     = "id";
        var table   = "users";

        $.ajax({
            type: "POST",
            url: "{{route('showdata')}}",
            data: {id:id,table:table,whr:whr},
            cache: false,
            success: function (res) {
                // console.log(res.row.id)
                $('[name="edit_id"]').val(res.row.id);
                $('[name="edit_name"]').val(res.row.name);
                $('[name="edit_foto"]').val(res.row.foto);
                $('[name="edit_email"]').val(res.row.email);
                $('[name="edit_username"]').val(res.row.username);
                $('[name="edit_password"]').val(res.row.pass);
                $('[name="edit_role_id"]').val(res.row.role_id).trigger("change");
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
        })
    });
</script>

<script>
    var btnUpload       = $("#edit_foto");
    btnUpload.on("change", function(e){
        $('.preloader').show();
        var ext = btnUpload.val().split('.').pop().toLowerCase();
        // console.log(ext)
        if($.inArray(ext, ['gif','png','jpg','jpeg']) == -1) {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Format image failed!'
            })
        } else {
            var uploadedFile = URL.createObjectURL(e.target.files[0]);
            var photo        = e.target.files[0];
            var id           = $('[name="edit_id"]').val();
            var field        = 'foto';
            var table        = 'users';
            var folder       = 'profile';
            var formData     = new FormData();
            formData.append('edit_image', photo);
            formData.append('id', id);
            formData.append('table', table);
            formData.append('field', field);
            formData.append('folder', folder);
            // console.log(formData);
            $.ajax({
                url: "{{route('editimage')}}",
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function (res) {
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
                }
            })

        }
    });
</script>

<script>
    $(document).on("click", "[data-name='save_data_edit']", function (e) {
        $('.preloader').show();
        var id          = $('[name="edit_id"]').val();
        var name        = $('[name="edit_name"]').val();
        var email       = $('[name="edit_email"]').val();
        var username    = $('[name="edit_username"]').val();
        var role_id     = $('[name="edit_role_id"]').val();
        var dats        = {username:username,name:name,email:email,role_id:role_id};
        var table       = "users";
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