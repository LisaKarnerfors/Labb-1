
		<footer id="footer">
			<div class="container">
				<div class="row top">
					<div class="col-xs-12 col-sm-6 col-md-4">

					 <!-- Widgets för innehåll "Kort om oss" -->
					</div>
					<div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
					<!-- Widgets för innehåll "Kontaktuppgifter" -->
					</div>
					
					<div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
						<?php wp_nav_menu(array(
		   						'theme_location' => 
		   						'footermenu'
		   						));
							?>	
					</div>

					<div class="row bottom">
						<div class="col-xs-12">
							<p>Copyright &copy; Grupp X, 2016</p>
						</div>
					</div>
				</div>
			</div>
		</footer>
	
<?php wp_footer(); ?>

</div> 

</body>
</html>