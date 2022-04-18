<?php

// Add the style
function hifs_register_styles(){
	wp_enqueue_style("hifs-stylesheet", get_template_directory_uri() . "/css/style.css"); //, array(), "all"
}

add_action('wp_enqueue_scripts', 'hifs_register_styles');

function wpdocs_custom_excerpt_length( $length ) {
    return 25;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );


function custom_post_type(){
	register_post_type("news",
		array(
			'labels'      => array(
				'name'          => __('News', 'textdomain'),
				'singular_name' => __('News', 'textdomain'),
			),
				'public'      => true,
				'has_archive' => true,
		)
	);
	register_taxonomy_for_object_type('category','news');
}
add_action('init', 'custom_post_type');
?>