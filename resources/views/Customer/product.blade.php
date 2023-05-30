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
                    <a href="" class="text-muted text-hover-primary">Product</a>
                </li>
                <li class="breadcrumb-item text-muted">List Product </li>
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

        <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-10" id="myTab">
            <li class="nav-item">
                <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#tabs_content_all">ALL</a>
            </li>

            @foreach ($arr as $key => $val)
                <li class="nav-item">
                    <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#tabs_content_{{$val->id}}">{{strtoupper($val->name)}}</a>
                </li>
            @endforeach

            {{-- <li class="nav-item">
                <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#tabs_content_own">CREATE YOUR OWN</a>
            </li> --}}

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
                                        @php
                                            $wsh    = json_decode($val->wishlist);
                                        @endphp
                                        @if (in_array($idn_user->id, $wsh))
                                            <a href="#" class="btn btn-danger me-3" data-name="clikc_unlike" data-item="{{$val->id}},{{ucwords($val->name)}}"><i class="bi bi-heart-fill"></i></a>
                                        @else
                                            <a href="#" class="btn btn-outline btn-outline-danger btn-active-light-danger me-3" data-name="clikc_like" data-item="{{$val->id}},{{ucwords($val->name)}}"><i class="bi bi-heart-fill"></i></a>
                                        @endif
                                        <a href="#" class="btn btn btn-success me-3" data-name="view_data" data-item="{{$val->id}},{{ucwords($val->name)}}">View</a>                                        
                                        <a href="#" class="btn btn btn-info me-3" data-name="order_data" data-item="{{$val->id}},{{ucwords($val->name)}}">Order</a>                                                            
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
                                                @php
                                                    $wsh    = json_decode($v->wishlist);
                                                @endphp
                                                @if (in_array($idn_user->id, $wsh))
                                                    <a href="#" class="btn btn-danger me-3" data-name="clikc_unlike" data-item="{{$v->id}},{{ucwords($v->name)}}"><i class="bi bi-heart-fill"></i></a>
                                                @else
                                                    <a href="#" class="btn btn-outline btn-outline-danger btn-active-light-danger me-3" data-name="clikc_like" data-item="{{$v->id}},{{ucwords($v->name)}}"><i class="bi bi-heart-fill"></i></a>
                                                @endif
                                                <a href="#" class="btn btn btn-success me-3" data-name="view_data" data-item="{{$v->id}},{{ucwords($v->name)}}">View</a>                                        
                                                <a href="#" class="btn btn btn-info me-3" data-name="order_data" data-item="{{$v->id}},{{ucwords($v->name)}}">Order</a>                                                                        
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            @endforeach

            {{-- <div class="tab-pane fade" id="tabs_content_own" role="tab-panel">
                <div class="row">
                    <div class="col-4">
                        <div class="row">

                            <div class="col-12">
                                <div class="card  card-xxl-stretch mb-xl-3">
                                    <!--begin::Header-->
                                    <div class="card-header border-0 pt-5 pb-3">
                                        <!--begin::Heading-->
                                        <h3 class="card-title align-items-start flex-column">
                                            <span class="card-label fw-bolder text-gray-800 fs-2">Category</span>
                                        </h3>
                                        <!--end::Heading-->
                                    </div>
                                    <!--end::Header-->
                                
                                    <!--begin::Body-->
                                    <div class="card-body mh-200px scroll-y">
                                        <!--begin::Table-->
                                        <div class="table-responsive">
                                            <table class="table align-middle table-row-bordered table-row-dashed gy-5" id="kt_table_widget_1">
                                                <tbody>
                                                    @foreach ($arr as $key => $val)
                                                        <tr>
                                                            <td class="p-0">
                                                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                                    <input class="form-check-input cursor-pointer" type="radio" name="category_own" value="">
                                                                </div>
                                                            </td>
                                                            <td class="p-0">
                                                                <div class="d-flex align-items-center">
                                                                    <div class="symbol symbol-50px me-2">
                                                                        <span class="symbol-label">
                                                                            <img alt="" class="w-100" src="{{asset('img/category').'/'.$val->foto}}">
                                                                        </span>
                                                                    </div>
                                    
                                                                    <div class="ps-3">
                                                                        <a href="#" class="text-gray-800 fw-bolder fs-5 text-hover-primary mb-1">{{strtoupper($val->name)}}</a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="p-0">{{ 'Rp '. number_format($val->price, 0, ',', '.') }}</td>
                                                        </tr>
                                                    @endforeach

                                                </tbody>
                                            </table>
                                        </div>
                                        <!--end::Table-->
                                    </div>
                                    <!--end::Body-->

                                    <div class="card-footer">

                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="card  card-xxl-stretch mb-xl-3">
                                    <!--begin::Header-->
                                    <div class="card-header border-0 pt-5 pb-3">
                                        <!--begin::Heading-->
                                        <h3 class="card-title align-items-start flex-column">
                                            <span class="card-label fw-bolder text-gray-800 fs-2">Bread</span>
                                        </h3>
                                        <!--end::Heading-->
                                    </div>
                                    <!--end::Header-->
                                
                                    <!--begin::Body-->
                                    <div class="card-body mh-200px scroll-y">
                                        <!--begin::Table-->
                                        <div class="table-responsive">
                                            <table class="table align-middle table-row-bordered table-row-dashed gy-5" id="kt_table_widget_1">
                                                <tbody>
                                
                                                    @foreach ($bahan as $key => $val)
                                                        @if ($val->type_bahan == 1)
                                                            <tr>
                                                                <td class="p-0">
                                                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                                        <input class="form-check-input cursor-pointer" type="checkbox" name="bread_own" value="">
                                                                    </div>
                                                                </td>
                                                                <td class="p-0">
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="symbol symbol-50px me-2">
                                                                            <span class="symbol-label">
                                                                                <img alt="" class="w-100" src="{{asset('img/bahan').'/'.$val->foto}}">
                                                                            </span>
                                                                        </div>
                                        
                                                                        <div class="ps-3">
                                                                            <a href="#" class="text-gray-800 fw-bolder fs-5 text-hover-primary mb-1">{{strtoupper($val->name)}}</a>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="p-0">{{ 'Rp '. number_format($val->price, 0, ',', '.') }}</td>
                                                            </tr>
                                                        @endif
                                                    @endforeach

                                                </tbody>
                                            </table>
                                        </div>
                                        <!--end::Table-->
                                    </div>
                                    <!--end::Body-->

                                    <div class="card-footer">

                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="card  card-xxl-stretch mb-xl-3">
                                    <!--begin::Header-->
                                    <div class="card-header border-0 pt-5 pb-3">
                                        <!--begin::Heading-->
                                        <h3 class="card-title align-items-start flex-column">
                                            <span class="card-label fw-bolder text-gray-800 fs-2">Greens</span>
                                        </h3>
                                        <!--end::Heading-->
                                    </div>
                                    <!--end::Header-->
                                
                                    <!--begin::Body-->
                                    <div class="card-body py-0">
                                        <!--begin::Table-->
                                        <div class="table-responsive">
                                            <table class="table align-middle table-row-bordered table-row-dashed gy-5" id="kt_table_widget_1">
                                                <tbody>
                                
                                                    @foreach ($bahan as $key => $val)
                                                        @if ($val->type_bahan == 2)
                                                            <tr>
                                                                <td class="p-0">
                                                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                                        <input class="form-check-input cursor-pointer" type="checkbox" name="bread_own" value="">
                                                                    </div>
                                                                </td>
                                                                <td class="p-0">
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="symbol symbol-50px me-2">
                                                                            <span class="symbol-label">
                                                                                <img alt="" class="w-100" src="{{asset('img/bahan').'/'.$val->foto}}">
                                                                            </span>
                                                                        </div>
                                        
                                                                        <div class="ps-3">
                                                                            <a href="#" class="text-gray-800 fw-bolder fs-5 text-hover-primary mb-1">{{strtoupper($val->name)}}</a>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="p-0">{{ 'Rp '. number_format($val->price, 0, ',', '.') }}</td>
                                                            </tr>
                                                        @endif
                                                    @endforeach

                                                </tbody>
                                            </table>
                                        </div>
                                        <!--end::Table-->
                                    </div>
                                    <!--end::Body-->
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="card  card-xxl-stretch mb-xl-3">
                                    <!--begin::Header-->
                                    <div class="card-header border-0 pt-5 pb-3">
                                        <!--begin::Heading-->
                                        <h3 class="card-title align-items-start flex-column">
                                            <span class="card-label fw-bolder text-gray-800 fs-2">Toppings</span>
                                        </h3>
                                        <!--end::Heading-->
                                    </div>
                                    <!--end::Header-->
                                
                                    <!--begin::Body-->
                                    <div class="card-body py-0">
                                        <!--begin::Table-->
                                        <div class="table-responsive">
                                            <table class="table align-middle table-row-bordered table-row-dashed gy-5" id="kt_table_widget_1">
                                                <tbody>
                                
                                                    @foreach ($bahan as $key => $val)
                                                        @if ($val->type_bahan == 3)
                                                            <tr>
                                                                <td class="p-0">
                                                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                                        <input class="form-check-input cursor-pointer" type="checkbox" name="bread_own" value="">
                                                                    </div>
                                                                </td>
                                                                <td class="p-0">
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="symbol symbol-50px me-2">
                                                                            <span class="symbol-label">
                                                                                <img alt="" class="w-100" src="{{asset('img/bahan').'/'.$val->foto}}">
                                                                            </span>
                                                                        </div>
                                        
                                                                        <div class="ps-3">
                                                                            <a href="#" class="text-gray-800 fw-bolder fs-5 text-hover-primary mb-1">{{strtoupper($val->name)}}</a>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="p-0">{{ 'Rp '. number_format($val->price, 0, ',', '.') }}</td>
                                                            </tr>
                                                        @endif
                                                    @endforeach

                                                </tbody>
                                            </table>
                                        </div>
                                        <!--end::Table-->
                                    </div>
                                    <!--end::Body-->
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="card  card-xxl-stretch mb-xl-3">
                                    <!--begin::Header-->
                                    <div class="card-header border-0 pt-5 pb-3">
                                        <!--begin::Heading-->
                                        <h3 class="card-title align-items-start flex-column">
                                            <span class="card-label fw-bolder text-gray-800 fs-2">Dressings</span>
                                        </h3>
                                        <!--end::Heading-->
                                    </div>
                                    <!--end::Header-->
                                
                                    <!--begin::Body-->
                                    <div class="card-body py-0">
                                        <!--begin::Table-->
                                        <div class="table-responsive">
                                            <table class="table align-middle table-row-bordered table-row-dashed gy-5" id="kt_table_widget_1">
                                                <tbody>
                                
                                                    @foreach ($bahan as $key => $val)
                                                        @if ($val->type_bahan == 4)
                                                            <tr>
                                                                <td class="p-0">
                                                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                                        <input class="form-check-input cursor-pointer" type="checkbox" name="bread_own" value="">
                                                                    </div>
                                                                </td>
                                                                <td class="p-0">
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="symbol symbol-50px me-2">
                                                                            <span class="symbol-label">
                                                                                <img alt="" class="w-100" src="{{asset('img/bahan').'/'.$val->foto}}">
                                                                            </span>
                                                                        </div>
                                        
                                                                        <div class="ps-3">
                                                                            <a href="#" class="text-gray-800 fw-bolder fs-5 text-hover-primary mb-1">{{strtoupper($val->name)}}</a>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="p-0">{{ 'Rp '. number_format($val->price, 0, ',', '.') }}</td>
                                                            </tr>
                                                        @endif
                                                    @endforeach

                                                </tbody>
                                            </table>
                                        </div>
                                        <!--end::Table-->
                                    </div>
                                    <!--end::Body-->
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-8">
                        <div class="card  card-xxl-stretch mb-xl-3">
                            <!--begin::Header-->
                            <div class="card-header border-0 pt-5 pb-3">
                                <!--begin::Heading-->
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="card-label fw-bolder text-gray-800 fs-2">Nutrition total</span>
                                </h3>
                                <!--end::Heading-->
                            </div>
                            <!--end::Header-->
                        
                            <!--begin::Body-->
                            <div class="card-body">
                                <div class="row">
                                    <div class="row mb-3">
                                        <label class="col-lg-3 fw-semibold text-muted">Serving</label>
                                        <label class="col-lg-1 fw-semibold text-muted">:</label>
                                        <div class="col-lg-8 text-end">                    
                                            <span class="fw-bold fs-6 text-gray-800" id="total_serving_own">- g</span>                
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-lg-3 fw-semibold text-muted">Energy</label>
                                        <label class="col-lg-1 fw-semibold text-muted">:</label>
                                        <div class="col-lg-8 text-end">                    
                                            <span class="fw-bold fs-6 text-gray-800" id="total_energy_own">- kcals</span>                
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-lg-3 fw-semibold text-muted">Protein</label>
                                        <label class="col-lg-1 fw-semibold text-muted">:</label>
                                        <div class="col-lg-8 text-end">                    
                                            <span class="fw-bold fs-6 text-gray-800" id="total_protein_own">- g</span>                
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-lg-3 fw-semibold text-muted">Total Fat</label>
                                        <label class="col-lg-1 fw-semibold text-muted">:</label>
                                        <div class="col-lg-8 text-end">                    
                                            <span class="fw-bold fs-6 text-gray-800" id="total_fat_own">- g</span>                
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label class="col-lg-3 fw-semibold text-muted">Carbohydrate</label>
                                        <label class="col-lg-1 fw-semibold text-muted">:</label>
                                        <div class="col-lg-8 text-end">                    
                                            <span class="fw-bold fs-6 text-gray-800" id="total_carbohydrate_own">- g</span>                
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-footer">
                                <div class="d-flex justify-content-between w-100">
                                    <div class=" fw-semibold">
                                        <h4 class="text-gray-900 fw-bold">Rp. 40.0000</h4>
                                        <div class="fs-6 text-gray-700 "> Order Totals</div>
                                    </div>                     
                                    <a href="" class="btn btn btn-info me-3">Order</a>                                                                         
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
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
                            <label class="col-lg-3 fw-semibold text-muted">Energy</label>
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

{{-- Modal order Data --}}
<div class="modal fade" id="order_data" tabindex="-1" aria-modal="true" role="dialog">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
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
                    <h1 class="mb-3" data-name="name_view_data_order">-</h1>
                </div>
                <!--end::Heading-->

                <div class="row">
                    <div class="col-6 mb-8" id="image_view_order">

                    </div>
                    <div class="col-6 mb-8">

                        <div class="d-flex flex-column mb-8 fv-row">
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span class="required">QTY</span>
                            </label>
                            <input type="number" class="form-control form-control-solid" placeholder="QTY" data-name="qty" id="qty"/>
                        </div>

                            <input type="hidden" id="harga_order"/>
                            <input type="hidden" id="id_product_order">
                            <input type="hidden" id="id_meja_order">

                        <div class="d-flex flex-column mb-8 fv-row">
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span class="required">TOTAL</span>
                            </label>
                            <input type="text" class="form-control form-control-solid" placeholder="TOTAL" data-name="total" id="total" disabled/>
                        </div>

                        <div class="col-md-12 fv-row fv-plugins-icon-container mb-8">
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span class="required">Order Method</span>
                            </label>
                            <select name="order_method" data-name="order_method" id="order_method_order" data-control="select2" data-dropdown-parent="#order_data" class="form-select form-select-solid">
                                <option value="">-- Select Methode --</option>
                                <option value="1">Take Away</option>
                                <option value="2">Reservation</option>
                                <option value="3">Delivery</option>
                            </select>
                        </div>

                        <div class="col-md-12 fv-row fv-plugins-icon-container mb-8" data-name="show_payment_methode" style="display:none;">
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span class="required">Payment Method</span>
                            </label>
                            <select name="payment_method" data-name="payment_method" id="payment_method_order" data-control="select2" data-dropdown-parent="#order_data" class="form-select form-select-solid">
                                <option value="">-- Payment Method --</option>
                                <option value="1">Transfer</option>
                                <option value="2">OVO</option>
                                <option value="3">Dana</option>
                            </select>
                        </div>

                    </div>
                    <div class="col-12 mb-8" data-name="show_select_meja" style="display:none;">
                        <div class="row">
                            @foreach ($seat as $key => $val)
                                <div class="col-2" data-name="klik_meja" data-value="{{$val->id}}">
                                    <div class="card card-meja" data-status="st{{$val->status}}">
                                        {{$val->name}}
                                    </div>
                                </div> 
                            @endforeach
                        </div>
                    </div>

                    <div class="col-md-12 fv-row fv-plugins-icon-container mb-8">
                        <button class="btn btn btn-success w-100" data-name="create_order_data">Create Order</button>
                    </div>

                    <div class="col-12">
                        <div class="row mb-3">
                            <label class="col-lg-3 fw-semibold text-muted">Serving</label>
                            <label class="col-lg-1 fw-semibold text-muted">:</label>
                            <div class="col-lg-8 text-end">                    
                                <span class="fw-bold fs-6 text-gray-800" id="total_serving_order">- g</span>                
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-lg-3 fw-semibold text-muted">Energy</label>
                            <label class="col-lg-1 fw-semibold text-muted">:</label>
                            <div class="col-lg-8 text-end">                    
                                <span class="fw-bold fs-6 text-gray-800" id="total_energy_order">- kcals</span>                
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-lg-3 fw-semibold text-muted">Protein</label>
                            <label class="col-lg-1 fw-semibold text-muted">:</label>
                            <div class="col-lg-8 text-end">                    
                                <span class="fw-bold fs-6 text-gray-800" id="total_protein_order">- g</span>                
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-lg-3 fw-semibold text-muted">Total Fat</label>
                            <label class="col-lg-1 fw-semibold text-muted">:</label>
                            <div class="col-lg-8 text-end">                    
                                <span class="fw-bold fs-6 text-gray-800" id="total_fat_order">- g</span>                
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-lg-3 fw-semibold text-muted">Carbohydrate</label>
                            <label class="col-lg-1 fw-semibold text-muted">:</label>
                            <div class="col-lg-8 text-end">                    
                                <span class="fw-bold fs-6 text-gray-800" id="total_carbohydrate_order">- g</span>                
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-lg-3 fw-semibold text-muted">Price</label>
                            <label class="col-lg-1 fw-semibold text-muted">:</label>
                            <div class="col-lg-8 text-end">                    
                                <span class="fw-bold fs-6 text-gray-800" id="id_price_order">-</span>                
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-lg-3 fw-semibold text-muted">Description</label>
                            <label class="col-lg-9 fw-semibold text-muted">:</label>
                            <div class="col-lg-2"></div>
                            <div class="col-lg-10">                    
                                <span class="fw-bold fs-6 text-gray-800" id="id_description_order">-</span>                
                            </div>
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
                // console.log(data);
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
                $('#view_data').modal('show');
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

<script>
    $(document).on("click", '[data-name="klik_meja"]', function (e) {
        $(this).siblings().removeClass("klick");
        $(this).addClass("klick");
        var id  = $(this).attr("data-value");
        $('#id_meja_order').val(id);
    });

    function convertToAngka(rupiah) {
        return parseInt(rupiah.replace(/[^0-9]/g, ''));
    }

    function convertToRupiah(angka) {
        var rupiah = '';
        var angkarev = angka.toString().split('').reverse().join('');
        for (var i = 0; i < angkarev.length; i++) {
            if (i % 3 == 0) {
                rupiah += angkarev.substr(i, 3) + '.';
            }
        }
        return 'Rp. ' + rupiah.split('', rupiah.length - 1).reverse().join('');
    }

    $(document).ready(function() {
        $('#qty').on('keyup', function() {
            var qty     = parseFloat($('#qty').val());
            var harga   = parseFloat($('#harga_order').val());
            var hasil   = qty * harga;
            $('#total').val(convertToRupiah(hasil));
        });
    });

    $(document).on("change", "[data-name='order_method']", function (e) {
        var om  = $(this).val();
        // alert(om);
        if(om === '2'){
            $('[data-name="show_payment_methode"]').css('display', 'none');
            $('[data-name="show_select_meja"]').css('display', 'block');
        }else if(om === '3'){
            $('[data-name="show_payment_methode"]').css('display', 'block');
            $('[data-name="show_select_meja"]').css('display', 'none');
        }else{
            $('[data-name="show_payment_methode"]').css('display', 'none');
            $('[data-name="show_select_meja"]').css('display', 'none');
        }
    });

    $(document).on("click", "[data-name='order_data']", function (e) {
        $('.preloader').show();
        var id     = $(this).attr("data-item").split(",")[0];
        var name   = $(this).attr("data-item").split(",")[1];
        $('[data-name="name_view_data_order"]').text(name);
        $('#id_product_order').val(id);

        $.ajax({
            type: "POST",
            url: "{{ route('viewdataprod') }}",
            data: {id:id},
            cache: false,
            success: function(data) {
                // console.log(data);
                $('#image_view_order').html(data.foto);
                $('#id_price_order').text(data.price);
                $('#id_description_order').text(data.description);
                $('#total_serving_order').text(data.total_serving+' g');
                $('#total_energy_order').text(data.total_energy+' kcals');
                $('#total_protein_order').text(data.total_protein+' g');
                $('#total_fat_order').text(data.total_fat+' g');
                $('#total_carbohydrate_order').text(data.total_carbohydrate+' g');

                var priceconvert    = convertToAngka(data.price);
                $('#harga_order').val(priceconvert);
                $('#order_data').modal('show');
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

    $(document).on("click", "[data-name='create_order_data']", function (e) {
        $('.preloader').show();

        var id_product      = $('#id_product_order').val();
        var jns_product     = 1;
        var qty             = $('#qty').val();
        var harga_asl       = $('#total').val();
        var harga           = convertToAngka(harga_asl);
        var order_methode   = $('#order_method_order').val();
        var payment_methode = $('#payment_method_order').val();
        var id_meja         = $('#id_meja_order').val();

        $.ajax({
            type: "POST",
            url: "{{ route('createorder') }}",
            data: {id_product:id_product,jns_product:jns_product,qty:qty,harga:harga,order_methode:order_methode,payment_methode:payment_methode,id_meja:id_meja},
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
    $(document).on("click", "[data-name='clikc_like']", function (e) {
        $('.preloader').show();
        var id     = $(this).attr("data-item").split(",")[0];
        var name   = $(this).attr("data-item").split(",")[1];

        $.ajax({
            type: "POST",
            url: "{{ route('addwishlist') }}",
            data: {id:id},
            cache: false,
            success: function(data) {
                // console.log(data)
                $('.preloader').hide();
                Swal.fire({
                    position:'center',
                    title: 'Success Add Wishlist '+ name,
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