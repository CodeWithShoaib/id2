<?php if(Auth::check()): ?>
    <?php
        $doctor = App\SlotsData::where('user_id', Auth::user()->id)->first();
        $list_patient = App\DoctorRegisterPortal::count();
        if ($list_patient > 0) {
            $patient_list = App\DoctorRegisterPortal::where('user_id', Auth::user()->id)->get();
            $count_patient = count($patient_list);
        }
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

        <div class="main-content-inner" style='margin-left:230px;'>

            <div class="alert alert-success alert-dismissible" id="main_alert" role="alert">
                <button type="button" id="close_alert" class="close">
                    <span aria-hidden="true"><i class="far fa-times-circle"></i></span>
                </button>
                <span class="msg"></span>
            </div>


            <link rel="stylesheet" href="<?php echo e('public/backend/plugins/chartjs/Chart.min.css'); ?>">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 mb-12">
                        <div class="card">
                            <div class="seo-fact sbg1">
                                <div class="p-4">
                                    <div class="seofct-icon">
                                        <span>Welcome Doctor <?php echo Auth::user()->first_name; ?> <?php echo Auth::user()->last_name; ?></span>
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
                        <form action="<?php echo e(url('/update_account')); ?>" method="post" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <input type="text" name="first_name" value="<?php echo e(Auth::user()->first_name); ?>"
                                class="form-control <?php echo e($errors->has('first_name') ? 'is-invalid' : ''); ?>"
                                placeholder="<?php echo e(_lang('First Name')); ?>">
                            <?php if($errors->has('first_name')): ?>
                                <div class="invalid-feedback">
                                    <?php echo e($errors->first('first_name')); ?>

                                </div>
                            <?php endif; ?>
                            <input type="text" name="last_name" value="<?php echo e(Auth::user()->last_name); ?>"
                                class="form-control  my-4 <?php echo e($errors->has('last_name') ? 'is-invalid' : ''); ?>"
                                placeholder="<?php echo e(_lang('Last Name')); ?>">

                            <?php if($errors->has('last_name')): ?>
                                <div class="invalid-feedback">
                                    <?php echo e($errors->first('last_name')); ?>

                                </div>
                            <?php endif; ?>

                            <input type="email" name="email" value="<?php echo e(Auth::user()->email); ?>"
                                class="form-control my-4  <?php echo e($errors->has('email') ? 'is-invalid' : ''); ?>"
                                placeholder="<?php echo e(_lang('Email')); ?>">

                            <?php if($errors->has('email')): ?>
                                <div class="invalid-feedback">
                                    <?php echo e($errors->first('email')); ?>

                                </div>
                            <?php endif; ?>

                            <input type="text" name="phone" value="<?php echo e(Auth::user()->phone); ?>"
                                class="form-control my-4 <?php echo e($errors->has('phone') ? 'is-invalid' : ''); ?>"
                                placeholder="<?php echo e(_lang('Phone')); ?>">

                            <?php if($errors->has('phone')): ?>
                                <div class="invalid-feedback">
                                    <?php echo e($errors->first('phone')); ?>

                                </div>
                            <?php endif; ?>
                            <div class="form-group">
                                <label class="control-label"><?php echo e(_lang('Image')); ?></label>
                                <input type="file" class="form-control dropify"
                                    data-default-file="<?php echo e(Auth::user()->profile_picture != '' ? asset('public/uploads/profile/' . Auth::user()->profile_picture) : ''); ?>"
                                    name="profile_picture" data-allowed-file-extensions="png jpg jpeg PNG JPG JPEG">
                            </div>
                            <?php if(Auth::check() && Auth::user()->user_status=='patient'): ?>
                            <?php
                            $pat_id=App\DoctorRegisterPortal::where('user_matching_id',Auth::user()->id)->first();
                            ?>
                            <?php if(Auth::user()->storing=='1'): ?>
                            <div class="form-group">
                                <label class="control-label"><?php echo e(_lang('Remove your account From doctor')); ?></label>
                                <select class='form-control' name='client_permission'>
                                    <option value='1' <?php echo e($pat_id->client_permission==1 ? 'selected' : ''); ?>>Not Remove</option>
                                    <option value='0' <?php echo e($pat_id->client_permission==0 ? 'selected' : ''); ?>>Remove</option>
                                </select>
                              
                            </div>
                            <div class="form-group">
                                <label class="control-label"><?php echo e(_lang('Allow doctor to edit')); ?></label>
                                <select class='form-control' name='user_edit_allow'>
                                    <option value='1' <?php echo e($pat_id->user_edit_allow==1 ? 'selected' : ''); ?> >Allow</option>
                                    <option value='0' <?php echo e($pat_id->user_edit_allow==0 ? 'selected' : ''); ?>>Not Allow</option>
                                </select>
                              
                            </div>
                            <div class="form-group">
                                <label class="control-label"><?php echo e(_lang('Hide Info from doctor')); ?></label>
                                <select class='form-control' name='hide_from_doctor'>
                                    <option value='1' <?php echo e($pat_id->hide_from_doctor==1 ? 'selected' : ''); ?>>Hide Info</option>
                                    <option value='0' <?php echo e($pat_id->hide_from_doctor==0 ? 'selected' : ''); ?>>Show Info</option>
                                </select>
                              
                            </div>
                            <?php endif; ?>
                            <?php endif; ?>


                            <button type="submit"
                                class="btn btn-primary my-2 custom_btn"><?php echo e(_lang('Update Details')); ?></button>
                        </form>
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
<?php /**PATH /home/betarwreality/public_html/resources/views/theme/myweb/userDashboard/updateProfile.blade.php ENDPATH**/ ?>