<div class="information-area mb-80 wow fadeInUp" data-wow-delay="200ms">
                    <h4 class="mb-30">Infomation</h4>

                    <!--Information Content -->
                    <div class="information-content">
                        <ul class="d-flex flex-wrap">
                            <li><span>Price</span> <span>₹<?php echo get_post_meta(get_the_ID(), '_property_price', true); ?></span></li>
                            <li><span>Property Type</span> <span><?php
                    $taxonomies = get_object_taxonomies('property', 'objects'); // Get taxonomies
                     
                    foreach ($taxonomies as $taxonomy) {
                        $terms = get_the_terms(get_the_ID(), $taxonomy->name); // Get terms for the taxonomy
                        
                        if ($terms && !is_wp_error($terms)) {
                            $term_names = array();
                            foreach ($terms as $term) {
                                $term_names[] = esc_html($term->name);
                            }
                            echo '<p>' . implode(', ', $term_names) . '</p>';
                        }
                    }
                    ?></span></li>
                            <li><span>Year Built</span> <span><?php echo esc_html(get_post_meta(get_the_ID(), '_property_year_built', true)); ?></span></li>
                            <li><span>Bathrooms</span> <span><?php echo esc_html(get_post_meta(get_the_ID(), '_property_baths', true)); ?></span></li>
                            <li><span>Rooms</span> <span><?php echo esc_html(get_post_meta(get_the_ID(), '_property_bedrooms', true)); ?></span></li>
                            <li><span>Parking lots</span> <span><?php echo esc_html(get_post_meta(get_the_ID(), '_property_parking_area', true)); ?></span></li>
                            <li><span>Agent</span> <span><?php echo esc_html(get_post_meta(get_the_ID(), '_property_seller', true)); ?></span></li>
                            <li><span>Contract type</span> <span><?php $badge=get_post_meta(get_the_ID(), '_property_status', true);echo $badge; ?></span></li>
                            <li><span>Garages</span> <span><?php echo esc_html(get_post_meta(get_the_ID(), '_property_garage', true)); ?></span></li>
                            <li><span>Home area</span> <span><?php echo esc_html(get_post_meta(get_the_ID(), '_property_sqft', true)); ?> sqft</span></li>
                            <li><span>Property dimensions</span> <span><?php echo esc_html(get_post_meta(get_the_ID(), '_property_dimension', true)); ?></span></li>
                        </ul>
                    </div>
                    
                </div>