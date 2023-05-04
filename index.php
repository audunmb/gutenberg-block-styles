<?php

/**
 * Plugin Name: Gutenberg Block Styles
 * Plugin URI: https://github.com/audunmb/gutenberg-block-styles
 * Description: A simple plugin to demonstrate how to add block styles to Gutenberg.
 * Version: 1.2
 * Author: audunmb
 */

/* Register the javascript file that for the block styles */
 function customblockstyles_editor_assets() {
	wp_enqueue_script(	'custom-block-styles-script', plugins_url( 'custom-block-styles.js', __FILE__  ),
		  array( 'wp-blocks', 'wp-dom-ready', 'wp-edit-post' ),
	);
}
add_action( 'enqueue_block_editor_assets', 'customblockstyles_editor_assets' );

/* Register CSS for the block styles */

function custom_block_styles() {
	wp_enqueue_style(
		'custom-block-styles', plugins_url( 'custom-block-styles.css', __FILE__ ) );
}
add_action( 'enqueue_block_assets', 'custom_block_styles' );

	

