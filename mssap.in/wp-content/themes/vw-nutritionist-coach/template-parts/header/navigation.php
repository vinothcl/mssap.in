<?php
/**
 * The template part for header
 *
 * @package VW Nutritionist Coach
 * @subpackage vw_nutritionist_coach
 * @since VW Nutritionist Coach 1.0
 */
?>
<div id="header" class="menubar">
  <?php //if(has_nav_menu('primary')){ ?>
   <!-- <div class="toggle-nav mobile-menu">
      <button role="tab" onclick="vw_health_coaching_menu_open_nav()" class="responsivetoggle"><i class="<?php echo esc_attr(get_theme_mod('vw_health_coaching_res_open_menu_icon','fas fa-bars')); ?>"></i><span class="screen-reader-text"><?php esc_html_e('Open Button','vw-nutritionist-coach'); ?></span></button>
    </div> -->
  <?php //} ?>
	<!--<div id="mySidenav" class="nav sidenav">
   	<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'vw-nutritionist-coach' ); ?>">
      <?php 
        if(has_nav_menu('primary')){
          wp_nav_menu( array( 
            'theme_location' => 'primary',
            'container_class' => 'main-menu clearfix' ,
            'menu_class' => 'clearfix',
            'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav">%3$s</ul>',
            'fallback_cb' => 'wp_page_menu',
          ) ); 
        }
      ?>
      <a href="javascript:void(0)" class="closebtn mobile-menu" onclick="vw_health_coaching_menu_close_nav()"><i class="<?php echo esc_attr(get_theme_mod('vw_health_coaching_res_close_menu_icon','fas fa-times')); ?>"></i><span class="screen-reader-text"><?php esc_html_e('Close Button','vw-nutritionist-coach'); ?></span></a>
     </nav>
  </div> -->
	<div id=" " class=" ">
   		<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="Top Menu">
			 <?php 
				if(has_nav_menu('primary')){
				  wp_nav_menu( array( 
					'theme_location' => 'primary',
					'container_class' => '' ,
					'menu_class' => 'clearfix',
					'items_wrap' => '<ul id="%1$s" class="mobile_nav">%3$s</ul>',
					'fallback_cb' => 'wp_page_menu',
				  ) ); 
				}
			  ?>
			<style>
			@media screen and (max-width: 1000px)
				.main-navigation li {
					padding: 0;
				   display: inline-block!important;
					text-align: center;
				}
			</style>
		</nav>
   </div>
</div>