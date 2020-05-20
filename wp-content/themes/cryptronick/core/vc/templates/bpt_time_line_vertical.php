<?php

    $theme_color = esc_attr(Cryptronick_Theme_Helper::get_option("theme-custom-color"));

    $defaults = array(
        'values' => '',
        'item_el_class' => '',
        'appear_anim' => true,
    );

    $atts = vc_shortcode_attribute_parse($defaults, $atts);
    extract($atts);

    $compile = $content = $time_line_wrap_classes = $animation_class = '';

    wp_enqueue_script('cryptronick-appear', get_template_directory_uri() . '/js/jquery.appear.js', array(), false, false);

    // Animation
    if (!empty($atts['css_animation'])) {
        $animation_class = $this->getCSSAnimation( $atts['css_animation'] );
    }

    // social wrapper classes
    $time_line_wrap_classes .= (bool)$appear_anim ? ' appear_anim' : '';
    $time_line_wrap_classes .= !empty($animation_class) ? ' '.$animation_class : '';
    $time_line_wrap_classes .= !empty($item_el_class) ? ' '.$item_el_class : '';

    $values = (array) vc_param_group_parse_atts( $values );
    $item_data = array();
    foreach ( $values as $data ) {
        $new_data = $data;
        $new_data['title'] = isset( $data['title'] ) ? $data['title'] : '';
        $new_data['descr'] = isset( $data['descr'] ) ? $data['descr'] : '';
        $new_data['date'] = isset( $data['date'] ) ? $data['date'] : '';
        $new_data['color'] = isset( $data['color'] ) ? $data['color'] : $theme_color;
        $new_data['active'] = isset( $data['active'] ) ? $data['active'] : false;

        $item_data[] = $new_data;
    }

    foreach ( $item_data as $item_d ) {

        $item_class = ((bool)$item_d['active']) ? 'item_active' : '';

        // uniq id
        $time_line_id = uniqid( "time_line_" );
        $time_line_attr = 'id='.$time_line_id;

        // custom social colors
        ob_start();
            echo "#$time_line_id .time_line-check{
                border-color: ".$item_d['color'].";
            }";
            echo "#$time_line_id .time_line-date{
                color: ".$item_d['color'].";
            }";
            echo "#$time_line_id .time_line-content:before,
                #$time_line_id.item_active .time_line-check{
                background: ".$item_d['color'].";
            }";
        $styles = ob_get_clean();
        Cryptronick_shortcode_css()->enqueue_cryptronick_css($styles);

        $content .= '<div '.$time_line_attr.' class="time_line-item '.$item_class.'">';
            $content .= '<div class="time_line-date_wrap">';
                $content .= '<div class="time_line-check"><i class="flaticon-mark-1"></i></div>';
                $content .= '<h4 class="time_line-date">'.esc_html($item_d['date']).'</h4>';
            $content .= '</div>';
            $content .= '<div class="time_line-content">';
                $content .= '<h5 class="time_line-title">'.esc_html($item_d['title']).'</h5>';
                $content .= '<div class="time_line-descr">'.esc_html($item_d['descr']).'</div>';
            $content .= '</div>';
        $content .= '</div>';

    }

    $compile .= '<div class="cryptronick_module_time_line_vertical'.esc_attr($time_line_wrap_classes).'">';
        $compile .= $content;
    $compile .= '</div>';

    echo sprintf("%s", $compile);

?>