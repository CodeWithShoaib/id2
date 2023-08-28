@extends('theme.myweb.website')
@section('content')
    <style>
        /*banner_img*/
        .inner-banner {
            background: url('{{ get_option('patience_register_banner_img') != '' ? asset('public/uploads/media/' . get_option('patience_register_banner_img')) : '' }}') center center/cover no-repeat;
        }
    </style>
    <main>
        <section class="inner-banner ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12">
                        <div class="content">
                            <!--potential_register_banner_heading-->
                            <h2>{{ get_trans_option('potential_register_banner_heading') }}</h2>
                            <!--patience_register_header_img-->
                            <img data-aos="slide-right" data-aos-duration="1000" data-aos-delay="100"
                                class="img-fluid banner-img"
                                src="{{ get_option('patience_register_header_img') != '' ? asset('public/uploads/media/' . get_option('patience_register_header_img')) : '' }}"
                                alt="image">
                        </div>

                    </div>

                </div>
            </div>
        </section>
        <!-- Doctor Register Portal -->
        <div class="main_doctor_register_portal">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-12 text-center">
                        <div class="doctor_register_portal_heading">
                            <!--patient_register_registeration_heading-->
                            {!! get_trans_option('patient_register_registeration_heading') !!}
                        </div>
                    </div>
                    <div class="col-12 col-lg-10">
                        <form action="{{ route('doctor.register.portal') }}" method='post' id="form"
                            enctype="multipart/form-data">
                            @csrf
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <input type="hidden" name="user_status" value="patient">
                            <input type="hidden" name="status" value="patient">
                           
                            <div class="row">
                                <div class="col-12">
                                    <label for="fname">* First Name</label>
                                    <div class="input-group has-validation">
                                        <input type="text" name="fname" id="fname" placeholder="Enter here"
                                            class="form-control" value='{{ Auth::user()->first_name? Auth::user()->first_name : "" }}' readonly>
                                        <div class="invalid-feedback">
                                            Please choose a First Name.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label for="lname">* Last Name</label>
                                    <div class="input-group">
                                        <input type="text" name="lname" id="lname" placeholder="Enter here"
                                            class="form-control" value='{{ Auth::user()->last_name ? Auth::user()->last_name : "" }}' readonly>

                                    </div>

                                </div>
                                <div class="col-12">
                                    <label for="streesAddress">Street Address</label>
                                    <div class="input-group">
                                        <input type="text" name="streesAddress" id="streesAddress"
                                            placeholder="Enter here">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label for="city">City</label>
                                    <div class="input-group">
                                        <input type="text" name="city" id="city" placeholder="Enter here">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <label>State</label>
                                    <select name="State" id="State">
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label for="zipCode">* Zip code</label>
                                    <div class="input-group">
                                        <input type="number" name="zipCode" id="zipCode" placeholder="Enter here"
                                            class="form-control" >
                                        <i class="fas fa-exclamation-circle failure-icon"></i>
                                        <i class="far fa-check-circle success-icon"></i>
                                    </div>
                                    <div class="error"></div>
                                </div>
                                <div class="col-12">
                                    <label for="Birthday">Birthday</label>
                                    <div class="input-group">
                                        <input type="date" name="Birthday" id="Birthday">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label for="Gender">Sex</label>
                                    <select name='gender'>
                                        <option selected>Male/Female</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label for="email">* Email</label>
                                    <input type="email" placeholder="Enter here" readonly name='email' class="form-control" value='{{Auth::user()->email}}' >
                                </div>
                                <div class="col-12">
                                    <label for="phonenumber">Phone Number</label>
                                    <input type="number" placeholder="Enter here" name='number' value='{{Auth::user()->number}}'  readonly>
                                </div>

                                <div class="col-12">
                                    <label for="text">Implant Placing Doctor name</label>
                                    <input type="text" placeholder="Enter here" name='doctor_name'>
                                </div>
                                <div class="col-12 ">
                                    <label for="text">Implant Placing Doctor Phone #</label>
                                    <input type="number" placeholder="Enter here" name='doctor_phone_number'>
                                </div>
                                <div class="col-12">
                                    <div class="teeth-image-p">
                                        <div class="teeth-image">
                                            <div class="top-teeth-images">
                                                <img class="top-molar"
                                                    src="{{ asset('public/theme/myweb/images/top-molar.png') }}"
                                                    alt="">
                                                <div class="teeths">
                                                    <div class="teeth" id="tooth-1"><img class="img-fluid"
                                                            src="{{ asset('public/theme/myweb/images/teeth-1.png') }}"
                                                            alt="">
                                                    </div>
                                                    <div class="teeth" id="tooth-2"><img class="img-fluid"
                                                            src="{{ asset('public/theme/myweb/images/teeth-2.png') }}"
                                                            alt="">
                                                    </div>
                                                    <div class="teeth" id="tooth-3"><img class="img-fluid"
                                                            src="{{ asset('public/theme/myweb/images/teeth-3.png') }}"
                                                            alt="">
                                                    </div>
                                                    <div class="teeth" id="tooth-4"><img class="img-fluid"
                                                            src="{{ asset('public/theme/myweb/images/teeth-4.png') }}"
                                                            alt="">
                                                    </div>
                                                    <div class="teeth" id="tooth-5"><img class="img-fluid"
                                                            src="{{ asset('public/theme/myweb/images/teeth-5.png') }}"
                                                            alt="">
                                                    </div>
                                                    <div class="teeth" id="tooth-6"><img class="img-fluid"
                                                            src="{{ asset('public/theme/myweb/images/teeth-6.png') }}"
                                                            alt="">
                                                    </div>
                                                    <div class="teeth" id="tooth-7"><img class="img-fluid"
                                                            src="{{ asset('public/theme/myweb/images/teeth-7.png') }}"
                                                            alt="">
                                                    </div>
                                                    <div class="teeth" id="tooth-8"><img class="img-fluid"
                                                            src="{{ asset('public/theme/myweb/images/teeth-8.png') }}"
                                                            alt="">
                                                    </div>
                                                    <div class="teeth" id="tooth-9"><img class="img-fluid"
                                                            src="{{ asset('public/theme/myweb/images/teeth-9.png') }}"
                                                            alt="">
                                                    </div>
                                                    <div class="teeth" id="tooth-10"><img class="img-fluid"
                                                            src="{{ asset('public/theme/myweb/images/teeth-10.png') }}"
                                                            alt="">
                                                    </div>
                                                    <div class="teeth" id="tooth-11"><img class="img-fluid"
                                                            src="{{ asset('public/theme/myweb/images/teeth-11.png') }}"
                                                            alt="">
                                                    </div>
                                                    <div class="teeth" id="tooth-12"><img class="img-fluid"
                                                            src="{{ asset('public/theme/myweb/images/teeth-12.png') }}"
                                                            alt="">
                                                    </div>
                                                    <div class="teeth" id="tooth-13"><img class="img-fluid"
                                                            src="{{ asset('public/theme/myweb/images/teeth-13.png') }}"
                                                            alt="">
                                                    </div>
                                                    <div class="teeth" id="tooth-14"><img class="img-fluid"
                                                            src="{{ asset('public/theme/myweb/images/teeth-14.png') }}"
                                                            alt="">
                                                    </div>
                                                    <div class="teeth" id="tooth-15"><img class="img-fluid"
                                                            src="{{ asset('public/theme/myweb/images/teeth-15.png') }}"
                                                            alt="">
                                                    </div>
                                                    <div class="teeth" id="tooth-16"><img class="img-fluid"
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
                                                    <div class="teeth" id="tooth-17"><img class="img-fluid"
                                                            src="{{ asset('public/theme/myweb/images/teeth-17.png') }}"
                                                            alt="">
                                                    </div>
                                                    <div class="teeth" id="tooth-18"><img class="img-fluid"
                                                            src="{{ asset('public/theme/myweb/images/teeth-18.png') }}"
                                                            alt="">
                                                    </div>
                                                    <div class="teeth" id="tooth-19"><img class="img-fluid"
                                                            src="{{ asset('public/theme/myweb/images/teeth-19.png') }}"
                                                            alt="">
                                                    </div>
                                                    <div class="teeth" id="tooth-20"><img class="img-fluid"
                                                            src="{{ asset('public/theme/myweb/images/teeth-20.png') }}"
                                                            alt="">
                                                    </div>
                                                    <div class="teeth" id="tooth-21"><img class="img-fluid"
                                                            src="{{ asset('public/theme/myweb/images/teeth-21.png') }}"
                                                            alt="">
                                                    </div>
                                                    <div class="teeth" id="tooth-22"><img class="img-fluid"
                                                            src="{{ asset('public/theme/myweb/images/teeth-22.png') }}"
                                                            alt="">
                                                    </div>
                                                    <div class="teeth" id="tooth-23"><img class="img-fluid"
                                                            src="{{ asset('public/theme/myweb/images/teeth-23.png') }}"
                                                            alt="">
                                                    </div>
                                                    <div class="teeth" id="tooth-24"><img class="img-fluid"
                                                            src="{{ asset('public/theme/myweb/images/teeth-24.png') }}"
                                                            alt="">
                                                    </div>
                                                    <div class="teeth" id="tooth-25"><img class="img-fluid"
                                                            src="{{ asset('public/theme/myweb/images/teeth-25.png') }}"
                                                            alt="">
                                                    </div>
                                                    <div class="teeth" id="tooth-26"><img class="img-fluid"
                                                            src="{{ asset('public/theme/myweb/images/teeth-26.png') }}"
                                                            alt="">
                                                    </div>
                                                    <div class="teeth" id="tooth-27"><img class="img-fluid"
                                                            src="{{ asset('public/theme/myweb/images/teeth-27.png') }}"
                                                            alt="">
                                                    </div>
                                                    <div class="teeth" id="tooth-28"><img class="img-fluid"
                                                            src="{{ asset('public/theme/myweb/images/teeth-28.png') }}"
                                                            alt="">
                                                    </div>
                                                    <div class="teeth" id="tooth-29"><img class="img-fluid"
                                                            src="{{ asset('public/theme/myweb/images/teeth-29.png') }}"
                                                            alt="">
                                                    </div>
                                                    <div class="teeth" id="tooth-30"><img class="img-fluid"
                                                            src="{{ asset('public/theme/myweb/images/teeth-30.png') }}"
                                                            alt="">
                                                    </div>
                                                    <div class="teeth" id="tooth-31"><img class="img-fluid"
                                                            src="{{ asset('public/theme/myweb/images/teeth-31.png') }}"
                                                            alt="">
                                                    </div>
                                                    <div class="teeth" id="tooth-32"><img class="img-fluid"
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
                                    <label for="selectImage">Upload x-ray/images of implant<small>(s): max 2 **Attach
                                            here**
                                        </small></label>
                                    <input type="file" id="selectImage" name="images[]" multiple>
                                </div>
                                <div class="col-lg-12 col-12">
                                    <div class="preview_image">
                                        <p><span class="text-center" id="totalImages">0</span> File(s) Selected</p>
                                        <div id="images"></div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label for="text">Name of Restoring Dentist:</label>
                                    <input type="text" placeholder="Enter here" name='restoring_dentist_name'>
                                </div>


                                <div class="col-12">
                                    <label for="text">Practice Name of Restoring Dentist</label>
                                    <input type="text" placeholder="Enter here"
                                        name='practice_name_of_restoring_dentist'>
                                </div>

                                <div class="col-12">
                                    <label for="date">Date of Implant Restoration/Abutment & Crown Placement:</label>
                                    <input type="date" placeholder="Enter here" name='Implant_Restoration_date'>
                                </div>


                                <div class="col-12">
                                    <label for="text">Type of Abutment</label>
                                    <input type="text" placeholder="Enter here" name='abutment_type'>
                                </div>
                                <div class="col-12">
                                    <label for="text">Current Dentist:</label>
                                    <input type="text" placeholder="Enter here" name='current_dentist'>
                                </div>
                                <div class="col-12">
                                    <label for="text">if different from above</label>
                                    <input type="text" placeholder="Enter here" name='different_above'>
                                </div>
                                <div class="col-12 col-lg-12 mt-5 ">
                                    <div class="doctor_portal_rejister">
                                        <input class="btn-secondary" type="submit" id="submit" value="Register" />
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
@section('js-script')
    <script src="{{ asset('public/theme/default/js/cart.js?v=1.1') }}"></script>
@endsection
