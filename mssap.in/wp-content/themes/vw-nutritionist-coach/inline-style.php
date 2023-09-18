<?php

	/*------------ First highlight color --------------*/

	$vw_health_coaching_first_color = get_theme_mod('vw_health_coaching_first_color');

	$vw_health_coaching_custom_css = '';

	if($vw_health_coaching_first_color != false){
		$vw_health_coaching_custom_css .='#preloader, #slider .carousel-control-prev-icon:hover, #slider .carousel-control-next-icon:hover, .view-more, .scrollup i, #footer-2, #footer .tagcloud a:hover, input[type="submit"], input.button, #sidebar .tagcloud a:hover, .pagination span, .pagination a, #comments a.comment-reply-link, #comments input[type="submit"], .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, nav.woocommerce-MyAccount-navigation ul li, #services-we-provide .owl-nav button i:hover, .nav-previous a, .nav-next a, #footer a.custom_read_more, #sidebar a.custom_read_more, #footer .custom-social-icons i:hover, #sidebar .custom-social-icons i:hover, .woocommerce nav.woocommerce-pagination ul li a{';
			$vw_health_coaching_custom_css .='background-color: '.esc_attr($vw_health_coaching_first_color).';';
		$vw_health_coaching_custom_css .='}';
	}

	if($vw_health_coaching_first_color != false){
		$vw_health_coaching_custom_css .='.main-header-inner, .header-fixed{
		background: linear-gradient(70deg, #ffffff 28%, '.esc_attr($vw_health_coaching_first_color).' 20%) repeat scroll 0 0;
		}';
	}

	if($vw_health_coaching_first_color != false){
		$vw_health_coaching_custom_css .='a, #topbar i, #topbar span a:hover, #topbar .custom-social-icons i:hover, .logo .site-title a:hover, .main-navigation ul.sub-menu a:hover, #slider a.view-more, #slider .view-more:hover i, #slider .carousel-control-prev-icon, #slider .carousel-control-next-icon, .post-main-box:hover h2 a, .post-main-box:hover .post-info a, .single-post .post-info:hover a, #footer li a:hover, #sidebar li a:hover, .woocommerce-product-details__short-description p a, .entry-content a, .sidebar .textwidget p a, .textwidget p a, #comments p a, .slider .inner_carousel p a, .single-post .nav-previous a:hover, .single-post .nav-next a:hover, #services-we-provide h3, #services-we-provide .service-box h3 a, #services-we-provide .owl-nav button i, #services-we-provide .serv-btn a.read-more, #services-we-provide .service-box h4 a, #footer .custom-social-icons i, #sidebar .custom-social-icons i{';
			$vw_health_coaching_custom_css .='color: '.esc_attr($vw_health_coaching_first_color).';';
		$vw_health_coaching_custom_css .='}';
	}

	if($vw_health_coaching_first_color != false){
		$vw_health_coaching_custom_css .='#services-we-provide .owl-nav button i, #footer .custom-social-icons i, #sidebar .custom-social-icons i, #footer .custom-social-icons i:hover, #sidebar .custom-social-icons i:hover{';
			$vw_health_coaching_custom_css .='border-color: '.esc_attr($vw_health_coaching_first_color).';';
		$vw_health_coaching_custom_css .='}';
	}

	if($vw_health_coaching_first_color != false){
		$vw_health_coaching_custom_css .='.main-navigation ul ul, .post-info hr{';
			$vw_health_coaching_custom_css .='border-top-color: '.esc_attr($vw_health_coaching_first_color).';';
		$vw_health_coaching_custom_css .='}';
	}

	if($vw_health_coaching_first_color != false){
		$vw_health_coaching_custom_css .='.main-navigation ul ul{';
			$vw_health_coaching_custom_css .='border-bottom-color: '.esc_attr($vw_health_coaching_first_color).';';
		$vw_health_coaching_custom_css .='}';
	}

	$vw_health_coaching_custom_css .='@media screen and (max-width:1000px) {';
		if($vw_health_coaching_first_color != false){
			$vw_health_coaching_custom_css .='.main-header-inner, .header-fixed{
				background:'.esc_attr($vw_health_coaching_first_color).';
			}';
		}
	$vw_health_coaching_custom_css .='}';

	/*----------------------Second highlight color-------------------*/

	$vw_health_coaching_second_color = get_theme_mod('vw_health_coaching_second_color');

	if($vw_health_coaching_second_color != false){
		$vw_health_coaching_custom_css .='#comments input[type="submit"].submit:hover, #sidebar input[type="submit"]:hover, .error-btn a:hover, .content-bttn a:hover, #footer input[type="submit"]:hover, .pagination .current, .pagination a:hover, #footer, .woocommerce span.onsale, .nav-previous a:hover, .nav-next a:hover, .woocommerce nav.woocommerce-pagination ul li span.current, .woocommerce nav.woocommerce-pagination ul li a:hover{';
			$vw_health_coaching_custom_css .='background-color: '.esc_attr($vw_health_coaching_second_color).';';
		$vw_health_coaching_custom_css .='}';
	}

	if($vw_health_coaching_second_color != false){
		$vw_health_coaching_custom_css .='.woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover, .woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover{';
			$vw_health_coaching_custom_css .='background-color: '.esc_attr($vw_health_coaching_second_color).'!important;';
		$vw_health_coaching_custom_css .='}';
	}

	if($vw_health_coaching_second_color != false){
		$vw_health_coaching_custom_css .='#topbar span, #topbar span a, #topbar .custom-social-icons i, .logo h1 a, .logo p.site-title a, p.site-description, .main-navigation a:hover, .post-main-box h2 a, #sidebar h3, .post-navigation .meta-nav, h1, h2, h3, h4, h5, h6, h2.woocommerce-loop-product__title, .woocommerce div.product .product_title, #services-we-provide p.services-inner, #services-we-provide .service-box h4 a:hover, #services-we-provide .serv-btn a.read-more:hover{';
			$vw_health_coaching_custom_css .='color: '.esc_attr($vw_health_coaching_second_color).';';
		$vw_health_coaching_custom_css .='}';
	}

	/*-------------- Width Layout -------------------*/

	$vw_health_coaching_theme_lay = get_theme_mod( 'vw_health_coaching_width_option','Full Width');
    if($vw_health_coaching_theme_lay == 'Boxed'){
		$vw_health_coaching_custom_css .='body{';
			$vw_health_coaching_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$vw_health_coaching_custom_css .='}';
		$vw_health_coaching_custom_css .='.page-template-custom-home-page .main-header{';
			$vw_health_coaching_custom_css .='width: 100%;';
		$vw_health_coaching_custom_css .='}';
		$vw_health_coaching_custom_css .='.scrollup i{';
			$vw_health_coaching_custom_css .='right: 100px;';
		$vw_health_coaching_custom_css .='}';
		$vw_health_coaching_custom_css .='.scrollup.left i{';
			$vw_health_coaching_custom_css .='left: 100px;';
		$vw_health_coaching_custom_css .='}';
	}else if($vw_health_coaching_theme_lay == 'Wide Width'){
		$vw_health_coaching_custom_css .='body{';
			$vw_health_coaching_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$vw_health_coaching_custom_css .='}';
		$vw_health_coaching_custom_css .='.page-template-custom-home-page .main-header{';
			$vw_health_coaching_custom_css .='width: 100%;';
		$vw_health_coaching_custom_css .='}';
		$vw_health_coaching_custom_css .='.scrollup i{';
			$vw_health_coaching_custom_css .='right: 30px;';
		$vw_health_coaching_custom_css .='}';
		$vw_health_coaching_custom_css .='.scrollup.left i{';
			$vw_health_coaching_custom_css .='left: 30px;';
		$vw_health_coaching_custom_css .='}';
	}else if($vw_health_coaching_theme_lay == 'Full Width'){
		$vw_health_coaching_custom_css .='body{';
			$vw_health_coaching_custom_css .='max-width: 100%;';
		$vw_health_coaching_custom_css .='}';
	}

	/*------------------ Preloader Background Color  -------------------*/

	$vw_health_coaching_preloader_bg_color = get_theme_mod('vw_health_coaching_preloader_bg_color');
	if($vw_health_coaching_preloader_bg_color != false){
		$vw_health_coaching_custom_css .='#preloader{';
			$vw_health_coaching_custom_css .='background-color: '.esc_attr($vw_health_coaching_preloader_bg_color).';';
		$vw_health_coaching_custom_css .='}';
	}

	$vw_health_coaching_preloader_border_color = get_theme_mod('vw_health_coaching_preloader_border_color');
	if($vw_health_coaching_preloader_border_color != false){
		$vw_health_coaching_custom_css .='.loader-line{';
			$vw_health_coaching_custom_css .='border-color: '.esc_attr($vw_health_coaching_preloader_border_color).'!important;';
		$vw_health_coaching_custom_css .='}';
	}

	$vw_health_coaching_footer_background_color = get_theme_mod('vw_health_coaching_footer_background_color');
	if($vw_health_coaching_footer_background_color != false){
		$vw_health_coaching_custom_css .='#footer{';
			$vw_health_coaching_custom_css .='background-color: '.esc_attr($vw_health_coaching_footer_background_color).';';
		$vw_health_coaching_custom_css .='}';
	}