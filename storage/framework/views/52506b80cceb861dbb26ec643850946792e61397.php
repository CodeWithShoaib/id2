
<?php $__env->startSection('content'); ?>
	<?php
	$data=get_trans_option('counter_number_about');
	$count=intval($data);
	?>
<style>
.inner-banner {
    /*about_banner_background_img*/
    background: url(<?php echo e(get_option('about_banner_background_img') != '' ? asset('public/uploads/media/'.get_option('about_banner_background_img')) : ''); ?>) center center/cover no-repeat;
    height: 500px;
    display: flex;
    align-items: center;
    color: white;
    position: relative;
    z-index: 1;
}
ul{
    font-size:2rem;
}
.about-inner-banner {
    /*bottom_background_img*/
    background: linear-gradient(#00000094,#00000094),   url(<?php echo e(get_option('bottom_background_img') != '' ? asset('public/uploads/media/'.get_option('bottom_background_img')) : ''); ?>) center center/cover no-repeat !important;
    color: var(--white);
}
.about-main-banner {
    background: linear-gradient(#00000038, #00000038),url(https://betarwreality.com/public/theme/myweb/images/why-partner.jpg) top/cover no-repeat !important;
}
</style>
    <main>
        <section class="inner-banner about-main-banner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12">
                        <div class="content">
                            <!--banner_heading-->
                            <h2>Your Benefits</h2>
                            <!--about_banner_img-->
                            <img data-aos="slide-right" data-aos-duration="1000" data-aos-delay="100" class="img-fluid banner-img" src="<?php echo e(get_option('about_banner_img') != '' ? asset('public/uploads/media/'.get_option('about_banner_img')) : ''); ?>" alt="image">
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- About Sec -->
        <section class="sec-about benefits-page">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-6 " >
                        <div class="content">
                             <h5 class="benefits-h5">Dental Professionals</h5>
                        <ul>
                        <li>
                                 <img class="img-fluid icon" src="<?php echo e(asset('public/theme/myweb/images/benefit-icon-1.png')); ?>" alt="">
                         <div class="content2">
                             <h5>PROACTIVE:</h5>
                             <p>Register a patient’s implant anytime during the treatment process.</p>
                            </div>
                        </li>
                        <li>
                                 <img class="img-fluid icon" src="<?php echo e(asset('public/theme/myweb/images/benefit-icon-2.png')); ?>" alt="">
                         <div class="content2">
                             <h5>VALUE ADDED STANDARD OF CARE:</h5>
                             <p>Display and differentiate yourself to your patients with their long-term interests of implant health.</p>
                            </div>
                        </li>
                        <li>
                                 <img class="img-fluid icon" src="<?php echo e(asset('public/theme/myweb/images/benefit-icon-3.png')); ?>" alt="">
                         <div class="content2">
                             <h5>CONSOLIDATION:</h5>
                             <p> Multiple brands of implant systems can be registered to one implant agnostic and independent entity.</p>
                            </div>
                        </li>
                        <li>
                                 <img class="img-fluid icon" src="<?php echo e(asset('public/theme/myweb/images/benefit-icon-4.png')); ?>" alt="">
                         <div class="content2">
                             <h5>TRANSPARENCY:</h5>
                             <p>Share exactly what implant components were used with your patients.</p>
                            </div>
                        </li>
                        <li>
                                 <img class="img-fluid icon" src="<?php echo e(asset('public/theme/myweb/images/benefit-icon-5.png')); ?>" alt="">
                         <div class="content2">
                             <h5>ACCURATE: </h5>
                             <p>Never leave the guesswork to a 3rd party. Free yourself and your staff from future research tasks in retrieving implant patient records.</p>
                            </div>
                        </li>
                        <li>
                                 <img class="img-fluid icon" src="<?php echo e(asset('public/theme/myweb/images/benefit-icon-6.png')); ?>" alt="">
                         <div class="content2">
                             <h5>EMPOWERMENT: </h5>
                             <p>Let the patient own their information.</p>
                            </div>
                        </li>
                        <li>
                                 <img class="img-fluid icon" src="<?php echo e(asset('public/theme/myweb/images/benefit-icon-7.png')); ?>" alt="">
                         <div class="content2">
                             <h5>UNLIMITED: </h5>
                             <p>Number of implants registered for same patient for a minimal, one-time fee.</p>
                            </div>
                        </li>
                        <li>
                                 <img class="img-fluid icon" src="<?php echo e(asset('public/theme/myweb/images/benefit-icon-8.png')); ?>" alt="">
                         <div class="content2">
                             <h5>SECURE / ANYTIME ACCESS:</h5>
                             <p>HIPAA compliant, password protected, encrypted and always 24/7 availability.</p>
                            </div>
                        </li>
                         
                        </ul>
                        </div>
                       
                    </div>
                    <div class="col-12 col-lg-6" >
                          <div class="content content2-bg">
                        <h5 class="benefits-h5">Patients</h5>
                      <ul>
                        <li>
                                 <img class="img-fluid icon" src="<?php echo e(asset('public/theme/myweb/images/Patients-icon-1.png')); ?>" alt="">
                         <div class="content2">
                             <h5>AWARENESS:</h5>
                             <p>List of what implant brands and components were placed in your mouth along with x-rays.</p>
                            </div>
                        </li>
                        <li>
                                 <img class="img-fluid icon" src="<?php echo e(asset('public/theme/myweb/images/Patients-icon-2.png')); ?>" alt="">
                         <div class="content2">
                             <h5>EFFICIENCY:</h5>
                             <p>Enable quick treatment by providing your dental professional with precise information.</p>
                            </div>
                        </li>
                        <li>
                                 <img class="img-fluid icon icon-patient-3" src="<?php echo e(asset('public/theme/myweb/images/Patients-icon-3.png')); ?>" alt="">
                         <div class="content2">
                             <h5>SECURE / ANYTIME ACCESS:</h5>
                             <p>Your information is password protected, encrypted, HIPAA compliant and always available 24/7 anywhere in the world.</p>
                            </div>
                        </li>
                        <li>
                                 <img class="img-fluid icon icon-patient-5" src="<?php echo e(asset('public/theme/myweb/images/Patients-icon-4.png')); ?>" alt="">
                         <div class="content2">
                             <h5>CONTINUITY OF CARE:</h5>
                             <p>If you switch dental professionals, having your information readily available ensures an accurate transfer of dental implant details.</p>
                            </div>
                        </li>
                        <li>
                                 <img class="img-fluid icon icon-patient-5" src="<?php echo e(asset('public/theme/myweb/images/Patients-icon-5.png')); ?>" alt="">
                         <div class="content2">
                             <h5>UNLIMITED:</h5>
                             <p>Number of implants can be registered to you at any time.</p>
                            </div>
                        </li>
                        <li>
                                 <img class="img-fluid icon" src="<?php echo e(asset('public/theme/myweb/images/Patients-icon-6.png')); ?>" alt="">
                         <div class="content2">
                             <h5>RECORDS:</h5>
                             <p>Keep track of all your implant providers.</p>
                            </div>
                        </li>
                        <li>
                                 <img class="img-fluid icon" src="<?php echo e(asset('public/theme/myweb/images/Patients-icon-7.png')); ?>" alt="">
                         <div class="content2">
                             <h5>EDUCATION:</h5>
                             <p>Dental Implant related materials for maintenance, hygiene, problem signs to be aware of, and much more.</p>
                            </div>
                        </li>
                        <li>
                                 <img class="img-fluid icon" src="<?php echo e(asset('public/theme/myweb/images/benefit-icon-14.png')); ?>" alt="">
                         <div class="content2">
                             <h5>INVESTMENT:</h5>
                             <p >For the price of a meal, your implant can be registered for your lifetime.</p>
                            </div>
                        </li>
                         
                        </ul>
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <center><p class="fs-2 mt-5"><b>*<span class="id2-text">id2</span> complies with HIPAA requirements to ensure your private data stays exactly that….private.</b></p></center>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script>
    	var valueFromPHP = "<?php echo e($count); ?>";
// counter start //
$({ counter: 0 }).animate({ counter: valueFromPHP }, {
  duration: 3000,
  easing: 'linear',
  step: function () {
    $('.count-down p').text(Math.ceil(this.counter))
  },
  complete: function () {
  }
});
// counter end //
    </script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js-script'); ?>
<script src="<?php echo e(asset('public/theme/default/js/cart.js?v=1.1')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('theme.myweb.website', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/betarwreality/public_html/resources/views/theme/myweb/benefits.blade.php ENDPATH**/ ?>