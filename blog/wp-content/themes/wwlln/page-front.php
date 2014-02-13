<?php
/*
Template Name: Home page (index.html page)
*/
?>

<?php get_header('home') ?>
    <!-- home header needs closing div __>

                
                <!-- Front Page News and Image section -->
                
				<div id="banner">
					<div class="container">
						<div class="row">
							<div class="6u">
							
                                <p>Recent News</p>
                                
                                <ul class="link-list">
                                    
                                    <!-- Use php to grab first 4 items from the blog -->
                                    
                                        <?php while ( have_posts() ) : the_post() ?>

                                                <li><a href="<?php the_permalink() ?>" title="<?php the_title() ?>" rel="bookmark"><?php the_title() ?></a></li>								

                                        <?php endwhile ?>
                                
                                    <li><a href="<?php echo site_url(); ?>/blog/">More on the blog</a></li>
                                    
                                </ul>

							</div>
							<div class="6u">
								
								<!-- Banner Image -->
									<a href="network_maps.html" class="bordered-feature-image"><img src="http://wwlln.net/L_plot_global_map.jpg" alt="" /></a>
							
							</div>
						</div>
					</div>
				</div>
            </div>

		<!-- Content -->
			<div id="content-wrapper">
				<div id="content">
					<div class="container">
						<div class="row">
							<div class="12u">
                                <section>

                                    <?php the_post() ?>
                                    <div id="post-<?php the_ID(); ?>" class="post">
                                        <h2 class="post-title"><?php the_title(); ?></h2>
                                        <div class="post-content">
                                            <?php the_content() ?>
                                        </div>
                                    </div><!-- .post -->
                                    
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
			</div>

<?php get_footer() ?>
