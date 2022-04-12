<?php get_header(); ?>

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
							<?php the_post_thumbnail();?> 	
							<div class="text">
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
