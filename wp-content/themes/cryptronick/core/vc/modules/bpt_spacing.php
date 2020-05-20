<?php
if ( ! defined( 'ABSPATH' ) ) {
    die( '-1' );
}


if (function_exists('vc_map')) {
// Add list item
    vc_map(array(
        'name' => esc_html__('Spacing', 'cryptronick'),
        'base' => 'bpt_spacing',
        'class' => 'cryptronick_spacing',
        'category' => esc_html__('BPT Modules', 'cryptronick'),
        'icon' => 'bpt_icon_spacing',
        'content_element' => true,
        'description' => esc_html__('Spacing','cryptronick'),
        'params' => array(
            array(
                'type' => 'textfield',
                'heading' => esc_html__('Height', 'cryptronick'),
                'param_name' => 'height',
                'description' => esc_html__('Enter empty space height', 'cryptronick'),
                'value' => '32px',
                'save_always' => true,
                'admin_label' => true,
            ),
            array(
                'type' => 'bpt_checkbox',
                'heading' => esc_html__( 'Set Resonsive Empty Space Height', 'cryptronick' ),
                'param_name' => 'responsive_es',
            ),
            array(
                'type' => 'textfield',
                'heading' => esc_html__('Height for small Desktops', 'cryptronick'),
                'param_name' => 'height_size_sm_desctop',
                'description' => esc_html__( 'Enter height in pixels.', 'cryptronick' ),
                'edit_field_class' => 'vc_col-sm-6',
                'dependency' => array(
                    'element' => 'responsive_es',
                    'value' => 'true'
                ),
            ),
            array(
                'type' => 'textfield',
                'heading' => esc_html__('Height for Tablets', 'cryptronick'),
                'param_name' => 'height_tablet',
                'description' => esc_html__( 'Enter height in pixels.', 'cryptronick' ),
                'edit_field_class' => 'vc_col-sm-6',
                'dependency' => array(
                    'element' => 'responsive_es',
                    'value' => 'true'
                ),
            ),
            array(
                'type' => 'textfield',
                'heading' => esc_html__('Height for Mobile', 'cryptronick'),
                'param_name' => 'height_mobile',
                'description' => esc_html__( 'Enter height in pixels.', 'cryptronick' ),
                'edit_field_class' => 'vc_col-sm-6',
                'dependency' => array(
                    'element' => 'responsive_es',
                    'value' => 'true'
                ),
            ),
                    
        )
    ));
    
    if (class_exists('WPBakeryShortCode')) {
        class WPBakeryShortCode_bpt_spacing extends WPBakeryShortCode {
            
        }
    } 
}
