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
                                        <span>Welcome  {!! Auth::user()->first_name !!} </span>
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
                                <span class="panel-title">{{ _lang('Patient List') }}</span>
                                {{-- <a class="btn btn-primary btn-xs ml-auto" href="">{{ _lang('Add New') }}</a> --}}
                            </div>
                            <div class="card-body">
                                <table id="coupons_table" class="table table-bordered data-table">
                                    <thead>
                                        <tr>
                                            <th>{{ _lang('Id') }}</th>
                                            <th>{{ _lang('First Name') }}</th>
                                            <th>{{ _lang('Last Name') }}</th>
                                            <th>{{ _lang('City') }}</th>
                                            <th>{{ _lang('Gender') }}</th>
                                            <th>{{ _lang('Email') }}</th>
                                            <th>{{ _lang('Number') }}</th>
                                            <th class="text-center">{{ _lang('Action') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($list_patient > 0)
                                            @foreach ($patient_list as $data)
                                                <tr>
                                                    <td class='code'>{{ $loop->index + 1 }}</td>
                                                    <td class='code'>{{ $data->fname }}</td>
                                                    <td class='code'>{{ $data->lname }}</td>
                                                    <td class='code'>{{ $data->city }}</td>
                                                    <td class='code'>{{ $data->gender }}</td>
                                                    <td class='code'>{{ $data->email }}</td>
                                                    <td class='code'>{{ $data->number }}</td>

                                                    <td class="text-center">
                                                        <div class="dropdown">
                                                            <button class="btn btn-light dropdown-toggle btn-xs"
                                                                type="button" id="dropdownMenuButton"
                                                                data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                                {{ _lang('Action') }}
                                                                <i class="fas fa-angle-down"></i>
                                                            </button>
                                                            <form action="" method="post">
                                                                {{ csrf_field() }}
                                                                <input name="_method" type="hidden" value="DELETE">
                                                                <div class="dropdown-menu"
                                                                    aria-labelledby="dropdownMenuButton">
                                                                    <a href="{{ route('viewPatient', [$data->id]) }}"
                                                                        class="dropdown-item dropdown-edit dropdown-edit"><i
                                                                            class="mdi mdi-pencil"></i>
                                                                        {{ _lang('View More Details') }}</a>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif

                                    </tbody>

                                </table>
                                @if (!$list_patient > 0)
                                    <p class="text-danger text-center">You cannot use any slot and no patient found!</p>
                                @endif
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
<!--End Page Container-->
@include('theme.myweb.userDashboard.footer');
