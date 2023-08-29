<?php if(Auth::check()): ?>
    <?php
        $doctor = App\SlotsData::where('user_id', Auth::user()->id)->first();
        $patient_list = App\DoctorRegisterPortal::where('user_id', Auth::user()->id)
            ->where('status', 'patient')
            ->where('client_permission', '1')
            ->get();
        $count_patient = count($patient_list);
        $slots_count = App\SlotsData::where('user_id', Auth::user()->id)->sum('no_of_slots');
        $columnCount = intval($slots_count);
        
    ?>
<?php endif; ?>
<?php echo $__env->make('theme.myweb.userDashboard.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- Preloader area end -->
<div class="page-container">
    <!-- sidebar menu area start -->
    <?php echo $__env->make('theme.myweb.userDashboard.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
    <!-- sidebar menu area end -->
    <!-- main content area start -->
    <div class="main-content">
        <!-- header area start -->
        <?php echo $__env->make('theme.myweb.userDashboard.headerAreaComponent', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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

        <div class="main-content-inner "style="position: absolute; width: 92%; left: -5px;">

            <div class="alert alert-success alert-dismissible" id="main_alert" role="alert">
                <button type="button" id="close_alert" class="close">
                    <span aria-hidden="true"><i class="far fa-times-circle"></i></span>
                </button>
                <span class="msg"></span>
            </div>


            <link rel="stylesheet" href="<?php echo e('public/backend/plugins/chartjs/Chart.min.css'); ?>">



            <div class="doctor-register-portal"></div>
            <section class="inner-banner" style="height: 500px !important;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-12">
                            <div class="content">
                                <!--banner_heading-->

                                <h2 style="text-align: center; color:#40c0ef;">Welcome to your dashboard</h2>

                                <img data-aos="slide-right" data-aos-duration="1000" data-aos-delay="100"
                                    class="img-fluid banner-img aos-init aos-animate"
                                    src="<?php echo e(asset('public/theme/myweb/images/banner-img-1.png')); ?>"
                                    alt="">
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <div class="row d-flex justify-content-center">
                <div class="col-md-12 mb-12">
                    <div class="card">
                        <div class="seo-fact sbg1">
                            <div class="p-4">
                                <div class="seofct-icon">
                                    <?php if(Auth::check() && Auth::user()->user_status == 'Dental_Specialist'): ?>
                                        <span> Hello <?php echo Auth::user()->first_name; ?> <?php echo Auth::user()->last_name; ?></span>
                                    <?php else: ?>
                                        <span style="text-transform: capitalize">Hello <?php echo Auth::user()->first_name; ?>

                                            <?php echo Auth::user()->last_name; ?></span>
                                    <?php endif; ?>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>


            <div class='container'>
                <div class="row">
                    <div class="col-lg-12">
                        <?php if(Auth::check() && Auth::user()->user_status == 'Dental_Specialist'): ?>
                            <div class="main_doctor_register_portal">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-12 col-lg-12 text-center">
                                            <div class="doctor_register_portal_heading">
                                                <!--<h2>Doctor <div class='span'>Register</div> Portal</h2>-->
                                                <h2>Patient's&nbsp;<span class="span">Information:</span></h2>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-10">
                                            <form action="<?php echo e(url('doctor/register')); ?>" method="post" id="form"
                                                enctype="multipart/form-data">
                                                <?php echo csrf_field(); ?>
                                                <?php if($errors->any()): ?>
                                                    <div class="alert alert-danger">
                                                        <ul>
                                                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <li><?php echo e($error); ?></li>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </ul>
                                                    </div>
                                                <?php endif; ?>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <label for="fname">*Patient First Name</label>
                                                        <div class="input-group has-validation">
                                                            <input type="text" name="fname" id="fname"
                                                                placeholder="Enter here" class="form-control"
                                                                value='<?php echo e(old('fname')); ?>'>
                                                            <div class="invalid-feedback">
                                                                Please choose a First Name.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <label for="lname">*Patient Last Name</label>
                                                        <div class="input-group">
                                                            <input type="text" name="lname" id="lname"
                                                                placeholder="Enter here" class="form-control"
                                                                value='<?php echo e(old('lname')); ?>'>

                                                        </div>
                                                    </div>
                                                    <?php if(Auth::check() && Auth::user()->user_status == 'Dental_Specialist'): ?>
                                                        <input type="hidden" value='1' name='storing'>
                                                    <?php endif; ?>
                                                    <input type="hidden" value='patient' name='status'>
                                                    <div class="col-12">
                                                        <label for="streesAddress">Patient Street Address</label>
                                                        <div class="input-group">
                                                            <input type="text" name="streesAddress"
                                                                id="streesAddress" placeholder="Enter here"
                                                                value='<?php echo e(old('streesAddress')); ?>'>
                                                        </div>
                                                    </div>
                                                    <?php
                                                        $countries = App\Country::all();
                                                        $united_state = App\Country::where('id', 233)->first();
                                                    ?>
                                                    <div class="col-12">
                                                        <label>Patient Country</label>
                                                        <select name="country" id="country">
                                                            <option value="">Select Country</option>
                                                            <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <?php if($loop->first): ?>
                                                                    <option value="<?php echo $united_state->id; ?>">
                                                                        <?php echo $united_state->name; ?></option>
                                                                <?php else: ?>
                                                                    <option value="<?php echo $item->id; ?>">
                                                                        <?php echo $item->name; ?></option>
                                                                <?php endif; ?>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                        </select>
                                                    </div>
                                                    <div class="col-12">
                                                        <label>Patient State</label>
                                                        <select name="State" id="state">

                                                        </select>
                                                    </div>
                                                    <div class="col-12">
                                                        <label>Patient City</label>
                                                        <select name="city" id="city">
                                                            <option value="">Select City</option>
                                                        </select>
                                                    </div>

                                                    <div class="col-12">
                                                        <label for="zipCode">* Patient Zip code</label>
                                                        <div class="input-group">
                                                            <input type="number" name="zipCode" id="zipCode"
                                                                placeholder="Enter here" class="form-control"
                                                                value='<?php echo e(old('zipCode')); ?>'>
                                                            <i class="fas fa-exclamation-circle failure-icon"></i>
                                                            <i class="far fa-check-circle success-icon"></i>
                                                        </div>
                                                        <div class="error"></div>
                                                    </div>
                                                    <div class="col-12">
                                                        <label for="email">* Patient Email</label>
                                                        <input type="email" placeholder="Enter here"
                                                            value='<?php echo e(old('email')); ?>' name="email"
                                                            class="form-control"
                                                            style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA3ZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDpiYmZkZTQxOS00ZGRkLWU5NDYtOWQ2MC05OGExNGJiMTA3N2YiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6RDAyNDkwMkRDOTIyMTFFNkI0MzFGRTk2RjM1OTdENTciIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6RDAyNDkwMkNDOTIyMTFFNkI0MzFGRTk2RjM1OTdENTciIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTUgKFdpbmRvd3MpIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6OTU2NTE1NDItMmIzOC1kZjRkLTk0N2UtN2NjOTlmMjQ5ZGFjIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOmJiZmRlNDE5LTRkZGQtZTk0Ni05ZDYwLTk4YTE0YmIxMDc3ZiIv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&quot;) !important; background-repeat: no-repeat; background-size: 20px; background-position: 97% center; cursor: auto;"
                                                            data-temp-mail-org="0">
                                                    </div>


                                                    <div class="col-12">
                                                        <label for="phonenumber">Patient Phone Number</label>
                                                        <input type="text" placeholder="Enter here"
                                                            name="number" value='<?php echo e(old('number')); ?>'
                                                            class='doctor_phone_number'>
                                                    </div>
                                                    <div class="col-12">
                                                        <label>* Sex</label>
                                                        <select name="gender" id="country">
                                                            <option value="">Select Sex</option>
                                                            <option value="Male">Male</option>
                                                            <option value="Female">Female</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-12">
                                                        <label for="phonenumber">* Age</label>
                                                        <input type="number" placeholder="Enter here" name="age"
                                                            value='<?php echo e(old('age')); ?>'>
                                                    </div>
                                                    <div class="row">
    <div class="col-12">
        <p class="text-danger my-5"><b><u>"Note: Please fill all fields above to proceed to implant registration portion below!"</u></b></p>
    </div>
</div>
                                                    <div class="col-12">
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                            <div class="teeth-image-p">
                                                                 <div class="teeth-image">
                                                                   <div class="top-teeth-images">
                                                                    <img class="top-molar"
                                                                        src="<?php echo e(asset('public/theme/myweb/images/top-molar.png')); ?>"
                                                                        alt="">
                                                                    <div class="teeths">
                                                                        <div class="teeth" id="tooth-1"><img
                                                                                class="img-fluid"
                                                                                src="<?php echo e(asset('public/theme/myweb/images/teeth-1.png')); ?>"
                                                                                alt="">
                                                                        </div>
                                                                        <div class="teeth" id="tooth-2"><img
                                                                                class="img-fluid"
                                                                                src="<?php echo e(asset('public/theme/myweb/images/teeth-2.png')); ?>"
                                                                                alt="">
                                                                        </div>
                                                                        <div class="teeth" id="tooth-3"><img
                                                                                class="img-fluid"
                                                                                src="<?php echo e(asset('public/theme/myweb/images/teeth-3.png')); ?>"
                                                                                alt="">
                                                                        </div>
                                                                        <div class="teeth" id="tooth-4"><img
                                                                                class="img-fluid"
                                                                                src="<?php echo e(asset('public/theme/myweb/images/teeth-4.png')); ?>"
                                                                                alt="">
                                                                        </div>
                                                                        <div class="teeth" id="tooth-5"><img
                                                                                class="img-fluid"
                                                                                src="<?php echo e(asset('public/theme/myweb/images/teeth-5.png')); ?>"
                                                                                alt="">
                                                                        </div>
                                                                        <div class="teeth" id="tooth-6"><img
                                                                                class="img-fluid"
                                                                                src="<?php echo e(asset('public/theme/myweb/images/teeth-6.png')); ?>"
                                                                                alt="">
                                                                        </div>
                                                                        <div class="teeth" id="tooth-7"><img
                                                                                class="img-fluid"
                                                                                src="<?php echo e(asset('public/theme/myweb/images/teeth-7.png')); ?>"
                                                                                alt="">
                                                                        </div>
                                                                        <div class="teeth" id="tooth-8"><img
                                                                                class="img-fluid"
                                                                                src="<?php echo e(asset('public/theme/myweb/images/teeth-8.png')); ?>"
                                                                                alt="">
                                                                        </div>
                                                                        <div class="teeth" id="tooth-9"><img
                                                                                class="img-fluid"
                                                                                src="<?php echo e(asset('public/theme/myweb/images/teeth-9.png')); ?>"
                                                                                alt="">
                                                                        </div>
                                                                        <div class="teeth" id="tooth-10"><img
                                                                                class="img-fluid"
                                                                                src="<?php echo e(asset('public/theme/myweb/images/teeth-10.png')); ?>"
                                                                                alt="">
                                                                        </div>
                                                                        <div class="teeth" id="tooth-11"><img
                                                                                class="img-fluid"
                                                                                src="<?php echo e(asset('public/theme/myweb/images/teeth-11.png')); ?>"
                                                                                alt="">
                                                                        </div>
                                                                        <div class="teeth" id="tooth-12"><img
                                                                                class="img-fluid"
                                                                                src="<?php echo e(asset('public/theme/myweb/images/teeth-12.png')); ?>"
                                                                                alt="">
                                                                        </div>
                                                                        <div class="teeth" id="tooth-13"><img
                                                                                class="img-fluid"
                                                                                src="<?php echo e(asset('public/theme/myweb/images/teeth-13.png')); ?>"
                                                                                alt="">
                                                                        </div>
                                                                        <div class="teeth" id="tooth-14"><img
                                                                                class="img-fluid"
                                                                                src="<?php echo e(asset('public/theme/myweb/images/teeth-14.png')); ?>"
                                                                                alt="">
                                                                        </div>
                                                                        <div class="teeth" id="tooth-15"><img
                                                                                class="img-fluid"
                                                                                src="<?php echo e(asset('public/theme/myweb/images/teeth-15.png')); ?>"
                                                                                alt="">
                                                                        </div>
                                                                        <div class="teeth" id="tooth-16"><img
                                                                                class="img-fluid"
                                                                                src="<?php echo e(asset('public/theme/myweb/images/teeth-16.png')); ?>"
                                                                                alt="">
                                                                        </div>
                                                                    </div>

                                                                   </div>
                                                                <div class="btm-teeth-images">
                                                                    <img class="top-molar"
                                                                        src="<?php echo e(asset('public/theme/myweb/images/btm-molar.png')); ?>"
                                                                        alt="">
                                                                    <div class="teeths">
                                                                        <div class="teeth" id="tooth-17"><img
                                                                                class="img-fluid"
                                                                                src="<?php echo e(asset('public/theme/myweb/images/teeth-32.png')); ?>"
                                                                                alt="">
                                                                        </div>
                                                                        <div class="teeth" id="tooth-18"><img
                                                                                class="img-fluid"
                                                                                src="<?php echo e(asset('public/theme/myweb/images/teeth-31.png')); ?>"
                                                                                alt="">
                                                                        </div>
                                                                        <div class="teeth" id="tooth-19"><img
                                                                                class="img-fluid"
                                                                                src="<?php echo e(asset('public/theme/myweb/images/teeth-30.png')); ?>"
                                                                                alt="">
                                                                        </div>
                                                                        <div class="teeth" id="tooth-20"><img
                                                                                class="img-fluid"
                                                                                src="<?php echo e(asset('public/theme/myweb/images/teeth-29.png')); ?>"
                                                                                alt="">
                                                                        </div>
                                                                        <div class="teeth" id="tooth-21"><img
                                                                                class="img-fluid"
                                                                                src="<?php echo e(asset('public/theme/myweb/images/teeth-28.png')); ?>"
                                                                                alt="">
                                                                        </div>
                                                                        <div class="teeth" id="tooth-22"><img
                                                                                class="img-fluid"
                                                                                src="<?php echo e(asset('public/theme/myweb/images/teeth-27.png')); ?>"
                                                                                alt="">
                                                                        </div>
                                                                        <div class="teeth" id="tooth-23"><img
                                                                                class="img-fluid"
                                                                                src="<?php echo e(asset('public/theme/myweb/images/teeth-26.png')); ?>"
                                                                                alt="">
                                                                        </div>
                                                                        <div class="teeth" id="tooth-24"><img
                                                                                class="img-fluid"
                                                                                src="<?php echo e(asset('public/theme/myweb/images/teeth-25.png')); ?>"
                                                                                alt="">
                                                                        </div>
                                                                        <div class="teeth" id="tooth-25"><img
                                                                                class="img-fluid"
                                                                                src="<?php echo e(asset('public/theme/myweb/images/teeth-24.png')); ?>"
                                                                                alt="">
                                                                        </div>
                                                                        <div class="teeth" id="tooth-26"><img
                                                                                class="img-fluid"
                                                                                src="<?php echo e(asset('public/theme/myweb/images/teeth-23.png')); ?>"
                                                                                alt="">
                                                                        </div>
                                                                        <div class="teeth" id="tooth-27"><img
                                                                                class="img-fluid"
                                                                                src="<?php echo e(asset('public/theme/myweb/images/teeth-22.png')); ?>"
                                                                                alt="">
                                                                        </div>
                                                                        <div class="teeth" id="tooth-28"><img
                                                                                class="img-fluid"
                                                                                src="<?php echo e(asset('public/theme/myweb/images/teeth-21.png')); ?>"
                                                                                alt="">
                                                                        </div>
                                                                        <div class="teeth" id="tooth-29"><img
                                                                                class="img-fluid"
                                                                                src="<?php echo e(asset('public/theme/myweb/images/teeth-20.png')); ?>"
                                                                                alt="">
                                                                        </div>
                                                                        <div class="teeth" id="tooth-30"><img
                                                                                class="img-fluid"
                                                                                src="<?php echo e(asset('public/theme/myweb/images/teeth-19.png')); ?>"
                                                                                alt="">
                                                                        </div>
                                                                        <div class="teeth" id="tooth-31"><img
                                                                                class="img-fluid"
                                                                                src="<?php echo e(asset('public/theme/myweb/images/teeth-18.png')); ?>"
                                                                                alt="">
                                                                        </div>
                                                                        <div class="teeth" id="tooth-32"><img
                                                                                class="img-fluid"
                                                                                src="<?php echo e(asset('public/theme/myweb/images/teeth-17.png')); ?>"
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
                                                        
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="subForm">
                                                            <div class="row">

                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-12">
                                                        <label for="text">Current Dentist:</label>
                                                        <input type="text" placeholder="Enter here"
                                                            name="current_dentist"
                                                            value='<?php echo e(old('current_dentist')); ?>'>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group agree">
                                                            <input type='checkbox' class='form-control' required>
                                                            <label
                                                                class="control-label"><?php echo e(_lang('I agree')); ?></label>
                                                        </div>
                                                        <p>I hereby confirm that I or my dental provider on my behalf,
                                                            voluntarily submit my information, understanding that id2
                                                            does not assume responsibility for any risks associated with
                                                            misdiagnosis of dental complications nor the transmission
                                                            and storage of my personal data. Information given here is
                                                            checked thoroughly; however, id2 cannot guarantee the
                                                            accuracy or completeness of submitted information and thus
                                                            will not be held liable for misinformation. For specific
                                                            questions regarding various implant materials, sizes,
                                                            components, or other properties, please consult the
                                                            manufacturer.</p>
                                                            <p class='text-danger'>Please expect an automated email shortly; kindly check your junk/spam folder if it doesn't appear in your inbox.</p>
                                                    </div>

                                                    <div class="col-12 col-lg-12 mt-5 ">
                                                        <div class="doctor_portal_rejister">
                                                            <?php if($count_patient >= $columnCount): ?>

                                                                <a class="btn btn-danger text-light"
                                                                    style="cursor: pointer"
                                                                    href="<?php echo e(url('pricing')); ?>">Upgrade Package</a>
                                                            <?php else: ?>
                                                                <?php if(!Auth::user()->user_status == 'Dental_Specialist'): ?>
                                                                    <input class="btn-secondary" type="submit"
                                                                        id="submit" value="Register">
                                                                <?php else: ?>
                                                                    <input class="btn-secondary" type="submit"
                                                                        id="submit" value="Register">
                                                                <?php endif; ?>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php if(Auth::check() && Auth::user()->user_status == 'patient'): ?>
                            <?php
                                $patient_portal_done = App\TeethData::where('user_matching_id', Auth::user()->id)
                                    ->where('status', 'patient')
                                    ->first();
                            ?>
                            <?php if(!$patient_portal_done): ?>
                                <div class="main_doctor_register_portal">
                                    <div class="container">
                                        <div class="row justify-content-center">
                                            <div class="col-12 col-lg-12 text-center">
                                                <div class="doctor_register_portal_heading">
                                                    <!--patient_register_registeration_heading-->

                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-10">
                                                <form action="<?php echo e(route('doctor.register.portal')); ?>" method='post'
                                                    id="form" enctype="multipart/form-data">
                                                    <?php echo csrf_field(); ?>
                                                    <?php if($errors->any()): ?>
                                                        <div class="alert alert-danger">
                                                            <ul>
                                                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <li><?php echo e($error); ?></li>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </ul>
                                                        </div>
                                                    <?php endif; ?>
                                                    <input type="hidden" name="user_status" value="patient">
                                                    <input type="hidden" name="status" value="patient">

                                                    <div class="row">
                                                        <div class="col-12">
                                                            <label for="fname">* First Name</label>
                                                            <div class="input-group has-validation">
                                                                <input type="text" name="fname" id="fname"
                                                                    placeholder="Enter here" class="form-control"
                                                                    value='<?php echo e(Auth::user()->first_name ? Auth::user()->first_name : ''); ?>'
                                                                    readonly>
                                                                <div class="invalid-feedback">
                                                                    Please choose a First Name.
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <label for="lname">* Last Name</label>
                                                            <div class="input-group">
                                                                <input type="text" name="lname" id="lname"
                                                                    placeholder="Enter here" class="form-control"
                                                                    value='<?php echo e(Auth::user()->last_name ? Auth::user()->last_name : ''); ?>'
                                                                    readonly>

                                                            </div>

                                                        </div>
                                                        <div class="col-12">
                                                            <label for="streesAddress">Street Address</label>
                                                            <div class="input-group">
                                                                <input type="text" name="streesAddress"
                                                                    id="streesAddress" placeholder="Enter here" value="<?php echo e(old('streesAddress')); ?>">
                                                            </div>
                                                        </div>

                                                        <?php
                                                            $countries = App\Country::all();
                                                            $united_state = App\Country::where('id', 233)->first();
                                                        ?>
                                                        <div class="col-12">
                                                            <label>Patient Country</label>
                                                            <select name="country" id="country">
                                                                <option value="">Select Country</option>
                                                                <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <?php if($loop->first): ?>
                                                                        <option value="<?php echo $united_state->id; ?>">
                                                                            <?php echo $united_state->name; ?></option>
                                                                    <?php else: ?>
                                                                        <option value="<?php echo $item->id; ?>">
                                                                            <?php echo $item->name; ?></option>
                                                                    <?php endif; ?>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </select>
                                                        </div>


                                                        <div class="col-12">
                                                            <label>Patient State</label>
                                                            <select name="State" id="state"></select>
                                                        </div>
                                                        <div class="col-12">
                                                            <label>Patient City</label>
                                                            <select name="city" id="city"></select>
                                                        </div>
                                                        <div class="col-12">
                                                            <label for="zipCode">* Zip code</label>
                                                            <div class="input-group">
                                                                <input type="number" name="zipCode" id="zipCode"
                                                                    placeholder="Enter here" class="form-control" value='<?php echo e(old('zipCode')); ?>'>
                                                                <i class="fas fa-exclamation-circle failure-icon"></i>
                                                                <i class="far fa-check-circle success-icon"></i>
                                                            </div>
                                                            <div class="error"></div>
                                                        </div>
                                                        <div class="col-12">
                                                            <label>* Sex</label>
                                                            <select name="gender" id="country">
                                                                <option value="">Select Sex</option>
                                                                <option value="Male">Male</option>
                                                                <option value="Female">Female</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-12">
                                                            <label for="phonenumber">* Age</label>
                                                            <input type="number" placeholder="Enter here"
                                                                name="age" value='<?php echo e(old('age')); ?>'>
                                                        </div>


                                                        <div class="col-12">
                                                            <label for="email">* Email</label>
                                                            <input type="email" placeholder="Enter here" readonly
                                                                name='email' class="form-control"
                                                                value='<?php echo e(Auth::user()->email); ?>'>
                                                        </div>
                                                        <div class="col-12">
                                                            <label for="email">* Phone Number</label>
                                                            <input type="text" readonly
                                                                name='number' class="form-control"
                                                                placeholder='<?php echo e(Auth::user()->phone ? Auth::user()->phone : ''); ?>' value='<?php echo e(Auth::user()->phone ? Auth::user()->phone : ''); ?>'>
                                                        </div>

                                                     

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
                                                                                src="<?php echo e(asset('public/theme/myweb/images/top-molar.png')); ?>"
                                                                                alt="">
                                                                            <div class="teeths">
                                                                                <div class="teeth" id="tooth-1"><img
                                                                                        class="img-fluid"
                                                                                        src="<?php echo e(asset('public/theme/myweb/images/teeth-1.png')); ?>"
                                                                                        alt="">
                                                                                </div>
                                                                                <div class="teeth" id="tooth-2"><img
                                                                                        class="img-fluid"
                                                                                        src="<?php echo e(asset('public/theme/myweb/images/teeth-2.png')); ?>"
                                                                                        alt="">
                                                                                </div>
                                                                                <div class="teeth" id="tooth-3"><img
                                                                                        class="img-fluid"
                                                                                        src="<?php echo e(asset('public/theme/myweb/images/teeth-3.png')); ?>"
                                                                                        alt="">
                                                                                </div>
                                                                                <div class="teeth" id="tooth-4"><img
                                                                                        class="img-fluid"
                                                                                        src="<?php echo e(asset('public/theme/myweb/images/teeth-4.png')); ?>"
                                                                                        alt="">
                                                                                </div>
                                                                                <div class="teeth" id="tooth-5"><img
                                                                                        class="img-fluid"
                                                                                        src="<?php echo e(asset('public/theme/myweb/images/teeth-5.png')); ?>"
                                                                                        alt="">
                                                                                </div>
                                                                                <div class="teeth" id="tooth-6"><img
                                                                                        class="img-fluid"
                                                                                        src="<?php echo e(asset('public/theme/myweb/images/teeth-6.png')); ?>"
                                                                                        alt="">
                                                                                </div>
                                                                                <div class="teeth" id="tooth-7"><img
                                                                                        class="img-fluid"
                                                                                        src="<?php echo e(asset('public/theme/myweb/images/teeth-7.png')); ?>"
                                                                                        alt="">
                                                                                </div>
                                                                                <div class="teeth" id="tooth-8"><img
                                                                                        class="img-fluid"
                                                                                        src="<?php echo e(asset('public/theme/myweb/images/teeth-8.png')); ?>"
                                                                                        alt="">
                                                                                </div>
                                                                                <div class="teeth" id="tooth-9"><img
                                                                                        class="img-fluid"
                                                                                        src="<?php echo e(asset('public/theme/myweb/images/teeth-9.png')); ?>"
                                                                                        alt="">
                                                                                </div>
                                                                                <div class="teeth" id="tooth-10"><img
                                                                                        class="img-fluid"
                                                                                        src="<?php echo e(asset('public/theme/myweb/images/teeth-10.png')); ?>"
                                                                                        alt="">
                                                                                </div>
                                                                                <div class="teeth" id="tooth-11"><img
                                                                                        class="img-fluid"
                                                                                        src="<?php echo e(asset('public/theme/myweb/images/teeth-11.png')); ?>"
                                                                                        alt="">
                                                                                </div>
                                                                                <div class="teeth" id="tooth-12"><img
                                                                                        class="img-fluid"
                                                                                        src="<?php echo e(asset('public/theme/myweb/images/teeth-12.png')); ?>"
                                                                                        alt="">
                                                                                </div>
                                                                                <div class="teeth" id="tooth-13"><img
                                                                                        class="img-fluid"
                                                                                        src="<?php echo e(asset('public/theme/myweb/images/teeth-13.png')); ?>"
                                                                                        alt="">
                                                                                </div>
                                                                                <div class="teeth" id="tooth-14"><img
                                                                                        class="img-fluid"
                                                                                        src="<?php echo e(asset('public/theme/myweb/images/teeth-14.png')); ?>"
                                                                                        alt="">
                                                                                </div>
                                                                                <div class="teeth" id="tooth-15"><img
                                                                                        class="img-fluid"
                                                                                        src="<?php echo e(asset('public/theme/myweb/images/teeth-15.png')); ?>"
                                                                                        alt="">
                                                                                </div>
                                                                                <div class="teeth" id="tooth-16"><img
                                                                                        class="img-fluid"
                                                                                        src="<?php echo e(asset('public/theme/myweb/images/teeth-16.png')); ?>"
                                                                                        alt="">
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                        <div class="btm-teeth-images">
                                                                            <img class="top-molar"
                                                                                src="<?php echo e(asset('public/theme/myweb/images/btm-molar.png')); ?>"
                                                                                alt="">
                                                                            <div class="teeths">
                                                                                <div class="teeth" id="tooth-17"><img
                                                                                        class="img-fluid"
                                                                                        src="<?php echo e(asset('public/theme/myweb/images/teeth-32.png')); ?>"
                                                                                        alt="">
                                                                                </div>
                                                                                <div class="teeth" id="tooth-18"><img
                                                                                        class="img-fluid"
                                                                                        src="<?php echo e(asset('public/theme/myweb/images/teeth-31.png')); ?>"
                                                                                        alt="">
                                                                                </div>
                                                                                <div class="teeth" id="tooth-19"><img
                                                                                        class="img-fluid"
                                                                                        src="<?php echo e(asset('public/theme/myweb/images/teeth-30.png')); ?>"
                                                                                        alt="">
                                                                                </div>
                                                                                <div class="teeth" id="tooth-20"><img
                                                                                        class="img-fluid"
                                                                                        src="<?php echo e(asset('public/theme/myweb/images/teeth-29.png')); ?>"
                                                                                        alt="">
                                                                                </div>
                                                                                <div class="teeth" id="tooth-21"><img
                                                                                        class="img-fluid"
                                                                                        src="<?php echo e(asset('public/theme/myweb/images/teeth-28.png')); ?>"
                                                                                        alt="">
                                                                                </div>
                                                                                <div class="teeth" id="tooth-22"><img
                                                                                        class="img-fluid"
                                                                                        src="<?php echo e(asset('public/theme/myweb/images/teeth-27.png')); ?>"
                                                                                        alt="">
                                                                                </div>
                                                                                <div class="teeth" id="tooth-23"><img
                                                                                        class="img-fluid"
                                                                                        src="<?php echo e(asset('public/theme/myweb/images/teeth-26.png')); ?>"
                                                                                        alt="">
                                                                                </div>
                                                                                <div class="teeth" id="tooth-24"><img
                                                                                        class="img-fluid"
                                                                                        src="<?php echo e(asset('public/theme/myweb/images/teeth-25.png')); ?>"
                                                                                        alt="">
                                                                                </div>
                                                                                <div class="teeth" id="tooth-25"><img
                                                                                        class="img-fluid"
                                                                                        src="<?php echo e(asset('public/theme/myweb/images/teeth-24.png')); ?>"
                                                                                        alt="">
                                                                                </div>
                                                                                <div class="teeth" id="tooth-26"><img
                                                                                        class="img-fluid"
                                                                                        src="<?php echo e(asset('public/theme/myweb/images/teeth-23.png')); ?>"
                                                                                        alt="">
                                                                                </div>
                                                                                <div class="teeth" id="tooth-27"><img
                                                                                        class="img-fluid"
                                                                                        src="<?php echo e(asset('public/theme/myweb/images/teeth-22.png')); ?>"
                                                                                        alt="">
                                                                                </div>
                                                                                <div class="teeth" id="tooth-28"><img
                                                                                        class="img-fluid"
                                                                                        src="<?php echo e(asset('public/theme/myweb/images/teeth-21.png')); ?>"
                                                                                        alt="">
                                                                                </div>
                                                                                <div class="teeth" id="tooth-29"><img
                                                                                        class="img-fluid"
                                                                                        src="<?php echo e(asset('public/theme/myweb/images/teeth-20.png')); ?>"
                                                                                        alt="">
                                                                                </div>
                                                                                <div class="teeth" id="tooth-30"><img
                                                                                        class="img-fluid"
                                                                                        src="<?php echo e(asset('public/theme/myweb/images/teeth-19.png')); ?>"
                                                                                        alt="">
                                                                                </div>
                                                                                <div class="teeth" id="tooth-31"><img
                                                                                        class="img-fluid"
                                                                                        src="<?php echo e(asset('public/theme/myweb/images/teeth-18.png')); ?>"
                                                                                        alt="">
                                                                                </div>
                                                                                <div class="teeth" id="tooth-32"><img
                                                                                        class="img-fluid"
                                                                                        src="<?php echo e(asset('public/theme/myweb/images/teeth-17.png')); ?>"
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
                                                     

                                                        <div class="col-12">
                                                            <label for="text">Current Dentist:</label>
                                                            <input type="text" placeholder="Enter here"
                                                                name='current_dentist' value='<?php echo e(old('current_dentist')); ?>'>
                                                        </div>

                                                        <div class="col-md-12">
                                                            <div class="form-group agree">
                                                                <input type='checkbox' class='form-control' required>
                                                                <label
                                                                    class="control-label"><?php echo e(_lang('I agree')); ?></label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <p>I hereby confirm that I or my dental provider on my
                                                                behalf, voluntarily submit my information, understanding
                                                                that id2 does not assume responsibility for any risks
                                                                associated with misdiagnosis of dental complications nor
                                                                the transmission and storage of my personal data.
                                                                Information given here is checked thoroughly; however,
                                                                id2 cannot guarantee the accuracy or completeness of
                                                                submitted information and thus will not be held liable
                                                                for misinformation. For specific questions regarding
                                                                various implant materials, sizes, components, or other
                                                                properties, please consult the manufacturer.</p>
                                                        <p class='text-danger'>Please expect an automated email shortly; kindly check your junk/spam folder if it doesn't appear in your inbox.</p>
                                                        </div>
                                                        <div class="col-12 col-lg-12 mt-5 ">
                                                            <div class="doctor_portal_rejister">
                                                                <input class="btn-secondary" type="submit"
                                                                    id="submit" value="Register" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <!--End main content Inner-->

    </div>
    <!--End main content-->

</div>


<!--End Page Container-->
<?php echo $__env->make('theme.myweb.userDashboard.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
<?php /**PATH C:\xampp 7.4\htdocs\id2\resources\views/theme/myweb/userDashboard/doctor_register_portal.blade.php ENDPATH**/ ?>