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

<div class="post fs-6 d-flex flex-column-fluid" id="kt_post">
    <div class="container-xxl min-w-100">
        <div class="row g-xl-8">

            <div class="col-md-6 col-xl-4">

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

        </div>
    </div>
</div>

@stop
