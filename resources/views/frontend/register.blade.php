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
    <link rel="icon" href="{{ asset('assets/images/highness_logo.png') }}" type="image/gif" />
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
        <div class="loader"><img src="{{ asset('assets/images/loding_gif.gif') }}" alt="#" /></div>
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
                                            <li><a href="/">Home</a></li>

                                            <li><a href="/about">About Us</a></li>
                                            <li><a href="/portfolio">Portfolio</a></li>
                                            <li><a href="/services">Expertise</a></li>
                                            <li><a href="/gallery">Gallery</a></li>
                                            <li><a href="/contact">Contact</a></li>
                                            <li class="active"><a href="/register">Register</a></li>

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
                        <h2>Register</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="register_container">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <form class="contact_bg">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="titlepage">
                                    <h2 class="text-white" id="login_title">Register As Artist</h2>
                                </div>
                                <div class="col-md-12">
                                    <input class="contactus" placeholder="Your Name" type="text" name="Your Name" />
                                </div>
                                <div class="col-md-12">
                                    <input class="contactus" placeholder="Your Email" type="text"
                                        name="Your Email" />
                                </div>
                                <div class="col-md-12">
                                    <input class="contactus" placeholder="Your Phone" type="text"
                                        name="Your Phone" />
                                </div>
                                <div class="col-md-12">
                                    <input class="contactus" placeholder="Your Address" type="text"
                                        name="Your Address" />
                                </div>
                                <div class="col-md-12">
                                    <textarea class="textarea" placeholder="Message" type="text" name="Message"></textarea>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <button class="send">Send</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div id="register_img" class="col-md-6">
                    <img src="{{ asset('assets/images/events_register.jpg') }}" alt="">
                </div>
            </div>

            <div class="row">
                <div id="register_img" class="col-md-6">
                    <img src="{{ asset('assets/images/events_register_1.jpg') }}" alt="">
                </div>
                <div class="col-md-6">
                    <form class="contact_bg">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="titlepage">
                                    <h2 class="text-white" id="login_title">Register For Events</h2>
                                </div>
                                <div class="col-md-12">
                                    <input class="contactus" placeholder="Your Name" type="text"
                                        name="Your Name" />
                                </div>
                                <div class="col-md-12">
                                    <input class="contactus" placeholder="Your Email" type="text"
                                        name="Your Email" />
                                </div>
                                <div class="col-md-12">
                                    <input class="contactus" placeholder="Your Phone" type="text"
                                        name="Your Phone" />
                                </div>
                                <div class="col-md-12">
                                    <input class="contactus" placeholder="Your Address" type="text"
                                        name="Your Address" />
                                </div>
                                <div id="events_selection" class="col-md-12">
                                    <input type="text" class="contactus" placeholder="Enter Events">
                                    {{-- <select class="contactus">
                                        <option class="active" value="1">Choose Events</option>
                                        <option value="2">Corporate Events</option>
                                        <option value="3">Wedding Planning</option>
                                        <option value="4">Birthday Events</option>
                                        <option value="5">Team Building</option>
                                        <option value="6">Conference</option>
                                        <option value="7">Exahibition</option>
                                        <option value="8">Product Lunch</option>
                                    </select> --}}
                                </div>
                                <div class="col-md-12">
                                    <textarea class="textarea" placeholder="Message" type="text" name="Message"></textarea>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <button class="send">Send</button>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <x-footer />
</body>

</html>
