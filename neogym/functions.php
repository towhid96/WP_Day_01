<?php
	// add_theme_support('menus');
	// add_theme_support('widgets');
	// add_theme_support('custom-background');
	// add_theme_support('custom-header');
	// add_theme_support('post-thumbnails');
	// Parameters $feature string required The feature being added. Likely core values include: 
	// 'admin-bar' 'align-wide' 'appearance-tools' 'automatic-feed-links' 'block-templates' 'block-template-parts' 'border' 'core-block-patterns' 'custom-background' 'custom-header' 'custom-line-height' 'custom-logo' 'customize-selective-refresh-widgets' 'custom-spacing' 'custom-units' 'dark-editor-style' 'disable-custom-colors' 'disable-custom-font-sizes' 'disable-custom-gradients' 'disable-layout-styles' 'editor-color-palette' 'editor-gradient-presets' 'editor-font-sizes' 'editor-spacing-sizes' 'editor-styles' 'featured-content' 'html5' 'link-color' 'menus' 'post-formats' 'post-thumbnails' 'responsive-embeds' 'starter-content' 'title-tag' 'widgets' 'widgets-block-editor' 'wp-block-styles
	if(!function_exists('mythemefunction')){
		function mythemefunction(){
			add_theme_support('post-thumbnails');
			add_theme_support('post-formats',array('aside','image','video'));
			add_theme_support('widgets');
			add_theme_support('title-tag');
			// add_theme_support('menus');
			add_theme_support('html5');
			add_theme_support('editor-color-palette');
			// add_theme_support('admin-bar');
			// add_theme_support('align-wide');
			load_theme_textdomain('mythemefunction'.get_template_directory().'/languages');
			register_nav_menus(array(
				'top_menu' =>__("Top menu","mythemefunction"),));

		} 
	}
	add_action('after_setup_theme','mythemefunction');




	if(!function_exists('custom_service')){
		function custom_service(){
			register_post_type('service',
				array(
					'labels'=>array(
						'name'=>('Services'),
						'singular_name'=>('Service'),
						'add_new'=>('Add new Service'),
						'add_new_item'=>('Add new Service'),
						'edit_item'=>('Edit Service'),
						'new_item'=>('New item'),
						'view_item'=>('View Service'),
						'not_found'=>('Sorry, we could\'n find the service you are looking for.'),
					),

					'menu_icon'=>'dashicons-networking',
					'public'=>true,
					'publicly_queryable'=>true,
					'exclude_from_search'=>true,
					'menu_position'=>5,
					'has_archive'=>true,
					'hierarchial'=>true,
					'show_ui'=>true,
					'capability_type'=>'post',
					'rewrite'=>array('slag'=>'servie'),
					'support'=>array('title','thumbnail','editor',),
				)
				);
	
		}
	}
	add_action('init','custom_service');	




	function adm(){
		add_shortcode('__mjform','myform');
		function myform(){
			ob_start();
			?>
			
<h1>Admission Form</h1>
<form action="/action_page.php">
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname" value="John"><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname" value="Doe"><br><br>
  <input type="submit" value="Submit">
</form> 

			<?php
			$content = ob_get_clean();
			return $content;
		}
	}
	add_action('init','adm');


	// if(!function_exists('custom_service')){
	// 	function custom_service(){
	// 		register_post_type('service',
	// 			array(
	// 				'labels'=>array(
	// 					'name'=>('Services'),
	// 					'singular_name'=>('Service'),
	// 					'add_new'=>('Add new Service'),
	// 					'add_new_item'=>('Add new Service'),
	// 					'edit_item'=>('Edit Service'),
	// 					'new_item'=>('New item'),
	// 					'view_item'=>('View Service'),
	// 					'not_found'=>('Sorry, we could\'n find the service you are looking for.'),
	// 				),

	// 				'menu_icon'=>'dashicons-networking',
	// 				'public'=>true,
	// 				'publicly_queryable'=>true,
	// 				'exclude_from_search'=>true,
	// 				'menu_position'=>5,
	// 				'has_archive'=>true,
	// 				'hierarchial'=>true,
	// 				'show_ui'=>true,
	// 				'capability_type'=>'post',
	// 				'rewrite'=>array('slag'=>'servie'),
	// 				'support'=>array('title','thumbnail','editor',),
	// 			)
	// 			);
	
	// 	}
	// }
	// add_action('init','custom_service');
?>
