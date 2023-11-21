<x-header />

<header>
    <div class="header-top">
        <section class="slider_section">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="container">
                            <div class="carousel-caption">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="text-bg">
                                            <span>The Best</span>
                                            <h1>EVENTS ORGNIZER</h1>
                                            <p>
                                                Soul of Highness Entertainment is a platform-giving foundation that
                                                provides you with the best platform for all kinds of talents we start
                                                with small open mic events and gradually expand to larger showcases and
                                                talent competitions. Our mission is to discover, nurture, and promote
                                                emerging artists from various fields such as music, comedy, poetry, and
                                                more.
                                            </p>
                                            {{-- <a href="#">Events & Orgnization</a>
                                            <a href="#">Buy Tickets </a> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="container">
                            <div class="carousel-caption">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="text-bg">
                                            <span>The Best</span>
                                            <h1>EVENTS ORGNIZER</h1>
                                            <p>
                                                Soul of Highness Entertainment is a platform-giving foundation that
                                                provides you with the best platform for all kinds of talents we start
                                                with small open mic events and gradually expand to larger showcases and
                                                talent competitions. Our mission is to discover, nurture, and promote
                                                emerging artists from various fields such as music, comedy, poetry, and
                                                more.
                                            </p>
                                            {{-- <a href="#">Events & Orgnization</a><a href="#">Buy
                                                Tickets
                                            </a> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="container">
                            <div class="carousel-caption">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="text-bg">
                                            <span>The Best</span>
                                            <h1>EVENTS ORGNIZER</h1>
                                            <p>
                                                Soul of Highness Entertainment is a platform-giving foundation that
                                                provides you with the best platform for all kinds of talents we start
                                                with small open mic events and gradually expand to larger showcases and
                                                talent competitions. Our mission is to discover, nurture, and promote
                                                emerging artists from various fields such as music, comedy, poetry, and
                                                more.
                                            </p>
                                            {{-- <a href="#">Events & Orgnization</a>
                                            <a href="#">Buy Tickets </a> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                    <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
                </a>
                <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                    <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                </a>
            </div>
        </section>
    </div>
    {{-- <div class="login_banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-xl-6">
                    <p>ARE YOU LOOKING FOR A EVENTS PLANNER ?</p>
                </div>
                <div class="col-lg-6 col-xl-6">
                    <form action="">
                        <label for="name">NAME</label>
                        <input type="text" id="name" placeholder="Name">

                        <label for="number">MOBILE</label>
                        <input type="text" id="number" placeholder="Number">

                        <button type="button">SUBMIT</button>
                    </form>
                </div>
            </div>
        </div>
    </div> --}}
    <section id="event-search-section" class="event-search-section clearfix"
        style="padding: 50px 0px; background-color: #042c25; margin-top:-2px;">
        <div class="container">
            <div class="row">

                <!-- section-title - start -->
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="section-title" style="margin-top: 10%">
                        <small class="sub-title"><b>Are you looking for a events planner ?</b></small>
                        <!-- <h2 class="big-title" style="font-size: 30px">  <strong></strong></h2> -->
                    </div>
                </div>
                <!-- section-title - end -->

                <!-- search-form - start -->
                <div class="col-lg-8 col-md-12 col-sm-12">
                    <div class="search-form form-wrapper">
                        <form action="mail.php" method="post">
                            <input type="hidden" name="message" value="looking for one of your service">
                            <ul>
                                <li>
                                    <span class="title">Name</span>
                                    <div class="form-item">
                                        <input type="search" placeholder="name" name="name">
                                    </div>
                                </li>
                                <li>
                                    <span class="title">Mobile</span>
                                    <div class="form-item">
                                        <input type="search" placeholder="number" name="phone">
                                    </div>
                                </li>
                                <li>
                                    <button type="button" class="submit-btn" name="submit">Submit</button>
                                </li>
                            </ul>

                        </form>
                    </div>
                </div>
                <!-- search-form - end -->

            </div>
        </div>
    </section>
</header>

<!-- about  -->
<div class="about">
    <div id="carousel_head" class="container">
        <h2>OUR EXPERTISE</h2>
        {{-- <div class="row display_boxflex">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <div class="about-box">
                    <h2>About Us</h2>
                    <p>
                        It is a long established fact that a reader will be distracted
                        by the readable content of a page when looking at its layout.
                        The point of using Lorem Ipsum is that it has a more-or-less
                        normal distribution of letters, as opposed to using 'Content
                        here, content here', making it look
                    </p>
                    <a href="Javascript:void(0)">Read More</a>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <div class="about-box">
                    <figure><img src="{{ asset('assets/images/about.png') }}" alt="#" /></figure>
                </div>
            </div>
        </div> --}}
        <div class="owl-carousel owl-theme">
            <div class="item">
                <img src="{{ asset('assets/images/corporate.jpg') }}" alt="" style="height: 215px;">
                <div class="content">
                    <h3>Corporate Events</h3>
                </div>
            </div>
            <div class="item">
                <img src="{{ asset('assets/images/wedding.jpeg') }}" alt="">
                <div class="content">
                    <h3>Wedding Planning</h3>
                </div>
            </div>
            <div class="item">
                <img src="{{ asset('assets/images/birthday.jpg') }}" alt="" style="height: 213px;">
                <div class="content">
                    <h3>Birthday Events</h3>
                </div>
            </div>
            <div class="item">
                <img src="{{ asset('assets/images/team_building.jpg') }}" alt="" style="height: 212px;">
                <div class="content">
                    <h3>Team Building</h3>
                </div>
            </div>
            <div class="item">
                <img src="{{ asset('assets/images/exhibition.jpg') }}" alt="" style="height: 212px;">
                <div class="content">
                    <h3>Exhibition</h3>
                </div>
            </div>
            <div class="item">
                <img src="{{ asset('assets/images/conferences.jpg') }}" alt="" style="height: 212px;">
                <div class="content">
                    <h3>Conferences</h3>
                </div>
            </div>
            <div class="item">
                <img src="{{ asset('assets/images/product_lunch.jpg') }}" alt="" style="height: 212px;">
                <div class="content">
                    <h3>Product Launches</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end abouts -->


<!-- upcoming -->
<div id="upcoming" class="upcoming">
    <div id="events_container" class="container-fluid padding_left3">
        <div class="row display_boxflex">
            <div class="col-xl-5 col-lg-6 col-md-5 col-sm-12">
                <div class="box_text">
                    <div class="titlepage">
                        <h2 style="font-size: 25px;">No.1 Events Management</h2>
                    </div>
                    <p>Soul of Highness Entertainment is a platform that offers a platform for various talents, starting
                        with small open mic events and gradually expanding to larger showcases and talent competitions.
                        Their mission is to discover, nurture, and promote emerging artists from various fields like
                        music, comedy, and poetry. They aim to create a supportive and inclusive community where artists
                        can connect, collaborate, and grow together. Whether you're a seasoned performer or just
                        starting out, Soul of Highness invites you to join them on this journey of artistic exploration
                        and personal growth. Together, we celebrate the power of creativity and pave the way for the
                        next generation of talented individuals to shine bright.
                    </p>
                    <a href="Javascript:void(0)">Read More</a>
                </div>
            </div>

            <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 border_right">
                <div class="upcomimg">
                    {{-- <figure><img src="{{ asset('assets/images/up.jpg') }}" alt="#" /></figure> --}}
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 margi_bott">
                            <div class="Gallery_img">
                                <figure><img src="{{ asset('assets/images/wedding.jpeg') }}" alt="#" />
                                </figure>
                            </div>
                            <div class="hover_box">
                                <ul class="icon_hu">
                                    <h3>Wedding Events</h3>
                                    <li>
                                        <a href="#"><img src="{{ asset('assets/icon/h.png') }}"
                                                alt="#" /></a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="{{ asset('assets/icon/h.png') }}"
                                                alt="#" /></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 margi_bott">
                            <div class="Gallery_img">
                                <figure><img src="{{ asset('assets/images/corporate.jpg') }}" alt="#"
                                        style="height: 394px;" />
                                </figure>
                            </div>
                            <div class="hover_box">
                                <ul class="icon_hu">
                                    <h3>Corporate Events</h3>
                                    <li>
                                        <a href="#"><img src="{{ asset('assets/icon/h.png') }}"
                                                alt="#" /></a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="{{ asset('assets/icon/h.png') }}"
                                                alt="#" /></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 margi_bott1">
                            <div class="Gallery_img">
                                <figure><img src="{{ asset('assets/images/product_lunch.jpg') }}" alt="#"
                                        style="height: 394px;" />
                                </figure>
                            </div>
                            <div class="hover_box">
                                <ul class="icon_hu">
                                    <h3>Product Launches</h3>
                                    <li>
                                        <a href="#"><img src="{{ asset('assets/icon/h.png') }}"
                                                alt="#" /></a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="{{ asset('assets/icon/h.png') }}"
                                                alt="#" /></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="Gallery_img">
                                <figure><img src="{{ asset('assets/images/team_building.jpg') }}" alt="#"
                                        style="height: 394px;" />
                                </figure>
                            </div>
                            <div class="hover_box">
                                <ul class="icon_hu">
                                    <h3>Team Building</h3>
                                    <li>
                                        <a href="#"><img src="{{ asset('assets/icon/h.png') }}"
                                                alt="#" /></a>
                                    </li>
                                    <li>
                                        <a href="#"><img src="{{ asset('assets/icon/h.png') }}"
                                                alt="#" /></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end upcoming -->

{{-- -------------------------------- --}}
<div id="clients_container">
    <div id="client_element" class="container mt-5">
        <section id="clients_slider_section" class="slider_section">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="container">
                            <div class="carousel-caption">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="text-bg">
                                            <span id="client_head">Testimonial</span>
                                            <h1 id="client_says">Client Says</h1>
                                            <p>
                                                It is a long established fact that a reader will be
                                                distracted by the readable content of a page when
                                                looking at its layout. The point of using Lorem
                                                Ipsum is that it has a more-or-less normal
                                                distribution of letters, as opposed to using
                                                'Content here, content here', making it look
                                            </p><br><br>
                                            <p id="client_name">Satish Kumar</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="container">
                            <div class="carousel-caption">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="text-bg">
                                            <span id="client_head">Testimonial</span>
                                            <h1 id="client_says">Client Says</h1>
                                            <p>
                                                It is a long established fact that a reader will be
                                                distracted by the readable content of a page when
                                                looking at its layout. The point of using Lorem
                                                Ipsum is that it has a more-or-less normal
                                                distribution of letters, as opposed to using
                                                'Content here, content here', making it look
                                            </p><br><br>
                                            <p id="client_name">Satish Kumar</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="container">
                            <div class="carousel-caption">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="text-bg">
                                            <span id="client_head">Testimonial</span>
                                            <h1 id="client_says">Client Says</h1>
                                            <p>
                                                It is a long established fact that a reader will be
                                                distracted by the readable content of a page when
                                                looking at its layout. The point of using Lorem
                                                Ipsum is that it has a more-or-less normal
                                                distribution of letters, as opposed to using
                                                'Content here, content here', making it look
                                            </p><br><br>
                                            <p id="client_name">Satish Kumar</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

{{-- ----------------------------------------- --}}


<!-- Gallery -->

<div class="Gallery">
    <div class="container">
        <div class="row display_boxflex">
            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 margi_bott">
                        <div class="Gallery_img">
                            <figure><img src="{{ asset('assets/images/events_bg_1.jpg') }}" alt="#" />
                            </figure>
                        </div>
                        {{-- <div class="hover_box">
                            <ul class="icon_hu">
                                <h3>Music night</h3>
                                <li>
                                    <a href="#"><img src="{{ asset('assets/icon/h.png') }}"
                                            alt="#" /></a>
                                </li>
                                <li>
                                    <a href="#"><img src="{{ asset('assets/icon/h.png') }}"
                                            alt="#" /></a>
                                </li>
                            </ul>
                        </div> --}}
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 margi_bott">
                        <div class="Gallery_img">
                            <figure><img src="{{ asset('assets/images/events_bg_4.jpg') }}" alt="#" />
                            </figure>
                        </div>
                        {{-- <div class="hover_box">
                            <ul class="icon_hu">
                                <h3>Music night</h3>
                                <li>
                                    <a href="#"><img src="{{ asset('assets/icon/h.png') }}"
                                            alt="#" /></a>
                                </li>
                                <li>
                                    <a href="#"><img src="{{ asset('assets/icon/h.png') }}"
                                            alt="#" /></a>
                                </li>
                            </ul>
                        </div> --}}
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 margi_bott1">
                        <div class="Gallery_img">
                            <figure><img src="{{ asset('assets/images/events_bg_3.jpeg') }}" alt="#" />
                            </figure>
                        </div>
                        {{-- <div class="hover_box">
                            <ul class="icon_hu">
                                <h3>Music night</h3>
                                <li>
                                    <a href="#"><img src="{{ asset('assets/icon/h.png') }}"
                                            alt="#" /></a>
                                </li>
                                <li>
                                    <a href="#"><img src="{{ asset('assets/icon/h.png') }}"
                                            alt="#" /></a>
                                </li>
                            </ul>
                        </div> --}}
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                        <div class="Gallery_img">
                            <figure><img src="{{ asset('assets/images/events_bg_2.webp') }}" alt="#" />
                            </figure>
                        </div>
                        {{-- <div class="hover_box">
                            <ul class="icon_hu">
                                <h3>Music night</h3>
                                <li>
                                    <a href="#"><img src="{{ asset('assets/icon/h.png') }}"
                                            alt="#" /></a>
                                </li>
                                <li>
                                    <a href="#"><img src="{{ asset('assets/icon/h.png') }}"
                                            alt="#" /></a>
                                </li>
                            </ul>
                        </div> --}}
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                <div class="Gallery_text">
                    <div class="titlepage">
                        <h2>Gallery</h2>
                    </div>
                    <p>
                        It is a long established fact that a reader will be distracted
                        by the readable content of a page when looking at its layout.
                        The point of using Lorem Ipsum is that it has a more-or-less
                        normal distribution of letters, as opposed to usin
                    </p>
                    <a href="/gallery">Read More</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- end Gallery -->

<div class="contact_container">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form class="contact_bg">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="titlepage">
                                <h2 id="contact_head">Contact us</h2>
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
                <img src="{{ asset('assets/images/contact_img.png') }}" alt="">
            </div>
        </div>
    </div>
</div>

<div id="profile_container" class="about">
    <div class="container">
        <div class="row display_boxflex">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <div class="about-box">
                    <figure><img src="{{ asset('assets/images/founder_highness.jpg') }}" alt="#" /></figure>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <div class="about-box">
                    <h2>Meet Our Founder</h2>
                    <h3><b>Divya Divedi (Highness Kuhu)</b></h3>
                    <p>Soul of Highness Entertainment, founded by Divya Divedi(Highness Kuhu) in 2023, is a platform
                        that empowers individuals to embrace their unique talents and create a community for personal
                        development. The organization aims to create an environment where artists can thrive and inspire
                        each other, fostering a sense of community and personal growth. Divya's passion for empowering
                        artists and fostering a sense of belonging inspired her to create an inclusive space where
                        artists can thrive and make a significant impact on the world. Join her on this exciting journey
                        towards unlocking the limitless potential of creativity.</p>
                    {{-- <a href="Javascript:void(0)">Read More</a> --}}
                </div>
            </div>
        </div>
    </div>
</div>
<x-footer />
