<?php

	/**
	 * FUNCTIONS
	 *
	 * Aesthetic Perspectives
	 *
	 * @package WordPress
	 * @subpackage Aesthetic_Perspectives
	 * @since Aesthetic Perspectives 1.0
	 */
	 
	 // REMOVE AUTO P TAGS ///////////////////////////
	 remove_filter( 'the_content', 'wpautop' );
	 
	 // PAGINATION ///////////////////////////
	 if( !function_exists('pagination') ) {
	 	function pagination($pages = '', $range = 4) {
	 		 $showitems = ($range * 2)+1;  
	 	 
	 		 global $paged;
	 		 if(empty($paged)) $paged = 1;
	 
	 		 if($pages == '') {
	 			 global $wp_query;
	 			 
	 			 $pages = $wp_query->max_num_pages;
	 			 
	 			 if(!$pages) {
	 				 $pages = 1;
	 			 }
	 		 }   
	 	 
	 		 if(1 != $pages) {
	 			  //<span>Page ".$paged." of ".$pages."</span>";
	 			 if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo;</a>";
	 			 if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo;</a>";
	 	 
	 			 for ($i=1; $i <= $pages; $i++) {
	 				 if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )) {
	 					 echo ($paged == $i)? "<span class=\"current\">".$i."</span>":"<a href='".get_pagenum_link($i)."' class=\"inactive\">".$i."</a>";
	 				 }
	 			 }
	 	 
	 			 if ($paged < $pages && $showitems < $pages) echo "<a href=\"".get_pagenum_link($paged + 1)."\">&rsaquo;</a>";
	 			 if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>&raquo;</a>";
	 			 
	 		 }
	 		 
	 	}
	 	
	 }
	 // end
	 
	 // FEATURED IMAGE SUPPORT ///////////////////////////
	 add_theme_support( 'post-thumbnails' );
	 // end
	 
	 // REMOVE IMAGE SIZE DIMENSIONS ///////////////////////////
	 function remove_img_attr ($html) {
	     return preg_replace('/(width|height)="\d+"\s/', "", $html);
	 }
	 add_filter( 'post_thumbnail_html', 'remove_img_attr' );
	 // end
	 
	 // POST CONTENT IMAGES ///////////////////////////
	 if(function_exists("register_field_group"))
	 {
	 	register_field_group(array (
	 		'id' => 'acf_post-content-images',
	 		'title' => 'Post Content Images',
	 		'fields' => array (
	 			array (
	 				'key' => 'field_52c9027493cc9',
	 				'label' => 'Post Content',
	 				'name' => 'post_content',
	 				'type' => 'gallery',
	 				'preview_size' => 'thumbnail',
	 				'library' => 'all',
	 			),
	 		),
	 		'location' => array (
	 			array (
	 				array (
	 					'param' => 'post_type',
	 					'operator' => '==',
	 					'value' => 'post',
	 					'order_no' => 0,
	 					'group_no' => 0,
	 				),
	 			),
	 		),
	 		'options' => array (
	 			'position' => 'normal',
	 			'layout' => 'default',
	 			'hide_on_screen' => array (
	 			),
	 		),
	 		'menu_order' => 0,
	 	));
	 }
	 // end
	 
	 // HOMEPAGE SLIDER ///////////////////////////
	 if(function_exists("register_field_group"))
	 {
	 	register_field_group(array (
	 		'id' => 'acf_homepage-slider-2',
	 		'title' => 'Homepage Slider',
	 		'fields' => array (
	 			array (
	 				'key' => 'field_52c8d2c0fdbbb',
	 				'label' => 'Homepage Slider',
	 				'name' => 'homepage_slider',
	 				'type' => 'gallery',
	 				'preview_size' => 'thumbnail',
	 				'library' => 'all',
	 			),
	 		),
	 		'location' => array (
	 			array (
	 				array (
	 					'param' => 'post_type',
	 					'operator' => '==',
	 					'value' => 'post',
	 					'order_no' => 0,
	 					'group_no' => 0,
	 				),
	 			),
	 		),
	 		'options' => array (
	 			'position' => 'normal',
	 			'layout' => 'default',
	 			'hide_on_screen' => array (
	 			),
	 		),
	 		'menu_order' => 0,
	 	));
	 }
	 // end
	 
	 // POST SLIDER ///////////////////////////
	 if(function_exists("register_field_group"))
	 {
	 	register_field_group(array (
	 		'id' => 'acf_post-header-slider',
	 		'title' => 'Post Header Slider',
	 		'fields' => array (
	 			array (
	 				'key' => 'field_52c902f974e86',
	 				'label' => 'Post Slider',
	 				'name' => 'post_slider',
	 				'type' => 'gallery',
	 				'preview_size' => 'thumbnail',
	 				'library' => 'all',
	 			),
	 		),
	 		'location' => array (
	 			array (
	 				array (
	 					'param' => 'post_type',
	 					'operator' => '==',
	 					'value' => 'post',
	 					'order_no' => 0,
	 					'group_no' => 0,
	 				),
	 			),
	 		),
	 		'options' => array (
	 			'position' => 'normal',
	 			'layout' => 'default',
	 			'hide_on_screen' => array (
	 			),
	 		),
	 		'menu_order' => 0,
	 	));
	 }
	 // end
	 
	 // CHECKBOX ///////////////////////////
	 if(function_exists("register_field_group"))
	 {
	 	register_field_group(array (
	 		'id' => 'acf_post-content-text-align-center',
	 		'title' => 'Post Content Text Align Center',
	 		'fields' => array (
	 			array (
	 				'key' => 'field_52d313c45909d',
	 				'label' => 'Center Checkbox',
	 				'name' => 'center_checkbox',
	 				'type' => 'checkbox',
	 				'choices' => array (
	 					'yes' => 'Yes',
	 					'no' => 'No',
	 				),
	 				'default_value' => 'no',
	 				'layout' => 'vertical',
	 			),
	 		),
	 		'location' => array (
	 			array (
	 				array (
	 					'param' => 'post_type',
	 					'operator' => '==',
	 					'value' => 'post',
	 					'order_no' => 0,
	 					'group_no' => 0,
	 				),
	 			),
	 		),
	 		'options' => array (
	 			'position' => 'normal',
	 			'layout' => 'default',
	 			'hide_on_screen' => array (
	 			),
	 		),
	 		'menu_order' => 0,
	 	));
	 }
	 // end
	 