<?php $__env->startSection('content'); ?>
    <?php
        $data = get_trans_option('counter_number');
        $count = intval($data);
    ?>
    <style>
        .sec-about {
            background: none !important;
            padding: 0 !important;
        }

        .sec-service {
            position: relative;
            padding: 70px 0;
        }

        .services-bg {
            position: absolute;
            top: 0;
            height: 941px;
        }

        .services-bg-img {
            height: 100%;
        }

        .moretext {
            display: none;
        }



        .sec-service-bg {
            background: linear-gradient(to right, #00000063, #0000003b), url(<?php echo e(asset('public/theme/myweb/images/sergury-bg.jpg')); ?>) center center/cover no-repeat;
            padding: 100px 0px 100px 0;
            color: var(--white);
        }

        .sec-sergury-bg {
            /* background: linear-gradient(to right, #000000c4, #000000b3), url(<?php echo e(get_option('back_sergury') != '' ? asset('public/uploads/media/' . get_option('back_sergury')) : ''); ?>) center center/cover no-repeat; */
            /* text-align: center; */
            /* color: var(--white); */
            /* padding-top: 100px; */
            /* height: 670px; */
        }

        .sec-testimonial {
            background: url(<?php echo e(get_option('back_testimonial') != '' ? asset('public/uploads/media/' . get_option('back_testimonial')) : ''); ?>) center center/cover no-repeat;
            padding: 100px 0;
            position: relative;
            z-index: 1;
        }

        .sec-form-bg {
            background: url(<?php echo e(get_option('contact_back_img') != '' ? asset('public/uploads/media/' . get_option('contact_back_img')) : ''); ?>) center center/cover no-repeat;
            padding-bottom: 68px;
            position: relative;
        }

        footer {
            background: linear-gradient(#0000006e, #0000006e), url(<?php echo e(asset('public/theme/myweb/images/footer-bg-1.jpg')); ?>) center center/cover no-repeat;
            padding-top: 65px;
            color: var(--white);
        }

        .sec-hero {
            background: linear-gradient(#00000054, #00000073), url(<?php echo e(asset('public/uploads/media/file_64adca43ad735.jpg')); ?>) center center/cover no-repeat;
            position: relative;
            height: 900px;
        }

        section.sec-service-bg h3 {
            font-size: 20px;
        }
    </style>
    <main>
        <?php
            $manufacture_data = App\Manufacturer::all();
            $diameter = App\Diameter::all();
            $brand = App\Brand::all();
            session(['manufacture_data' => $manufacture_data, 'diameter' => $diameter, 'brand' => $brand]);
        ?>
        <section class="sec-hero">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-7  col-12">
                        <div class="content">
                            <!--banner_first_heading-->
                            <h3 data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                                NO IMPLANT RESTORATION IS COMPLETE WITHOUT REGISTERING WITH <span class="id2-text"
                                    style="color:#00b0f0">id2</span>™</h3>
                            <!--banner_second_heading-->
                            <!--<h6 data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">-->
                            <!--    The Official Dental Implant Registry&reg;</h6>-->

                            <p data-aos="fade-up" data-aos-duration="2000" data-aos-delay="200">
                            THE OFFICIAL DENTAL IMPLANT REGISTRY™
                            </p>

                            <div class="btns" data-aos="fade-up" data-aos-duration="2500" data-aos-delay="200">
                                <?php if(!Auth::check()): ?>
                                    <a href="<?php echo e(url('signup')); ?>" class="btn btn-primary">Register</a>
                                <?php else: ?>
                                <?php endif; ?>
                                <a href="<?php echo e(url('about')); ?>" class="btn btn-primary">learn more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5 col-12">
                        <div class="images">
                            <img class="img-fluid" src="<?php echo e(asset('public/theme/myweb/images/iphone.png')); ?>" alt="">
                            <img class="img-fluid" src="<?php echo e(asset('public/theme/myweb/images/iphone4.png')); ?>"
                                alt="">
                        </div>


                    </div>
                    <!--<div class="col-12">-->
                    <!--first_banner_img-->
                    <!--<img data-aos="slide-right" data-aos-duration="1000" data-aos-delay="100"-->
                    <!--    class="img-fluid banner-img"-->
                    <!--    src="<?php echo e(get_option('banner_img') != '' ? asset('public/uploads/media/' . get_option('banner_img')) : ''); ?>"-->
                    <!--    alt="image">-->
                    <!--side_content-->
                    <!--<p><a href="#" class="link-site">www.id2.com</a></p>-->
                    <!--<a href="#aboutSec" id="scroll-down" data-aos="fade-up" data-aos-duration="1000"-->
                    <!--    data-aos-delay="200">-->
                    <!--    <p class="scroll-down-arrow">>></p>-->
                    <!--    <p class="scroll-down-text">Scroll <br> Down</p>-->
                    <!--</a>-->
                    <!--</div>-->
                </div>
            </div>
        </section>
        <section class="sec-service prevention">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="content_3">
                            <!-- <h2>PREVENTION</h2> -->
                            <h4 class="prevention-heading">“An ounce of prevention is worth a pound of cure.” <br> - Benjamin Franklin</h4>
                        </div>
                    </div>
                  
                    <div class="col-12">
                        <div class="circle-teeth-img-p">
                            <img src="<?php echo e(asset('public/theme/myweb/images/teeth-in-circle.png')); ?>" alt=""
                                class="img-fluid">
                        </div>

                    </div>
                    <div class="col-12">
                        <div class="content">

                            <p class="text-center">
                                Since prevention is part of our everyday lives, shouldn’t prevention apply to implant
                                dentistry? <br> <b> By registering through id2’s patient portal,</b></p>

                            <h4> Dentists can prevent:</h4>
                           <div class="row">
                            <div class="col-lg-6 mx-auto">
                            <ul>
                                <li>Losing patient to other dentist due to the inability to quickly solve and treat
                                    the problem
                                </li>
                                <li>Wasting countless hours or days trying to solve what brand a
                                    particular implant is from an x-ray
                                </li>
                                
                                    <li>Spending money on implant components that may not be compatible
                                    </li>
                                    <div class="moretext">
                                    <li>Appearing ill-equipped to your patient in this confusing
                                        implant market.
                                    </li>
                                    <li>
                                        Misplacing a patient’s implant data or disposal of
                                        files 

                                    </li>
                                    <li>Incurring costs to 3rd party companies for identifications that might not be 100%
                                        accurate.
                                    </li>
                                </div>
                                <a class="moreless-button btn btn-primary" href="JavaScript:void(0);">Read more</a>
    </ul>
                            </div>
                           </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mx-auto">
                    <div class="text-center mt-lg-5 ">
                        <h5 class="mb-lg-5 mb-2">“True prevention is not waiting for bad things to happen, it’s preventing
                            things from happening in the first place.” <br>
                            - Don McPherson
                        </h5>

                        <a href="<?php echo e(url('signup')); ?>" class="btn btn-primary">Sign-in / Sign-Up</a>

                    </div>
                </div>
            </div>
            </div>
        </section>
        <section class="sec-about" id="aboutSec">
            <div class="container">
                <div class="row" style="position: relative; overflow: hidden;">
                    <!--<div class="col-lg-8 col-md-6 col-12">-->
                    <!--	<div class="content"> <img data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="100" class="about-img aos-init aos-animate" src="<?php echo e(get_option('about_img') != '' ? asset('public/uploads/media/' . get_option('about_img')) : ''); ?>" alt="">-->
                    <!--		<h3 data-aos="slide-right" data-aos-delay="50" data-aos-duration="1000" class="aos-init aos-animate">About-->
                    <!--                <span class="secondary-color">Us</span></h3>-->
                    <!--		<h5 data-aos="slide-right" data-aos-delay="50" data-aos-duration="1000" class="aos-init aos-animate"><span class="secondary-color">-->
                    <!--              <span class="id2-text">id2</span>™</span> The Official <br> Dental Implant Registry™</h5>-->
                    <!--		<div class="count-down" style="margin-top: 29px;" data-aos="fade-up" data-aos-duration="1400"-->
                    <!--                              data-aos-delay="200">-->
                    <!--                              <p></p><span>+</span>-->
                    <!--                          </div>-->
                    <!--		<h5 data-aos="slide-right" data-aos-delay="50" data-aos-duration="1000" class="aos-init aos-animate">Years of Experience</h5>-->
                    <!--		<p class="para-1 aos-init aos-animate" data-aos="slide-right" data-aos-delay="50" data-aos-duration="1000">Implant dentistry has come a long way since the early designs and technology of implants from the early 1980s.</p>-->
                    <!--	</div>-->
                    <!--</div>-->
                    <!--<div class="col-lg-4 col-md-6 col-12">-->
                    <!--	<div class="content_2">-->
                    <!--	<div class="d-flex align-items-start">-->
                    <!--          <div class="dent-icon aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100"> <img class="img-fluid" src="<?php echo e(asset('public/theme/myweb/images/tooth.png')); ?>" alt=""> </div>-->
                    <!--		<h6 data-aos="slide-left" data-aos-delay="50" data-aos-duration="1000" class="aos-init aos-animate">Patient Centric / Implant Agnostic  </h6>-->
                    <!--          </div>-->
                    <!--		<p data-aos="slide-left" data-aos-delay="50" data-aos-duration="1000" class="aos-init aos-animate"><span class="id2-text">id2</span> takes a PROACTIVE approach by requiring all dental professionals, laboratories, and patients to register all pertinent implant information used that will forever be accessible on the secure <span class="id2-text">id2</span> dental implant registry portal.  </p>-->
                    <!--		 <a href="<?php echo e(url('about')); ?>" data-aos="slide-left" data-aos-delay="50" data-aos-duration="1000" class="btn btn-primary aos-init aos-animate">read more</a> </div>-->
                    <!--</div>-->
                </div>
            </div>
            <div class="sec-service">
                <!-- <div class="services-bg">
                                <img class="img-fluid services-bg-img" src="<?php echo e(asset('public/theme/myweb/images/yendex1.png')); ?>" alt="">
                            </div> -->
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="content_3">
                                <h2>Our Process</h2>
                            </div>
                        </div>
                        <div class="slider-services row">
                            <div class="col-lg-4 col-md-6 col-12">
                                <a href="javaScript:void(0)" style="text-decoration: none;">
                                    <div class="card card-service" data-aos="flip-left" data-aos-duration="1000"
                                        data-aos-delay="100">
                                        <div class="card-img-top">
                                            <div class="shap-img shap-img-1">
                                                <h4>Register Your Dental Implant</h4>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <p>Your implant information can be safely
                                                and securely registered to
                                                later be accessed by you and your dental professional anytime and anywhere
                                                you
                                                happen to be.</p>
                                            <!-- <div class="links">
                                            <a href="#" class="">read more</a>
                                            <a href="#" class="btn btn-primary ">+</a>
                                        </div> -->
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <a href="javaScript:void(0)" style="text-decoration: none;">
                                    <div class="card card-service" data-aos="flip-right" data-aos-duration="1000"
                                        data-aos-delay="100">
                                        <div class="card-img-top">
                                            <div class="shap-img shap-img-2">
                                                <h4>Your Global Dental Implant Passport</h4>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <p>Implants always travel with you, but Your dentist does not. Why not carry
                                                your own Printable or Digital Implant information</p>
                                            <!-- <div class="links">
                                            <a href="javaScript:void(0)" class="">read more</a>
                                            <a href="#" class="btn btn-primary">+</a>
                                        </div> -->
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <a href="javaScript:void(0)" style="text-decoration: none;">
                                    <div class="card card-service" data-aos="flip-left" data-aos-duration="1000"
                                        data-aos-delay="100">
                                        <div class="card-img-top">
                                            <div class="shap-img shap-img-3">
                                                <h4>Secure Data System</h4>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <p>Information is securely stored and encrypted on a HIPAA compliant network.
                                            </p>
                                            <!-- <div class="links">
                                            <a href="#" class="">read more</a>
                                            <a href="#" class="btn btn-primary ">+</a>
                                        </div> -->
                                        </div>
                                    </div>
                                </a>
                            </div>


                            <!-- <a href="https://betarwreality.com/signup" style="text-decoration: none;">
                                <div class="card card-service" data-aos="flip-right" data-aos-duration="1000"
                                    data-aos-delay="100">
                                    <div class="card-img-top">
                                        <div class="shap-img shap-img-4">
                                            <h4>Create a Surgical Report</h4>
                                        </div>
                                        <img src="./images/dent-tool-1.png" class="dent-tool" alt="...">
                                    </div>
                                    <div class="card-body">
                                        <p >After registering your implant online,
                                            your dental professional
                                            should provide you with a comprehensive surgical report along with a scannable card
                                            to gain access to your patient portal.</p>
                                        <div class="links">
                                            <a href="#" class="">read more</a>
                                            <a href="#" class="btn btn-primary ">+</a>
                                        </div>
                                    </div>
                                </div>
                                </a> -->
                        </div>
                        <!--<div class="col-12">-->
                        <!--    <div class="btn-secondary-p">-->
                        <!--        <a data-aos="fade-up" data-aos-duration="1500" data-aos-delay="200" href="services.html"-->
                        <!--            class="btn btn-secondary">view all services</a>-->
                        <!--    </div>-->
                        <!--</div>-->
                    </div>
                </div>
            </div>
        </section>
        <section class="sec-service-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="content">
                            <!-- <h5 >Why partner with id2?</h5> -->
                            <!-- <h2 >DENTAL <span>IMPLANT <br> SOLUTIONS</span></h2> -->
                            <h2><span>Why </span>Partner <br> <span> with </span><span
                                    class="id2-text secondary-color">id2</span><span><small><sup>™</sup></small></span>?</h2>
                            <h3>Patient Centric
                                <img class="img-fluid"
                                    src="<?php echo e(('public/theme/myweb/images//tooth.png')); ?>" alt="image">
                                Implant Agnostic
                            </h3>
                            <p><b>No monthly/annual subscription fees </b></p>
                            <p><span class="id2-text">id2</span> prides itself on being an open partner with all dental
                                implant companies.</p>
                            <p>Empowering patients with the information needed to help a dentist treat implant complications
                                ANYWHERE in the world.</p>
                            <a href="<?php echo e(route('benefits')); ?>" class="btn btn-primary">read more</a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="mb-images">
                            <!--<img data-aos="slide-left" data-aos-duration="1000" data-aos-delay="200"-->
                            <!--    class="img-fluid aos-init aos-animate"-->
                            <!--    src="<?php echo e(asset('public/theme/myweb/images/firstmobile.png')); ?>" alt="">-->
                            <img data-aos="slide-left" data-aos-duration="1000" data-aos-delay="200"
                                class="img-fluid aos-init aos-animate"
                                src="<?php echo e(asset('public/theme/myweb/images/secondmobile.png')); ?>" alt="">
                            <img data-aos="slide-left" data-aos-duration="1000" data-aos-delay="200"
                                class="img-fluid aos-init aos-animate"
                                src="<?php echo e(asset('public/theme/myweb/images/thirdmobile.png')); ?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="sec-quick-resolution">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="content_3">
                            <!-- <h5><span class="id2-text">id2</span> Dental Industry</h5> -->
                            <img class="img-fluid logo" src="<?php echo e(asset('public/theme/myweb/images/logo-dark.png')); ?>"
                                alt="logo">
                            <h2>We’ve got you covered for a quick resolution</h2>
                            <!--<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cumque <br>Lorem, ipsum dolor sit-->
                            <!--    amet-->
                            <!--    consectetur </p>-->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="card card-resolution aos-init" data-aos="flip-left" data-aos-duration="1000"
                                data-aos-delay="100">
                                <div class="card-img-top">
                                    <img src="<?php echo e(asset('public/theme/myweb/images/resolution-img-1.png')); ?>"
                                        class="img-fluid" alt="...">
                                </div>
                                <div class="card-body">
                                    <p class="card-text">By not knowing the brand and size of implant it will cost you
                                        wasted time, money, delayed resolution, and discomfort to the patient.</p>
                                    <a href="<?php echo e(url('signup')); ?>" class="btn btn-primary">Implant
                                        Complications?</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="card card-resolution aos-init" data-aos="flip-left" data-aos-duration="1000"
                                data-aos-delay="100">
                                <div class="card-img-top">
                                    <img src="<?php echo e(asset('public/theme/myweb/images/resolution-img-2.png')); ?>"
                                        class="img-fluid" alt="...">
                                </div>
                                <div class="card-body">
                                    <p class="card-text">Being able to identify the brand and size specifics of a dental
                                        implant through the <span class="id2-text">id2</span> patient portal is
                                        instantaneous.</p>
                                    <a href="<?php echo e(url('signup')); ?>" class="btn btn-primary">Share Your
                                        Registry</a>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="card card-resolution aos-init" data-aos="flip-left" data-aos-duration="1000"
                                data-aos-delay="100">
                                <div class="card-img-top">
                                    <img src="<?php echo e(asset('public/theme/myweb/images/resolution-img-3.png')); ?>"
                                        class="img-fluid" alt="...">
                                </div>
                                <div class="card-body">
                                    <p class="card-text">Precise identification of a patient’s implant ensures proper
                                        instrumentation and components are ordered to efficiently treat the complication.
                                    </p>
                                    <a href="<?php echo e(url('signup')); ?>" class="btn btn-primary">Repair the
                                        Complication </a>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="card card-resolution aos-init" data-aos="flip-left" data-aos-duration="1000"
                                data-aos-delay="100">
                                <div class="card-img-top">
                                    <img src="<?php echo e(asset('public/theme/myweb/images/resolution-img-4.png')); ?>"
                                        class="img-fluid" alt="...">
                                </div>
                                <div class="card-body">
                                    <p class="card-text">A quick resolution lets a patient get back to enjoying life!
                                    </p>
                                    <a href="<?php echo e(url('signup')); ?>" class="btn btn-primary">Savor your
                                        moments</a>
                                </div>
                            </div>

                        </div>
                    </div>


                </div>
            </div>
        </div>
        <!--<section class="sec-testimonial">-->
        <!--  <div class="container">-->
        <!--    <div class="row" >-->
        <!--      <div class="col-12"  style="position: relative; overflow-x: hidden;">-->
        <!--        <div class="content">-->
        <!--testimonial_content-->

        <!--<h5 data-aos="slide-right" data-aos-duration="1000" data-aos-delay="200">Testimonials</h5>-->
        <!--<h2 data-aos="slide-left" data-aos-duration="1000" data-aos-delay="200">What <div class='out_client'>our client</div> say’s</h2>-->
        <!--<p data-aos="slide-right" data-aos-duration="1000" data-aos-delay="200">Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque quod id, quae vero velit laborum quos-->
        <!--  praesentium ullam odit-->

        <!--</p>-->
        <!--          <?php echo get_trans_option('testimonial_content'); ?>-->

        <!--        </div>-->
        <!--      </div>-->
        <!--      <div class="testimonial-slider">-->
        <!--        <div class="card card-testimonail">-->
        <!--          <img src="<?php echo e(asset('public/theme/myweb//images/client-img-1.png')); ?>" class="client-img" alt="...">-->
        <!--          <div class="card-body">-->
        <!--            <h5 class="card-title">Lorem Ipsum</h5>-->
        <!--            <p class="card-text-sm">Doloremque</p>-->
        <!--            <img class="stars" src="<?php echo e(asset('public/theme/myweb/images/stars.png')); ?>" alt="image">-->
        <!--            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus esse a dolores.-->
        <!--            </p>-->
        <!--          </div>-->
        <!--        </div>-->
        <!--        <div class="card card-testimonail">-->
        <!--          <img src="<?php echo e(asset('public/theme/myweb//images/client-img-1.png')); ?>" class="client-img" alt="...">-->
        <!--          <div class="card-body">-->
        <!--            <h5 class="card-title">Lorem Ipsum</h5>-->
        <!--            <p class="card-text-sm">Doloremque</p>-->
        <!--            <img class="stars" src="<?php echo e(asset('public/theme/myweb/images/stars.png')); ?>" alt="image">-->
        <!--            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus esse a dolores.-->
        <!--            </p>-->
        <!--          </div>-->
        <!--        </div>-->
        <!--        <div class="card card-testimonail">-->
        <!--          <img src="<?php echo e(asset('public/theme/myweb//images/client-img-1.png')); ?>" class="client-img" alt="...">-->
        <!--          <div class="card-body">-->
        <!--            <h5 class="card-title">Lorem Ipsum</h5>-->
        <!--            <p class="card-text-sm">Doloremque</p>-->
        <!--            <img class="stars" src="<?php echo e(asset('public/theme/myweb/images/stars.png')); ?>" alt="image">-->
        <!--            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus esse a dolores.-->
        <!--            </p>-->
        <!--          </div>-->
        <!--        </div>-->
        <!--        <div class="card card-testimonail">-->
        <!--          <img src="<?php echo e(asset('public/theme/myweb//images/client-img-1.png')); ?>" class="client-img" alt="...">-->
        <!--          <div class="card-body">-->
        <!--            <h5 class="card-title">Lorem Ipsum</h5>-->
        <!--            <p class="card-text-sm">Doloremque</p>-->
        <!--            <img class="stars" src="<?php echo e(asset('public/theme/myweb/images/stars.png')); ?>" alt="image">-->
        <!--            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus esse a dolores.-->
        <!--            </p>-->
        <!--          </div>-->
        <!--        </div>-->
        <!--      </div>-->

        <!--      <div class="col-12">-->
        <!--brand_img-->
        <!--        <img class="brands-img img-fluid" src="<?php echo e(get_option('brand_image') != '' ? asset('public/uploads/media/' . get_option('brand_image')) : ''); ?>" alt="image">-->
        <!--      </div>-->
        <!--    </div>-->
        <!--  </div>-->
        <!--</section>-->
        <!--<section class="sec-form-bg">-->
        <!--  <div class="container">-->
        <!--    <div class="row">-->
        <!--      <div class="col-lg-6 col-md-12 col-12"></div>-->
        <!--      <img class="img-fluid pngwing-img" src="<?php echo e(asset('public/theme/myweb/images/pngwing-img.png')); ?>" alt="" data-aos="slide-left" data-aos-duration="2000" data-aos-delay="300">-->
        <!--      <div class="col-lg-6 col-md-12 col-12" style="position: relative; overflow-x: hidden;">-->
        <!--        <div class="">-->
        <!--          <div class="content_2" data-aos="slide-right" data-aos-duration="1000" data-aos-delay="200">-->
        <!--get_in_touch_heading-->
        <!--            <h5><?php echo get_trans_option('get_in_touch_heading'); ?></h5>-->
        <!--contact_heading-->
        <!--            <h3><?php echo get_trans_option('contact_heading'); ?></h3>-->
        <!--          </div>-->
        <!--          <form action="" class="contact-form" data-aos="slide-left" data-aos-duration="1000" data-aos-delay="200">-->

        <!--            <div class="row">-->
        <!--              <div class="col-6">-->
        <!--                <label for="firstName">first Name</label>-->
        <!--                <div class="input-group">-->
        <!--                  <input type="text" class="form-control" id="firstName" name="firstName">-->
        <!--                </div>-->
        <!--              </div>-->
        <!--              <div class="col-6">-->
        <!--                <label for="lastName">last Name</label>-->
        <!--                <div class="input-group">-->
        <!--                  <input type="text" class="form-control" id="lastName" name="lastName">-->
        <!--                </div>-->
        <!--              </div>-->
        <!--              <div class="col-6">-->
        <!--                <label for="email">Email Address</label>-->
        <!--                <div class="input-group">-->
        <!--                  <input type="email" class="form-control" id="email" name="email">-->
        <!--                </div>-->
        <!--              </div>-->
        <!--              <div class="col-6">-->
        <!--                <label for="phoneNumber">phone Number</label>-->

        <!--                <div class="input-group">-->
        <!--                  <input type="number" class="form-control" id="phoneNumber" name="phoneNumber">-->
        <!--                </div>-->
        <!--              </div>-->
        <!--              <div class="col-12">-->
        <!--                <label for="Message">Message</label>-->
        <!--                <div class="input-group">-->
        <!--                  <textarea class="form-control" rows="5" cols="12" id="floatingTextarea"></textarea>-->
        <!--                </div>-->
        <!--              </div>-->
        <!--              <div class="col-12">-->
        <!--                <button type="submit" class="btn btn-secondray">Submit</button>-->
        <!--              </div>-->
        <!--            </div>-->
        <!--          </form>-->
        <!--        </div>-->
        <!--      </div>-->
        <!--    </div>-->
        <!--  </div>-->
        <!--</section>-->
        <!-- <section class="sec-sergury-bg">
          <div class="container">
            <div class="row" >
              <div class="col-12">
                <div class="content">
                  <h5 data-aos="slide-right" data-aos-duration="1000" data-aos-delay="200"><span class="secondary-color id2-text">id2</span>
                    Dental Industry</h5>
                  <h2 data-aos="slide-left" data-aos-duration="1000" data-aos-delay="200">Do You Know…?</h2>
          <ul>
            <li>
             There are 500+ dental implant manufacturers, 3850+ brands/models, and over 8800+ diameters
            </li>
            <li>
             Dental implants are being manufactured in over 30+ countries
            </li>
            <li>
             Most early implant systems are obsolete
            </li>
            <li>
             An average of 10% complication rate comprised of screw and abutment loosening/fractures occurs
            </li>
            <li>
             1 in 4 dental implant complications requires implant identifications by a 3rd party.
            </li>
            <li>
             On a monthly basis, 1000s of implant identifications are conducted by 3rd party.
            </li>
          </ul>
                
                 
                </div>
                </div>
               </div>
              
              </div>

            </div>
          </div>
        </section> -->'
        <section class="sec-sergury-bg">
            <div class="content text-center">
                <h2 data-aos="slide-left" data-aos-duration="1000" data-aos-delay="200">Did You Know…?</h2>
            </div>
            <img class="did-you-know-img img-fluid" src="<?php echo e(asset('public/theme/myweb/images/did-you-know.png')); ?>"
                alt="...">
        </section>
    </main>

    <script src='https://code.jquery.com/jquery-3.7.0.min.js'></script>
    <script>
        $('.moreless-button').click(function() {
            $('.moretext').slideToggle();
            if ($('.moreless-button').text() == "Read more") {
                $(this).text("Read less")
            } else {
                $(this).text("Read more")
            }
        });
    </script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js-script'); ?>
    <script src="<?php echo e(asset('public/theme/default/js/cart.js?v=1.1')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('theme.myweb.website', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/betarwreality/public_html/resources/views/theme/myweb/index.blade.php ENDPATH**/ ?>