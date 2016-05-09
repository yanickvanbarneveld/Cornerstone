<?php if (!defined('ABSPATH')) die('Forbidden');

global $kc;
$kc->add_map(
    array(
        'cs_button' => array(
            'name' => 'My Element',
            'description' => __('My sample element', 'kingcomposer'),
            'icon' => 'sl-paper-plane',
            'category' => 'Content',
            'params' => array(
                array(
                    'name' => 'param_1',
                    'label' => 'Param Sample',
                    'type' => 'text',
                )
            )
        )
    )
);

add_shortcode('cs_button', 'shortcode');

function shortcode($atts) {
    return 'fap';
}
