<?php
/**
 * Template Name: Contact Page
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
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Contact</li>
                        </ol>
                    </nav>
                    <h2 class="page-title">Contact Us</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- **** Breadcrumb Area End **** -->

<!-- **** Contact Area Start **** -->
<section class="rehomes-support-and-contact-area section-padding-80-0">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="contact-information-area mb-80">
                    <!-- Title -->
                    <div class="support-title wow fadeInUp" data-wow-delay="200ms">
                        <h2>Need Help ?</h2>
                    </div>

                    <!-- Support Area Content -->
                    <div class="support-area-content d-flex align-items-center wow fadeInUp" data-wow-delay="200ms">
                        <!-- Support Person Thumb -->
                        <div class="support-perosn-thumb">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/company-member/devansh.jpg" alt="">
                        </div>
                        <div class="supprto-meta">
                            <h4>Devansh Mishra</h4>
                            <p>Customer Relations</p>
                            <p>+918765945870</p>
                            <p>devanshmishra872@gmail.com</p>
                        </div>
                    </div>

                    <!-- Support Area Content -->
                    <div class="support-area-content d-flex align-items-center wow fadeInUp" data-wow-delay="200ms">
                        <!-- Support Person Thumb -->
                        <div class="support-perosn-thumb">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/company-member/faheem.jpg" alt="">
                        </div>
                        <div class="supprto-meta">
                            <h4>Mohd Faheem</h4>
                            <p>Customer Relations</p>
                            <p>+919648868596</p>
                            <p>faheem.speak1991@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6">
                <!-- Leave A Reply -->
                <div class="rehomes-contact-form mb-80 wow fadeInUp" data-wow-delay="200ms">
                    <!-- Title -->
                    <div class="support-title">
                        <h2>Get In Touch</h2>
                    </div>

                    <!-- Form -->
                    <?php 

                      if (have_posts()) :
                        while (have_posts()) : the_post();
                            the_content();
                        endwhile;
                    endif;

                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- **** Contact Area End **** -->

<!-- **** Google Maps **** -->
<div class="contact-maps mb-80 wow fadeInUp" data-wow-delay="200ms">
    <div class="bottom-arrow"></div>
    <!-- Maps Iframe -->
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8148.712307515693!2d-75.44253062844327!3d43.77270348052156!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89d8ba8be82f81b3%3A0x5fa5f4eeadd52643!2sWatson%2C+NY%2C+USA!5e0!3m2!1sen!2sbd!4v1551758930043"
        allowfullscreen></iframe>
</div>

<!-- **** Contact Information Start **** -->
<div class="contact--information-">
    <div class="container">
        <div class="row mb-40">
            <!-- Contact Info Area -->
           <!--  <div class="col-12 col-md-4">
                <div class="contact--info-area text-center wow fadeInUp" data-wow-delay="200ms">
                    <h4>London</h4>
                    <p>Add: <span>Iris Watson, Box 283 8562 Rd, NY</span></p>
                    <p>Email: <span>info.colorlib@gmail.com</span></p>
                    <p>Phone: <span>123-456-789</span></p>
                </div>
            </div> -->

            <!-- Contact Info Area -->
            <div class="col-12 col-md-12">
                <div class="contact--info-area text-center wow fadeInUp" data-wow-delay="200ms">
                    <h4>Lucknow</h4>
                    <p>Add: <span>Sector Q Aliganj ,Aliganj Plaza, Lucknow, Uttar Pradesh, 226024, India</span></p>
                    <p>Email: <span>realproperty.pulse@gmail.com</span></p>
                    <p>Phone: <span>+918765945870, +919648868596</span></p>
                </div>
            </div>

            <!-- Contact Info Area -->
            <!-- <div class="col-12 col-md-4">
                <div class="contact--info-area text-center wow fadeInUp" data-wow-delay="200ms">
                    <h4>Japan</h4>
                    <p>Add: <span>Iris Watson, Box 283 8562 Rd, NY</span></p>
                    <p>Email: <span>info.colorlib@gmail.com</span></p>
                    <p>Phone: <span>123-456-789</span></p>
                </div>
            </div> -->
        </div>
    </div>
</div>
<!-- **** Contact Information End **** -->

<!-- **** Partner Area Start **** -->
<?php echo get_template_part('templates/common/partner-logo');?>;

<?php get_footer(); ?>
