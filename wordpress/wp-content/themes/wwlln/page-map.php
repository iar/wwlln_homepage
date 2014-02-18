<?php
/*
Template Name: Lightning Map
*/
?>

<?php get_header() ?>


<!-- Content -->
			<div id="content-wrapper">
				<div id="content">
					<div class="container">
						<div class="row">
							<div class="12u">

								<!-- Main Content -->
									<section>
                                        
                                        <!-- Title -->
                                        <h2 class="post-title"><?php the_title(); ?></h2>

                                        <!-- Google Map -->
                                        <div id="map-canvas" style="height:400px;"></div>
                                        
                                        <!-- Statistics -->
                                        <center>
                                            <div id="time"></div>
                                            <div id="stats"></div> 
                                            <div id="memory"></div> 
                                            <div id="firstTime"></div>                            
                                        </center>
                                        
                                        <!-- .post -->
                                        <?php the_post() ?>
                                        <div id="post-<?php the_ID(); ?>" class="post">
                                            <div class="post-content">
                                                <?php the_content() ?>
                                            </div>
                                        </div>

                                    </section>

							</div>
						</div>
					</div>
				</div>
			</div>


<?php get_footer() ?>
