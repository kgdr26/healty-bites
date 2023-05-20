@extends('main')
@section('content')

<div class="toolbar" id="kt_toolbar">
    <div class=" container-fluid  d-flex flex-stack flex-wrap flex-sm-nowrap">
        <!--begin::Info-->
        <div class="d-flex flex-column align-items-start justify-content-center flex-wrap me-2">
            <!--begin::Title-->
            <h1 class="text-dark fw-bold my-1 fs-2">
                Pesanan <small class="text-muted fs-6 fw-normal ms-1"></small>
            </h1>
            <!--end::Title-->

            <!--begin::Breadcrumb-->
            <ul class="breadcrumb fw-semibold fs-base my-1">
                <li class="breadcrumb-item text-muted">
                    <a href="" class="text-muted text-hover-primary">Produk</a>
                </li>
                <li class="breadcrumb-item text-muted">Pesanan </li>
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
                        <input type="text" data-search-table="search" class="form-control form-control-solid w-250px ps-14" placeholder="Search" />
                    </div>
                    <!--end::Search-->
                </div>
                <!--end::Card title-->
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
                            <th>KODE</th>
                            <th>NAME</th>
                            <th>HARGA</th>
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
                        @foreach ($arr as $key => $val)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$val->kode}}</td>
                                <td>{{strtoupper($val->name_product)}}</td>
                                <td>{{ 'Rp '. number_format($val->harga, 0, ',', '.') }}</td>
                                <td>
                                    @if ($val->id_tahap_order == 8)
                                        <div class="badge badge-light-danger">{{$val->name_tahap}}</div>
                                    @else
                                        <div class="badge badge-light-success">{{$val->name_tahap}}</div>
                                    @endif
                                </td>
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <button type="button" class="btn btn-info me-3" data-name="show_data" data-item="{{$val->id_product}},{{ucwords($val->name_product)}},{{$val->id_order}},{{$val->qty}},{{'Rp '. number_format($val->harga, 0, ',', '.')}},{{$val->order_methode}},{{$val->payment_methode}},{{$val->id_meja}},{{$val->id_tahap_order}},{{$val->bukti_pembayaran}}">
                                            Show Orders
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

{{-- Modal order Data --}}
<div class="modal fade" id="show_data_view" tabindex="-1" aria-modal="true" role="dialog">
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
                            <input type="number" class="form-control form-control-solid" placeholder="QTY" data-name="qty" id="qty" disabled/>
                        </div>

                        <div class="d-flex flex-column mb-8 fv-row">
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span class="required">TOTAL</span>
                            </label>
                            <input type="text" class="form-control form-control-solid" placeholder="harga" data-name="harga" id="harga" disabled/>
                        </div>

                        <div class="col-md-12 fv-row fv-plugins-icon-container mb-8">
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span class="required">Order Method</span>
                            </label>
                            <select name="order_method" data-name="order_method" id="order_method_order" data-control="select2" data-dropdown-parent="#order_data" class="form-select form-select-solid" disabled>
                                <option value="">-- Select Methode --</option>
                                <option value="1">Take Away</option>
                                <option value="2">Reservation</option>
                                <option value="3">Delivery</option>
                            </select>
                        </div>

                        <div class="col-md-12 fv-row fv-plugins-icon-container mb-8" data-name="show_payment_methode">
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span class="required">Payment Method</span>
                            </label>
                            <select name="payment_method" data-name="payment_method" id="payment_method_order" data-control="select2" data-dropdown-parent="#order_data" class="form-select form-select-solid" disabled>
                                <option value="">-- Payment Method --</option>
                                <option value="1">Transfer</option>
                                <option value="2">OVO</option>
                                <option value="3">Dana</option>
                            </select>
                        </div>

                        <div class="col-md-12 fv-row fv-plugins-icon-container" data-name="bukti_pembayaran">
                            <input type="hidden" id="bukti">
                            <button class="btn btn btn-success w-100" data-name="show_bukti">Payment</button>
                        </div>

                    </div>
                    <div class="col-12 mb-8" data-name="show_select_meja">
                        <div class="row">
                            @foreach ($seat as $key => $val)
                                <div class="col-2" data-value="{{$val->id}}" data-name="st{{$val->id}}">
                                    <div class="card card-meja" data-status="">
                                        {{$val->name}}
                                    </div>
                                </div> 
                            @endforeach
                        </div>
                    </div>

                    <div class="col-md-12 fv-row fv-plugins-icon-container mb-8">
                        <input type="hidden" id="id_order_approve">
                        <input type="hidden" id="tahap_order">
                        
                        <div class="d-flex justify-content-center">
                            <button class="btn btn btn-success me-3" id="text_approve" data-name="approve_order">-</button>
                            <button class="btn btn btn-danger me-3" id="text_cancel" data-name="cancel_order">Cancel</button>
                        </div>

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

<div class="modal fade" id="show_bukti_pembayaran" tabindex="-1" aria-modal="true" role="dialog">
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
                <div class="row">
                    <div class="col-6 mb-8" id="image_bukti">

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
    $(document).on("click", "[data-name='show_data']", function (e) {
        $('.preloader').show();
        var id          = $(this).attr("data-item").split(",")[0];
        var name        = $(this).attr("data-item").split(",")[1];
        var id_order    = $(this).attr("data-item").split(",")[2];
        var qty         = $(this).attr("data-item").split(",")[3];
        var harga       = $(this).attr("data-item").split(",")[4];
        var order_method    = $(this).attr("data-item").split(",")[5];
        var payment_method  = $(this).attr("data-item").split(",")[6];
        var id_meja     = $(this).attr("data-item").split(",")[7];
        var tahap_order = $(this).attr("data-item").split(",")[8];
        var img_bukti   = $(this).attr("data-item").split(",")[9];
        $('[data-name="name_view_data_order"]').text(name);
        $('#id_product_order').val(id);
        $('#qty').val(qty);
        $('#harga').val(harga);
        $('#order_method_order').val(order_method).trigger("change");
        $('#payment_method_order').val(payment_method).trigger("change");
        $('#id_order_approve').val(id_order);
        $('#tahap_order').val(tahap_order);
        $('#bukti').val(img_bukti);

        if(order_method === '2'){
            $('[data-name="show_payment_methode"]').css('display', 'none');
            $('[data-name="show_select_meja"]').css('display', 'block');
            $('[data-name="st'+id_meja+'"]').addClass('klick');
        }else if(order_method === '3'){
            $('[data-name="show_payment_methode"]').css('display', 'block');
            $('[data-name="show_select_meja"]').css('display', 'none');
        }else{
            $('[data-name="show_payment_methode"]').css('display', 'none');
            $('[data-name="show_select_meja"]').css('display', 'none');
        }

        if(tahap_order == 7){
            $('[data-name="bukti_pembayaran"]').css('display', 'block');
        }else{
            $('[data-name="bukti_pembayaran"]').css('display', 'none');
        }

        if(tahap_order == 1){
            $('#text_approve').text('Cooked');
            $('#text_approve').attr('disabled', false);
            $('#text_cancel').attr('disabled', false);
        }else if(tahap_order == 2){
            $('#text_approve').text('Delivery');
            $('#text_approve').attr('disabled', false);
            $('#text_cancel').attr('disabled', true);
        }else if(tahap_order == 7){
            $('#text_approve').text('Accepted');
            $('#text_approve').attr('disabled', false);
            $('#text_cancel').attr('disabled', true);
        }else if(tahap_order == 4){
            $('#text_approve').text('Waiting for payment');
            $('#text_approve').attr('disabled', true);
            $('#text_cancel').attr('disabled', true);
        }else if(tahap_order == 6){
            $('#text_approve').text('Order Received');
            $('#text_approve').attr('disabled', true);
            $('#text_cancel').attr('disabled', true);
        }else{
            $('#text_approve').text('Accepted');
            $('#text_approve').attr('disabled', true);
            $('#text_cancel').attr('disabled', true);
        }

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
                $('#harga_order').val(data.price);


                $('#show_data_view').modal('show');
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
    $(document).on("click", "[data-name='approve_order']", function (e) {
        var id_order        = $('#id_order_approve').val();
        var tahap_order     = $('#tahap_order').val();
        $.ajax({
            type: "POST",
            url: "{{ route('approve_order') }}",
            data: {id_order:id_order,tahap_order:tahap_order},
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

    $(document).on("click", "[data-name='cancel_order']", function (e) {
        var id_order        = $('#id_order_approve').val();
        var tahap_order     = $('#tahap_order').val();
        $.ajax({
            type: "POST",
            url: "{{ route('cancel_order') }}",
            data: {id_order:id_order,tahap_order:tahap_order},
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
    

    $(document).on("click", "[data-name='show_bukti']", function (e) {
        var img     = $('#bukti').val();
        var bkt     = '<div class="position-relative"><img src="img/bukti/'+img+'" class="w-100" alt=""><div class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-body h-20px w-20px"></div></div>';
        $('#image_bukti').html(bkt);
        $('#show_bukti_pembayaran').modal('show');
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

@stop
