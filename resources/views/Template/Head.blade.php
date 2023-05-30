@if (Route::currentRouteName()=='role')
    <link href="{{asset('assets/plugin_tenp/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />
    <script src="{{asset('assets/plugin_tenp/datatables.bundle.js')}}"></script>
@endif

@if (Route::currentRouteName()=='dashboard')
    <link href="{{asset('assets/plugin_tenp/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />
    <script src="{{asset('assets/plugin_tenp/datatables.bundle.js')}}"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>

@endif

@if (Route::currentRouteName()=='users')
    <link href="{{asset('assets/plugin_tenp/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />
    <script src="{{asset('assets/plugin_tenp/datatables.bundle.js')}}"></script>
@endif

@if (Route::currentRouteName()=='category')
    <script src="{{asset('assets/costum/jquery.maskMoney.min.js')}}"></script>
@endif

@if (Route::currentRouteName()=='bahan')
    <script src="{{asset('assets/costum/jquery.maskMoney.min.js')}}"></script>
@endif

@if (Route::currentRouteName()=='product')
    <script src="{{asset('assets/costum/jquery.maskMoney.min.js')}}"></script>
@endif

@if (Route::currentRouteName()=='cusprod')
    <script src="{{asset('assets/costum/jquery.maskMoney.min.js')}}"></script>
@endif

@if (Route::currentRouteName()=='layanan')
    <link href="{{asset('assets/plugin_tenp/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />
    <script src="{{asset('assets/plugin_tenp/datatables.bundle.js')}}"></script>
@endif

@if (Route::currentRouteName()=='cuspesanan')
    <link href="{{asset('assets/plugin_tenp/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />
    <script src="{{asset('assets/plugin_tenp/datatables.bundle.js')}}"></script>
@endif

@if (Route::currentRouteName()=='settchalleng')
    <link href="{{asset('assets/plugin_tenp/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />
    <script src="{{asset('assets/plugin_tenp/datatables.bundle.js')}}"></script>
@endif

@if (Route::currentRouteName()=='admpesanan')
    <link href="{{asset('assets/plugin_tenp/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />
    <script src="{{asset('assets/plugin_tenp/datatables.bundle.js')}}"></script>
@endif

@if (Route::currentRouteName()=='setartikel')
    {{-- <script src="{{asset('assets/ckeditor.js')}}"></script> --}}
    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
@endif

@if (Route::currentRouteName()=='setips')
    {{-- <script src="{{asset('assets/ckeditor.js')}}"></script> --}}
    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
@endif

@if (Route::currentRouteName()=='settlandinghome')
    {{-- <script src="{{asset('assets/ckeditor.js')}}"></script> --}}
    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
@endif



