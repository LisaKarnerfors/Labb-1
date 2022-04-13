<?php get_header(); ?>

<main>
	<section>
		<div class="container">
			<div class="row">
				<div id="primary" class="col-xs-12 col-md-9">
                    <h1><?php wp_title(""); ?></h1> <!-- Manipulera med filter -->
			   			<!-- Loop - letar efter posts och skriver ut det på sidan -->
						<?php
                			while (have_posts()) {
            					the_post();?>
						<article> 
                        	<?php the_post_thumbnail(null, ['class' => 'img-responsive responsive--full', 'title' => 'Feature image']);?>

                            <h2 class="title">
								<a href="<?php the_permalink();?>">
								<h1><?php the_title(); ?></h1>
							</a></h2>

                        <!-- Skriver ut datum, författare och kategorier -->
						<ul class="meta">
								<li>
									<i class="fa fa-calendar"><?php the_time( 'j F, Y' ); ?></i>
									<i class="fa fa-user"><?php the_author_posts_link(); ?></i>
									<i class="fa fa-tag"><?php the_category( ', ' ); ?></i>
								</li>
							</ul>
						<!-- Skriver ut utdrag på sidan från blogginlägg -->
							<p><?php the_excerpt();?></p>
						</article>
						<?php } ?>

			  			 <h2 class="screen-reader-text"></h2>
				 			<?php the_posts_pagination( array(
    							'mid_size'  => 2,
								'prev_text' => __( 'Föregående'),
    							'next_text' => __( 'Nästa'),
								));
							?>	
				</div>
					
					<aside id="secondary" class="col-xs-12 col-md-3">
						<div id="sidebar">
    						<ul role="navigation">
								<li class="pagenav">
                				<?php dynamic_sidebar("sidebar-menu");?>
                				</li>
							</ul>
						</div>
					</aside>
            </div>
		</div>
	</section>
</main>

<?php get_footer(); ?>