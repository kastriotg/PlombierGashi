<?php
/**
 * Template Name: Accueil
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

	<div id="content">

		<div class="row">

			<div class="content-area" id="primary">

				<main class="site-main" id="main" role="main">
					<section class="description">	
							<div class="left-side">
								<h3 id="sanitare">INSTALLATION SANITAIRE</h3>
								<h3>RÉNOVATION DÉPANNAGE ENTRETIEN</h3>
								<h2><a href="tel:0229104302">022 910 43 02</a></h2>
							</div>
							<div class="right-side">
								<img src="<?php echo get_template_directory_uri(); ?>/images/home.png" alt="No image">
							</div>
					</section>
					<section id="accueil-boxes">
						<a href="<?php echo get_site_url();?>/installation-sanitaire">
							<div class="boxes-a">
								<h3>Installation Sanitaire</h3>
								<ul>
									<li>
										<i class="fas fa-check"></i> Cuisine
									</li>
									<li>
										<i class="fas fa-check"></i> Buanderie
									</li>
									<li>
										<i class="fas fa-check"></i> Salle de bains
									</li>
									<li>
										<i class="fas fa-check"></i> Bouilleur/chauffe-eau électrique
									</li>
									<li>
										<i class="fas fa-check"></i> Robinetteries  et sanitaires
									</li>
									<li>
										<i class="fas fa-check"></i> Ecoulements et canalisations
									</li>
								</ul>
							</div>
						</a>
						<a href="<?php echo get_site_url();?>/depannage">
						<div class="boxes-a">
							<h3>Dépannage</h3>
							<div id="depannage-box">
								<img src="<?php echo get_template_directory_uri(); ?>/images/24h.png" alt="No image" width="50rem">
								<p>Appelez Nous</p>
								<h2>022 910 43 02</h2>
							</div>
						</div>
						</a>
						<a href="<?php echo get_site_url();?>/tarifs-et-devis">
						<div class="boxes-a">
							<h3>Tarifs et devis</h3>
							<div id="tarifs">
								<p></p>
								<p>Nos tarifs sont simples...</p>
							</div>
						</div>
						</a>
					</section>

				</main>
				

			</div><!-- #primary -->

		</div><!-- .row end -->

	</div><!-- #content -->

</div><!-- #full-width-page-wrapper -->

<?php
get_footer();
