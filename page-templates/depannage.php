<?php
/**
 * Template Name: Depannage
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

	<div class="<?php echo esc_attr( $container )."-depannage"; ?>" id="content">
		<main class="site-main" id="main-depannage" role="main">
			<h3>Nous intervenons rapidement pour résoudre au plus vite votre problème.</h3>
			<p>L’équipe Plombier Gashi intervient avec tout le matériel de pointe nécessaire pour une intervention immédiate.</p>
			<a href="tel:0229104302"><button>Appelez Nous</button></a>
		</main><!-- #main -->
	</div><!-- #content -->

</div><!-- #full-width-page-wrapper -->

<?php
get_footer();
