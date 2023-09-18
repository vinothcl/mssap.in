<?php
	if ( ! function_exists( 'vw_nutritionist_coach_setup' ) ) :

	function vw_nutritionist_coach_setup() {
		$GLOBALS['content_width'] = apply_filters( 'vw_nutritionist_coach_content_width', 640 );
		
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'woocommerce' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'align-wide' );
		add_theme_support( 'wp-block-styles' );
		add_theme_support( 'responsive-embeds' );
		add_theme_support( 'html5', array( 'comment-list', 'search-form', 'comment-form', ) );
		add_theme_support( 'custom-logo', array(
			'height'      => 240,
			'width'       => 240,
			'flex-height' => true,
		) );

		add_theme_support( 'custom-background', array(
			'default-color' => 'ffffff'
		) );

		/*
		 * This theme styles the visual editor to resemble the theme style,
		 * specifically font, colors, icons, and column width.
		 */
		add_editor_style( array( 'css/editor-style.css', vw_health_coaching_font_url() ) );

		// Theme Activation Notice
		global $pagenow;

		if (is_admin() && ('themes.php' == $pagenow) && isset( $_GET['activated'] )) {
			add_action('admin_notices', 'vw_nutritionist_coach_activation_notice');
		}
	}
	endif;

	add_action( 'after_setup_theme', 'vw_nutritionist_coach_setup' );

	// Notice after Theme Activation
	function vw_nutritionist_coach_activation_notice() {
		echo '<div class="notice notice-success is-dismissible welcome-notice">';
			echo '<p>'. esc_html__( 'Thank you for choosing VW Nutritionist Coach Theme. Would like to have you on our Welcome page so that you can reap all the benefits of our VW Nutritionist Coach Theme.', 'vw-nutritionist-coach' ) .'</p>';
			echo '<span><a href="'. esc_url( admin_url( 'themes.php?page=vw_nutritionist_coach_guide' ) ) .'" class="button button-primary">'. esc_html__( 'GET STARTED', 'vw-nutritionist-coach' ) .'</a></span>';
		echo '</div>';
	}

	add_action( 'wp_enqueue_scripts', 'vw_nutritionist_coach_enqueue_styles' );
	function vw_nutritionist_coach_enqueue_styles() {
    	$parent_style = 'vw-health-coaching-basic-style'; // Style handle of parent theme.
    	
		wp_enqueue_style( 'bootstrap-style', esc_url(get_template_directory_uri()).'/assets/css/bootstrap.css' );
		wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
		wp_enqueue_style( 'vw-nutritionist-coach-style', get_stylesheet_uri(), array( $parent_style ) );
		require get_theme_file_path( '/inline-style.php' );
		wp_add_inline_style( 'vw-nutritionist-coach-style',$vw_health_coaching_custom_css );
		require get_parent_theme_file_path( '/inline-style.php' );
		wp_add_inline_style( 'vw-health-coaching-basic-style',$vw_health_coaching_custom_css );
		wp_enqueue_style( 'vw-nutritionist-coach-block-style', get_theme_file_uri('/assets/css/blocks.css') );
		wp_enqueue_script( 'owl.carousel-js', esc_url(get_theme_file_uri()). '/assets/js/owl.carousel.js', array('jquery') ,'',true);
		wp_enqueue_script( 'vw-nutritionist-coach-custom-scripts-jquery', esc_url(get_theme_file_uri()) . '/assets/js/custom.js', array('jquery'),'' ,true );
		wp_enqueue_style( 'owl.carousel-style', esc_url(get_theme_file_uri()) . '/assets/css/owl.carousel.css' );

		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
		
	add_action( 'init', 'vw_nutritionist_coach_remove_parent_function');
	function vw_nutritionist_coach_remove_parent_function() {
		remove_action( 'admin_notices', 'vw_health_coaching_activation_notice' );
		remove_action( 'admin_menu', 'vw_health_coaching_gettingstarted' );
	}

	add_action( 'customize_register', 'vw_nutritionist_coach_customize_register', 11 );
	function vw_nutritionist_coach_customize_register($wp_customize) {
		global $wp_customize;
		$wp_customize->remove_section( 'vw_health_coaching_upgrade_pro_link' );
		$wp_customize->remove_section( 'vw_health_coaching_get_started_link' );

		//Services We Provide Section
		$wp_customize->add_section( 'vw_nutritionist_coach_services_we_provide', array(
	    	'title'      => __( 'Services We Provide', 'vw-nutritionist-coach' ),
			'panel' => 'vw_health_coaching_panel_id',
			'priority' => 10,
		));

		$wp_customize->add_setting('vw_nutritionist_coach_services_we_provide_heading',array(
			'default'=> '',
			'sanitize_callback'	=> 'sanitize_text_field'
		)); 
		$wp_customize->add_control('vw_nutritionist_coach_services_we_provide_heading',array(
			'label'	=> esc_html__('Add Heading','vw-nutritionist-coach'),
			'input_attrs' => array(
	            'placeholder' => esc_html__( 'Services We Provide', 'vw-nutritionist-coach' ),
	        ),
			'section'=> 'vw_nutritionist_coach_services_we_provide',
			'type'=> 'text'
		));

		$wp_customize->add_setting('vw_nutritionist_coach_services_we_provide_content',array(
			'default'=> '',
			'sanitize_callback'	=> 'sanitize_text_field'
		)); 
		$wp_customize->add_control('vw_nutritionist_coach_services_we_provide_content',array(
			'label'	=> esc_html__('Add Content','vw-nutritionist-coach'),
			'input_attrs' => array(
	            'placeholder' => esc_html__( 'Lorem ipsum dolor sit amet', 'vw-nutritionist-coach' ),
	        ),
			'section'=> 'vw_nutritionist_coach_services_we_provide',
			'type'=> 'text'
		));

		$categories = get_categories();
		$cat_posts = array();
			$i = 0;
			$cat_posts[]='Select';
		foreach($categories as $category){
			if($i==0){
				$default = $category->slug;
				$i++;
			}
			$cat_posts[$category->slug] = $category->name;
		}

		$wp_customize->add_setting('vw_nutritionist_coach_service_category',array(
			'default'	=> 'select',
			'sanitize_callback' => 'vw_nutritionist_coach_sanitize_choices',
		));
		$wp_customize->add_control('vw_nutritionist_coach_service_category',array(
			'type'    => 'select',
			'choices' => $cat_posts,
			'label' => __('Select Services We Provide Category','vw-nutritionist-coach'),
			'section' => 'vw_nutritionist_coach_services_we_provide',
		));

		$wp_customize->add_setting( 'vw_nutritionist_coach_service_excerpt_number', array(
			'default'              => 30,
			'transport' 		   => 'refresh',
			'sanitize_callback'    => 'vw_health_coaching_sanitize_number_range'
		) );
		$wp_customize->add_control( 'vw_nutritionist_coach_service_excerpt_number', array(
			'label'       => esc_html__( 'Services We Provide Excerpt length','vw-nutritionist-coach' ),
			'section'     => 'vw_nutritionist_coach_services_we_provide',
			'type'        => 'range',
			'settings'    => 'vw_nutritionist_coach_service_excerpt_number',
			'input_attrs' => array(
				'step'             => 5,
				'min'              => 0,
				'max'              => 50,
			),
		) );

		$wp_customize->add_setting('vw_nutritionist_coach_services_button_txt',array(
			'default'=> '',
			'sanitize_callback'	=> 'sanitize_text_field'
		));
		$wp_customize->add_control('vw_nutritionist_coach_services_button_txt',array(
			'label'	=> __('Add Services We Provide Button Text','vw-nutritionist-coach'),
			'input_attrs' => array(
	            'placeholder' => __( 'LETS START', 'vw-nutritionist-coach' ),
	        ),
			'section'=> 'vw_nutritionist_coach_services_we_provide',
			'type'=> 'text'
		));

		$wp_customize->add_setting('vw_nutritionist_coach_services_btn_icon',array(
			'default'	=> 'fa fa-angle-right',
			'sanitize_callback'	=> 'sanitize_text_field'
		));	
		$wp_customize->add_control(new VW_Health_Coaching_Fontawesome_Icon_Chooser(
	        $wp_customize,'vw_nutritionist_coach_services_btn_icon',array(
			'label'	=> __('Add Services We Provide Button Icon','vw-nutritionist-coach'),
			'transport' => 'refresh',
			'section'	=> 'vw_nutritionist_coach_services_we_provide',
			'setting'	=> 'vw_nutritionist_coach_services_btn_icon',
			'type'		=> 'icon'
		)));
	}

	add_action( 'customize_register', 'vw_nutritionist_coach_typography_customize_register', 12 );
	function vw_nutritionist_coach_typography_customize_register( $wp_customize ) {
		$wp_customize->remove_control( 'vw_health_coaching_second_color' );
	}

	define('VW_NUTRITIONIST_COACH_FREE_THEME_DOC',__('https://www.vwthemesdemo.com/docs/free-vw-nutritionist-coach/','vw-nutritionist-coach'));
	define('VW_NUTRITIONIST_COACH_SUPPORT',__('https://wordpress.org/support/theme/vw-nutritionist-coach/','vw-nutritionist-coach'));
	define('VW_NUTRITIONIST_COACH_REVIEW',__('https://wordpress.org/support/theme/vw-nutritionist-coach/reviews','vw-nutritionist-coach'));

	function vw_nutritionist_coach_sanitize_choices( $input, $setting ) {
	    global $wp_customize; 
	    $control = $wp_customize->get_control( $setting->id ); 
	    if ( array_key_exists( $input, $control->choices ) ) {
	        return $input;
	    } else {
	        return $setting->default;
	    }
	}

	function vw_nutritionist_coach_sanitize_dropdown_pages( $page_id, $setting ) {
	  	$page_id = absint( $page_id );
	  	return ( 'publish' == get_post_status( $page_id ) ? $page_id : $setting->default );
	}

	/* Theme Widgets Setup */

	function vw_nutritionist_coach_widgets_init() {
		register_sidebar( array(
			'name'          => __( 'Footer Navigation 1', 'vw-nutritionist-coach' ),
			'description'   => __( 'Appears on footer 1', 'vw-nutritionist-coach' ),
			'id'            => 'footer-1',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		) );

		register_sidebar( array(
			'name'          => __( 'Footer Navigation 2', 'vw-nutritionist-coach' ),
			'description'   => __( 'Appears on footer 2', 'vw-nutritionist-coach' ),
			'id'            => 'footer-2',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		) );

		register_sidebar( array(
			'name'          => __( 'Footer Navigation 3', 'vw-nutritionist-coach' ),
			'description'   => __( 'Appears on footer 3', 'vw-nutritionist-coach' ),
			'id'            => 'footer-3',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		) );

		register_sidebar( array(
			'name'          => __( 'Footer Navigation 4', 'vw-nutritionist-coach' ),
			'description'   => __( 'Appears on footer 4', 'vw-nutritionist-coach' ),
			'id'            => 'footer-4',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		) );

		register_sidebar( array(
			'name'          => __( 'Social Icon', 'vw-nutritionist-coach' ),
			'description'   => __( 'Appears on topbar', 'vw-nutritionist-coach' ),
			'id'            => 'social-widget',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		) );
	}
	add_action( 'widgets_init', 'vw_nutritionist_coach_widgets_init' );

// Customizer Pro
load_template( ABSPATH . WPINC . '/class-wp-customize-section.php' );

class VW_Nutritionist_Coach_Customize_Section_Pro extends WP_Customize_Section {
	public $type = 'vw-nutritionist-coach';
	public $pro_text = '';
	public $pro_url = '';
	public function json() {
		$json = parent::json();
		$json['pro_text'] = $this->pro_text;
		$json['pro_url']  = esc_url( $this->pro_url );
		return $json;
	}
	protected function render_template() { ?>
		<li id="accordion-section-{{ data.id }}" class="accordion-section control-section control-section-{{ data.type }} cannot-expand">
			<h3 class="accordion-section-title">
				{{ data.title }}
				<# if ( data.pro_text && data.pro_url ) { #>
					<a href="{{ data.pro_url }}" class="button button-secondary alignright" target="_blank">{{ data.pro_text }}</a>
				<# } #>
			</h3>
		</li>
	<?php }
}

final class VW_Nutritionist_Coach_Customize {
	public static function get_instance() {
		static $instance = null;
		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}
		return $instance;
	}
	private function __construct() {}
	private function setup_actions() {
		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );
		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}
	public function sections( $manager ) {
		// Register custom section types.
		$manager->register_section_type( 'VW_Nutritionist_Coach_Customize_Section_Pro' );
		// Register sections.
		$manager->add_section( new VW_Nutritionist_Coach_Customize_Section_Pro( $manager, 'vw_nutritionist_coach_upgrade_pro_link',
		array(
			'priority'   => 1,
			'title'    => esc_html__( 'VW Nutritionist PRO', 'vw-nutritionist-coach' ),
			'pro_text' => esc_html__( 'UPGRADE PRO', 'vw-nutritionist-coach' ),
			'pro_url'  => esc_url('https://www.vwthemes.com/themes/nutritionist-coach-wordpress-theme/'),
		) ) );
	}
	public function enqueue_control_scripts() {
		wp_enqueue_script( 'vw-nutritionist-coach-customize-controls', get_stylesheet_directory_uri() . '/assets/js/customize-controls-child.js', array( 'customize-controls' ) );
		wp_enqueue_style( 'vw-nutritionist-coach-customize-controls', get_stylesheet_directory_uri() . '/assets/css/customize-controls-child.css' );
	}
}
VW_Nutritionist_Coach_Customize::get_instance();

/* getstart */
require get_theme_file_path('/inc/getstart/getstart.php');

/* Plugin Activation */
require get_theme_file_path() . '/inc/getstart/plugin-activation.php';

/* Tgm */
require get_theme_file_path() . '/inc/tgm/tgm.php';