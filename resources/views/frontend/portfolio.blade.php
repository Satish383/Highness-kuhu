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
                                            <li><a href="/">Home</a></li>

                                            <li><a href="/about">About Us</a></li>
                                            <li class="active"><a href="/portfolio">Portfolio</a></li>
                                            <li><a href="/services">Expertise</a></li>
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
                        <h2>Portfolio</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="gallery" class="Gallery">
        <div class="container">
            <div class="row display_boxflex">
                <div class="col-xl-12 col-lg-12 col-md-8 col-sm-12" id="portfolio_elements">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 margi_bott">
                            <div class="card">
                                <img src="{{ asset('assets/images/corporate.jpg') }}" alt="Avatar" style="width:100%">
                                <div class="container">
                                    <h3><b>A corporate portfolio is the collection of products and services a business
                                            offers.</b></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 margi_bott">
                            <div class="card">
                                <img src="{{ asset('assets/images/product_lunch.jpg') }}" alt="Avatar"
                                    style="width:100%; height:339px;">
                                <div class="container">
                                    <h3><b>New-product introductions are an important component of the product
                                            portfolio.</b></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 margi_bott1">
                            <div class="card">
                                <img src="{{ asset('assets/images/team_building.jpg') }}" alt="Avatar"
                                    style="width:100%">
                                <div class="container">
                                    <h3><b>Team building is an ongoing process that helps a work group evolve into a
                                            cohesive unit.</b></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="card">
                                <img src="{{ asset('assets/images/conferences.jpg') }}" alt="Avatar"
                                    style="width:100%">
                                <div class="container">
                                    <h3><b>A conference is generally understood as a meeting of several people to
                                            discuss a particular topic.</b></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12" style="margin-top: 2%;">
                            <div class="card">
                                <img src="{{ asset('assets/images/birthday.jpg') }}" alt="Avatar"
                                    style="width:100%">
                                <div class="container">
                                    <h3><b>Birthdays are a very special day for everyone who celebrates it. </b></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12" style="margin-top: 2%;">
                            <div class="card">
                                <img src="{{ asset('assets/images/exhibition.jpg') }}" alt="Avatar"
                                    style="width:100%;  height:346px;">
                                <div class="container">
                                    <h3><b>An exhibition, in the most general sense, is an organized presentation of
                                            items.</b></h3>
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
