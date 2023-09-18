<?php
/**
 * The template part for header
 *
 * @package VW Nutritionist Coach 
 * @subpackage vw_nutritionist_coach
 * @since VW Nutritionist Coach 1.0
 */
?>
<?php
  $vw_health_coaching_search_hide_show = get_theme_mod( 'vw_health_coaching_search_hide_show' );
  if ( 'Disable' == $vw_health_coaching_search_hide_show ) {
   $colmd = 'col-lg-9 col-md-8 col-6';
  } else { 
   $colmd = 'col-lg-8 col-md-7 col-6';
  } 
?>
<div class="main-header">
  <div class="main-header-inner">
    <div class="header-menu <?php if( get_theme_mod( 'vw_health_coaching_sticky_header', false) != '' || get_theme_mod( 'vw_health_coaching_stickyheader_hide_show', false) != '') { ?> header-sticky"<?php } else { ?>close-sticky <?php } ?>">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-4 col-12 align-self-center">
            <div class="logo text-lg-start text-md-start text-center mb-3 mb-lg-0 mb-md-0">
              <div class="logo-inner">
                <?php if ( has_custom_logo() ) : ?>
                  <div class="site-logo"><?php the_custom_logo(); ?></div>
                <?php endif; ?>
                <?php $blog_info = get_bloginfo( 'name' ); ?>
                  <?php if ( ! empty( $blog_info ) ) : ?>
                    <?php if ( is_front_page() && is_home() ) : ?>
                      <?php if( get_theme_mod('vw_health_coaching_logo_title_hide_show',true) != ''){ ?>
                        <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                      <?php } ?>
                    <?php else : ?>
                      <?php if( get_theme_mod('vw_health_coaching_logo_title_hide_show',true) != ''){ ?>
                        <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                      <?php } ?>
                    <?php endif; ?>
                  <?php endif; ?>
                  <?php
                    $description = get_bloginfo( 'description', 'display' );
                    if ( $description || is_customize_preview() ) :
                  ?>
                  <?php if( get_theme_mod('vw_health_coaching_tagline_hide_show',true) != ''){ ?>
                    <p class="site-description">
                      <?php echo esc_html($description); ?>
                    </p>
                  <?php } ?>
                <?php endif; ?>
              </div>
            </div>
          </div>

          <div class="<?php echo 'col-lg-9 col-md-8 col-12 col-sm-12'; //esc_html( $colmd ); ?> align-self-center">
            <?php get_template_part( 'template-parts/header/navigation' ); ?>
          </div>
          <?php if ( 1 == 2 && 'Disable' != $vw_health_coaching_search_hide_show ) {?>
            <div class="col-lg-1 col-md-1 col-6 align-self-center">
              <div class="search-box text-lg-end text-md-end text-start">
                <span><a href="#"><i class="<?php echo esc_attr(get_theme_mod('vw_health_coaching_search_icon','fas fa-search')); ?>"></i></a></span>
              </div>
            </div>
          <?php } ?>
        </div>
        <div class="serach_outer">
          <div class="closepop"><a href="#maincontent"><i class="<?php echo esc_attr(get_theme_mod('vw_health_coaching_search_close_icon','fa fa-window-close')); ?>"></i></a></div>
          <div class="serach_inner">
            <?php get_search_form(); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>