<?php
class Recent_Properties_Widget extends WP_Widget {
    
    // Constructor
    public function __construct() {
        parent::__construct(
            'recent_properties_widget',
            __('Recent Properties', 'text_domain'),
            array('description' => __('Displays recent property posts', 'text_domain'))
        );
    }

    // Widget Frontend Output
    public function widget($args, $instance) {
        echo $args['before_widget'];
        echo '<div class="properties-single-widget-area mb-80 wow fadeInUp" data-wow-delay="200ms">';
        echo '<h4 class="widget-title mb-30">Recent Properties</h4>';

        // Query to get recent 'property' posts
        $query = new WP_Query(array(
            'post_type'      => 'property',
            'posts_per_page' => 4,
            'orderby'        => 'date',
            'order'          => 'DESC'
        ));

        if ($query->have_posts()) {
            while ($query->have_posts()) {
                $query->the_post();
                $image_url = get_the_post_thumbnail_url(get_the_ID(), 'medium') ?: get_template_directory_uri() . '/assets/img/core-img/logo.png';
                $property_location = get_post_meta(get_the_ID(), '_property_location', true); 
                $property_price = get_post_meta(get_the_ID(), '_property_price', true);
                
                echo '<div class="single-recent-post d-flex align-items-center">';
                echo '<div class="properties-post-thumb">';
                echo '<a href="' . get_permalink() . '"><img src="' . esc_url($image_url) . '" alt="' . esc_attr(get_the_title()) . '"></a>';
                echo '</div>';
                echo '<div class="post-content">';
                echo '<a href="' . get_permalink() . '" class="post-title">' . get_the_title() . '</a>';
                echo '<p class="properties--location"><i class="fa fa-map-marker" aria-hidden="true"></i> ' . esc_html($property_location) . '</p>';
                echo '<p class="properties--rent">Rent: <span>$' . esc_html($property_price) . '</span></p>';
                echo '</div>';
                echo '</div>';
            }
            wp_reset_postdata();
        } else {
            echo '<p>No properties found.</p>';
        }

        echo '</div>';
        echo $args['after_widget'];
    }

    // Backend Form (Optional)
    public function form($instance) {
        echo '<p>Displays the 3 most recent property posts automatically.</p>';
    }

    // Update Widget (Optional)
    public function update($new_instance, $old_instance) {
        return $new_instance;
    }
}

// Register the widget
function register_recent_properties_widget() {
    register_widget('Recent_Properties_Widget');
}
add_action('widgets_init', 'register_recent_properties_widget');
