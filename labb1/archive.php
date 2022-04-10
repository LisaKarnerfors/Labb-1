<?php get_header(); ?>

<?php
while ( have_posts() ) {
        the_post(); 
?>

        <h1>
            <?php single_cat_title(); ?>
        </h1>

        <p>
            <?php the_excerpt(); ?>
        </p>
 

        <?php }?>

<?php get_footer(); ?>