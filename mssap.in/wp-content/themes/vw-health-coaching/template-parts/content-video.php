<?php
/**
 * The template part for displaying post
 *
 * @package VW Health Coaching 
 * @subpackage vw_health_coaching
 * @since VW Health Coaching 1.0
 */
?>
<?php 
  $vw_health_coaching_archive_year  = get_the_time('Y'); 
  $vw_health_coaching_archive_month = get_the_time('m'); 
  $vw_health_coaching_archive_day   = get_the_time('d'); 
?>
<?php
  $content = apply_filters( 'the_content', get_the_content() );
  $video = false;

  // Only get video from the content if a playlist isn't present.
  if ( false === strpos( $content, 'wp-playlist-script' ) ) {
    $video = get_media_embedded_in_content( $content, array( 'video', 'object', 'embed', 'iframe' ) );
  }
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>
  <div class="post-main-box wow zoomInDown delay-1000" data-wow-duration="2s">
    <div class="box-image">
      <?php
        if ( ! is_single() ) {
          // If not a single post, highlight the video file.
          if ( ! empty( $video ) ) {
            foreach ( $video as $video_html ) {
              echo '<div class="entry-video">';
                echo $video_html;
              echo '</div>';
            }
          };
        };
      ?> 
    </div>
    <div class="new-text">
      <h2 class="section-title"><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php echo the_title_attribute(); ?>"><?php the_title();?><span class="screen-reader-text"><?php the_title(); ?></span></a></h2>
      <?php if( get_theme_mod( 'vw_health_coaching_toggle_postdate',true) != '' || get_theme_mod( 'vw_health_coaching_toggle_author',true) != '' || get_theme_mod( 'vw_health_coaching_toggle_comments',true) != '' || get_theme_mod( 'vw_health_coaching_toggle_time',true) != '') { ?>
        <div class="post-info">
          <?php if(get_theme_mod('vw_health_coaching_toggle_postdate',true)==1){ ?>
            <i class="fas fa-calendar-alt"></i><span class="entry-date"><a href="<?php echo esc_url( get_day_link( $vw_health_coaching_archive_year, $vw_health_coaching_archive_month, $vw_health_coaching_archive_day)); ?>"><?php echo esc_html( get_the_date() ); ?><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a></span>
          <?php } ?>

          <?php if(get_theme_mod('vw_health_coaching_toggle_author',true)==1){ ?>
            <span><?php echo esc_html(get_theme_mod('vw_health_coaching_meta_field_separator', '|'));?></span> <i class="fas fa-user"></i><span class="entry-author"><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?><span class="screen-reader-text"><?php the_author(); ?></span></a></span>
          <?php } ?>

          <?php if(get_theme_mod('vw_health_coaching_toggle_comments',true)==1){ ?>
            <span><?php echo esc_html(get_theme_mod('vw_health_coaching_meta_field_separator', '|'));?></span> <i class="fa fa-comments" aria-hidden="true"></i><span class="entry-comments"><?php comments_number( __('0 Comment', 'vw-health-coaching'), __('0 Comments', 'vw-health-coaching'), __('% Comments', 'vw-health-coaching') ); ?> </span>
          <?php } ?>

          <?php if(get_theme_mod('vw_health_coaching_toggle_time',true)==1){ ?>
            <span><?php echo esc_html(get_theme_mod('vw_health_coaching_meta_field_separator', '|'));?></span> <i class="fas fa-clock"></i><span class="entry-time"><?php echo esc_html( get_the_time() ); ?></span>
          <?php } ?>
          <hr>
        </div>
      <?php } ?>
      <div class="entry-content">
        <p> 
          <?php $vw_health_coaching_theme_lay = get_theme_mod( 'vw_health_coaching_excerpt_settings','Excerpt');
          if($vw_health_coaching_theme_lay == 'Content'){ ?>
            <?php the_content(); ?>
          <?php }
          if($vw_health_coaching_theme_lay == 'Excerpt'){ ?>
            <?php if(get_the_excerpt()) { ?>
              <p><?php $excerpt = get_the_excerpt(); echo esc_html( vw_health_coaching_string_limit_words( $excerpt, esc_attr(get_theme_mod('vw_health_coaching_excerpt_number','30')))); ?> <?php echo esc_html(get_theme_mod('vw_health_coaching_excerpt_suffix',''));?></p>
            <?php }?>
          <?php }?>
        </p>
      </div>
      <?php if( get_theme_mod('vw_health_coaching_button_text','READ MORE') != ''){ ?>
        <div class="content-bttn">
          <a class="view-more" href="<?php echo esc_url(get_permalink()); ?>"><?php echo esc_html(get_theme_mod('vw_health_coaching_button_text',__('READ MORE','vw-health-coaching')));?><i class="<?php echo esc_attr(get_theme_mod('vw_health_coaching_blog_button_icon','fa fa-angle-right')); ?>"></i><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('vw_health_coaching_button_text',__('READ MORE','vw-health-coaching')));?></span></a>
        </div>
      <?php } ?>
    </div>
  </div>
</article>