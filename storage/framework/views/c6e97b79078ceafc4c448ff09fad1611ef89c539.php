
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

.about-inner-banner {
    /*bottom_background_img*/
    background: linear-gradient(#00000094, #00000094),    url(<?php echo e(get_option('bottom_background_img') != '' ? asset('public/uploads/media/'.get_option('bottom_background_img')) : ''); ?>) center center/cover no-repeat !important;
    color: var(--white);
}
.about-main-banner {
    background: url(<?php echo e(get_option('about_banner_background_img') != '' ? asset('public/uploads/media/'.get_option('about_banner_background_img')) : ''); ?>) center center/cover no-repeat !important;
}
.first-heading{
    font-size : 44px ;
}
</style>
    <main>
        <section class="inner-banner about-main-banner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12">
                        <div class="content">
                            <!--banner_heading-->
                            <h2><?php echo e(get_trans_option('banner_heading')); ?></h2>
                            <!--about_banner_img-->
                            <img data-aos="slide-right" data-aos-duration="1000" data-aos-delay="100" class="img-fluid banner-img" src="<?php echo e(get_option('about_banner_img') != '' ? asset('public/uploads/media/'.get_option('about_banner_img')) : ''); ?>" alt="image">
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- About Sec -->
    
        <section class="sec-about about-inner-banner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-6 col-12">
                      <div class="content">
                        <img data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="100" class="about-img aos-init aos-animate" src="https://betarwreality.com/public/theme/myweb/images/about-us-img.png" alt="">
                        <!--bottom_banner_heading-->
                        <h3 data-aos="slide-right" data-aos-delay="50" data-aos-duration="1000" class="aos-init aos-animate"><strong>The Official Dental <br> Implant Registry™</strong></h3>
                        <div class="count-down aos-init aos-animate" data-aos="fade-up" data-aos-duration="1400" data-aos-delay="200">
                          <p>40</p><span>+</span>
                        </div>
                       <!--bottom_banner_right_content-->
                       <h3 class="first-heading">Years of Experience</h3>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                      <div class="content_2">
                        <h3 class="second-heading">Patient Centric 
                          <img class="img-fluid" src="https://betarwreality.com/public/theme/myweb/images//tooth.png" alt="image">
                        Implant Agnostic</h3>
                        <!--bottom_banner_left_content-->
                       
                        <p>Implant dentistry has come a long way since the early designs of the early 1980s.</p>
                      
                        <p>Since then, there has been a massive expansion of dental implant manufacturers that amount to over 500+ manufacturers globally across 30+ countries, well over a 3850+ Brands/Models, and 8800+ interfaces/diameters. Long-term studies indicate dental implant success rates are above 97%. However, problems do arise in 10% of the implant cases ranging from loosening or fracturing of an implant screw or abutment. The dental implant travels with the patient wherever they go; but without the dental professional. In our many decades of experience within the implant industry, we continue to witness the confusion and frustration when it comes to resolving these type of implant complications, which require the proper identification of the implant brands in a patient’s mouth.&nbsp;</p>
                      </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-12 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="50" data-aos-duration="1000">
                        <div class="about_sec_last_text">
                            <!--aboutus_last_content-->
                              <p style="margin-top: 18%;">Many people can identify the designer brand of clothing they are wearing, the make and model of their car, and what version of smartphone they carry with them at all times.&nbsp; All of those items are temporary. However, a dental implant is likely to remain in a patients mouth their entire life; and most patients leave a dental office with no permanent documentation of which brand of dental implant was placed.</p>
<p class="fs-3"><span class="id2-text">id2</span> takes a <strong>PROACTIVE</strong> approach by requiring all dental professionals, laboratories, and patients to register all pertinent implant information used that will forever be accessible on the secure <span class="id2-text">id2</span> dental implant registry portal.</p>
<p style="text-align: center; " class="fs-1"><strong>Don’t Agonize. Recognize.</strong></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('js-script'); ?>
<script src="<?php echo e(asset('public/theme/default/js/cart.js?v=1.1')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('theme.myweb.website', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/betarwreality/public_html/resources/views/theme/myweb/about-us.blade.php ENDPATH**/ ?>