<?php get_header(); ?>

		<main>
			<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12 col-md-9">
                            <h1><?php wp_title(""); ?></h1>
                       			<artical> 
							   		<!-- Loop letar efter posts och skriver  det på sidan -->
								   <?php
                						while (have_posts()) {
                							the_post();?>
                            			<?php the_post_thumbnail("blogImage_size");?>

                            			<h2 class="title">
											<a href="<?php the_permalink();?>">
											<h1><?php the_title(); ?></h1></a>
										</h2>
                        				
										<!-- Skriver ut datum, författare och kategorier -->
										<div class="meta">
											<i class="fa fa-calendar"><?php the_time( 'j F, Y' ); ?></i> 
											<i class="fa fa-user"><?php the_author_posts_link(); ?></i>
											<i class="fa fa-tag"><?php the_category( ', ' ); ?></i>
										</div>

										<!-- Skriver ut utdrag på sidan från blogginlägg -->
										<p><?php the_excerpt();?></p>
									<?php } ?>
								</artikel>
                         

						 <!-- Se över detta.... -->
                         <nav class="navigation pagination">
							 <h2 class="screen-reader-text"></h2>
						 	<?php the_posts_pagination( array(
    							'mid_size'  => 2,
    							'prev_text' => __( 'Föregående', 'textdomain' ),
    							'next_text' => __( 'Nästa', 'textdomain' ),
								) ); ?>
							</nav>

                        </div>
                    </div>
				</div>
			</section>
		</main>

<?php get_footer(); ?>

<!-- <h2 class="screen-reader-text">Inläggsnavigering</h2>
								<a class="prev page-numbers" href="">Föregående</a>
								<span class="page-numbers current">1</span>
								<a class="page-numbers" href="">2</a>
								<a class="next page-numbers" href="">Nästa</a> -->