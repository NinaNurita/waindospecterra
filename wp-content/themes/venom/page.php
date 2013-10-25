<?php get_header(); ?>

					<?php get_template_part( 'slider' ); ?>
                    
                	<div class="w90 overflowauto content_section">
                    
                    	<div class="maxwidth overflowauto vpadding5">
                        
                            
							<?php if (have_posts()) : ?>
							<?php while (have_posts()) : the_post(); ?>                                                  
                        
                        	<div class="w90 bpadding5p overflowauto <?php post_class(); ?>"  id="post-<?php the_ID(); ?>">
                        
                                <h1 class="h148sspr bpadding20 brdbtm1E4E6E9"><?php the_title(); ?></h1>
                                
								<div class="r100">
                                
									<div class="entry vmargint20">
										
										<?php the_content(__('<span>Continue Reading >></span>', 'Venom')); ?>
                                        
										
                                        <div class="clear"></div>
                                                            
										
                                        <?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'Venom' ) . '</span>', 'after' => '</div>' ) ); ?>	
                                        

                                                            														
									</div>
                                    

                                    
                                                                      
                                                            
                                </div>	
                                
                                
								<?php comments_template(); ?>
                                
                                
								<?php endwhile; ?>
								<?php endif; ?>                                 				
                                
                            </div>

                            
                            

                        
                        </div>
                    
                    </div>
                    
<?php get_footer(); ?>                    
