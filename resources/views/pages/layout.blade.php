<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traffic Crime Management System</title>
    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}" type="image/x-icon">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- fontawesome css -->
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
    <!-- fontawesome css -->
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.min.css') }}">
    <!-- owl carousel css -->
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <!-- owl carousel theme css -->
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
    <!-- slicknav css -->
    <link rel="stylesheet" href="{{ asset('assets/css/slicknav.css') }}">
    <!-- animate css -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <!-- main css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- responsive css -->
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <!-- jquery js -->
    <script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
</head>



<body>
    <!--   header area start   -->
    <div class="header-area">

        <div class="support-nav-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <div class="logo-wrapper">
                            <div class="logo-wrapper-inner">
                                <a href="{{ url('/') }}"><img src="{{ asset('front-end/img/logo.png') }}"
                                        alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-6 position-lg-relative position-static">

                        <div class="navbar-area">
                            <div class="row">
                                <div class="col-lg-9 d-lg-block d-none">
                                    <nav class="main-menu" id="mainMenu">
                                        <ul>
                                            <li class="active">
                                                <a href="{{ url('/') }}">Home</a>
                                            </li>
                                            <li>
                                                <a href="#features">Punishments</a>
                                            </li>
                                            <li>
                                                <a href="#road-safety">Road Safety</a></a>
                                            </li>
                                            <li>
                                                <a href="#faq">FAQ's</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('login') }}">My Account</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--   header area end   -->


    <!--   search bar popup start   -->
    <div class="search-popup">
        <form class="search-form" action="#">
            <div class="form-element"><input type="text" placeholder="Type your search keyword"></div>
        </form>
        <div class="search-popup-overlay" id="searchOverlay"></div>
        <button class="search-close-btn" id="searchCloseBtn"><i class="fas fa-times"></i></button>
    </div>
    <!--   search bar popup end   -->


    <!--  hero area start  -->
    <div class="hero-area hero-bg">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-8">
                    <div class="hero-txt">
                        <span class="wow fadeInDown" data-wow-duration="1.5s">Road Traffic</span>
                        <h1 class="wow fadeInUp" data-wow-duration="1.5s">Learn To Drive Safely</h1>
                        <a class="wow fadeInUp boxed-btn" data-wow-duration="1.5s"
                            href="{{ route('login') }}"><span>UPLOAD MY LICENSE</span></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-overlay"></div>
    </div>
    <!--  hero area end  -->


    <!--  features section start  -->
    <div class="features-section">
        <div class="container">
            <div class="row feature-bg feature-content">
                <div class="col-lg-7 offset-lg-5 pr-0">
                    <div class="features" id="features">
                        <h2 class="subtitle">WHAT WE DO</h2>
                        <div class="feature-lists">
                            <div class="single-feature wow fadeInUp" data-wow-duration="1s">
                                <div class="icon-wrapper"><i class="flaticon-customer-service"></i></div>
                                <div class="feature-details">
                                    <h4>24/7 Operational Checkpoints</h4>
                                    <p>The police can give you a ‘fixed penalty notice’ for less serious traffic
                                        offences, including for:

                                        careless or inconsiderate driving
                                        using a mobile phone while driving
                                        not wearing a seat belt
                                        driving too close to another vehicle </p>
                                </div>
                            </div>
                            <div class="single-feature wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                                <div class="icon-wrapper"><i class="flaticon-email"></i></div>
                                <div class="feature-details">
                                    <h4>Points Deduction</h4>
                                    <p>You can be fined up to 100 points and get penalty points on your licence if you
                                        get a fixed penalty notice - you may be disqualified from driving if you build
                                        up 100 points within 3 years. </p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  features section end  -->


    <!--  about section start  -->
    <div class="about-section about-bg" id="road-safety">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 pt-5">
                    <img class="ceo-pic" src="assets/license.jpeg" alt="">
                </div>
                <div class="col-lg-6 offset-lg-1">
                    <div class="comment-content">
                        <h2 class="subtitle">Road Safety First</h2>
                        <p class="comment">This Christmas season, take action to stop drivers who you suspect get
                            behind the wheel when under the influence of drink or drugs, and stay alert to the dangers
                            of substandard, counterfeit, and fake alcohol and the health risks it poses to those who
                            drink it </p>

                    </div>
                </div>
            </div>
        </div>
        <div class="about-overlay"></div>
    </div>
    <!--  about section end  -->


    <!--  Testimonial section start  -->
    <div class="testimonial-section">
        <div class="container">
            <div class="testimonial-container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="testimonial">
                            <span class="title">Testimonial</span>
                            <h2 class="subtitle">WHAT THEY SAY</h2>
                            <div class="testimonial-carousel owl-carousel owl-theme">
                                <div class="single-testimonial">
                                    <p>They offers a host of logistic management services and supply chain . We provide
                                        innovative solutions with the best. tempor incididunt ut labore et dolor empor
                                        tempor incididunt
                                    </p>
                                    <h5>Jonathon Doe</h5>
                                    <span>Directer, art media</span>
                                </div>
                                <div class="single-testimonial">
                                    <p>They offers a host of logistic management services and supply chain . We provide
                                        innovative solutions with the best. tempor incididunt ut labore et dolor empor
                                        tempor incididunt </p>
                                    <h5>Jonathon Doe</h5>
                                    <span>Directer, art media</span>
                                </div>
                                <div class="single-testimonial">
                                    <p>They offers a host of logistic management services and supply chain . We provide
                                        innovative solutions with the best. tempor incididunt ut labore et dolor empor
                                        tempor incididunt </p>
                                    <h5>Jonathon Doe</h5>
                                    <span>Directer, art media</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="free-space"></div>
                    </div>
                </div>
                <div class="quote-icon">
                    {{-- <i class="flaticon-quote-left"></i> --}}
                </div>
            </div>
        </div>
    </div>
    <!--  Testimonial section end  -->


    <!--   faq section start    -->
    <div class="faq-section" id="faq">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-7">
                    <div class="targets">
                        <div class="box wow fadeInUp" data-wow-duration="1.5s">
                            <div class="icon-wrapper"><i
                                    class="flaticon-external-link-square-with-an-arrow-in-right-diagonal"></i></div>
                            <div class="box-details">
                                <h4>Stay Alert</h4>
                                <p>This Christmas season, take action to stop drivers who you suspect get behind the
                                    wheel when under the influence of drink or drugs, and stay alert to the dangers of
                                    substandard, counterfeit, and fake alcohol and the health risks it poses to those
                                    who drink it.</p>
                            </div>
                        </div>
                        <div class="box wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".2s">
                            <div class="icon-wrapper"><i class="flaticon-check"></i></div>
                            <div class="box-details">
                                <h4>Take Note</h4>
                                <p>There may be more than one offence that covers particular behaviour. Driving offences
                                    range from ‘document’ offences, for example when a person fails to produce a copy of
                                    their driving licence or other documents, to cases involving the death of another
                                    person.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="offset-xl-1 col-xl-5 col-lg-5 faqs">
                    <span class="title">FAQS</span>
                    <h2 class="subtitle">FREQUENTLY ASKED QUESTIONS</h2>
                    <div class="accordion" id="accordionExample">
                        <div class="card wow fadeInUp" data-wow-duration="1s">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed btn-block text-left" type="button"
                                        data-toggle="collapse" data-target="#collapseOne" aria-expanded="false"
                                        aria-controls="collapseOne">
                                        What we do?
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    We provide local, off-duty peace officers, as well as our own private investigation professionals to deliver temporary security and investigative services to industrial, commercial and retail properties. We are located in the US. More than 30,000 employees are ready to protect your personal safety. We are still opening offices throughout the country.
                                </div>
                            </div>
                        </div>
                        <div class="card wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                            <div class="card-header" id="headingTwo">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed btn-block text-left" type="button"
                                        data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                        aria-controls="collapseTwo">
                                        How many points can be deducted?
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    You can be fined up to 100 points and get penalty points on your licence if you
                                        get a fixed penalty notice - you may be disqualified from driving if you build
                                        up 100 points within 3 years.
                                </div>
                            </div>
                        </div>
                        <div class="card wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                            <div class="card-header" id="headingThree">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed btn-block text-left" type="button"
                                        data-toggle="collapse" data-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        What to do this festive season
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    This Christmas season, take action to stop drivers who you suspect get behind the
                                    wheel when under the influence of drink or drugs, and stay alert to the dangers of
                                    substandard, counterfeit, and fake alcohol and the health risks it poses to those
                                    who drink it.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--   cta section start    -->
    <div class="cta-section cta-bg">
        <div class="container">
            <div class="cta-container">
                <div class="row align-items-center">
                    <div class="col-lg-9">
                        <h2 class="mb-lg-0 text-center text-lg-left">Reach your destination 100% safe & secure</h2>
                    </div>
                    <div class="col-lg-3 text-center text-lg-right">
                        <a href="{{ url('/') }}" class="boxed-btn"><span>Contact Us</span></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="cta-overlay"></div>
    </div>
    <!--   cta section end    -->


    <!--   footer section start    -->
    <footer>
        <div class="container">

            <div class="bottom-footer">
                <p class="text-center">© Copyrights 2021 Road Traffic Crime System. All rights reserved.</p>
            </div>
        </div>
    </footer>
    <!--   footer section end    -->


    <!-- back to top area start -->
    <div class="back-to-top">
        <i class="fas fa-chevron-up"></i>
    </div>
    <!-- back to top area end -->



    <!-- popper js -->
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <!-- bootstrap js -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <!-- owl carousel js -->
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <!-- isotope js -->
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
    <!-- slicknav js -->
    <script src="{{ asset('assets/js/jquery.slicknav.min.js') }}"></script>
    <!-- wow js -->
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <!-- main js -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
