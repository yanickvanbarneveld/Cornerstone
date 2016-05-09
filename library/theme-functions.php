<?php if (!defined('ABSPATH')) die('Forbidden');

/**
 * This function removes the link from images in the front end of
 * your WordPress website.
 *
 * @return null
 */
function remove_image_link() {
	$image_set = get_option('image_default_link_type');

	if ($image_set !== 'none') {
		update_option('image_default_link_type', 'none');
	}
}

/**
 * This function removes the file version from the URL in the front end
 * of your WordPress website.
 *
 * @return null
 */
function remove_file_version($src) {
	if(strpos($src, '?ver=')) {
        $src = remove_query_arg('ver', $src);
    }

    return $src;
}

/**
 * This function adds the main style and some other required scripts to
 * the wp_head() function which is located in the WordPress Header file.
 *
 * @return null
 */
function add_scripts() {
	wp_enqueue_style('cs_style', get_stylesheet_uri());

	wp_enqueue_script('jquery');
}

function add_admin_scripts() {
	wp_enqueue_style('cs_style', get_template_directory_uri() . '/assets/css/backend.css');
}
