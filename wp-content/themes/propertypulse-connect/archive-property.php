<?php get_header(); ?>
<!-- **** Breadcrumb Area Start **** -->
<div class="breadcrumb-area-two mt-50 wow fadeInUp" data-wow-delay="200ms">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-content-two">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ 'home'|page }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Property</li>
                        </ol>
                    </nav>
                    <h2 class="page-title">For Rent or Sell</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- **** Breadcrumb Area End **** -->


<!-- **** Rent area Start **** -->
<section class="rehome-house-sale-area section-padding-80">

    <div class="container">
          <form method="GET" action="<?php echo esc_url(get_post_type_archive_link('property')); ?>">
    <select name="property_type" onchange="this.form.submit()">
        <option value=""><?php _e('Select Property Type', 'textdomain'); ?></option>
        <?php
        $terms = get_terms([
            'taxonomy'   => 'property_type',
            'hide_empty' => false,
        ]);

        if (!empty($terms)) {
            foreach ($terms as $term) {
                $selected = (isset($_GET['property_type']) && $_GET['property_type'] === $term->slug) ? 'selected' : '';
                echo '<option value="' . esc_attr($term->slug) . '" ' . $selected . '>' . esc_html($term->name) . '</option>';
            }
        }
        ?>
     </select>

    <noscript><input type="submit" value="<?php _e('Filter', 'textdomain'); ?>"></noscript>

    <?php if (isset($_GET['property_type']) && !empty($_GET['property_type'])) : ?>
        <a href="<?php echo esc_url(get_post_type_archive_link('property')); ?>" class="clear-filter">
            <?php _e('Clear Filter', 'textdomain'); ?>
        </a>
    <?php endif; ?>
</form>
        <div class="row">
          
            <!-- Single Property Area -->
           <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $property_type = isset($_GET['property_type']) ? sanitize_text_field($_GET['property_type']) : '';

            $args = array(
                'post_type'      => 'property',
                'posts_per_page' => 3,  // Adjust as needed
                'paged'          => $paged
            );

            // Apply taxonomy filter if selected
            if (!empty($property_type)) {
                $args['tax_query'] = array(
                    array(
                        'taxonomy' => 'property_type',
                        'field'    => 'slug',
                        'terms'    => $property_type,
                    ),
                );
            }

            $query = new WP_Query($args);

            if ($query->have_posts()) :
             while ($query->have_posts()) : $query->the_post();
?>
        <div class="col-12 col-md-6 col-lg-4">
            <div class="single-property-area wow fadeInUp" data-wow-delay="200ms">
                <!-- Property Thumb -->
                <a href="<?php echo esc_url(get_permalink()); ?>">
                    <div class="property-thumb">
                        <?php if (has_post_thumbnail()) : ?>
                            <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>">
                        <?php else : ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg-img/2.jpg" alt="Default Property Image">
                        <?php endif; ?>
                    </div>
                </a>

                <!-- Property Description -->
                <div class="property-desc-area">
                    <!-- Property Title & Seller -->
                    <div class="property-title-seller d-flex justify-content-between">
                        <!-- Title -->
                        <div class="property-title">
                            <h4><?php the_title(); ?></h4>
                            <p><i class="fa fa-map-marker" aria-hidden="true"></i> 
                                <?php echo esc_html(get_post_meta(get_the_ID(), '_property_location', true)); ?>
                            </p>
                        </div>
                        <!-- Seller -->
                        <div class="property-seller">
                            <p>Seller:</p>
                            <h6><?php echo esc_html(get_post_meta(get_the_ID(), '_property_seller', true)); ?></h6>
                        </div>
                    </div>

                    <!-- Property Info -->
                    <div class="property-info-area d-flex flex-wrap">
                        <p>Sqft: <span><?php echo esc_html(get_post_meta(get_the_ID(), '_property_sqft', true)); ?> m²</span></p>
                        <p>Garage: <span><?php echo esc_html(get_post_meta(get_the_ID(), '_property_garage', true)); ?></span></p>
                        <p>Baths: <span><?php echo esc_html(get_post_meta(get_the_ID(), '_property_baths', true)); ?></span></p>
                    </div>

                    <!-- Property Taxonomies -->
                    <div class="property-taxonomies">
                        <?php
                        $taxonomies = get_object_taxonomies('property', 'objects'); // Get all taxonomies for 'property'

                        foreach ($taxonomies as $taxonomy) {
                            $terms = get_the_terms(get_the_ID(), $taxonomy->name); // Get terms for the taxonomy

                            if ($terms && !is_wp_error($terms)) {
                                $term_names = array();
                                foreach ($terms as $term) {
                                    $term_names[] = esc_html($term->name);
                                }
                                echo '<p><strong>' . esc_html($taxonomy->label) . ':</strong> ' . implode(', ', $term_names) . '</p>';
                            }
                        }
                        ?>

                    </div>
                </div>

                <!-- Property Price -->
                <div class="property-price">
                    <p class="badge-rent">
                        <?php echo esc_html(get_post_meta(get_the_ID(), '_property_status', true)); ?>
                    </p>
                    <p class="price">
                        ₹<?php echo get_post_meta(get_the_ID(), '_property_price', true); ?>
                    </p>
                </div>
            </div>
        </div>
<?php
    endwhile;
    wp_reset_postdata(); // Reset post data to avoid conflicts
else :
?>
    <p>No properties found.</p>
<?php endif; ?>




        </div>

        <div class="row">
            <!-- Pagination and Page Counter Area -->
            <div class="col-12">
                <div class="rehomes-pagination-counter mt-15 d-flex flex-wrap justify-content-between align-items-center wow fadeInUp"
                    data-wow-delay="200ms">
                    <!-- Pagination -->
                    <nav class="rehomes-pagination">
                        <?php understrap_bootstrap_pagination($query); ?>

                    </nav>

                    <!-- Page Counter -->
                    <div class="page-counter">
                   <p>Page <span><?php echo max(1, get_query_var('paged')); ?></span> of 
                   <span><?php echo $wp_query->max_num_pages; ?></span> results</p>
                   </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
