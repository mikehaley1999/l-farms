<?php
/**
 * Langenstein Farms.
 *
 * This file adds the Customizer additions to the Langenstein Farms Theme.
 *
 * @package Langenstein Farms
 * @author  StudioPress
 * @license GPL-2.0+
 * @link    http://www.studiopress.com/
 */

add_action( 'customize_register', 'langenstein_farms_customizer_register' );
/**
 * Register settings and controls with the Customizer.
 *
 * @since 2.2.3
 *
 * @param WP_Customize_Manager $wp_customize Customizer object.
 */
function langenstein_farms_customizer_register( $wp_customize ) {

	$wp_customize->add_setting(
		'langenstein_farms_link_color',
		array(
			'default'           => langenstein_farms_customizer_get_default_link_color(),
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'langenstein_farms_link_color',
			array(
				'description' => __( 'Change the color of post info links, hover color of linked titles, hover color of menu items, and more.', 'langenstein-farms' ),
				'label'       => __( 'Link Color', 'langenstein-farms' ),
				'section'     => 'colors',
				'settings'    => 'langenstein_farms_link_color',
			)
		)
	);

	$wp_customize->add_setting(
		'langenstein_farms_accent_color',
		array(
			'default'           => langenstein_farms_customizer_get_default_accent_color(),
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'langenstein_farms_accent_color',
			array(
				'description' => __( 'Change the default hovers color for button.', 'langenstein-farms' ),
				'label'       => __( 'Accent Color', 'langenstein-farms' ),
				'section'     => 'colors',
				'settings'    => 'langenstein_farms_accent_color',
			)
		)
	);

}
