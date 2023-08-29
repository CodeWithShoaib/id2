
<?php $__env->startSection('content'); ?>
    <style>
        .invalid-feedback {
            display: none;
            width: 100%;
            margin-top: .25rem;
            font-size: 1.675em !important;
            color: var(--bs-form-invalid-color);
        }
        .sign-para {
            display: flex;
    align-items: center;
    gap: 6px;

        }
        .sign-para p{
            margin-bottom: 0;

        }
        .sign-para a{
            text-decoration: none;
    color: #00b0f0;
    font-size: 15px;
        }
    .business_name{
        display:block !important;
    }    
    </style>
    <main>
        <section class="inner-banner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12">
                        <div class="content">
                            <h2>Sign-Up</h2>
                            <div class="sign-para">
                                        <p>Already Have an Account </p> 
                                        <a href="<?php echo e(url('user/login')); ?>">Sign-in Now</a>
                                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="main_login_form">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <form action="<?php echo e(url('sign_up')); ?>" method='post'>
                            <?php echo csrf_field(); ?>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-check-parent">
                                        <div class="form-check">
                                            <input class="form-check-input patient" type="radio" value='patient'
                                                name="user_status" id="flexRadioDefault1" checked>
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Patient
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input dental" type="radio" name="user_status"
                                                id="flexRadioDefault2" value='Dental_Specialist'>
                                            <label class="form-check-label" for="flexRadioDefault2">Dental
                                                Professional</label>
                                        </div>
                                        <!--<div class="form-check">-->
                                        <!--    <input class="form-check-input" type="radio" name="user_status"-->
                                        <!--        id="flexRadioDefault3" value='laboratory_owner'>-->
                                        <!--    <label class="form-check-label" for="flexRadioDefault3">-->
                                        <!--        Laboratory Owner-->
                                        <!--    </label>-->
                                        <!--</div>-->
                                    </div>

                                </div>
                                <?php if($errors->has('user_status')): ?>
                                    <div class="invalid-feedback">
                                        <?php echo e($errors->first('user_status')); ?>

                                    </div>
                                <?php endif; ?>
                                <div class="col-12 col-lg-12">
                                    <div class="singup_now">
                                        <p>Already Have an Account</p>
                                        <a href="<?php echo e(url('user/login')); ?>">Sign-in Now</a>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="login_heading">
                                        <h2>your account</h2>
                                    </div>
                                </div>
                                
                          
                                <div class="col-12 col-lg-6 col-md-12">
                                    <label for="">First Name</label>
                                    <input type="text" name="first_name" required value="<?php echo e(old('first_name')); ?>"
                                        class='<?php echo e($errors->has('first_name') ? 'is-invalid' : ''); ?>'>
                                    <?php if($errors->has('first_name')): ?>
                                        <div class="invalid-feedback">
                                            <?php echo e($errors->first('first_name')); ?>

                                        </div>
                                    <?php endif; ?>
                                </div>
                                <div class="col-12 col-lg-6 col-md-12">
                                    <label for="">Last Name</label>
                                    <input type="text" name="last_name" required value="<?php echo e(old('last_name')); ?>"
                                        class='<?php echo e($errors->has('last_name') ? 'is-invalid' : ''); ?>'>
                                    <?php if($errors->has('last_name')): ?>
                                        <div class="invalid-feedback">
                                            <?php echo e($errors->first('last_name')); ?>

                                        </div>
                                    <?php endif; ?>
                                </div>
                                <div class="col-12 col-lg-6 col-md-12">
                                    <label for="">Email Address</label>
                                    <input type="email" name="email" required value="<?php echo e(old('email')); ?>"
                                        class='<?php echo e($errors->has('email') ? 'is-invalid' : ''); ?>'>
                                    <?php if($errors->has('email')): ?>
                                        <div class="invalid-feedback">
                                            <?php echo e($errors->first('email')); ?>

                                        </div>
                                    <?php endif; ?>
                                </div>
                                <div class="col-12 col-lg-6 col-md-12">
                                    <label for="">Contact Number</label>
                                    <input type="text" name="phone" class='doctor_phone_number' required value="<?php echo e(old('phone')); ?>"
                                        class='number'>
                                    <?php if($errors->has('phone')): ?>
                                        <div class="invalid-feedback">
                                            <?php echo e($errors->first('phone')); ?>

                                        </div>
                                    <?php endif; ?>
                                    
                                </div>
                                    <div class="col-12 col-lg-6 col-md-12 business_name" style='display:block !important;'>
                                        <label for="">Business Name</label>
                                        <input type="text" name="practitioners_name"  class="form-control business_name_id"  >
                                    </div>
                                <div class="col-12">
                                    <div class="login_heading">
                                        <h2>Set your Password</h2>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 col-md-12">
                                    <label for="">Password</label>
                                    <input type="password" name="password" required value="<?php echo e(old('password')); ?>"
                                        class='<?php echo e($errors->has('password') ? 'is-invalid' : ''); ?>'>
                                    <?php if($errors->has('password')): ?>
                                        <div class="invalid-feedback">
                                            <?php echo e($errors->first('password')); ?>

                                        </div>
                                    <?php endif; ?>
                                </div>
                                <div class="col-12 col-lg-6 col-md-12">
                                    <label for="">Confirm Password</label>
                                    <input type="password" name="password_confirmation" required value="<?php echo e(old('password_confirmation')); ?>"
                                        class='<?php echo e($errors->has('password_confirmation') ? 'is-invalid' : ''); ?>'>
                                    <?php if($errors->has('password_confirmation')): ?>
                                        <div class="invalid-feedback">
                                            <?php echo e($errors->first('password_confirmation')); ?>

                                        </div>
                                    <?php endif; ?>
                                </div>
                            
                             
                                <div class="col-12 col-lg-7 col-md-12 mx-auto">
                                    <p class="text-center">Please ensure your details have been entered correctly, as we
                                        will send your account activation link and login details to your nominated email
                                        address or mobile phone.</p>
                                        <div class="my-5">
                                        <div class="d-flex text-center">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <p>  This website requires users to be at least 18 years of age. By checking the box you confirm that you have read, consent and agree to id2's Terms & Conditions and Privacy Policy.</p>
  <label class="form-check-label" for="flexCheckDefault">
  </label>
 
</div>

                                        </div>
                                </div>
                                <div class="col-12 col-lg-6 col-md-12 mx-auto">
                                    <div class="login_sigup_form">
                                        <button class=" btn btn-secondary" id='submit'>Next</button>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-12 mt-3 mb-3">
                                    <div class="singup_now">
                                     
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </section>

    </main>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js-script'); ?>
    <script src="<?php echo e(asset('public/theme/default/js/cart.js?v=1.1')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('theme.myweb.website', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp 7.4\htdocs\id2\resources\views/theme/myweb/signup.blade.php ENDPATH**/ ?>