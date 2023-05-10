@extends('main')
@section('content')

<div class="toolbar" id="kt_toolbar">
    <div class=" container-fluid  d-flex flex-stack flex-wrap flex-sm-nowrap">
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
    </div>
</div>

<!--begin::Post-->
<div class="post fs-6 d-flex flex-column-fluid" id="kt_post">
    <!--begin::Container-->
    <div class="container-xxl min-w-100">
        <!--begin::Products-->

        <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-10">
        
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


@stop