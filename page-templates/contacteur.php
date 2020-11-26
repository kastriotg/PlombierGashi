<?php
/**
 * Template Name: Contact
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );

if ( is_front_page() ) {
	get_template_part( 'global-templates/hero' );
}
?>

<div class="wrapper" id="full-width-page-wrapper">

	<div class="container-contact" id="content">

		<div class="row">

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main-contact" role="main">

					<div class="contact">
						<p>Contactez-nous et on se fera un plaisir de vous renseigner et de vous conseiller rapidement.</p>
						<div class="info">
							<div id="phones-mails">
								<a href="tel:0229104302"><i class="fa fa-mobile"></i> <span>022 910 43 02</span></a><br>
								<a href="tel:0787448412"><i class="fa fa-phone"></i> <span>078 744 84 12 </span></a><br>
								<a id="email" href="mailto:gashi.plombier@outlook.com"><i class="fa fa-envelope"></i> <span>gashi.plombier@outlook.com</span></a><br>
							</div>
							<div class="adress">
								<address>
									<p>Adresse Postale:</p>
									Route de Meyrin 7,
									1202 Genève,
									Suisse
								</address>
							</div>
						</div>
					</div>
					<div class="map">
						<iframe id="iframe-id" width="600" height="200" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" id="gmap_canvas" src="https://maps.google.com/maps?width=800&amp;height=200&amp;hl=en&amp;q=Route%20de%20meyrin%207%20Geneve+(Route%20de%20Meyrin%207)&amp;t=&amp;z=17&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe> <a href='https://add-map.com/'>add-map.com</a> <script type='text/javascript' src='https://maps-generator.com/google-maps-authorization/script.js?id=fa0bcd71940d4e32792cb499a1bc2a671c1bc397'></script>
					</div>
				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row end -->

	</div><!-- #content -->

</div><!-- #full-width-page-wrapper -->

<?php
get_footer();
