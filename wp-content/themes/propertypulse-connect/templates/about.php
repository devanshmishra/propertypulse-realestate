<?php
/**
 * Template Name: About Page
 */

get_header(); ?>

<!-- **** Breadcrumb Area Start **** -->
<div class="breadcrumb-area bg-img bg-overlay-3 wow fadeInUp" data-wow-delay="200ms"
    style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/bg-img/30.jpg);">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="breadcrumb-content">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ 'home'|page }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">About</li>
                        </ol>
                    </nav>
                    <h2 class="page-title">About Us</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- **** Breadcrumb Area End **** -->

<!-- **** About Us Area Start **** -->
<section class="about-us-area section-padding-100-60">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="about-us-title mb-40 wow fadeInUp" data-wow-delay="200ms">
                    <h2>Hello! Welcome to <span>PropertyPulse Connect</span></h2>
                    <p>At Property Pulse, we bring you the latest real estate insights, property tours, and expert advice to help you make informed decisions. Whether you're a homebuyer, investor, or simply love exploring unique properties, our content is designed to provide value and inspiration.</p>
                </div>
            </div>

            <!-- Single About Area -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="single-about-content wow fadeInUp" data-wow-delay="200ms">
                    <!-- Thumb -->
                    <div class="single-about-thumb">
                        <img width="400" height="150" src="<?php echo get_template_directory_uri(); ?>/assets/img/bg-img/realstate1.jpg" alt="Real Estate Market Insights">
                    </div>
                    <h4>Real Estate Market Insights</h4>
                    <p>Stay updated with the latest market trends, price fluctuations, and investment opportunities. We analyze local and global real estate trends to help you make smarter property decisions.</p>
                </div>
            </div>

            <!-- Single About Area -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="single-about-content wow fadeInUp" data-wow-delay="200ms">
                    <!-- Thumb -->
                    <div class="single-about-thumb">
                        <img width="300" height="150" src="<?php echo get_template_directory_uri(); ?>/assets/img/bg-img/helloworld.jpg" alt="Exclusive Property Tours">
                    </div>
                    <h4>Exclusive Property Tours</h4>
                    <p>We take you inside stunning homes, luxury apartments, and hidden gems across Lucknow and beyond. Our property tours give you a firsthand look at design, architecture, and unique features.</p>
                </div>
            </div>

            <!-- Single About Area -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="single-about-content wow fadeInUp" data-wow-delay="200ms">
                    <!-- Thumb -->
                    <div width="300" height="450" class="single-about-thumb">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg-img/realstate4.jpg" alt="Home Improvement & Tips">
                    </div>
                    <h4>Home Improvement & Tips</h4>
                    <p>From renovation ideas to smart home technology, we share tips to enhance your living space. Learn about interior design trends, home maintenance, and budget-friendly upgrades.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- **** About Us Area End **** -->


<!-- **** Testimonials Area Start **** -->
<section class="rehomes-testimonial-area bg-img bg-overlay-4 jarallax section-padding-80"
    style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/bg-img/34.jpg);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10 col-lg-8">
                <!-- Testimonial-area Slider -->
                <div class="testimonial-area owl-carousel wow fadeInUp" data-wow-delay="200ms">
                    <!-- Single Testimonial Slider -->
                    <div class="single-testimonial-content text-center">
                        <!-- Icon -->
                        <div class="testimonial-icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/core-img/quote.png" alt="">
                        </div>
                        <h5>“I am so happy because I found this Real Estata, and it just made my life easier. Thanks so
                            much for sharing.”</h5>
                        <!-- Testimonial-Meta -->
                        <div class="testimonial-meta">
                            <h5>Mister Stock</h5>
                            <p>CEO google.com</p>
                        </div>
                    </div>

                    <!-- Single Testimonial Slider -->
                    <div class="single-testimonial-content text-center">
                        <!-- Icon -->
                        <div class="testimonial-icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/core-img/quote.png" alt="">
                        </div>
                        <h5>“I am so happy because I found this Real Estata, and it just made my life easier. Thanks so
                            much for sharing.”</h5>
                        <!-- Testimonial-Meta -->
                        <div class="testimonial-meta">
                            <h5>Nazrul Islam</h5>
                            <p>Developer</p>
                        </div>
                    </div>

                    <!-- Single Testimonial Slider -->
                    <div class="single-testimonial-content text-center">
                        <!-- Icon -->
                        <div class="testimonial-icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/core-img/quote.png" alt="">
                        </div>
                        <h5>“I am so happy because I found this Real Estata, and it just made my life easier. Thanks so
                            much for sharing.”</h5>
                        <!-- Testimonial-Meta -->
                        <div class="testimonial-meta">
                            <h5>Ajoy Das</h5>
                            <p>Developer</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- **** Testimonials Area End **** -->
<?php echo get_template_part('templates/common/why-choose-us');?>;

<?php echo get_template_part('templates/common/partner-logo');?>;


<?php get_footer(); ?>
