@extends('main')
@section('content')
<div class="toolbar" id="kt_toolbar">
    <div class=" container-fluid  d-flex flex-stack flex-wrap flex-sm-nowrap">
        <!--begin::Info-->
        <div class="d-flex flex-column align-items-start justify-content-center flex-wrap me-2">
            <!--begin::Title-->
            <h1 class="text-dark fw-bold my-1 fs-2">
                Product <small class="text-muted fs-6 fw-normal ms-1"></small>
            </h1>
            <!--end::Title-->

            <!--begin::Breadcrumb-->
            <ul class="breadcrumb fw-semibold fs-base my-1">
                <li class="breadcrumb-item text-muted">
                    <a href="" class="text-muted text-hover-primary">Master Data</a>
                </li>
                <li class="breadcrumb-item text-muted">Product </li>
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
        
        <div class="row">
            <div class="col-12 mb-10">
                <a href="#" class="btn btn-primary" data-name="add_data">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"></path>
                    </svg>
                    Add Product
                </a>
            </div>
            @foreach ($arr as $key => $val)           
                <div class="col-12 mb-10">
                    <div class="d-flex flex-wrap flex-stack mb-6" data-select2-id="select2-data-189-0rfu">
                        <h4 class="text-gray-800 fw-bold my-2 mb-0  ">
                            {{strtoupper($val->name)}}
                        </h4>
                    </div>

                    <div class="row">
                        @foreach($product as $k => $v)
                            @if($v->id_category == $val->id)
                                
                                <div class="col-4">
                                    <div class="card h-lg-100">
                                        <!--begin::Card body-->
                                        <div class="card-body mb-0">
                                            <!--begin::Info-->
                                            <div class="d-flex align-items-start mb-7">
                                                <!--begin::Image-->
                                                <div class="overlay rounded overflow-hidden w-75px w-lg-125px flex-shrink-0 me-7">
                                                    <div class="overlay-wrapper rounded bg-light">
                                                        <img src="{{asset('img/product').'/'.$v->img}}" alt="image" class="rounded w-100">
                                                    </div>
                                                    <div class="overlay-layer bg-dark bg-opacity-10">
                                                        <a href="#" class="btn btn-sm btn-primary btn-shadow">Show</a>
                                                    </div>
                                                </div>
                                                <!--end::Image-->
                                    
                                                <!--begin::Wrapper-->
                                                <div class="flex-grow-1 d-flex align-items-start justify-content-between flex-wrap  py-24">
                                                    <!--begin::Details-->
                                                    <div class="d-flex flex-column align-items-start py-1 me-">
                                                        <a href="#" class="fs-3 text-dark text-hover-primary fw-bold mb-2">{{$v->name}}</a>
                                                        <div class="text-gray-400 fw-semibold fs-6 mb-4">
                                                            {{$v->description}}
                                                        </div>
                                                    </div>
                                                    <!--end::Dtails-->
                                    
                                                    <!--begin::Actions-->
                                                    <div class="d-flex justify-content-between w-100">
                                                        <a href="" class="btn btn btn-info me-3">Edit</a>
                                                        <span class="fw-bold text-gray-800 me-3  fs-3">{{ 'Rp '. number_format($v->price, 0, ',', '.') }}</span>
                                                    </div>
                                                    <!--end::Actions-->
                                                </div>
                                                <!--end::Wrapper-->
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Card body-->
                                    </div>
                                </div>

                            @endif
                        @endforeach
                    </div>
                    <hr>
                </div>
            @endforeach
        </div>

    </div>
</div>

<div class="modal fade" id="add_data" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <div class="modal-content">
            <div class="modal-header" id="">
                <h2>Add New Product</h2>
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
                    <input type="text" class="form-control form-control-solid" placeholder="Name" name="name" id="name" data-name="name"/>
                </div>

                <div class="col-md-12 fv-row fv-plugins-icon-container">
                    <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                        <span class="required">CATEGORY</span>
                    </label>
                    <select name="category_id" data-name="id_category" data-control="select2" data-dropdown-parent="#add_data" data-placeholder="Select a Category..." class="form-select form-select-solid">
                        <option value="">Select a Category...</option>
                        @foreach ($arr as $key => $val)
                            <option value="{{$val->id}}">{{$val->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="d-flex flex-column mb-8 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                        <span class="required">PRICE</span>
                    </label>
                    <input type="text" class="form-control form-control-solid" placeholder="Price" name="price" data-name="price" id="price"/>
                </div>

                <div class="d-flex flex-column mb-8 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                        <span class="required">DESCRIPTION</span>
                    </label>
                    <textarea name="description" data-name="description" id="description" rows="5" class="form-control form-control-solid" placeholder="Description"></textarea>
                </div>

                <div class="col-md-12 fv-row fv-plugins-icon-container">
                    <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                        <span class="required">FOTO</span>
                    </label>
                    <input type="file" class="form-control form-control-solid" name="add_image" id="foto"/>
                </div>

                <input type="hidden" id="foto_name" name="foto_name" data-name="img">
            </div>
            <div class="modal-footer flex-end">
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
        $('[data-name="id_category"]').val('').trigger("change");
        $('[data-name="name"]').val('');
        $('[data-name="price"]').val('');
        $('[data-name="description"]').val('');
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
                url: "{{route('upload_img_prod')}}",
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
    var name        = $('[data-name="name"]').val();
    var price       = $('[data-name="price"').val();
    var description = $('[data-name="description"').val();
    var foto        = $('[data-name="foto"').val();

    var id_category  = $('[data-name="id_category"]').val();
    var name         = $('[data-name="name"]').val();
    var price        = $('[data-name="price"]').val();
    var description  = $('[data-name="description"]').val();
    var img          = $('[data-name="img"]').val();
    
    $.ajax({
        type: "POST",
        url: "{{ route('addproduct') }}",
        data: {id_category:id_category,name:name,price:price,description:description,img:img},
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

@stop