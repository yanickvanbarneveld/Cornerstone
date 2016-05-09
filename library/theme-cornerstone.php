<?php if (!defined('ABSPATH')) die('Forbidden');

/**
 * This function loads all the required Shortcodes and the required maps
 * for using the KingComposer Page Builder plugin.
 * 
 * @return null
 */
function kingcomposer() {
	$dir = get_template_directory() . '/library/cornerstone/kingcomposer/shortcodes/*';
	foreach(glob($dir) as $file)
	{
		require_once $file;
	}
}

add_action('init', 'kingcomposer', 100);
