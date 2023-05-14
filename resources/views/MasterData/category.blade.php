@extends('main')
@section('content')

<div class="toolbar" id="kt_toolbar">
    <div class=" container-fluid  d-flex flex-stack flex-wrap flex-sm-nowrap">
        <!--begin::Info-->
        <div class="d-flex flex-column align-items-start justify-content-center flex-wrap me-2">
            <!--begin::Title-->
            <h1 class="text-dark fw-bold my-1 fs-2">
                Category <small class="text-muted fs-6 fw-normal ms-1"></small>
            </h1>
            <!--end::Title-->

            <!--begin::Breadcrumb-->
            <ul class="breadcrumb fw-semibold fs-base my-1">
                <li class="breadcrumb-item text-muted">
                    <a href="" class="text-muted text-hover-primary">Master Data</a>
                </li>
                <li class="breadcrumb-item text-muted">Category </li>
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
                Add Category
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
                                        <img src="{{asset('img/category').'/'.$val->foto}}" class="w-100" alt="">
                                        <div class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-body h-20px w-20px"></div>
                                    </div>                                        
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="d-flex justify-content-center w-100 mb-8">
                                <span class="fw-bolder text-dark fs-2">{{strtoupper($val->name)}}</span>
                            </div>
                            <div class="d-flex justify-content-between w-100">
                                <span class="fw-bolder text-muted fs-2">{{ 'Rp '. number_format($val->price, 0, ',', '.') }}</span>
                                <a href="" class="btn btn btn-info me-3">Edit</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <!--end::Container-->
</div>
<!--end::Post-->

<div class="modal fade" id="add_data" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <div class="modal-content">
            <div class="modal-header" id="">
                <h2>Add New Category</h2>
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
                    <input type="text" class="form-control form-control-solid" placeholder="Name" data-name="name"/>
                </div>

                <div class="d-flex flex-column mb-8 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                        <span class="required">PRICE</span>
                    </label>
                    <input type="text" class="form-control form-control-solid" placeholder="Price" name="price" data-name="price" id="price"/>
                </div>

                <div class="col-md-12 fv-row fv-plugins-icon-container">
                    <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                        <span class="required">FOTO</span>
                    </label>
                    <input type="file" class="form-control form-control-solid" name="add_image" id="foto"/>
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
                <h2>Edit Category</h2>
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
    $(function() {
        $('#price').maskMoney({
            prefix: 'Rp ',
            thousands: '.',
            decimal: ',',
            precision: 0
        });
    });

    $(document).on("click", "[data-name='add_data']", function (e) {
        $('[data-name="name"]').val('');
        $('[data-name="price"]').val('');
        $('[data-name="img"]').val('');
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
                url: "{{route('upload_img_cat')}}",
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
        var name    = $('[data-name="name"]').val();
        var price   = $('[data-name="price"]').val();
        var foto    = $('[data-name="img"]').val();

        $.ajax({
            type: "POST",
            url: "{{ route('addcategory') }}",
            data: {name:name,price:price,foto:foto},
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
