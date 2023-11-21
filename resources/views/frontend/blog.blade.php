<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Highness Events</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- fevicon -->
    <link rel="icon" href="images/{{ asset('assets/highness_logo.png') }}" type="image/gif" />
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- style css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.mCustomScrollbar.min.css') }}">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">
    <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout contineer_page">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="{{ asset('assets/images/loading.gif') }}" alt="#" /></div>
    </div>
    <!-- end loader -->
    <!-- header -->
    <header id="main-header">
        <!-- header inner -->
        <div>
            <div class="header stuck">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-3 col logo_section">
                            <div class="full">
                                <div class="center-desk">
                                    <div class="logo">
                                        <a href="/"><img src="{{ asset('assets/images/highness_logo.png') }}"
                                                alt="#" /></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10 col-md-10 col-sm-9">
                            <div class="menu-area">
                                <div class="limit-box">
                                    <nav class="main-menu">
                                        <ul class="menu-area-main">
                                            <li class="active"><a href="/">Home</a></li>

                                            <li><a href="/about">About Us</a></li>
                                            <li><a href="/portfolio">Portfolio</a></li>
                                            <li><a href="/services">Services</a></li>
                                            <li><a href="/gallery">Gallery</a></li>
                                            <li><a href="/contact">Contact</a></li>
                                            <li><a href="/register">Register</a></li>

                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end header inner -->

            <!-- end header -->
        </div>
    </header>


    <div class="backgro_mh">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heding">
                        <h2>Blogs</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="gallery" class="Gallery">
        <div class="container">
            <div class="row display_boxflex">
                <div class="col-xl-12 col-lg-12 col-md-8 col-sm-12" id="blog_elements">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 margi_bott">
                            <div class="card">
                                <img src="{{ asset('assets/images/corporate.jpg') }}" alt="Avatar" style="width:100%">
                                <div class="container">
                                    <a href="#"><i class="fa fa-bookmark" aria-hidden="true"></i>Conference
                                        Events</a>
                                    <h3><b>How Important Is Event Technology</b></h3>
                                    <p>In t he case of something turns out badly, it's just a tweet or Facebook live
                                        video far from being posted on the web and spreading.</p><br>
                                    <a id="blog_button" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 margi_bott">
                            <div class="card">
                                <img src="{{ asset('assets/images/product_lunch.jpg') }}" alt="Avatar"
                                    style="width:100%; height:339px;">
                                <div class="container">
                                    <a href="#"><i class="fa fa-bookmark" aria-hidden="true"></i>Conference
                                        Events</a>
                                    <h3><b>5 Reasons Why You Should Pursue A Career In Event Management</b></h3>
                                    <p>The Event Management industry has come a long way from what it used to be.</p>
                                    <br>
                                    <a id="blog_button" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 margi_bott1">
                            <div class="card">
                                <img src="{{ asset('assets/images/team_building.jpg') }}" alt="Avatar"
                                    style="width:100%">
                                <div class="container">
                                    <a href="#"><i class="fa fa-bookmark" aria-hidden="true"></i>Blog</a>
                                    <h3><b>Event Industry In India</b></h3>
                                    <p>Event management is a form of organizing an occasion into an elegant event that
                                        has recently become very popular in India. The event management industry gives a
                                        huge opportunity to young talented peoples who are excellent in organizing.</p>
                                    <br>
                                    <a id="blog_button" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="card">
                                <img src="{{ asset('assets/images/conferences.jpg') }}" alt="Avatar"
                                    style="width:100%">
                                <div class="container">
                                    <a href="#"><i class="fa fa-bookmark" aria-hidden="true"></i>Blog</a>
                                    <h3><b>Crowd Streaming</b></h3>
                                    <p>One of the best ways to make a name for you in the event industry is to
                                        self-educate and always be on trend. You don’t want to waste your time following
                                        fads that never amount to much but staying up-to-date on what clients are
                                        interested in.</p><br>
                                    <a id="blog_button" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12" style="margin-top: 2%;">
                            <div class="card">
                                <img src="{{ asset('assets/images/birthday.jpg') }}" alt="Avatar"
                                    style="width:100%; height:272px;">
                                <div class="container">
                                    <a href="#"><i class="fa fa-bookmark" aria-hidden="true"></i>Blog</a>
                                    <h3><b>Event Management - What Is The Most Important Asset For Any Organization?</b>
                                    </h3>
                                    <p>An event organizer whether they're in-house or are acquired as specialists
                                        assumes a basic part in bringing an incentive from an organization's kin.
                                        Corporate events are a standout amongst the most essential discussions for
                                        organizations, since it gives a chance to show the best thoughts from inside an
                                        organization to administration and different divisions.</p><br>
                                    <a id="blog_button" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12" style="margin-top: 2%;">
                            <div class="card">
                                <img src="{{ asset('assets/images/exhibition.jpg') }}" alt="Avatar"
                                    style="width:100%;  height:346px;">
                                <div class="container">
                                    <a href="#"><i class="fa fa-bookmark" aria-hidden="true"></i>Blog</a>
                                    <h3><b>How To Make Attendees Entertained</b></h3>
                                    <p>Making an important participant experience ought to be the best need of any
                                        occasion. A paramount occasion raises your validity, empowers future occasion
                                        development, and grows your impact.</p><br>
                                    <a id="blog_button" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- end Gallery -->

    <x-footer />
</body>

</html>
