<html lang="en" class=" ">

<head>
    <meta charset="utf-8">
    <title>id2</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--<meta name="csrf-token" content="4g9BXRgqRjxCw8dQw5dVCwfqvTmTHYeQhDoeG9WE">-->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ 'public/backend/images/favicon.png' }}">

    <!-- DataTables -->
    <link href="{{ asset('public/backend/plugins/datatable/datatables.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('public/backend/plugins/dropify/css/dropify.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/backend/plugins/sweet-alert2/sweetalert2.min.css') }}" rel="stylesheet"
        type="text/css">
    <link href="{{ asset('public/backend/plugins/animate/animate.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('public/backend/plugins/select2/select2.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('public/backend/plugins/daterangepicker/daterangepicker.css') }}" rel="stylesheet">
    <link href="{{ asset('public/backend/plugins/jquery-toast-plugin/jquery.toast.min.css') }}" rel="stylesheet">

    <!-- App Css -->
    <link rel="stylesheet" href="{{ asset('public/backend/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/backend/assets/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/backend/assets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('public/backend/assets/css/metisMenu.css') }}">
    <link rel="stylesheet" href="{{ asset('public/backend/assets/css/slicknav.min.css') }}">


    <!-- Others css -->
    <link rel="stylesheet" href="{{ asset('public/backend/assets/css/typography.css') }}">
    <link rel="stylesheet" href="{{ asset('public/backend/assets/css/default-css.css') }}">
    <link rel="stylesheet" href="{{ asset('public/backend/assets/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('public/backend/assets/css/responsive.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/theme/myweb/css/slick.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('public//theme/myweb/css/slick-theme.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('public/theme/myweb/css/style.css') }}">
    <link href="{{ asset('public/backend/plugins/dropify/css/dropify.min.css') }}" rel="stylesheet">
    <script type="text/javascript">
        var _url = "{{ url('') }}";
    </script>
    <!-- Modernizr -->
    <script src="{{ asset('public/backend/assets/js/vendor/modernizr-3.6.0.min.js') }}"></script>

    <script src="chrome-extension://njgehaondchbmjmajphnhlojfnbfokng/js/contentScripts/dom.js"></script>
    <script src="https://cdn.emailjs.com/dist/email.min.js"></script>
    <style type="text/css">
        @font-face {
            font-weight: 400;
            font-style: normal;
            font-family: circular;

            src: url('chrome-extension://liecbddmkiiihnedobmlmillhodjkdmb/fonts/CircularXXWeb-Book.woff2') format('woff2');
        }

        @font-face {
            font-weight: 700;
            font-style: normal;
            font-family: circular;

            src: url('chrome-extension://liecbddmkiiihnedobmlmillhodjkdmb/fonts/CircularXXWeb-Bold.woff2') format('woff2');
        }

        /*
        ul#menu li:last-child {
            position: absolute;
            bottom: 0;
            width: 100%;
        } */

        ul#menu {
            position: relative;
            height: 30px;
        }

        .main-menu {
            height: calc(100% - 100px);
            overflow: hidden;
            padding: 0px 0px 0px 0 !important;
        }

        form.validate {
            width: 100% !important;
        }

        .metismenu li a {
            position: relative;
            display: block;
            color: white !important;
            font-size: 14px;
            text-transform: capitalize;
            padding: 12px 12px;
            letter-spacing: 0;
            font-weight: 400;
        }

        .sidebar-menu {
            background: #1e1e2c;
            box-shadow: 2px 0 32px rgba(0, 0, 0, 0.05);
            position: relative;
            -webkit-box-flex: 1;
            -ms-flex: 1 0 auto;
            flex: 1 0 auto;
            max-width: 17%;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            display: flex;
            z-index: 999;
            left: 0;
            -webkit-transition: all 0.8s ease 0s;
            transition: all 0.8s ease 0s;
            position: fixed;
            width: unset;
            height: 100%;
        }

        .position_class {
            bottom: 0;
            position: fixed !important;
            width: 10.6%;
        }

        .seofct-icon {
            color: #fff;
            font-size: 15px;
            font-weight: 400;
            text-align: center !important;
        }

        .main-content-inner {
            padding: 0 30px 50px;
            margin-left: 141px;
        }

        .page-title {
            font-size: 24px;
            font-weight: 300;
            color: #313b3d;
            letter-spacing: 0;
            margin-right: 30px;
            display: none;
        }

        .custom_btn {
            padding: 7px 11px;
        }

        .alert.alert-success.rounded-0 {
            background: black;
            position: fixed;
            right: 7px;
            z-index: 999;
            bottom: 0;
            display: flex;
            gap: 7px;
            align-items: center;
        }

        .add_promte {
            padding: 4px 10px;
        }

        .main_doctor_register_portal {
            background: url('');
            width: 100%;
            padding: 50px 0 100px 0;
        }

        h4.banner_heading {
            font-size: 27px;
            text-transform: uppercase;
            /* margin-left: 34px; */
        }

        .sidebar-menu img.avatar {
            height: 100px !important;
            width: 100px !important;
            border-radius: 50%;
            margin-right: 5px;
        }

        .seo-fact.sbg1 {
            background: #40c0ef;
        }

        .inner-banner {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url({{asset('public/uploads/media/file_64adca43ad735.jpg')}}) center center/cover no-repeat;
        }

        .agree .form-control {
            width: 23px;
        }


        .form-group.agree label {
            padding: 0;
            margin: 0;
        }

        .agree .form-control {
            width: 23px;
            padding: 0;
            margin: 0;
        }

        .form-group.agree {
            display: flex;
            align-items: center;
            gap: 28px;
        }

        .copy_link:hover {
            background: #fff;
            color: #000;
        }

        .modal-body {
            display: flex;
            gap: 23rem;
        }

        .copy_link {
            padding: 7px 14px;
            border-radius: inherit;
            background: black;
            color: #fff;
            border: none;
            white-space: nowrap;
        }

        span.alert.alert-danger {
            position: fixed;
            z-index: 999;
            bottom: 1px;
            right: 33px;
            font-size: 19px;
        }

        .image_box {
            display: inline-block;
            margin: 10px;
            position: relative;
        }

        /*.image_box img {*/
        /*  max-width: 100px;*/
        /*  max-height: 100px;*/
        /*}*/

        .remove-button {
            position: absolute;
            top: 0;
            right: 0;
            background: none;
            border: none;
            cursor: pointer;
            padding: 0;
            font-size: 20px;
        }

        .col-12.hiding_text h3 {
            font-size: 32px;
            display: flex;
            justify-content: center;
            text-transform: capitalize;
            align-items: center;
        }

        .hiding_text {
            position: relative;
            display: flex;
            justify-content: center;
            padding-top: 300px;
            width: 500px;
            height: 500px;
        }

        .hiding_text img {
            position: absolute;
            left: 0;
            top: 0;
            /* width: 100%; */
            /* height: 100%; */
        }

        .user-profile {
            padding: 22px 39px !important;
        }

        .form {
            margin-left: 105px;
        }
    </style>

</head>
@if (Auth::check())
    @php
        $doctor = App\SlotsData::where('user_id', Auth::user()->id)->first();
        $list_patient = App\DoctorRegisterPortal::count();
        if ($list_patient > 0) {
            $patient_list = App\DoctorRegisterPortal::where('user_id', Auth::user()->id)->get();
            $count_patient = count($patient_list);
        }
    @endphp
@endif
@if (\Session::has('success'))
    <div class="alert alert-success rounded-0">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <p class="text-center m-0 text-white">{{ session('success') }}</p>
    </div>
@endif


<body class="   pace-done pace-done" data-new-gr-c-s-check-loaded="14.1114.0" data-gr-ext-installed="">
    <!--<div class="pace  pace-inactive pace-inactive">-->
    <!--    <div class="pace-progress" data-progress-text="100%" data-progress="99"-->
    <!--        style="transform: translate3d(100%, 0px, 0px);">-->
    <!--        <div class="pace-progress-inner"></div>-->
    <!--    </div>-->
    <!--    <div class="pace-activity"></div>-->
    <!--</div>-->
    <!-- Preloader area start -->
    <!--<div id="preloader" style="display: none;"></div>-->
