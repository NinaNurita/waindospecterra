<?php get_header(); ?>

					<?php get_template_part( 'slider' ); ?>
                    
					<?php
					
						if ( 'page' == get_option( 'show_on_front' ) ) {
						
							if( of_get_option('homepage_layout') == 'bone' ) {
								get_template_part( 'index', 'bone' ); 
							}elseif( of_get_option('homepage_layout') == 'btwo' ) {
								get_template_part( 'index', 'btwo' ); 
							}else{
								get_template_part( 'index', 'page' ); 
							}
							
						}else {
							get_template_part( 'index', 'standard' );
						}
					
					?>
                    
<?php get_footer(); ?>