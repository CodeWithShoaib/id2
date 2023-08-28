
<?php $__env->startSection('content'); ?>
    <style>
        .modal {
            position: fixed;
            top: 148px;
            left: 0;
            z-index: var(--bs-modal-zindex);
            display: none;
            width: 100%;
            height: 100%;
            overflow-x: hidden;
            overflow-y: auto;
            outline: 0;
        }

        .modal-footer .btn-secondary {
            background: black;
            color: #fff;
            border: none;
            /* border-radius: inherit; */
            padding: 4px 13px;
            border-radius: 5px;
        }

        .modal-footer .btn-secondary {
            background: black;
            color: #fff;
            border: none;
            /* border-radius: inherit; */
            padding: 4px 13px;
            border-radius: 5px;
        }

        .modal-footer .btn-primary {
            background: black;
            color: #fff;
            border: none;
            /* border-radius: inherit; */
            padding: 4px 13px;
            border-radius: 5px;
        }

        button.close {
            background: #000;
            color: #fff;
        }

        .require-validation .btn-primary {
            padding: 13px 7px;
            font-size: 1.6rem;
            font-family: var(--sf-light);
            background: var(--primary-color);
            color: var(--white);
            text-transform: capitalize;
            border: none;
            border: 1px solid var(--primary-color);
        }

        .inner-banner {
            background: url(public/theme/myweb/images/2240938015-huge.jpg) center center/cover no-repeat;
        }
    </style>
    <main>
        <section class="inner-banner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12">
                        <div class="content">
                            <h2>pricing</h2>
                            <p class="fs-3">Choose the plan that’s right for you or your implant practice.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="sec-pricing">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="content">
                            <h2>Pricing Plans
                            </h2>
                            <p>Empowering patients & dental professionals with information needed to help quickly treat implant
                                complications ANYWHERE in the world.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php
                        $Coupon = App\Entity\Coupon\Coupon::all();
                    ?>
                    <?php $__currentLoopData = $Coupon; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-12 col-md-6 col-lg-3">
                            <div class="card card-pricing">
                                <div class="card-body">
                                    <!--title-->
                                    <h5 id='title' class="title"><?php echo e($item->title); ?></h5>
                                    <!--value-->
                                    <span class="price">$</span><span id="price"
                                        class="price"><?php echo e($item->value); ?></span>
                                    <!--fee_time-->
                                    <p class="fee-time"><?php echo e($item->fee_time); ?> (<?php echo e($item->no_of_slots); ?>)</p>
                                    <input type='hidden' value='<?php echo e($item->no_of_slots); ?>' class='no_of_slots'>
                                    <!--patience_registeratifee-timeon_time_limit-->
                                    <p class="registration-time" id='registration_time'>
                                        <?php echo e($item->no_of_slots); ?> <?php echo e($item->patience_registeration_time_limit); ?></p>
                                    <!--button_name-->
                                    <?php if(Auth::check() && Auth::user()->user_status == 'Dental_Specialist'): ?>
                                        <a type="button" class="btn btn-primary package_data" data-toggle="modal"
                                            data-target="#exampleModal1"><?php echo e($item->button_name); ?></a>
                                    <?php else: ?>
                                        <a type="button" href='<?php echo e(url("signup")); ?>' class="btn btn-primary package_data"
                                            ><?php echo e($item->button_name); ?></a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </section>
        <section class="sec-pricing-contant">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-12">
                        <ul>
                            <li><i class="fa fa-check"></i> Access to an <span> extensive implant database </span> with over
                                500+ manufacturers, 3850+ brands/models and 8800+ diameters/sizes.
                            </li>
                            <li><i class="fa fa-check"></i>One registration fee = <span> Lifetime data storage</span>
                            </li>
                            <li><i class="fa fa-check"></i><span>Upload Implant x-rays
                                </span></li>
                            <li><i class="fa fa-check"></i><span>No monthly/annual subscription fees</span></li>
                            <li><i class="fa fa-check"></i><span> Unlimited number</span> of implants registered per patient for
                                one fee
                            </li>
                            <li><i class="fa fa-check"></i><span> 24/7</span> Online Portal Access
                            </li>
                            <li><i class="fa fa-check"></i>Printable Passport & Digital Sharing Information
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true" style='z-index:9999999; !important'>
            <div class="modal-dialog" role="document" style='z-index:9999999; !important'>
                <div class="modal-content" style='z-index:9999999; !important'>
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Payment Form</h5>

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form  role="form" action="<?php echo e(route('stripe.post')); ?>" method="post" class="require-validation" data-cc-on-file="false" data-stripe-publishable-key="<?php echo e(env('STRIPE_KEY')); ?>" id="payment-form">
                            <?php echo csrf_field(); ?>

                            <div class='form-row row my-4'>
                                <div class='col-xs-12 form-group required'>
                                    <label class='control-label'>Name on Card</label> <input class='form-control'
                                        size='4' type='text' style='padding:1rem 0;'>
                                </div>
                            </div>
                            <div class='form-row row my-4'>
                                <div class='col-xs-12 form-group  required'>
                                    <label class='control-label'>Card Number</label> <input autocomplete='off'
                                        class='form-control card-number' size='20' type='text'
                                        style='padding:1rem 0;'>
                                </div>
                            </div>
                            <div class='form-row row my-4'>
                                <div class='col-xs-12 col-md-4 form-group cvc required'>
                                    <label class='control-label'>CVC</label> <input autocomplete='off'
                                        class='form-control card-cvc' placeholder='ex. 311' size='4' type='text'
                                        style='padding:1rem 0;'>
                                </div>
                                <div class='col-xs-12 col-md-4 form-group expiration required'>
                                    <label class='control-label'>Expiration Month</label> <input
                                        class='form-control card-expiry-month' placeholder='MM' size='2'
                                        type='text' style='padding:1rem 0;'>
                                </div>
                                <div class='col-xs-12 col-md-4 form-group expiration required'>
                                    <label class='control-label'>Expiration Year</label> <input
                                        class='form-control card-expiry-year' placeholder='YYYY' size='4'
                                        type='text' style='padding:1rem 0;'>
                                </div>
                            </div>
                              <!--<input type="hidden" name="payment_token" id="payment-token">-->
                                <!--<button id="card-button" type="button">Pay</button>-->
                            <div class="row">
                                <div class="col-xs-12">
                                    <button class="btn-primary btn-sm" id='stripe_btn' type="submit">Pay Now</button>
                                </div>
                            </div>

                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Select Payment Method</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class='payment_method'>
                        <!--<button class='btn btn-warning' data-toggle="modal"  data-target="#exampleModal">Stripe</button>-->
                        <a class='btn btn-warning' href='<?php echo e(url("square/payment")); ?>' >Square</a>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
      
    </main>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js-script'); ?>
  <script type="module">
    const payments = Square.payments('sandbox-sq0idb-k0_9mQTBym--nGsU28UsLg', 'LHQMS2YQVYD19');
    const card = await payments.card();
    await card.attach('#card-container');
  
    const cardButton = document.getElementById('card-button');
    cardButton.addEventListener('click', async () => {
      const statusContainer = document.getElementById('payment-status-container');
      const paymentTokenInput = document.getElementById('payment-token');
  
      try {
        const result = await card.tokenize();
        if (result.status === 'OK') {
          console.log(`Payment token is ${result.token}`);
          paymentTokenInput.value = result.token; // Set the payment token in the form
          document.getElementById('payment-form-server').submit(); // Submit the form to the server for payment processing
        } else {
          let errorMessage = `Tokenization failed with status: ${result.status}`;
          if (result.errors) {
            errorMessage += ` and errors: ${JSON.stringify(result.errors)}`;
          }
          throw new Error(errorMessage);
        }
      } catch (e) {
        console.error(e);
        statusContainer.innerHTML = "Payment Failed";
      }
    });
  </script>
    <script src="<?php echo e(asset('public/theme/default/js/cart.js?v=1.1')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('theme.myweb.website', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/betarwreality/public_html/resources/views/theme/myweb/pricing.blade.php ENDPATH**/ ?>