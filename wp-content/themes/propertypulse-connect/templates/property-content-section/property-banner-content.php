<div class="properties-hero-area d-flex flex-wrap align-items-center mb-80">
    <div class="properties-slide">
        <!-- Properties Slider -->
        <div id="property-thumb-silde" class="carousel slide wow fadeInUp" data-wow-delay="200ms" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#property-thumb-silde" data-slide-to="0" class="active"
                    style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/bg-img/64.jpg);"></li>
                <li data-target="#property-thumb-silde" data-slide-to="1"
                    style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/bg-img/65.jpg);"></li>
                <li data-target="#property-thumb-silde" data-slide-to="2"
                    style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/bg-img/66.jpg);"></li>
                <li data-target="#property-thumb-silde" data-slide-to="3"
                    style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/bg-img/67.jpg);"></li>
            </ol>
  
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg-img/64.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg-img/65.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg-img/66.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg-img/67.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
        </div>
    </div>

    <!-- Properties Content Area -->
    <div class="properties-content-area wow fadeInUp" data-wow-delay="200ms">
        <div class="properties-content-info">
            <h2><?php the_title(); ?></h2>
            <div class="properties-location">
                <p><i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo esc_html(get_post_meta(get_the_ID(), '_property_location', true)); ?></p>

               <p><i class="fa fa-map-marker" aria-hidden="true"></i> 
                    <?php
                    $taxonomies = get_object_taxonomies('property', 'objects'); // Get taxonomies
                     
                    foreach ($taxonomies as $taxonomy) {
                        $terms = get_the_terms(get_the_ID(), $taxonomy->name); // Get terms for the taxonomy
                        
                        if ($terms && !is_wp_error($terms)) {
                            $term_names = array();
                            foreach ($terms as $term) {
                                $term_names[] = esc_html($term->name);
                            }
                            echo '<p><strong>Category:</strong> ' . implode(', ', $term_names) . '</p>';
                        }
                    }
                    ?>
                </p>
            </div>
            <h4 class="properties-rate">₹<?php echo get_post_meta(get_the_ID(), '_property_price', true); ?> <span><?php 

            $badge=get_post_meta(get_the_ID(), '_property_status', true);
            if($badge=="For Rent") { ?> / month <?php } ?></span>


        </h4>
            <p><?php the_content();?></p>
            <!-- Properties Info -->
            <div class="properties-info">
                <p>Sqft: <span><?php echo esc_html(get_post_meta(get_the_ID(), '_property_sqft', true)); ?> m2</span></p>
                <p>Beds: <span>04</span></p>
                <p>Baths: <span><?php echo esc_html(get_post_meta(get_the_ID(), '_property_baths', true)); ?></span></p>
                <p>Garages: <span><?php echo esc_html(get_post_meta(get_the_ID(), '_property_garage', true)); ?></span></p>
            </div>
        </div>
    </div>
</div>