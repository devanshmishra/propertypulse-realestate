<?php get_header(); ?>


<!-- **** Properties Hero Area Start **** -->
<?php echo get_template_part('templates/property-content-section/property-banner-content');?>;

<!-- **** Properties Hero Area End **** -->

<!-- **** Properties-area Start **** -->
<div class="rehomes-properties-area">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-12 col-lg-8">
                <!-- Information Area -->
           <?php echo get_template_part('templates/property-content-section/property-information');?>;
                <!-- property information end -->

                <!-- Floor Thumb Content -->
            <?php echo get_template_part('templates/property-content-section/property-floor-plan');?>;   

               <!-- floo plan section end -->


                <!-- Search Location Area -->
                <div class="search-location-area mb-80 wow fadeInUp" data-wow-delay="200ms">
                    <h4 class="mb-30">Near By Place</h4>

                    <!-- Location Maps -->
                    <div class="loction-map">
                         <?php 
                        $nearby_map = get_post_meta(get_the_ID(), '_property_nearby_places_map', true);
                        if ($nearby_map) {
                            echo '<iframe src="' . esc_url($nearby_map) . '" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>';
                        } else {
                            echo '<p>No nearby places available.</p>';
                        }
                        ?>
                    </div>

                    


                    <!-- Single Location Content -->
                    <div class="single-location-content d-flex align-items-center justify-content-between">
                        <!-- Location Thumb And Info -->
                        <div class="location-thumb-info  d-flex align-items-center">
                            <!-- Location Thumb -->
                            <div class="location-thumb">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg-img/71.jpg" alt="">
                            </div>
                            <!-- Location Info -->
                            <div class="location-info">
                                <h5>Hospital</h5>
                                <p><i class="fa fa-map-marker" aria-hidden="true"></i> 801 Rowan Parkways Apt. 974</p>
                                <p><i class="fa fa-location-arrow" aria-hidden="true"></i> 5 km</p>
                            </div>
                        </div>

                        <!-- Contact Location -->
                        <div class="contact-location-btn">
                            <!-- Phone -->
                            <a class="phone" href="#"><i class="fa fa-phone" aria-hidden="true"></i></a>
                            <!-- Share -->
                            <a class="share" href="#"><i class="fa fa-share" aria-hidden="true"></i></a>
                        </div>
                    </div>

                   



                </div>





                <!-- Agent Information -->
                <div class="agent-information-area mb-80 wow fadeInUp" data-wow-delay="200ms">
                    <h4 class="mb-30">Agent Infomation</h4>

                    <!-- Agent Information Info -->
                    <div class="agent-information-info d-flex align-items-center">
                        <!-- Agent Thumb -->
                        <div class="agent-thumb">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg-img/72.jpg" alt="">
                        </div>
                        <!-- Agent Info -->
                        <div class="agent-info">
                            <h4>Jason Johnson</h4>
                            <!-- Agent Contact -->
                            <div class="agent-contact d-flex justify-content-between">
                                <p>Phone: <span>(12) 456-7890</span></p>
                                <p>Email: <span>info.colorlib@gmail.com</span></p>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Risus commodo viverra maecenas accumsan lacus vel
                                facilisis. </p>
                            <a class="btn rehomes-btn mt-10" href="#">Contact us</a>
                        </div>
                    </div>
                </div>

                <!-- Leave A Reply -->
                <div class="rehomes-comment-form mb-80 wow fadeInUp" data-wow-delay="200ms">
                    <?php echo do_shortcode('[wpforms id="48" title="false"]');?>
                </div>

            </div>

            <!-- Sidebar Area -->
            <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                <div class="rehomes-property-sidebar-area">
                    <!-- Single Properties Widget Area -->
                   <?php the_widget('Recent_Properties_Widget'); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- **** Properties-area End **** -->

<?php echo get_template_part('templates/common/partner-logo');?>;

<?php get_footer(); ?>
