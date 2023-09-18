<?php if ( get_theme_mod('fish_aquarium_featured_product_section_enable') ) : ?>
	<div id="featured-product" class="py-5">
		<div class="container">
			<?php if ( get_theme_mod('fish_aquarium_featured_product_heading') ) : ?>
	      		<h2 class="text-center mb-5"><?php echo esc_html(get_theme_mod('fish_aquarium_featured_product_heading'));?></h2>
	      	<?php endif; ?>
	        <div class="owl-carousel">
	            <?php
	            $fish_aquarium_catData = get_theme_mod('fish_aquarium_featured_product_category','');
	            if ( class_exists( 'WooCommerce' ) ) {
	              $args = array( 
	                'post_type' => 'product',
	                'posts_per_page' => 100,
	                'product_cat' => $fish_aquarium_catData,
	                'order' => 'ASC'
	              );
	              $loop = new WP_Query( $args );
	              while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
	                <div class="tab-product">
	                    <div class="product-image box">
	                    	<figure class="mb-0">
	                        	<?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.esc_url(woocommerce_placeholder_img_src()).'" />'; ?>
	                        	<?php if (   has_post_thumbnail() ) { ?>
		                            <?php woocommerce_show_product_sale_flash( $post, $product ); ?>
		                        <?php }?>
	                        </figure>
	                        <div class="box-content intro-button">
			                    <?php if( $product->is_type( 'simple' ) ) { woocommerce_template_loop_add_to_cart(  $loop->post, $product );} ?><i class="fas fa-shopping-cart ml-2"></i>
			                </div>
	                    </div>
	                    <div class="product-details py-3">
	                    	<h5 class="product-text my-2 "><a href="<?php echo esc_url(get_permalink( $loop->post->ID )); ?>"><?php the_title(); ?></a></h5>
	                    	<div class="row">
	                    		<div class="col-lg-7 col-md-7 col-sm-7 align-self-center">
		                  			<h6 class="<?php echo esc_attr( apply_filters( 'woocommerce_product_price_class', 'price' ) ); ?> mb-0"><?php echo $product->get_price_html(); ?></h6>
	                    		</div>
	                    		<div class="col-lg-5 col-md-5 col-sm-5 align-self-center">
	                    			<?php if( $product->is_type( 'simple' ) ){ woocommerce_template_loop_rating( $loop->post, $product ); } ?>
	                    		</div>
	                    	</div>
		                </div>
	                </div>
	              <?php endwhile; wp_reset_query(); ?>
	            <?php } ?>
	        </div>
		</div>
	</div>
<?php endif; ?>