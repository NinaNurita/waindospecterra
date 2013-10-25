                        		<!-- Footer logo section starts here -->
								<div class="r40100 floatleft vpadding5">
                                
                                	<div class="w867m rtxtaln">
                                    
                                    	<h3 class="flogo fontgreyf"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo('name'); ?></a></h3>
                                        <p class="fontgreyf bmargin5px"><?php _e('&copy; All rights reserved.', 'Venom') ?></p>
                                                        <?php if( is_home() || is_front_page() ): ?>
                                                        <p class="fontgreyf bmargin5px">
															<?php _e('Powered by ', 'Venom') ?><a href="http://www.wordpress.org/"><?php _e('WordPress', 'Venom') ?></a> </p> 
                                                        <p class="fontgreyf bmargin5px"><?php _e('Designed by ', 'Venom') ?><a href="http://www.themealley.com/"><?php _e('ThemeAlley.Com', 'Venom') ?></a>
                                                        </p>
                                                        <?php else: ?>
                                                        <p class="fontgreyf bmargin5px">
															<?php _e('Powered by ', 'Venom') ?><a href="http://www.wordpress.org/"><?php _e('WordPress', 'Venom') ?></a>
                                                        </p>                                                        
														<?php endif;?>                                      
                                        <div class="r100 vpadding2 flogos"><?php get_search_form(); ?></div>
                                    
                                    </div>
                                
                                </div>
                                
                                <!-- Footer left widget starts here -->
								<div class="r20100 floatleft vpadding5">
                                
                                	<div class="w867m">
                                    
										<?php dynamic_sidebar('footer-left');?>
                                        			
                                    </div>                                                                                                                                                  
                                </div> 
                                
                                <!-- Footer center widget starts here -->
								<div class="r20100 floatleft vpadding5">
                                
                                	<div class="w867m">
                                    
										<?php dynamic_sidebar('footer-center');?>
                                        			
                                    </div>                                
                                
                                </div> 
                                
                                <!-- Footer right widget starts here -->
								<div class="r20100 floatleft vpadding5">
                                
                                	<div class="w867m">
                                    
										<?php dynamic_sidebar('footer-right');?>
                                        			
                                    </div>                                
                                
                                </div>
                                <!-- Footer right widget ends here -->