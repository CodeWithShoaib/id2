<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name='copyright' content=''>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title Tag  -->
    <title>{{ isset($seo_title) ? $seo_title : get_option('site_title', config('app.name')) }}</title>

    <meta name="keywords" content="{{ isset($meta_keywords) ? $meta_keywords : get_option('meta_keywords') }}" />
    <meta name="description"
        content="{{ isset($meta_description) ? $meta_description : get_option('meta_description') }}" />
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ get_favicon() }}">

    <!-- Web Font -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="{{ asset('public/theme/myweb/css/slick.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('public/theme/myweb/css/slick-theme.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('public/theme/myweb/css/aos.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/theme/myweb/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/theme/myweb/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src='https://code.jquery.com/jquery-3.7.0.min.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"
        integrity="sha512-A7AYk1fGKX6S2SsHywmPkrnzTZHrgiVT7GcQkLGDe2ev0aWb8zejytzS8wjo7PGEXKqJOrjQ4oORtnimIRZBtw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!--<script src="chrome-extension://njgehaondchbmjmajphnhlojfnbfokng/js/contentScripts/dom.js"></script>-->


    
    <script type="text/javascript">
        var _url = "{{ url('') }}";
    </script>
    <style type="text/css">
        @font-face {
            font-weight: 400;
            font-style: normal;
            font-family: circular;
            src: url('chrome-extension://liecbddmkiiihnedobmlmillhodjkdmb/fonts/CircularXXWeb-Book.woff2') format('woff2');
        }

        @font-face {
            font-weight: 700;
            font-style: normal;
            font-family: circular;

            src: url('chrome-extension://liecbddmkiiihnedobmlmillhodjkdmb/fonts/CircularXXWeb-Bold.woff2') format('woff2');
        }
    </style>
    
</head>

<body>
    <style type="text/css">
        @font-face {
            font-weight: 400;
            font-style: normal;
            font-family: circular;

            src: url('chrome-extension://liecbddmkiiihnedobmlmillhodjkdmb/fonts/CircularXXWeb-Book.woff2') format('woff2');
        }

        @font-face {
            font-weight: 700;
            font-style: normal;
            font-family: circular;

            src: url('chrome-extension://liecbddmkiiihnedobmlmillhodjkdmb/fonts/CircularXXWeb-Bold.woff2') format('woff2');
        }

        .alert.alert-success.rounded-0 {
            background: black;
            position: fixed;
            right: 7px;
            z-index: 999;
            bottom: 0;
            display: flex;
            gap: 7px;
            align-items: center;
        }

        a.close {
            color: #fff;
            font-size: 27px;
            text-decoration: none;
        }

        footer {
            background: linear-gradient(#0000006e, #0000006e), url({{ asset('public/theme/myweb/images/footer-bg-1.jpg') }}) center center/cover no-repeat;
            padding-top: 65px;
            color: var(--white);
        }
    </style>

    @if (Auth::check())
        @php
            $doctor = App\SlotsData::where('user_id', Auth::user()->id)->first();
            $common_user = App\DoctorRegisterPortal::where('user_id', Auth::user()->id)
                ->where('status', 'patient')
                ->get();
        @endphp
    @endif

    @if (\Session::has('success'))
        <div class="alert alert-success rounded-0">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <p class="text-center m-0 text-white">{{ session('success') }}</p>
        </div>
    @endif
    @if (\Session::has('error'))
        <div class="alert alert-success rounded-0">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <p class="text-center m-0 text-white">{{ session('error') }}</p>
        </div>
    @endif

    <!-- Header -->
    <header data-aos="fade-down" data-aos-duration="1000">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-lg ">
                        <div class="container-fluid">
                           <div class="nav-icons">
                           <a class="navbar-brand" href="{{ url('/') }}"><img class="img-fluid"
                                    src="{{ asset('public/theme/myweb/images/id2-header-logo.png') }}" alt="logo"></a>
                             <div class="icons">
                                    @if (Auth::check())
                                        <a href="{{ url('sign_out') }}" class="btn btn-secondary mobileSignbtn">Log Out</a>
                                    @else
                                        <a href="{{ url('signup') }}" class="btn btn-secondary mobileSignbtn">
                                            Sign-in / Sign-up
                                        </a>
                                    @endif
                                    <div class="nav-item search-icon">
                                        <i class="fa-solid fa-magnifying-glass"></i>
                                    </div>
                                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                                </button>
                            </div>
                           
                           </div>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav mb-2 mb-lg-0">
                                    <li class="nav-item">
                                        <a class="nav-link {{ request()->is('/') ? 'active' : '' }}"
                                            aria-current="page" href="{{ url('/') }}">Home</a>
                                    </li>
                                 
                                    <li class="nav-item">
                                    <div class="dropdown">
                                        <button class="nav-link dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Info
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li> <a class="dropdown-item {{ request()->is('about') ? 'active' : '' }}"
                                                href="{{ route('about') }}">About Us</a></li>
                                            <li> <a class="dropdown-item "
                                                href="{{ route('benefits') }}">Why Partner</a></li>
                                        
                                        </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link {{ request()->is('faq') ? 'active' : '' }}"
                                            href="{{ route('faqs') }}">FAQs</a>
                                    </li>
                                    @if (Auth::check() && Auth::user()->user_status == 'Dental_Specialist')
                                        <li class="nav-item">
                                            <a class="nav-link {{ request()->is('pricing') ? 'active' : '' }}"
                                                href="{{ route('pricing') }}">pricing</a>
                                        </li>
                                    @endif
                                    @if (!Auth::check())
                                        <li class="nav-item">
                                            <a class="nav-link {{ request()->is('pricing') ? 'active' : '' }}"
                                                href="{{ route('pricing') }}">pricing</a>
                                        </li>
                                    @endif

                                    <li class="nav-item">
                                        <a class="nav-link {{ request()->is('testimonials') ? 'active' : '' }}"
                                            href="{{ route('testimonials') }}">testimonials</a>
                                    </li>
                                 

                                    <li class="nav-item">
                                        <a class="nav-link {{ request()->is('contact') ? 'active' : '' }}"
                                            href="{{ route('contact') }}">contact us</a>
                                    </li>
                                    @if (Auth::check())
                                        @if ($doctor && Auth::user()->user_status == 'Dental_Specialist')
                                            <li class="nav-item">
                                                <a class="nav-link {{ request()->is('doctor_register_portal') ? 'active' : '' }}"
                                                    href="{{ url('doctor_register_portal') }}">Doctor
                                                    Dashboard</a>
                                            </li>
                                        @endif
                                    @endif
                                    @if (Auth::check())
                                        @if (Auth::user()->user_status == 'patient')
                                            <li class="nav-item">
                                                <a class="nav-link {{ request()->is('doctor_register_portal') ? 'active' : '' }}"
                                                    href="{{ url('doctor_register_portal') }}">Patient
                                                    Dashboard</a>
                                            </li>
                                        @endif
                                    @endif
                                    <li class="nav-item search-icon MB-NONE">
                                        <i class="fa-solid fa-magnifying-glass "></i>
                                    </li>
                                    @if (Auth::check())
                                        <a href="{{ url('sign_out') }}" class="btn btn-secondary MB-NONE">Log Out</a>
                                    @else
                                        <a href="{{ url('signup') }}" class="btn btn-secondary MB-NONE">
                                            Sign-in / Sign-up
                                        </a>
                                    @endif
                                </ul>
                                <div class="search-bar">
                                    <div class="input-group">
                                        <input type="search" name="" id="" placeholder="Search">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!--/ End Header -->

    @yield('content')



    <!-- Start Footer Area -->
    <footer>
        <div class="container">
            <div class="sec-newsletter" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12 text-center">
                        <div class="content">
                            <h3>THE OFFICIAL DENTAL IMPLANT REGISTRY<small>™</small></h3>
                            <!--<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.-->
                            <!--    Lorem, ipsum dolor sit amet consectetur adipisicing elit.-->
                            <!--</p>-->
                        </div>
                    </div>
                    <!--<div class="col-lg-6 col-md-12 col-12">-->
                    <!--    <form action="" class="newsletter-form">-->
                    <!--        <div class="input-group">-->
                    <!--            <input type="email" placeholder="Enter your email ...">-->
                    <!--            <a href="#"><img class="send-icon"-->
                    <!--                    src="{{ asset('public/theme/myweb/images/send-icon.png') }}" alt="image">-->
                    <!--            </a>-->
                    <!--        </div>-->
                    <!--    </form>-->
                    <!--</div>-->
                </div>
            </div>
            <div class="top-footer">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="" data-aos="slide-right" data-aos-delay="50" data-aos-duration="1000">
                            <a href="" class="logo navbar-brand"> <img
                                    src="{{ asset('public/theme/myweb/images/logo.png') }}" alt="image"
                                    class='img-fluid'></a>
                        <div  class="call-now">
                            Call Us Today <br>
                            <a href="#">
                                877-313-2345
                            </a>
                            <a class="email" href="mailto:Info@id2dental.com"> Info@id2dental.com </a>   
                        </div>
                            <!-- <div  class="call-now">
                        </div> -->
 
                           
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="links-content" data-aos="zoom-in" data-aos-delay="50" data-aos-duration="1000">
                            <h4>Links</h4>
                            <ul>
                                <li>
                                    <a  href="{{ url('about') }}">About Us</a>
                                </li>
                                <li>
                                     <a href="{{ route('benefits') }}">Why Partner</a>
                                </li>
                                <li>
                                    <a href="{{ url('faq') }}">FAQs</a>
                                </li>
                                    <li>
                                        <a href="{{ url('pricing') }}">Pricing</a>
                                    </li>
                                <li>
                                    <a href="{{ url('testimonials') }}">Testimonial</a>
                                </li>
                             
                                <li>
                                    <a href="{{ url('contact') }}">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="links-content" data-aos="zoom-in" data-aos-delay="50" data-aos-duration="1000">
                            <h4>quick links</h4>
                            <ul>
                              
                                <li>
                                    <a href="{{ url('termsandcondition') }}">Terms & Conditions</a>
                                </li>
                                <li>
                                    <a href="{{ url('privacypolicy') }}">Privacy Policy</a>
                                </li>
                                <li>
                                    <a href="javaScript:void(0)">Education</a>
                                </li>
                                <!--<li>-->
                                <!--    <a href="#">Lorem ipsum</a>-->
                                <!--</li>-->
                                <!--<li>-->
                                <!--    <a href="#">Lorem ipsum</a>-->
                                <!--</li>-->
                            </ul>
                        </div>
                    </div>
                    <div class="col-12">
                    <ul class="social-links">
                                <li>
                                    <a href="{{ get_option('facebook_link') }}" target="blank"><i class="fa-brands fa-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a href="{{ get_option('twitter_link') }}" target="blank"><i class="fa-brands fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="{{ get_option('instagram_link') }}" target="blank"><i class="fa-brands fa-instagram"></i></a>
                                </li>
                                <li>
                                    <a href="{{ get_option('youtube_link') }}" target="blank"><i class="fa-brands fa-youtube"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/id2Dental" target="blank"><i class="fa-brands fa-linkedin-in"></i></a>
                                </li>

                            </ul>
                    </div>
                  

                </div>
            </div>
            <div class="btm-footer">
                <p>Copyright © 2023 <span class="id2-text" >id2</span> . All Rights Reserved</p>
                <!--<p><a href="privacy-policy.html">Privacy Policy</a>,<a href="terms-and-condition.html">Terms &-->
                <!--        Conditions</a></p>-->
            </div>
        </div>
    </footer>
    <script>
        AOS.init();
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
    <script>
        $(function() {
            var $form = $(".require-validation");
            $('form.require-validation').bind('submit', function(e) {
                var $form = $(".require-validation"),
                    inputSelector = ['input[type=email]', 'input[type=password]',
                        'input[type=text]', 'input[type=file]',
                        'textarea'
                    ].join(', '),
                    $inputs = $form.find('.required').find(inputSelector),
                    $errorMessage = $form.find('div.error'),
                    valid = true;
                $errorMessage.addClass('hide');
                $('.has-error').removeClass('has-error');
                $inputs.each(function(i, el) {
                    var $input = $(el);
                    if ($input.val() === '') {
                        $input.parent().addClass('has-error');
                        $errorMessage.removeClass('hide');
                        e.preventDefault();
                    }
                });
                if (!$form.data('cc-on-file')) {
                    e.preventDefault();
                    Stripe.setPublishableKey($form.data('stripe-publishable-key'));
                    Stripe.createToken({
                        number: $('.card-number').val(),
                        cvc: $('.card-cvc').val(),
                        exp_month: $('.card-expiry-month').val(),
                        exp_year: $('.card-expiry-year').val()
                    }, stripeResponseHandler);
                }

            });

            function stripeResponseHandler(status, response) {
                if (response.error) {
                    $('.error')
                        .removeClass('hide')
                        .find('.alert')
                        .text(response.error.message);
                } else {
                    /* token contains id, last4, and card type */
                    var token = response['id'];

                    $form.find('input[type=text]').empty();
                    $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
                    $form.get(0).submit();
                }
            }
        });
    </script>

    <!-- /End Footer Area -->
    <script src="{{ asset('public/theme/myweb/js/jquery.js') }}"></script>
    <script src="{{ asset('public/theme/myweb/js/slick.js') }}"></script>
    <script src="{{ asset('public/theme/myweb/js/bootstrap.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.js" integrity="sha512-WNZwVebQjhSxEzwbettGuQgWxbpYdoLf7mH+25A7sfQbbxKeS5SQ9QBf97zOY4nOlwtksgDA/czSTmfj4DUEiQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('public/theme/myweb/js/main.js') }}"></script>
    <!-- Jquery -->
    <script src="{{ asset('public/theme/default/js/jquery.min.js') }}"></script>
    <script src="{{ asset('public/theme/default/js/jquery-migrate-3.0.0.js') }}"></script>
    <script src="{{ asset('public/theme/default/js/jquery-ui.min.js') }}"></script>
    <!-- Popper JS -->
    <script src="{{ asset('public/theme/default/js/popper.min.js') }}"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('public/theme/default/js/bootstrap.min.js') }}"></script>
    <!-- Slicknav JS -->
    <script src="{{ asset('public/theme/default/js/slicknav.min.js') }}"></script>
    <!-- Owl Carousel JS -->
    <script src="{{ asset('public/theme/default/js/owl-carousel.js') }}"></script>
    <!-- Magnific Popup JS -->
    <script src="{{ asset('public/theme/default/js/magnific-popup.js') }}"></script>
    <!-- Waypoints JS -->
    <script src="{{ asset('public/theme/default/js/waypoints.min.js') }}"></script>
    <!-- Countdown JS -->
    <script src="{{ asset('public/theme/default/js/finalcountdown.min.js') }}"></script>
    <!-- Nice Select JS -->
    <script src="{{ asset('public/theme/default/js/nicesellect.js') }}"></script>
    <!-- Flex Slider JS -->
    <script src="{{ asset('public/theme/default/js/flex-slider.js') }}"></script>
    <!-- ScrollUp JS -->
    <script src="{{ asset('public/theme/default/js/scrollup.js') }}"></script>
    <!-- Onepage Nav JS -->
    <script src="{{ asset('public/theme/default/js/onepage-nav.min.js') }}"></script>
    <!-- Easing JS -->
    <script src="{{ asset('public/theme/default/js/easing.js') }}"></script>
    <script src="{{ asset('public/backend/plugins/jquery-toast-plugin/jquery.toast.min.js') }}"></script>
    <script src="{{ asset('public/theme/default/js/typeahead.bundle.js') }}"></script>
    <script src="{{ asset('public/backend/assets/js/print.js') }}"></script>
    <!-- Active JS -->
    <script src="{{ asset('public/theme/default/js/active.js?v=1.2') }}"></script>
    <!-- Custom JS -->
</body>
</html>
