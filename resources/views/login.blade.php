<!DOCTYPE html>
<html lang="en">
    <!--begin::Head-->
    <head>
        <title>HEALTY BITES</title>
        <meta charset="utf-8" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="Craft admin dashboard live demo. Check out all the features of the admin panel. A large number of settings, additional services and widgets." />
        <meta name="keywords" content="Craft, bootstrap, bootstrap 5, admin themes, dark mode, free admin themes, bootstrap admin, bootstrap dashboard" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="shortcut icon" href="{{asset('assets/plugin_tenp/logo.svg')}}" />
    
        <!--begin::Fonts(mandatory for all pages)-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
        <!--end::Fonts-->
    
        <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
        <link href="{{asset('assets/plugin_tenp/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/plugin_tenp/style.bundle.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/costum/config.css')}}" rel="stylesheet" type="text/css" />
        <!--end::Global Stylesheets Bundle-->

        <script>
            (function (w, d, s, l, i) {
                w[l] = w[l] || [];
                w[l].push({
                    'gtm.start': new Date().getTime(),
                    event: 'gtm.js'
                });
                var f = d.getElementsByTagName(s)[0],
                    j = d.createElement(s),
                    dl = l != 'dataLayer' ? '&l=' + l : '';
                j.async = true;
                j.src =
                    'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
                f.parentNode.insertBefore(j, f);
            })(window, document, 'script', 'dataLayer', 'GTM-5FS8GGP');
        </script>
        <!--End::Google Tag Manager -->

        <!--begin::Theme mode setup on page load-->
        <script>
            var defaultThemeMode = "light";
            var themeMode;

            if (document.documentElement) {
                if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
                    themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
                } else {
                    if (localStorage.getItem("data-bs-theme") !== null) {
                        themeMode = localStorage.getItem("data-bs-theme");
                    } else {
                        themeMode = defaultThemeMode;
                    }
                }

                if (themeMode === "system") {
                    themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
                }

                document.documentElement.setAttribute("data-bs-theme", themeMode);
            }
        </script>
        <!--end::Theme mode setup on page load-->

        <!--begin::Global Javascript Bundle(mandatory for all pages)-->
        <script src="{{asset('assets/sweetalert/sweetalert2.all.min.js')}} "></script>
        <script src="{{asset('assets/plugin_tenp/plugins.bundle.js')}}"></script>
        <script src="{{asset('assets/plugin_tenp/scripts.bundle.js')}}"></script>
        <!--end::Global Javascript Bundle-->
    </head>
    <!--end::Head-->

    <!--begin::Body-->
    <body id="kt_body" class="auth-bg">
        <!--Begin::Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FS8GGP" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!--End::Google Tag Manager (noscript) -->

        <!--begin::Main-->
        <div class="d-flex flex-column flex-root">
            <!--begin::Authentication - Sign-in -->
            <div class="d-flex flex-column flex-lg-row flex-column-fluid">
                <!--begin::Aside-->
                <div class="d-flex flex-column flex-lg-row-auto bg-primary w-xl-600px positon-xl-relative">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column position-xl-fixed top-0 bottom-0 w-xl-600px scroll-y">
                        <!--begin::Header-->
                        <div class="d-flex flex-row-fluid flex-column text-center p-5 p-lg-10 pt-lg-20">
                            <!--begin::Logo-->
                            <a href="" class="py-2 py-lg-20">
                                <img alt="Logo" src="{{asset('assets/plugin_tenp/logo.png')}}" class="h-60px h-lg-70px" />
                            </a>
                            <!--end::Logo-->

                            <!--begin::Title-->
                            <h1 class="d-none d-lg-block fw-bold text-white fs-2qx pb-5 pb-md-10">
                                Welcome to Healty Bites
                            </h1>
                            <!--end::Title-->

                            <!--begin::Description-->
                            <p class="d-none d-lg-block fw-semibold fs-2 text-white">
                                Plan your blog post by choosing a topic creating <br />
                                an outline and checking facts
                            </p>
                            <!--end::Description-->
                        </div>
                        <!--end::Header-->

                        <!--begin::Illustration-->
                        <div class="d-none d-lg-block d-flex flex-row-auto bgi-no-repeat bgi-position-x-center bgi-size-contain bgi-position-y-bottom min-h-100px min-h-lg-350px"
                            style="background-image: url(https://preview.keenthemes.com//craft/assets/media/illustrations/sigma-1/17.png)">
                        </div>
                        <!--end::Illustration-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--begin::Aside-->

                <!--begin::Body-->
                <div class="d-flex flex-column flex-lg-row-fluid py-10">
                    <!--begin::Content-->
                    <div class="d-flex flex-center flex-column flex-column-fluid">
                        <!--begin::Wrapper-->
                        <div class="w-lg-500px p-10 p-lg-15 mx-auto">

                            @if(session('error'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ Session::get('error') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif

                            <!--begin::Form-->
                            <form class="form w-100" novalidate="novalidate" id="kt_sign_in_form"  action="{{route('login_post')}}" method="POST">
                                @csrf
                                <!--begin::Heading-->
                                <div class="text-center mb-10">
                                    <!--begin::Title-->
                                    <h1 class="text-dark mb-3">
                                        Sign In to Healty Bites </h1>
                                    <!--end::Title-->

                                    <!--begin::Link-->
                                    <div class="text-gray-400 fw-semibold fs-4">
                                        New Here?

                                        <a href="#" class="link-primary fw-bold" data-name="add_data">
                                            Create an Account
                                        </a>
                                    </div>
                                    <!--end::Link-->
                                </div>
                                <!--begin::Heading-->

                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fs-6 fw-bold text-dark">Username</label>
                                    <!--end::Label-->

                                    <!--begin::Input-->
                                    <input class="form-control form-control-lg form-control-solid" type="text" name="username" autocomplete="off" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-stack mb-2">
                                        <!--begin::Label-->
                                        <label class="form-label fw-bold text-dark fs-6 mb-0">Password</label>
                                        <!--end::Label-->

                                        <!--begin::Link-->
                                        {{-- <a href=""
                                            class="link-primary fs-6 fw-bold">
                                            Forgot Password ?
                                        </a> --}}
                                        <!--end::Link-->
                                    </div>
                                    <!--end::Wrapper-->

                                    <!--begin::Input-->
                                    <input class="form-control form-control-lg form-control-solid" type="password" name="password" autocomplete="off" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->

                                <!--begin::Actions-->
                                <div class="text-center">
                                    <!--begin::Submit button-->
                                    <button type="submit" id="kt_sign_in_submit" class="btn btn-lg btn-primary w-100 mb-5">
                                        <span class="indicator-label">
                                            Continue
                                        </span>
                                    </button>
                                    <!--end::Submit button-->
                                </div>
                                <!--end::Actions-->
                            </form>
                            <!--end::Form-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Content-->

                    <!--begin::Footer-->
                    <div class="d-flex flex-center flex-wrap fs-6 p-5 pb-0">
                        <!--begin::Links-->
                        <div class="d-flex flex-center fw-semibold fs-6">
                            <a href="" class="text-muted text-hover-primary px-2" target="_blank">About</a>

                            <a href="" class="text-muted text-hover-primary px-2" target="_blank">Support</a>

                            <a href="" class="text-muted text-hover-primary px-2" target="_blank">Purchase</a>
                        </div>
                        <!--end::Links-->
                    </div>
                    <!--end::Footer-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Authentication - Sign-in-->
        </div>
        <!--end::Main-->

        <form action="#" method="post" id="AddFormAction" enctype="multipart/form-data">
            <div class="modal fade" id="add_data" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered mw-650px">
                    <div class="modal-content">
                        <div class="modal-header" id="">
                            <h2>Create User</h2>
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
        
                            <div class="row mb-5">
                                <div class="col-md-12 fv-row fv-plugins-icon-container">
                                    <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                        <span class="required">USERNMAE</span>
                                    </label>
                                    <input type="text" class="form-control form-control-solid" placeholder="USERNMAE" name="username"/>
                                </div>
        
                                <div class="col-md-12 fv-row fv-plugins-icon-container">
                                    <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                        <span class="required">PASSWORD</span>
                                    </label>
                                    <input type="password" class="form-control form-control-solid" placeholder="PASSWORD" name="password"/>
                                </div>
        
                                <div class="col-md-12 fv-row fv-plugins-icon-container">
                                    <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                        <span class="required">NAMA LENGKAP</span>
                                    </label>
                                    <input type="text" class="form-control form-control-solid" placeholder="NAMA LENGKAP" name="name"/>
                                </div>
        
                                <div class="col-md-12 fv-row fv-plugins-icon-container">
                                    <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                        <span class="required">FOTO</span>
                                    </label>
                                    <input type="file" class="form-control form-control-solid" name="add_image" id="foto"/>
                                </div>
        
                                <div class="col-md-12 fv-row fv-plugins-icon-container">
                                    <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                        <span class="required">EMAIL</span>
                                    </label>
                                    <input type="text" class="form-control form-control-solid" placeholder="EMAIL" name="email"/>
                                </div>
        
                                <input type="hidden" id="foto_name" name="foto_name">
                            </div>
        
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
        </form>
        
        <script>
            $(document).on("click", "[data-name='add_data']", function (e) {
                $('[name="name"]').val('');
                $('[name="foto"]').val('');
                $('[name="email"]').val('');
                $('[name="username"]').val('');
                $('[name="password"]').val('');
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
                        url: "{{route('upload_img')}}",
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
                e.preventDefault();
                $('.preloader').show();
                var form        = $("#AddFormAction");
                var actform     = form.serializeArray();
        
                var username    = actform[0].value;
                var password    = actform[1].value;
                var name        = actform[2].value;
                var email       = actform[3].value;
                var role_id     = 2;
                var foto        = actform[5].value;
                // console.log(actform);
                if(foto.trim() == '') {
                    foto = 'default.jpg';
                }
                
                if(username.trim() == ''){
                    Swal.fire({
                        position:'center',
                        title: 'Username is empty!',
                        icon: 'error',
                        showConfirmButton: false,
                        timer: 1000
                    })
                    return false
                }
        
                if(password.trim() == ''){
                    Swal.fire({
                        position:'center',
                        title: 'Password is empty!',
                        icon: 'error',
                        showConfirmButton: false,
                        timer: 1000
                    })
                    return false
                }
        
                if(name.trim() == ''){
                    Swal.fire({
                        position:'center',
                        title: 'Name is empty!',
                        icon: 'error',
                        showConfirmButton: false,
                        timer: 1000
                    })
                    return false
                }
        
                if(email.trim() == ''){
                    Swal.fire({
                        position:'center',
                        title: 'Email is empty!',
                        icon: 'error',
                        showConfirmButton: false,
                        timer: 1000
                    })
                    return false
                }
        
                if(role_id.trim() == ''){
                    Swal.fire({
                        position:'center',
                        title: 'Role is empty!',
                        icon: 'error',
                        showConfirmButton: false,
                        timer: 1000
                    })
                    return false
                }
        
                if(foto.trim() == ''){
                    Swal.fire({
                        position:'center',
                        title: 'Role is empty!',
                        icon: 'error',
                        showConfirmButton: false,
                        timer: 1000
                    })
                    return false
                }
        
                // console.log(foto);
                $.ajax({
                    type: "POST",
                    url: "{{ route('adduser') }}",
                    data: {username:username,password:password,role_id:role_id,name:name,email:email,foto:foto},
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
        
        </script>

        

    </body>
    <!--end::Body-->

</html>