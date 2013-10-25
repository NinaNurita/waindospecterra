

                            <div class="r30100 floatleft">
                            
                            	<div class="w867 bge4e6e9 vpadding5">
                                
									<?php if ( dynamic_sidebar('default') ){
																			} else { ?>  
                                                                            
																		<div class="sidebar_widget">
																			<div class="widget widget_categories">
																				<h3 class="widgettitle"><?php _e('Categories', 'Venom') ?></h3>
																				<ul>
																					<?php wp_list_categories('show_count=0&title_li='); ?>
																				</ul>	
																			</div>
																		</div><!-- /widget -->
																		
																		<div class="sidebar_widget">
																			<div class="widget widget_categories">
																				<h3 class="widgettitle"><?php _e('Archives', 'Venom') ?></h3>
																				<ul>
																					<?php wp_get_archives('type=monthly'); ?>
																				</ul>
																			</div>
																		</div><!-- /widget -->
																		
																		<div class="sidebar_widget">
																			<div class="widget widget_categories">
																				<h3 class="widgettitle"><?php _e('Blogroll', 'Venom') ?></h3>
																				<ul>
																					<?php wp_list_bookmarks('title_li=&categorize=0'); ?>
																				</ul>
																			</div>
																		</div><!-- /widget -->  
                                                                                                                                                  
                                                                            
                                                                            
                                    <?php } ?>                               
                                
                                </div>
                            
                            </div>