<?php
/**
 * Template Name: Tarifs
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

	<div class="<?php echo esc_attr( $container )."-tarifs"; ?>" id="content">
		<h2>Nos tarifs sont simples et compréhensif:</h2>
		<h1>CHF 100.-</h1>
		<p>de l`heure</p>
		<h4>Pour les demandes spécifiques, un devis gratuit peut être établi.</h4>
	</div><!-- #content -->

</div><!-- #full-width-page-wrapper -->

<?php
get_footer();
