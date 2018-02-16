<?php

//Fanatic Setup
	if ( ! function_exists('fanatic_setup') ) {
		function fanatic_setup() {
			//Add Theme Support
			add_theme_support( 'html5' );
			add_theme_support( 'title-tag' );
			add_theme_support( 'post-thumbnails' );
			/* Theme Menus */
			register_nav_menus(
				array(
					'primary' => __( 'Primary Menu',      'fanatic' )
				)
			);
		}
	}
	add_action( 'after_setup_theme', 'fanatic_setup' );

/* Initialize widgets */
	function fanatic_widgets_init() {
		register_sidebar( array(
			'name'          => 'Twitter',
			'id'            => 'twitter',
			'before_widget' => '<div class="">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="">',
			'after_title'   => '</h4>',
		) );
	}
	add_action( 'widgets_init', 'fanatic_widgets_init' );


// Include CSS & JS files
	function fanatic_scripts() {
		// get google CDN jQuery rather than local copy
		wp_deregister_script('jquery');
		wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js' , array() , '3.2.1', false);
		// Theme Styles
		wp_enqueue_style( 'main-style', get_template_directory_uri().'/assets/css/style.css?' . time() );
 		// Fonts
    // wp_enqueue_style( 'font-poppins', 'https://fonts.googleapis.com/css?family=Poppins:300,400,700' );
		// wp_enqueue_style( 'font-montserrat', 'https://fonts.googleapis.com/css?family=Montserrat:400,700' );
		// Theme Scripts
		// wp_enqueue_script( 'slick-scripts', get_template_directory_uri().'/assets/vendor/slick/slick.min.js', array( 'jquery' ), '1.0' , true );
    // wp_enqueue_script( 'turn-scripts', get_template_directory_uri().'/assets/vendor/turnjs4/turn.min.js', array( 'jquery' ), '1.0' , true );
    // wp_enqueue_script( 'isotope-scripts', get_template_directory_uri().'/assets/vendor/isotope/isotope.min.js', array( 'jquery' ), '1.0' , true );
    wp_enqueue_script( 'theme-scripts', get_template_directory_uri().'/assets/js/script.min.js?' . time(), array( 'jquery' ), '1.0' , false );
	}
	add_action('wp_enqueue_scripts' , 'fanatic_scripts');

/* Load Include Files */
//require_once('inc/custom-post-types.php');
//require_once('inc/helper-functions.php');



/* Remove unnecessary header links */
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action('wp_head', 'index_rel_link');
remove_action( 'wp_head', 'feed_links_extra', 3 ); // Display the links to the extra feeds such as category feeds
remove_action( 'wp_head', 'feed_links', 2 ); // Display the links to the general feeds: Post and Comment Feed
//remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 ); // prev link
//remove_action( 'wp_head', 'start_post_rel_link', 10, 0 ); // start link
remove_action( 'wp_head', 'adjacent_posts_rel_link', 10, 0 ); // Display relational links for the posts adjacent to the current post.
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );
remove_action('wp_head', 'rest_output_link_wp_head', 10);
remove_action('wp_head', 'wp_oembed_add_discovery_links', 10);
