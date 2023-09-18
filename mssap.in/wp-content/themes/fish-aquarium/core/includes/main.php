<?php

add_action( 'admin_menu', 'fish_aquarium_getting_started' );
function fish_aquarium_getting_started() {
	add_theme_page( esc_html__('Get Started', 'fish-aquarium'), esc_html__('Get Started', 'fish-aquarium'), 'edit_theme_options', 'fish-aquarium-guide-page', 'fish_aquarium_test_guide');
}

function fish_aquarium_admin_enqueue_scripts() {
	wp_enqueue_style( 'fish-aquarium-admin-style', esc_url( get_template_directory_uri() ).'/css/main.css' );
}
add_action( 'admin_enqueue_scripts', 'fish_aquarium_admin_enqueue_scripts' );


if ( ! defined( 'FISH_AQUARIUM_DOCS_FREE' ) ) {
define('FISH_AQUARIUM_DOCS_FREE',__('https://www.misbahwp.com/docs/fish-aquarium-free-docs/','fish-aquarium'));
}
if ( ! defined( 'FISH_AQUARIUM_DOCS_PRO' ) ) {
define('FISH_AQUARIUM_DOCS_PRO',__('https://www.misbahwp.com/docs/fish-aquarium-pro-docs','fish-aquarium'));
}
if ( ! defined( 'FISH_AQUARIUM_BUY_NOW' ) ) {
define('FISH_AQUARIUM_BUY_NOW',__('https://www.misbahwp.com/themes/aquarium-wordpress-theme/','fish-aquarium'));
}
if ( ! defined( 'FISH_AQUARIUM_SUPPORT_FREE' ) ) {
define('FISH_AQUARIUM_SUPPORT_FREE',__('https://wordpress.org/support/theme/fish-aquarium','fish-aquarium'));
}
if ( ! defined( 'FISH_AQUARIUM_REVIEW_FREE' ) ) {
define('FISH_AQUARIUM_REVIEW_FREE',__('https://wordpress.org/support/theme/fish-aquarium/reviews/#new-post','fish-aquarium'));
}
if ( ! defined( 'FISH_AQUARIUM_DEMO_PRO' ) ) {
define('FISH_AQUARIUM_DEMO_PRO',__('https://www.misbahwp.com/demo/fish-aquarium/','fish-aquarium'));
}

function fish_aquarium_test_guide() { ?>
	<?php $theme = wp_get_theme(); ?>

	<div class="wrap" id="main-page">
		<div id="lefty">
			<div id="admin_links">
				<a href="<?php echo esc_url( FISH_AQUARIUM_DOCS_FREE ); ?>" target="_blank" class="blue-button-1"><?php esc_html_e( 'Documentation', 'fish-aquarium' ) ?></a>
				<a href="<?php echo esc_url( admin_url('customize.php') ); ?>" id="customizer" target="_blank"><?php esc_html_e( 'Customize', 'fish-aquarium' ); ?> </a>
				<a class="blue-button-1" href="<?php echo esc_url( FISH_AQUARIUM_SUPPORT_FREE ); ?>" target="_blank" class="btn3"><?php esc_html_e( 'Support', 'fish-aquarium' ) ?></a>
				<a class="blue-button-2" href="<?php echo esc_url( FISH_AQUARIUM_REVIEW_FREE ); ?>" target="_blank" class="btn4"><?php esc_html_e( 'Review', 'fish-aquarium' ) ?></a>
			</div>
			<div id="description">
				<h3><?php esc_html_e('Welcome! Thank you for choosing ','fish-aquarium'); ?><?php echo esc_html( $theme ); ?>  <span><?php esc_html_e('Version: ', 'fish-aquarium'); ?><?php echo esc_html($theme['Version']);?></span></h3>
				<img class="img_responsive" style="width:100%;" src="<?php echo esc_url( get_template_directory_uri() ); ?>/screenshot.png">
				<div id="description-inside">
					<?php
						$theme = wp_get_theme();
						echo wp_kses_post( apply_filters( 'misbah_theme_description', esc_html( $theme->get( 'Description' ) ) ) );
					?>
				</div>
			</div>
		</div>

		<div id="righty">
			<div class="postbox donate">
				<div class="d-table">
			    <ul class="d-column">
			      <li class="feature"><?php esc_html_e('Features','fish-aquarium'); ?></li>
			      <li class="free"><?php esc_html_e('Pro','fish-aquarium'); ?></li>
			      <li class="plus"><?php esc_html_e('Free','fish-aquarium'); ?></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('24hrs Priority Support','fish-aquarium'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Kirki Framework','fish-aquarium'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Posttype','fish-aquarium'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('One Click Demo Import','fish-aquarium'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Section Reordering','fish-aquarium'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Enable / Disable Option','fish-aquarium'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Multiple Sections','fish-aquarium'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Color Pallete','fish-aquarium'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Widgets','fish-aquarium'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Page Templates','fish-aquarium'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Typography','fish-aquarium'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Section Background Image / Color ','fish-aquarium'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
	  		</div>
				<h3 class="hndle"><?php esc_html_e( 'Upgrade to Premium', 'fish-aquarium' ); ?></h3>
				<div class="inside">
					<p><?php esc_html_e('Discover upgraded pro features with premium version click to upgrade.','fish-aquarium'); ?></p>
					<div id="admin_pro_links">
						<a class="blue-button-2" href="<?php echo esc_url( FISH_AQUARIUM_BUY_NOW ); ?>" target="_blank"><?php esc_html_e( 'Go Pro', 'fish-aquarium' ); ?></a>
						<a class="blue-button-1" href="<?php echo esc_url( FISH_AQUARIUM_DEMO_PRO ); ?>" target="_blank"><?php esc_html_e( 'Live Demo', 'fish-aquarium' ) ?></a>
						<a class="blue-button-2" href="<?php echo esc_url( FISH_AQUARIUM_DOCS_PRO ); ?>" target="_blank"><?php esc_html_e( 'Pro Docs', 'fish-aquarium' ) ?></a>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php } ?>
