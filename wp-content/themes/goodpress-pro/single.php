<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package goodpress
 */

get_header(); 

if ( function_exists( 'goodpress_set_post_views' ) ) :
	goodpress_set_post_views(get_the_ID());
endif;
?>

	<div id="primary" class="content-area">

		<div class="breadcrumbs">
			<span class="breadcrumbs-nav">
				<span class="here"><?php esc_html_e('You are here:', 'goodpress'); ?></span>
				<span class="divider"></span>
				<a href="<?php echo home_url(); ?>"><?php esc_html_e('Home', 'goodpress-pro'); ?></a>
				<span class="divider"></span>
				<span class="post-category"><?php goodpress_first_category(); ?></span>
			</span>
		</div>

		<main id="main" class="site-main" >

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', 'single' );

			// the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
