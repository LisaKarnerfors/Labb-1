		<footer id="footer">
			<div class="container">
				<div class="row top">
					<!-- Se över CSS i footern -->
					<div class="col-xs-12 col-sm-6 col-md-4">

					 <!-- Widget för innehåll "Kort om oss" -->
						 <?php dynamic_sidebar("widgetfooter1");?>
					</div>
					<div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
					<!-- Widget för innehåll "Kontaktuppgifter" -->
						<?php dynamic_sidebar("widgetfooter2");?>
					</div>

					<!-- Widget "Sociala media" -->
					<div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
						<?php dynamic_sidebar("widgetfooter3");?>
					</div>
				</div>
					<!-- Widget Copyright -->
					<div class="row bottom">
						<div class="col-xs-12">
							<?php dynamic_sidebar("copyright");?>
						</div>
					</div>
				</div>
			</div>
		</footer>
	
<?php wp_footer(); ?>

</div> 

</body>
</html>