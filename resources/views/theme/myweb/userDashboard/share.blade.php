@if (Auth::check())
    @php
        $doctor = App\SlotsData::where('user_id', Auth::user()->id)->first();
        $patient_list = App\DoctorRegisterPortal::where('user_id', Auth::user()->id)->get();
        $count_patient = count($patient_list);
    @endphp
@endif
<style>
    .user-profile {
        display: none !important;
    }
</style>
<html lang="en" class=" ">

<head>
    <meta charset="utf-8">
    <title>id2</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="4g9BXRgqRjxCw8dQw5dVCwfqvTmTHYeQhDoeG9WE">

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
            width: 16.875rem;
            max-width: 16.875rem;
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
            background: url({{ asset('public/uploads/media/file_64adca43ad735.jpg') }}) center center/cover no-repeat;
        }
    </style>

</head>

@if (\Session::has('success'))
    <div class="alert alert-success rounded-0">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <p class="text-center m-0 text-white">{{ session('success') }}</p>
    </div>
@endif


<body class="   pace-done pace-done" data-new-gr-c-s-check-loaded="14.1114.0" data-gr-ext-installed="">
    <div class="pace  pace-inactive pace-inactive">
        <div class="pace-progress" data-progress-text="100%" data-progress="99"
            style="transform: translate3d(100%, 0px, 0px);">
            <div class="pace-progress-inner"></div>
        </div>
        <div class="pace-activity"></div>
    </div>
    <!-- Preloader area start -->
    <div id="preloader" style="display: none;"></div>

    <!-- Preloader area end -->
    <div class="page-container">
        <!-- sidebar menu area start -->

        <!-- sidebar menu area end -->
        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->


            <div class="header-area"
                style="position: absolute;top: 0;width: 100%;z-index: 32; background:transparent; border:none;">
                <div class="row align-items-center">

                    <!-- nav and search button -->
                    <!-- profile info & task notification -->
                    <div class="col-lg-6 col-12 offset-lg-6">
                        <ul class="notification-area float-right">
                            <li>
                                <div class="user-profile">
                                    <h4 class="user-name dropdown-toggle" data-toggle="dropdown">
                                        <img class="avatar user-thumb" id="my-profile-img"
                                            src="{{ asset('public/uploads/profile/default.png') }}" alt="avatar"> <i
                                            class="fa fa-angle-down"></i>
                                    </h4>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="{{ url('updateProfile') }}"><i
                                                class="ti-settings text-muted mr-2"></i> Profile Settings</a>
                                        <a class="dropdown-item" href="{{ route('changePassword') }}"><i
                                                class="ti-pencil text-muted mr-2"></i> Change Password</a>
                                        <div class="dropdown-divider mb-0"></div>
                                        <a class="dropdown-item" href="{{ route('userLogout') }}"><i
                                                class="ti-power-off text-muted mr-2"></i>
                                            Logout</a>
                                    </div>
                                </div>
                            </li>

                        </ul>

                    </div>
                </div>
            </div>

            <!-- header area end -->
            <!-- page title area start -->
            <div class="page-title-area mb-3">
                <div class="row align-items-center py-3">

                    <div class="col-sm-12">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title float-left">Dashboard</h4>
                        </div>
                    </div>

                </div>
            </div><!-- page title area end -->

            <div class="main-content-inner ">

                <div class="alert alert-success alert-dismissible" id="main_alert" role="alert">
                    <button type="button" id="close_alert" class="close">
                        <span aria-hidden="true"><i class="far fa-times-circle"></i></span>
                    </button>
                    <span class="msg"></span>
                </div>
                <link rel="stylesheet" href="{{ 'public/backend/plugins/chartjs/Chart.min.css' }}">
                <div class="">
                    <div class="row hidingWhilePrint">
                        <div class="col-md-12 mb-12">
                            <div class="card">
                                <div class="seo-fact sbg1">
                                    <div class="p-4">
                                        <div class="seofct-icon">
                                            <span>{{ $patiente->fname }} {{ $patiente->lname }} Implant Report </span>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class='' style='margin-right:4rem;'>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class='row hidingWhilePrint'>
                                                    <div class="col-md-6">
                                                        <div class="form-group">

                                                            <label
                                                                class="control-label">{{ _lang('First Name') }}</label>
                                                            <input type="text" readonly class="form-control"
                                                                value="{{ $patiente->fname ?? '' }}">

                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label
                                                                class="control-label">{{ _lang('Last Name') }}</label>
                                                            <input type="text" readonly class="form-control"
                                                                value="{{ $patiente->lname ?? '' }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label
                                                                class="control-label">{{ _lang('Strees Address') }}</label>
                                                            <input type="text" readonly class="form-control "
                                                                value="{{ $patiente->streesAddress ?? '' }}">
                                                        </div>
                                                    </div>
                                                    @php
                                                        $country = App\Country::where('id', $patiente->country)->first();
                                                        $State = App\State::where('id', $patiente->State)->first();
                                                        $city = App\City::where('id', $patiente->city)->first();
                                                    @endphp
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label
                                                                class="control-label">{{ _lang('Country') }}</label>
                                                            <input type="text" readonly class="form-control "
                                                                value="{{ $country->name ?? 'N/A' }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label">{{ _lang('State') }}</label>
                                                            <input type="text" readonly class="form-control "
                                                                value="{{ $State->name ?? 'N/A' }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label">{{ _lang('City') }}</label>
                                                            <input type="text" readonly class="form-control"
                                                                value="{{ $city->name ?? 'N/A' }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label
                                                                class="control-label">{{ _lang('Zip Code') }}</label>
                                                            <input type="text" readonly class="form-control "
                                                                value="{{ $patiente->zipCode ?? 'N/A' }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label">{{ _lang('Gender') }}</label>
                                                            <input type="text" readonly class="form-control "
                                                                value="{{ $patiente->gender ?? 'N/A' }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label">{{ _lang('Age') }}</label>
                                                            <input type="text" readonly class="form-control "
                                                                value="{{ $patiente->age ?? 'N/A' }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label">{{ _lang('Email') }}</label>
                                                            <input type="text" readonly class="form-control "
                                                                value="{{ $patiente->email ?? '' }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label
                                                                class="control-label">{{ _lang('Phone No') }}</label>
                                                            <input type="text" readonly class="form-control "
                                                                value="{{ $patiente->number ?? 'N/A' }}">
                                                        </div>
                                                    </div>
                                                </div>


                                                @php
                                                    
                                                    if ($patiente->id) {
                                                        $tooth = App\TeethData::where('patiente_id', $patiente->id)->get();
                                                    }
                                                @endphp
                                                <div class='row'>
                                                    <div class='col-12'>
                                                        <button onclick="printPage()"
                                                            class='btn btn-warning'>Print</button>
                                                    </div>
                                                </div>
                                                <div class='row print-section'>
                                                    @foreach ($tooth as $teeth)
                                                        @php
                                                            $dental_implant = json_decode($teeth->dental_implant);
                                                            $manufactures = json_decode($teeth->manufactures);
                                                            $brand = json_decode($teeth->brand);
                                                            $platform = json_decode($teeth->platform);
                                                            $reference_Part = json_decode($teeth->reference_Part);
                                                            $implant_surgery = json_decode($teeth->implant_surgery);
                                                            $lot = json_decode($teeth->lot);
                                                            if ($dental_implant) {
                                                                $teeth_count = count($dental_implant);
                                                            }
                                                        @endphp
                                                        <div class='container-fluid hidingWhilePrint'>

                                                        </div>
                                                        <div class='row flex col-12'>
                                                            <div class="col-6 my-4">
                                                                <h5>Information About Dentist and Implant: </h5>
                                                            </div>


                                                        </div>




                                                        @php
                                                            $json_images = json_decode($teeth->images);
                                                            $doctor_name = json_decode($teeth->doctor_name);
                                                            $doctor_phone_number = json_decode($teeth->doctor_phone_number);
                                                            $practice_name_of_restoring_dentist = json_decode($teeth->practice_name_of_restoring_dentist);
                                                            $Implant_Restoration_date = json_decode($teeth->Implant_Restoration_date);
                                                            $abutment_type = json_decode($teeth->abutment_type);
                                                        @endphp

                                                        @if ($dental_implant)
                                                            @for ($i = 0; $i < $teeth_count; $i++)
                                                                @php
                                                                    $new_dental_word = str_replace('-', ' # ', $dental_implant[$i]);
                                                                    $words = explode('-', $dental_implant[$i]);
                                                                    $teeth_no = intval($words[1]);
                                                                    $json_images = App\ToothImage::where('doctor_register_portal_id', $patiente->id)
                                                                        ->where('tooth_id', $teeth_no)
                                                                        ->where('teeth_data_id', $teeth->id)
                                                                        ->first();
                                                                    if ($json_images) {
                                                                        $array_images = json_decode($json_images->images);
                                                                        $countImages = count($array_images);
                                                                    } else {
                                                                        $countImages = 0; // Set count to 0 if there are no images
                                                                    }
                                                                @endphp
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <h5 style="text-transform: capitalize">
                                                                            {{ $dental_implant[$i] }}: </h5>
                                                                    </div>
                                                                </div>
                                                                @for ($j = 0; $j < $countImages; $j++)
                                                                    @if (isset($array_images[$j]))
                                                                        <div class="col-md-4">
                                                                            <div class="form-group">
                                                                                <img src="{{ asset('public/image/xrays/' . $array_images[$j]) }}"
                                                                                    alt="image" class="img-fluid"
                                                                                    style="width: 300px; height: 300px;">
                                                                            </div>
                                                                        </div>
                                                                    @endif
                                                                @endfor


                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label
                                                                            class="control-label">{{ _lang('Doctor Name') }}</label>
                                                                        <input type="text" readonly
                                                                            class="form-control "
                                                                            value="{{ $doctor_name[$i] ?? 'N/A' }}">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label
                                                                            class="control-label">{{ _lang('Doctor Phone No') }}</label>
                                                                        <input type="text" readonly
                                                                            class="form-control "
                                                                            value="{{ $doctor_phone_number[$i] ?? 'N/A' }}">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label
                                                                            class="control-label">{{ _lang('Practice Name Of Restoring Dentist') }}</label>
                                                                        <input type="text" readonly
                                                                            class="form-control "
                                                                            value="{{ $practice_name_of_restoring_dentist[$i] ?? 'N/A' }}">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label
                                                                            class="control-label">{{ _lang('Implant Restoration Date') }}</label>
                                                                        <input type="text" readonly
                                                                            class="form-control "
                                                                            value="{{ $Implant_Restoration_date[$i] ?? 'N/A' }}">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label
                                                                            class="control-label">{{ _lang('Abutment Type') }}</label>
                                                                        <input type="text" readonly
                                                                            class="form-control "
                                                                            value="{{ $abutment_type[$i] ?? 'N/A' }}">
                                                                    </div>
                                                                </div>
                                                                @php
                                                                    $m = App\Manufacturer::where('manufacturer_id', $manufactures[$i])->first();
                                                                    if ($m->manufacturer_name == 'Other Option') {
                                                                        $m->manufacturer_name = $manufactures[$i];
                                                                    }
                                                                    
                                                                @endphp
                                                                @if ($manufactures[$i])
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label
                                                                                class="control-label">{{ _lang('Manufacturer') }}</label>
                                                                            <input type="text" readonly
                                                                                class="form-control "
                                                                                value="{{ $m->manufacturer_name ?? $manufactures[$i] }}">
                                                                        </div>
                                                                    </div>
                                                                @endif



                                                                @if ($brand)
                                                                    @php
                                                                        $b = App\Brand::where('brand_id', $brand[$i])->first();
                                                                    @endphp

                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label
                                                                                class="control-label">{{ _lang('Brand / Model') }}</label>

                                                                            <input type="text" readonly
                                                                                class="form-control "
                                                                                data-real-value=""
                                                                                value="{{ $b->brand_name ?? ($brand[$i] ?? 'N/A') }}">

                                                                        </div>
                                                                    </div>
                                                                @endif
                                                                @if ($platform)
                                                                    @php
                                                                        $p = App\Diameter::where('delimeter_id', $platform[$i])->first();
                                                                    @endphp

                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label
                                                                                class="control-label">{{ _lang('Size / Diameter') }}</label>
                                                                            <input type="text" readonly
                                                                                class="form-control "
                                                                                value="{{ $p ? $p->delimiter_name : $platform[$i] ?? 'N/A' }}">
                                                                        </div>
                                                                    </div>
                                                                @endif
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label
                                                                            class="control-label">{{ _lang('Reference Part') }}</label>
                                                                        <input type="text" readonly
                                                                            class="form-control "
                                                                            value="{{ $reference_Part[$i] ? $reference_Part[$i] : 'N/A' }}">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label
                                                                            class="control-label">{{ _lang('Lot Number') }}</label>
                                                                        <input type="text" readonly
                                                                            class="form-control "
                                                                            value="{{ $lot[$i] ? $lot[$i] : 'N/A' }}">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label
                                                                            class="control-label">{{ _lang('Implant Surgery') }}</label>
                                                                        <input type="text" readonly
                                                                            class="form-control "
                                                                            value="{{ $implant_surgery[$i] ? $implant_surgery[$i] : 'N/A' }}">
                                                                    </div>
                                                                </div>
                                                            @endfor
                                                        @endif
                                                    @endforeach
                                                </div>
                                                <div class="col-12">

                                                </div>
                                                <div class="row">
                                                    <div class="col-12 another_implant"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!--End main content Inner-->
        </div>
        <!--End main content-->
    </div>
    <script src="{{ asset('public/theme/myweb/js/main.js') }}"></script>

    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script>
        const addPromteBtn = document.querySelector(".add_promte")
        addPromteBtn.addEventListener("click", () => {
            const DOCTOR_PORTAL_HTML = document.querySelector(".another_implant")
            DOCTOR_PORTAL_HTML.insertAdjacentHTML("beforeend", `
        <div class='container'>
                <div class="row">
                   
                    <div class="col-lg-12">
                        <div class="main_doctor_register_portal">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-12 col-lg-12 text-center">
                                        <div class="doctor_register_portal_heading">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-10">
                                        <form action="{{ route('implantStore') }}" method="post" id="form"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                             <input type="hidden" name="patiente_id" value='{{ $patiente->id }}'>
                                                <input type="hidden" value='patient' name='status'>
                                                <div class="col-12">
                                                    <label for="text">Implant Placing Doctor name</label>
                                                    <input type="text" placeholder="Enter here"
                                                        name="doctor_name">
                                                </div>
                                                <div class="col-12 ">
                                                    <label for="text">Implant Placing Doctor Phone #</label>
                                                    <input type="number" placeholder="Enter here"
                                                        name="doctor_phone_number">
                                                </div>


                                                <div class="col-12">
                                                    <div class="teeth-image-p">
                                                        <div class="teeth-image">
                                                            <div class="top-teeth-images">
                                                                <img class="top-molar"
                                                                    src="{{ asset('public/theme/myweb/images/top-molar.png') }}"
                                                                    alt="">
                                                                <div class="teeths">
                                                                    <div class="teeth" id="tooth-1"><img
                                                                            class="img-fluid"
                                                                            src="{{ asset('public/theme/myweb/images/teeth-1.png') }}"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="teeth" id="tooth-2"><img
                                                                            class="img-fluid"
                                                                            src="{{ asset('public/theme/myweb/images/teeth-2.png') }}"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="teeth" id="tooth-3"><img
                                                                            class="img-fluid"
                                                                            src="{{ asset('public/theme/myweb/images/teeth-3.png') }}"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="teeth" id="tooth-4"><img
                                                                            class="img-fluid"
                                                                            src="{{ asset('public/theme/myweb/images/teeth-4.png') }}"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="teeth" id="tooth-5"><img
                                                                            class="img-fluid"
                                                                            src="{{ asset('public/theme/myweb/images/teeth-5.png') }}"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="teeth" id="tooth-6"><img
                                                                            class="img-fluid"
                                                                            src="{{ asset('public/theme/myweb/images/teeth-6.png') }}"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="teeth" id="tooth-7"><img
                                                                            class="img-fluid"
                                                                            src="{{ asset('public/theme/myweb/images/teeth-7.png') }}"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="teeth" id="tooth-8"><img
                                                                            class="img-fluid"
                                                                            src="{{ asset('public/theme/myweb/images/teeth-8.png') }}"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="teeth" id="tooth-9"><img
                                                                            class="img-fluid"
                                                                            src="{{ asset('public/theme/myweb/images/teeth-9.png') }}"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="teeth" id="tooth-10"><img
                                                                            class="img-fluid"
                                                                            src="{{ asset('public/theme/myweb/images/teeth-10.png') }}"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="teeth" id="tooth-11"><img
                                                                            class="img-fluid"
                                                                            src="{{ asset('public/theme/myweb/images/teeth-11.png') }}"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="teeth" id="tooth-12"><img
                                                                            class="img-fluid"
                                                                            src="{{ asset('public/theme/myweb/images/teeth-12.png') }}"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="teeth" id="tooth-13"><img
                                                                            class="img-fluid"
                                                                            src="{{ asset('public/theme/myweb/images/teeth-13.png') }}"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="teeth" id="tooth-14"><img
                                                                            class="img-fluid"
                                                                            src="{{ asset('public/theme/myweb/images/teeth-14.png') }}"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="teeth" id="tooth-15"><img
                                                                            class="img-fluid"
                                                                            src="{{ asset('public/theme/myweb/images/teeth-15.png') }}"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="teeth" id="tooth-16"><img
                                                                            class="img-fluid"
                                                                            src="{{ asset('public/theme/myweb/images/teeth-16.png') }}"
                                                                            alt="">
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="btm-teeth-images">
                                                                <img class="top-molar"
                                                                    src="{{ asset('public/theme/myweb/images/btm-molar.png') }}"
                                                                    alt="">
                                                                <div class="teeths">
                                                                    <div class="teeth" id="tooth-17"><img
                                                                            class="img-fluid"
                                                                            src="{{ asset('public/theme/myweb/images/teeth-17.png') }}"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="teeth" id="tooth-18"><img
                                                                            class="img-fluid"
                                                                            src="{{ asset('public/theme/myweb/images/teeth-18.png') }}"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="teeth" id="tooth-19"><img
                                                                            class="img-fluid"
                                                                            src="{{ asset('public/theme/myweb/images/teeth-19.png') }}"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="teeth" id="tooth-20"><img
                                                                            class="img-fluid"
                                                                            src="{{ asset('public/theme/myweb/images/teeth-20.png') }}"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="teeth" id="tooth-21"><img
                                                                            class="img-fluid"
                                                                            src="{{ asset('public/theme/myweb/images/teeth-21.png') }}"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="teeth" id="tooth-22"><img
                                                                            class="img-fluid"
                                                                            src="{{ asset('public/theme/myweb/images/teeth-22.png') }}"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="teeth" id="tooth-23"><img
                                                                            class="img-fluid"
                                                                            src="{{ asset('public/theme/myweb/images/teeth-23.png') }}"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="teeth" id="tooth-24"><img
                                                                            class="img-fluid"
                                                                            src="{{ asset('public/theme/myweb/images/teeth-24.png') }}"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="teeth" id="tooth-25"><img
                                                                            class="img-fluid"
                                                                            src="{{ asset('public/theme/myweb/images/teeth-25.png') }}"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="teeth" id="tooth-26"><img
                                                                            class="img-fluid"
                                                                            src="{{ asset('public/theme/myweb/images/teeth-26.png') }}"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="teeth" id="tooth-27"><img
                                                                            class="img-fluid"
                                                                            src="{{ asset('public/theme/myweb/images/teeth-27.png') }}"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="teeth" id="tooth-28"><img
                                                                            class="img-fluid"
                                                                            src="{{ asset('public/theme/myweb/images/teeth-28.png') }}"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="teeth" id="tooth-29"><img
                                                                            class="img-fluid"
                                                                            src="{{ asset('public/theme/myweb/images/teeth-29.png') }}"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="teeth" id="tooth-30"><img
                                                                            class="img-fluid"
                                                                            src="{{ asset('public/theme/myweb/images/teeth-30.png') }}"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="teeth" id="tooth-31"><img
                                                                            class="img-fluid"
                                                                            src="{{ asset('public/theme/myweb/images/teeth-31.png') }}"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="teeth" id="tooth-32"><img
                                                                            class="img-fluid"
                                                                            src="{{ asset('public/theme/myweb/images/teeth-32.png') }}"
                                                                            alt="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="subForm">
                                                        <div class="row">

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <label for="selectImage">Upload x-ray/images of implant<small></small></label>
                                                    <input type="file" id="selectImage" name="images[]"
                                                        multiple="">
                                                </div>
                                                <div class="col-lg-12 col-12">
                                                    <div class="preview_image">
                                                        <p><span class="text-center" id="totalImages">0</span> File(s)
                                                            Selected</p>
                                                        <div id="images"></div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <label for="text">Name of Restoring Dentist:</label>
                                                    <input type="text" placeholder="Enter here"
                                                        name="restoring_dentist_name">
                                                </div>


                                                <div class="col-12">
                                                    <label for="text">Practice Name of Restoring Dentist</label>
                                                    <input type="text" placeholder="Enter here"
                                                        name="practice_name_of_restoring_dentist">
                                                </div>

                                                <div class="col-12">
                                                    <label for="date">Date of Implant Restoration/Abutment &amp;
                                                        Crown Placement:</label>
                                                    <input type="date" placeholder="Enter here"
                                                        name="Implant_Restoration_date">
                                                </div>


                                                <div class="col-12">
                                                    <label for="text">Type of Abutment</label>
                                                    <input type="text" placeholder="Enter here"
                                                        name="abutment_type">
                                                </div>
                                                <div class="col-12">
                                                    <label for="text">Current Dentist:</label>
                                                    <input type="text" placeholder="Enter here"
                                                        name="current_dentist">
                                                </div>
                                           
                                                <div class="col-12 col-lg-12 mt-5 ">
                                                    <div class="doctor_portal_rejister">
                                                        <input class="btn-secondary" type="submit" id="submit"
                                                            value="Add Implant">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                `)

        });
    </script>
    <script>
        // showfileimages end
        function decrementTeethId(buttonElement, teethId) {
            buttonElement.parentNode.parentNode.remove();
            teethId--;
        }
        var teethId = 1;
        const teethBtns = document.querySelectorAll(".teeth");
        console.log(teethBtns);
        teethBtns.forEach((element) => {
            element.addEventListener("click", () => {
                const subForm = document.querySelector(".subForm .row");
                subForm.insertAdjacentHTML(
                    "beforeend",
                    `<div class="form-child col-6">
        <div class="col-12 text-center">
          <button type="button" class="removeBtn"  onclick="decrementTeethId(this, ${teethId})">X</button>
        </div>
        <div class="col-12">
          <label for="text">Dental Implant Site/Tooth#:</label>
          <input type="text" name="dental_implant[]" value="${element.id}">
        </div>
        <div class="col-12">
          <label for="Manufactures">* Manufacturer: (choose one)</label>
          <div class="select-parent">
            <select name="manufactures[]" id="Manufactures${teethId}" onchange="get_brand_data('Brand_${teethId}')" class="form-select Manufactures">
              <option value="">Select Manufacturer</option>
              ${manufacturing_data
                .map(
                  (manufacturer) =>
                    `<option value="${manufacturer.id}">${manufacturer.manufacturer}</option>`
                )
                .join("")}
            </select>
          </div>
        </div>
        <div class="col-12">
          <label for="Brand">* Brand: (choose one)</label>
          <div class="select-parent">
            <select name="brand[]" id="Brand_${teethId}" onchange="get_diameter_data()"  class="form-select Brand">
              <option value="">Select Brand</option>
            </select>
          </div>
        </div>
        <div class="col-12">
          <label for="Platform">* Platform size/Diameter (choose one):</label>
          <div class="select-parent">
            <select name="platform[]" id="Platform"  class="form-select Platform">
              <option value="">Select Platform</option>
            </select>
          </div>
        </div>
        <div class="col-12">
          <label for="text">Reference/Part #:</label>
          <input type="text" name="reference_Part[]" placeholder="Enter here">
        </div>
        <div class="col-12">
          <label for="text">Lot #</label>
          <input type="text" name="lot[]" placeholder="Enter here">
        </div>
        <div class="col-12">
          <label for="date">Date of implant surgery</label>
          <input type="date" name="implant_surgery[]" placeholder="Enter here">
        </div>
    </div> 
      </div>`
                );

                teethId++;
            });
        });

        function removeFields(e) {
            // const subForm = document.querySelector('.subForm .row .form-child')
            console.log(e.target.class);
        }
    </script>

    <!--End Page Container-->
    @include('theme.myweb.userDashboard.footer');
