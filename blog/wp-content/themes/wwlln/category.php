<?php get_header() ?>

		<!-- Content -->
			<div id="content-wrapper">
				<div id="content">
					<div class="container">
						<div class="row">
							<div class="12u">
                                <section>

                                <h3 class="page-subtitle">Category Archive: <?php echo single_cat_title() ?></h3>

                                <?php while ( have_posts() ) : the_post() ?>
                                <div id="post-<?php the_ID() ?>" class="post">
                                    <h2 class="post-title"><a href="<?php the_permalink() ?>" title="<?php the_title() ?>" rel="bookmark"><?php the_title() ?></a></h2>								
                                    <div class="post-meta">Posted on <?php the_time('F j, Y'); ?> in: <?php the_category(', '); ?><span class="sep">|</span><?php comments_popup_link('Post Comment', '1 Comment', '% Comments') ?></div>
                                    <div class="post-content">
                                        <?php the_content('Click here to read more &raquo;'); ?>
                                    </div>
                                </div><!-- .post -->
                                <?php endwhile ?>

                                <div class="navigation">
                                    <div class="navleft"><?php next_posts_link('&laquo; Older Posts', '0') ?></div>
                                    <div class="navright"><?php previous_posts_link('Newer Posts &raquo;', '0') ?></div>
                                </div>

                                </section>
                            </div>
                        </div>
                    </div>
                </div>
			</div>

<?php get_footer() ?>



<?php get_header() ?>
	
	<div id="content">
	
		<h3 class="page-subtitle">Category Archive: <?php echo single_cat_title() ?></h3>
	
		<?php while ( have_posts() ) : the_post() ?>
		<div id="post-<?php the_ID() ?>" class="post">
			<h2 class="post-title"><a href="<?php the_permalink() ?>" title="<?php the_title() ?>" rel="bookmark"><?php the_title() ?></a></h2>								
			<div class="post-meta">Posted on <?php the_time('F j, Y'); ?> in: <?php the_category(', '); ?><span class="sep">|</span><?php comments_popup_link('Post Comment', '1 Comment', '% Comments') ?></div>
			<div class="post-content">
				<?php the_content('Click here to read more &raquo;'); ?>
			</div>
		</div><!-- .post -->
		<?php endwhile ?>

		<div class="navigation">
			<div class="navleft"><?php next_posts_link('&laquo; Older Posts', '0') ?></div>
			<div class="navright"><?php previous_posts_link('Newer Posts &raquo;', '0') ?></div>
		</div>

	</div><!-- #content -->

<?php get_footer() ?>