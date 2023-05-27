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

        <!--begin::Card toolbar-->
        <div class="card-toolbar d-flex flex-row-fluid justify-content-end gap-5">
            <!--begin::Add product-->
            <a href="#" class="btn btn-primary" data-name="add_data">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
                </svg>
                Add Product
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

        <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-10" id="myTab">
            <li class="nav-item">
                <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#tabs_content_all">ALL</a>
            </li>

            @foreach ($arr as $key => $val)
                <li class="nav-item">
                    <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#tabs_content_{{$val->id}}">{{strtoupper($val->name)}}</a>
                </li>
            @endforeach
        </ul>
        <!--begin::Tab content-->
        <div class="tab-content">

            <div class="tab-pane fade  show active" id="tabs_content_all" role="tab-panel">
                <div class="row">
                    @foreach ($product as $key => $val)
                        <div class="col-3">
                            <div class="card  card-xl-stretch mb-xl-8">
                                <div class="card-header align-items-center border-0 mt-5">
                                    <span class="fw-bolder text-dark fs-2">{{ucwords($val->name)}}</span>
                                </div>
                                <div class="card-body pt-0">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="position-relative">
                                                <img src="{{asset('img/product').'/'.$val->img}}" class="w-100" alt="">
                                                <div class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-body h-20px w-20px"></div>
                                            </div>                                        
                                        </div>
                                        <div class="col-12">
                                            
                                            <div class="row mb-3">
                                                <label class="col-lg-5 fw-semibold text-muted">Price</label>
                                                <label class="col-lg-1 fw-semibold text-muted">:</label>
                                                <div class="col-lg-6 text-end">                    
                                                    <span class="fw-bold fs-6 text-gray-800">{{ 'Rp '. number_format($val->price, 0, ',', '.') }}</span>                
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label class="col-lg-5 fw-semibold text-muted">Description</label>
                                                <label class="col-lg-7 fw-semibold text-muted">:</label>
                                                <div class="col-lg-2"></div>
                                                <div class="col-lg-10">                    
                                                    <span class="fw-bold fs-6 text-gray-800">{{$val->description}}</span>                
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="d-flex justify-content-between w-100">
                                        <a href="#" class="btn btn btn-success me-3" data-name="view_data" data-item="{{$val->id}},{{ucwords($val->name)}}">View</a>                                        
                                        <button data-name="edit_data" class="btn btn btn-info me-3" data-item="{{$val->id}},{{$val->name}}">Edit</button>
                                        <button data-name="delete_data" class="btn btn-danger" data-item="{{$val->id}},{{$val->name}}">Delete</button>                                                                      
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            @foreach ($arr as $key => $val)
                <div class="tab-pane fade" id="tabs_content_{{$val->id}}" role="tab-panel">
                    <div class="row">
                        @foreach ($product as $k => $v)
                            @if ($v->id_category == $val->id)
                                <div class="col-3">
                                    <div class="card  card-xl-stretch mb-xl-8">
                                        <div class="card-header align-items-center border-0 mt-5">
                                            <span class="fw-bolder text-dark fs-2">{{ucwords($v->name)}}</span>
                                        </div>
                                        <div class="card-body pt-0">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="position-relative">
                                                        <img src="{{asset('img/product').'/'.$v->img}}" class="w-100" alt="">
                                                        <div class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-body h-20px w-20px"></div>
                                                    </div>                                        
                                                </div>
                                                <div class="col-12">
                                                    
                                                    <div class="row mb-3">
                                                        <label class="col-lg-5 fw-semibold text-muted">Price</label>
                                                        <label class="col-lg-1 fw-semibold text-muted">:</label>
                                                        <div class="col-lg-6 text-end">                    
                                                            <span class="fw-bold fs-6 text-gray-800">{{ 'Rp '. number_format($v->price, 0, ',', '.') }}</span>                
                                                        </div>
                                                    </div>

                                                    <div class="row mb-3">
                                                        <label class="col-lg-5 fw-semibold text-muted">Description</label>
                                                        <label class="col-lg-7 fw-semibold text-muted">:</label>
                                                        <div class="col-lg-2"></div>
                                                        <div class="col-lg-10">                    
                                                            <span class="fw-bold fs-6 text-gray-800">{{$v->description}}</span>                
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="d-flex justify-content-between w-100">
                                                <a href="#" class="btn btn btn-success me-3" data-name="view_data" data-item="{{$v->id}},{{ucwords($v->name)}}">View</a>                                        
                                                <button data-name="edit_data" class="btn btn btn-info me-3" data-item="{{$val->id}},{{$val->name}}">Edit</button>
                                                <button data-name="delete_data" class="btn btn-danger" data-item="{{$val->id}},{{$val->name}}">Delete</button>                                                                    
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
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

                <div class="row">

                    <div class="col-md-12 fv-row fv-plugins-icon-container mb-8">
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">CATEGORY</span>
                        </label>
                        <select name="category_id" data-name="id_category" data-control="select2" data-dropdown-parent="#add_data" data-placeholder="Select a Category..." class="form-select form-select-solid">
                            <option value="">Select a Category...</option>
                            @foreach ($arr as $key => $val)
                                <option value="{{$val->id}}">{{ucwords($val->name)}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-12 d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">NAME</span>
                        </label>
                        <input type="text" class="form-control form-control-solid" placeholder="Name" name="name" id="name" data-name="name"/>
                    </div>

                    <div class="col-md-6 fv-row fv-plugins-icon-container mb-8">
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">BREAD</span>
                        </label>
                        <select name="bread[]" data-name="bread[]" multiple="multiple" data-control="select2" data-dropdown-parent="#add_data" data-placeholder="Select a Bread..." class="form-select form-select-solid">
                            <option value="">Select a Bread...</option>
                            @foreach ($bahan as $key => $val)
                                @if ($val->type_bahan == 1)
                                    <option value="{{$val->id}}">{{ucwords($val->name)}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-6 fv-row fv-plugins-icon-container mb-8">
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">GREENS</span>
                        </label>
                        <select name="greens[]" data-name="greens[]" multiple="multiple" data-control="select2" data-dropdown-parent="#add_data" data-placeholder="Select a Bread..." class="form-select form-select-solid">
                            <option value="">Select a Greens...</option>
                            @foreach ($bahan as $key => $val)
                                @if ($val->type_bahan == 2)
                                    <option value="{{$val->id}}">{{ucwords($val->name)}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-6 fv-row fv-plugins-icon-container mb-8">
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">TOPPINGS</span>
                        </label>
                        <select name="toppings[]" data-name="toppings[]" multiple="multiple" data-control="select2" data-dropdown-parent="#add_data" data-placeholder="Select a Bread..." class="form-select form-select-solid">
                            <option value="">Select a Toppings...</option>
                            @foreach ($bahan as $key => $val)
                                @if ($val->type_bahan == 3)
                                    <option value="{{$val->id}}">{{ucwords($val->name)}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-6 fv-row fv-plugins-icon-container mb-8">
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">DRESSINGS</span>
                        </label>
                        <select name="dressings[]" data-name="dressings[]" multiple="multiple" data-control="select2" data-dropdown-parent="#add_data" data-placeholder="Select a Bread..." class="form-select form-select-solid">
                            <option value="">Select a Dressings...</option>
                            @foreach ($bahan as $key => $val)
                                @if ($val->type_bahan == 4)
                                    <option value="{{$val->id}}">{{ucwords($val->name)}}</option>
                                @endif
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

<div class="modal fade" id="edit_data" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <div class="modal-content">
            <div class="modal-header" id="">
                <h2>Edit Product</h2>
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

                <div class="row">

                    <div class="col-md-12 d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">NAME</span>
                        </label>
                        <input type="text" class="form-control form-control-solid" placeholder="Name" name="edit_name"/>
                        <input type="hidden" name="edit_id">
                    </div>

                    <div class="col-md-6 fv-row fv-plugins-icon-container mb-8">
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">BREAD</span>
                        </label>
                        <select name="edit_bread[]" id="edit_bread" multiple="multiple" data-control="select2" data-dropdown-parent="#edit_data" class="form-select form-select-solid">
                            @foreach ($bahan as $key => $val)
                                @if ($val->type_bahan == 1)
                                    <option value="{{$val->id}}">{{ucwords($val->name)}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-6 fv-row fv-plugins-icon-container mb-8">
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">GREENS</span>
                        </label>
                        <select name="edit_greens[]" id="edit_greens" multiple="multiple" data-control="select2" data-dropdown-parent="#edit_data" class="form-select form-select-solid">
                            @foreach ($bahan as $key => $val)
                                @if ($val->type_bahan == 2)
                                    <option value="{{$val->id}}">{{ucwords($val->name)}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-6 fv-row fv-plugins-icon-container mb-8">
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">TOPPINGS</span>
                        </label>
                        <select name="edit_toppings[]" id="edit_toppings" multiple="multiple" data-control="select2" data-dropdown-parent="#edit_data" class="form-select form-select-solid">
                            @foreach ($bahan as $key => $val)
                                @if ($val->type_bahan == 3)
                                    <option value="{{$val->id}}">{{ucwords($val->name)}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-6 fv-row fv-plugins-icon-container mb-8">
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">DRESSINGS</span>
                        </label>
                        <select name="edit_dressings[]" id="edit_dressings" multiple="multiple" data-control="select2" data-dropdown-parent="#edit_data" class="form-select form-select-solid">
                            @foreach ($bahan as $key => $val)
                                @if ($val->type_bahan == 4)
                                    <option value="{{$val->id}}" id="opt4_{{$val->id}}">{{ucwords($val->name)}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>

                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">PRICE</span>
                        </label>
                        <input type="text" class="form-control form-control-solid" placeholder="Price" name="edit_price" id="price"/>
                    </div>

                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">DESCRIPTION</span>
                        </label>
                        <textarea name="edit_description" id="description" rows="5" class="form-control form-control-solid" placeholder="Description"></textarea>
                    </div>

                    <div class="col-md-12 fv-row fv-plugins-icon-container">
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">FOTO</span>
                        </label>
                        <input type="file" class="form-control form-control-solid" id="edit_foto"/>
                    </div>

                </div>
            </div>
            <div class="modal-footer flex-end">
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

{{-- Show Data Product --}}
<div class="modal fade" id="view_data" tabindex="-1" aria-modal="true" role="dialog">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-xl">
        <!--begin::Modal content-->
        <div class="modal-content rounded">
            <!--begin::Modal header-->
            <div class="modal-header justify-content-end border-0 pb-0">
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                    <span class="svg-icon svg-icon-1"><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                transform="rotate(-45 6 17.3137)" fill="currentColor"></rect>
                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)"
                                fill="currentColor"></rect>
                        </svg>

                    </span>
                    <!--end::Svg Icon-->
                </div>
                <!--end::Close-->
            </div>
            <!--end::Modal header-->

            <!--begin::Modal body-->
            <div class="modal-body pt-0 pb-15 px-5 px-xl-20">
                <!--begin::Heading-->
                <div class="mb-13 text-center">
                    <h1 class="mb-3" data-name="name_view">-</h1>
                </div>
                <!--end::Heading-->

                <div class="row">
                    <div class="col-4 mb-10" id="image_view">

                    </div>

                    <div class="col-8 mb-10">
                        <div class="row mb-3">
                            <label class="col-lg-3 fw-semibold text-muted">Serving</label>
                            <label class="col-lg-1 fw-semibold text-muted">:</label>
                            <div class="col-lg-8 text-end">                    
                                <span class="fw-bold fs-6 text-gray-800" id="total_serving">- g</span>                
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-lg-3 fw-semibold text-muted">description</label>
                            <label class="col-lg-1 fw-semibold text-muted">:</label>
                            <div class="col-lg-8 text-end">                    
                                <span class="fw-bold fs-6 text-gray-800" id="total_energy">- kcals</span>                
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-lg-3 fw-semibold text-muted">Protein</label>
                            <label class="col-lg-1 fw-semibold text-muted">:</label>
                            <div class="col-lg-8 text-end">                    
                                <span class="fw-bold fs-6 text-gray-800" id="total_protein">- g</span>                
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-lg-3 fw-semibold text-muted">Total Fat</label>
                            <label class="col-lg-1 fw-semibold text-muted">:</label>
                            <div class="col-lg-8 text-end">                    
                                <span class="fw-bold fs-6 text-gray-800" id="total_fat">- g</span>                
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-lg-3 fw-semibold text-muted">Carbohydrate</label>
                            <label class="col-lg-1 fw-semibold text-muted">:</label>
                            <div class="col-lg-8 text-end">                    
                                <span class="fw-bold fs-6 text-gray-800" id="total_carbohydrate">- g</span>                
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-lg-3 fw-semibold text-muted">Price</label>
                            <label class="col-lg-1 fw-semibold text-muted">:</label>
                            <div class="col-lg-8 text-end">                    
                                <span class="fw-bold fs-6 text-gray-800" id="id_price">-</span>                
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-lg-3 fw-semibold text-muted">Description</label>
                            <label class="col-lg-9 fw-semibold text-muted">:</label>
                            <div class="col-lg-2"></div>
                            <div class="col-lg-10">                    
                                <span class="fw-bold fs-6 text-gray-800" id="id_description">-</span>                
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="mb-13 text-center">
                            <h1>Ingredients</h1>
                        </div>
                        <h4 class="fw-bold d-flex align-items-center text-dark">
                            Bread
                        </h4>
                        <div class="table-responsive mb-8">
                            <table class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer" id="kt_ecommerce_products_table">
                                <!--begin::Table head-->
                                <thead>
                                    <!--begin::Table row-->
                                    <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                        <th class="">No</th>
                                        <th class="">Foto</th>
                                        <th class="">Name</th>
                                        <th class="text-center">Serving</th>
                                        <th class="text-center">Energy</th>
                                        <th class="text-center">Protein</th>
                                        <th class="text-center">Total Fat</th>
                                        <th class="text-center">Carbohydrate</th>
                                    </tr>
                                    <!--end::Table row-->
                                </thead>
                                <!--end::Table head-->
                        
                                <!--begin::Table body-->
                                <tbody class="fw-semibold text-gray-600" id="data_bread">
                                    {{-- <tr>
                                        <td>1</td>
                                        <td>
                                            <img src="{{asset('img/bahan').'/'.'17536.jpg'}}" alt="" style="width: 4rem">
                                        </td>
                                        <td>Organic Romaine</td>
                                        <td class="text-center">120 g</td>
                                        <td class="text-center">20.0 kcals</td>
                                        <td class="text-center">1.0 g</td>
                                        <td class="text-center">0 g</td>
                                        <td class="text-center">4.0 g</td>
                                    </tr> --}}
                                </tbody>
                                <!--end::Table body-->
                            </table>
                        </div>

                        <h4 class="fw-bold d-flex align-items-center text-dark">
                            Greens
                        </h4>
                        <div class="table-responsive mb-8">
                            <table class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer" id="kt_ecommerce_products_table">
                                <!--begin::Table head-->
                                <thead>
                                    <!--begin::Table row-->
                                    <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                        <th class="">No</th>
                                        <th class="">Foto</th>
                                        <th class="">Name</th>
                                        <th class="text-center">Serving</th>
                                        <th class="text-center">Energy</th>
                                        <th class="text-center">Protein</th>
                                        <th class="text-center">Total Fat</th>
                                        <th class="text-center">Carbohydrate</th>
                                    </tr>
                                    <!--end::Table row-->
                                </thead>
                                <!--end::Table head-->
                        
                                <!--begin::Table body-->
                                <tbody class="fw-semibold text-gray-600" id="data_greens">
                                    {{-- <tr>
                                        <td>1</td>
                                        <td>
                                            <img src="{{asset('img/bahan').'/'.'17536.jpg'}}" alt="" style="width: 4rem">
                                        </td>
                                        <td>Organic Romaine</td>
                                        <td class="text-center">120 g</td>
                                        <td class="text-center">20.0 kcals</td>
                                        <td class="text-center">1.0 g</td>
                                        <td class="text-center">0 g</td>
                                        <td class="text-center">4.0 g</td>
                                    </tr> --}}
                                </tbody>
                                <!--end::Table body-->
                            </table>
                        </div>

                        <h4 class="fw-bold d-flex align-items-center text-dark">
                            Toppings
                        </h4>
                        <div class="table-responsive mb-8">
                            <table class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer" id="kt_ecommerce_products_table">
                                <!--begin::Table head-->
                                <thead>
                                    <!--begin::Table row-->
                                    <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                        <th class="">No</th>
                                        <th class="">Foto</th>
                                        <th class="">Name</th>
                                        <th class="text-center">Serving</th>
                                        <th class="text-center">Energy</th>
                                        <th class="text-center">Protein</th>
                                        <th class="text-center">Total Fat</th>
                                        <th class="text-center">Carbohydrate</th>
                                    </tr>
                                    <!--end::Table row-->
                                </thead>
                                <!--end::Table head-->
                        
                                <!--begin::Table body-->
                                <tbody class="fw-semibold text-gray-600" id="data_toppings">
                                    {{-- <tr>
                                        <td>1</td>
                                        <td>
                                            <img src="{{asset('img/bahan').'/'.'17536.jpg'}}" alt="" style="width: 4rem">
                                        </td>
                                        <td>Organic Romaine</td>
                                        <td class="text-center">120 g</td>
                                        <td class="text-center">20.0 kcals</td>
                                        <td class="text-center">1.0 g</td>
                                        <td class="text-center">0 g</td>
                                        <td class="text-center">4.0 g</td>
                                    </tr> --}}
                                </tbody>
                                <!--end::Table body-->
                            </table>
                        </div>

                        <h4 class="fw-bold d-flex align-items-center text-dark">
                            Dressings
                        </h4>
                        <div class="table-responsive mb-8">
                            <table class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer" id="kt_ecommerce_products_table">
                                <!--begin::Table head-->
                                <thead>
                                    <!--begin::Table row-->
                                    <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                        <th class="">No</th>
                                        <th class="">Foto</th>
                                        <th class="">Name</th>
                                        <th class="text-center">Serving</th>
                                        <th class="text-center">Energy</th>
                                        <th class="text-center">Protein</th>
                                        <th class="text-center">Total Fat</th>
                                        <th class="text-center">Carbohydrate</th>
                                    </tr>
                                    <!--end::Table row-->
                                </thead>
                                <!--end::Table head-->
                        
                                <!--begin::Table body-->
                                <tbody class="fw-semibold text-gray-600" id="data_dressings">
                                    {{-- <tr>
                                        <td>1</td>
                                        <td>
                                            <img src="{{asset('img/bahan').'/'.'17536.jpg'}}" alt="" style="width: 4rem">
                                        </td>
                                        <td>Organic Romaine</td>
                                        <td class="text-center">120 g</td>
                                        <td class="text-center">20.0 kcals</td>
                                        <td class="text-center">1.0 g</td>
                                        <td class="text-center">0 g</td>
                                        <td class="text-center">4.0 g</td>
                                    </tr> --}}
                                </tbody>
                                <!--end::Table body-->
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
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
        $('[data-name="bread"]').val('').trigger("change");
        $('[data-name="greens"]').val('').trigger("change");
        $('[data-name="toppings"]').val('').trigger("change");
        $('[data-name="dressings"]').val('').trigger("change");
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
        var id_category  = $('[data-name="id_category"]').val();
        var name         = $('[data-name="name"]').val();
        var price        = $('[data-name="price"]').val();
        var description  = $('[data-name="description"]').val();
        var img          = $('[data-name="img"]').val();
        var bread        = $('[data-name="bread[]"]').val();
        var greens       = $('[data-name="greens[]"]').val();
        var toppings     = $('[data-name="toppings[]"]').val();
        var dressings    = $('[data-name="dressings[]"]').val();
        
        $.ajax({
            type: "POST",
            url: "{{ route('addproduct') }}",
            data: {id_category:id_category,name:name,price:price,description:description,img:img,bread:bread,greens:greens,toppings:toppings,dressings:dressings},
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

<script>
    $(document).on("click", "[data-name='view_data']", function (e) {
        $('.preloader').show();
        var id     = $(this).attr("data-item").split(",")[0];
        var name   = $(this).attr("data-item").split(",")[1];
        $('[data-name="name_view"]').text(name);

        $.ajax({
            type: "POST",
            url: "{{ route('viewdataprod') }}",
            data: {id:id},
            cache: false,
            success: function(data) {
                console.log(data);
                $('#image_view').html(data.foto);
                $('#id_price').text(data.price);
                $('#id_description').text(data.description);
                $('#data_bread').html(data.bread);
                $('#data_greens').html(data.greens);
                $('#data_toppings').html(data.toppings);
                $('#data_dressings').html(data.dressings);
                $('#total_serving').text(data.total_serving+' g');
                $('#total_energy').text(data.total_energy+' kcals');
                $('#total_protein').text(data.total_protein+' g');
                $('#total_fat').text(data.total_fat+' g');
                $('#total_carbohydrate').text(data.total_carbohydrate+' g');
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

        $('#view_data').modal('show');
    });
</script>

<script>
    $(document).on("click", "[data-name='delete_data']", function (e) {
        var id      = $(this).attr("data-item").split(",")[0];
        var name    = $(this).attr("data-item").split(",")[1];
        var whr     = "id";
        var table   = "mst_product";
        
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

{{-- Action Edit --}}
<script>
    $(document).on("click", "[data-name='edit_data']", function (e) {
        var id      = $(this).attr("data-item").split(",")[0];
        var name    = $(this).attr("data-item").split(",")[1];
        var whr     = "id";
        var table   = "mst_product";

        $.ajax({
            type: "POST",
            url: "{{route('showdata')}}",
            data: {id:id,table:table,whr:whr},
            cache: false,
            success: function (res) {
                var sl1 = res.row.bread;
                var sl2 = res.row.greens;
                var sl3 = res.row.toppings;
                var sl4 = res.row.dressings;

                var ar_sl1  = new Set(sl1);
                var ard_sl1 = Array.from(ar_sl1);

                var ar_sl2  = new Set(sl2);
                var ard_sl2 = Array.from(ar_sl2);

                var ar_sl3  = new Set(sl3);
                var ard_sl3 = Array.from(ar_sl3);

                var ar_sl4  = new Set(sl4);
                var ard_sl4 = Array.from(ar_sl4);

                // console.log(sl2)
                $('[name="edit_id"]').val(res.row.id);
                $('[name="edit_name"]').val(res.row.name);
                $('#edit_bread').val(ard_sl1).trigger("change");
                $('#edit_greens').val(ard_sl2).trigger("change");
                $('#edit_toppings').val(ard_sl3).trigger("change");
                $('#edit_dressings').val(ard_sl4).trigger("change");
                $('[name="edit_price"]').val(res.row.price);
                $('[name="edit_description"]').val(res.row.description);

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
        var id           = $('[name="edit_id"]').val();
        var name         = $('[name="edit_name"]').val();
        var price        = $('[name="edit_price"]').val();
        var description  = $('[name="edit_description"]').val();
        var bread        = $('[name="edit_bread[]"]').val();
        var greens       = $('[name="edit_greens[]"]').val();
        var toppings     = $('[name="edit_toppings[]"]').val();
        var dressings    = $('[name="edit_dressings[]"]').val();

        if(bread == ''){
            bread = '[]';
        }else{
            bread = JSON.stringify(bread);
        }

        if(greens == ''){
            greens = '[]';
        }else{
            greens = JSON.stringify(greens);
        }

        if(toppings == ''){
            toppings = '[]';
        }else{
            toppings = JSON.stringify(toppings);
        }

        if(dressings == ''){
            dressings = '[]';
        }else{
            dressings = JSON.stringify(dressings);
        }

        var dats        = {name:name,price:price,description:description,bread:bread,greens:greens,toppings:toppings,dressings:dressings};
        var table       = "mst_product";
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
            var field        = 'img';
            var table        = 'mst_product';
            var folder       = 'product';
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

@stop