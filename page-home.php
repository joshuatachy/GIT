<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>
	
	<div class="container main-slider">
		<?php echo do_shortcode('[rev_slider alias="kalei_main_slider"]'); ?>
	</div>

	<div class="container">
		<!--
		<div class="videoscribe">
			<div class="vs-inner">
				<img src="<?php echo get_template_directory_uri() ?>/images/videoscribe.png" alt="Videoscribe">
			</div>
		</div>
			-->

		<div class="three-panes">

		</div>
	</div>

<?php get_footer(); ?>