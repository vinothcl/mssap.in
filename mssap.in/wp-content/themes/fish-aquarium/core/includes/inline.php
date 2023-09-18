<?php


$fish_aquarium_custom_css = '';

	/*---------------------------text-transform-------------------*/

	$fish_aquarium_text_transform = get_theme_mod( 'menu_text_transform_fish_aquarium','CAPITALISE');
    if($fish_aquarium_text_transform == 'CAPITALISE'){

		$fish_aquarium_custom_css .='#main-menu ul li a{';

			$fish_aquarium_custom_css .='text-transform: capitalize ; font-size: 14px !important;';

		$fish_aquarium_custom_css .='}';

	}else if($fish_aquarium_text_transform == 'UPPERCASE'){

		$fish_aquarium_custom_css .='#main-menu ul li a{';

			$fish_aquarium_custom_css .='text-transform: uppercase ; font-size: 14px !important';

		$fish_aquarium_custom_css .='}';

	}else if($fish_aquarium_text_transform == 'LOWERCASE'){

		$fish_aquarium_custom_css .='#main-menu ul li a{';

			$fish_aquarium_custom_css .='text-transform: lowercase ; font-size: 14px !important';

		$fish_aquarium_custom_css .='}';
	}

		/*---------------------------Container Width-------------------*/

	$fish_aquarium_container_width = get_theme_mod('fish_aquarium_container_width');
			$fish_aquarium_custom_css .='body{';
				$fish_aquarium_custom_css .='width: '.esc_attr($fish_aquarium_container_width).'%; margin: auto';
			$fish_aquarium_custom_css .='}';
