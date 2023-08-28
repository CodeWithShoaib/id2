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
@include('theme.myweb.userDashboard.header')
<!-- Preloader area end -->
<div class="page-container">
    <!-- sidebar menu area start -->
    @include('theme.myweb.userDashboard.sidebar');
    <!-- sidebar menu area end -->
    <!-- main content area start -->
    <div class="main-content">

        <!-- header area start -->
        @include('theme.myweb.userDashboard.headerAreaComponent')
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
            <div class="container">
                <div class="row">
                    <div class="col-md-12 mb-12">
                        <div class="card">
                            <div class="seo-fact sbg1">
                                <div class="p-4">
                                    <div class="seofct-icon">
                                        <span>Welcome  {!! Auth::user()->first_name !!} {!! Auth::user()->last_name !!}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class='container'>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card no-export">
                            <div class="card-header d-flex align-items-center">
                                <span class="panel-title">{{ _lang('Change Password') }}</span>
                                {{-- <a class="btn btn-primary btn-xs ml-auto" href="">{{ _lang('Add New') }}</a> --}}
                            </div>
                            <form action="{{ url('/update_password') }}" method="post">
                                @csrf

                                <input type="password" name="password"
                                    class="form-control my-4 {{ $errors->has('password') ? 'is-invalid' : '' }}"
                                    placeholder="{{ _lang('Password') }}">

                                @if ($errors->has('password'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('password') }}
                                    </div>
                                @endif

                                <input type="password" name="password_confirmation"
                                    class="form-control my-4 {{ $errors->has('password_confirmation') ? 'is-invalid' : '' }}"
                                    placeholder="{{ _lang('Password Confrimation') }}">

                                @if ($errors->has('password_confirmation'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('password_confirmation') }}
                                    </div>
                                @endif

                                <button type="submit"
                                    class="btn-login btn btn-sm btn-primary custom_btn">{{ _lang('Update Password') }}</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End main content Inner-->

    </div>
    <!--End main content-->

</div>
<!--End Page Container-->
@include('theme.myweb.userDashboard.footer');
