@extends('main')
@section('content')

<div class="toolbar" id="kt_toolbar">
    <div class=" container-fluid  d-flex flex-stack flex-wrap flex-sm-nowrap">
        <!--begin::Info-->
        <div class="d-flex flex-column align-items-start justify-content-center flex-wrap me-2">
            <!--begin::Title-->
            <h1 class="text-dark fw-bold my-1 fs-2">
                Vidios <small class="text-muted fs-6 fw-normal ms-1"></small>
            </h1>
            <!--end::Title-->

            <!--begin::Breadcrumb-->
            <ul class="breadcrumb fw-semibold fs-base my-1">
                <li class="breadcrumb-item text-muted">
                    <a href="" class="text-muted text-hover-primary">Setting Landing Page</a>
                </li>
                <li class="breadcrumb-item text-muted">Vidios </li>
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
                Add Vidios
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
        <div class="row">

            @foreach ($arr as $key => $val)
                <div class="col-3">
                    <div class="card  card-xl-stretch mb-xl-8">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="position-relative">
                                        <video class="w-100" controls>
                                            <source src="{{asset('vidio').'/'.$val->vidio}}" type="video/mp4">
                                        </video>  
                                    </div>                                        
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="d-flex justify-content-center w-100 mb-0">
                                <span class="fw-bolder text-dark fs-2">{{$val->name}}</span>
                            </div>
                            <div class="d-flex justify-content-start w-100 mb-8">
                                <span class="fw-bold fs-6 text-gray-800">{{$val->descripsi}}</span>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="d-flex justify-content-center w-100">
                                        <button data-name="edit_data" class="btn btn btn-info me-3" data-item="{{$val->id}},{{$val->name}}">Edit</button>
                                        <button data-name="delete_data" class="btn btn-danger me-3" data-item="{{$val->id}},{{$val->name}}">Delete</button>
                                        <button data-name="sett_data" class="btn btn-success" data-item="{{$val->id}},{{$val->name}}">Landing</button>
                                    </div>
                                </div>
                            </div>
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
                <h2>Add New Vidios</h2>
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
                    <input type="text" class="form-control form-control-solid" placeholder="Name" name="name"/>
                </div>

                <div class="d-flex flex-column mb-8 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                        <span class="required">DESKRIPSI</span>
                    </label>
                    <input type="text" class="form-control form-control-solid" placeholder="Price" name="descripsi"/>
                </div>

                <div class="col-md-12 fv-row fv-plugins-icon-container">
                    <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                        <span class="required">VIDIOS</span>
                    </label>
                    <input type="file" class="form-control form-control-solid" id="foto"/>
                </div>

                <input type="hidden" id="foto_name" name="foto_name" data-name="img">
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
                <h2>Edit Vidios</h2>
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
                    <input type="text" class="form-control form-control-solid" placeholder="Name" name="edit_name"/>
                    <input type="hidden" name="edit_id">
                </div>

                <div class="d-flex flex-column mb-8 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                        <span class="required">DESKRIPSI</span>
                    </label>
                    <input type="text" class="form-control form-control-solid" placeholder="Price" name="edit_descripsi"/>
                </div>

                <div class="col-md-12 fv-row fv-plugins-icon-container">
                    <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                        <span class="required">VIDIOS</span>
                    </label>
                    <input type="file" class="form-control form-control-solid" id="edit_foto"/>
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
        $('[name="descripsi"]').val('');
        $('#add_data').modal('show');
    });

    var btnUpload       = $("#foto");
    btnUpload.on("change", function(e){
        var ext = btnUpload.val().split('.').pop().toLowerCase();
        // console.log(ext)
        if($.inArray(ext, ['mp4']) == -1) {
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
                url: "{{route('upload_vidio')}}",
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
        $('.preloader').show();
        var name        = $('[name="name"]').val();
        var descripsi   = $('[name="descripsi"]').val();
        var vidio       = $('[name="foto_name"]').val();

        $.ajax({
            type: "POST",
            url: "{{ route('addvidio') }}",
            data: {name:name,descripsi:descripsi,vidio:vidio},
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
        var id      = $(this).attr("data-item").split(",")[0];
        var name    = $(this).attr("data-item").split(",")[1];
        var whr     = "id";
        var table   = "mst_vidios";

        $.ajax({
            type: "POST",
            url: "{{route('showdata')}}",
            data: {id:id,table:table,whr:whr},
            cache: false,
            success: function (res) {
                // console.log(res.row.id)
                $('[name="edit_id"]').val(res.row.id);
                $('[name="edit_name"]').val(res.row.name);
                $('[name="edit_descripsi"]').val(res.row.descripsi);
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
    $(document).on("click", "[data-name='save_data_edit']", function (e) {
        $('.preloader').show();
        var id          = $('[name="edit_id"]').val();
        var name        = $('[name="edit_name"]').val();
        var descripsi   = $('[name="edit_descripsi"]').val();
        var dats        = {name:name,descripsi:descripsi};
        var table       = "mst_vidios";
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

<script>
    var btnUpload       = $("#edit_foto");
    btnUpload.on("change", function(e){
        $('.preloader').show();
        var ext = btnUpload.val().split('.').pop().toLowerCase();
        // console.log(ext)
        if($.inArray(ext, ['mp4']) == -1) {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Format image failed!'
            })
        } else {
            var uploadedFile = URL.createObjectURL(e.target.files[0]);
            var photo        = e.target.files[0];
            var id           = $('[name="edit_id"]').val();
            var field        = 'vidio';
            var table        = 'mst_vidios';
            var formData     = new FormData();
            formData.append('edit_image', photo);
            formData.append('id', id);
            formData.append('table', table);
            formData.append('field', field);
            // console.log(formData);
            $.ajax({
                url: "{{route('editvidio')}}",
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
    $(document).on("click", "[data-name='delete_data']", function (e) {
        var id      = $(this).attr("data-item").split(",")[0];
        var name    = $(this).attr("data-item").split(",")[1];
        var whr     = "id";
        var table   = "mst_vidios";
        
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
    $(document).on("click", "[data-name='sett_data']", function (e) {
        $('.preloader').show();
        var id          = $(this).attr("data-item").split(",")[0];
        var id_set      = 2;
        var is_active   = 1;  
        var dats        = {is_active:is_active};
        var table       = "mst_vidios";
        var whr         = "is_active";

        // console.log(password);
        $.ajax({
            type: "POST",
            url: "{{route('edit')}}",
            data: {id:id_set,table:table,dats:dats,whr:whr},
            cache: false,
            success: function (res) {
                settlanding(id);
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

    function settlanding(id){
        var id          = id;
        var is_active   = 2;  
        var dats        = {is_active:is_active};
        var table       = "mst_vidios";
        var whr         = "id";
        $.ajax({
            type: "POST",
            url: "{{route('edit')}}",
            data: {id:id,table:table,dats:dats,whr:whr},
            cache: false,
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
</script>

@stop