<?php get_header(); ?>

<!-- Startsidan -->
		<main>
			<section>
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<div class="hero">
								
								<!-- Loop letar efter posts och laddar ner det på sidan -->
									<?php
                    					while (have_posts()) {
                        					the_post();?>

                        				<?php the_post_thumbnail();?>
                        				
										<div class="text">
                            				<h1><?php the_title(); ?></h1>
                            				<p><?php the_content(); ?></p>
                        				</div>
										
                        			<?php } ?>

								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</main>

<?php get_footer(); ?>
