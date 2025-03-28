<?php 
// custom post type for property
function propertypulse_register_post_types() {
    register_post_type('property', array(
        'labels' => array(
            'name'          => __('Properties', 'propertypulse-connect'),
            'singular_name' => __('Property', 'propertypulse-connect'),
        ),
        'public'       => true,
        'menu_icon'    => 'dashicons-admin-home',
        'supports'     => array('title', 'editor', 'thumbnail', 'custom-fields', 'excerpt'),
        'has_archive'  => true,
        'rewrite'      => array('slug' => 'properties'),
    ));
}
add_action('init', 'propertypulse_register_post_types');

// taxonomies for the pp
function propertypulse_register_taxonomies() {
    register_taxonomy('property_type', 'property', array(
        'labels'       => array(
            'name'          => __('Property Types', 'propertypulse-connect'),
            'singular_name' => __('Property Type', 'propertypulse-connect'),
        ),
        'hierarchical' => true,
        'public'       => true,
        'rewrite'      => array('slug' => 'property-type'),
    ));
}
add_action('init', 'propertypulse_register_taxonomies');

function propertypulse_add_meta_box() {
    add_meta_box(
        'propertypulse_details_meta_box', 
        'Property Details', 
        'propertypulse_property_details_callback', 
        'property', 
        'normal', 
        'high'
    );
}
add_action('add_meta_boxes', 'propertypulse_add_meta_box');


function propertypulse_property_details_callback($post) {
    // Retrieve existing values from the database
    $price = get_post_meta($post->ID, '_property_price', true);
    $location = get_post_meta($post->ID, '_property_location', true);
    $seller = get_post_meta($post->ID, '_property_seller', true);
    $sqft = get_post_meta($post->ID, '_property_sqft', true);
    $garage = get_post_meta($post->ID, '_property_garage', true);
    $baths = get_post_meta($post->ID, '_property_baths', true);
    $bedrooms = get_post_meta($post->ID, '_property_bedrooms', true);
    $status = get_post_meta($post->ID, '_property_status', true);
    $year_built = get_post_meta($post->ID, '_property_year_built', true);
    $property_dimension = get_post_meta($post->ID, '_property_dimension', true);
    $floor_plan = get_post_meta($post->ID, '_property_floor_plan', true);
    $nearby_places_map = get_post_meta($post->ID, '_property_nearby_places_map', true);
    $parking_area = get_post_meta($post->ID, '_property_parking_area', true);

    wp_nonce_field('propertypulse_save_meta_box_data', 'propertypulse_meta_box_nonce');

    ?>
    <p>
        <label for="property_price">Price (₹)</label>
        <input type="text" id="property_price" name="property_price" value="<?php echo esc_attr($price); ?>" />
    </p>
    <p>
        <label for="property_location">Location</label>
        <input type="text" id="property_location" name="property_location" value="<?php echo esc_attr($location); ?>" />
    </p>
    <p>
        <label for="property_seller">Seller Name</label>
        <input type="text" id="property_seller" name="property_seller" value="<?php echo esc_attr($seller); ?>" />
    </p>
    <p>
        <label for="property_sqft">Square Feet</label>
        <input type="number" id="property_sqft" name="property_sqft" value="<?php echo esc_attr($sqft); ?>" />
    </p>
    <p>
        <label for="property_garage">Garage Spaces</label>
        <input type="number" id="property_garage" name="property_garage" value="<?php echo esc_attr($garage); ?>" />
    </p>
    <p>
        <label for="property_baths">Bathrooms</label>
        <input type="number" id="property_baths" name="property_baths" value="<?php echo esc_attr($baths); ?>" />
    </p>
    <p>
        <label for="property_bedrooms">Bedrooms</label>
        <input type="number" id="property_bedrooms" name="property_bedrooms" value="<?php echo esc_attr($bedrooms); ?>" />
    </p>
    <p>
        <label for="property_year_built">Construction Year</label>
        <input type="text" id="property_year_built" name="property_year_built" value="<?php echo esc_attr($year_built); ?>" />
    </p>
    <p>
        <label for="property_dimension">Property Dimension</label>
        <input type="text" id="property_dimension" name="property_dimension" value="<?php echo esc_attr($property_dimension); ?>" />
    </p>
    <p>
        <label for="property_status">Property Status</label>
        <select id="property_status" name="property_status">
            <option value="For Sale" <?php selected($status, 'For Sale'); ?>>For Sale</option>
            <option value="For Rent" <?php selected($status, 'For Rent'); ?>>For Rent</option>
        </select>
    </p>
    
    <!-- Floor Plan Upload -->
    <p>
        <label for="property_floor_plan">Floor Plan</label><br>
        <input type="text" id="property_floor_plan" name="property_floor_plan" value="<?php echo esc_url($floor_plan); ?>" />
        <button type="button" class="button property_floor_plan_upload">Upload</button>
    </p>
    <?php if ($floor_plan) : ?>
        <p><img src="<?php echo esc_url($floor_plan); ?>" style="max-width: 300px;"/></p>
    <?php endif; ?>

    <!-- Nearby Places Map (Iframe SRC) -->
    <p>
        <label for="property_nearby_places_map">Nearby Places Map (Embed URL)</label>
        <input type="url" id="property_nearby_places_map" name="property_nearby_places_map" value="<?php echo esc_attr($nearby_places_map); ?>" />
    </p>

    <!-- Parking Area -->
    <p>
        <label for="property_parking_area">Parking Area (sqft)</label>
        <input type="number" id="property_parking_area" name="property_parking_area" value="<?php echo esc_attr($parking_area); ?>" />
    </p>

    <script>
    jQuery(document).ready(function($) {
        $('.property_floor_plan_upload').click(function(e) {
            e.preventDefault();
            var frame;
            if (frame) {
                frame.open();
                return;
            }
            frame = wp.media({
                title: 'Select or Upload Floor Plan',
                button: { text: 'Use this Image' },
                multiple: false
            });
            frame.on('select', function() {
                var attachment = frame.state().get('selection').first().toJSON();
                $('#property_floor_plan').val(attachment.url);
            });
            frame.open();
        });
    });
    </script>

    <?php
}

function propertypulse_save_meta_box_data($post_id) {
    if (!isset($_POST['propertypulse_meta_box_nonce']) || !wp_verify_nonce($_POST['propertypulse_meta_box_nonce'], 'propertypulse_save_meta_box_data')) {
        return;
    }

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    // Save fields
    $fields = [
        '_property_price' => 'property_price',
        '_property_location' => 'property_location',
        '_property_seller' => 'property_seller',
        '_property_sqft' => 'property_sqft',
        '_property_garage' => 'property_garage',
        '_property_baths' => 'property_baths',
        '_property_bedrooms' => 'property_bedrooms',
        '_property_status' => 'property_status',
        '_property_year_built' => 'property_year_built',
        '_property_dimension' => 'property_dimension',
        '_property_floor_plan' => 'property_floor_plan',
        '_property_nearby_places_map' => 'property_nearby_places_map',
        '_property_parking_area' => 'property_parking_area'
    ];

    foreach ($fields as $meta_key => $input_name) {
        if (isset($_POST[$input_name])) {
            update_post_meta($post_id, $meta_key, sanitize_text_field($_POST[$input_name]));
        }
    }
}
add_action('save_post', 'propertypulse_save_meta_box_data');



// post type end
