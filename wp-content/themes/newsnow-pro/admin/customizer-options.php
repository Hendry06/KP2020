<?php
/**
 * Defines customizer options
 *
 * @package Customizer Library Demo
 */

function customizer_library_demo_options() {

	// Theme defaults
	$primary_color = '#0091cd';
	$secondary_color = '#004b79';
	$link_hover_color = "#ff0000";

	// Stores all the controls that will be added
	$options = array();

	// Stores all the sections to be added
	$sections = array();

	// Stores all the panels to be added
	$panels = array();

	// Adds the sections to the $options array
	$options['sections'] = $sections;

	// More Examples
	$section = 'examples';

	// Arrays 

	$layout_choices = array(
		'choice-1' => 'Responsive Layout',
		'choice-2' => 'Fixed Layout'
	);

	$ad_position_choices = array(
		'1','2', '3','4','5','6','7','8','9','10'													
	);

	$sections[] = array(
		'id' => $section,
		'title' => __( 'Theme Settings', 'newsnow-pro' ),
		'priority' => '10'
	);

	$options['logo'] = array(
		'id' => 'logo',
		'label'   => __( 'Logo', 'newsnow-pro' ),
		'section' => $section,
		'type'    => 'image',
		'default' => get_template_directory_uri().'/assets/img/logo.png'
	);

	$options['favicon'] = array(
		'id' => 'favicon',
		'label'   => __( 'Favicon', 'newsnow-pro' ),
		'section' => $section,
		'type'    => 'image',
		'default' => ''
	);	
	
	$options['primary-color'] = array(
		'id' => 'primary-color',
		'label'   => __( 'Theme Primary Color', 'newsnow-pro' ),
		'section' => $section,
		'type'    => 'color',
		'default' => $primary_color // hex
	);

	$options['secondary-color'] = array(
		'id' => 'secondary-color',
		'label'   => __( 'Secondary Menu Background Color', 'newsnow-pro' ),
		'section' => $section,
		'type'    => 'color',
		'default' => $secondary_color // hex
	);

	$options['link-hover-color'] = array(
		'id' => 'link-hover-color',
		'label'   => __( 'Link Hover Color', 'newsnow-pro' ),
		'section' => $section,
		'type'    => 'color',
		'default' => $link_hover_color // hex
	);			

	$options['primary-font'] = array(
		'id' => 'primary-font',
		'label'   => __( 'Body Font', 'newsnow-pro' ),
		'section' => $section,
		'type'    => 'select',
		'choices' => customizer_library_get_font_choices(),
		'default' => 'Open Sans'
	);

	$options['secondary-font'] = array(
		'id' => 'secondary-font',
		'label'   => __( 'Heading Font', 'newsnow-pro' ),
		'section' => $section,
		'type'    => 'select',
		'choices' => customizer_library_get_font_choices(),
		'default' => 'Open Sans'
	);	

	$options['site-layout'] = array(
		'id' => 'site-layout',
		'label'   => __( 'Site Layout', 'newsnow-pro' ),
		'section' => $section,
		'type'    => 'radio',
		'choices' => $layout_choices,
		'default' => 'choice-1'
	);

	$options['sticky-nav-on'] = array(
		'id' => 'sticky-nav-on',
		'label'   => __( 'Sticky header navigation', 'newsnow-pro' ),
		'section' => $section,
		'type'    => 'checkbox',
		'default' => true,
	);			

	$options['header-search-on'] = array(
		'id' => 'header-search-on',
		'label'   => __( 'Display header search form', 'newsnow-pro' ),
		'section' => $section,
		'type'    => 'checkbox',
		'default' => true,
	);	

	$options['primary-nav-heading'] = array(
		'id' => 'primary-nav-heading',
		'label'   => __( 'Mobile Primary Menu Heading Text', 'newsnow-pro' ),
		'section' => $section,
		'type'    => 'text',
		'default' => __('Pages', 'newsnow-pro'),
	);

	$options['secondary-nav-heading'] = array(
		'id' => 'secondary-nav-heading',
		'label'   => __( 'Mobile Secondary Menu Heading Text', 'newsnow-pro' ),
		'section' => $section,
		'type'    => 'text',
		'default' => __('Categories', 'newsnow-pro'),
	);					

	$options['top-section-on'] = array(
		'id' => 'top-section-on',
		'label'   => __( 'Display top section (featured & latest) on homepage', 'newsnow-pro' ),
		'section' => $section,
		'type'    => 'checkbox',
		'default' => 1,
	);

	$options['latest-posts-num'] = array(
		'id' => 'latest-posts-num',
		'label'   => __( 'Number of latest posts to show', 'newsnow-pro' ),
		'section' => $section,
		'type'    => 'select',
		'choices' => $ad_position_choices,		
		'default' => '5',
	);

	$options['all-posts-url'] = array(
		'id' => 'all-posts-url',
		'label'   => __( 'Page URL to display all latest posts', 'newsnow-pro' ),
		'section' => $section,
		'type'    => 'url',
		'default' => home_url() . '/latest',
	);	

	$options['home-excerpt-length'] = array(
		'id' => 'home-excerpt-length',
		'label'   => __( 'Number of excerpt words (home)', 'newsnow-pro' ),
		'section' => $section,
		'type'    => 'text',
		'default' => '18',		
	);

	$options['archive-excerpt-length'] = array(
		'id' => 'archive-excerpt-length',
		'label'   => __( 'Number of excerpt words (archive)', 'newsnow-pro' ),
		'section' => $section,
		'type'    => 'text',
		'default' => '33',		
	);

	$options['content-ad-position'] = array(
		'id' => 'content-ad-position',
		'label'   => __( 'Display Content Ad after post:', 'newsnow-pro' ),
		'section' => $section,
		'type'    => 'select',
		'choices' => $ad_position_choices,		
		'default' => '1',
	);

	$options['single-featured-on'] = array(
		'id' => 'single-featured-on',
		'label'   => __( 'Display featured image on single posts', 'newsnow-pro' ),
		'section' => $section,
		'type'    => 'checkbox',
		'default' => false,
	);	
	
	$options['author-box-on'] = array(
		'id' => 'author-box-on',
		'label'   => __( 'Display author box on single posts', 'newsnow-pro' ),
		'section' => $section,
		'type'    => 'checkbox',
		'default' => 1,
	);	
	$options['related-posts-on'] = array(
		'id' => 'related-posts-on',
		'label'   => __( 'Display related posts on single posts', 'newsnow-pro' ),
		'section' => $section,
		'type'    => 'checkbox',
		'default' => 1,
	);	

	$options['footer-widgets-on'] = array(
		'id' => 'footer-widgets-on',
		'label'   => __( 'Display footer widgets', 'newsnow-pro' ),
		'section' => $section,
		'type'    => 'checkbox',
		'default' => 1,
	);

	$options['back-top-on'] = array(
		'id' => 'back-top-on',
		'label'   => __( 'Display "back to top" icon link on the site bottom', 'newsnow-pro' ),
		'section' => $section,
		'type'    => 'checkbox',
		'default' => 1,
	);			

	$options['footer-credit'] = array(
		'id' => 'footer-credit',
		'label'   => __( 'Customize Site Footer Text/Link', 'newsnow-pro' ),
		'section' => $section,
		'type'    => 'textarea',
		'default' => '&copy; ' . date("o") . ' <a href="' . home_url() .'">' . get_bloginfo('name') . '</a> - Theme by <a href="https://www.happythemes.com" target="_blank">HappyThemes</a>'
	);			
	//$options['example-range'] = array(
	//	'id' => 'example-range',
	//	'label'   => __( 'Example Range Input', 'newsnow-pro' ),
	//	'section' => $section,
	//	'type'    => 'range',
	//	'input_attrs' => array(
	//      'min'   => 0,
	//        'max'   => 10,
	//        'step'  => 1,
	//       'style' => 'color: #0a0',
	//	)
	//);

	// Adds the sections to the $options array
	$options['sections'] = $sections;

	// Adds the panels to the $options array
	$options['panels'] = $panels;

	$customizer_library = Customizer_Library::Instance();
	$customizer_library->add_options( $options );

	// To delete custom mods use: customizer_library_remove_theme_mods();

}
add_action( 'init', 'customizer_library_demo_options' );