<?php

if ( class_exists("Kirki")){

	// LOGO

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'fish_aquarium_logo_resizer',
		'label'       => esc_html__( 'Adjust Your Logo Size ', 'fish-aquarium' ),
		'section'     => 'title_tagline',
		'default'     => 70,
		'choices'     => [
			'min'  => 10,
			'max'  => 300,
			'step' => 10,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fish_aquarium_enable_logo_text',
		'section'     => 'title_tagline',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Site Title and Tagline', 'fish-aquarium' ) . '</h3>',
		'priority'    => 10,
	] );

  Kirki::add_field( 'theme_config_id', [
			'type'        => 'switch',
			'settings'    => 'fish_aquarium_display_header_title',
			'label'       => esc_html__( 'Site Title Enable / Disable Button', 'fish-aquarium' ),
			'section'     => 'title_tagline',
			'default'     => '1',
			'priority'    => 10,
			'choices'     => [
				'on'  => esc_html__( 'Enable', 'fish-aquarium' ),
				'off' => esc_html__( 'Disable', 'fish-aquarium' ),
			],
		] );

	Kirki::add_field( 'theme_config_id', [
			'type'        => 'switch',
			'settings'    => 'fish_aquarium_display_header_text',
			'label'       => esc_html__( 'Tagline Enable / Disable Button', 'fish-aquarium' ),
			'section'     => 'title_tagline',
			'default'     => '1',
			'priority'    => 10,
			'choices'     => [
				'on'  => esc_html__( 'Enable', 'fish-aquarium' ),
				'off' => esc_html__( 'Disable', 'fish-aquarium' ),
			],
		] );

	// PANEL

	Kirki::add_panel( 'fish_aquarium_panel_id', array(
	    'priority'    => 10,
	    'title'       => esc_html__( 'Theme Options', 'fish-aquarium' ),
	) );

	// Scroll Top

	Kirki::add_section( 'fish_aquarium_section_scroll', array(
	    'title'          => esc_html__( 'Additional Settings', 'fish-aquarium' ),
	    'description'    => esc_html__( 'Scroll To Top', 'fish-aquarium' ),
	    'panel'          => 'fish_aquarium_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'fish_aquarium_scroll_enable_setting',
		'label'       => esc_html__( 'Here you can enable or disable your scroller.', 'fish-aquarium' ),
		'section'     => 'fish_aquarium_section_scroll',
		'default'     => '1',
		'priority'    => 10,
	] );

	new \Kirki\Field\Select([
		'settings'    => 'menu_text_transform_fish_aquarium',
		'label'       => esc_html__( 'Menus Text Transform', 'fish-aquarium' ),
		'section'     => 'fish_aquarium_section_scroll',
		'default'     => 'CAPITALISE',
		'placeholder' => esc_html__( 'Choose an option', 'fish-aquarium' ),
		'choices'     => [
			'CAPITALISE' => esc_html__( 'CAPITALISE', 'fish-aquarium' ),
			'UPPERCASE' => esc_html__( 'UPPERCASE', 'fish-aquarium' ),
			'LOWERCASE' => esc_html__( 'LOWERCASE', 'fish-aquarium' ),

		],
	]);

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'fish_aquarium_container_width',
		'label'       => esc_html__( 'Theme Container Width', 'fish-aquarium' ),
		'section'     => 'fish_aquarium_section_scroll',
		'default'     => 100,
		'choices'     => [
			'min'  => 50,
			'max'  => 100,
			'step' => 1,
		],
	] );


	// POST SECTION

	Kirki::add_section( 'fish_aquarium_section_post', array(
	    'title'          => esc_html__( 'Post Settings', 'fish-aquarium' ),
	    'description'    => esc_html__( 'Here you can get different post settings', 'fish-aquarium' ),
	    'panel'          => 'fish_aquarium_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fish_aquarium_enable_post_heading',
		'section'     => 'fish_aquarium_section_post',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Post Settings.', 'fish-aquarium' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'fish_aquarium_blog_admin_enable',
		'label'       => esc_html__( 'Post Author Enable / Disable Button', 'fish-aquarium' ),
		'section'     => 'fish_aquarium_section_post',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'fish-aquarium' ),
			'off' => esc_html__( 'Disable', 'fish-aquarium' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'fish_aquarium_blog_comment_enable',
		'label'       => esc_html__( 'Post Comment Enable / Disable Button', 'fish-aquarium' ),
		'section'     => 'fish_aquarium_section_post',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'fish-aquarium' ),
			'off' => esc_html__( 'Disable', 'fish-aquarium' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'fish_aquarium_post_excerpt_number',
		'label'       => esc_html__( 'Post Content Range', 'fish-aquarium' ),
		'section'     => 'fish_aquarium_section_post',
		'default'     => 15,
		'choices'     => [
			'min'  => 0,
			'max'  => 100,
			'step' => 1,
		],
	] );

	// HEADER SECTION

	Kirki::add_section( 'fish_aquarium_section_header', array(
	    'title'          => esc_html__( 'Header Settings', 'fish-aquarium' ),
	    'description'    => esc_html__( 'Here you can add header information.', 'fish-aquarium' ),
	    'panel'          => 'fish_aquarium_panel_id',
	    'priority'       => 160,
	) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fish_aquarium_button_heading',
		'section'     => 'fish_aquarium_section_header',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Header Button', 'fish-aquarium' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'label'       => esc_html__( 'Button Text', 'fish-aquarium' ),
		'settings' => 'fish_aquarium_header_btn_text',
		'section'  => 'fish_aquarium_section_header',
		'default'  => '',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'url',
		'label'       => esc_html__( 'Button URL', 'fish-aquarium' ),
		'settings' => 'fish_aquarium_header_btn_url',
		'section'  => 'fish_aquarium_section_header',
		'default'  => '',
	] );

	// SLIDER SECTION

	Kirki::add_section( 'fish_aquarium_blog_slide_section', array(
        'title'          => esc_html__( ' Slider Settings', 'fish-aquarium' ),
        'description'    => esc_html__( 'You have to select post category to show slider.', 'fish-aquarium' ),
        'panel'          => 'fish_aquarium_panel_id',
        'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fish_aquarium_enable_heading',
		'section'     => 'fish_aquarium_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Slider', 'fish-aquarium' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'fish_aquarium_blog_box_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'fish-aquarium' ),
		'section'     => 'fish_aquarium_blog_slide_section',
		'default'     => '0',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'fish-aquarium' ),
			'off' => esc_html__( 'Disable', 'fish-aquarium' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'fish_aquarium_title_unable_disable',
		'label'       => esc_html__( 'Slide Title Enable / Disable', 'fish-aquarium' ),
		'section'     => 'fish_aquarium_blog_slide_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'fish-aquarium' ),
			'off' => esc_html__( 'Disable', 'fish-aquarium' ),
		],
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fish_aquarium_slider_heading',
		'section'     => 'fish_aquarium_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Slider', 'fish-aquarium' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'number',
		'settings'    => 'fish_aquarium_blog_slide_number',
		'label'       => esc_html__( 'Number of slides to show', 'fish-aquarium' ),
		'section'     => 'fish_aquarium_blog_slide_section',
		'default'     => 3,
		'choices'     => [
			'min'  => 0,
			'max'  => 80,
			'step' => 1,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'select',
		'settings'    => 'fish_aquarium_blog_slide_category',
		'label'       => esc_html__( 'Select the category to show slider ( Image Dimension 1600 x 600 )', 'fish-aquarium' ),
		'section'     => 'fish_aquarium_blog_slide_section',
		'default'     => '',
		'placeholder' => esc_html__( 'Select an category...', 'fish-aquarium' ),
		'priority'    => 10,
		'choices'     => fish_aquarium_get_categories_select(),
	] );

	//FEATURED PRODUCT SECTION

	Kirki::add_section( 'fish_aquarium_featured_product_section', array(
	    'title'          => esc_html__( 'Featured Product Settings', 'fish-aquarium' ),
	    'panel'          => 'fish_aquarium_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fish_aquarium_enable_heading',
		'section'     => 'fish_aquarium_featured_product_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Featured Product',  'fish-aquarium' ) . '</h3>',
		'priority'    => 1,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'fish_aquarium_featured_product_section_enable',
		'label'       => esc_html__( 'Section Enable / Disable',  'fish-aquarium' ),
		'section'     => 'fish_aquarium_featured_product_section',
		'default'     => '0',
		'priority'    => 2,
		'choices'     => [
			'on'  => esc_html__( 'Enable',  'fish-aquarium' ),
			'off' => esc_html__( 'Disable',  'fish-aquarium' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
        'type'     => 'text',
        'settings' => 'fish_aquarium_featured_product_heading' ,
        'label'    => esc_html__( 'Heading',  'fish-aquarium' ),
        'section'  => 'fish_aquarium_featured_product_section',
    ] );
    
	// FOOTER SECTION

	Kirki::add_section( 'fish_aquarium_footer_section', array(
        'title'          => esc_html__( 'Footer Settings', 'fish-aquarium' ),
        'description'    => esc_html__( 'Here you can change copyright text', 'fish-aquarium' ),
        'panel'          => 'fish_aquarium_panel_id',
        'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fish_aquarium_footer_text_heading',
		'section'     => 'fish_aquarium_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Copyright Text', 'fish-aquarium' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'fish_aquarium_footer_text',
		'section'  => 'fish_aquarium_footer_section',
		'default'  => '',
		'priority' => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'fish_aquarium_footer_enable_heading',
		'section'     => 'fish_aquarium_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Footer Link', 'fish-aquarium' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'fish_aquarium_copyright_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'fish-aquarium' ),
		'section'     => 'fish_aquarium_footer_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'fish-aquarium' ),
			'off' => esc_html__( 'Disable', 'fish-aquarium' ),
		],
	] );
}

add_action( 'customize_register', 'fish_aquarium_customizer_settings' );
function fish_aquarium_customizer_settings( $wp_customize ) {
	$args = array(
       'type'                     => 'product',
        'child_of'                 => 0,
        'parent'                   => '',
        'orderby'                  => 'term_group',
        'order'                    => 'ASC',
        'hide_empty'               => false,
        'hierarchical'             => 1,
        'number'                   => '',
        'taxonomy'                 => 'product_cat',
        'pad_counts'               => false
    );
	$categories = get_categories($args);
	$cat_posts = array();
	$m = 0;
	$cat_posts[]='Select';
	foreach($categories as $category){
		if($m==0){
			$default = $category->slug;
			$m++;
		}
		$cat_posts[$category->slug] = $category->name;
	}

	$wp_customize->add_setting('fish_aquarium_featured_product_category',array(
		'default'	=> 'select',
		'sanitize_callback' => 'fish_aquarium_sanitize_select',
	));
	$wp_customize->add_control('fish_aquarium_featured_product_category',array(
		'type'    => 'select',
		'choices' => $cat_posts,
		'label' => __('Select category to display products ','fish-aquarium'),
		'section' => 'fish_aquarium_featured_product_section',
	));
}
