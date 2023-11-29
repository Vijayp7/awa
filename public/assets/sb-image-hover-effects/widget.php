<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// Register and load the widget
function SB_Image_load_widget() {
    register_widget('SB_Image_widget');
}

add_action('widgets_init', 'SB_Image_load_widget');

// Creating the widget 
class SB_Image_widget extends WP_Widget {

    function __construct() {
        parent::__construct(
// Base ID of your widget
                'SB_Image_widget',
// Widget name will appear in UI
                __('SB Image Hover Effects', 'sb_image_widget_widget'),
// Widget description
                array('description' => __('SB Image Hover Effects Widget', 'sb_image_widget_widget'),)
        );
    }

// Creating widget front-end

    public function widget($args, $instance) {
        $title = apply_filters('widget_title', $instance['title']);

// before and after widget arguments are defined by themes
        echo $args['before_widget'];
        echo sb_image_oxi_shortcode_function($title, 'user');
        echo $args['after_widget'];
    }

// Widget Backend 
    public function form($instance) {
        if (isset($instance['title'])) {
            $title = $instance['title'];
        } else {
            $title = __('1', 'sb_image_widget_widget');
        }
// Widget admin form
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Effects ID:'); ?></label> 
            <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
        </p>
        <?php
    }

// Updating widget replacing old instances with new
    public function update($new_instance, $old_instance) {
        $instance = array();
        $instance['title'] = (!empty($new_instance['title']) ) ? strip_tags($new_instance['title']) : '';
        return $instance;
    }

}

