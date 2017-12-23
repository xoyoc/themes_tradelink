		<div class="fh5co-footer-style-3">
			<div class="container">
				<div class="row justify-content-md-center">
					<div class="col-md-3 col-sm-6 my-auto fh5co-footer-widget wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
						<div class="fh5co-logo">
							<img src="<?php echo get_template_directory_uri(); ?>/images/Logo-Tradelink-Blanco.svg" alt="Logotipo Tradelink">
						</div>
						<p class="fh5co-copyright">En Tradelink Pacífico somos una agencia aduanal de servicio</p>
					</div>
					<div class="col-md-3 col-sm-6 my-auto fh5co-footer-widget wow fadeInUp text-center" data-wow-duration="1s" data-wow-delay=".8s">
						<address>Calle Tamarindos No. 2 Colonia 2do Sector de Fidelac Cd. Lázaro Cárdenas, Michoacán, C.P. 60950</address>
						<p><a href="tel:+7535375973">Tel: (753) 537-5973</a></p>
					</div>
					<div class="clearfix visible-sm-block"></div>
					<div class="col-md-3 col-sm-6 my-auto fh5co-footer-widget wow fadeInUp text-center" data-wow-duration="1s" data-wow-delay="1.1s">
						<h3 class="pb-2" style="color: white  !important;" >Enlaces importantes</h3>
						<ul class="fh5co-links">
							<li><a href="http://www.puertolazarocardenas.com.mx">apilac</a></li>
							<li><a href="http://www.aaalac.mx">aaalac</a></li>
							<li><a href="http://www.caaarem.mx">caaarem</a></li>
							<li><a href="http://www.aduanalzc.gob.mx/">lázaro cárdenas</a></li>
							<li><a href="http://www.lazarocardenasportcommunity.com">port community</a></li>
						</ul>
					</div>
					<div class="col-md-3 col-sm-6 my-auto fh5co-footer-widget wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.4s">
						<?php 
							$args = array(
								'theme_location' => 'social-menu',
								'container' => 'ul',
								'container_class' => 'social',
								'container_id' => 'menu-social',
								'link_before' => '<span class="sr-text">',
								'link_after' => '</span>'
							);
							wp_nav_menu( $args );
						 ?>
						<p></p>
					</div>
				</div>
			</div>
		</div>
		<!-- END footer -->
		
	</div>
	<!-- END page-->
	<?php wp_footer(); ?>
	<script>
		new WOW().init();
	</script>
	</body>
</html>