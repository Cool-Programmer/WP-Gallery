<?php
	
	require_once 'widgets/class-wp-widget-categories.php';

	function wpgal_theme_setup()
	{
		// Post formats feature
		add_theme_support('post-formats', [
			'gallery'
		]);

		// Post thumbnail feature
		add_theme_support('post-thumbnails');

		// Thumbnail size
		set_post_thumbnail_size(900, 600);
	}

	add_action('after_setup_theme', 'wpgal_theme_setup');


	// Widgetize
	function init_widgets()
	{
		register_sidebar([
			'name' => 'Categories',
			'id' => 'categories'
		]);
	}

	add_action('widgets_init', 'init_widgets');

	// Custom widget
	function custom_register_wigdets()
	{
		register_widget('WP_Widget_Categories_Custom');
	}

	add_action('widgets_init', 'custom_register_wigdets');