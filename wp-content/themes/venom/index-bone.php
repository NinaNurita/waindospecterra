                	<div class="w90 overflowauto content_section">
                    
                    	<div class="maxwidth overflowauto vpadding5">
                        
                        	<div class="w90 bpadding10p overflowauto">
                        
                                <h1 class="txtcntr h148sspr bpadding20">
                                <?php 
									if( of_get_option('welcome_headline') ){
										echo esc_html( of_get_option('welcome_headline') );
									}else {
										_e('Welcome Headline Comes Here',  'Venom');
									}
								?>
                                </h1>
                                <p>
                                <?php 
									if( of_get_option('welcome_text') ){
										echo esc_html( of_get_option('welcome_text') );
									}else {
										_e('You can change this text in welcome text box of welcome section block in Biz one tab of theme options page. You can change this text in welcome text box of welcome section block in Biz one tab of theme options page.',  'Venom');
									}
								?>                                
                                </p>
                                
                            </div>
                            
                        	<div class="w90 bpadding5p overflowauto">
                        
								<div class="r30100 floatleft">
                                
                                    <div class="w867m maximg rfltlft rtxtaln">
									<a href="<?php if( of_get_option('left_section_link') ){ echo esc_url( of_get_option('left_section_link') );}else { echo '#';}?>">
									<?php 
                                        if( of_get_option('left_section_image') ){
                                            echo '<img class="" src="'.esc_url( of_get_option('left_section_image') ).'" />';
                                        }else {
                                            echo '<img class="" src="'.get_stylesheet_directory_uri().'/images/fetimg.png"  />';
                                        }
                                    ?>
                                    </a>                                  
                                    </div>

                                    <div class="w867m maximg rfltlft rtxtaln vpadding5">
                                        <p class="h336tt22lr bpadding20">
											<a href="<?php if( of_get_option('left_section_link') ){ echo esc_url( of_get_option('left_section_link') );}else { echo '#';}?>">
											<?php 
                                                if( of_get_option('left_section_headline') ){
                                                    echo esc_html( of_get_option('left_section_headline') );
                                                }else {
                                                    _e('Design',  'Venom');
                                                }
                                            ?> 
                                            </a>                                       
                                        </p>
                                        <p>
											<?php 
                                                if( of_get_option('left_section_text') ){
                                                    echo esc_html( of_get_option('left_section_text') );
                                                }else {
													_e('You can change this text in description box of left section block in Biz one tab of theme options page.',  'Venom');
                                                }
                                            ?>                                         
                                        </p>
                                    </div>                                                                    
                                
                                </div>
                                
								<div class="r30100 floatleft">
                                
                                    <div class="w867m maximg rfltlft rtxtaln">
									<a href="<?php if( of_get_option('center_section_link') ){ echo esc_url( of_get_option('center_section_link') );}else { echo '#';}?>">
									<?php 
                                        if( of_get_option('center_section_image') ){
                                            echo '<img class="" src="'.esc_url( of_get_option('center_section_image') ).'" />';
                                        }else {
                                            echo '<img class="" src="'.get_stylesheet_directory_uri().'/images/fetimg.png"  />';
                                        }
                                    ?>
                                    </a>
                                    </div>

                                    <div class="w867m maximg rfltlft rtxtaln vpadding5">
                                        <p class="h336tt22lr bpadding20">
											<a href="<?php if( of_get_option('center_section_link') ){ echo esc_url( of_get_option('center_section_link') );}else { echo '#';}?>">
											<?php 
                                                if( of_get_option('center_section_headline') ){
                                                    echo esc_html( of_get_option('center_section_headline') );
                                                }else {
                                                    _e('Development',  'Venom');
                                                }
                                            ?>  
                                            </a>                                      
                                        </p>
                                        <p>
											<?php 
                                                if( of_get_option('center_section_text') ){
                                                    echo esc_html( of_get_option('center_section_text') );
                                                }else {
													_e('You can change this text in description box of center section block in Biz one tab of theme options page.',  'Venom');
                                                }
                                            ?>                                         
                                        </p>
                                    </div>                                 
                                
                                </div>
                                
								<div class="r30100 floatleft">
                                
                                    <div class="w867m maximg rfltlft rtxtaln">
									<a href="<?php if( of_get_option('right_section_link') ){ echo esc_url( of_get_option('right_section_link') );}else { echo '#';}?>">
									<?php 
                                        if( of_get_option('right_section_image') ){
                                            echo '<img class="" src="'.esc_url( of_get_option('right_section_image') ).'" />';
                                        }else {
                                            echo '<img class="" src="'.get_stylesheet_directory_uri().'/images/fetimg.png"  />';
                                        }
                                    ?>
                                    </a>
                                    </div>

                                    <div class="w867m maximg rfltlft rtxtaln vpadding5">
                                        <p class="h336tt22lr bpadding20">
											<a href="<?php if( of_get_option('right_section_link') ){ echo esc_url( of_get_option('right_section_link') );}else { echo '#';}?>">
											<?php 
                                                if( of_get_option('right_section_headline') ){
                                                    echo esc_html( of_get_option('right_section_headline') );
                                                }else {
                                                    _e('Marketing',  'Venom');
                                                }
                                            ?>
                                            </a>                                       
                                        </p>
                                        <p>
											<?php 
                                                if( of_get_option('right_section_text') ){
                                                    echo esc_html( of_get_option('right_section_text') );
                                                }else {
													_e('You can change this text in description box of right section block in Biz one tab of theme options page.',  'Venom');
                                                }
                                            ?>                                         
                                        </p>
                                    </div>                                 
                                
                                </div>                                                                
                                
                            </div> 
                            
                        	<div class="w90 overflowauto brdr1e4e7e9">
                            
                            	<div class="quote">
                        
                                		<p class="bpadding10">
											<?php 
                                                if( of_get_option('quote_section_text') ){
                                                    echo esc_html( of_get_option('quote_section_text') );
                                                }else {
													_e('You can change this text in quote box of quote section block in Biz one tab of theme options page. You can change this text in quote box of quote section block in Biz one tab of theme options page.',  'Venom');
                                                }
                                            ?>                                         
                                        </p>
                                        
                                		<p class="quotenm rbg5550 bge4e6e9">
											<?php 
                                                if( of_get_option('quote_section_name') ){
                                                    echo esc_attr( of_get_option('quote_section_name') );
                                                }else {
                                                    _e('Mac Taylor',  'Venom');
                                                }
                                            ?>                                         
                                        </p>                                        
                                
                            	</div> 
                            
                            </div>                                                       
                        
                        </div>
                    
                    </div>