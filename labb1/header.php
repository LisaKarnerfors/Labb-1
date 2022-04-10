<!DOCTYPE html>
<html>

<head> 
	<meta charset="UTF-8"/>
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
  
<body> 

<!-- Header -->

<div id="wrap">

        <header id="header">
			<div class="container">
				<div class="row">
					<div class="col-xs-8 col-sm-6">

                    <!-- Hämtar info om den aktuella webbsidan -->

					<!-- Se över detta -->
					<a class="logo" href="<?php get_template_directory_uri(); ?>/index.php"> <?php echo get_bloginfo('name'); ?></a>
					</div>


					<div class="col-sm-6 hidden-xs">
						<?php get_search_form(); ?>

						<!-- Flyttas -->
						<!-- <form id="searchform" class="searchform">
							<div>
								<label class="screen-reader-text">Sök efter:</label> 
								<input type="text" />
								<input type="submit" value="Sök" />
							</div>
						</form> -->

					</div>
					<div class="col-xs-4 text-right visible-xs">
					<?php get_search_form(); ?>

					<!-- Flyttas -->
		<!-- 				<div class="mobile-menu-wrap">
							<i class="fa fa-search"></i>
							<i class="fa fa-bars menu-icon"></i> -->
						</div>
					</div>
				</div>
			</div>

			<nav id="nav">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
					
						<?php wp_nav_menu(array(
                            	'theme_location' => 
                        	    'Headermenu'
                        	));
                        	?>
					</div>
				</div>
			</div>
		</nav>



		</header>

    <?php 
  /*       $menuarry = ["theme_location" => "headermenu",];
        wp_nav_menu($menuarray); */
    ?>


    

