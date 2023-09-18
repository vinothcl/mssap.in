<?php
//about theme info
add_action( 'admin_menu', 'vw_nutritionist_coach_gettingstarted' );
function vw_nutritionist_coach_gettingstarted() {    	
	add_theme_page( esc_html__('About VW Nutritionist Coach', 'vw-nutritionist-coach'), esc_html__('About VW Nutritionist Coach', 'vw-nutritionist-coach'), 'edit_theme_options', 'vw_nutritionist_coach_guide', 'vw_nutritionist_coach_mostrar_guide');   
}

// Add a Custom CSS file to WP Admin Area
function vw_nutritionist_coach_admin_theme_style() {
   wp_enqueue_style('vw-nutritionist-coach-custom-admin-style', esc_url(get_theme_file_uri()) . '/inc/getstart/getstart.css');
   wp_enqueue_script('vw-nutritionist-coach-tabs', esc_url(get_theme_file_uri()) . '/inc/getstart/js/tab.js');
}
add_action('admin_enqueue_scripts', 'vw_nutritionist_coach_admin_theme_style');

//guidline for about theme
function vw_nutritionist_coach_mostrar_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( 'vw-nutritionist-coach' );
?>

<div class="wrapper-info">
    <div class="col-left">
    	<h2><?php esc_html_e( 'Welcome to VW Nutritionist Coach Theme', 'vw-nutritionist-coach' ); ?> <span class="version">Version: <?php echo esc_html($theme['Version']);?></span></h2>
    	<p><?php esc_html_e('All our WordPress themes are modern, minimalist, 100% responsive, seo-friendly,feature-rich, and multipurpose that best suit designers, bloggers and other professionals who are working in the creative fields.','vw-nutritionist-coach'); ?></p>
    </div>
    <div class="col-right">
    	<div class="logo">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/final-logo.png" alt="" />
		</div>
    </div>

    <div class="tab-sec">
		<div class="tab">
		  	<button class="tablinks" onclick="vw_nutritionist_coach_open_tab(event, 'lite_theme')"><?php esc_html_e( 'Setup With Customizer', 'vw-nutritionist-coach' ); ?></button>
		  	<button class="tablinks" onclick="vw_nutritionist_coach_open_tab(event, 'gutenberg_editor')"><?php esc_html_e( 'Setup With Gutunberg Block', 'vw-nutritionist-coach' ); ?></button>
		  	<button class="tablinks" onclick="vw_nutritionist_coach_open_tab(event, 'product_addons_editor')"><?php esc_html_e( 'Woocommerce Product Addons', 'vw-nutritionist-coach' ); ?></button>
		</div>
		
		<?php
			$vw_nutritionist_coach_plugin_custom_css = '';
			if(class_exists('Ibtana_Visual_Editor_Menu_Class')){
				$vw_nutritionist_coach_plugin_custom_css ='display: block';
			}
		?>
		<div id="lite_theme" class="tabcontent open">
			<?php if(!class_exists('Ibtana_Visual_Editor_Menu_Class')){ 
				$plugin_ins = VW_Nutritionist_Coach_Plugin_Activation_Settings::get_instance();
				$vw_nutritionist_coach_actions = $plugin_ins->recommended_actions;
				?>
				<div class="vw-nutritionist-coach-recommended-plugins">
				    <div class="vw-nutritionist-coach-action-list">
				        <?php if ($vw_nutritionist_coach_actions): foreach ($vw_nutritionist_coach_actions as $key => $vw_nutritionist_coach_actionValue): ?>
				                <div class="vw-nutritionist-coach-action" id="<?php echo esc_attr($vw_nutritionist_coach_actionValue['id']);?>">
			                        <div class="action-inner">
			                            <h3 class="action-title"><?php echo esc_html($vw_nutritionist_coach_actionValue['title']); ?></h3>
			                            <div class="action-desc"><?php echo esc_html($vw_nutritionist_coach_actionValue['desc']); ?></div>
			                            <?php echo wp_kses_post($vw_nutritionist_coach_actionValue['link']); ?>
			                            <a class="ibtana-skip-btn" get-start-tab-id="lite-theme-tab" href="javascript:void(0);"><?php esc_html_e('Skip','vw-nutritionist-coach'); ?></a>
			                        </div>
				                </div>
				            <?php endforeach;
				        endif; ?>
				    </div>
				</div>
			<?php } ?>
			<div class="lite-theme-tab" style="<?php echo esc_attr($vw_nutritionist_coach_plugin_custom_css); ?>">
				<h3><?php esc_html_e( 'Lite Theme Information', 'vw-nutritionist-coach' ); ?></h3>
				<hr class="h3hr">
			  	<p><?php esc_html_e('The VW Nutritionist Coach WordPress Theme is a simple, clean and elegant WordPress theme thats perfect for nutritionists and dietitians that want to share their knowledge with the world. The theme also works great for any other type of health-related business such as gyms, wellness programs, or personal trainers. While there are many different types of coaches, VW Nutritionist Coach WordPress themes are becoming increasingly popular. As the name suggests, a VW Nutritionist Coach is a professional who specializes in nutrition and weight loss. They work with their clients to create individualized plans that help them reach their goals. There are many benefits to hiring a VW Nutritionist Coach. They can help you lose weight, improve your eating habits, and make other lifestyle changes that can improve your health. If your looking for someone to help you make lasting changes. In addition to helping you lose weight, working with a nutritionist can also improve your overall health. Nutritionists can help you make sure your getting the nutrients your body needs, which can help reduce your risk of developing chronic diseases. Working one-on-one with a nutritionist coach when you work with a VW Nutritionist Coach, you will have the opportunity to work one-on-one with a professional who is dedicated to helping you reach your goals. Your VW Nutritionist Coach will create an individualized plan that takes into account your unique goals, preferences, and lifestyle. This type of personalized attention is one of the major advantages of working with a VW Nutritionist Coach.','vw-nutritionist-coach'); ?></p>
			  	<div class="col-left-inner">
			  		<h4><?php esc_html_e( 'Theme Documentation', 'vw-nutritionist-coach' ); ?></h4>
					<p><?php esc_html_e( 'If you need any assistance regarding setting up and configuring the Theme, our documentation is there.', 'vw-nutritionist-coach' ); ?></p>
					<div class="info-link">
						<a href="<?php echo esc_url( VW_NUTRITIONIST_COACH_FREE_THEME_DOC ); ?>" target="_blank"> <?php esc_html_e( 'Documentation', 'vw-nutritionist-coach' ); ?></a>
					</div>
					<hr>
					<h4><?php esc_html_e('Theme Customizer', 'vw-nutritionist-coach'); ?></h4>
					<p> <?php esc_html_e('To begin customizing your website, start by clicking "Customize".', 'vw-nutritionist-coach'); ?></p>
					<div class="info-link">
						<a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e('Customizing', 'vw-nutritionist-coach'); ?></a>
					</div>
					<hr>				
					<h4><?php esc_html_e('Having Trouble, Need Support?', 'vw-nutritionist-coach'); ?></h4>
					<p> <?php esc_html_e('Our dedicated team is well prepared to help you out in case of queries and doubts regarding our theme.', 'vw-nutritionist-coach'); ?></p>
					<div class="info-link">
						<a href="<?php echo esc_url( VW_NUTRITIONIST_COACH_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Support Forum', 'vw-nutritionist-coach'); ?></a>
					</div>
					<hr>
					<h4><?php esc_html_e('Reviews & Testimonials', 'vw-nutritionist-coach'); ?></h4>
					<p> <?php esc_html_e('All the features and aspects of this WordPress Theme are phenomenal. I\'d recommend this theme to all.', 'vw-nutritionist-coach'); ?>  </p>
					<div class="info-link">
						<a href="<?php echo esc_url( VW_NUTRITIONIST_COACH_REVIEW ); ?>" target="_blank"><?php esc_html_e('Reviews', 'vw-nutritionist-coach'); ?></a>
					</div>
			  		<div class="link-customizer">
						<h3><?php esc_html_e( 'Link to customizer', 'vw-nutritionist-coach' ); ?></h3>
						<hr class="h3hr">
						<div class="first-row">
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-buddicons-buddypress-logo"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[control]=custom_logo') ); ?>" target="_blank"><?php esc_html_e('Upload your logo','vw-nutritionist-coach'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-slides"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_health_coaching_slidersettings') ); ?>" target="_blank"><?php esc_html_e('Slider Settings','vw-nutritionist-coach'); ?></a>
								</div>
							</div>
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-welcome-write-blog"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_health_coaching_topbar') ); ?>" target="_blank"><?php esc_html_e('Topbar Settings','vw-nutritionist-coach'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-editor-table"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_nutritionist_coach_services_we_provide') ); ?>" target="_blank"><?php esc_html_e('Services We Provide','vw-nutritionist-coach'); ?></a>
								</div>
							</div>
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-menu"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=nav_menus') ); ?>" target="_blank"><?php esc_html_e('Menus','vw-nutritionist-coach'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-screenoptions"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=widgets') ); ?>" target="_blank"><?php esc_html_e('Footer Widget','vw-nutritionist-coach'); ?></a>
								</div>
							</div>

							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-format-gallery"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_health_coaching_post_settings') ); ?>" target="_blank"><?php esc_html_e('Post settings','vw-nutritionist-coach'); ?></a>
								</div>
								 <div class="row-box2">
									<span class="dashicons dashicons-align-center"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_health_coaching_woocommerce_section') ); ?>" target="_blank"><?php esc_html_e('WooCommerce Layout','vw-nutritionist-coach'); ?></a>
								</div> 
							</div>
							
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-admin-generic"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_health_coaching_left_right') ); ?>" target="_blank"><?php esc_html_e('General Settings','vw-nutritionist-coach'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-text-page"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_health_coaching_footer') ); ?>" target="_blank"><?php esc_html_e('Footer Text','vw-nutritionist-coach'); ?></a>
								</div>
							</div>
						</div>
					</div>
			  	</div>
				<div class="col-right-inner">
					<h3 class="page-template"><?php esc_html_e('How to set up Home Page Template','vw-nutritionist-coach'); ?></h3>
				  	<hr class="h3hr">
					<p><?php esc_html_e('Follow these instructions to setup Home page.','vw-nutritionist-coach'); ?></p>
	                <ul>
	                  	<p><span class="strong"><?php esc_html_e('1. Create a new page :','vw-nutritionist-coach'); ?></span><?php esc_html_e(' Go to ','vw-nutritionist-coach'); ?>
					  	<b><?php esc_html_e(' Dashboard >> Pages >> Add New Page','vw-nutritionist-coach'); ?></b></p>

	                  	<p><?php esc_html_e('Name it as "Home" then select the template "Custom Home Page".','vw-nutritionist-coach'); ?></p>
	                  	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/home-page-template.png" alt="" />
	                  	<p><span class="strong"><?php esc_html_e('2. Set the front page:','vw-nutritionist-coach'); ?></span><?php esc_html_e(' Go to ','vw-nutritionist-coach'); ?>
					  	<b><?php esc_html_e(' Settings >> Reading ','vw-nutritionist-coach'); ?></b></p>
					  	<p><?php esc_html_e('Select the option of Static Page, now select the page you created to be the homepage, while another page to be your default page.','vw-nutritionist-coach'); ?></p>
	                  	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/set-front-page.png" alt="" />
	                  	<p><?php esc_html_e(' Once you are done with this, then follow the','vw-nutritionist-coach'); ?> <a class="doc-links" href="https://www.vwthemesdemo.com/docs/free-vw-nutritionist-coach/" target="_blank"><?php esc_html_e('Documentation','vw-nutritionist-coach'); ?></a></p>
	                </ul>
			  	</div>
			</div>
		</div>	

		<div id="gutenberg_editor" class="tabcontent">
			<?php if(!class_exists('Ibtana_Visual_Editor_Menu_Class')){ 
			$plugin_ins = VW_Nutritionist_Coach_Plugin_Activation_Settings::get_instance();
			$vw_nutritionist_coach_actions = $plugin_ins->recommended_actions;
			?>
				<div class="vw-nutritionist-coach-recommended-plugins">
				    <div class="vw-nutritionist-coach-action-list">
				        <?php if ($vw_nutritionist_coach_actions): foreach ($vw_nutritionist_coach_actions as $key => $vw_nutritionist_coach_actionValue): ?>
				                <div class="vw-nutritionist-coach-action" id="<?php echo esc_attr($vw_nutritionist_coach_actionValue['id']);?>">
			                        <div class="action-inner plugin-activation-redirect">
			                            <h3 class="action-title"><?php echo esc_html($vw_nutritionist_coach_actionValue['title']); ?></h3>
			                            <div class="action-desc"><?php echo esc_html($vw_nutritionist_coach_actionValue['desc']); ?></div>
			                            <?php echo wp_kses_post($vw_nutritionist_coach_actionValue['link']); ?>
			                        </div>
				                </div>
				            <?php endforeach;
				        endif; ?>
				    </div>
				</div>
			<?php }else{ ?>
				<h3><?php esc_html_e( 'Gutunberg Blocks', 'vw-nutritionist-coach' ); ?></h3>
				<hr class="h3hr">
				<div class="vw-nutritionist-coach-pattern-page">
			    	<a href="<?php echo esc_url( admin_url( 'admin.php?page=ibtana-visual-editor-templates' ) ); ?>" class="vw-pattern-page-btn ibtana-dashboard-page-btn button-primary button"><?php esc_html_e('Ibtana Settings','vw-nutritionist-coach'); ?></a>
			    </div>

			    <div class="link-customizer-with-guternberg-ibtana">
						<h3><?php esc_html_e( 'Link to customizer', 'vw-nutritionist-coach' ); ?></h3>
						<hr class="h3hr">
						<div class="first-row">
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-buddicons-buddypress-logo"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[control]=custom_logo') ); ?>" target="_blank"><?php esc_html_e('Upload your logo','vw-nutritionist-coach'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-slides"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_health_coaching_slidersettings') ); ?>" target="_blank"><?php esc_html_e('Slider Settings','vw-nutritionist-coach'); ?></a>
								</div>
							</div>
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-menu"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=nav_menus') ); ?>" target="_blank"><?php esc_html_e('Menus','vw-nutritionist-coach'); ?></a>
								</div>
								
								<div class="row-box2">
									<span class="dashicons dashicons-text-page"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_health_coaching_footer_section') ); ?>" target="_blank"><?php esc_html_e('Footer Text','vw-nutritionist-coach'); ?></a>
								</div>
							</div>

							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-format-gallery"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_health_coaching_post_settings') ); ?>" target="_blank"><?php esc_html_e('Post settings','vw-nutritionist-coach'); ?></a>
								</div>
								 <div class="row-box2">
									<span class="dashicons dashicons-align-center"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_health_coaching_woocommerce_section') ); ?>" target="_blank"><?php esc_html_e('WooCommerce Layout','vw-nutritionist-coach'); ?></a>
								</div> 
							</div>
							
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-admin-generic"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_health_coaching_left_right') ); ?>" target="_blank"><?php esc_html_e('General Settings','vw-nutritionist-coach'); ?></a>
								</div>
								 <div class="row-box2">
									<span class="dashicons dashicons-screenoptions"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=widgets') ); ?>" target="_blank"><?php esc_html_e('Footer Widget','vw-nutritionist-coach'); ?></a>
								</div> 
							</div>
						</div>
				</div>
			<?php } ?>
		</div>

		<div id="product_addons_editor" class="tabcontent">
			<?php if(!class_exists('IEPA_Loader')){
				$plugin_ins = VW_Nutritionist_Coach_Plugin_Activation_Woo_Products::get_instance();
				$vw_nutritionist_coach_actions = $plugin_ins->recommended_actions;
				?>
				<div class="vw-nutritionist-coach-recommended-plugins">
					    <div class="vw-nutritionist-coach-action-list">
					        <?php if ($vw_nutritionist_coach_actions): foreach ($vw_nutritionist_coach_actions as $key => $vw_nutritionist_coach_actionValue): ?>
					                <div class="vw-nutritionist-coach-action" id="<?php echo esc_attr($vw_nutritionist_coach_actionValue['id']);?>">
				                        <div class="action-inner plugin-activation-redirect">
				                            <h3 class="action-title"><?php echo esc_html($vw_nutritionist_coach_actionValue['title']); ?></h3>
				                            <div class="action-desc"><?php echo esc_html($vw_nutritionist_coach_actionValue['desc']); ?></div>
				                            <?php echo wp_kses_post($vw_nutritionist_coach_actionValue['link']); ?>
				                        </div>
					                </div>
					            <?php endforeach;
					        endif; ?>
					    </div>
				</div>
			<?php }else{ ?>
				<h3><?php esc_html_e( 'Woocommerce Products Blocks', 'vw-nutritionist-coach' ); ?></h3>
				<hr class="h3hr">
				<div class="vw-nutritionist-coach-pattern-page">
					<p><?php esc_html_e('Follow the below instructions to setup Products Templates.','vw-nutritionist-coach'); ?></p>
					<p><b><?php esc_html_e('1. First you need to activate these plugins','vw-nutritionist-coach'); ?></b></p>
						<p><?php esc_html_e('1. Ibtana - WordPress Website Builder ','vw-nutritionist-coach'); ?></p>
						<p><?php esc_html_e('2. Ibtana - Ecommerce Product Addons.','vw-nutritionist-coach'); ?></p>
						<p><?php esc_html_e('3. Woocommerce','vw-nutritionist-coach'); ?></p>

					<p><b><?php esc_html_e('2. Go To Dashboard >> Ibtana Settings >> Woocommerce Templates','vw-nutritionist-coach'); ?></span></b></p>
	              	<div class="vw-nutritionist-coach-pattern-page-btn">
			    		<a href="<?php echo esc_url( admin_url( 'admin.php?page=ibtana-visual-editor-woocommerce-templates&ive_wizard_view=parent' ) ); ?>" class="vw-pattern-page-btn ibtana-dashboard-page-btn button-primary button"><?php esc_html_e('Woocommerce Templates','vw-nutritionist-coach'); ?></a>
			    	</div>
	              	<p><?php esc_html_e('You can create a template as you like.','vw-nutritionist-coach'); ?></span></p>
			    </div>
			<?php } ?>
		</div>
		
	</div>
</div>
<?php } ?>