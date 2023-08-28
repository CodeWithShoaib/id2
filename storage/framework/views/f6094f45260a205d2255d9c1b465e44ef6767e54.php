<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card card-signin p-3 my-5">
                <div class="card-body">
					<img class="logo" src="<?php echo e(get_logo()); ?>">
					
					<h5 class="text-center py-4"><?php echo e(_lang('Login To Your Account')); ?></h4> 
					
                    <?php if(Session::has('error')): ?>
                        <div class="alert alert-danger text-center">
                            <strong><?php echo e(session('error')); ?></strong>
                        </div>
                    <?php endif; ?>
					
					<?php if(Session::has('registration_success')): ?>
                        <div class="alert alert-success text-center">
                            <strong><?php echo e(session('registration_success')); ?></strong>
                        </div>
                    <?php endif; ?>

					<form method="POST" class="form-signin" action="<?php echo e(route('login')); ?>">
                        <?php echo csrf_field(); ?>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="email" value="<?php echo e(old('email')); ?>" placeholder="<?php echo e(_lang('Email')); ?>" required autofocus>

                                <?php if($errors->has('email')): ?>
                                    <span class="invalid-feedback">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
						    <div class="col-md-12">	

								<input id="password" type="password" class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" name="password" placeholder="<?php echo e(_lang('Password')); ?>" required>

                                <?php if($errors->has('password')): ?>
                                    <span class="invalid-feedback">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
						
						<div class="text-center">
							<div class="custom-control custom-checkbox mb-3">
								<input type="checkbox" name="remember" class="custom-control-input" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>
								<label class="custom-control-label" for="remember"><?php echo e(_lang('Remember Me')); ?></label>
							</div>
						</div>

                        <div class="form-group row mb-0">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary btn-block">
                                    <?php echo e(_lang('Login')); ?>

                                </button>

                                <?php if(get_option('google_login') == 'enabled'): ?>
                                    <a href="<?php echo e(url('/login/google')); ?>" class="btn btn-google btn-block"> <?php echo e(_lang('Continue With Google')); ?></a>
								<?php endif; ?>

                                <?php if(get_option('facebook_login') == 'enabled'): ?>
                                    <a href="<?php echo e(url('/login/facebook')); ?>" class="btn btn-facebook btn-block"> <?php echo e(_lang('Continue With Facebook')); ?></a>
                                <?php endif; ?>

								<a class="btn btn-link btn-register" href="<?php echo e(route('register')); ?>">
									<?php echo e(_lang('Create Account')); ?>

								</a>
								
                            </div>
                        </div>
						
						
						<div class="form-group row">
                            <div class="col-md-12">
								<a class="btn-link" href="<?php echo e(route('password.request')); ?>">
									<?php echo e(_lang('Forgot Password?')); ?>

								</a>
							</div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/betarwreality/public_html/resources/views/auth/login.blade.php ENDPATH**/ ?>