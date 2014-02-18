                <!-- Front Page News and Image section -->
                
				<div id="banner">
					<div class="container">
						<div class="row">
							<div class="6u">
							
                                <p>Recent News</p>
                                
                                <ul class="link-list">
                                    
                                <!-- Use php to grab first 4 items from the blog -->

                                <?php
                                    $args=array(
                                        'post_type' => 'post',
                                        'post_status' => 'publish',
                                        'posts_per_page' => 4,
                                        'caller_get_posts'=> 1
                                    );
                                    $my_query = null;
                                    $my_query = new WP_Query($args);
                                    if( $my_query->have_posts() ) {
                                        echo '';
                                        while ($my_query->have_posts()) : $my_query->the_post(); ?>

                                        <li><a class="sidebar" href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a> - <?php the_time('m/d/y') ?></li>

                                        <?php
                                        endwhile;
                                    }
                                    wp_reset_query();
                                ?>      
                                    
                                <li><a href="<?php echo site_url(); ?>/blog/">More on the blog</a></li>

                            </ul>

							</div>
							<div class="6u">
								
								<!-- Banner Image -->
									<a href="network_maps" class="bordered-feature-image"><img src="http://wwlln.net/L_plot_global_map.jpg" alt="" /></a>
							
							</div>
						</div>
					</div>
				</div>
