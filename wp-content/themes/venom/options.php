<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 * By default it uses the theme name, in lowercase and without spaces, but this can be changed if needed.
 * If the identifier changes, it'll appear as if the options have been reset.
 * 
 */

function optionsframework_option_name() {
	// This gets the theme name from the stylesheet (lowercase and without spaces)
	$themename = 'Venom';
	
	$optionsframework_settings = get_option('optionsframework');
	$optionsframework_settings['id'] = $themename;
	update_option('optionsframework', $optionsframework_settings);
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the "id" fields, make sure to use all lowercase and no spaces.
 *  
 */

function optionsframework_options() {
	
	// Test data
	$magpro_slider_start = array("false" => __("No", 'Venom' ),"true" => __("Yes", 'Venom' ));
	
	// Pull all the categories into an array
	$options_categories = array();  
	$options_categories_obj = get_categories();
	foreach ($options_categories_obj as $category) {
    	$options_categories[$category->cat_ID] = $category->cat_name;
	}
	
	// Pull all the pages into an array
	$options_pages = array();  
	$options_pages_obj = get_pages('sort_column=post_parent,menu_order');
	$options_pages[''] = __('Select a page:', 'Venom' );
	foreach ($options_pages_obj as $page) {
    	$options_pages[$page->ID] = $page->post_title;
	}
		
	// If using image radio buttons, define a directory path
	$imagepath =  get_template_directory_uri(). '/admin/images/';
		
	$options = array();
		
		
							
	$options[] = array( "name" => "country1",
						"type" => "innertabopen");	

		$options[] = array( "name" => __("Select a Skin", 'Venom' ),
							"type" => "groupcontaineropen");	

				$options[] = array( "name" => __("Select a Skin", 'Venom' ),
										"desc" => __("Images for skins.", 'Venom' ),
										"id" => "skin_style",
										"type" => "images",
										"std" => "venom",
										"options" => array(
											'venom' => $imagepath . 'venom.png',
											'radi' => $imagepath . 'radi.png')
										);						

										
		$options[] = array( "type" => "groupcontainerclose");
		
		$options[] = array( "name" => __("Single Page Settings", 'Venom' ),
							"type" => "groupcontaineropen");
							
					$options[] = array( "name" => __("Show Featured Image?", 'Venom' ),
										"desc" => __("Select yes if you want to show featured image as header.", 'Venom' ),
										"id" => "show_featured_image_single",
										"std" => "false",
										"type" => "select",
										"class" => "mini", //mini, tiny, small
										"options" => $magpro_slider_start);	
										
					$options[] = array( "name" => __("Show Ratings?", 'Venom' ),
										"desc" => __("Select yes if you want to show ratings under post title.", 'Venom' ),
										"id" => "show_rat_on_single",
										"std" => "true",
										"type" => "select",
										"class" => "mini", //mini, tiny, small
										"options" => $magpro_slider_start);										
										
					$options[] = array( "name" => __("Show Posted by and Date?", 'Venom' ),
										"desc" => __("Select yes if you want to show Posted by and Date under post title.", 'Venom' ),
										"id" => "show_pd_on_single",
										"std" => "true",
										"type" => "select",
										"class" => "mini", //mini, tiny, small
										"options" => $magpro_slider_start);											
										
					$options[] = array( "name" => __("Show Categories and Tags?", 'Venom' ),
										"desc" => __("Select yes if you want to show categories under post title.", 'Venom' ),
										"id" => "show_cats_on_single",
										"std" => "true",
										"type" => "select",
										"class" => "mini", //mini, tiny, small
										"options" => $magpro_slider_start);	
										
										
					$options[] = array( "name" => __("Show Social Share Buttons?", 'Venom' ),
										"desc" => __("Select yes if you want to show social buttons under post title.", 'Venom' ),
										"id" => "show_socialbuts_on_single",
										"std" => "true",
										"type" => "select",
										"class" => "mini", //mini, tiny, small
										"options" => $magpro_slider_start);																	
										
					$options[] = array( "name" => __("Show Next/Previous Box", 'Venom' ),
										"desc" => __("Select yes if you want to show Next/Previous box on single post page.", 'Venom' ),
										"id" => "show_np_box",
										"std" => "true",
										"type" => "select",
										"class" => "mini", //mini, tiny, small
										"options" => $magpro_slider_start);	
																																							
										
		$options[] = array( "type" => "groupcontainerclose");						
		
		
		
	$options[] = array( "type" => "innertabclose");	


	$options[] = array( "name" => "country2",
						"type" => "innertabopen");	
						
		$options[] = array( "name" => __("Social Settings", 'Venom' ),
							"type" => "groupcontaineropen");	

					$options[] = array( "name" => __("Twitter", 'Venom' ),
										"desc" => __("Enter your twitter url", 'Venom' ),
										"id" => "twitter_id",
										"std" => "",
										"type" => "text");

					$options[] = array( "name" => __("Redditt", 'Venom' ),
										"desc" => __("Enter your reddit url", 'Venom' ),
										"id" => "redit_id",
										"std" => "",
										"type" => "text");

					$options[] = array( "name" => __("Facebook", 'Venom' ),
										"desc" => __("Enter your facebook url", 'Venom' ),
										"id" => "facebook_id",
										"std" => "",
										"type" => "text");

					$options[] = array( "name" => __("Stumble", 'Venom' ),
										"desc" => __("Enter your stumbleupon url", 'Venom' ),
										"id" => "stumble_id",
										"std" => "",
										"type" => "text");

					$options[] = array( "name" => __("Flickr", 'Venom' ),
										"desc" => __("Enter your flickr url", 'Venom' ),
										"id" => "flickr_id",
										"std" => "",
										"type" => "text");

					$options[] = array( "name" => __("LinkedIn", 'Venom' ),
										"desc" => __("Enter your linkedin url", 'Venom' ),
										"id" => "linkedin_id",
										"std" => "",
										"type" => "text");

					$options[] = array( "name" => __("Google", 'Venom' ),
										"desc" => __("Enter your google url", 'Venom' ),
										"id" => "google_id",
										"std" => "",
										"type" => "text");

							
		$options[] = array( "type" => "groupcontainerclose");											
														
	$options[] = array( "type" => "innertabclose");

	$options[] = array( "name" => "country10",
						"type" => "innertabopen");
						
		$options[] = array( "name" => __("Logo Section Layout Settings", 'Venom' ),
							"type" => "tabheading");		
		
		$options[] = array( "name" => __("Logo Section Layout", 'Venom' ),
							"type" => "groupcontaineropen");	

					
				$options[] = array( "name" => __("Select a layout", 'Venom' ),
										"desc" => __("Images for logo section.", 'Venom' ),
										"id" => "logo_layout_style",
										"type" => "images",
										"std" => "sbys",
										"options" => array(
											'sbys' => $imagepath . 'logo1.png',
											'onebone' => $imagepath . 'logo2.png')
										);														

										
		$options[] = array( "type" => "groupcontainerclose");								
						
	$options[] = array( "type" => "innertabclose");	
	
	$options[] = array( "name" => "country3",
						"type" => "innertabopen");	

		$options[] = array( "name" => __("Select Header Type", 'Venom' ),
							"type" => "groupcontaineropen");	

					$options[] = array( "name" => __("Select a Header or Slider", 'Venom' ),
										"desc" => __("Images for slider.", 'Venom' ),
										"id" => "header_slider",
										"std" => "one",
										"type" => "images",
										"options" => array(
											'one' => $imagepath . 'slider1.png',
											'cheader' => $imagepath . 'slider2.png')
										);					

										
		$options[] = array( "type" => "groupcontainerclose");	
						
	$options[] = array( "type" => "innertabclose");	
	
	$options[] = array( "name" => "country6",
						"type" => "innertabopen");	

		$options[] = array( "name" => __("Header One Settings", 'Venom' ),
							"type" => "tabheading");
							
		$options[] = array( "name" => __("Slide 1", 'Venom' ),
							"type" => "groupcontaineropen");
							
					$options[] = array( "name" => __("Upload Image", 'Venom' ),
										"desc" => __("Upload your image here.", 'Venom' ),
										"id" => "slide_one_image",
										"type" => "upload");								

					$options[] = array( "name" => __("Headline", 'Venom' ),
										"desc" => __("Enter the headline", 'Venom' ),
										"id" => "slide_one_headline",
										"type" => "textarea");		
										
					$options[] = array( "name" => __("Feature text", 'Venom' ),
										"desc" => __("Enter the feature text", 'Venom' ),
										"id" => "slide_one_text",
										"type" => "textarea");
										
					$options[] = array( "name" => __("Link", 'Venom' ),
										"desc" => __("Enter the full url", 'Venom' ),
										"id" => "slide_one_cta_link",
										"type" => "text");																																	

										
		$options[] = array( "type" => "groupcontainerclose");	
		
		$options[] = array( "name" => __("Slide 2", 'Venom' ),
							"type" => "groupcontaineropen");
							
					$options[] = array( "name" => __("Upload Image", 'Venom' ),
										"desc" => __("Upload your image here.", 'Venom' ),
										"id" => "slide_two_image",
										"type" => "upload");								

					$options[] = array( "name" => __("Headline", 'Venom' ),
										"desc" => __("Enter the headline", 'Venom' ),
										"id" => "slide_two_headline",
										"type" => "textarea");		
										
					$options[] = array( "name" => __("Feature text", 'Venom' ),
										"desc" => __("Enter the feature text", 'Venom' ),
										"id" => "slide_two_text",
										"type" => "textarea");
										
					$options[] = array( "name" => __("Link", 'Venom' ),
										"desc" => __("Enter the full url", 'Venom' ),
										"id" => "slide_two_cta_link",
										"type" => "text");																																	

										
		$options[] = array( "type" => "groupcontainerclose");								
	
						
	$options[] = array( "type" => "innertabclose");	
	
								

	$options[] = array( "name" => "country4",
						"type" => "innertabopen");
						
		$options[] = array( "name" => __("Layout Settings", 'Venom' ),
							"type" => "groupcontaineropen");	

					$options[] = array( "name" => __("Select a homepage layout", 'Venom' ),
										"desc" => __("To use these layouts, Go to Reading Settings ( Dasboard -> Settings -> Reading ) and set Front page dispaly to static page. Create a empty page and select it for Front Page.", 'Venom' ),
										"id" => "homepage_layout",
										"std" => "spage",
										"type" => "images",
										"options" => array(
											'bone' => $imagepath . 'layout1.png',
											'btwo' => $imagepath . 'layout3.png',
											'spage' => $imagepath . 'layout2.png',)
										);					

										
		$options[] = array( "type" => "groupcontainerclose");		
						
	$options[] = array( "type" => "innertabclose");	
	
	$options[] = array( "name" => "country5",
						"type" => "innertabopen");
						
		$options[] = array( "name" => __("Biz One Settings", 'Venom' ),
							"type" => "tabheading");						
						
		$options[] = array( "name" => __("Welcome Section", 'Venom' ),
							"type" => "groupcontaineropen");	

					$options[] = array( "name" => __("Headline", 'Venom' ),
										"desc" => __("Enter the headline", 'Venom' ),
										"id" => "welcome_headline",
										"type" => "textarea");		
										
					$options[] = array( "name" => __("Welcome text", 'Venom' ),
										"desc" => __("Enter the welcome text", 'Venom' ),
										"id" => "welcome_text",
										"type" => "textarea");														

										
		$options[] = array( "type" => "groupcontainerclose");	
		
		$options[] = array( "name" => __("Left Section", 'Venom' ),
							"type" => "groupcontaineropen");	

					$options[] = array( "name" => __("Upload Image", 'Venom' ),
										"desc" => __("Upload your image here.", 'Venom' ),
										"id" => "left_section_image",
										"type" => "upload");					
					
					$options[] = array( "name" => __("Name", 'Venom' ),
										"desc" => __("Enter the name of product or service", 'Venom' ),
										"id" => "left_section_headline",
										"type" => "textarea");		
										
					$options[] = array( "name" => __("Description", 'Venom' ),
										"desc" => __("Enter the description of product or service", 'Venom' ),
										"id" => "left_section_text",
										"type" => "textarea");	
										
					$options[] = array( "name" => __("Link", 'Venom' ),
										"desc" => __("Enter the link to product or service", 'Venom' ),
										"id" => "left_section_link",
										"type" => "text");																							

										
		$options[] = array( "type" => "groupcontainerclose");	
		
		$options[] = array( "name" => __("Center Section", 'Venom' ),
							"type" => "groupcontaineropen");	

					$options[] = array( "name" => __("Upload Image", 'Venom' ),
										"desc" => __("Upload your image here.", 'Venom' ),
										"id" => "center_section_image",
										"type" => "upload");					
					
					$options[] = array( "name" => __("Name", 'Venom' ),
										"desc" => __("Enter the name of product or service", 'Venom' ),
										"id" => "center_section_headline",
										"type" => "textarea");		
										
					$options[] = array( "name" => __("Description", 'Venom' ),
										"desc" => __("Enter the description of product or service", 'Venom' ),
										"id" => "center_section_text",
										"type" => "textarea");	
										
					$options[] = array( "name" => __("Link", 'Venom' ),
										"desc" => __("Enter the link to product or service", 'Venom' ),
										"id" => "center_section_link",
										"type" => "text");																							

										
		$options[] = array( "type" => "groupcontainerclose");	
		
		$options[] = array( "name" => __("Right Section", 'Venom' ),
							"type" => "groupcontaineropen");	

					$options[] = array( "name" => __("Upload Image", 'Venom' ),
										"desc" => __("Upload your image here.", 'Venom' ),
										"id" => "right_section_image",
										"type" => "upload");					
					
					$options[] = array( "name" => __("Name", 'Venom' ),
										"desc" => __("Enter the name of product or service", 'Venom' ),
										"id" => "right_section_headline",
										"type" => "textarea");		
										
					$options[] = array( "name" => __("Description", 'Venom' ),
										"desc" => __("Enter the description of product or service", 'Venom' ),
										"id" => "right_section_text",
										"type" => "textarea");
										
					$options[] = array( "name" => __("Link", 'Venom' ),
										"desc" => __("Enter the link to product or service", 'Venom' ),
										"id" => "right_section_link",
										"type" => "text");																								

										
		$options[] = array( "type" => "groupcontainerclose");
		
		$options[] = array( "name" => __("Quote Section", 'Venom' ),
							"type" => "groupcontaineropen");	
					
					$options[] = array( "name" => __("Quote", 'Venom' ),
										"desc" => __("Enter the Text", 'Venom' ),
										"id" => "quote_section_text",
										"type" => "textarea");		
										
					$options[] = array( "name" => __("Name", 'Venom' ),
										"desc" => __("Enter the name", 'Venom' ),
										"id" => "quote_section_name",
										"type" => "text");														

										
		$options[] = array( "type" => "groupcontainerclose");													
						
	$options[] = array( "type" => "innertabclose");	
	
	$options[] = array( "name" => "country7",
						"type" => "innertabopen");
						
		$options[] = array( "name" => __("Biz Two Settings", 'Venom' ),
							"type" => "tabheading");						
						
		$options[] = array( "name" => __("Welcome Section", 'Venom' ),
							"type" => "groupcontaineropen");	

					$options[] = array( "name" => __("Headline", 'Venom' ),
										"desc" => __("Enter the headline", 'Venom' ),
										"id" => "biztwo_welcome_headline",
										"type" => "textarea");		
										
					$options[] = array( "name" => __("Welcome text", 'Venom' ),
										"desc" => __("Enter the welcome text", 'Venom' ),
										"id" => "biztwo_welcome_text",
										"type" => "textarea");														

										
		$options[] = array( "type" => "groupcontainerclose");	
		
		$options[] = array( "name" => __("Left Section", 'Venom' ),
							"type" => "groupcontaineropen");	

					$options[] = array( "name" => __("Upload Image", 'Venom' ),
										"desc" => __("Upload your image here.", 'Venom' ),
										"id" => "biztwo_left_section_image",
										"type" => "upload");					
					
					$options[] = array( "name" => __("Name", 'Venom' ),
										"desc" => __("Enter the name of product or service", 'Venom' ),
										"id" => "biztwo_left_section_headline",
										"type" => "textarea");		
										
					$options[] = array( "name" => __("Description", 'Venom' ),
										"desc" => __("Enter the description of product or service", 'Venom' ),
										"id" => "biztwo_left_section_text",
										"type" => "textarea");	
										
					$options[] = array( "name" => __("Link", 'Venom' ),
										"desc" => __("Enter the link to product or service", 'Venom' ),
										"id" => "biztwo_left_section_link",
										"type" => "text");																							

										
		$options[] = array( "type" => "groupcontainerclose");	
		
		$options[] = array( "name" => __("Center Left Section", 'Venom' ),
							"type" => "groupcontaineropen");	

					$options[] = array( "name" => __("Upload Image", 'Venom' ),
										"desc" => __("Upload your image here.", 'Venom' ),
										"id" => "biztwo_center_section_image",
										"type" => "upload");					
					
					$options[] = array( "name" => __("Name", 'Venom' ),
										"desc" => __("Enter the name of product or service", 'Venom' ),
										"id" => "biztwo_center_section_headline",
										"type" => "textarea");		
										
					$options[] = array( "name" => __("Description", 'Venom' ),
										"desc" => __("Enter the description of product or service", 'Venom' ),
										"id" => "biztwo_center_section_text",
										"type" => "textarea");	
										
					$options[] = array( "name" => __("Link", 'Venom' ),
										"desc" => __("Enter the link to product or service", 'Venom' ),
										"id" => "biztwo_center_section_link",
										"type" => "text");																							

										
		$options[] = array( "type" => "groupcontainerclose");	
		
		$options[] = array( "name" => __("Center Right Section", 'Venom' ),
							"type" => "groupcontaineropen");	

					$options[] = array( "name" => __("Upload Image", 'Venom' ),
										"desc" => __("Upload your image here.", 'Venom' ),
										"id" => "biztwo_centerright_section_image",
										"type" => "upload");					
					
					$options[] = array( "name" => __("Name", 'Venom' ),
										"desc" => __("Enter the name of product or service", 'Venom' ),
										"id" => "biztwo_centerright_section_headline",
										"type" => "textarea");		
										
					$options[] = array( "name" => __("Description", 'Venom' ),
										"desc" => __("Enter the description of product or service", 'Venom' ),
										"id" => "biztwo_centerright_section_text",
										"type" => "textarea");
										
					$options[] = array( "name" => __("Link", 'Venom' ),
										"desc" => __("Enter the link to product or service", 'Venom' ),
										"id" => "biztwo_centerright_section_link",
										"type" => "text");																								

										
		$options[] = array( "type" => "groupcontainerclose");			
		
		$options[] = array( "name" => __("Right Section", 'Venom' ),
							"type" => "groupcontaineropen");	

					$options[] = array( "name" => __("Upload Image", 'Venom' ),
										"desc" => __("Upload your image here.", 'Venom' ),
										"id" => "biztwo_right_section_image",
										"type" => "upload");					
					
					$options[] = array( "name" => __("Name", 'Venom' ),
										"desc" => __("Enter the name of product or service", 'Venom' ),
										"id" => "biztwo_right_section_headline",
										"type" => "textarea");		
										
					$options[] = array( "name" => __("Description", 'Venom' ),
										"desc" => __("Enter the description of product or service", 'Venom' ),
										"id" => "biztwo_right_section_text",
										"type" => "textarea");
										
					$options[] = array( "name" => __("Link", 'Venom' ),
										"desc" => __("Enter the link to product or service", 'Venom' ),
										"id" => "biztwo_right_section_link",
										"type" => "text");																								

										
		$options[] = array( "type" => "groupcontainerclose");
		
		$options[] = array( "name" => __("Quote Section", 'Venom' ),
							"type" => "groupcontaineropen");	
					
					$options[] = array( "name" => __("Quote", 'Venom' ),
										"desc" => __("Enter the Text", 'Venom' ),
										"id" => "biztwo_quote_section_text",
										"type" => "textarea");		
										
					$options[] = array( "name" => __("Name", 'Venom' ),
										"desc" => __("Enter the name", 'Venom' ),
										"id" => "biztwo_quote_section_name",
										"type" => "text");														

										
		$options[] = array( "type" => "groupcontainerclose");													
						
	$options[] = array( "type" => "innertabclose");			
	
	$options[] = array( "name" => "country9",
						"type" => "innertabopen");
						
		$options[] = array( "name" => __("Standard Page Settings", 'Venom' ),
							"type" => "groupcontaineropen");	

					$options[] = array( "name" => __("Show Comments?", 'Venom' ),
										"desc" => __("Select yes if you want to show Comments", 'Venom' ),
										"id" => "show_comments_spage",
										"std" => "false",
										"type" => "select",
										"class" => "mini", //mini, tiny, small
										"options" => $magpro_slider_start);		
										
		$options[] = array( "type" => "groupcontainerclose");								
						
	$options[] = array( "type" => "innertabclose");	
	
	$options[] = array( "name" => "country11",
						"type" => "innertabopen");
						
		$options[] = array( "name" => __("Footer Settings", 'Venom' ),
							"type" => "tabheading");		
		
					$options[] = array( "name" => __("Select a footer layout", 'Venom' ),
										"desc" => __("Images for layout.", 'Venom' ),
										"id" => "footer_layout",
										"std" => "one",
										"type" => "images",
										"options" => array(
											'one' => $imagepath . 'footer1.png',
											'two' => $imagepath . 'footer2.png')
										);												
						
	$options[] = array( "type" => "innertabclose");			
							
						

							
		
	return $options;
}