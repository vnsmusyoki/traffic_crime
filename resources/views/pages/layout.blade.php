<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <title>Drively - Bootstrap 4 premium MultePage HTML template</title>
    <meta charset="utf-8">
    <!--[if IE]>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <![endif]-->
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <link rel="stylesheet" href="{{ asset('front-end/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front-end/css/animations.css') }}">
    <link rel="stylesheet" href="{{ asset('front-end/css/regular.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front-end/css/brands.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front-end/css/solid.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front-end/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front-end/css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('front-end/css/main.css') }}" class="color-switcher-link">
    <script src="{{ asset('front-end/js/modernizr-custom.js') }}"></script>

    <!--[if lt IE 9]>
  <script src="js/vendor/html5shiv.min.js"></script>
  <script src="js/vendor/respond.min.js"></script>
  <script src="js/vendor/jquery-1.12.4.min.js"></script>
 <![endif]-->

</head>

<body>
    <!--[if lt IE 9]>
  <div class="bg-danger text-center">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" class="color-main">upgrade your browser</a> to improve your experience.</div>
 <![endif]-->

    <div class="preloader">
        <div class="preloader_image"></div>
    </div>

    <!-- search modal -->
    <div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <div class="widget widget_search">
            <form method="get" class="searchform search-form" action="/">
                <div class="form-group">
                    <input type="text" value="" name="search" class="form-control" placeholder="Search keyword"
                        id="modal-search-input">
                </div>
                <button type="submit" class="btn">Search</button>
            </form>
        </div>
    </div>


    <div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="mail_modal">
        <div class="container">
            <div class="row c-gutter-0 align-items-center">
                <div class="ls col-md-12 col-lg-6">
                    <form class="contact-form c-mb-10 c-gutter-10" method="post" action="/">
                        <div class="row">
                            <div class="col-sm-12">
                                <h4><span class="color-main">Email</span> Us</h4>
                                <div class="divider-sm-0 divider-md-30"></div>
                                <div class="form-group has-placeholder">
                                    <label for="name">Full Name <span class="required">*</span></label>
                                    <input type="text" aria-required="true" size="30" value="" name="name" id="name"
                                        class="form-control" placeholder="Full Name">
                                </div>
                                <div class="form-group has-placeholder">
                                    <label for="email">Email address<span class="required">*</span></label>
                                    <input type="email" aria-required="true" size="30" value="" name="email" id="email"
                                        class="form-control" placeholder="Email">
                                </div>

                                <div class="form-group has-placeholder">
                                    <label for="message">Message</label>
                                    <textarea aria-required="true" rows="6" cols="45" name="message" id="message"
                                        class="form-control" placeholder="Message"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-30">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <button type="submit" id="contact_form_submit" name="contact_submit"
                                        class="btn btn-outline-darkgrey">Email Us</button>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
                <div class="col-md-12 col-lg-6">
                    <img src="images/email-modal.jpg" alt="">
                </div>
            </div>
        </div>
    </div>


    <div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="sign_up_modal">
        <div class="container">
            <div class="row c-gutter-0 align-items-center">
                <div class="ls col-12 col-sm-6">
                    <form class="contact-form sign-in c-mb-10 c-gutter-10" method="post" action="/">
                        <div class="row">
                            <div class="col-sm-12">
                                <h4><span class="color-main">Sign Up</span> / Sign In</h4>
                                <div class="divider-sm-0 divider-md-30"></div>
                                <div class="form-group has-placeholder">
                                    <label for="name">Full Name <span class="required">*</span></label>
                                    <input type="text" aria-required="true" size="30" value="" name="name"
                                        id="signupname" class="form-control" placeholder="Full Name">
                                </div>
                                <div class="form-group has-placeholder">
                                    <label for="password">Password<span class="required">*</span></label>
                                    <input type="password" aria-required="true" size="30" value="" name="password"
                                        id="signuppassword" class="form-control" placeholder="Password">
                                </div>
                                <div class="form-group has-placeholder">
                                    <label for="email">Email<span class="required">*</span></label>
                                    <input type="email" aria-required="true" size="30" value="" name="email"
                                        id="signupemail" class="form-control" placeholder="Email">
                                </div>
                                <div>
                                    <input type="checkbox" class="checkbox" id="signupcheckbox" />
                                    <label for="signupcheckbox">I agree with all the text in the agreement</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <button type="submit" id="contact_signupform_submit" name="contact_submit"
                                        class="btn btn-outline-darkgrey">Email Us</button>
                                </div>
                            </div>
                            <a class="phone_modal_button sign_up_modal close-modal" data-dismiss="modal"
                                aria-label="Close" href="#sign_in_modal"><span aria-hidden="true">I am already
                                    Member</span></a>
                        </div>
                    </form>
                </div>
                <div class="col-12 col-sm-6 d-none d-sm-block">
                    <img src="images/sing-in-modal.jpg" alt="">
                </div>
            </div>
        </div>
    </div>


    <div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="sign_in_modal">
        <div class="container">
            <div class="row c-gutter-0 align-items-center">
                <div class="ls col-12 col-sm-6">
                    <form class="contact-form sign-in c-mb-10 c-gutter-10" method="post" action="/">
                        <div class="row">
                            <div class="col-sm-12">
                                <h4><span class="color-main">Sign In</span> / Sign Up</h4>
                                <div class="divider-sm-0 divider-md-30"></div>
                                <div class="form-group has-placeholder">
                                    <label for="name">Full Name <span class="required">*</span></label>
                                    <input type="text" aria-required="true" size="30" value="" name="name" id="signname"
                                        class="form-control" placeholder="Full Name">
                                </div>
                                <div class="form-group has-placeholder">
                                    <label for="password">Password<span class="required">*</span></label>
                                    <input type="password" aria-required="true" size="30" value="" name="password"
                                        id="password" class="form-control" placeholder="Password">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <button type="submit" id="contact_signinform_submit" name="contact_submit"
                                        class="btn btn-outline-darkgrey">Email Us</button>
                                </div>
                            </div>
                            <a class="sign_up_modal close-modal" data-dismiss="modal" aria-label="Close"
                                href="#sign_up_modal"><span aria-hidden="true">Forgot Password?</span></a>
                        </div>
                    </form>
                </div>
                <div class="col-12 col-sm-6 d-none d-sm-block">
                    <img src="images/sing-in-modal.jpg" alt="">
                </div>
            </div>
        </div>
    </div>


    <!-- Unyson messages modal -->
    <div class="modal fade" tabindex="-1" role="dialog" id="messages_modal">
        <div class="fw-messages-wrap ls p-normal">
            <!-- Uncomment this UL with LI to show messages in modal popup to your user: -->
            <!--
  <ul class="list-unstyled">
   <li>Message To User</li>
  </ul>
  -->

        </div>
    </div><!-- eof .modal -->

    <!-- wrappers for visual page editor and boxed version of template -->
    <div id="canvas">
        <div id="box_wrapper">

            <!-- template sections -->

            <!--topline section visible only on small screens|-->
            <div class="header_absolute header_under_slider ds">
                <section class="page_topline ds c-my-10 s-overlay">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-12 col-sm-5 text-left">
                                <span class="social-icons">

                                    <a href="#" class="fa fa-facebook " title="facebook"></a>
                                    <a href="#" class="fab fa-youtube " title="youtube"></a>
                                    <a href="#" class="fab fa-linkedin-in " title="linkedin"></a>
                                    <a href="#" class="fa fa-twitter " title="twitter"></a>
                                    <a href="#" class="fa fa-google " title="google"></a>

                                </span>
                            </div>
                            <div class="col-12 col-sm-7 text-right">

                                <ul class="small-text">
                                    <li>
                                        <p class="phone_number"><span>Questions?</span><a
                                                href="tel:855374-6211">(855) 374-6211</a></p>
                                    </li>

                                    <li>
                                        <span>
                                            <a class="phone_modal_button" href="#sign_in_modal"><span
                                                    class="ico icon-profile"></span></a>
                                        </span>
                                    </li>

                                    <li>
                                        <a class="email_modal_button" href="#mail_modal"><span
                                                class="ico icon-icon"></span></a>
                                    </li>
                                    <li>
                                        <a href="#"><span class="ico icon-comments"></span></a>
                                    </li>

                                </ul>


                            </div>
                        </div>
                    </div>
                </section>
                <!--eof topline-->

                <!-- header with two Bootstrap columns - left for logo and right for navigation and includes (search, social icons, additional links and buttons etc -->
                <header class="page_header ds justify-nav-end">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-3 col-lg-4 col-md-5 col-11">
                                <a href="./" class="logo">
                                    <img src="images/logo.png" alt="">
                                </a>
                            </div>
                            <div class="col-xl-9 col-lg-8 col-md-7 col-1">
                                <div class="nav-wrap">

                                    <!-- main nav start -->
                                    <nav class="top-nav">
                                        <ul class="nav sf-menu">


                                            <li class="active">
                                                <a href="index.html">Home</a>
                                                <ul>
                                                    <li>
                                                        <a href="index.html">MultiPage</a>
                                                    </li>
                                                    <li>
                                                        <a href="index_static.html">Static Intro</a>
                                                    </li>
                                                    <li>
                                                        <a href="index_singlepage.html">Single Page</a>
                                                    </li>
                                                </ul>
                                            </li>

                                            <li>
                                                <a href="about.html">Pages</a>
                                                <ul>


                                                    <li>
                                                        <a href="about.html">About</a>
                                                    </li>


                                                    <!-- features -->
                                                    <li>
                                                        <a href="shortcodes_iconbox.html">Shortcodes</a>
                                                        <ul>
                                                            <li>
                                                                <a href="shortcodes_typography.html">Typography</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcodes_buttons.html">Buttons</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcodes_iconbox.html">Icon Boxes</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcodes_progress.html">Progress</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcodes_tabs.html">Tabs &amp; Collapse</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcodes_bootstrap.html">Bootstrap
                                                                    Elements</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcodes_animation.html">Animation</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcodes_icons.html">Template Icons</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcodes_socialicons.html">Social Icons</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <!-- eof shortcodes -->

                                                    <li>
                                                        <a href="services.html">Our Services</a>
                                                        <ul>
                                                            <li>
                                                                <a href="services.html">Services 1</a>
                                                            </li>
                                                            <li>
                                                                <a href="services2.html">Services 2</a>
                                                            </li>
                                                            <li>
                                                                <a href="services3.html">Services 3</a>
                                                            </li>
                                                            <li>
                                                                <a href="service-single.html">Single Service</a>
                                                            </li>
                                                        </ul>
                                                    </li>

                                                    <li>
                                                        <a href="pricing.html">Pricing</a>
                                                    </li>

                                                    <!-- shop -->
                                                    <li>
                                                        <a href="shop-right.html">Shop</a>
                                                        <ul>
                                                            <li>
                                                                <a href="shop-account-dashboard.html">Account</a>
                                                                <ul>

                                                                    <li>
                                                                        <a href="shop-account-details.html">Account
                                                                            details</a>
                                                                    </li>
                                                                    <li>
                                                                        <a
                                                                            href="shop-account-addresses.html">Addresses</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="shop-account-address-edit.html">Edit
                                                                            Address</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="shop-account-orders.html">Orders</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="shop-account-order-single.html">Single
                                                                            Order</a>
                                                                    </li>
                                                                    <li>
                                                                        <a
                                                                            href="shop-account-downloads.html">Downloads</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="shop-account-password-reset.html">Password
                                                                            Reset</a>
                                                                    </li>
                                                                    <li>
                                                                        <a
                                                                            href="shop-account-login.html">Login/Logout</a>
                                                                    </li>

                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <a href="shop-right.html">Right Sidebar</a>
                                                            </li>
                                                            <li>
                                                                <a href="shop-left.html">Left Sidebar</a>
                                                            </li>
                                                            <li>
                                                                <a href="shop-product-right.html">Product Right
                                                                    Sidebar</a>
                                                            </li>
                                                            <li>
                                                                <a href="shop-product-left.html">Product Left
                                                                    Sidebar</a>
                                                            </li>
                                                            <li>
                                                                <a href="shop-cart.html">Cart</a>
                                                            </li>
                                                            <li>
                                                                <a href="shop-checkout.html">Checkout</a>
                                                            </li>
                                                            <li>
                                                                <a href="shop-order-received.html">Order Received</a>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <!-- eof shop -->
                                                    <!-- blog -->
                                                    <li>
                                                        <a href="blog-right.html">Blog</a>
                                                        <ul>

                                                            <li>
                                                                <a href="blog-right.html">Right Sidebar</a>
                                                            </li>
                                                            <li>
                                                                <a href="blog-left.html">Left Sidebar</a>
                                                            </li>
                                                            <li>
                                                                <a href="blog-full.html">No Sidebar</a>
                                                            </li>
                                                            <li>
                                                                <a href="blog-grid.html">Blog Grid</a>
                                                            </li>

                                                            <li>
                                                                <a href="blog-single-right.html">Post</a>
                                                                <ul>
                                                                    <li>
                                                                        <a href="blog-single-right.html">Right
                                                                            Sidebar</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="blog-single-left.html">Left Sidebar</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="blog-single-full.html">No Sidebar</a>
                                                                    </li>
                                                                </ul>
                                                            </li>

                                                            <li>
                                                                <a href="blog-single-video-right.html">Video Post</a>
                                                                <ul>
                                                                    <li>
                                                                        <a href="blog-single-video-right.html">Right
                                                                            Sidebar</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="blog-single-video-left.html">Left
                                                                            Sidebar</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="blog-single-video-full.html">No
                                                                            Sidebar</a>
                                                                    </li>
                                                                </ul>
                                                            </li>

                                                        </ul>
                                                    </li>
                                                    <!-- eof blog -->


                                                    <!-- gallery -->
                                                    <li>
                                                        <a href="gallery-image.html">Gallery</a>
                                                        <ul>
                                                            <!-- Gallery image only -->
                                                            <li>
                                                                <a href="gallery-image.html">Image Only</a>
                                                                <ul>
                                                                    <li>
                                                                        <a href="gallery-image-2-cols.html">2
                                                                            columns</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="gallery-image.html">3 columns</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="gallery-image-4-cols-fullwidth.html">4
                                                                            columns fullwidth</a>
                                                                    </li>

                                                                </ul>
                                                            </li>
                                                            <!-- eof Gallery image only -->

                                                            <!-- Gallery with title -->
                                                            <li>
                                                                <a href="gallery-title.html">Image With Title</a>
                                                                <ul>
                                                                    <li>
                                                                        <a href="gallery-title-2-cols.html">2
                                                                            columns</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="gallery-title.html">3 column</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="gallery-title-4-cols-fullwidth.html">4
                                                                            columns fullwidth</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <!-- eof Gallery with title -->

                                                            <!-- Gallery with excerpt -->
                                                            <li>
                                                                <a href="gallery-excerpt.html">Image with Excerpt</a>
                                                                <ul>
                                                                    <li>
                                                                        <a href="gallery-excerpt-2-cols.html">2
                                                                            columns</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="gallery-excerpt.html">3 column</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="gallery-excerpt-4-cols-fullwidth.html">4
                                                                            columns fullwdith</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <!-- eof Gallery with excerpt -->

                                                            <li>
                                                                <a href="gallery-tiled.html">Tiled Gallery</a>
                                                            </li>

                                                            <!-- Gallery item -->
                                                            <li>
                                                                <a href="gallery-single.html">Gallery Item</a>
                                                                <ul>
                                                                    <li>
                                                                        <a href="gallery-single.html">Style 1</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="gallery-single2.html">Style 2</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <!-- eof Gallery item -->
                                                        </ul>
                                                    </li>
                                                    <!-- eof Gallery -->


                                                    <li>
                                                        <a href="shortcodes_widgets_default.html">Widgets</a>
                                                        <ul>
                                                            <li>
                                                                <a href="shortcodes_widgets_default.html">Default
                                                                    Widgets</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcodes_widgets_shop.html">Shop Widgets</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcodes_widgets_custom.html">Custom
                                                                    Widgets</a>
                                                            </li>
                                                        </ul>

                                                    </li>


                                                    <!-- events -->
                                                    <li>
                                                        <a href="events-left.html">Events</a>
                                                        <ul>
                                                            <li>
                                                                <a href="events-left.html">Left Sidebar</a>
                                                            </li>
                                                            <li>
                                                                <a href="events-right.html">Right Sidebar</a>
                                                            </li>
                                                            <li>
                                                                <a href="events-full.html">Full Width</a>
                                                            </li>
                                                            <li>
                                                                <a href="event-single-left.html">Single Event</a>
                                                                <ul>
                                                                    <li>
                                                                        <a href="event-single-left.html">Left
                                                                            Sidebar</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="event-single-right.html">Right
                                                                            Sidebar</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="event-single-full.html">Full Width</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <!-- eof events -->

                                                    <li>
                                                        <a href="team.html">Team</a>
                                                        <ul>
                                                            <li>
                                                                <a href="team.html">Team List</a>
                                                            </li>
                                                            <li>
                                                                <a href="team-single.html">Team Member</a>
                                                            </li>
                                                        </ul>
                                                    </li>


                                                    <li>
                                                        <a href="comingsoon.html">Comingsoon</a>
                                                    </li>
                                                    <li>
                                                        <a href="package.html">Package</a>
                                                    </li>


                                                    <li>
                                                        <a href="courses.html">Courses</a>
                                                        <ul>
                                                            <li>
                                                                <a href="courses.html">Courses</a>
                                                            </li>
                                                            <li>
                                                                <a href="courses-single.html">Single course</a>
                                                            </li>
                                                        </ul>
                                                    </li>


                                                    <li>
                                                        <a href="404.html">404</a>
                                                    </li>

                                                </ul>
                                            </li>
                                            <!-- eof pages -->

                                            <li>
                                                <a href="how-it-works.html">How it works</a>
                                            </li>

                                            <li>
                                                <a href="#">Features</a>
                                                <div class="mega-menu">
                                                    <ul class="mega-menu-row">
                                                        <li class="mega-menu-col">
                                                            <a href="#">Headers</a>
                                                            <ul>
                                                                <li>
                                                                    <a href="header1.html">Header Type 1</a>
                                                                </li>
                                                                <li>
                                                                    <a href="header2.html">Header Type 2</a>
                                                                </li>
                                                                <li>
                                                                    <a href="header3.html">Header Type 3</a>
                                                                </li>
                                                                <li>
                                                                    <a href="header4.html">Header Type 4</a>
                                                                </li>
                                                                <li>
                                                                    <a href="header5.html">Header Type 5</a>
                                                                </li>
                                                                <li>
                                                                    <a href="header6.html">Header Type 6</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li class="mega-menu-col">
                                                            <a href="#">Side Menus</a>
                                                            <ul>
                                                                <li>
                                                                    <a href="header-side.html">Push Left</a>
                                                                </li>
                                                                <li>
                                                                    <a href="header-side-right.html">Push Right</a>
                                                                </li>
                                                                <li>
                                                                    <a href="header-side-slide.html">Slide Left</a>
                                                                </li>
                                                                <li>
                                                                    <a href="header-side-slide-right.html">Slide
                                                                        Right</a>
                                                                </li>
                                                                <li>
                                                                    <a href="header-side-sticked.html">Sticked Left</a>
                                                                </li>
                                                                <li>
                                                                    <a href="header-side-sticked-right.html">Sticked
                                                                        Right</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li class="mega-menu-col">
                                                            <a href="title1.html">Title Sections</a>
                                                            <ul>
                                                                <li>
                                                                    <a href="title1.html">Title section 1</a>
                                                                </li>
                                                                <li>
                                                                    <a href="title2.html">Title section 2</a>
                                                                </li>
                                                                <li>
                                                                    <a href="title3.html">Title section 3</a>
                                                                </li>
                                                                <li>
                                                                    <a href="title4.html">Title section 4</a>
                                                                </li>
                                                                <li>
                                                                    <a href="title5.html">Title section 5</a>
                                                                </li>
                                                                <li>
                                                                    <a href="title6.html">Title section 6</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li class="mega-menu-col">
                                                            <a href="footer1.html#footer">Footers</a>
                                                            <ul>
                                                                <li>
                                                                    <a href="footer1.html#footer">Footer Type 1</a>
                                                                </li>
                                                                <li>
                                                                    <a href="footer2.html#footer">Footer Type 2</a>
                                                                </li>
                                                                <li>
                                                                    <a href="footer3.html#footer">Footer Type 3</a>
                                                                </li>
                                                                <li>
                                                                    <a href="footer4.html#footer">Footer Type 4</a>
                                                                </li>
                                                                <li>
                                                                    <a href="footer5.html#footer">Footer Type 5</a>
                                                                </li>
                                                                <li>
                                                                    <a href="footer6.html#footer">Footer Type 6</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li class="mega-menu-col">
                                                            <a href="copyright1.html#copyright">Copyright</a>

                                                            <ul>
                                                                <li>
                                                                    <a href="copyright1.html#copyright">Copyright 1</a>
                                                                </li>
                                                                <li>
                                                                    <a href="copyright2.html#copyright">Copyright 2</a>
                                                                </li>
                                                                <li>
                                                                    <a href="copyright3.html#copyright">Copyright 3</a>
                                                                </li>
                                                                <li>
                                                                    <a href="copyright4.html#copyright">Copyright 4</a>
                                                                </li>
                                                                <li>
                                                                    <a href="copyright5.html#copyright">Copyright 5</a>
                                                                </li>
                                                                <li>
                                                                    <a href="copyright6.html#copyright">Copyright 6</a>
                                                                </li>
                                                            </ul>
                                                        </li>

                                                    </ul>
                                                </div> <!-- eof mega menu -->
                                            </li>
                                            <!-- eof features -->


                                            <li>
                                                <a href="faq.html">FAQ</a>
                                                <ul>
                                                    <li>
                                                        <a href="faq.html">FAQ</a>
                                                    </li>
                                                    <li>
                                                        <a href="faq2.html">FAQ 2</a>
                                                    </li>
                                                </ul>
                                            </li>


                                            <!-- contacts -->
                                            <li>
                                                <a href="contact.html">Contact</a>
                                                <ul>
                                                    <li>
                                                        <a href="contact.html">Contact 1</a>
                                                    </li>
                                                    <li>
                                                        <a href="contact2.html">Contact 2</a>
                                                    </li>
                                                    <li>
                                                        <a href="contact3.html">Contact 3</a>
                                                    </li>
                                                    <li>
                                                        <a href="contact4.html">Contact 4</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <!-- eof contacts -->
                                        </ul>


                                    </nav>
                                    <!-- eof main nav -->

                                    <!--hidding includes on small devices. They are duplicated in topline-->
                                    <ul class="top-includes d-none d-xl-block">
                                        <li>
                                            <!--modal search-->
                                            <span>
                                                <a href="#" class="search_modal_button">
                                                    <i class="fa fa-search"></i>
                                                </a>
                                            </span>

                                        </li>


                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- header toggler -->
                    <span class="toggle_menu"><span></span></span>
                </header>
            </div>
            <section class="page_slider">
                <div class="flexslider">
                    <ul class="slides">
                        <li class="cs cover-image flex-slide">
                            <img src="images/slide01.jpg" alt="">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="intro_layers_wrapper">
                                            <div class="intro_layers">
                                                <div class="intro_layer" data-animation="fadeInRight">
                                                    <h1>
                                                        Original Provider
                                                    </h1>
                                                    <h1 class="after-title">
                                                        for Online<span> Traffic School</span>
                                                    </h1>
                                                </div>
                                                <div class="intro_layer" data-animation="fadeInUp">
                                                    <ul class="slider-list">
                                                        <li>No Time Requirements, Study at Your Own Pace</li>
                                                        <li>California DMV Licensed & Court Accepted</li>
                                                        <li>Avoid Points & License Suspension</li>
                                                    </ul>
                                                </div>
                                                <div class="intro_layer" data-animation="fadeInUp">
                                                    <a href="#"
                                                        class="text-uppercase btn btn-outline-maincolor">Register
                                                        now</a>
                                                    <div class="slider-price-wrap">
                                                        <span class="plan-price">73</span>
                                                        <span class="plan-decimals">95</span>
                                                        <span class="plan-sign">usd</span>
                                                    </div>
                                                    <div class="slider-price-description">
                                                        <p class="slider-price-description-one">Includes Free Court</p>
                                                        <p class="slider-price-description-two">& DMV Submission</p>
                                                    </div>
                                                </div>
                                            </div> <!-- eof .intro_layers -->
                                        </div> <!-- eof .intro_layers_wrapper -->
                                    </div> <!-- eof .col-* -->
                                </div><!-- eof .row -->
                            </div><!-- eof .container-fluid -->
                        </li>

                        <li class="cs cover-image flex-slide">
                            <img src="images/slide02.jpg" alt="">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="intro_layers_wrapper intro_text_bottom">
                                            <div class="intro_layers">
                                                <div class="intro_layer" data-animation="fadeInRight">
                                                    <h1>
                                                        Original Provider
                                                    </h1>
                                                    <h1 class="after-title">
                                                        for Online<span> Traffic School</span>
                                                    </h1>
                                                </div>
                                                <div class="intro_layer" data-animation="fadeInUp">
                                                    <ul class="slider-list">
                                                        <li>No Time Requirements, Study at Your Own Pace</li>
                                                        <li>California DMV Licensed & Court Accepted</li>
                                                        <li>Avoid Points & License Suspension</li>
                                                    </ul>
                                                </div>

                                                <div class="intro_layer" data-animation="fadeInUp">
                                                    <a href="#"
                                                        class="text-uppercase btn btn-outline-maincolor">Register
                                                        now</a>
                                                    <div class="slider-price-wrap">
                                                        <span class="plan-price">73</span>
                                                        <span class="plan-decimals">95</span>
                                                        <span class="plan-sign">usd</span>
                                                    </div>
                                                    <div class="slider-price-description">
                                                        <p class="slider-price-description-one">Includes Free Court</p>
                                                        <p class="slider-price-description-two">& DMV Submission</p>
                                                    </div>
                                                </div>
                                            </div> <!-- eof .intro_layers -->
                                        </div> <!-- eof .intro_layers_wrapper -->
                                    </div> <!-- eof .col-* -->
                                </div><!-- eof .row -->
                            </div><!-- eof .container-fluid -->
                        </li>
                        <li class="cs cover-image flex-slide">
                            <img src="images/slide03.jpg" alt="">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="intro_layers_wrapper intro_text_bottom">
                                            <div class="intro_layers">
                                                <div class="intro_layer" data-animation="fadeInRight">
                                                    <h1>
                                                        Original Provider
                                                    </h1>
                                                    <h1 class="after-title">
                                                        for Online<span> Traffic School</span>
                                                    </h1>
                                                </div>
                                                <div class="intro_layer" data-animation="fadeInUp">
                                                    <ul class="slider-list">
                                                        <li>No Time Requirements, Study at Your Own Pace</li>
                                                        <li>California DMV Licensed & Court Accepted</li>
                                                        <li>Avoid Points & License Suspension</li>
                                                    </ul>
                                                </div>

                                                <div class="intro_layer" data-animation="fadeInUp">
                                                    <a href="#"
                                                        class="text-uppercase btn btn-outline-maincolor">Register
                                                        now</a>
                                                    <div class="slider-price-wrap">
                                                        <span class="plan-price">73</span>
                                                        <span class="plan-decimals">95</span>
                                                        <span class="plan-sign">usd</span>
                                                    </div>
                                                    <div class="slider-price-description">
                                                        <p class="slider-price-description-one">Includes Free Court</p>
                                                        <p class="slider-price-description-two">& DMV Submission</p>
                                                    </div>
                                                </div>
                                            </div> <!-- eof .intro_layers -->
                                        </div> <!-- eof .intro_layers_wrapper -->
                                    </div> <!-- eof .col-* -->
                                </div><!-- eof .row -->
                            </div><!-- eof .container-fluid -->
                        </li>


                    </ul>
                </div> <!-- eof flexslider -->
            </section>


            <section class="ls teaser-box-section">
                <div class="container">
                    <div class="row c-gutter-8">
                        <div class="col-sm-4">
                            <a class="text-center py-45 box-shadow mb-20 cs teaser" href="#">
                                <h6 class="fw-300"><i class="ico icon-steering-wheel fs-40 px-10"></i>New
                                    Programms</h6>
                            </a>
                        </div>
                        <div class="col-sm-4">
                            <a class="text-center py-45 box-shadow mb-20 teaser" href="#">
                                <h6 class="fw-300"><i class="ico icon-professor fs-40 px-10"></i>Expert
                                    teachers</h6>
                            </a>
                        </div>
                        <div class="col-sm-4">
                            <a class="text-center py-45 box-shadow mb-20 teaser" href="#">
                                <h6 class="fw-300"><i class="ico icon-mortarboard fs-40 px-10"></i>Education
                                    System</h6>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <section id="welcome" class="ls">
                <div class="container">
                    <div class="row">

                        <div class="divider-30 d-none d-xl-block"></div>

                        <div class="col-md-12">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="divider-50 d-lg-block"></div>
                                    <h3 class="width-80 mt-0"><span class="color-main">Welcome</span> to Online
                                        Traffic School!</h3>
                                    <p class="after-title subtitle">Getting a traffic ticket can be scary and
                                        stressful. Rarely, do we think about</p>
                                    <div id="accordion01" role="tablist">
                                        <div class="card">
                                            <div class="card-header" role="tab" id="collapse01_header">
                                                <h5>
                                                    <a data-toggle="collapse" href="#collapse01" aria-expanded="true"
                                                        aria-controls="collapse01">
                                                        Completely Online
                                                    </a>
                                                </h5>
                                            </div>

                                            <div id="collapse01" class="collapse show" role="tabpanel"
                                                aria-labelledby="collapse01_header" data-parent="#accordion01">
                                                <div class="card-body">
                                                    Are you considering going to an 8 hour traffic school class? You
                                                    don't have to! With the price of gas through the roof, it's more
                                                    cost effective to take our California.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" role="tab" id="collapse02_header">
                                                <h5>
                                                    <a class="collapsed" data-toggle="collapse" href="#collapse02"
                                                        aria-expanded="false" aria-controls="collapse02">
                                                        Why Choose The Online Traffic School?
                                                    </a>
                                                </h5>
                                            </div>
                                            <div id="collapse02" class="collapse" role="tabpanel"
                                                aria-labelledby="collapse02_header" data-parent="#accordion01">
                                                <div class="card-body">
                                                    Are you considering going to an 8 hour traffic school class? You
                                                    don't have to! With the price of gas through the roof, it's more
                                                    cost effective to take our California.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" role="tab" id="collapse03_header">
                                                <h5>
                                                    <a class="collapsed" data-toggle="collapse" href="#collapse03"
                                                        aria-expanded="false" aria-controls="collapse03">
                                                        Traffic Violations and Points
                                                    </a>
                                                </h5>
                                            </div>
                                            <div id="collapse03" class="collapse" role="tabpanel"
                                                aria-labelledby="collapse03_header" data-parent="#accordion01">
                                                <div class="card-body">
                                                    Are you considering going to an 8 hour traffic school class? You
                                                    don't have to! With the price of gas through the roof, it's more
                                                    cost effective to take our California.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" role="tab" id="collapse04_header">
                                                <h5>
                                                    <a class="collapsed" data-toggle="collapse" href="#collapse03"
                                                        aria-expanded="false" aria-controls="collapse03">
                                                        Getting Started
                                                    </a>
                                                </h5>
                                            </div>
                                            <div id="collapse04" class="collapse" role="tabpanel"
                                                aria-labelledby="collapse03_header" data-parent="#accordion01">
                                                <div class="card-body">
                                                    Are you considering going to an 8 hour traffic school class? You
                                                    don't have to! With the price of gas through the roof, it's more
                                                    cost effective to take our California.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="divider-80 d-lg-block"></div>
                                </div>
                                <div class="col-lg-6 to-bottom-image">
                                    <img src="images/welcome_image.jpg" alt="">
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </section>

            <section id="courses" class="ls">
                <div class="row">
                    <div class="col-md-12">

                        <div class="courses-slider owl-carousel" data-autoplay="true" data-loop="true"
                            data-responsive-lg="4" data-responsive-md="3" data-responsive-sm="2" data-nav="false"
                            data-dots="false" data-margin="8">

                            <div class="courses-item">
                                <div class="media courses">
                                    <div>
                                        <img src="images/lessons/lessons-1.jpg" alt="">
                                    </div>
                                    <div class="media-body cs">
                                        <div class="courses-header">
                                            <div class="plan-name">
                                                <h4>
                                                    Teen Driver Education
                                                </h4>
                                            </div>
                                            <div class="price-wrap color-dark">
                                                <span class="plan-price">29</span><span
                                                    class="plan-decimals">95</span><span
                                                    class="plan-sign">usd</span>
                                            </div>
                                        </div>
                                        <p class="number-lessons mt-17">4 lessons</p>

                                        <p class="description-lessons fs-20 mt-48">If you recently received a traffic
                                            citation in
                                            Drively there is a good chance that you need to find</p>

                                        <p class="teacher mt-46"><i class="ico icon-profile fs-14"></i><span>Emma
                                                Johnson</span></p>

                                        <div class="button-section">
                                            <a href="#" class="btn btn-outline-maincolor">Learn more</a>
                                            <a href="#" class="btn btn-maincolor">Buy now</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="courses-item">
                                <div class="media courses">
                                    <div>
                                        <img src="images/lessons/lessons-2.jpg" alt="">
                                    </div>
                                    <div class="media-body cs">
                                        <div class="courses-header">
                                            <div class="plan-name">
                                                <h4>
                                                    Program for Seniors
                                                </h4>
                                            </div>
                                            <div class="price-wrap color-dark">
                                                <span class="plan-price">37</span><span
                                                    class="plan-decimals">95</span><span
                                                    class="plan-sign">usd</span>
                                            </div>
                                        </div>
                                        <p class="number-lessons mt-17">7 lessons</p>

                                        <p class="description-lessons fs-20 mt-48">If you recently received a traffic
                                            citation in
                                            Drively there is a good chance that you need to find</p>

                                        <p class="teacher mt-46"><i class="ico icon-profile fs-14"></i><span>Emma
                                                Johnson</span></p>

                                        <div class="button-section">
                                            <a href="#" class="btn btn-outline-maincolor">Learn more</a>
                                            <a href="#" class="btn btn-maincolor">Buy now</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="courses-item">
                                <div class="media courses">
                                    <div>
                                        <img src="images/lessons/lessons-3.jpg" alt="">
                                    </div>
                                    <div class="media-body cs">
                                        <div class="courses-header">
                                            <div class="plan-name">
                                                <h4>
                                                    Winter <br>Driving
                                                </h4>
                                            </div>
                                            <div class="price-wrap color-dark">
                                                <span class="plan-price">25</span><span
                                                    class="plan-decimals">95</span><span
                                                    class="plan-sign">usd</span>
                                            </div>
                                        </div>
                                        <p class="number-lessons mt-17">5 lessons</p>

                                        <p class="description-lessons fs-20 mt-48">If you recently received a traffic
                                            citation in
                                            Drively there is a good chance that you need to find</p>

                                        <p class="teacher mt-46"><i class="ico icon-profile fs-14"></i><span>Emma
                                                Johnson</span></p>

                                        <div class="button-section">
                                            <a href="#" class="btn btn-outline-maincolor">Learn more</a>
                                            <a href="#" class="btn btn-maincolor">Buy now</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="courses-item">
                                <div class="media courses">
                                    <div>
                                        <img src="images/lessons/lessons-4.jpg" alt="">
                                    </div>
                                    <div class="media-body cs">
                                        <div class="courses-header">
                                            <div class="plan-name">
                                                <h4>
                                                    Woman Education
                                                </h4>
                                            </div>
                                            <div class="price-wrap color-dark">
                                                <span class="plan-price">35</span><span
                                                    class="plan-decimals">95</span><span
                                                    class="plan-sign">usd</span>
                                            </div>
                                        </div>
                                        <p class="number-lessons mt-17">19 lessons</p>

                                        <p class="description-lessons fs-20 mt-48">If you recently received a traffic
                                            citation in
                                            Drively there is a good chance that you need to find</p>

                                        <p class="teacher mt-46"><i class="ico icon-profile fs-14"></i><span>Emma
                                                Johnson</span></p>

                                        <div class="button-section">
                                            <a href="#" class="btn btn-outline-maincolor">Learn more</a>
                                            <a href="#" class="btn btn-maincolor">Buy now</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="courses-item">
                                <div class="media courses">
                                    <div>
                                        <img src="images/lessons/lessons-5.jpg" alt="">
                                    </div>
                                    <div class="media-body cs">
                                        <div class="courses-header">
                                            <div class="plan-name">
                                                <h4>
                                                    Defensive Driving
                                                </h4>
                                            </div>
                                            <div class="price-wrap color-dark">
                                                <span class="plan-price">33</span><span
                                                    class="plan-decimals">95</span><span
                                                    class="plan-sign">usd</span>
                                            </div>
                                        </div>
                                        <p class="number-lessons mt-17">9 lessons</p>

                                        <p class="description-lessons fs-20 mt-48">If you recently received a traffic
                                            citation in
                                            Drively there is a good chance that you need to find</p>

                                        <p class="teacher mt-46"><i class="ico icon-profile fs-14"></i><span>Emma
                                                Johnson</span></p>

                                        <div class="button-section">
                                            <a href="#" class="btn btn-outline-maincolor">Learn more</a>
                                            <a href="#" class="btn btn-maincolor">Buy now</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="courses-item">
                                <div class="media courses">
                                    <div>
                                        <img src="images/lessons/lessons-6.jpg" alt="">
                                    </div>
                                    <div class="media-body cs">
                                        <div class="courses-header">
                                            <div class="plan-name">
                                                <h4>
                                                    Adult In-Car Lessons
                                                </h4>
                                            </div>
                                            <div class="price-wrap color-dark">
                                                <span class="plan-price">28</span><span
                                                    class="plan-decimals">95</span><span
                                                    class="plan-sign">usd</span>
                                            </div>
                                        </div>
                                        <p class="number-lessons mt-17">12 lessons</p>

                                        <p class="description-lessons fs-20 mt-48">If you recently received a traffic
                                            citation in
                                            Drively there is a good chance that you need to find</p>

                                        <p class="teacher mt-46"><i class="ico icon-profile fs-14"></i><span>Emma
                                                Johnson</span></p>

                                        <div class="button-section">
                                            <a href="#" class="btn btn-outline-maincolor">Learn more</a>
                                            <a href="#" class="btn btn-maincolor">Buy now</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="courses-item">
                                <div class="media courses">
                                    <div>
                                        <img src="images/lessons/lessons-7.jpg" alt="">
                                    </div>
                                    <div class="media-body cs">
                                        <div class="courses-header">
                                            <div class="plan-name">
                                                <h4>
                                                    Stick Shift Lessons
                                                </h4>
                                            </div>
                                            <div class="price-wrap color-dark">
                                                <span class="plan-price">48</span><span
                                                    class="plan-decimals">95</span><span
                                                    class="plan-sign">usd</span>
                                            </div>
                                        </div>
                                        <p class="number-lessons mt-17">16 lessons</p>

                                        <p class="description-lessons fs-20 mt-48">If you recently received a traffic
                                            citation in
                                            Drively there is a good chance that you need to find</p>

                                        <p class="teacher mt-46"><i class="ico icon-profile fs-14"></i><span>Emma
                                                Johnson</span></p>

                                        <div class="button-section">
                                            <a href="#" class="btn btn-outline-maincolor">Learn more</a>
                                            <a href="#" class="btn btn-maincolor">Buy now</a>
                                        </div>

                                    </div>
                                </div>
                            </div>


                        </div><!-- .courses-slider -->

                    </div>
                </div>
            </section>

            <section id="price" class="ls">
                <div class="container">
                    <div class="row">

                        <div class="divider-70 divider-xl-140"></div>

                        <div class="col-md-12">
                            <div class="text-center">
                                <h3><span class="color-main">Drively</span> Packages</h3>
                                <p class="subtitle width-xl-60 width-100">The school offers the following services for
                                    Teenage first-time drivers, new adult learners and existing drivers with lapsed
                                    licenses.</p>
                            </div>

                            <div class="row c-gutter-0">
                                <div class="divider-30 divider-md-60 divider-xl-64"></div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="pricing-plan box-shadow">
                                        <div class="plan-name">
                                            <h3>
                                                Beginner Driving Courses
                                            </h3>
                                        </div>
                                        <div class="price-wrap color-main">
                                            <span class="plan-price">49</span><span
                                                class="plan-decimals">95</span><span
                                                class="plan-sign">usd</span>
                                        </div>
                                        <div class="plan-description">
                                            4% per transaction
                                        </div>
                                        <div class="plan-features">
                                            <ul class="list-styled-caret">
                                                <li>5 1-hour lessons</li>
                                                <li>FREE choice of instructor</li>
                                                <li>FREE final exam</li>
                                            </ul>
                                        </div>
                                        <div class="plan-button">
                                            <a href="#" class="btn btn-outline-darkgrey">Get Started</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">

                                    <div class="pricing-plan plan-featured box-shadow">
                                        <div class="plan-name">
                                            <h3>
                                                Beginner Driving Courses
                                            </h3>
                                        </div>
                                        <div class="price-wrap">
                                            <span class="plan-price">73</span><span
                                                class="plan-decimals">95</span><span
                                                class="plan-sign">usd</span>
                                        </div>
                                        <div class="plan-description color-darkgrey">
                                            0,2% per transaction
                                        </div>
                                        <div class="plan-features">
                                            <ul class="list-styled-caret">
                                                <li>5 1-hour lessons</li>
                                                <li>FREE choice of instructor</li>
                                                <li>FREE final exam</li>
                                                <li>Private In-Car Instruction</li>
                                                <li>Pre and Post Lesson follow Up</li>
                                            </ul>
                                        </div>
                                        <div class="plan-button">
                                            <a href="#" class="btn btn-outline-darkgrey">Get Started</a>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-lg-4 col-md-4 mx-sm-auto">

                                    <div class="pricing-plan box-shadow">
                                        <div class="plan-name">
                                            <h3>
                                                Beginner Driving Courses
                                            </h3>
                                        </div>
                                        <div class="price-wrap color-main">
                                            <span class="plan-price">92</span><span
                                                class="plan-decimals">95</span><span
                                                class="plan-sign">usd</span>
                                        </div>
                                        <div class="plan-description">
                                            0,2% per transaction
                                        </div>
                                        <div class="plan-features">
                                            <ul class="list-styled-caret">
                                                <li>5 1-hour lessons</li>
                                                <li>FREE choice of instructor</li>
                                                <li>FREE final exam</li>
                                            </ul>
                                        </div>
                                        <div class="plan-button">
                                            <a href="#" class="btn btn-outline-darkgrey">Get Started</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="divider-55 divider-md-20 divider-xl-90"></div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>

            <section id="video" class="ls">

                <div class="cover-image s-cover-left"></div><!-- half image background element -->
                <div class="container">
                    <div class="row align-items-center c-gutter-60">
                        <div class="col-md-12 col-lg-6">
                            <div class="item-media">
                                <div class="embed-responsive">
                                    <a href="images/square/home-video.jpg" class="photoswipe-link" data-width="800"
                                        data-height="800" data-iframe="//www.youtube.com/embed/mcixldqDIEQ">
                                        <img src="images/home-video.jpg" alt="">
                                    </a>
                                </div>
                                <!-- <iframe width="1000" height="460" src="https://www.youtube.com/embed/mcixldqDIEQ" allowfullscreen></iframe> -->
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-6">


                            <div class="divider-30 divider-md-70 divider-xl-75"></div>


                            <h3 class="mt-0"><span class="color-main">Ready For</span> A Safe, Fun
                                Driving Experience?</h3>
                            <p class="after-title subtitle">The school offers the following services for teenage
                                first-time drivers, new adult learners and existing drivers with lapsed licenses.</p>
                            <div class="row c-gutter-30">
                                <div class="col-md-12 col-lg-6">
                                    <div class="icon-box">
                                        <div class="media">
                                            <div class="icon-styled color-main fs-24">
                                                <i class="ico icon-shield fs-40"></i>
                                            </div>

                                            <div class="media-body">
                                                <h6 class="fw-300">
                                                    Best Safety Measures
                                                </h6>
                                                <p>
                                                    Our Instructors are Highly Trained in the latest Safety
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="divider-30 divider-lg-42"></div>
                                    <div class="icon-box">
                                        <div class="media">
                                            <div class="icon-styled color-main fs-24">
                                                <i class="ico icon-event fs-40"></i>
                                            </div>

                                            <div class="media-body">
                                                <h6 class="fw-300">
                                                    Perfect Timing
                                                </h6>
                                                <p>
                                                    Now is the perfect time to start your In Class.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="divider-30 d-lg-none d-md-block"></div>
                                <div class="col-md-12 col-lg-6">
                                    <div class="icon-box">
                                        <div class="media">
                                            <div class="icon-styled color-main fs-24">
                                                <i class="ico icon-steering-wheel fs-40"></i>
                                            </div>

                                            <div class="media-body">
                                                <h6 class="fw-300">
                                                    Class Formats
                                                </h6>
                                                <p>
                                                    We offer In Classroom Drivers Education.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="divider-30 divider-lg-42"></div>
                                    <div class="icon-box">
                                        <div class="media">
                                            <div class="icon-styled color-main fs-24">
                                                <i class="ico icon-credit-card fs-40"></i>
                                            </div>

                                            <div class="media-body">
                                                <h6 class="fw-300">
                                                    Affordable Fee
                                                </h6>
                                                <p>
                                                    We know this process can be expensive.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="divider-0 divider-md-0 divider-xl-75"></div>
                            </div>
                        </div>
                    </div>
                </div>


            </section>

            <section id="section_testimonials" class="container-fluids-mw ls">
                <div class="container-fluid">
                    <div class="row c-gutter-50 mobile-padding-normal">
                        <div class="divider-70 divider-xl-140"></div>
                        <div class="col-md-12">
                            <div class="text-center">
                                <h3>What <span class="color-main">Client Says</span><br>About Us</h3>
                                <p class="after-title subtitle width-xl-50 width-100">The school offers the following
                                    services for Teenage first-time drivers, new adult learners and existing drivers
                                    with lapsed licenses.</p>
                            </div>

                            <div class="testimonials-slider owl-carousel mt-60" data-autoplay="true" data-loop="true"
                                data-responsive-lg="3" data-responsive-md="3" data-responsive-sm="1"
                                data-responsive-xs="1" data-nav="false" data-dots="false" data-margin="50"
                                data-center="true">
                                <div class="quote-item">
                                    <div class="quote-image">
                                        <img src="images/team/testimonials_01.png" alt="">
                                    </div>
                                    <p>
                                        <i class="ico icon-left-quote"></i>
                                        <em>
                                            Stephanie Wall is dedicated to make sure all individuals have an equally
                                            great experience with traffic school. Her devotion to the company is
                                            evident, with the countless amount of positive experiences.
                                        </em>
                                    </p>
                                    <footer>
                                        <cite class="color-dark">Sidney W. Yarber</cite>
                                        <span class="color-main">Manager</span>
                                    </footer>
                                    <!--<p class="color-darkgrey">-->
                                    <!--Sidney W. Yarber-->
                                    <!--</p>-->
                                    <!--<p class="color-main">-->
                                    <!--Manager-->
                                    <!--</p>-->
                                </div>


                                <div class="quote-item">
                                    <div class="quote-image">
                                        <img src="images/team/testimonials_02.png" alt="">
                                    </div>
                                    <p>
                                        <i class="ico icon-left-quote"></i>
                                        <em>
                                            As founder of Drively, Abdi Moalim draws on more then 5 years of business
                                            management experience. He graduated from San Diego State University with a
                                            degree in Political Science
                                        </em>
                                    </p>
                                    <footer>
                                        <cite class="color-dark">Terence M. Witzel</cite>
                                        <span class="color-main">Businessman</span>
                                    </footer>
                                </div>


                                <div class="quote-item">
                                    <div class="quote-image">
                                        <img src="images/team/testimonials_03.png" alt="">
                                    </div>
                                    <p>
                                        <i class="ico icon-left-quote"></i>
                                        <em>
                                            John is a fantastic instructor and made him feel really comfortable. They
                                            focused on everything important and when it came test time my nephew wasn't
                                            nervous at all because he had been trained so well.
                                        </em>
                                    </p>
                                    <footer>
                                        <cite class="color-dark">Kayla H. Seaman</cite>
                                        <span class="color-main">Co & Founder</span>
                                    </footer>
                                </div>

                            </div><!-- .testimonials-slider -->

                        </div>
                        <div class="divider-50 divider-xl-120"></div>
                    </div>
                </div>
            </section>

            <section id="countdown-section" class="ds">
                <div class="container">
                    <div class="row c-gutter-50 mobile-padding-normal">
                        <div class="divider-70 divider-xl-90"></div>

                        <div class="col-sm-12 col-md-6 col-lg-3 text-center">
                            <h3 class="counter-wrap color-main">
                                <span class="counter" data-from="0" data-to="1489" data-speed="1500">0</span>
                                <span class="counter-add">+</span>
                            </h3>

                            <p>Graduates received the right</p>
                        </div>

                        <div class="divider-40 d-sm-block d-md-none"></div>

                        <div class="col-sm-12 col-md-6 col-lg-3 text-center">
                            <h3 class="counter-wrap color-main">
                                <span class="counter" data-from="0" data-to="94" data-speed="2500">0</span>
                            </h3>

                            <p>Years on the market</p>
                        </div>

                        <div class="divider-40 d-md-block d-lg-none "></div>

                        <div class="col-sm-12 col-md-6 col-lg-3 text-center">
                            <h3 class="counter-wrap color-main">
                                <span class="counter" data-from="0" data-to="96" data-speed="3000">0</span>
                            </h3>

                            <p>Training hours</p>
                        </div>

                        <div class="divider-40 d-sm-block d-md-none"></div>

                        <div class="col-sm-12 col-md-6 col-lg-3 text-center">
                            <h3 class="counter-wrap color-main">
                                <span class="counter" data-from="0" data-to="99" data-speed="2800">0</span>
                            </h3>

                            <p>Number of teachers</p>
                        </div>

                        <div class="divider-80 divider-xl-100"></div>
                    </div>
                </div>
            </section>

            <section class="ls s-py-70 s-py-xl-141">
                <div class="container">
                    <div class="row c-gutter-135 mobile-padding-normal">

                        <div class="col-md-12">
                            <div class="text-center mb-45">
                                <h3>How <span class="color-main">Shoud Get</span><br>Driving Lessons</h3>
                                <p class="subtitle width-100 width-xl-60">The school offers the following services for
                                    Teenage first-time drivers, new adult learners and existing drivers with lapsed
                                    licenses.</p>
                            </div>

                            <div class="row">
                                <div class="col-md-4 col-sm-12">
                                    <h1 class="color-main fw-500"><i class="ico icon-circle fs-8"></i>01</h1>
                                    <h6 class="color-dark mt-28 after-title2">Choosing A Driving School</h6>
                                    <p>The right driving school is accredited according to state laws and will prepare
                                        you to be a safe</p>
                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <div class="divider-30 divider-md-0 divider-xl-0"></div>
                                    <h1 class="grey-color fw-500 mt-0"><i class="ico icon-circle fs-8"></i>02</h1>
                                    <h6 class="color-dark mt-28 after-title2">Driving Basics</h6>
                                    <p>When you first start learning to drive, it can seem a little overwhelming. We
                                        know that, but don't worry.</p>
                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <div class="divider-30 divider-md-0 divider-xl-0"></div>
                                    <h1 class="grey-color fw-500 mt-0"><i class="ico icon-circle fs-8"></i>03</h1>
                                    <h6 class="color-dark mt-28 after-title2">Road Test Preparation</h6>
                                    <p>Practice makes perfect! We know you've heard that before, but it's especially
                                        true with driving.</p>
                                </div>
                            </div>
                        </div>
                        <div class="divider-5 d-lg-block d-xl-5"></div>
                    </div>
                </div>
            </section>

            <section id="information-block" class="ds s-pt-xl-90 s-pb-xl-94 s-pt-60 s-pb-60">
                <div class="container">
                    <div class="row c-gutter-50">

                        <div class="divider-10 divider-lg-10 divider-xl-5"></div>
                        <div class="col-md-9 col-lg-6 col-sm-12">
                            <h3 class="after-title">Just looking <span class="color-main">for lessons?</span>
                            </h3>

                            <p class="subtitle">Whether you are an existing driver or a new driver who needs help
                                preparing for road test we have package options that can help you.</p>
                            <div class="mt-45">
                                <button type="button" class="btn btn-outline-darkgrey small fw-400">Get
                                    Started</button><span class="m-25"> or </span><a href="#"
                                    class="btn btn-link">Learn more</a>
                            </div>
                            <div class="divider-20 divider-lg-20 divider-xl-5"></div>
                        </div>


                    </div>
                </div>
            </section>

            <section id="blog" class="ls s-py-70 s-py-xl-111">
                <div class="container">
                    <div class="row">
                        <div class="divider-30 d-none d-xl-block"></div>
                        <div class="col-md-12">
                            <div class="text-center mb-55">
                                <h3><span class="color-main">Drively</span> Blog</h3>

                                <p class="subtitle width-100 width-xl-60">The school offers the following services for
                                    Teenage first-time
                                    drivers, new adult learners and existing drivers with lapsed licenses.</p>
                            </div>

                            <div class="row justify-content-center">
                                <div class="col-lg-4 col-md-6">
                                    <article
                                        class="content-padding post type-post status-publish format-standard has-post-thumbnaills box-shadow">
                                        <div class="item-media post-thumbnail">
                                            <img src="images/blog/01.jpg" alt="">

                                            <div class="media-links">
                                                <a class="abs-link" title="" href="blog-left.html"></a>
                                            </div>
                                        </div>
                                        <!-- .post-thumbnail -->
                                        <div class="item-content grey-bg">
                                            <header class="entry-header">
                                                <h4 class="entry-title">
                                                    <a href="blog-left.html" rel="bookmark">
                                                        Ready For A Safe, Fun Driving
                                                    </a>
                                                </h4>
                                            </header>
                                            <!-- .entry-header -->
                                            <div class="entry-content">
                                                <p>If you have a moving violation, going to traffic school...</p>
                                            </div>
                                            <!-- .entry-content -->
                                            <div class="entry-meta">
                                                <span class="byline d-flex justify-content-between">
                                                    <span class="posted-on">
                                                        <a href="#" class="color-dark">
                                                            <i class="ico icon-clock"></i>
                                                            02 Jan 19
                                                        </a>
                                                    </span>
                                                    <span class="author-post">
                                                        <a href="#comments" class="color-dark">
                                                            <i class="ico icon-profile"></i>
                                                            Emma Johnson
                                                        </a>
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                        <!-- .item-content -->
                                    </article>
                                </div>
                                <div class="divider-60 d-block d-md-none d-xl-none"></div>
                                <div class="col-lg-4 col-md-6">
                                    <article
                                        class="content-padding post type-post status-publish format-standard has-post-thumbnaills box-shadow">
                                        <div class="item-media post-thumbnail">
                                            <img src="images/blog/02.jpg" alt="">

                                            <div class="media-links">
                                                <a class="abs-link" title="" href="blog-left.html"></a>
                                            </div>
                                        </div>
                                        <!-- .post-thumbnail -->
                                        <div class="item-content grey-bg">
                                            <header class="entry-header">
                                                <h4 class="entry-title">
                                                    <a href="blog-left.html" rel="bookmark">
                                                        How to Pick a Driving School
                                                    </a>
                                                </h4>
                                            </header>
                                            <!-- .entry-header -->
                                            <div class="entry-content">
                                                <p>Enjoy reading? Well then our booklet course is just for you!</p>
                                            </div>
                                            <!-- .entry-content -->
                                            <div class="entry-meta">
                                                <span class="byline d-flex justify-content-between">
                                                    <span class="posted-on">
                                                        <a href="#" class="color-dark">
                                                            <i class="ico icon-clock"></i>
                                                            22 Feb 19
                                                        </a>
                                                    </span>
                                                    <span class="author-post">
                                                        <a href="#comments" class="color-dark">
                                                            <i class="ico icon-profile"></i>
                                                            Sally Greer
                                                        </a>
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                        <!-- .item-content -->
                                    </article>
                                </div>
                                <div class="divider-60 d-md-block d-lg-none "></div>
                                <div class="col-lg-4 col-md-6">
                                    <article
                                        class="content-padding post type-post status-publish format-standard has-post-thumbnaills box-shadow">
                                        <div class="item-media post-thumbnail">
                                            <img src="images/blog/03.jpg" alt="">

                                            <div class="media-links">
                                                <a class="abs-link" title="" href="blog-left.html"></a>
                                            </div>
                                        </div>
                                        <!-- .post-thumbnail -->
                                        <div class="item-content grey-bg">
                                            <header class="entry-header">
                                                <h4 class="entry-title">
                                                    <a href="blog-left.html" rel="bookmark">
                                                        Drivers License Rules
                                                    </a>
                                                </h4>
                                            </header>
                                            <!-- .entry-header -->
                                            <div class="entry-content">
                                                <p>Why should I attend traffic school? By attending a traffic violator
                                                    school</p>
                                            </div>
                                            <!-- .entry-content -->
                                            <div class="entry-meta">
                                                <span class="byline d-flex justify-content-between">
                                                    <span class="posted-on">
                                                        <a href="#" class="color-dark">
                                                            <i class="ico icon-clock"></i>
                                                            12 Jan 19
                                                        </a>
                                                    </span>
                                                    <span class="author-post">
                                                        <a href="#comments" class="color-dark">
                                                            <i class="ico icon-profile"></i>
                                                            Nathan Baldwin
                                                        </a>
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                        <!-- .item-content -->
                                    </article>
                                </div>
                            </div>
                        </div>
                        <div class="divider-10 divider-lg-10 divider-xl-40"></div>
                    </div>
                </div>
            </section>

            <footer class="page_footer ds s-pt-77 s-pb-60 c-gutter-60">
                <div class="container">
                    <div class="row">
                        <div class="divider-20 d-none d-xl-block"></div>

                        <div class="col-md-6 col-xl-4 animate" data-animation="fadeInUp">

                            <div class="widget widget_text ">

                                <img src="images/logo.png" alt="">
                                <p>The Leader in Defensive Driving, Traffic School & Drivers Education for both Teens
                                    and Adults.</p>
                                <p class="copyright"><i>Example.com Copyright <span
                                            class="copyright_year">&copy;2019</span></i></p>
                            </div>
                        </div>

                        <div class="col-md-6 col-xl-2 animate" data-animation="fadeInUp">
                            <div class="widget widget_working_hours">
                                <h3>Company</h3>
                                <ul class="list-not-style">

                                    <li>
                                        <a href="#">About us</a>
                                    </li>

                                    <li>
                                        <a href="#">Courses</a>
                                    </li>

                                    <li>
                                        <a href="#">Instructors</a>
                                    </li>

                                    <li>
                                        <a href="#">Pricing</a>
                                    </li>

                                    <li>
                                        <a href="#">Contact us</a>
                                    </li>

                                </ul>
                            </div>
                        </div>


                        <div class="col-md-6 col-xl-3 animate" data-animation="fadeInUp">
                            <div class="widget widget_icons_list">
                                <h3>Contacts</h3>

                                <div class="media side-icon-box">
                                    <div class="icon-styled color-main fs-14">
                                        <i class="ico icon-facebook-placeholder-for-locate-places-on-maps"></i>
                                    </div>
                                    <p class="media-body">USA, 3280 Cabell Avenue Alexandria, VA 22301</p>
                                </div>
                                <div class="media side-icon-box">
                                    <div class="icon-styled color-main fs-14">
                                        <i class="ico icon-phone-receiver"></i>
                                    </div>
                                    <p class="media-body">Tel.: +1 703-518-6099</p>
                                </div>
                                <div class="media side-icon-box">
                                    <div class="icon-styled color-main fs-14">
                                        <i class="fa fa-envelope"></i>
                                    </div>
                                    <p class="media-body">
                                        <a href="#"><span class="__cf_email__"
                                                data-cfemail="20494e464f605553545544490e434f4d">[email&#160;protected]</span></a>
                                    </p>
                                </div>

                            </div>
                        </div>

                        <div class="col-md-6 col-xl-3 animate" data-animation="fadeInUp">
                            <div class="widget widget_mailchimp">

                                <h3 class="widget-title">Subscribe</h3>

                                <p>
                                    Get latest updates and offers
                                </p>

                                <form class="signup" action="/">
                                    <label for="mailchimp_email">
                                        <span class="screen-reader-text">Subscribe:</span>
                                    </label>

                                    <input id="mailchimp_email" name="email" type="email"
                                        class="form-control mailchimp_email" placeholder="Enter Your E-mail">

                                    <button type="submit" class="search-submit">
                                        <span class="screen-reader-text">Subscribe</span>
                                    </button>
                                    <div class="response"></div>
                                </form>

                            </div>
                            <div class="row c-gutter-30">
                                <div class="col-sm-12 col-xl-6">
                                    <a href="#" class="fa fa-facebook" title="facebook"><span>facebook</span></a>
                                    <a href="#" class="fa fa-twitter" title="twitter"><span>twitter</span></a>
                                </div>
                                <div class="col-sm-12 col-xl-6">
                                    <a href="#" class="fab fa-linkedin-in" title="linkedin"><span>linkedin</span></a>
                                    <a href="#" class="fa fa-google" title="google"><span>google</span></a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </footer>


        </div><!-- eof #box_wrapper -->
    </div><!-- eof #canvas -->


    {{-- <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>___scripts_5___ --}}
    <script src="{{ asset('front-end/js/main.js') }}"></script>
    {{-- <script src="{{ asset('front-end/js/switcher.js') }}"></script> --}}

</body>

</html>
