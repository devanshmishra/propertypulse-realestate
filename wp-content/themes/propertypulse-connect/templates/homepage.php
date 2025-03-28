<?php
/**
 * Template Name: Homepage
 */
get_header(); ?>

<!-- Hero Section -->

<?php echo get_template_part('templates/common/welcome-map');?>;

<!-- property filter -->
<?php echo get_template_part('templates/common/filter-property');?>;


<?php echo get_template_part('templates/common/latest-showcase');?>;

<?php echo get_template_part('templates/common/why-choose-us');?>;


<?php echo get_template_part('templates/common/category-showcase');?>;


<?php echo get_template_part('templates/common/cta');?>;


<?php echo get_template_part('templates/common/latest-news');?>;


<?php echo get_template_part('templates/common/partner-logo');?>;

<!-- <section class="hero-section" style="background-image: url('</?php echo get_template_directory_uri(); ?>/assets/img/bg-img/hero.jpg');">
    <div class="container">
        <div class="hero-content text-center">
            <h1>Find Your Dream Home</h1>
            <p>Browse thousands of properties in your city.</p>
            <a href="</?php echo home_url('/properties'); ?>" class="btn btn-primary">View Listings</a>
        </div>
    </div>
</section> -->

<!-- Featured Properties -->
<!-- <section class="featured-properties section-padding">
    <div class="container">
        <h2 class="section-title">Featured Properties</h2>
        <div class="row">
            <?php
            $args = array(
                'post_type' => 'property',
                'posts_per_page' => 6,
                'meta_key' => 'featured',
                'meta_value' => '1'
            );
            $query = new WP_Query($args);
            if ($query->have_posts()):
                while ($query->have_posts()): $query->the_post(); ?>
                    <div class="col-md-4">
                        <div class="property-card">
                            <a href="<?php the_permalink(); ?>">
                                <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                                <h3><?php the_title(); ?></h3>
                                <p><?php the_excerpt(); ?></p>
                            </a>
                        </div>
                    </div>
                <?php endwhile;
                wp_reset_postdata();
            else: ?>
                <p>No featured properties available.</p>
            <?php endif; ?>
        </div>
    </div>
</section> -->

<!-- Testimonials Section -->
<!-- <section class="testimonials section-padding bg-light">
    <div class="container">
        <h2 class="section-title">What Our Clients Say</h2>
        <div class="row">
            <?php
            $args = array(
                'post_type' => 'testimonial',
                'posts_per_page' => 3
            );
            $query = new WP_Query($args);
            if ($query->have_posts()):
                while ($query->have_posts()): $query->the_post(); ?>
                    <div class="col-md-4">
                        <div class="testimonial-box">
                            <p><?php the_content(); ?></p>
                            <h4><?php the_title(); ?></h4>
                        </div>
                    </div>
                <?php endwhile;
                wp_reset_postdata();
            else: ?>
                <p>No testimonials available.</p>
            <?php endif; ?>
        </div>
    </div>
</section> -->

<?php get_footer(); ?>