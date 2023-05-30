<main>
<!-- =======================
Popular course START -->
<section>
    <div class="container">
        <!-- Title -->
        <div class="row mb-4">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="fs-1">MENU</h2>
                <p class="mb-0">Many interesting variants that you can enjoy.</p>
            </div>
        </div>

        <!-- Tabs START -->
        <ul class="nav nav-pills nav-pills-bg-soft justify-content-sm-center mb-4 px-3" id="course-pills-tab" role="tablist">
            <!-- Tab item -->
            <li class="nav-item me-2 me-sm-5">
                <button class="nav-link mb-2 mb-md-0 active" id="all-tab" data-bs-toggle="pill" data-bs-target="#all-tabs" type="button" role="tab" aria-controls="all-tabs" aria-selected="false">ALL</button>
            </li>

            @foreach ($category as $key => $val)
                <!-- Tab item -->
                <li class="nav-item me-2 me-sm-5">
                    <button class="nav-link mb-2 mb-md-0" id="category-tab-{{$val->id}}" data-bs-toggle="pill" data-bs-target="#category-tabs-{{$val->id}}" type="button" role="tab" aria-controls="category-tabs-{{$val->id}}"	aria-selected="false">{{strtoupper($val->name)}}</button>
                </li>
                <!-- End Tab item -->    
            @endforeach
            
        </ul>
        <!-- Tabs END -->

        <!-- Tabs content START -->
        <div class="tab-content" id="course-pills-tabContent">
            <!-- Content START -->
            <div class="tab-pane fade show active" id="all-tabs" role="tabpanel" aria-labelledby="all-tab">
                <div class="row g-4">

                    @foreach ($product as $k => $v)
                        <!-- Card item START -->
                        <div class="col-sm-6 col-lg-4 col-xl-3">
                            <div class="card shadow h-100">
                                <!-- Image -->
                                <img src="{{asset('img/product').'/'.$v->img}}" class="card-img-top" alt="course image">
                                <!-- Card body -->
                                <div class="card-body pb-0">
                                    <!-- Title -->
                                    <h5 class="card-title fw-normal"><a href="#">{{strtoupper($v->name)}}</a></h5>
                                    <p class="mb-2 text-truncate-2">{{$v->description}}</p>
                                    <!-- Rating star -->
                                    <ul class="list-inline mb-0">
                                        <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                        <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                        <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                        <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                        <li class="list-inline-item me-0 small"><i class="far fa-star text-warning"></i></li>
                                        <li class="list-inline-item ms-2 h6 fw-light mb-0">4.0/5.0</li>
                                    </ul>
                                </div>
                                <!-- Card footer -->
                                <div class="card-footer pt-0 pb-3">
                                    <hr>
                                    <div class="d-flex justify-content-between">
                                        <span class="h6 fw-light mb-0">{{ 'Rp '. number_format($v->price, 0, ',', '.') }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Card item END -->
                    @endforeach

                </div> <!-- Row END -->
            </div>
            <!-- Content END -->

            @foreach ($category as $key => $val)
                <!-- Content START -->
                <div class="tab-pane fade" id="category-tabs-{{$val->id}}" role="tabpanel" aria-labelledby="category-tab-{{$val->id}}">
                    <div class="row g-4">

                        @foreach ($product as $k => $v)
                            @if($v->id_category == $val->id)
                                <!-- Card item START -->
                                <div class="col-sm-6 col-lg-4 col-xl-3">
                                    <div class="card shadow h-100">
                                        <!-- Image -->
                                        <img src="{{asset('img/product').'/'.$v->img}}" class="card-img-top" alt="course image">
                                        <!-- Card body -->
                                        <div class="card-body pb-0">
                                            <!-- Badge and favorite -->
                                            <div class="d-flex justify-content-between mb-2">
                                                <a href="#" class="h6 mb-0"><i class="far fa-heart"></i></a>
                                            </div>
                                            <!-- Title -->
                                            <h5 class="card-title fw-normal"><a href="#">{{strtoupper($v->name)}}</a></h5>
                                            <p class="mb-2 text-truncate-2">{{$v->description}}</p>
                                            <!-- Rating star -->
                                            <ul class="list-inline mb-0">
                                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                                <li class="list-inline-item me-0 small"><i class="far fa-star text-warning"></i></li>
                                                <li class="list-inline-item ms-2 h6 fw-light mb-0">4.0/5.0</li>
                                            </ul>
                                        </div>
                                        <!-- Card footer -->
                                        <div class="card-footer pt-0 pb-3">
                                            <hr>
                                            <div class="d-flex justify-content-between">
                                                <span class="h6 fw-light mb-0">{{ 'Rp '. number_format($v->price, 0, ',', '.') }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card item END -->
                            @endif
                        @endforeach

                    </div>
                </div>
                <!-- Content END -->
            @endforeach
        </div>
        <!-- Tabs content END -->
    </div>
</section>
<!-- =======================
Popular course END -->
</main>