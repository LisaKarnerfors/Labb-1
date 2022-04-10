<?php get_header(); ?>

<!-- Startsidan -->
		<main>
			<section>
				<div class="container">
					<div class="row">
						<div class="col-xs-12">	
							<!-- Loopar igenom post och hämtar ner inlägg på sidan -->
							<?php
            					while (have_posts()) { 
									the_post();?>	
								<div class="hero">
									<!-- Se över detta / lägg till bild -->
									<?php the_post_thumbnail();?> <!-- Utvald bild -->	
                        			
									<div class="text">
										<!-- Skriver ut titeln -->
										<h1><?php the_title(); ?></h1>
										<!-- Skriver ut innehålle på sidan -->
                        				<p><?php the_content(); ?></p>
                    				</div>
								</div>
                        	<?php } ?>	
						</div>
					</div>
				</div>
			</section>
		</main>

<?php get_footer(); ?>
