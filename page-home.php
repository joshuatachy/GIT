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
			<div class="row">
				<div class="col-md-4">
					<h4>We are Kaleidoskope</h4>
					<p>At Kaleidoskope, we design and deliver customised learning and development initiatives for leaders of industry. We understand that organisation cultures, as well as the challenges and aspirations of the individual professional are multifaceted, ever-changing and unique.</p>
					<p class="cta"><a href="http://www.kaleidoskope.co/about-kaleidoskope/">READ more</a></p>
				</div>
				<div class="col-md-4">
					<h4>The Kaleidoskope-7</h4>
					<p>Upon assessing the challenges you’re tackling, and appreciating the outcome you envision, a bespoke programme is designed for you based on The Kaleidoskope-7. The Kaleidoskope-7 identifies the 7 key challenge areas most commonly faced by top-level executives.</p>
					<p class="cta"><a href="http://www.kaleidoskope.co/what-we-can-do-for-you/the-kaleidoskope-7/">READ more</a></p>
				</div>
				<div class="col-md-4">
					<h4>Our Perspective</h4>
					<p>We, at Kaleidoskope, believe that every client is unique and one size should not fit all. We believe in letting you mix it up with customised programmes that help you and your team build skills that meet your objectives, and ultimately propel your organisation to new heights.</p>
					<p class="cta"><a href="http://www.kaleidoskope.co/what-we-can-do-for-you/">READ more</a></p>
				</div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>