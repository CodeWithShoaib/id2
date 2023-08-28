
<?php $__env->startSection('content'); ?>
  <main>
    <section class="inner-banner">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-12">
            <div class="content">
              <h2>Login</h2>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Login in form -->
    <div class="main_login_form">
      <form method='post' action='<?php echo e(url('sign_in')); ?>'>
          <?php echo csrf_field(); ?>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-12 col-lg-7 text-center">
              <div class="row">
                <div class="col-12 col-lg-12">
                  <div class="login_heading">
                    <h2>LOGIN</h2>
                  </div>
                </div>
                <div class="col-12 col-lg-12">
                  <input type="text" placeholder="User Email" name='email'>
                </div>
                <div class="col-12 col-lg-12">
                  <input type="Password" placeholder="Password" name='password'>
                  <input type="hidden" name="redirect_to" value="<?php echo e(url()->previous()); ?>">
                </div>
                <div class="col-12 col-lg-12 mt-3 mb-3">
                  <span> <a href="#">Forgot Password?</a></span>
                </div>
                <div class="col-12 col-lg-12 mt-3 mb-3">
                  <div class="login_sigup_form">
                    <button type="submit" class=" btn btn-secondary">LOGIN</button>
                  </div>
                </div>
                <div class="col-12 col-lg-12 mt-3 mb-3">
                  <div class="singup_now">
                    <p>Not a member</p>
                    <a href="<?php echo e(route('signup')); ?>" >Sign-up Now</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>

  </main>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js-script'); ?>
<script src="<?php echo e(asset('public/theme/default/js/cart.js?v=1.1')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('theme.myweb.website', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/betarwreality/public_html/resources/views/theme/myweb/login.blade.php ENDPATH**/ ?>