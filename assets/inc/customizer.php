<?php 

function wpb_customizer_register(){
	//Showcase Section
	$wp_customize->add_section('showcase', array(
		'title' => __('Showcase', 'wpbootstrap'),
		'description' => sprintf(__('Options for showcase', 'wpbootstrap'),
		'priority' => 130
	));
}

add_action('customize_register', 'wpb_customiser_register');