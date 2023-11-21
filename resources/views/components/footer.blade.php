<!--  footer -->
<footer>
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12 border_top">
                    <form class="news">
                        {{-- <h3>Newsletter</h3> --}}
                        <input class="newslatter" placeholder="ENTER YOUR MAIL" type="text" name=" ENTER YOUR MAIL" />
                        <button class="submit">Subscribe</button>
                    </form>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <div class="address">
                                <ul class="loca">
                                    <li>
                                        <a href="#"><img src="{{ asset('assets/icon/loc.png') }}"
                                                alt="#" /></a>Bengaluru
                                    </li>

                                    <li>
                                        <a href="#"><img src="{{ asset('assets/icon/call.png') }}"
                                                alt="#" /></a>+91 83686 - 68780
                                    </li>
                                    <li>
                                        <a href="#"><img src="{{ asset('assets/icon/email.png') }}"
                                                alt="#" /></a>soulofhighness@gmail.com
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 mt-5">
                            <h2 id="footer_container">Office Address</h2>
                            <h3 class="text-white">Yatharth Dubey</h3>
                            <p id="footer_element">Highness Events</p>
                            <p id="footer_element">House No. 104 Nirmal Apartment, Nalasopara East, Vasai Virar,
                                Maharashtra, 401209, India. Ph.
                                No. - 8368668780</p>
                        </div>

                        <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 mt-5">
                            <h2 id="footer_container">Our Services</h2>
                            <ul id="footer_element">
                                <li><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i><a
                                        href="services#corporate_events">Corporate Events</a></li>
                                <li><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i><a
                                        href="services#birthday_events">Birthday Events</a></li>
                                <li><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i><a
                                        href="services#wedding_planning">Wedding Events</a></li>
                                <li><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i><a
                                        href="services#team_building">Team
                                        Building</a></li>
                                <li><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i><a
                                        href="services#conference">Conference</a></li>
                            </ul>
                        </div>

                        <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 mt-5">
                            <h2 id="footer_container">Useful Link</h2>
                            <ul id="footer_element">
                                <li><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></i><a
                                        href="/">Home</a></li>
                                <li><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i><a href="/about">About
                                        Us</a></li>
                                <li><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i><a
                                        href="/blog">Blogs</a></li>
                                <li><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i><a
                                        href="/gallery">Gallery</a></li>
                                <li><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i><a
                                        href="contact">Contact</a></li>
                            </ul>
                        </div>

                        <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 mt-5">
                            <h2 id="footer_container">Social Media</h2>
                            <div class="media_img_container">
                                <div class="media_img">
                                    <img src="{{ asset('assets/images/events_bg_1.jpg') }}" alt="">
                                </div>
                                <div class="media_img">
                                    <img src="{{ asset('assets/images/events_bg_1.jpg') }}" alt="">
                                </div>
                                <div class="media_img">
                                    <img src="{{ asset('assets/images/events_bg_1.jpg') }}" alt="">
                                </div>
                                <div class="media_img">
                                    <img src="{{ asset('assets/images/events_bg_1.jpg') }}" alt="">
                                </div>
                            </div>
                            <ul class="social_link">
                                <li>
                                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <p>
                    © 2023 -Highness Events - All Rights Reserved. | Powered by
                    <a target="_blank" href="https://venturingdigitally.com">Venturing Digitally</a>
                </p>
            </div>
        </div>
    </div>
</footer>
<!-- end footer -->
<!-- Javascript files-->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery-3.0.0.min.js') }}"></script>
<script src="{{ asset('assets/js/plugin.js') }}"></script>
<!-- sidebar -->
<script src="{{ asset('assets/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>
<script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>

{{-- ------------------------------------------ --}}
{{-- -------------------------------------- --}}
<script src="jquery.min.js"></script>
<script src="owlcarousel/owl.carousel.min.js"></script>

<script>
    $(document).ready(function() {
        $(".owl-carousel").owlCarousel();
    });
</script>
<script>
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        autoplay: true, // Add this line for autoplay
        autoplayTimeout: 3000, // Set the autoplay timeout in milliseconds (e.g., 3000ms = 3 seconds)
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 5
            }
        }
    })
</script>


</body>

</html>
