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
                                            <li><a href="/portfolio">Portfolio</a></li>
                                            <li class="active"><a href="/services">Expertise</a></li>
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
                        <h2>Expertise</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="about" class="about">
        <div class="container">
            <div class="row display_boxflex">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="about-box">
                        <figure><img src="{{ asset('assets/images/corporate.jpg') }}" alt="#" /></figure>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="about-box" id="corporate_events">
                        <h2>Corporate Events</h2>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a
                            page when looking at its layout. The point of using Lorem Ipsum is that it has a
                            more-or-less normal distribution of letters, as opposed to using 'Content here, content
                            here', making it look. Corporate events are an effective way for companies to engage with
                            employees or customers.
                            They can have various purposes, from announcing important changes to creating networking
                            opportunities. A corporate event is an event sponsored by a company.</p>
                        {{-- <a href="Javascript:void(0)">Read More</a> --}}
                        {{-- <a href="/corporate_events">Read More</a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="about" class="about">
        <div class="container">
            <div class="row display_boxflex">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="about-box" id="wedding_planning">
                        <h2>Wedding Planning</h2>
                        <p>A wedding planner is a professional who assists with the design, planning and management of a
                            client's wedding. Weddings are significant events in people's lives and as such, couples are
                            often willing to spend considerable amount of money to ensure that their weddings are
                            well-organized. It is a long established fact that a reader will be distracted by the
                            readable content of a
                            page when looking at its layout. The point of using Lorem Ipsum is that it has a
                            more-or-less normal distribution of letters, as opposed to using 'Content here, content
                            here', making it look</p>
                        {{-- <a href="Javascript:void(0)">Read More</a> --}}
                        {{-- <a href="#">Read More</a> --}}
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="about-box">
                        <figure><img src="{{ asset('assets/images/wedding.jpeg') }}" alt="#"
                                style="height: 360px;" /></figure>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="about" class="about">
        <div class="container">
            <div class="row display_boxflex">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="about-box">
                        <figure><img src="{{ asset('assets/images/team_building.jpg') }}" alt="#" /></figure>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="about-box" id="team_building">
                        <h2>Team Building</h2>
                        <p>Team building is an ongoing process that helps a work group evolve into a cohesive unit. The
                            team members not only share expectations for accomplishing group tasks, but trust and
                            support one another and respect one another's individual differences. It is a long
                            established fact that a reader will be distracted by the readable content of a
                            page when looking at its layout. The point of using Lorem Ipsum is that it has a
                            more-or-less normal distribution of letters, as opposed to using 'Content here, content
                            here', making it look</p>
                        {{-- <a href="Javascript:void(0)">Read More</a> --}}
                        {{-- <a href="#">Read More</a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="about" class="about">
        <div class="container">
            <div class="row display_boxflex">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="about-box" id="exhibition">
                        <h2>Exhibition</h2>
                        <p>An exhibition is an organized event in which a collection of special objects can be viewed by
                            the public. The objects are often brought together from many places for the period of the
                            exhibition. The objects on show are called exhibits. It is a long established fact that a
                            reader will be distracted by the readable content of a
                            page when looking at its layout. The point of using Lorem Ipsum is that it has a
                            more-or-less normal distribution of letters, as opposed to using 'Content here, content
                            here', making it look</p>
                        {{-- <a href="Javascript:void(0)">Read More</a> --}}
                        {{-- <a href="#">Read More</a> --}}
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="about-box">
                        <figure><img src="{{ asset('assets/images/exhibition.jpg') }}" alt="#" /></figure>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="about" class="about">
        <div class="container">
            <div class="row display_boxflex">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="about-box">
                        <figure><img src="{{ asset('assets/images/conferences.jpg') }}" alt="#" /></figure>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="about-box" id="conference">
                        <h2>Conference</h2>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a
                            page when looking at its layout. The point of using Lorem Ipsum is that it has a
                            more-or-less normal distribution of letters, as opposed to using 'Content here, content
                            here', making it look</p>
                        {{-- <a href="Javascript:void(0)">Read More</a> --}}
                        {{-- <a href="#">Read More</a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="about" class="about">
        <div class="container">
            <div class="row display_boxflex">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="about-box" id="birthday_events">
                        <h2>Birthday Events</h2>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a
                            page when looking at its layout. The point of using Lorem Ipsum is that it has a
                            more-or-less normal distribution of letters, as opposed to using 'Content here, content
                            here', making it look</p>
                        {{-- <a href="Javascript:void(0)">Read More</a> --}}
                        {{-- <a href="#">Read More</a> --}}
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="about-box">
                        <figure><img src="{{ asset('assets/images/birthday.jpg') }}" alt="#" /></figure>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="about" class="about">
        <div class="container">
            <div class="row display_boxflex">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="about-box">
                        <figure><img src="{{ asset('assets/images/product_lunch.jpg') }}" alt="#" /></figure>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="about-box" id="product_lunch">
                        <h2>Product Launches</h2>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a
                            page when looking at its layout. The point of using Lorem Ipsum is that it has a
                            more-or-less normal distribution of letters, as opposed to using 'Content here, content
                            here', making it look</p>
                        {{-- <a href="Javascript:void(0)">Read More</a> --}}
                        {{-- <a href="#">Read More</a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <x-footer />
</body>

</html>
