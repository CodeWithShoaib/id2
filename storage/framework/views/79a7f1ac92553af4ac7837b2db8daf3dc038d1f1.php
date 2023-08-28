
<?php $__env->startSection('content'); ?>
<style>
.inner-banner {
    /*contact_us_background_img*/
    background: url(<?php echo e(get_option('contact_us_background_img') != '' ? asset('public/uploads/media/'.get_option('contact_us_background_img')) : ''); ?>) center center/cover no-repeat;
}
</style>
    <main>
        <section class="inner-banner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12">
                        <div class="content">
                            <!--contact_us_banner_heading-->
                            <h2><?php echo e(get_trans_option('contact_us_banner_heading')); ?></h2>
                            <!--contact_us_banner_image-->
                            <img data-aos="slide-right" data-aos-duration="1000" data-aos-delay="100" class="img-fluid banner-img"
                            src="<?php echo e(get_option('contact_banner_img') != '' ? asset('public/uploads/media/'.get_option('contact_banner_img')) : ''); ?>" alt="image">
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- Get In Touch Start -->
        <div class="get_in_touch_bg">
            <div class="get-in-touch">
                <div class="container">
                    <div class="row justify-content-center d-flex">
                        <div class="col-12 col-lg-12 justify-content-center d-flex">
                            <!--get_in_touch_heading-->
                            <h1 data-aos="zoom-out" data-aos-duration="1000" data-aos-delay="200"><?php echo get_trans_option('after_contact_heading'); ?></h1>
                        </div>
                        <div class="col-12 col-lg-10 col-md-12">
                            <form action="" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200">
                              <div class="row justify-content-center">
                                <div class="col-12 col-lg-6 col-md-12">
                                    <input type="text" placeholder="First Name">
                                </div>
                                <div class="col-12 col-lg-6 col-md-12">
                                    <input type="text" placeholder="Last Name">
                                </div>
                                <div class="col-12 col-lg-6 col-md-12">
                                    <input type="email" placeholder="Email Address">
                                </div>
                                <div class="col-12 col-lg-6 col-md-12">
                                    <input type="Phone" placeholder="Phone">
                                </div>
                                <div class="col-12">
                                    <textarea rows="10" placeholder="Comment"></textarea>
                                </div>
                                <div class="col-12 col-lg-12 text-center d-flex justify-content-center">
                                    <div class="theme-group">
                                        <button type="button" class="btn btn-primary">send</a>
                                    </div>
                                </div>
                                <div class="col-12">
                               
                                   <ul class="address-content">
                                   <li>
                                   <i class="fa-solid fa-location-dot"></i>
                                   9073 W State HWY 29
                                   </li>
                                   <li>
                             
                                   Ste 110 #503
                                   </li>
                                   <li>
                           
                                   Liberty Hill, TX 78642
                                   </li>
                                   </ul>
                                
                                </div>
                                <div class="col-12">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3432.7154495509285!2d-97.8402375!3d30.641975999999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x865b2ba58fdfddb5%3A0xa9c1264a061dd247!2s9073%20W%20State%20Hwy%2029%2C%20Liberty%20Hill%2C%20TX%2078642%2C%20USA!5e0!3m2!1sen!2s!4v1693012175607!5m2!1sen!2s" height="450" style="border:0;width: 100%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Get In Touch End -->
    </main>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js-script'); ?>
<script src="<?php echo e(asset('public/theme/default/js/cart.js?v=1.1')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('theme.myweb.website', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/betarwreality/public_html/resources/views/theme/myweb/contact-us.blade.php ENDPATH**/ ?>