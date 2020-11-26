<?php
/**
 * Template Name: Sanitaire
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

				<main class="site-main" id="sanitaire-main" role="main">
				<p>L’installation de vos éléments sanitaires est à confier à des professionnel.</p>
				<p>Nous sommes expérimentés et compétents pour entretenir, installer, rénover ou encore réparer les installations sanitaires telles que :</p>
				<ul>
					<li><i class="fa fa-check"></i>Cuisine</li>
					<li>
						<a href="<?php echo get_site_url();?>/buanderie/">
							<i class="fa fa-check"></i>Buanderie
						</a>
					</li>
					<li>
						<a href="<?php echo get_site_url();?>/salle-de-douche/">
							<i class="fa fa-check"></i>Salle de douche
						</a>
					</li>
					<li>
					
						<a href="<?php echo get_site_url();?>/salle-de-bains/">
							<i class="fa fa-check"></i>Salle de bains
						</a>	
					</li>
					<li>
						<a href="<?php echo get_site_url();?>/bouilleur-chauffe-eau-electrique/">
							<i class="fa fa-check"></i>Bouilleur/chauffe-eau électrique
						</a>
					</li>
					<li>
						<a href="<?php echo get_site_url();?>/robinetteries-et-sanitaires/">
							<i class="fa fa-check"></i>Robinetteries  et sanitaires
						</a>
					</li>

					<li>
						<a href="<?php echo get_site_url();?>/installation-de-lave-linge-et-lave-vaisselle/">
							<i class="fa fa-check"></i>Installation de lave-linge et lave-vaisselle
						</a>
					</li>

					<li>
						<a href="<?php echo get_site_url();?>/ecoulements-et-canalisations/">
							<i class="fa fa-check"></i>Ecoulements et canalisations
						</a>
					</li>
				</ul>
				</main><!-- #main -->



</div><!-- #full-width-page-wrapper -->

<?php
get_footer();
