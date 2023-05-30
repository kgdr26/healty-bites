@extends('main')
@section('content')

<div class="toolbar" id="kt_toolbar">
    <div class=" container-fluid  d-flex flex-stack flex-wrap flex-sm-nowrap">
        <!--begin::Info-->
        <div class="d-flex flex-column align-items-start justify-content-center flex-wrap me-2">
            <!--begin::Title-->
            <h1 class="text-dark fw-bold my-1 fs-2">
                Dashboard <small class="text-muted fs-6 fw-normal ms-1"></small>
            </h1>
            <!--end::Title-->

            <!--begin::Breadcrumb-->
            <ul class="breadcrumb fw-semibold fs-base my-1">
                <li class="breadcrumb-item text-muted">
                    <a href="" class="text-muted text-hover-primary">Dashboard</a>
                </li>
            </ul>
            <!--end::Breadcrumb-->
        </div>
        <!--end::Info-->
    </div>
</div>

<div class="post fs-6 d-flex flex-column-fluid mb-3" id="kt_post">
    <div class="container-xxl min-w-100">
        <div class="row g-xl-8">

            <div class="col-4">

                <!--begin::Card-->
                <a href="#" class="card border-hover-primary ">
                    <!--begin::Card header-->
                    <div class="card-header border-0 pt-9">
                        <!--begin::Card Title-->
                        <div class="card-title m-0">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-50px w-50px bg-light">
                                <img src="{{asset('Photos/order.png')}}" alt="image" class="p-3">
                            </div>
                            <!--end::Avatar-->
                        </div>
                        <!--end::Car Title-->
                    </div>
                    <!--end:: Card header-->
            
                    <!--begin:: Card body-->
                    <div class="card-body p-9">
                        <!--begin::Name-->
                        <div class="fs-3 fw-bold text-dark"> Most Faforite </div>
                        <!--end::Name-->
            
                        <!--begin::Description-->
                        <p class="text-gray-400 fw-semibold fs-5 mt-1 mb-7"> The 3 most popular categories </p>
                        <!--end::Description-->
            
                        <!--begin::Info-->
                        <div class="d-flex flex-wrap mb-5">
                            <!--begin::Due-->
                            @foreach ($mfavorit as $key => $val)
                                <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-3 mb-3">
                                    <div class="fs-6 text-gray-800 fw-bold">{{$val->name}}</div>
                                    <div class="fw-semibold text-gray-400">{{ 'Rp '. number_format($val->price, 0, ',', '.') }}</div>
                                </div> 
                            @endforeach
                        </div>
                        <!--end::Info-->
            
                        <!--begin::Users-->
                        <div class="symbol-group symbol-hover">
                            @foreach ($member as $key => $val)
                                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Emma Smith" data-bs-original-title="Emma Smith" data-kt-initialized="1">
                                    <img alt="Customer" src="{{asset('img/profile').'/'.$val->foto}}">
                                </div>
                            @endforeach
                        </div>
                        <!--end::Users-->
                    </div>
                    <!--end:: Card body-->
                </a>
                <!--end::Card-->
            </div>

            @if ($idn_user->name_role == 'ADMINISTRATOR')
                <div class="col-8">
                    <!--begin::Chart widget 15-->
                    <div class="card card-flush h-xl-100">

                        <!--begin::Body-->
                        <div class="card-body pt-5">
                            <figure class="highcharts-figure">
                                <div id="data_sales"></div>
                            </figure>
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Chart widget 15-->
                </div>
            @else
                <div class="col-4">
                    <!--begin::Card-->
                    <div class="card border-hover-primary ">
                        <!--begin::Card header-->
                        <div class="card-header border-0 pt-9">
                            <!--begin::Card Title-->
                            <div class="card-title m-0">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-50px w-50px bg-light">
                                    <img src="{{asset('Photos/order.png')}}" alt="image" class="p-3">
                                </div>
                                <!--end::Avatar-->
                            </div>
                            <!--end::Car Title-->
                        </div>
                        <!--end:: Card header-->
                
                        <!--begin:: Card body-->
                        <div class="card-body p-9">
                            <!--begin::Name-->
                            <div class="fs-3 fw-bold text-dark"> Challenge </div>
                            <!--end::Name-->
                
                            <!--begin::Description-->
                            <p class="text-gray-400 fw-semibold fs-5 mt-1 mb-7"> Weekly Nutrition Challenge </p>
                            <!--end::Description-->
                
                            <!--begin::Info-->
                            <div class="d-flex flex-wrap mb-5">
                                <!--begin::Due-->
                                <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-3 mb-3">
                                    <div class="fs-6 text-gray-800 fw-bold">{{date('D, d M Y')}}</div>

                                        @if (isset($challeng->name))
                                            <div class="fw-semibold text-gray-400">{{$challeng->name}}</div>
                                            @if ($ckch->jml > 0)
                                                <button class="btn btn-success w-100" disabled>The challenge has been done</button>
                                            @else
                                                <button data-name="sudah_challeng" type="button" data-item="{{$challeng->id}},{{$idn_user->id}}" class="btn btn-success w-100">Sudah</button>
                                            @endif
                                        @else
                                            <div class="fw-semibold text-gray-400">Tidak ada challenge hari ini.</div>
                                        @endif
                                    
                                </div>
                            </div>
                            <!--end::Info-->
                
                        </div>
                        <!--end:: Card body-->
                    </div>
                    <!--end::Card-->
                </div>

                <div class="col-4">

                    <!--begin::Card-->
                    <div class="card border-hover-primary ">
                        <!--begin::Card header-->
                        <div class="card-header border-0 pt-9">
                            <!--begin::Card Title-->
                            <div class="card-title m-0">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-50px w-50px bg-light">
                                    <img src="{{asset('Photos/order.png')}}" alt="image" class="p-3">
                                </div>
                                <!--end::Avatar-->
                            </div>
                            <!--end::Car Title-->
                        </div>
                        <!--end:: Card header-->
                
                        <!--begin:: Card body-->
                        <div class="card-body p-9">
                            <!--begin::Name-->
                            <div class="fs-3 fw-bold text-dark"> Orders </div>
                            <!--end::Name-->
                
                            <!--begin::Description-->
                            <p class="text-gray-400 fw-semibold fs-5 mt-1 mb-7"> Status Orders </p>
                            <!--end::Description-->
                
                            <!--begin::Info-->
                            <div class="d-flex flex-wrap mb-5">
                                <!--begin::Due-->
                                <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-3 mb-3">
                                    <div class="fs-6 text-gray-800 fw-bold">Ordering</div>
                                    <div class="fw-semibold text-gray-400">5</div>
                                </div>
                                <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-3 mb-3">
                                    <div class="fs-6 text-gray-800 fw-bold">Cooked</div>
                                    <div class="fw-semibold text-gray-400">5</div>
                                </div>
                                <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-3 mb-3">
                                    <div class="fs-6 text-gray-800 fw-bold">Delivery</div>
                                    <div class="fw-semibold text-gray-400">5</div>
                                </div>
                            </div>
                            <!--end::Info-->
                
                        </div>
                        <!--end:: Card body-->
                    </div>
                    <!--end::Card-->
                </div>
            @endif

        </div>
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

                <!--begin::Card toolbar-->
                <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                    <!--begin::Add product-->

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
                            <th>KODE</th>
                            <th>NAME</th>
                            <th>HARGA</th>
                            <th>STATUS</th>
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
    $(document).on("click", "[data-name='sudah_challeng']", function (e) {

        $('.preloader').show();
        var id_challeng = $(this).attr("data-item").split(",")[0];
        var id_user     = $(this).attr("data-item").split(",")[1];

        $.ajax({
            type: "POST",
            url: "{{ route('addactionchalne') }}",
            data: {id_challeng:id_challeng,id_user:id_user},
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
    Highcharts.chart('data_sales', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'Author Sales'
        },
        subtitle: {
            text: ''
        },
        credits: {
            enabled: false
        },
        xAxis: {
            categories: [
                'Jan',
                'Feb',
                'Mar',
                'Apr',
                'May',
                'Jun',
                'Jul',
                'Aug',
                'Sep',
                'Oct',
                'Nov',
                'Dec'
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: null
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>{point.y:.1f} Qty</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: 'Salads',
            data: [28, 25, 20, 30, 38, 0, 0, 0, 0, 0, 0, 0]

        }, {
            name: 'Wraps',
            data: [25, 35, 35, 25, 35, 0, 0, 0, 0, 0, 0, 0]

        }, {
            name: 'Warm Quinoa Bowls',
            data: [35, 30, 20, 28, 40, 0, 0, 0, 0, 0, 0, 0]

        }]
    });
</script>

@stop
