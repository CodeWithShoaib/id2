@if (Auth::check())
    @php
        $doctor = App\SlotsData::where('user_id', Auth::user()->id)->first();
        $patient_list = App\DoctorRegisterPortal::where('user_id', Auth::user()->id)->get();
        $count_patient = count($patient_list);
        $manufacture_data = App\Manufacturer::all();
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

            <form method='post' action='{{ route('update.slot', [$dental_implant_edit->id]) }}'
                enctype="multipart/form-data" class='form'>
                @csrf
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class='row hidingWhilePrint'>
                                    </div>
                                    @php
                                    @endphp
                                    <div class='row print-section'>
                                        @php
                                            
                                            $dental_implant = json_decode($dental_implant_edit->dental_implant);
                                            $manufactures = json_decode($dental_implant_edit->manufactures);
                                            
                                            $brand = json_decode($dental_implant_edit->brand);
                                            $platform = json_decode($dental_implant_edit->platform);
                                            $reference_Part = json_decode($dental_implant_edit->reference_Part);
                                            $implant_surgery = json_decode($dental_implant_edit->implant_surgery);
                                            $lot = json_decode($dental_implant_edit->lot);
                                            
                                            $json_images = json_decode($dental_implant_edit->images);
                                            if ($dental_implant) {
                                                $teeth_count = count($dental_implant);
                                            }
                                            $doctors_name = json_decode($dental_implant_edit->doctor_name);
                                            $doctor_phone_number = json_decode($dental_implant_edit->doctor_phone_number);
                                            $Implant_Restoration_date = json_decode($dental_implant_edit->Implant_Restoration_date);
                                            $abutment_type = json_decode($dental_implant_edit->abutment_type);
                                            $restoring_dentist_name = json_decode($dental_implant_edit->restoring_dentist_name);
                                        @endphp
                                        <div class='row flex col-12'>
                                            <div class="col-6 my-4">
                                                <h5>Edit Tooth Information </h5>
                                            </div>
                                            @if ($dental_implant)
                                                @for ($i = 0; $i < $teeth_count; $i++)
                                                    @php
                                                        $new_dental_word = str_replace('-', ' # ', $dental_implant[$i]);
                                                        $words = explode('-', $dental_implant[$i]);
                                                        $teeth_no = intval($words[1]);
                                                        
                                                        $json_images = App\ToothImage::where('doctor_register_portal_id', $patiente->id)
                                                            ->where('tooth_id', $teeth_no)
                                                            ->where('teeth_data_id', $dental_implant_edit->id)
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
                                                                {{ $new_dental_word }}:</h5>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label
                                                                class="control-label">{{ _lang('Doctor Name') }}</label>
                                                            <input type="text" class="form-control"
                                                                value="{{ isset($doctors_name[$i]) ? $doctors_name[$i] : 'N/A' }}"
                                                                name="doctors_name[]">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label
                                                                class="control-label">{{ _lang('Doctor Phone Number') }}</label>
                                                            <input type="text" class="form-control"
                                                                value="{{ isset($doctor_phone_number[$i]) ? $doctor_phone_number[$i] : 'N/A' }}"
                                                                name='doctor_phone_number[]'>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label
                                                                class="control-label">{{ _lang('Implant Restoration Date') }}</label>
                                                            <input type="date" class="form-control "
                                                                value="{{ isset($Implant_Restoration_date[$i]) ? $Implant_Restoration_date[$i] : 'N/A' }}"
                                                                name='Implant_Restoration_date[]'>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label
                                                                class="control-label">{{ _lang('Abutment Type') }}</label>
                                                            <input type="text" class="form-control "
                                                                value="{{ isset($abutment_type[$i]) ? $abutment_type[$i] : 'N/A' }}"
                                                                name='abutment_type[]'>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label
                                                                class="control-label">{{ _lang('Restoration Dentist Name') }}</label>
                                                            <input type="text" class="form-control "
                                                                value="{{ isset($restoring_dentist_name[$i]) ? $restoring_dentist_name[$i] : 'N/A' }}"
                                                                name='restoring_dentist_name[]'>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label
                                                                class="control-label">{{ _lang('Manufactures') }}</label>
                                                            <select name="manufactures[]"
                                                                id="Manufactures{{ $i }}"
                                                                onchange="get_brand_data({{ $i }})"
                                                                class="form-select form-control Manufactures">
                                                                @foreach ($manufacture_data as $item)
                                                                    <option value='{{ $item->manufacturer_id }}'
                                                                        {{ $item->manufacturer_id == $manufactures[$i] ? 'selected' : $manufactures[$i] }}>
                                                                        {{ $item->manufacturer_name }}</option>
                                                                @endforeach
                                                            </select>
                                                            <input type="text" name=""
                                                                class="form-control Manufactures" style="display: none;"
                                                                id="hiddenManufactures{{ $i }}"
                                                                placeholder="Enter Another Manufacture">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label
                                                                class="control-label">{{ _lang('Current Manufacture') }}</label>
                                                            @php
                                                                
                                                                if (is_numeric($manufactures[$i])) {
                                                                    $m = App\Manufacturer::where('manufacturer_id', $manufactures[$i])->first();
                                                                    if ($m->manufacturer_name == 'Other Option') {
                                                                        $m->manufacturer_name = $manufactures[$i];
                                                                    }
                                                                }
                                                                
                                                            @endphp
                                                            <input type="text" class="form-control Manufactures"
                                                                value='{{ $m->manufacturer_name ?? $manufactures[$i] }}'>
                                                        </div>
                                                    </div>
                                                    @if ($brand)
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label
                                                                    class="control-label">{{ _lang('Brand') }}</label>
                                                                <select name="brand[]" id="Brand_{{ $i }}"
                                                                    onchange="get_diameter_data({{ $i }})"
                                                                    class="form-select form-control Brand">
                                                                    <option value=""></option>
                                                                </select>
                                                                <input type="text" name=""
                                                                    class="form-control Manufactures"
                                                                    style="display: none;"
                                                                    id="hiddenBrand{{ $i }}"
                                                                    placeholder="Enter Another Brand">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label
                                                                    class="control-label">{{ _lang('Current Brand') }}</label>
                                                                @php
                                                                    $b = App\Brand::where('brand_id', $brand[$i])->first();
                                                                @endphp
                                                                <input type="text" class="form-control"
                                                                    value='{{ $b->brand_name ?? $brand[$i] }}'
                                                                    placeholder="Enter Another Brand">
                                                            </div>
                                                        </div>
                                                    @endif
                                                    @isset($brand[$i])
                                                        @if ($platform)
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="control-label">Platform size/Diameter
                                                                        (choose one):</label>
                                                                    <select name="platform[]"
                                                                        id="platform_{{ $i }}"
                                                                        class="form-select form-control Platform">
                                                                        <option value=""></option>
                                                                    </select>
                                                                    <input type="text" name=""
                                                                        class="form-control" style="display: none;"
                                                                        id="hiddenPlatform{{ $i }}"
                                                                        placeholder="Enter Another Platform">

                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    @php
                                                                        $p = App\Diameter::where('delimeter_id', $platform[$i])->first();
                                                                    @endphp
                                                                    <label class="control-label">Current Platform
                                                                        size/Diameter:</label>
                                                                    <input type="text" class="form-control"
                                                                        value='{{ $p->delimiter_name ?? $platform[$i] }}'
                                                                        placeholder="Enter Another Brand">
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        @endisset
                                                    @endif
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label
                                                                class="control-label">{{ _lang('Reference Part') }}</label>
                                                            <input type="text" class="form-control "
                                                                value="{{ $reference_Part[$i] ? $reference_Part[$i] : 'N/A' }}"
                                                                name='reference_Part[]'>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label">{{ _lang('Lot') }}</label>
                                                            <input type="text" class="form-control "
                                                                value="{{ $lot[$i] ? $lot[$i] : 'N/A' }}"
                                                                name='lot[]'>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label
                                                                class="control-label">{{ _lang('Implant Surgery') }}</label>
                                                            <input type="date" class="form-control "
                                                                value="{{ $implant_surgery[$i] ? $implant_surgery[$i] : 'N/A' }}"
                                                                name='implant_surgery[]'>
                                                        </div>
                                                    </div>


                                                    <div class="col-md-6">
                                                        <div class="col-12">
                                                            <label for="selectImage">Upload x-ray/images of
                                                                implant<small></small></label>
                                                            <input type="file" id="selectImage"
                                                                name="images{{ $i + 1 }}[]" multiple>
                                                            <input type="hidden" value='{{ $teeth_no }}'
                                                                name='tooth_ids[]'>
                                                        </div>
                                                    </div>



                                                    <div class="col-md-12">
                                                        <label for="">X-rays Images:</label>
                                                        @for ($j = 0; $j < $countImages; $j++)
                                                            @if (isset($array_images[$j]))
                                                                <div class="form-group">
                                                                    <img src="{{ asset('public/image/xrays/' . $array_images[$j]) }}"
                                                                        alt="image" class="img-fluid"
                                                                        style="width: 300px; height: 300px;">
                                                                </div>
                                                    </div>
                                                @endif
                                            @endfor
                                        </div>
                                        @endfor
                                        @endif



                                    </div>
                                    <div class="col-12">
                                        <input type='submit' class="btn btn-sm"
                                            style='padding: 6px 22px;background: #7e95c7;border: none;color:#fff;'
                                            value='Update'>
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
        </form>
        <!--End main content Inner-->
    </div>
    <!--End main content-->
</div>


<script src="{{ asset('public/theme/myweb/js/main.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script>
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
