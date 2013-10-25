<?php get_header(); ?>

					<?php get_template_part( 'slider' ); ?>
                    
                	<div class="w90 overflowauto content_section">
                    
                    	<div class="maxwidth overflowauto vpadding2">
                        
                        	<div class="w90 bpadding5p overflowauto">
                        
                                
                                    <div class="fouroh">
                                        <h2><?php _e('Not Found!', 'Venom') ?></h2>
                                        <p><?php _e('You are looking for something that is not here. Please use the seach form below.', 'Venom') ?></p>
                                        <div class="fourohsearch">
                                            <?php get_search_form(); ?>
                                        </div>
                                    </div>
                                                            
                                				
                            </div>

                        </div>
                    
                    </div>
                    
<?php get_footer(); ?>                    
