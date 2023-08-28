@if (Auth::check())
    @php
        $doctor = App\SlotsData::where('user_id', Auth::user()->id)->first();
        $patient_list = App\DoctorRegisterPortal::where('user_id', Auth::user()->id)->get();
        $count_patient = count($patient_list);
        $uriSegments = explode('/', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
        $id = $uriSegments[2];
        
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

        <div class="main-content-inner" style='padding-left:130px;'>
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
                                        @if (Auth::Check() && Auth::user()->user_status == 'Dental_Specialist')
                                            <span>Welcome {!! Auth::user()->first_name !!} {!! Auth::user()->last_name !!}</span>
                                        @else
                                            <span>Welcome {!! Auth::user()->first_name !!} {!! Auth::user()->last_name !!}</span>
                                        @endif
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @if (Auth::user()->user_status == 'Dental_Specialist')
                @php
                    session(['doctor_register_portal_id' => $patiente->id]);
                @endphp
                @if ($patiente->hide_from_doctor == 0)
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
                                                                @if (Auth::Check())
                                                                    <label
                                                                        class="control-label">{{ _lang('First Name') }}</label>
                                                                    <input type="text" readonly class="form-control"
                                                                        value="{{ $patiente->fname ?? 'N/A' }}">
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label
                                                                    class="control-label">{{ _lang('Last Name') }}</label>
                                                                <input type="text" readonly class="form-control"
                                                                    value="{{ $patiente->lname ?? 'N/A' }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label
                                                                    class="control-label">{{ _lang('Strees Address') }}</label>
                                                                <input type="text" readonly class="form-control "
                                                                    value="{{ $patiente->streesAddress ?? 'N/A' }}">
                                                            </div>
                                                        </div>
                                                        @php
                                                          
                                                            $c = App\City::where('id', $patiente->city)->first();
                                                            $s = App\State::where('id', $patiente->State)->first();
                                                            $countries = App\Country::where('id', $patiente->country)->first();
                                                        @endphp
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label
                                                                    class="control-label">{{ _lang('Country') }}</label>
                                                                <input type="text" readonly class="form-control "
                                                                    value="{{ $countries->name ?? 'N/A' }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label
                                                                    class="control-label">{{ _lang('State') }}</label>
                                                                <input type="text" readonly class="form-control "
                                                                    value="{{ $s->name ?? 'N/A' }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label
                                                                    class="control-label">{{ _lang('City') }}</label>
                                                                <input type="text" readonly class="form-control"
                                                                    value="{{ $c->name ?? 'N/A' }}">
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
                                                                <label
                                                                    class="control-label">{{ _lang('Email') }}</label>
                                                                <input type="text" readonly class="form-control "
                                                                    value="{{ $patiente->email ?? 'N/A' }}">
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
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label
                                                                    class="control-label">{{ _lang('Age') }}</label>
                                                                <input type="text" readonly class="form-control "
                                                                    value="{{ $patiente->age ?? 'N/A' }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label
                                                                    class="control-label">{{ _lang('Gender') }}</label>
                                                                <input type="text" readonly class="form-control "
                                                                    value="{{ $patiente->gender ?? 'N/A' }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 my-4 hidingWhilePrint" style='text-align:end;'>
                                                        <button onclick="printPage()"
                                                            class='btn btn-warning'>Print</button>
                                                        <button class='btn btn-danger' data-toggle="modal"
                                                            data-target="#exampleModal">Share</button>
                                                        <input type='hidden'
                                                            value='{{ route('sharePatient', [$patiente->id]) }}'
                                                            id="myAnchorTag" />
                                                    </div>

                                                    @php
                                                        
                                                        if ($patiente->id) {
                                                            $tooth = App\TeethData::where('patiente_id', $patiente->id)->get();
                                                        }
                                                    @endphp
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

                                                            <div class='row flex col-12'>
                                                                <div class="col-6 my-4">
                                                                    <h5>Information About Dentist and Implant:</h5>
                                                                </div>
                                                                @if (Auth::Check() && Auth::user()->user_status == 'patient')
                                                              
                                                              
                                                                    <div class="col-12 my-4 text-left text-white"
                                                                        style='text-align:end;'>
                                                                        <a class='btn btn-success'
                                                                            href='{{ route('edit.slot', [$teeth->id, $patiente]) }}'>Edit
                                                                            Slots</a>
                                                                    </div>
                                                                @endif
                                                                @if (Auth::Check() && Auth::user()->user_status == 'Dental_Specialist')
                                                                    @if ($patiente->requets_for_editing == 0)
                                                                        <!--0 means request for editing-->
                                                                        <!--1 means pending-->
                                                                        <!--2 means request accept-->
                                                                        <!--3 means rejected-->

                                                                        <div class='container-fluid'>
                                                                            <div class='row'>
                                                                                <div class="col-12">
                                                                                    <form method='post'
                                                                                        action='{{ route('editingRequest', [$patiente->id]) }}'>
                                                                                        @csrf
                                                                                        <div class="form-group">
                                                                                            <input type='hidden'
                                                                                                value='1'
                                                                                                name='requets_for_editing'>
                                                                                            <input type='hidden'
                                                                                                value='{{ $patiente->email }}'
                                                                                                name='request_email'>
                                                                                            <input type='submit'
                                                                                                class='btn btn-success'
                                                                                                value='Request for editing'>
                                                                                        </div>
                                                                                    </form>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @elseif($patiente->requets_for_editing == 1)
                                                                        <div class='container-fluid'>
                                                                            <div class='row'>
                                                                                <div class="col-12">
                                                                                    <div class="form-group">
                                                                                        <a
                                                                                            class='btn btn-success text-white'>Pending
                                                                                            Request</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @elseif($patiente->requets_for_editing == 2)
                                                                        @if ($patiente->user_edit_allow == 1)
                                                                            <div class="col-12 my-4 text-left text-white"
                                                                                style='text-align:end;'>
                                                                                <a class='btn btn-success'
                                                                                    href='{{ route('edit.slot', [$teeth->id, $patiente]) }}'>Edit
                                                                                    Slots</a>
                                                                            </div>
                                                                        @endif
                                                                    @elseif($patiente->requets_for_editing == 3)
                                                                        @if ($patiente->user_edit_allow == 0)
                                                                            <div class='container'>
                                                                                <div class='row'>
                                                                                    <div class="col-12">
                                                                                        <form method='post'
                                                                                            action='{{ route('editingRequest', [$patiente->id]) }}'>
                                                                                            @csrf
                                                                                            <div class="form-group">
                                                                                                <input type='hidden'
                                                                                                    value='1'
                                                                                                    name='requets_for_editing'>
                                                                                                <input type='hidden'
                                                                                                    value='{{ $patiente->email }}'
                                                                                                    name='request_email'>
                                                                                                <input type='submit'
                                                                                                    class='btn btn-success'
                                                                                                    value='Request for editing'>
                                                                                            </div>
                                                                                        </form>
                                                                                        <p class='text-danger'>
                                                                                            {{ $patiente->fname }}
                                                                                            Reject your request!</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endif
                                                                    @endif
                                                                @endif


                                                            </div>


                                                            <!--<div class="col-md-6">-->
                                                            <!--    <div class="form-group">-->
                                                            <!--        <label-->
                                                            <!--            class="control-label">{{ _lang('Current Dentist') }}</label>-->
                                                            <!--        <input type="text" readonly class="form-control "-->
                                                            <!--            value="{{ $teeth->current_dentist ?? 'N/A' }}">-->
                                                            <!--    </div>-->
                                                            <!--</div>-->


                                                            <!--$dental_implant-->
                                                            @php
                                                                $allow_doctor_for_edit = App\DoctorRegisterPortal::where('user_id', Auth::user()->id)
                                                                    ->where('user_edit_allow', 1)
                                                                    ->where('status', 'patient')
                                                                    ->first();
                                                                $doctors_name = json_decode($teeth->doctor_name);
                                                                $doctor_phone_number = json_decode($teeth->doctor_phone_number);
                                                                $Implant_Restoration_date = json_decode($teeth->Implant_Restoration_date);
                                                                $abutment_type = json_decode($teeth->abutment_type);
                                                                $restoring_dentist_name = json_decode($teeth->restoring_dentist_name);
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
                                                    </div>


                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <h5 style="text-transform: capitalize">
                                                                {{ $new_dental_word }}:</h5>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        @for ($j = 0; $j < $countImages; $j++)
                                                            @if (isset($array_images[$j]))
                                                                <div class="col-md-4 text-center">
                                                                    <div class="form-group">
                                                                        <img src="{{ asset('public/image/xrays/' . $array_images[$j]) }}"
                                                                            alt="image" class="img-fluid"
                                                                            style="width: 300px; height: 300px;">
                                                                    </div>
                                                                </div>
                                                            @endif
                                                        @endfor
                                                    </div>
                                                    <div class="row d-flex">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label
                                                                    class="control-label">{{ _lang('Doctor Name') }}</label>
                                                                <input type="text" readonly class="form-control "
                                                                    value="{{ $doctors_name[$i] ?? 'N/A' }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label
                                                                    class="control-label">{{ _lang('Doctor Phone No') }}</label>
                                                                <input type="text" readonly class="form-control "
                                                                    value="{{ $doctor_phone_number[$i] ?? 'N/A' }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label
                                                                    class="control-label">{{ _lang('Practice Name Of Restoring Dentist') }}</label>
                                                                <input type="text" readonly class="form-control "
                                                                    value="{{ $restoring_dentist_name[$i] ?? 'N/A' }} ">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label
                                                                    class="control-label">{{ _lang('Implant Restoration Date') }}</label>
                                                                <input type="text" readonly class="form-control "
                                                                    value="{{ $Implant_Restoration_date[$i] ?? 'N/A' }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label
                                                                    class="control-label">{{ _lang('Abutment Type') }}</label>
                                                                <input type="text" readonly class="form-control "
                                                                    value="{{ $abutment_type[$i] ?? 'N/A' }}">
                                                            </div>
                                                        </div>

                                                        @php
                                                            $m = App\Manufacturer::where('manufacturer_id', $manufactures[$i])->first();
                                                            
                                                            if ($m->manufacturer_id == '0') {
                                                                $m->manufacturer_name = null;
                                                            }
                                                            
                                                        @endphp
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label
                                                                    class="control-label">{{ _lang('Manufactures') }}</label>
                                                                <input type="text" readonly class="form-control "
                                                                    value="{{ $m->manufacturer_name ?? ($manufactures[$i] ?? 'N/A') }}">
                                                            </div>
                                                        </div>

                                                        @if ($brand)
                                                            @php
                                                                if (isset($brand[$i])) {
                                                                    $b = App\Brand::where('brand_id', $brand[$i])->first();
                                                                }
                                                            @endphp

                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label
                                                                        class="control-label">{{ _lang('Brand') }}</label>
                                                                    <input type="text" readonly
                                                                        class="form-control"
                                                                        data-real-value="{{ isset($brand[$i]) ? $brand[$i] : 'N/A' }}"
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
                                                                        class="control-label">{{ _lang('Platform') }}</label>
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
                                                                <input type="text" readonly class="form-control "
                                                                    value="{{ $reference_Part[$i] ? $reference_Part[$i] : 'N/A' }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label
                                                                    class="control-label">{{ _lang('Lot') }}</label>
                                                                <input type="text" readonly class="form-control "
                                                                    value="{{ $lot[$i] ? $lot[$i] : 'N/A' }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label
                                                                    class="control-label">{{ _lang('Implant Surgery') }}</label>
                                                                <input type="text" readonly class="form-control "
                                                                    value="{{ $implant_surgery[$i] ? $implant_surgery[$i] : 'N/A' }}">
                                                            </div>
                                                        </div>
                                                    </div>
                @endfor
            @endif
            @endforeach
        </div>
        <div class="col-12 hidingWhilePrint">
            <button class="btn btn-primary btn-sm add_promte" onclick="">Add Another Implant</button>
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
@else
<div class='row'>
    <div class='col-12 hiding_text'>
        <h3>{{ $patiente->fname }} has hidden his information from you</h3>
        <img src='{{ asset('public/theme/myweb/images/blur.png') }}' alt='image' />
    </div>
</div>
@endif
@else
@php
session(['doctor_register_portal_id' => $patiente->id]);
@endphp
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
                                            @if (Auth::Check())
                                                <label class="control-label">{{ _lang('First Name') }}</label>
                                                <input type="text" readonly class="form-control"
                                                    value="{{ $patiente->fname ?? 'N/A' }}">
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">{{ _lang('Last Name') }}</label>
                                            <input type="text" readonly class="form-control"
                                                value="{{ $patiente->lname ?? 'N/A' }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">{{ _lang('Strees Address') }}</label>
                                            <input type="text" readonly class="form-control "
                                                value="{{ $patiente->streesAddress ?? 'N/A' }}">
                                        </div>
                                    </div>
                                    @php
                                        
                                        $c = App\City::where('id', $patiente->city)->first();
                                        $s = App\State::where('id', $patiente->State)->first();
                                        $countries = App\Country::where('id', $patiente->country)->first();
                                    @endphp
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">{{ _lang('Country') }}</label>
                                            <input type="text" readonly class="form-control "
                                                value="{{ $countries->name ?? 'N/A' }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">{{ _lang('State') }}</label>
                                            <input type="text" readonly class="form-control "
                                                value="{{ $s->name ?? 'N/A' }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">{{ _lang('City') }}</label>
                                            <input type="text" readonly class="form-control"
                                                value="{{ $c->name ?? 'N/A' }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">{{ _lang('Zip Code') }}</label>
                                            <input type="text" readonly class="form-control "
                                                value="{{ $patiente->zipCode ?? 'N/A' }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">{{ _lang('Email') }}</label>
                                            <input type="text" readonly class="form-control "
                                                value="{{ $patiente->email ?? 'N/A' }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">{{ _lang('Phone No') }}</label>
                                            <input type="text" readonly class="form-control "
                                                value="{{ $patiente->number ?? 'N/A' }}">
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
                                            <label class="control-label">{{ _lang('Gender') }}</label>
                                            <input type="text" readonly class="form-control "
                                                value="{{ $patiente->gender ?? 'N/A' }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 my-4 hidingWhilePrint" style='text-align:end;'>
                                    <button onclick="printPage()" class='btn btn-warning'>Print</button>
                                    <button class='btn btn-danger' data-toggle="modal"
                                        data-target="#exampleModal">Share</button>
                                    <input type='hidden' value='{{ route('sharePatient', [$patiente->id]) }}'
                                        id="myAnchorTag" />
                                </div>

                                @php
                                    
                                    if ($patiente->id) {
                                        $tooth = App\TeethData::where('patiente_id', $patiente->id)->get();
                                    }
                                @endphp
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

                                        <div class='row flex col-12'>
                                            <div class="col-6 my-4">
                                                <h5>Information About Dentist and Implant:</h5>
                                            </div>
                                            @if (Auth::Check() && Auth::user()->user_status == 'patient')
                                                <div class="col-12 my-4 text-left text-white" style='text-align:end;'>
                                                    <a class='btn btn-success'
                                                        href='{{ route('edit.slot', [$teeth->id, $patiente]) }}'>Edit
                                                        Slots</a>
                                                </div>
                                            @endif
                                            @if (Auth::Check() && Auth::user()->user_status == 'Dental_Specialist')
                                                @if ($patiente->requets_for_editing == 0)
                                                    <!--0 means request for editing-->
                                                    <!--1 means pending-->
                                                    <!--2 means request accept-->
                                                    <!--3 means rejected-->

                                                    <div class='container-fluid'>
                                                        <div class='row'>
                                                            <div class="col-12">
                                                                <form method='post'
                                                                    action='{{ route('editingRequest', [$patiente->id]) }}'>
                                                                    @csrf
                                                                    <div class="form-group">
                                                                        <input type='hidden' value='1'
                                                                            name='requets_for_editing'>
                                                                        <input type='hidden'
                                                                            value='{{ $patiente->email }}'
                                                                            name='request_email'>
                                                                        <input type='submit' class='btn btn-success'
                                                                            value='Request for editing'>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @elseif($patiente->requets_for_editing == 1)
                                                    <div class='container-fluid'>
                                                        <div class='row'>
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <a class='btn btn-success text-white'>Pending
                                                                        Request</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @elseif($patiente->requets_for_editing == 2)
                                                    @if ($patiente->user_edit_allow == 1)
                                                        <div class="col-12 my-4 text-left text-white"
                                                            style='text-align:end;'>
                                                            <a class='btn btn-success'
                                                                href='{{ route('edit.slot', [$teeth->id, $patiente]) }}'>Edit
                                                                Slots</a>
                                                        </div>
                                                    @endif
                                                @elseif($patiente->requets_for_editing == 3)
                                                    @if ($patiente->user_edit_allow == 0)
                                                        <div class='container'>
                                                            <div class='row'>
                                                                <div class="col-12">
                                                                    <form method='post'
                                                                        action='{{ route('editingRequest', [$patiente->id]) }}'>
                                                                        @csrf
                                                                        <div class="form-group">
                                                                            <input type='hidden' value='1'
                                                                                name='requets_for_editing'>
                                                                            <input type='hidden'
                                                                                value='{{ $patiente->email }}'
                                                                                name='request_email'>
                                                                            <input type='submit'
                                                                                class='btn btn-success'
                                                                                value='Request for editing'>
                                                                        </div>
                                                                    </form>
                                                                    <p class='text-danger'>
                                                                        {{ $patiente->fname }}
                                                                        Reject your request!</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                @endif
                                            @endif


                                        </div>


                                        <!--<div class="col-md-6">-->
                                        <!--    <div class="form-group">-->
                                        <!--        <label-->
                                        <!--            class="control-label">{{ _lang('Current Dentist') }}</label>-->
                                        <!--        <input type="text" readonly class="form-control "-->
                                        <!--            value="{{ $teeth->current_dentist ?? 'N/A' }}">-->
                                        <!--    </div>-->
                                        <!--</div>-->


                                        <!--$dental_implant-->
                                        @php
                                            $allow_doctor_for_edit = App\DoctorRegisterPortal::where('user_id', Auth::user()->id)
                                                ->where('user_edit_allow', 1)
                                                ->where('status', 'patient')
                                                ->first();
                                            $doctors_name = json_decode($teeth->doctor_name);
                                            $doctor_phone_number = json_decode($teeth->doctor_phone_number);
                                            $Implant_Restoration_date = json_decode($teeth->Implant_Restoration_date);
                                            $abutment_type = json_decode($teeth->abutment_type);
                                            $restoring_dentist_name = json_decode($teeth->restoring_dentist_name);
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
                                </div>


                                <div class="col-md-12">
                                    <div class="form-group">
                                        <h5 style="text-transform: capitalize">
                                            {{ $new_dental_word }}:</h5>
                                    </div>
                                </div>

                                <div class="row">
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
                                </div>
                                <div class="row d-flex">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">{{ _lang('Doctor Name') }}</label>
                                            <input type="text" readonly class="form-control "
                                                value="{{ $doctors_name[$i] ?? 'N/A' }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">{{ _lang('Doctor Phone No') }}</label>
                                            <input type="text" readonly class="form-control "
                                                value="{{ $doctor_phone_number[$i] ?? 'N/A' }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label
                                                class="control-label">{{ _lang('Practice Name Of Restoring Dentist') }}</label>
                                            <input type="text" readonly class="form-control "
                                                value="{{ $restoring_dentist_name[$i] ?? 'N/A' }} ">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label
                                                class="control-label">{{ _lang('Implant Restoration Date') }}</label>
                                            <input type="text" readonly class="form-control "
                                                value="{{ $Implant_Restoration_date[$i] ?? 'N/A' }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">{{ _lang('Abutment Type') }}</label>
                                            <input type="text" readonly class="form-control "
                                                value="{{ $abutment_type[$i] ?? 'N/A' }}">
                                        </div>
                                    </div>

                                    @php
                                        $m = App\Manufacturer::where('manufacturer_id', $manufactures[$i])->first();
                                        
                                        if ($m->manufacturer_id == '0') {
                                            $m->manufacturer_name = null;
                                        }
                                        
                                    @endphp
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">{{ _lang('Manufactures') }}</label>
                                            <input type="text" readonly class="form-control "
                                                value="{{ $m->manufacturer_name ?? ($manufactures[$i] ?? 'N/A') }}">
                                        </div>
                                    </div>

                                    @if ($brand)
                                        @php
                                            if (isset($brand[$i])) {
                                                $b = App\Brand::where('brand_id', $brand[$i])->first();
                                            }
                                        @endphp

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">{{ _lang('Brand') }}</label>
                                                <input type="text" readonly class="form-control"
                                                    data-real-value="{{ isset($brand[$i]) ? $brand[$i] : 'N/A' }}"
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
                                                <label class="control-label">{{ _lang('Platform') }}</label>
                                                <input type="text" readonly class="form-control "
                                                    value="{{ $p ? $p->delimiter_name : $platform[$i] ?? 'N/A' }}">
                                            </div>
                                        </div>
                                    @endif
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">{{ _lang('Reference Part') }}</label>
                                            <input type="text" readonly class="form-control "
                                                value="{{ $reference_Part[$i] ? $reference_Part[$i] : 'N/A' }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">{{ _lang('Lot') }}</label>
                                            <input type="text" readonly class="form-control "
                                                value="{{ $lot[$i] ? $lot[$i] : 'N/A' }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">{{ _lang('Implant Surgery') }}</label>
                                            <input type="text" readonly class="form-control "
                                                value="{{ $implant_surgery[$i] ? $implant_surgery[$i] : 'N/A' }}">
                                        </div>
                                    </div>
                                </div>
                                @endfor
                                @endif
                                @endforeach
                            </div>
                            <div class="col-12 hidingWhilePrint">
                                <button class="btn btn-primary btn-sm add_promte" onclick="">Add Another
                                    Implant</button>
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

@endif

</div>
<!--End main content Inner-->
</div>
<!--End main content-->

</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Share Tooth Report</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method='post' action='{{ route('share') }}'>
                @csrf
                <div class="modal-footer">
                    <input type='text' id='email' name='email' class='form-control'>
                    <input type='hidden' name='id' value='{{ $id }}' class='form-control'>

                </div>
                <div class="modal-body">
                    <button type="button" class="btn btn-secondary copy_link" onclick='copyLinkToClipboard()'>Copy
                        Link</button>
                    <button type="submit" class="btn btn-primary copy_link">Email Tooth Report</button>
                </div>
            </form>


        </div>
    </div>
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
                    <div class="col-12">
                        <div class="main_doctor_register_portal">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-12 text-center">
                                        <div class="doctor_register_portal_heading">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <form action="{{ route('implantStore') }}" method="post" id="form"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                             <input type="hidden" name="patiente_id" value='{{ $patiente->id }}'>
                                                <input type="hidden" value='patient' name='status'>
                                            
                                                <div class="row">
    <div class="col-12">
        <p class="text-danger my-5"><b><u>"Note: Please fill all fields above to proceed to implant registration portion below!"</u></b></p>
    </div>
</div>

                                             <div class="row">
                                                <div class="col-lg-6">
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
                                                
                                              
                                                <div class="col-lg-6">
                                                           <div class="content-info">
                                                           <h6>Information for Use:</h6>
                                                                <ul>
                                                                    <li>1. Click on the tooth an implant has been placed to start registering for that site.</li>
                                                                    <li>2.	If multiple implants placed, click all teeth that apply.</li>
                                                                    <li>3.	Fill in the information below and use drop down menus for ease of use.</li>
                                                                    <li>4.	Mandatory headings are displayed with a “*”.</li>
                                                                </ul>
                                                            </div>
                                                      
                                                </div>
                                            </div>
                                                <div class="col-12">
                                                    <div class="subForm">
                                                        <div class="row">

                                                        </div>
                                                    </div>
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
        var storedData = localStorage.getItem("manufactures");
        var manufacturing_data = JSON.parse(storedData);

        var teethId = 1;
        var teethBtns = document.querySelectorAll(".teeth");
        teethBtns.forEach((element) => {
            const str = element.id;
            const match = str.match(/\d+/);
            const result = match ? match[0] : null;
            element.addEventListener("click", () => {
                var subForm = document.querySelector(".subForm .row");
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
              <select name="manufactures[]" id="Manufactures${teethId}" onchange="get_brand_data('${teethId}')" class="form-select Manufactures">
              <option value="">Select Manufacturer</option>
              ${manufacturing_data
                .map(
                  (manufacturer) =>
                    `<option value="${manufacturer.manufacturer_id}">${manufacturer.manufacturer_name}</option>`
                )
                .join("")}
            </select>
            
             <input type='text' name="" class='form-control Manufactures' style='display:none;' id="hiddenManufactures${teethId}" placeholder='Enter Another Manufacture'>
              </div>
            </div>
            <div class="col-12">
              <label for="Brand">* Brand: (choose one)</label>
              <div class="select-parent">
                <select name="brand[]" id="Brand_${teethId}" onchange="get_diameter_data('${teethId}')"  class="form-select Brand">
                  <option value="">Select Brand</option>
                </select>
                  <input type='text' name="" class='form-control Manufactures' style='display:none;' id="hiddenBrand${teethId}" placeholder='Enter Another Brand'>
              </div>
            </div>
            <div class="col-12">
              <label for="Platform">* Platform size/Diameter (choose one):</label>
              <div class="select-parent">
                <select name="" id="platform_${teethId}"  class="form-select Platform">
                  <option value="">Select Platform</option>
                </select>
                       <input type='text' name="platform[]" class='form-control Manufactures' style='display:none;' id="hiddenPlatform${teethId}" placeholder='Enter Another Platform'>
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
            <div class="col-12">
         <label for="text">Implant Placing Doctor name</label>
         <input type="text" placeholder="Enter here" name="doctor_name[]">
         </div>
         <div class="col-12 ">
             <label for="text">Implant Placing Doctor Phone #</label>
            <input type="text" id='patient_phone_number${teethId}' onchange="formatNumber(${teethId})" placeholder="Enter here" name="doctor_phone_number[]"  class='patient_phone_number'>
        </div>
        <div class="col-12">
            <label for="text">Name of Restoring Dentist:</label>
            <input type="text" placeholder="Enter here" name='restoring_dentist_name[]'>
        </div>
        <div class="col-12">
          <label for="text">Practice Name of Restoring Dentist</label>
          <input type="text" placeholder="Enter here" name='practice_name_of_restoring_dentist[]'> 
        </div>
        <div class="col-12">
            <label for="date">Date of Implant Restoration/Abutment & Crown Placement:</label>
            <input type="date" placeholder="Enter here" name='Implant_Restoration_date[]'>
        </div>
        <div class="col-12">
            <label for="text">Type of Abutment</label>
            <input type="text" placeholder="Enter here" name='abutment_type[]'>
        </div>
           
           
            <div class="col-12 col-lg-12">
            <label>Attach X-Rays:Max 2</label>
              <input type="file" class="image-input-main"  name="images${teethId}[]" multiple  multiple accept="image/*">
                <input type="hidden" value='${result}'  name='tooth_ids[]'> 
              <div class="image-container-main"></div>
            </div>
        </div> 
          </div>`
                );

                teethId++;
            });
        });
        
        // showfileimages start//
        const imageInputs = document.querySelectorAll(".image-input-main");
        const imageContainers = document.querySelectorAll(".image-container-main");

        imageInputs.forEach((input, index) => {
        input.addEventListener("change", (event) => {
          const selectedImages = event.target.files;
            consol.log("show image work")
          // Clear previous content
          imageContainers[index].innerHTML = "";

          for (let i = 0; i < selectedImages.length; i++) {
            const reader = new FileReader();
            reader.onload = (e) => {
              const imageMiniContainer = document.createElement("div");
              imageMiniContainer.className = "span_image";

              const imageElement = document.createElement("img");
              imageElement.src = e.target.result;
              imageElement.className = "uploaded-image";
              imageMiniContainer.appendChild(imageElement);

              const deleteButton = document.createElement("span");
              deleteButton.className = "delete-button";
              deleteButton.textContent = "X";
              deleteButton.addEventListener("click", () => {
                imageMiniContainer.remove();
              });
              imageMiniContainer.appendChild(deleteButton);

              imageContainers[index].appendChild(imageMiniContainer);
            };
            reader.readAsDataURL(selectedImages[i]);
          }
        });
      });

        // showfileimages end
        
    });
</script>
<script>
    function decrementTeethId(buttonElement, teethId) {
        buttonElement.parentNode.parentNode.remove();
        teethId--;
    }


    function removeFields(e) {
        // const subForm = document.querySelector('.subForm .row .form-child')
        console.log(e.target.class);
    }
    $(document).ready(function() {
        $.ajax({
                url: "/manufacture_session",
                type: "GET",
                dataType: "json",
            })
            .done(function(data) {
                // Success: data contains the response from the server
                manufactures = data; // Assign the data to the global manufactures variable
                localStorage.setItem("manufactures", JSON.stringify(manufactures));
            })
            .fail(function(jqXHR, textStatus, errorThrown) {
                // Error: Handle the error here
                console.log("Error: " + textStatus, errorThrown);
            });

    });
    $(document).ready(function() {
        $("#search").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            console.log(value);
            $("#myTable li").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
            });
        });
    });
</script>

<!--End Page Container-->
@include('theme.myweb.userDashboard.footer');
