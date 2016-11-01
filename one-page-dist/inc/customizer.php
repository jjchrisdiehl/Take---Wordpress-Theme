<?php
/**
 * One Page Theme Theme Customizer
 *
 * @package One Page Theme
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function one_page_theme_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';


// add a setting for the site logo
$wp_customize->add_setting('your_theme_logo');
// Add a control to upload the logo
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'your_theme_logo',
array(
'label' => 'Upload Logo',
'section' => 'title_tagline',
'settings' => 'your_theme_logo',
) ) );

/**
* Add Hero Section
*/
$wp_customize->add_section('hero_section', array(
'title' => 'Hero Image',
'description' => '',
'priority' => 120,
));

$wp_customize->add_setting('hero_section_image', 	
	array(
		'default'		=> get_template_directory_uri() . '/dist/images/iphone.png',
		'sanitize_callback'	=> 'esc_url_raw',
		'transport'		=> 'postMessage'
	));
// Add a control to upload the image
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'hero_section_image',
array(
'label' => 'Upload Hero Image',
'section' => 'hero_section',
'settings' => 'hero_section_image',
) ) );



}
add_action( 'customize_register', 'one_page_theme_customize_register' );




/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function one_page_theme_customize_preview_js() {
	wp_enqueue_script( 'one_page_theme_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'one_page_theme_customize_preview_js');


/**
*Custom Code
*/