<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php global $query_string; ?><html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="initial-scale=1.0, width=device-width" />
	<link href="images/logo.png" rel="shortcut icon" type="image/x-icon" />
    <title><?php wp_title(); ?></title>
	
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?> " type="text/css" media="all" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />


    
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<!-- Wrapper one starts here -->
	<div id="wrapper_one">
    
    	<!-- Wrapper two starts here -->
    	<div id="wrapper_two">
        
            <!-- Wrapper three starts here -->
            <div id="wrapper_three">
            
                <!-- Wrapper four starts here -->
                <div id="wrapper_four">
                

                        
                    <?php if( !of_get_option('logo_layout_style') || of_get_option('logo_layout_style') == 'sbys' ) : ?>
                        
                	<div class="r100 overflowauto logo_section vpadding2">
                    
                    	<div class="maxwidth overflowauto vpadding2">                        
                    
                            <!-- Logo Section starts here -->
                            <div class="r60100 maximg rfltlft">
                            
                                <div class="w867m">
                                <div class="w867m rtxtaln">
                                
                                    <p class="logo fontwht"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo('name'); ?></a></p>
                                    <p class="fontwhite"><?php bloginfo('description'); ?></p>                            
                                </div>
                                </div>
                            
                            </div>
                            <!-- Logo Section ends here -->
                            
                            <!-- Menu Section starts here -->
                            <div class="r40100 rfltlft">
                            
                                                              
                            
                            </div>  
                            <!-- Menu Section ends here -->
                            
                        </div>                     

                    </div>                              
                            
                    <?php else : ?>
                        
                	<div class="r100 overflowauto logo_section">
                    
                    	<div class="maxwidth overflowauto">
                                                
                            <!-- Logo Section starts here -->
                            <div class="r100 maximg vpadding3">
                            
                                <div class="w867m txtcntr">
                                
                                    <p class="logo fontwht"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo('name'); ?></a></p>
                                    <p class="fontwhite"><?php bloginfo('description'); ?></p>                            
                                
                                </div>
                            
                            </div>
                            <!-- Logo Section ends here -->
                            
                            <!-- Menu Section starts here -->
                            <div class="r100 rfltlft">
                            
                                                              
                            
                            </div>  
                            <!-- Menu Section ends here -->                        
                        
                        </div>                     

                    </div>                         
                    
					<?php endif; ?> 
                    
                    <!-- Outer content starts here -->
                    <div class="r100 overflowauto outercontent vpadding5t rbg5 bmargin10p">
                    
                            	<div class="w90 bmargin2p overflowauto vpadding15px skclr">
                                    
                                    <div id="menu" class="w94m">
                                        <?php wp_nav_menu( array( 'theme_location' => 'mainmenu', 'depth' => 1, 'menu_class' => 'dropdown dropdown-horizontal','fallback_cb'     => 'Venom_backupmenu', 'menu_id'=>'Main_nav', 'container'=>'') ); ?>			
                                    </div>                             

                                </div>                    