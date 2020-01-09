<!DOCTYPE html>
<html lang="en">

<!-- begin::Head -->

<head>
    <base href="../../../">
    <meta charset="utf-8" />
    <title>Basita | Create Account</title>
    <meta name="description" content="Login page example">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--begin::Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700">
    <!--end::Fonts -->

    <!--begin::Page Custom Styles(used by this page) -->
    <link href="/assets/css/pages/login/login-2.css" rel="stylesheet" type="text/css" />
    <!--end::Page Custom Styles -->

    <!--begin::Global Theme Styles(used by all pages) -->
    <link href="/css/style.min.css" rel="stylesheet" type="text/css" />
    <!--end::Global Theme Styles -->

    <!--end::Layout Skins -->
    <link rel="shortcut icon" href="/assets/media/logos/favicon.ico" />
    <style>
        @media screen and (max-width: 600px) {
            .hide_if_mobile {
                visibility: hidden;
            }
        }

        .btn.dropdown-toggle {
            background: transparent !important;
            color: white !important;
            height: 46px;
        }
    </style>
</head>

<!-- end::Head -->

<!-- begin::Body -->

<body
    class="kt-quick-panel--right kt-demo-panel--right kt-falsecanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">

    <!-- begin:: Page -->
    <div class="kt-grid kt-grid--ver kt-grid--root">
        <div class="kt-grid kt-grid--hor kt-grid--root kt-login kt-login--v2 kt-login--signin" id="kt_login">
            <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor"
                style="background-image: url(assets/media/bg/bg-1.jpg);">
                <div class="kt-grid__item kt-grid__item--fluid kt-login__wrapper">
                    <div class="kt-login__container">
                        <div class="kt-login__signup">
                            <div class="kt-login__head">
                                <h3 class="kt-login__title">Create Account For Basita</h3>
                                <div class="kt-login__desc">Enter your details to create your account:</div>
                            </div>
                            <form class="kt-login__form kt-form" action="{{route("Auth.register")}}">
                                <input autocomplete="false" name="hidden" type="text" style="display:none;">
                                <div class="row form-group mb-0">
                                    <div class="col-lg-6">
                                        <input class="form-control" type="text" placeholder="first name"
                                            name="first_name" autocomplete="false">
                                    </div>
                                    <div class="col-lg-6">
                                        <input class="form-control" type="text" placeholder="last name" name="last_name"
                                            autocomplete="false">
                                    </div>
                                </div>
                                <div class="row form-group mb-0">
                                    <div class="col-12">
                                        <input class="form-control" type="text" placeholder="Email" name="email"
                                            autocomplete="false">
                                    </div>
                                </div>
                                <div class="row form-group mb-0">
                                    <div class="col-lg-6">
                                        <select class="kt-selectpicker form-control p-0 mb-0" name="gender" title="Gender">
                                            <option>male</option>
                                            <option>female</option>
                                        </select> </div>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" id="birth_datepicker" readonly
                                            placeholder="Birth Date" name="birthday" /> </div>
                                </div>

                                <div class="row form-group mb-0">
                                    <div class="col-12">
                                        <input class="form-control" type="text" placeholder="phone number"
                                            name="mobile_number" autocomplete="false">
                                    </div>
                                </div>

                                <div class="row form-group mb-0">
                                    <div class="col-lg-6">
                                        <select class="form-control kt-selectpicker p-0" name="city_id"
                                            title="Please select city" required focus>
                                            @foreach($listCities as $city)
                                            <option value="{{$city->id}}">{{ $city->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-lg-6">
                                        <select class="form-control kt-selectpicker p-0" name="region_id"
                                            title="Please select region" required focus>
                                            @foreach($listRegions as $region)
                                            <option value="{{$region->id}}">{{ $region->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="input-group">
                                    <input class="form-control" type="password" placeholder="Password" name="password">
                                </div>
                                <div class="input-group">
                                    <input class="form-control" type="password" placeholder="Confirm Password"
                                        name="rpassword">
                                </div>
                                <div class="kt-login__actions">
                                    <button type="submit" id="kt_login_signup_submit" class="btn btn-pill kt-login__btn-primary">Sign Up</button>&nbsp;&nbsp;
                                    <button id="kt_login_signup_cancel"
                                        class="btn btn-pill kt-login__btn-secondary">Cancel</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- end:: Page -->

    <!-- begin::Global Config(global config for global JS sciprts) -->
    <script>
        var KTAppOptions = {
            "colors": {
                "state": {
                    "brand": "#5d78ff",
                    "dark": "#282a3c",
                    "light": "#ffffff",
                    "primary": "#5867dd",
                    "success": "#34bfa3",
                    "info": "#36a3f7",
                    "warning": "#ffb822",
                    "danger": "#fd3995"
                },
                "base": {
                    "label": [
                        "#c5cbe3",
                        "#a1a8c3",
                        "#3d4465",
                        "#3e4466"
                    ],
                    "shape": [
                        "#f0f3ff",
                        "#d9dffa",
                        "#afb4d4",
                        "#646c9a"
                    ]
                }
            }
        };
    </script>

    <!-- end::Global Config -->

    <!--begin::Global Theme Bundle(used by all pages) -->
    <script src="assets/plugins/global/plugins.bundle.js" type="text/javascript"></script>
    <script src="assets/js/scripts.bundle.js" type="text/javascript"></script>

    <!--end::Global Theme Bundle -->

    <!--begin::Page Scripts(used by this page) -->
    <script src="assets/js/pages/custom/login/login-general.js" type="text/javascript"></script>

    <!--end::Page Scripts -->
</body>

<!-- end::Body -->

</html>