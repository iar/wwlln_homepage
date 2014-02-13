<?php get_header() ?>

		<!-- Content -->
			<div id="content-wrapper">
				<div id="content">
					<div class="container">
						<div class="row">
							<div class="12u">
                                <section>

                                <?php the_post(); ?>
                                    
                                    <div id="post-<?php the_ID() ?>" class="post">
                                        <h2 class="post-title"><?php the_title() ?></h2>
                                        
                                        <div class="post-meta">
                                            Posted on <?php the_time('F j, Y'); ?> in: <?php the_category(', '); ?>
                                            <span class="sep">|</span>
                                            <a href="#comments">Jump To Comments</a>
                                        </div>
                                        
                                        <div class="post-content">
                                            <?php the_content(); ?>
                                        </div>
                                    </div><!-- .post -->

                                <?php comments_template(); ?>	
                                    
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
			</div>

<?php get_footer() ?>
