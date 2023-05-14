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

        <script>
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        </script>
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
                            <a href="{{route('home')}}" class="py-2 py-lg-20">
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

                <div class="d-flex flex-column flex-lg-row-fluid py-10">
                    <!--begin::Content-->
                    <div class="d-flex flex-center flex-column flex-column-fluid">
                        <!--begin::Wrapper-->
                        <div class="w-lg-600px p-10 p-lg-15 mx-auto">
                
                            <!--begin::Form-->
                            <form class="form w-100 fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate" id="kt_sign_up_form">
                                <!--begin::Heading-->
                                <div class="mb-10 text-center">
                                    <!--begin::Title-->
                                    <h1 class="text-dark mb-3">
                                        Create an Account
                                    </h1>
                                    <!--end::Title-->
                
                                    <!--begin::Link-->
                                    <div class="text-gray-400 fw-semibold fs-4">
                                        Already have an account?
                
                                        <a href="{{route('login')}}" class="link-primary fw-bold">
                                            Sign in here
                                        </a>
                                    </div>
                                    <!--end::Link-->
                                </div>
                                <!--end::Heading-->
                
                                <!--begin::Separator-->
                                <div class="d-flex align-items-center mb-10">
                                    <div class="border-bottom border-gray-300 mw-50 w-100"></div>
                                    <span class="fw-semibold text-gray-400 fs-7 mx-2">OR</span>
                                    <div class="border-bottom border-gray-300 mw-50 w-100"></div>
                                </div>
                                <!--end::Separator-->

                                <!--begin::Input group-->
                                <div class="fv-row mb-7 fv-plugins-icon-container">
                                    <label class="form-label fw-bold text-dark fs-6">Name</label>
                                    <input class="form-control form-control-lg form-control-solid" type="text" placeholder="" data-name="name" autocomplete="off">
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>
                                <!--end::Input group-->               
                
                                <!--begin::Input group-->
                                <div class="fv-row mb-7 fv-plugins-icon-container">
                                    <label class="form-label fw-bold text-dark fs-6">Email</label>
                                    <input class="form-control form-control-lg form-control-solid" type="text" placeholder="" data-name="email" autocomplete="off">
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="fv-row mb-7 fv-plugins-icon-container">
                                    <label class="form-label fw-bold text-dark fs-6">Username</label>
                                    <input class="form-control form-control-lg form-control-solid" type="text" placeholder="" data-name="username" autocomplete="off">
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>
                                <!--end::Input group--> 
                
                                <!--begin::Input group-->
                                <div class="mb-10 fv-row fv-plugins-icon-container" data-kt-password-meter="true">
                                    <!--begin::Wrapper-->
                                    <div class="mb-1">
                                        <!--begin::Label-->
                                        <label class="form-label fw-bold text-dark fs-6">
                                            Password
                                        </label>
                                        <!--end::Label-->
                
                                        <!--begin::Input wrapper-->
                                        <div class="position-relative mb-3">
                                            <input class="form-control form-control-lg form-control-solid" type="password" placeholder="" name="password" data-name="password" autocomplete="off">
                
                                            <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2"
                                                data-kt-password-meter-control="visibility">
                                                <i class="bi bi-eye-slash fs-2"></i>
                                                <i class="bi bi-eye fs-2 d-none"></i>
                                            </span>
                                        </div>
                                        <!--end::Input wrapper-->
                
                                        <!--begin::Meter-->
                                        <div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
                                            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
                                        </div>
                                        <!--end::Meter-->
                                    </div>
                                    <!--end::Wrapper-->
                
                                    <!--begin::Hint-->
                                    <div class="text-muted">
                                        Use 8 or more characters with a mix of letters, numbers &amp; symbols.
                                    </div>
                                    <!--end::Hint-->
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>
                                <!--end::Input group--->
                
                                <!--begin::Input group-->
                                <div class="fv-row mb-5 fv-plugins-icon-container">
                                    <label class="form-label fw-bold text-dark fs-6">Confirm Password</label>
                                    <input class="form-control form-control-lg form-control-solid" type="password" placeholder="" data-name="confirm_password" autocomplete="off">
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>
                                <!--end::Input group-->
                
                                <!--begin::Actions-->
                                <div class="text-center">
                                    <button type="button" class="btn btn-lg btn-primary" data-name="save_data">
                                        <span class="indicator-label">
                                            Submit
                                        </span>
                                    </button>
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

            </div>
            <!--end::Authentication - Sign-in-->
        </div>
        <!--end::Main-->

        <script>
            $(document).on("click", "[data-name='save_data']", function (e) {
                var username    = $('[data-name="username"]').val();
                var password    = $('[data-name="password"]').val();
                var confirm_password    = $('[data-name="confirm_password"]').val();
                var name        = $('[data-name="name"]').val();
                var email       = $('[data-name="email"]').val();
                var role_id     = '2';
                var foto        = 'default.jpg';

                console.log(password+"-"+confirm_password);
                if(password == confirm_password){

                    // console.log(foto);
                    $.ajax({
                        type: "POST",
                        url: "{{ route('saveregister') }}",
                        data: {username:username,password:password,role_id:role_id,name:name,email:email,foto:foto},
                        cache: false,
                        success: function(data) {
                            // console.log(data);
                            Swal.fire({
                                position:'center',
                                title: 'Success!',
                                icon: 'success',
                                showConfirmButton: false,
                                timer: 1500
                            }).then((data) => {
                                // location.reload();
                                window.location.href = "{{route('login')}}";
                            })
                        },            
                        error: function (data) {
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

                }else{
                    Swal.fire({
                        position:'center',
                        title: 'Password is not match!',
                        icon: 'error',
                        showConfirmButton: false,
                        timer: 1000
                    })
                    return false
                }
            });

        </script>

    </body>
    <!--end::Body-->

</html>