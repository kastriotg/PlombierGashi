<?php
/**
 * Template Name: Photos
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

	<div class="<?php echo esc_attr( $container ); ?>-photos" id="content">

		<div class="row">

			<div class="col-md-12 content-area" id="primary">
				<main class="site-main" id="main" role="main">
					<div id="img-photo-template">
						<img class="myImg" src="<?php echo get_site_url(); ?>/wp-content/uploads/2020/11/01-scaled.jpg" alt="" style="width:20%;max-width:300px">
						<img class="myImg" src="<?php echo get_site_url(); ?>/wp-content/uploads/2020/11/02-scaled.jpg" alt="" style="width:20%;max-width:300px">
						<img class="myImg" src="<?php echo get_site_url(); ?>/wp-content/uploads/2020/11/05.jpg" alt="" style="width:20%;max-width:300px">
						<img class="myImg" src="<?php echo get_site_url(); ?>/wp-content/uploads/2020/11/12-scaled.jpg" alt="" style="width:20%;max-width:300px">
						<img class="myImg" src="<?php echo get_site_url(); ?>/wp-content/uploads/2020/11/11-scaled.jpg" alt="" style="width:20%;max-width:300px">
						<img class="myImg" src="<?php echo get_site_url(); ?>/wp-content/uploads/2020/11/06.jpg" alt="" style="width:20%;max-width:300px">
						<img class="myImg" src="<?php echo get_site_url(); ?>/wp-content/uploads/2020/11/09-scaled.jpg" alt="" style="width:20%;max-width:300px">
						<img class="myImg" src="<?php echo get_site_url(); ?>/wp-content/uploads/2020/11/07.jpg" alt="" style="width:20%;max-width:300px">
						<img class="myImg" src="<?php echo get_site_url(); ?>/wp-content/uploads/2020/11/16.jpg" alt="" style="width:20%;max-width:300px">
						<img class="myImg" src="<?php echo get_site_url(); ?>/wp-content/uploads/2020/11/13.jpg" alt="" style="width:20%;max-width:300px">
						<img class="myImg" src="<?php echo get_site_url(); ?>/wp-content/uploads/2020/11/14.jpg" alt="" style="width:20%;max-width:300px">
						<img class="myImg" src="<?php echo get_site_url(); ?>/wp-content/uploads/2020/11/15.jpg" alt="" style="width:20%;max-width:300px">
						<img class="myImg" src="<?php echo get_site_url(); ?>/wp-content/uploads/2020/11/17.jpg" alt="" style="width:20%;max-width:300px">
						<img class="myImg" src="<?php echo get_site_url(); ?>/wp-content/uploads/2020/11/18.jpg" alt="" style="width:20%;max-width:300px">
						<img class="myImg" src="<?php echo get_site_url(); ?>/wp-content/uploads/2020/11/19-scaled.jpg" alt="" style="width:20%;max-width:300px">
						<img class="myImg" src="<?php echo get_site_url(); ?>/wp-content/uploads/2020/11/20.jpg" alt="" style="width:20%;max-width:300px">
						<img class="myImg" src="<?php echo get_site_url(); ?>/wp-content/uploads/2020/11/21-scaled.jpg" alt="" style="width:20%;max-width:300px">
						<img class="myImg" src="<?php echo get_site_url(); ?>/wp-content/uploads/2020/11/03-scaled.jpg" alt="" style="width:20%;max-width:300px">
						<img class="myImg" src="<?php echo get_site_url(); ?>/wp-content/uploads/2020/11/10-scaled.jpg" alt="" style="width:20%;max-width:300px">
						<img class="myImg" src="<?php echo get_site_url(); ?>/wp-content/uploads/2020/11/22-scaled.jpg" alt="" style="width:20%;max-width:300px">
						<img class="myImg" src="<?php echo get_site_url(); ?>/wp-content/uploads/2020/11/08-scaled.jpg" alt="" style="width:20%;max-width:300px">
						<img class="myImg" src="<?php echo get_site_url(); ?>/wp-content/uploads/2020/11/23-scaled.jpg" alt="" style="width:20%;max-width:300px">
						<img class="myImg" src="<?php echo get_site_url(); ?>/wp-content/uploads/2020/11/04-scaled.jpg" alt="" style="width:20%;max-width:300px">

					</div>
					<!-- The Modal -->
					<div id="myModal" class="modal">

						<!-- The Close Button -->
						<span class="close">&times;</span>

						<!-- Modal Content (The Image) -->
						<img class="modal-content" id="img01">

						<!-- Modal Caption (Image Text) -->
						<div id="caption"></div>
					</div>

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row end -->

	</div><!-- #content -->

</div><!-- #full-width-page-wrapper -->
	<script>
	// Get the modal
		var modal = document.getElementById("myModal");

		// Get the image and insert it inside the modal - use its "alt" text as a caption
		var img = document.getElementsByClassName("myImg")
		var modalImg = document.getElementById("img01");
		var captionText = document.getElementById("caption");
		for(let i = 0; i<img.length; i++){
			img[i].onclick = function(){
				modal.style.display = "block";
				modalImg.src = this.src;
				captionText.innerHTML = this.alt;
			}
		}

		// Get the <span> element that closes the modal
		var span = document.getElementsByClassName("close")[0];

		// When the user clicks on <span> (x), close the modal
		span.onclick = function() { 
			modal.style.display = "none";
		}
		
	</script>
<?php
get_footer();
