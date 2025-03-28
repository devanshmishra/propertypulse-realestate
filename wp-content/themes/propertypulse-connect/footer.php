<footer class="footer-area bg-img bg-overlay-2 section-padding-100-0" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/bg-img/17.jpg);">
    <!-- Main Footer Area -->
    <div class="main-footer-area">
        <div class="container">
            <div class="row justify-content-between">

                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-footer-widget mb-80">
                        <!-- Footer Logo -->
                        <a href="<?php echo home_url(); ?>" class="footer-logo">
                            <img width="150" height="150" src="<?php echo get_template_directory_uri(); ?>/assets/img/core-img/logo.png" alt="Logo">
                        </a>
                        <p>Your trusted partner in real estate. Explore the best properties, market insights, and expert advice—all in one place.</p>
                        <!-- Social Info -->
                        <div class="social-info">
                            <a target="_blank"  href="https://www.youtube.com/@Propertypulsereal"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                            <a target="_blank" href="https://www.facebook.com/people/Property-Pulse/pfbid0j5WMVgxTkEjwLdWs1GArXTnoU9GjrEymSNa1x7EoorRA5J8sAAmaoqLHWyzyEH6Vl/?rdid=tukS4xDpU5kNWn0C&share_url=https%3A%2F%2Fwww.facebook.com%2Fshare%2F1FaaRzR3rP%2F"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a target="_blank" href="https://www.instagram.com/realproperty.pulse/profilecard/?igsh=MTRreGt5ejA1dXJibA=="><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            <!-- <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a> -->
                        </div>
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-footer-widget mb-80">
                        <h5 class="widget-title">Get Info</h5>
                        <div class="footer-contact">
                            <p>Phone: <span>+918765945870, +919648868596</span></p>
                            <p>Email: <span>realproperty.pulse@gmail.com</span></p>
                            <p>Address: <span>Sector Q Aliganj ,Aliganj Plaza, Lucknow, Uttar Pradesh, 226024, India</span></p>
                        </div>
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-footer-widget mb-80">
                        <h5 class="widget-title">Property Cities</h5>
                        <ul class="footer-nav d-flex flex-wrap">
                            <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> Lucknow</a></li>
                            <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> kanpur</a></li>
                            <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> Raibareli</a></li>
                            <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> Barabanki</a></li>
                            <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> Sitapur</a></li>
                            <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> Lakhimpur-kheri</a></li>
                            <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> Unnao </a></li>
                            <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> Hardoi </a></li>
                        </ul>
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-footer-widget mb-80">
                        <h5 class="widget-title">Newsletter</h5>
                        <p>Subscribe to our newsletter to get notifications about new updates.</p>
                        <form action="#" class="nl-form">
                            <input type="email" name="nl-email" class="form-control" placeholder="Enter your email...">
                            <button type="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Copywrite Area -->
    <div class="copywrite-content">
        <div class="container">
            <div class="row align-items-center">
                <!-- Copywrite Text -->
                <div class="col-12 col-sm-6">
                    <div class="copywrite-text">
                        <p>
                            &copy; <?php echo date("Y"); ?> All rights reserved | Made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="#" target="_blank">Propertypulse Connect</a>
                        </p>
                    </div>
                </div>

                <!-- Footer Menu -->
                <div class="col-12 col-sm-6">
                    <div class="footer-menu">
                        <ul class="nav">
                            <li><a href="<?php echo home_url(); ?>">Home</a></li>
                            <li><a href="<?php echo home_url('/about-us'); ?>">About Us</a></li>
                            <li><a href="<?php echo home_url('/properties'); ?>">Properties</a></li>
                            <li><a href="<?php echo home_url('/contact-us'); ?>">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
