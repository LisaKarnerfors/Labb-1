<!DOCTYPE html>
<html>

<head> 
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
  
<body> 

	<div id="wrap">

       	<header id="header">
			<div class="container">
				<div class="row">
					<div class="col-xs-8 col-sm-6">
                    	<!-- Skriver ut info om den aktuella webbsidan -->
						<a class="logo" href="<?php echo get_bloginfo("url");?>"> <?php echo get_bloginfo("name");?></a>
					</div>
					
					<div class="col-sm-6 hidden-xs">
						<?php get_search_form(); ?>
					</div>
					
					<div class="col-xs-4 text-right visible-xs">
						<div class="mobile-menu-wrap">
							<i class="fa fa-search"></i>
							<i class="fa fa-bars menu-icon"></i>
						</div>
					</div>
				</div>
			</div>

					<div class="mobile-search">
						<?php get_search_form(); ?>
					</div>
			</div>

			<nav id="nav">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<?php  wp_nav_menu(array(
							   'theme_location' => 
							   'headermenu'
							   ));
						   ?>
						</div>
					</div>
				</div>
			</nav>
		</header>

							
