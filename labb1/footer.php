
<footer id="footer">
			<div class="container">
				<div class="row top">
					<div class="col-xs-12 col-sm-6 col-md-4">

					 <!-- Widgets för innehåll "Kort om oss & Kontaktuppgifter" -->


<div class="footer-menu"></div>
	 <?php 
    	$menuarry = ["theme_location" => "footermenu",];
    		wp_nav_menu($menuarray);
	?>

				
				<div class="row bottom">
					<div class="col-xs-12">
						<p>Copyright &copy; Grupp X, 2016</p>
					</div>
				</div>
			</div>
		</footer>

<?php wp_footer(); ?>

</div> 


</body>
</html>